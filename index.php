<?php

    require_once "Configuration.php";
    require_once "vendor/autoload.php";

    ob_start();

    use App\Core\DatabaseConfiguration;
    use App\Core\DatabaseConnection;
    use App\Core\Router;

    use App\Models\UserModel;
    use App\Models\CategoryModel;
    use App\Models\AuctionModel;
    
    use App\Controllers\MainController;

    $databaseConfiguration = new DatabaseConfiguration(
        Configuration::DATABASE_HOST,
        Configuration::DATABASE_USER,
        Configuration::DATABASE_PASS,
        Configuration::DATABASE_NAME
    );

    //define('BASE', Configuration::BASE);

    $databaseConnection = new DatabaseConnection($databaseConfiguration);

    $url = strval(filter_input(INPUT_GET, 'URL'));
    $httpMethod = filter_input(INPUT_SERVER, 'REQUEST_METHOD');

    $router = new Router();
    $routes = require_once 'Routes.php';

    foreach($routes as $route){
        $router->add($route);
    }

    $route = $router->find($httpMethod, $url);
    $arguments = $route->extractArguments($url);

    $fullControllerName = "\\App\\Controllers\\". $route->getControllerName(). "Controller";
    $controller = new $fullControllerName($databaseConnection);

    $sessionStorageClassName = Configuration::SESSION_STORAGE;
    $sessionStorageConstructorArguments = Configuration::SESSION_STORAGE_DATA;
    $sessionStorage = new $sessionStorageClassName(...$sessionStorageConstructorArguments);

    $session = new App\Core\Session\Session($sessionStorage, Configuration::SESSION_LIFETIME);

    $controller->setSession($session);
    $controller->getSession()->reload();


    call_user_func_array([$controller, $route->getMethodName()], $arguments);
    $controller->getSession()->save();

    $data = $controller->getData();

    if($controller instanceof \App\Core\ApiController){
        ob_clean();
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($data);
        exit;
    }

    $loader = new Twig_Loader_Filesystem("./views");

    $twig = new Twig_Environment($loader, [
        'cache' => 'twig-cache',
        'auto_reload' => true,
        'debug' => true,
    ]);

    $twig->addExtension(new Twig_Extension_Debug());

    echo $twig->render(
        $route->getControllerName() .'/'. $route->getMethodName(). '.html',
        $data
    );
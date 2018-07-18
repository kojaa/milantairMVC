<?php
    
    require_once "Configuration.php";
    require_once "vendor/autoload.php";

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

    define('BASE', Configuration::BASE);

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
    
    // print_r($route);
    // print_r($arguments);
    // exit();

    $fullControllerName = "\\App\\Controllers\\". $route->getControllerName(). "Controller";
    $controller = new $fullControllerName($databaseConnection);
    call_user_func_array([$controller, $route->getMethodName()], $arguments);
    $data = $controller->getData();

    // foreach($data as $name => $value){
    //     $$name = $value;
    // }

    // require_once "views/". $route->getControllerName() ."/". $route->getMethodName().".php";

    $loader = new Twig_Loader_Filesystem("./views");

    $twig = new Twig_Environment($loader, [
        'cache' => 'twig-cache',
        'auto_reload' => true
    ]);

    echo $twig->render(
        $route->getControllerName() .'/'. $route->getMethodName(). '.html',
        $data
    );
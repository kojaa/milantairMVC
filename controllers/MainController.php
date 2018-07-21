<?php

    namespace App\Controllers;

    use App\Core\DatabaseConfiguration;
    use App\Core\DatabaseConnection;
    use App\Core\Controller;

    use App\Models\UserModel;
    use App\Models\CategoryModel;
    use App\Models\AuctionModel;

    use Configuration;

class MainController extends Controller {

    public function home(){

        $categoryModel = new CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();
        $this->set('categories', $categories);

        $auctionModel = new AuctionModel($this->getDatabaseConnection());
        $auctionModel->add([

            'title' => 'naslov aukcije',
            'description' => 'opis aukcije......',
            'starting_price' => '100.4',
            
            'starts_at' => '2018-04-11 10:00:11',
            
            'ends_at' => '2018-04-18 10:00:11',
            
            'is_active' => 1,
            'category_id' => 2

        ]);
    }
}


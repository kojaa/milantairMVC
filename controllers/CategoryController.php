<?php

    namespace App\Controllers;

    use App\Core\DatabaseConfiguration;
    use App\Core\DatabaseConnection;
    use App\Core\Controller;

    use App\Models\UserModel;
    use App\Models\CategoryModel;
    use App\Models\AuctionModel;

    use Configuration;

class CategoryController extends Controller {

    public function show($id){

        $categoryModel = new CategoryModel($this->getDatabaseConnection());
        $category = $categoryModel->getById($id);

        if(!$category){
            header("Location:". Configuration::BASE);
            exit;
        }

        $this->set('category', $category);

        $auctionModel = new AuctionModel($this->getDatabaseConnection());
        $auctionsInCategory = $auctionModel->getAllByCategoryId($id);
        $this->set('auctionsInCategory', $auctionsInCategory);
    }
}
<?php

    namespace App\Controllers;

    use App\Core\DatabaseConfiguration;
    use App\Core\DatabaseConnection;
    use App\Core\Controller;

    use App\Models\UserModel;
    use App\Models\CategoryModel;
    use App\Models\AuctionModel;

class CategoryController extends Controller {

    public function show($id){

        $categoryModel = new CategoryModel($this->getDatabaseConnection());
        $category = $categoryModel->getById($id);

        if(!$category){
            header("Location: http://localhost/milantair/MVC/");
            exit;
        }

        $this->set('category', $category);

        $auctionModel = new AuctionModel($this->getDatabaseConnection());
        $auctionsInCategory = $auctionModel->getAllByAuctionId($id);
        $this->set('auctionsInCategory', $auctionsInCategory);
    }
}
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

        //$this->getSession()->put('neki_kljuc', 'neka_vrednost'. rand(10, 99));

        $staraVrednost = $this->getSession()->get('brojac', 0);
        $novaVrednost = $staraVrednost + 1;
        $this->getSession()->put('brojac', $novaVrednost);

        $this->set('podatak', $novaVrednost);

        //$this->getSession()->clear();
    }
}


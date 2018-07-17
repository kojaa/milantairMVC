<?php

    namespace App\Controllers;

    use App\Core\DatabaseConfiguration;
    use App\Core\DatabaseConnection;
    use App\Core\Controller;

    use App\Models\UserModel;
    use App\Models\CategoryModel;
    use App\Models\AuctionModel;
    use App\Models\OfferModel;

class AuctionController extends Controller {

    public function show($id){
        $auctionModel = new AuctionModel($this->getDatabaseConnection());
        $auction = $auctionModel->getById($id);

        if(!$auction){
            header("Location: http://localhost/milantair/MVC/");
            exit;
        }

        $this->set('auction', $auction);

        $lastOfferPrice = $this->getLastOfferPrice($id);
        if(!$lastOfferPrice) {
            $lastOfferPrice = $auction->starting_price;
        }
        $this->set('lastOfferPrice', $lastOfferPrice);
    }


    private function getLastOfferPrice($auctionId){
        $offerModel = new OfferModel($this->getDatabaseConnection());
        $offers = $offerModel->getAllByAuctionId($auctionId);

        $lastPrice = 0;
        foreach($offers as $offer){
            if($lastPrice < $offer->price) {
                $lastPrice = $offer->price;
            }
        }
        return $lastPrice;

    }
}
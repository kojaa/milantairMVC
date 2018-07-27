<?php

    namespace App\Controllers;

    use App\Core\DatabaseConfiguration;
    use App\Core\DatabaseConnection;
    use App\Core\Controller;

    use App\Models\UserModel;
    use App\Models\CategoryModel;
    use App\Models\AuctionModel;
    use App\Models\OfferModel;
    use App\Models\AuctionViewModel;

    use Configuration;

class AuctionController extends Controller {

    public function show($id){
        $auctionModel = new AuctionModel($this->getDatabaseConnection());
        $auction = $auctionModel->getById($id);

        if(!$auction){
            header("Location:". Configuration::BASE);
            exit;
        }

        $this->set('auction', $auction);

        $lastOfferPrice = $this->getLastOfferPrice($id);
        if(!$lastOfferPrice) {
            $lastOfferPrice = $auction->starting_price;
        }
        $this->set('lastOfferPrice', $lastOfferPrice);

        $auctionViewModel = new AuctionViewModel($this->getDatabaseConnection());

        $ipAddress  = filter_input(INPUT_SERVER, 'REMOTE_ADDR');
        $user_agent = filter_input(INPUT_SERVER, 'HTTP_USER_AGENT');

        $auctionViewModel->add(
            [
                'auction_id' => $id,
                'ip_address' => $ipAddress,
                'user_agent' => $user_agent
            ]
        );
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

    private function normaliseKeywords(string $keywoards): string{
        $keywoards = trim($keywoards);
        $keywoards = \preg_replace('/ +/', ' ',$keywoards);
        return $keywoards;
    }

    public function postSearch() {
        $auctionModel = new AuctionModel($this->getDatabaseConnection());

        $q = filter_input(INPUT_POST, 'q', FILTER_SANITIZE_STRING);

        $keywords = $this->normaliseKeywords($q);

        $auctions = $auctionModel->getAllBySearch($q);

        $this->set('auctions', $auctions);
    }
}
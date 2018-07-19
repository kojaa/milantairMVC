<?php

    namespace App\Models;

    use App\Core\Model;

class OfferModel extends Model {

    public function getAllByAuctionId(int $auctionId): array{
      $items =  $this->getAllByFieldName('auction_id', $auctionId);

      usort($items, function($a, $b){
          return strcmp($a->created_at, $b->created_at);
      });

      return $items;
    }

}
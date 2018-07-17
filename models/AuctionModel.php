<?php

    namespace App\Models;

    use App\Core\DatabaseConnection;
    use App\Models\CategoryModel;

class AuctionModel {

    private $dbc;

    public function __construct(DatabaseConnection &$dbc){
        $this->dbc = $dbc;
    }

    public function getById(int $auctionId){

        $sql = "SELECT * FROM auction WHERE auction_id = ?";
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute([$auctionId]);
        $auction = NULL;
        if($res){
            $auction = $prep->fetch(\PDO::FETCH_OBJ);
        }
        return $auction;

    }

    public function getAll(): array{

        $sql = "SELECT * FROM auction";
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute();
        $auctions = [];
        if($res){
            $auctions = $prep->fetchAll(\PDO::FETCH_OBJ);
        }
        return $auctions;
    }

    public function getAllByAuctionId(int $auctionId): array{

        $sql = "SELECT * FROM auction WHERE auction_id = ?";
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute([$auctionId]);
        $auctions = [];
        if($res){
            $auctions = $prep->fetchAll(\PDO::FETCH_OBJ);
        }
        return $auctions;
    }

}
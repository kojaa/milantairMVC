<?php

    namespace App\Models;

    use App\Core\Model;
    use App\Core\Field;

class AuctionViewModel extends Model {

    protected function getFields(): array {
        return [
            'auction_id' => new Field('|^[1-9][0-9]{0,9}$|', true),
            'ip_address' => new Field('|^[0-9]{1,3}(\.[0-9]{1,3}){3}$|', true),
            'user_agent' => new Field('|^.{0,255}$|', true)
        ];
    }

    public function getAllByAuctionId(int $auctionId): array{
        return $this->getAllByFieldName('auction_id', $auctionId);
    }

    public function getAllByIpAddress(string $ipAdress): array{
        return $this->getAllByFieldName('ip_address', $ipAdress);
    }
}
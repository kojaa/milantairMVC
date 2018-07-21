<?php

    namespace App\Models;

    use App\Core\Model;
    use App\Core\Field;

class AuctionViewModel extends Model {

    protected function getFields(): array {
        return [
            'auction_view_id'   => Field::readonlyInteger(20),
            'created_at'        => Field::readonlyDateTime(),
            'auction_id'        => Field::editableInteger(10),
            'ip_address'        => Field::editableIpAddress(),
            'user_agent'        => Field::editableString(255)
        ];
    }

    public function getAllByAuctionId(int $auctionId): array{
        return $this->getAllByFieldName('auction_id', $auctionId);
    }

    public function getAllByIpAddress(string $ipAdress): array{
        return $this->getAllByFieldName('ip_address', $ipAdress);
    }
}
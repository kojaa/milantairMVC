<?php

    namespace App\Models;

    use App\Core\Model;
    use App\Core\Field;

    use App\Validators\NumberValidator;
    use App\Validators\DateTimeValidator;
    use App\Validators\StringValidator;

class AuctionViewModel extends Model {

    protected function getFields(): array {
        return [
            'auction_view_id' => new Field((new NumberValidator())->setIntegerLength(11), false),
                'created_at'      => new Field((new DateTimeValidator())->allowDate()->allowTime() , false),

                'auction_id'      => new Field((new NumberValidator())->setIntegerLength(11)),
                'ip_address'      => new Field((new StringValidator(7, 255)) ),
                'user_agent'      => new Field((new StringValidator(0, 255)) )
        ];
    }

    public function getAllByAuctionId(int $auctionId): array{
        return $this->getAllByFieldName('auction_id', $auctionId);
    }

    public function getAllByIpAddress(string $ipAdress): array{
        return $this->getAllByFieldName('ip_address', $ipAdress);
    }
}
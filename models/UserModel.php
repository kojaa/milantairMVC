<?php

    namespace App\Models;

    use App\Core\Model;
    use App\Core\Field;
    
    use App\Validators\NumberValidator;
    use App\Validators\DateTimeValidator;
    use App\Validators\StringValidator;
    use App\Validators\BitValidator;
    
class UserModel extends Model {

    protected function getFields(): array {
        return [
            'user_id'         => new Field((new NumberValidator())->setIntegerLength(11), false),
            'created_at'      => new Field((new DateTimeValidator())->allowDate()->allowTime() , false),

            'username'        => new Field((new StringValidator(0, 64)) ),
            'password_hash'   => new Field((new StringValidator(0, 128)) ),
            'email'           => new Field((new StringValidator(0, 255)) ),
            'forename'        => new Field((new StringValidator(0, 64)) ),
            'surname'         => new Field((new StringValidator(0, 64)) ),
            'is_active'       => new Field((new BitValidator()))
        ];
    }

    public function getByUsername(string $username){
        $this->getByFieldName('username', $username);
    }

}
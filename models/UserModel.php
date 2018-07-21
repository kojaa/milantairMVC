<?php

    namespace App\Models;

    use App\Core\Model;
    use App\Core\Field;
    
class UserModel extends Model {

    protected function getFields(): array {
        return [
            'user_id'          => Field::readonlyInteger(11),
            'created_at'       => Field::readonlyDateTime(),

            'username'         => Field::editableString(64),
            'password'         => Field::editableString(128),
            'email'            => Field::editableString(255),
            'forename'         => Field::editableString(64),
            'lastname'         => Field::editableString(64),
            'is_active'        => Field::editableBit(),
        ];
    }

    public function getByUsername(string $username){
        $this->getByFieldName('username', $username);
    }

}
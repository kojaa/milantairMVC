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
    }

    public function getRegister() {

    }

    public function postRegister() {
        $email     = \filter_input(INPUT_POST, 'reg_email', FILTER_SANITIZE_EMAIL);
        $forename  = \filter_input(INPUT_POST, 'reg_forename', FILTER_SANITIZE_STRING);
        $surname   = \filter_input(INPUT_POST, 'reg_surname', FILTER_SANITIZE_STRING);
        $username  = \filter_input(INPUT_POST, 'reg_username', FILTER_SANITIZE_STRING);
        $password1 = \filter_input(INPUT_POST, 'reg_password_1', FILTER_SANITIZE_STRING);
        $password2 = \filter_input(INPUT_POST, 'reg_password_2', FILTER_SANITIZE_STRING);

        // print_r([
        //     $email   , 
        //     $forename ,
        //     $surname  ,
        //     $username ,
        //     $password1,
        //     $password2
        // ]);
        if($password1 !== $password2){
            $this->set('message','Doslo je do greske: niste uneli dva puta istu lozinku');
            return;
        }
        
       if(! (new \App\Validators\StringValidator())
        ->setMinLength(7)
        ->setMaxLength(120)
        ->isValid($password1)) {
            $this->set('message','Doslo je do greske: lozinka nije ispravnog formata');
            return;
        }

        $userModel = new \App\Models\UserModel($this->getDatabaseConnection());

        $user = $userModel->getByFieldName('email', $email);
        if($user) {
            $this->set('message','Doslo je do greske: korisnik sa '. $email .' emailom vec postoji');
            return;
        }

        $user = $userModel->getByFieldName('username', $username);
        if($user) {
            $this->set('message','Doslo je do greske: korisnik sa '. $username .' korisnickim imenom vec postoji');
            return;
        }
        
        $passwordHash = \password_hash($password1, PASSWORD_DEFAULT);

        $userId = $userModel->add([
            'forename' => $forename,
            'surname'  => $surname,
            'email'    => $email,
            'username' => $username,
            'password' => $passwordHash
        ]);

        if(!$userId) {
            var_dump($userId);
            $this->set('message','Doslo je do greske: registracija korisnika nije uspela');
            return;
        }

        $this->set('message', 'Napravnjen je novi nalog, sada mozete da se prijavite');
    }
}


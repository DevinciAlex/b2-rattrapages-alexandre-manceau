<?php

require_once __DIR__ . '/../Models/UserModel.php';
require_once __DIR__ . '/../Repositories/UserRepository.php';


class UserController
{
    private UserRepository $repo;

    public function __construct(UserRepository $repo) {
        $this->repo = $repo;
    }

        public function CreateUser(): void
       {  

            session_start();

            $user = new User(
                $_POST['Firstname'],
                $_POST['Lastname'],
                $_POST['Address'],
                $_POST['City'],
                $_POST['State'],
                $_POST['Email'],
                $_POST['Price'] ?? random_int(1, 100)
            );

            $this->repo->Create($user);
            
            $_SESSION['user'] = $user;
            
            header('Location: Views/Commande.php');
            exit;

        }
}

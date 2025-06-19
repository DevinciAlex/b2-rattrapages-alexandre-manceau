<?php

require_once __DIR__ . '/../Models/UserModel.php';


class UserController
{
      public function handleForm(): void
    {  
        $user = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User(
                $_POST['Firstname'],
                $_POST['Lastname'],
                $_POST['Address'],
                $_POST['City'],
                $_POST['State'],
                $_POST['Email']
            );

            $randomPrice = random_int(1, 100);

            require_once __DIR__ . '/../Views/commande.php';
        }
        else {
            require_once __DIR__ . '/../Views/form.php';
        }
    }
}

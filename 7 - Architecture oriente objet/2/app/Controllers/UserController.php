<?php

require_once __DIR__ . '/../Models/UserModel.php';
require_once __DIR__ . '/../Repositories/UserRepository.php';


class UserController
{
    private UserRepository $repo;

    public function __construct(UserRepository $repo) {
        $this->repo = $repo;
    }

    public function listUsers()    
    {
        return $users = $this->repo->getAllUsers();
    }
}

?>
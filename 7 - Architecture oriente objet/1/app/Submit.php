<?php
require_once __DIR__ . '/utils/bdd.php';
require_once __DIR__ . '/Models/UserModel.php';
require_once __DIR__ . '/Repositories/UserRepository.php';
require_once __DIR__ . '/Controllers/UserController.php';

echo "commande prise en compte...<br>";
$db = new BDD();
$repo = new UserRepository($db);
$controller = new UserController($repo);
$controller->CreateUser();
?>
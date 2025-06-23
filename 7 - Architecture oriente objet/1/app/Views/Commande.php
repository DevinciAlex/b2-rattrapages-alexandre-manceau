<?php
require_once __DIR__ . '/../Models/UserModel.php';

session_start();

$user = $_SESSION['user'] ?? null;

if ($user) {
    echo "Prix aléatoire généré : " . $user->getPrice() . " €";
} else {
    echo "Aucun utilisateur trouvé.";
}
?>

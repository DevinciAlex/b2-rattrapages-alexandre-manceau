<?php

require_once __DIR__ . '/../utils/bdd.php';
require_once __DIR__ . '/../Models/UserModel.php';
require_once __DIR__ . '/../Repositories/UserRepository.php';
require_once __DIR__ . '/../Controllers/UserController.php';


$db = new BDD();
$repo = new UserRepository($db);
$controller = new UserController($repo);
$users=$controller->listUsers();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des utilisateurs</title>
</head>
<body>
    <h1>Liste des utilisateurs</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Email</th>
            <th>Prix</th>
            <th>Statut</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user->getFirstname() . ' ' . $user->getLastname()) ?></td>
                <td><?= htmlspecialchars($user->getAddress()) ?></td>
                <td><?= htmlspecialchars($user->getCity()) ?></td>
                <td><?= htmlspecialchars($user->getEmail()) ?></td>
                <td><?= htmlspecialchars($user->getPrice()) ?> €</td>
                <td><?= htmlspecialchars($user->getStatus()) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

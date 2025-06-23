<?php
require_once __DIR__ . '/../Models/UserModel.php';
require_once __DIR__ . '/../utils/bdd.php';

class UserRepository {
    private BDD $db;
    public function __construct(BDD $db) {
        $this->db = $db;
    }

    public function Create(User $user): bool {
        $stmt = $this->db->getConnection()->prepare("CALL CreateUser(:firstname, :lastname, :address, :city, :state, :email, :price)");

        return $stmt->execute([
        ':firstname' => $user->getFirstname(),
        ':lastname'  => $user->getLastname(),
        ':address'   => $user->getAddress(),
        ':city'      => $user->getCity(),
        ':state'     => $user->getState(),
        ':email'     => $user->getEmail(),
        ':price'     => $user->getPrice(),
        ]);
    }
}

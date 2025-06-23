<?php
require_once __DIR__ . '/../Models/UserModel.php';
require_once __DIR__ . '/../utils/bdd.php';

class UserRepository {
    private BDD $db;
    public function __construct(BDD $db) {
        $this->db = $db;
    }

    public function getAllUsers(): array
    {
    
        $stmt = $this->db->getConnection()->query("
            SELECT 
                u.Firstname, 
                u.Lastname, 
                u.Address, 
                u.City, 
                u.State, 
                u.Email, 
                u.Price, 
                s.status AS Status
            FROM users u
            JOIN status s ON u.Idstatus = s.id
        ");
        $users = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $users[] = new User(
                $row['Firstname'],
                $row['Lastname'],
                $row['Address'],
                $row['City'],
                $row['State'],
                $row['Email'],
                $row['Price'],
                $row['Status'] // Ici, on passe bien le texte du statut !
            );
        }

        return $users;
    }

}



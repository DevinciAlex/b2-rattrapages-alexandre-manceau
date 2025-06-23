<?php


require_once __DIR__ . '/../../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../../');
$dotenv->load();

class BDD{
  private $db = null;
 
  public function __construct()
  {
    if($this->db == null){
      $this->connect();
    }
  }
  
  private function connect():void
  {
    $this->db = new PDO(
      'mysql:host='. $_ENV['db_host'] .';dbname='. $_ENV['db_name'],
      $_ENV['db_user'],
      $_ENV['db_pwd']
    );
  }

  public function getConnection(): PDO {
    return $this->db;
  }

}

?>
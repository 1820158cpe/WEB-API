<?php

class db {

//declaration of host, database name, and database password
private $host = "https://embedded-1820158.000webhostapp.com";
private $db_name = "id21003539_iskalamunay";
private $db_user = "id21003539_iskalamunayy";
private $db_pass = "Iskalamunay123!";

public $conn;


//initiate connection to database
public function get_connection() {
$this->conn = null;

try {
$this->conn = new PDO ("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass);
$this->conn->exec("set names utf8");
echo "Database connected";

} catch (PDOException $e) {
echo "Database could not be connected: " . $e ->getMessage();
}

return $this->conn;
}
}


?>
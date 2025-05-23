<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'comedor_comunitario';
    private $username = 'root';
    private $password = '12345';
    private $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            error_log("Error de conexión: " . $exception->getMessage());
        }

        return $this->conn;
    }
}
?>
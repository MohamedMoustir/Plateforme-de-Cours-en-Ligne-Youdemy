<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'youdemy');

class Database
{
    private $host = HOST;
    private $username = USER;
    private $password = PASSWORD;
    private $database = DATABASE;
    protected $pdo;
    public $error;

    public function __construct()
    {
        $this->db_connect();
    }

    public function db_connect()
    {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database};charset=utf8mb4";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->error;
        } catch (PDOException $e) {
            $this->error = "Connection failed: " . $e->getMessage();
            echo $this->error;
        }
    }

    public function getPdo()
    {
        return $this->pdo;

    }
    public function closeConnection()
    {
        $this->pdo = null;
    }
}
?>
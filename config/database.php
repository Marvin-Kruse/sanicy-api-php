<?php 
    class Database {
        private $host = "127.0.0.1";
        private $database_name = "Nexo_Scorfy54485_sanicy";
        private $username = "Nexo_Scorfy54485_nextjs";
        private $password = "^4H9ru44s";
        public $conn;
        public function getConnection(){
            $this->conn = null;
            try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            }catch(PDOException $exception){
                echo "Database could not be connected: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }  
?>
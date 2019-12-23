<?php
    class DBconfig {
        private $hostname = 'localhost';
        private $username = 'root';
        private $password = '';
        private $dbname = 'CrawlerCurlMVC';

        private $conn = null;
        private $result = null;

        function __construct() {
            $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
            if(!$this->conn) {
                echo "Ket noi that bai";
                exit();
            } else {
                mysqli_set_charset($this->conn, 'utf8');
            }
            return $this->conn;
        }
    }
?>

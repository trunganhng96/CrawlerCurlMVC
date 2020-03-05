<?php
    class Model {
        protected $hostname = 'localhost';
        protected $username = 'root';
        protected $password = '';
        protected $dbname = 'CrawlerCurlMVC';
                                               
        public $conn = null;
        public $result = null;

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

        // thuc thi cau lenh truy van
        function execute($sql) {
            $this->result = $this->conn->query($sql);
            return $this->result;
        }

        // lay du lieu
        function getData() {
            if( isset($this->result) ) {
                $data = mysqli_fetch_assoc($this->result);
            } else {
                $data = 0;
            }
            return $data;
        }

        // lay toan bo du lieu
        function getAllData($data) {
            $sql = "SELECT * FROM savedb";
            $this->execute($sql);
            if($this->num_rows() == 0) {
                $data = 0;
            } else {
                while( $datas = $this->getData() ) {
                    $data[] = $datas;
                }
            }
            return $data;
        }

        // function getEachData() {
        //     if( isset($_GET['id']) ) {
        //         $id = $_GET['id'];
        //         $sql = "SELECT savedb_title, savedb_content, savedb_date FROM savedb WHERE savedb_id = {$id}";
        //     }
        //     $this->execute($sql);
        //     if ($this->num_rows() == 0) {
        //         $data = 0;
        //     }else {
        //         while( $row = $this->getData() ) {
        //             $data[] = $row;
        //             return $data = $row["savedb_title"] . $row["savedb_content"] . $row["savedb_date"] . "<br>" ;
        //         }
        //     }
        // }

        // dem so ban ghi
        function num_rows() {
            if( isset($this->result) ) {
                $num = mysqli_num_rows($this->result);
            }else {
                $num = 0;
            }
            return $num;
        }
        
        // them du lieu
        function insertData($source, $title, $content, $date) {
            $sql = "INSERT INTO savedb(savedb_link, savedb_title, savedb_content, savedb_date) VALUES('$source', '$title', '$content', '$date')";
            return $this->execute($sql);
        } 
    }
?>
<?php
    class Model extends DBconfig {
        // thuc thi cau lenh truy van
        function execute($sql) {
            $this->result = $this->conn->query($sql);
            return $this->result;
        }

        // lay du lieu
        function getData() {
            if($this->result) {
                $data = mysqli_fetch_array($this->result);
            } else {
                $data = 0;
            }
            return $data;
        }

        // lay toan bo du lieu
        function getAllData() {
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

        // dem so ban ghi
        function num_rows() {
            if($this->result) {
                $num = mysqli_num_rows($this->result);
            }else {
                $num = 0;
            }
            return $num;
        }

        // them du lieu
        function insertData($id, $source, $title, $content, $date) {
            $sql = "INSERT INTO savedb(savedb_id, savedb_link, savedb_title, savedb_content, savedb_date)VALUES(null, '$source', '$title', '$content', '$date')";
            return $this->execute($sql);
        } 

        // try {
        //     $this->db = $db;
        // } catch (PDOException $e) {
        //     exit('Database connection could not be established.');
        // }
    }
?>
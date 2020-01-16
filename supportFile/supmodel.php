<?php
    function getEachData() {
        $sql = "SELECT savedb_id, savedb_title FROM savedb";
        $this->execute($sql);
        if ($this->num_rows() == 0) {
            $data = 0;
        }else if($this->num_rows() > 0) {
            while( $row = $this->getData() ) {
        ?>
            <a href = "?id=<?= $row['savedb_id'] ?>"> <?= $row['savedb_title'] ?> </a> <br>
        <?php
            }
        }else {
            echo "No Data";
        }

        if( isset($_GET['id']) ) {
            $id = $_GET['id'];
            $sql = "SELECT savedb_title, savedb_content, savedb_date FROM savedb WHERE savedb_id = {$id}";
            $this->execute($sql);
            if ($this->num_rows() == 0) {
                $data = 0;
            }else {
                while( $row = $this->getData() ) {
                    $data[] = $row;
                    return $data = $row["savedb_title"] . $row["savedb_content"] . $row["savedb_date"] . "<br>" ; 
                }
            }
        }
    }
?>



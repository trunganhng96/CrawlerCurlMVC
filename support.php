if ($this ->num_rows() > 0) {
                while( $row = ($this->result)->getData() ) {
            ?>
                <a href = "?id=<?= $row['savedb_id'] ?>"> <?= $row['savedb_title'] ?> </a> <br>
            <?php
                }
            }else {
            echo "khong co du lieu";
            }
            if( isset($_GET['id']) ) {
                $id = $_GET['id'];
                $sql = "SELECT savedb_title, savedb_content, savedb_date FROM savedb WHERE savedb_id = {$id}";
                $this->execute($sql);
                if ($this->num_rows() == 0) {
                    $data = 0;
                }else {
                    while( $row = ($this->result)->getData($id) ) {
                        $data[] = $row;
                    }
                }
            return $data;
            }
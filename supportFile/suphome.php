<?php
    function showDataDetail() {
        // lay du lieu theo ID
        $db = new Model();
        $data = $db->getEachData();

        // render detail.php
        $this->view("detail", $data);
    }


    if( isset($_POST['submit']) ) {
        $curl = new Crawler();
        if( isset($_POST['getLink']) ) {
            $curl->getUrl($_POST['getLink']);
        }

        if( isset($curl->url) ) {
            $splitUrl = explode('://', $curl->url);
            if( isset($splitUrl[1]) ) {
                $splitString = explode('/', $splitUrl[1]);
            } 
        }
        switch($splitString[0]) {
            case "vnexpress.net" : {
                $info = new Vnexpress();
            break;
            }
            case "dantri.com.vn" : {
                $info = new Dantri();
            break;
            }
            case "vietnamnet.vn" : {
                $info = new Vietnamnet();
            break;
            }
        }
        if( isset($info) ) {
            $info->getUrl($_POST['getLink']);
            $info->crawler();
            $info->regexData();
            echo $info->title;
            echo "<br>";
            print_r( implode("", $info->content) );
            echo "<br>";
            echo $info->date; 
        }
    }
?>
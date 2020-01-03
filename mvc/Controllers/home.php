<?php
include './mvc/Libs/crawler.php';
include_once './mvc/Libs/vnexpress.php';
include_once './mvc/Libs/vietnamnet.php';
include_once './mvc/Libs/dantri.php';
include_once './mvc/Models/model.php';

    class Home extends Controller {
        function showData() {
            // render link.php
            $this->view("link");
            
            // xu ly url
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

                // them du lieu vao database
                $db = new Model();
                $data = $db->insertData($info->source, $info->title, implode("", $info->content), $info->date);
            }
        }

        function showDataTable() {
            // lay du lieu tu database
            $db = new Model();
            $data = $db->getAllData();

            // render list.php 
            $this->view("list", $data);
        }

        // function showDataDetail() {
        //     $db = new Model();

        //     $this->view("detail");
        // }
    }
?>

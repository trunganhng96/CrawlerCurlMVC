<?php
// namespace mvc\Controllers;

// use mvc\Libs\Crawler;
// use mvc\DesignPatterns\DantriFactory;
// use mvc\DesignPatterns\Dantri;
// use mvc\Models\Model;
// use mvc\Core\Application;
// use mvc\Core\Controller;

include './mvc/Libs/crawler.php';
include_once './mvc/Models/model.php';
// include_once './mvc/DesignPatterns/DPtest.php';
include_once './mvc/DesignPatterns/factory.php';
include_once './mvc/DesignPatterns/Pages/Dantri.php';
include_once './mvc/DesignPatterns/Pages/Vnexpress.php';
include_once './mvc/DesignPatterns/Pages/Vietnamnet.php';

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
                    case "dantri.com.vn" : {
                        $pagesFactory = new DantriFactory();
                        $pagesFactory->makeIgetData();
                        $pages = new Dantri();
                    break;
                    }
                    case "vnexpress.net" : {
                        $pagesFactory = new VnexpressFactory();
                        $pagesFactory->makeIgetData();
                        $pages = new Vnexpress();
                    break;
                    }
                    case "vietnamnet.vn" : {
                        $pagesFactory = new VietnamnetFactory();
                        $pagesFactory->makeIgetData();
                        $pages = new Vietnamnet();
                    break;
                    }
                }

                if( isset($pages) ) {
                    $pages->getUrl($_POST['getLink']);
                    $pages->crawler();
                    echo $pages->getTitle();
                    echo "<br>";
                    print_r( implode("", $pages->getContent() ) );
                    echo "<br>";
                    echo $pages->getDate();
                    
                }

                // them du lieu vao database
                $db = new Model();
                $data = $db->insertData( $pages->source, $pages->getTitle(), implode("", $pages->getContent() ), $pages->getDate() );
            }
        }

        function showDataTable() {
            // lay toan bo du lieu tu database
            $db = new Model();
            $data = $db->getAllData();

            // render list.php 
            $this->view("list", $data);
        }
    }
?>


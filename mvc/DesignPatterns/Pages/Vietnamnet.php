<?php
include_once './mvc/Libs/crawler.php';
include_once './mvc/DesignPatterns/interface.php';
// include_once './mvc/DesignPatterns/abstractProduct.php';

// B2: Product
    class Vietnamnet extends Crawler implements IgetData {
        public $source = "vietnamnet.vn";
        public function getTitle($data) {
            preg_match('/\<h1 class="title f-22 c-3e"\>(.*)\<\/h1\>/isu', $this->data, $matchesTitle);
            if( isset($matchesTitle[1]) ) {
                return $matchesTitle[1];
            } 
        }

        public function getContent($data) {
            preg_match_all('/\<\/div\>\<\/div\>\<p\>(.*)\<div class="m-t-15"\>/isu', $this->data, $matchesContent);
            if( isset($matchesContent[1]) ) {
                return $matchesContent[1];
            } 
        }

        public function getDate($data) {
            preg_match('/\<span class="ArticleDate  right"\>(.*)\<div id="ArticleContent" class="ArticleContent"\>/isu', $this->data, $matchesDate);
            if( isset($matchesDate[1]) ) {
                return $matchesDate[1];
            }  
        }
    }
?>
<?php
include_once './mvc/Libs/crawler.php';
include_once './mvc/DesignPatterns/abstractProduct.php';
// include_once './mvc/DesignPatterns/interface.php';

// B2: Product
    class Vnexpress extends Crawler implements IgetData {
        public $source = "vnexpress.net";
        public function getTitle() {
            preg_match('/\<h1 class="title_news_detail mb10"\>(.*)\<\/h1\>/isu', $this->data, $matchesTitle);
            if( isset($matchesTitle[1]) ) {
                return $matchesTitle[1];
            } 
        }

        public function getContent() {
            preg_match_all('/\<p class="description"\>(.*)\<div class="width_common box_category"\>/isu', $this->data, $matchesContent);
            if( isset($matchesContent[1]) ) {
                return $matchesContent[1];
            } 
        }

        public function getDate() {
            preg_match('/\<span class="time left"\>(.*)\<\/span\>/i', $this->data, $matchesDate);
            if( isset($matchesDate[1]) ) {
                return $matchesDate[1];
            } 
        }
    }
?>
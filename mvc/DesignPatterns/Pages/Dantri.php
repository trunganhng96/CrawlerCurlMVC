<?php

include_once './mvc/Libs/crawler.php';
include_once './mvc/DesignPatterns/abstractProduct.php';
// include_once './mvc/DesignPatterns/interface.php';

    // B2: Product
    class Dantri extends Crawler implements IgetData {
        public $source = 'dantri.com.vn';
        public function getTitle() {
            preg_match('/\<h1 class="fon31 mgb15"\>(.*)\<\/h1\>/isu', $this->data, $matchesTitle);
            if( isset($matchesTitle[1]) ) {
                return $matchesTitle[1];
            } 
        }

        public function getContent() {
            preg_match_all('/\<div id="divNewsContent" class="fon34 mt3 mr2 fon43 detail-content"\>(.*)\<div class="news-tag"\>/isu', $this->data, $matchesContent);
            if( isset($matchesContent[1]) ) {
                return $matchesContent[1];
            } 
        }

        public function getDate() {
            preg_match('/\<span class="fr fon7 mr2 tt-capitalize"\>(.*)\<p class="detail_subtitle"\>\<\/p\>/isu', $this->data, $matchesDate);
            if( isset($matchesDate[1]) ) {
                return $matchesDate[1];
            } 
        }
    }
?>
<?php
include_once './mvc/Libs/crawler.php';
    class Dantri extends Crawler {
        function __construct() {
            $this->source = "dantri.com.vn";
            $this->patternTitle = '/\<h1 class="fon31 mgb15"\>(.*)\<\/h1\>/isu';
            $this->patternContent = '/\<div id="divNewsContent" class="fon34 mt3 mr2 fon43 detail-content"\>(.*)\<div id="div_tamlongnhanai"\>\<\/div\>/isu';
            $this->patternDate = '/\<span class="fr fon7 mr2 tt-capitalize"\>(.*)\<p class="detail_subtitle"\>\<\/p\>/isu';
        }
    }
?>
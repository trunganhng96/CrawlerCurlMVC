<?php
include_once './mvc/Libs/crawler.php';
    class Vnexpress extends Crawler {
        function __construct() {
            $this ->source = "vnexpress.net";
            $this ->patternTitle = '/\<h1 class="title_news_detail mb10"\>(.*)\<\/h1\>/isu';
            $this ->patternContent = '/\<article class="content_detail fck_detail width_common block_ads_connect"\>(.*)\<\/div\>/isU';
            $this ->patternDate = '/\<span class="time left"\>(.*)\<\/span\>/i';
        }
    }
?>
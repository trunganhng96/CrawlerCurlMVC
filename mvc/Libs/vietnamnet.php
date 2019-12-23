<?php
include_once './mvc/Libs/crawler.php';
    class VietNamnet extends Crawler {
        function __construct() {
            $this->source = "vietnamnet.vn";
            $this->patternTitle = '/\<h1 class="title f-22 c-3e"\>(.*)\<\/h1\>/isu';
            $this->patternContent= '/\<div id="ArticleContent" class="ArticleContent"\>(.*)\<div class="m-t-15"\>/isu';
            $this->patternDate = '/\<span class="ArticleDate  right"\>(.*)\<div id="ArticleContent" class="ArticleContent"\>/isu';
        }
    }
?>
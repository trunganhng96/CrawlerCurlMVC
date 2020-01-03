<?php
include_once './mvc/Libs/crawler.php';
    class Vietnamnet extends Crawler {
        function __construct() {
            $this->source = "vietnamnet.vn";
            $this->patternTitle = '/\<h1 class="title f-22 c-3e"\>(.*)\<\/h1\>/isu';
            $this->patternContent = '/\<\/div\>\<\/div\>\<p\>(.*)\<div class="m-t-15"\>/isu';
            // $this->patternContent = '/\<div class="bold ArticleLead"\>(.*)\<div class="m-t-10 ArticleDateTime clearfix"\>/isu';
            $this->patternDate = '/\<span class="ArticleDate  right"\>(.*)\<div id="ArticleContent" class="ArticleContent"\>/isu';
        }
    }
?>
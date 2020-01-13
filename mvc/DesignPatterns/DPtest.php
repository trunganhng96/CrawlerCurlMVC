<?php
// namespace mvc\DesignPatterns;

// use mvc\Libs\Crawler;
// use mvc\DesignPatterns\Dantri;
// use mvc\DesignPatterns\DantriFactory;

include_once './mvc/Libs/crawler.php';

    interface IgetData {
        public function getTitle();
        public function getContent();
        public function getDate();
    }
    
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
            preg_match('/\<span class="fr fon7 mr2 tt-capitalize"\>(.*)\<p class="detail_subtitle"\>/isu', $this->data, $matchesDate);
            if( isset($matchesDate[1]) ) {
                return $matchesDate[1];
            } 
        }
    }

    class Vnexpress extends Crawler implements IgetData {
        public $source = 'vnexpress.net';
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

    class Vietnamnet extends Crawler implements IgetData {
        public $source = 'vietnamnet.vn';
        public function getTitle() {
            preg_match('/\<h1 class="title f-22 c-3e"\>(.*)\<\/h1\>/isu', $this->data, $matchesTitle);
            if( isset($matchesTitle[1]) ) {
                return $matchesTitle[1];
            }
            
        }

        public function getContent() {
            preg_match_all('/\<\/div\>\<\/div\>\<p\>(.*)\<div class="m-t-15"\>/isu', $this->data, $matchesContent);
            if( isset($matchesContent[1]) ) {
                return $matchesContent[1];
            }
        }

        public function getDate() {
            preg_match('/\<span class="ArticleDate  right"\>(.*)\<div id="ArticleContent" class="ArticleContent"\>/isu', $this->data, $matchesDate);
            if( isset($matchesDate[1]) ) {
                return $matchesDate[1];
            } 
        }
    }    

    interface IgetDataFactory {
        public function makeIgetData() : IgetData;
    }
 
    class DantriFactory implements IgetDataFactory {
        public function makeIgetData() : IgetData {
            return new Dantri();
        }
    }

    class VnexpressFactory implements IgetDataFactory {
        public function makeIgetData() : IgetData {
            return new Vnexpress();
        }
    }

    class VietnamnetFactory implements IgetDataFactory {
        public function makeIgetData() : IgetData {
            return new Vietnamnet();
        }
    }
?>
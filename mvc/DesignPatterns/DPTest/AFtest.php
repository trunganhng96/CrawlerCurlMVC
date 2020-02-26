<?php
include_once './mvc/Libs/crawler.php';
    // B1: AbstractProduct
    interface IgetData {
        public function getTitle();
        public function getContent();
        public function getDate();
    }
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
    // B3: AbstractFactory
    abstract class AbstractFactory {
        abstract function getIgetData($pages);
    }
    // B4: ConcreteFactory
    class DantriFactory extends AbstractFactory {
        public function getIgetData($page1) {
            if($page1 == 'IgetData') {
                return new Dantri();
            }
        }
    }
    
    class VnexpressFactory extends AbstractFactory {
        public function getIgetData($page2) {
            if($page2 == 'IgetData') {
                return new Vnexpress();
            }
        }
    }

    class VietnamnetFactory extends AbstractFactory {
        public function getIgetData($page3) {
            if($page3 == 'IgetData') {
                return new Vietnamnet();
            }
        }
    }
    // B5: FactoryProducer
    class FactoryProducer {
        public static function getFactory($choice) {
            $choice = strtolower($choice);
            switch($choice) {
                case 'page1' :
                    return new DantriFactory();
                    break;
                case 'page2' :
                    return new VnexpressFactory();
                    break;
                case 'page3' :
                    return new VietnamnetFactory();
                    break;
                default:
                    return null;
                    break;
            }
            return null;
        }
    }
    // B8: Client khoi tao bien de su dung AbstractProduct, AbstractFactory
    // $pagesFactory = FactoryProducer::getFactory('pages');
    // $pages = $pagesFactory->getIgetData('IgetData');
    // $pages->getTitle();
    // $pages->getContent();
    // $pages->getDate();
?>
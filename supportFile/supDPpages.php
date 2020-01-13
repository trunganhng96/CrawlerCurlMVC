// include_once './mvc/Libs/crawler.php';
//     class Dantri extends Crawler {
//         function __construct() {
//             $this->source = "dantri.com.vn";
//             $this->patternTitle = '/\<h1 class="fon31 mgb15"\>(.*)\<\/h1\>/isu';
//             $this->patternContent = '/\<div id="divNewsContent" class="fon34 mt3 mr2 fon43 detail-content"\>(.*)\<div class="news-tag"\>/isu';
//             $this->patternDate = '/\<span class="fr fon7 mr2 tt-capitalize"\>(.*)\<p class="detail_subtitle"\>\<\/p\>/isu';
//         }
//     }



// include_once './mvc/Libs/crawler.php';
//     class Vietnamnet extends Crawler {
//         function __construct() {
//             $this->source = "vietnamnet.vn";
//             $this->patternTitle = '/\<h1 class="title f-22 c-3e"\>(.*)\<\/h1\>/isu';
//             $this->patternContent = '/\<\/div\>\<\/div\>\<p\>(.*)\<div class="m-t-15"\>/isu';
//             // $this->patternContent = '/\<div class="bold ArticleLead"\>(.*)\<div class="m-t-10 ArticleDateTime clearfix"\>/isu';
//             $this->patternDate = '/\<span class="ArticleDate  right"\>(.*)\<div id="ArticleContent" class="ArticleContent"\>/isu';
//         }
//     }



// include_once './mvc/Libs/crawler.php';
//     class Vnexpress extends Crawler {
//         function __construct() {
//             $this->source = "vnexpress.net";
//             $this->patternTitle = '/\<h1 class="title_news_detail mb10"\>(.*)\<\/h1\>/isu';
//             $this->patternContent = '/\<p class="description"\>(.*)\<div class="width_common box_category"\>/isu';
//             // $this->patternContent = '/\<article class="content_detail fck_detail width_common block_ads_connect"\>(.*)\<div class="width_common box_category"\>/isU';
//             $this->patternDate = '/\<span class="time left"\>(.*)\<\/span\>/i';
//         }
//     }



// function regexData() {
//     $this->crawler();
//     preg_match($this->patternTitle, $this->data, $matchesTitle);
//     preg_match_all($this->patternContent, $this->data, $matchesContent);
//     preg_match($this->patternDate, $this->data, $matchesDate);
    
//     if(isset($matchesTitle[1])) {
//         $this->title = $matchesTitle[1];
//     }
//     if(isset($matchesContent[1])) {
//         $this->content = $matchesContent[1];
//     }
//     if(isset($matchesDate[1])) {
//         $this->date = $matchesDate[1];
//     }
// }
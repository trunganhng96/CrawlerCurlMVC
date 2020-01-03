<?php
    include './mvc/Models/model.php';

    class Crawler {
        public $ch;
        public $url;
        public $patternTitle;
        public $patternContent;
        public $partternDate;

        function getUrl($link) {
            $this ->url = $link;
        }

        function crawler() {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this ->url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36');
            $this ->data = curl_exec($ch);
            curl_close($ch);
        }

        function regexData() {
            $this->crawler();
            preg_match($this->patternTitle, $this->data, $matchesTitle);
            preg_match_all($this->patternContent, $this->data, $matchesContent);
            preg_match($this->patternDate, $this->data, $matchesDate);
            
            if(isset($matchesTitle[1])) {
                $this->title = $matchesTitle[1];
            }
            if(isset($matchesContent[1])) {
                $this->content = $matchesContent[1];
            }
            if(isset($matchesDate[1])) {
                $this->date = $matchesDate[1];
            }
        }
    }
?>
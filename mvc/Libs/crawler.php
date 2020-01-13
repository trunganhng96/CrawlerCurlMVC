<?php
// namespace mvc\Libs;

// use mvc\Models\Model;

include './mvc/Models/model.php';

    class Crawler {
        public $ch;
        public $url;

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
    }
?>
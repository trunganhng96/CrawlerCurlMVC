<?php
require "vendor/autoload.php";

// use Core\Application;
// use Core\Controller;

    session_start();
    require_once "./mvc/bridge.php";
    $CrawlerCurlMVC = new Application();
?>
<?php
// namespace mvc\Core;

    class Controller {
        function model($model) {
            // goi den file trong thu muc Models
            require_once "./mvc/Models/".$model.".php";
            return new $model;
        }
        function view($view, $data = []) {
            // goi den file trong thu muc Views
            require_once "./mvc/Views/".$view.".php";
        }
    }
?>

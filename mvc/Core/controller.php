<?php
    class Controller{
        function model($model) {
            require_once "./mvc/Models/" . $model . ".php";
            return new $model;
        }
        function view($view) {
            require_once "./mvc/Views/" . $view . ".php";
        }
    }
?>

<?php
    // class Controller {
    //     public $db = null;
    //     public $model = null;
        
    //     function __construct() {
    //         $this->openDatabaseConnection();
    //         $this->loadModel();
    //     }
        
    //     private function openDatabaseConnection() {
    //         $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
    //         $this->db = new PDO(DB_TYPE .':host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET, DB_USER, DB_PASS, $options);
    //     }
        
    //     public function loadModel() {
    //         require './mvc/Models/model.php';
    //         $this->model = new Model($this->db); 
    //     }
    // }
?>


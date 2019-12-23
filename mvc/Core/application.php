<?php
    class Application {
        protected $controller = null;
        protected $action = null;
        protected $params=[];
        function __construct(){
            $arr = $this->UrlProcess();
     
            // Controller
            if( file_exists("./mvc/Controllers/" . $arr[0] . ".php") ) {
                $this->controller = $arr[0];
                unset($arr[0]);
            }
            require_once "./mvc/Controllers/" . $this->controller . ".php";
            $this->controller = new $this->controller();

            // Action
            if(isset($arr[1])){
                if( method_exists( $this->controller , $arr[1]) ) {
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }

            // Params
            $this->params = $arr?array_values($arr):[];
            call_user_func_array([$this->controller, $this->action], $this->params );
        }

        function UrlProcess(){
            if( isset($_GET["url"]) ) {
                return explode("/", filter_var( trim($_GET["url"], "/") ) );
            }
        }
    }
?>

<?php
    // class Application {
    //     private $controller = null;
    //     private $action = null;
    //     private $params = array();
        
    //     public function __construct() {
    //         $this->splitUrl();
    //         if (!$this->controller) {
    //             require './mvc/Controllers/index.php';
    //             $page = new Home();
    //             $page->index();
    //         } elseif ( file_exists('./mvc/Controllers/'.$this->controller.'.php') ) {
    //             require './mvc/Controllers/'.$this->controller.'.php';
    //             $this->controller = new $this->controller();
    //             if ( method_exists($this->controller, $this->action) ) {
    //                 if ( !empty($this->params) ) {
    //                     call_user_func_array( array($this->controller, $this->action), $this->params);
    //                 } else {
    //                     $this->controller->{$this->action}();
    //                 }
    //             } else {
    //                 if ( strlen($this->action) == 0 ) {
    //                     $this->controller->index();
    //                 } 
    //             }
    //         } 
    //     }
        
    //     private function splitUrl() {
    //         if (isset($_GET['url'])) {
    //             $url = trim($_GET['url'], '/');
    //             $url = filter_var($url, FILTER_SANITIZE_URL);
    //             $url = explode('/', $url);
                
    //             $this->controller = isset($url[0]) ? $url[0] : null;
    //             $this->action = isset($url[1]) ? $url[1] : null;
                
    //             unset($url[0], $url[1]);
                
    //             $this->params = array_values($url);
    //         }
    //     }
    // }
?>

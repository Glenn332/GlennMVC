<?php 
    namespace App\Handlers;
    use App;
    use App\Models\Route;
    class RouteHandler{
        public $params;
        public $routes;
        

        public function __construct(){
            $this->params = array_filter(explode("/", substr($_SERVER['REQUEST_URI'], strlen(App\Config::$BaseUrl))));

            Route::GET("home/about", "HomeController@about");
            // $this->ExecuteController();
        }

        public function ExecuteController(){
            // No params
            if(count($this->params) == 0){

            }
            if(file_exists($_SERVER['DOCUMENT_ROOT']."/App/Controllers/".$this->params[0]."Controller.php")){

            } else {
                echo "Not found!";
            }
        }
    }
?>
<?php 
    namespace App\Handlers;
    use App;
    class RouteHandler{
        public $params;

        public function __construct(){
            $this->params = filter(explode("/", substr($_SERVER['REQUEST_URI'], strlen(App\Config::$BaseUrl))));
            $this->ExecuteController();
        }

        public function ExecuteController(){
            if(file_exists($_SERVER['DOCUMENT_ROOT']."/App/Controllers/".$this->params[0]."Controller.php")){

            } else {
                echo "Not found!";
            }
        }
    }
?>
<?php 
    namespace Logic\Handlers;
    use Logic;
    class RouteHandler{
        public $params;

        public function __construct(){
            $this->params = explode("/", substr($_SERVER['REQUEST_URI'], strlen(Logic\Config::$BaseUrl)));
            $this->ExecuteController();
        }

        public function ExecuteController(){
            if(file_exists($_SERVER['DOCUMENT_ROOT']."/Logic/Controllers/".$this->params[0]."Controller.php")){

            } else {
                echo "Not found!";
            }
        }
    }
?>
<?php 
    namespace App\Handlers;

    class ControllerHandler{
        public $ControllerName;
        public $Arguments;
        public function __construct($controllerName, $arguments){
            $this->ControllerName = $controllerName;
            $this->Arguments = $arguments;
        }
        public function dump(){
            echo $this->ControllerName . " " . $this->Arguments;
        }
    }
?>
<?php 
    namespace App\Controllers;

    abstract class BaseController{
        public $requestedView;
        public function __construct($requestedView){
            $this->requestedView = $requestedView;
            $this->Execute();
        }

        public function Execute(){
            $methodName = $this->requestedView."View";
            $this->$methodName();
        }
    }
?>
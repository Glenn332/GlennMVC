<?php 
    namespace App\Models;

    use App\Config;
    use App\Handlers\RouteHandler;

    class Route {
        public function GET($address, $controllerAction){
            if(RouteHandler::$routeFound) return false;
            RouteHandler::$routeFound = $this->handleRoute($address, $controllerAction);
        }

        private function handleRoute($address, $controllerAction){
            if(!$this->checkParams($address)) return false;
            $this->executeController($controllerAction);
            return true;
        }

        private function checkParams($address){
            $paramString = strtolower(substr($_SERVER['REQUEST_URI'], strlen(Config::$BaseUrl)));
            $params = array_filter(explode("/", $paramString));
            if(count($params) == 0){
                $params = $this->returnHomeParams();
            }
            $expectedAddress = \explode("/", $address);
            if(count($expectedAddress) != count($params)) return false;
            for($i = 0; $i <  count($expectedAddress); $i++){
                if($expectedAddress[$i] != $params[$i]) return false;
            }
            return true;
        }

        private function returnHomeParams(){
            return array("home", "index");
        }

        private function executeController($controllerAction){
            $controllerParams = explode("@", $controllerAction);
            $controllerPath = "App\Controllers\\".$controllerParams[0];
            $controller = new $controllerPath($controllerParams[1]);
        }
    }
?>
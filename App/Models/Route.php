<?php 
    namespace App\Models;

    use App\Config;

    class Route {
        public function GET($address, $controllerAction){
            $this->handleRoute(address, $controllerAction);
        }

        private function handleRoute($address, $controllerAction){
            $params = array_filter(explode("/", substr($_SERVER['REQUEST_URI'], strlen(Config::$BaseUrl))));
            var_dump($params);
        }
    }
?>
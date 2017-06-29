<?php 
    namespace App\Handlers;
    use App;
    use App\Models\Route;
    class RouteHandler extends Route{
        
        public static $routeFound = false;
        public function __construct(){
            $paramString = strtolower(substr($_SERVER['REQUEST_URI'], strlen(App\Config::$BaseUrl)));
            $this->params = array_filter(explode("/", $paramString));

            Route::GET("home/index", "HomeController@index");
            Route::GET("home/about", "HomeController@about");
            Route::GET("site/index", "SiteController@index");

            
            if(!RouteHandler::$routeFound) echo "Page not found!";
        }
    }
?>
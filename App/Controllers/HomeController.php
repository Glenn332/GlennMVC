<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController{
    public function __construct($requestedView){
        parent::__construct($requestedView);
    }

    public function indexView(){
        echo "Index from HomeController";
    }

    public function aboutView(){
        echo "Index from HomeController";
    }

}
?>
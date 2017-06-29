<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class SiteController extends BaseController{
    public function __construct($requestedView){
        parent::__construct($requestedView);
    }

    public function indexView(){
        echo "Index from SiteController";
    }

    public function aboutView(){
        echo "Index from SiteController";
    }

}
?>
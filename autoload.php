<?php 
    function reverseSlashes($string){
        return str_replace('\\','/', $string);
    }
    spl_autoload_register(function ($className) {
        $path = reverseSlashes($className);
        require $_SERVER['DOCUMENT_ROOT'] . "/{$path}.php";
    });
?>
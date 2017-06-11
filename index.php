<?php 
    use Logic\Handlers;
    
    require_once 'autoload.php';
    
    echo Logic\Handlers\Class2::$rawr;
    $test = new Logic\Handlers\ControllerHandler("RAWER", "TEST");
    $test->dump();
?>
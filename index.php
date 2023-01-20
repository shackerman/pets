<?php

// This will show errors
ini_set('display_errors', 1);
error_reporting(E_ALL);


require_once("vendor/autoload.php");

// create an instance of the base class
$f3 = Base::instance();     


// define a default
$f3->route('GET /', function() {
    //echo '<h1>Pet Home</h>';
    $view = new Template();
    echo $view->render('views/home.html');
});

// run
$f3->run();              


?>

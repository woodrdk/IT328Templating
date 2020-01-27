<?php

// start a session
session_start();

// THIS IS OUR CONTROLLER

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require_once ('vendor/autoload.php');

// Create an instance of the base class
$f3 = Base::instance();

// define a default route
$f3 -> route('GET /', function($f3){
    $f3->set('title', 'All about templating');
    $f3->set('temp', 67);
    $f3->set('color', 'purple');
    $f3->set('bookmarks', array ('http://wwww.yahoo.com',
        'http://www.whowherehow.org',
        'http://gmail.com')
    );

    $f3->set('desserts', array('chocolate' => "Chocolate Mousse",
        'vanilla'=> 'Vanilla Custard',
        'strawberry' => 'Strawberry Shortcake'));


    $f3 ->set('preferredCustomer', true);
    $f3->set('lastLogin', strtotime('-1 week'));
    $view = new Template();
    echo $view->render('views/home.html');

});

// Run Fat Free
$f3 -> run();
<?php


define('DOT', '.');
require_once DOT . "/bootstrap.php";

//Home page//
$Route->add('/', function () {
    
    $Core = new Apps\Core;
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title", "PHP Anthill | Home");
    $Template->render("home");
    
}, 'GET');
//Home page//




//Logout Sessions//
$Route->add(
    '/auth/logout',
    function () {
        $Template = new Apps\Template;
        $Template->expire();
        $Template->cleanAll(session_delete_timout);
        $Template->redirect(auth_url);
    },
    'GET'
);
//Logout Sessions//

$Route->run('/');

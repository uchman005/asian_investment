<?php


define('DOT', '.');
require_once DOT . "/bootstrap.php";

//Home page//
$Route->add('/asian_investment/', function () {

    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title", "Home || Asian_investment");
    $Template->assign('menukey', '');
    $Template->render("home");
}, 'GET');
//Home page//

$Route->add('/asian_investment/{page}', function ($page) {

    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title", ucfirst($page) . " || Asian Investment");
    $Template->assign("menukey", $page);

    $Template->render("pages.{$page}");
}, 'GET');



//Logout Sessions//
$Route->add(
    '/asian_investment/logout',
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

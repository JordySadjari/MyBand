<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';
// all functions
include 'includes/functie.php';

// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Me First And The Gimme Gimmes');

// Display template: output html
$templateParser->display('head.tpl');

$headerText = 'This is the header';

$templateParser->assign('headerString', $headerText);
$templateParser->display('header.tpl');


// Get newsarticles from database


// Show newsarticles 'old style' => refactor to template system.
/*$templateParser->assign('result',$result);
$templateParser->display('newsarticles.tpl');
*/
$footerText = 'Footer made by me for school';

$templateParser->assign('footerString', $footerText);
$templateParser->display('footer.tpl');

$action = isset($_GET['action'])?$_GET['action']:'home';

switch ($action) {
  case 'news':
  include('model/select_newsarticles.php');
  $templateParser->assign('result',$result);
  $templateParser->display('newsarticles.tpl');
    break;

  case 'about':
    $templateParser->display('about.tpl');
    break;
}

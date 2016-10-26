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
$templateParser->assign('title', 'PerAnime');

// Display template: output html
$templateParser->display('head.tpl');

$headerText = 'This is the header';

$templateParser->display('header.tpl');


// Get newsarticles from database


// Show newsarticles 'old style' => refactor to template system.
/*$templateParser->assign('result',$result);
$templateParser->display('newsarticles.tpl');
*/


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

  case 'charts':
      $templateParser->display('charts.tpl');
      break;

  case 'home':
      $templateParser->display('home.tpl');
      break;

}

$footerText = 'website owned and © by Perz inc';

$templateParser->assign('footerString', $footerText);
$templateParser->display('footer.tpl');

<?php

//INCLUDE THE FILES NEEDED...
require_once('view/LayoutView.php');
require_once('view/ButtonView.php');
require_once('view/HangmanView.php');

//MAKE SURE ERRORS ARE SHOWN... MIGHT WANT TO TURN THIS OFF ON A PUBLIC SERVER
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//CREATE OBJECTS OF THE VIEWS
$lv = new LayoutView();
$buttons = new ButtonView();

$hmv = new HangmanView();

$lv->render($buttons->render());

// var_dump($_POST);

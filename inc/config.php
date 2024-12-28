<?php 

	// If no constant defined = __CONFIG__, do not load this file
	if(!defined('__CONFIG__')) {
		exit('You do not have a config file');
	}

	// Sessions always turned on
	if(!isset($_SESSION)) {
		session_start();
	}

	// config below
	// Allow errors
	error_reporting(-1);
	ini_set('display_errors', 'On');
	

	// Include DB.php file;
	include_once "classes/DB.php";
	include_once "classes/Filter.php";
	include_once "classes/Page.php";
	include_once "classes/User.php";
	include_once "functions.php";

	$con = DB::getConnection();

?>

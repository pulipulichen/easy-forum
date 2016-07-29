<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="forum"; // Database name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_query("SET NAMES 'utf8'");
mysql_select_db("$db_name")or die("cannot select DB");

// Turn off all error reporting
error_reporting(0);
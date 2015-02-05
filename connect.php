<?php
//INCLUDE_CHECK is set to true within index.php
if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');


/* Database config */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= 'F4shi0n';
$db_database	= 'users_details'; 

/* End config */


$connect = mysql_connect($db_host,$db_user,$db_pass);
if(!$connect){//Try to connect to server
	die('Unable to establish a DB connection : '.mysql_error());
}

$db_selected = mysql_select_db($db_database,$connect);
if(!$db_selected){//Try connect to database
	die('Could not select database : '.mysql_error() );
}

mysql_query("SET names UTF8");

?>
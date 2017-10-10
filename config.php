<?php
$dbhost ="localhost";
$dbuser="root";
$dbpass ="";
$db="mp3";
$link = mysql_connect("$dbhost","$dbuser","$dbpass") or die("Cannot connect to database");
mysql_select_db("$db");
mysql_query("SET NAMES 'UTF8'");
?>

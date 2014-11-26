<?php
$mysqlserver="localhost";
$mysqlusername="root";
$mysqlpassword="omo";
$link=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

$dbname = 'bukutamu';    // change this to the name of your database
mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());    
?>
<?php
ob_start();
session_start();

$dbhost 	= "20.253.231.137";
$dbuser 	= "crhis";
$dbpass 	= "admin";
$dbname 	= "parcialappdb";
$charset 	= "utf8";

$dbcon = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$dbcon) {
    die("Connection failed" . mysqli_connect_error());
}
mysqli_select_db($dbcon,$dbname);
mysqli_set_charset($dbcon,$charset);

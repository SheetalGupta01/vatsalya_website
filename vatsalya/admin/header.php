<?php 
session_start();
require("../connection.php"); 
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
if(!$userid)
	header("Location:login.php");
?>
<?php
include "database.php";
session_start();

if (!isset($_SESSION['userType']))
	{
		$_SESSION['userType'] = "student";
    }

header("Location: signIn.php");
die();
    
?>
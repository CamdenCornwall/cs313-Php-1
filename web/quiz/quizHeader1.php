<?php
echo "
<!DOCTYPE html>
<html>
	<head>
	<meta charset='utf-8' />
	<title>Quizzer</title>
	<script defer src='https://use.fontawesome.com/releases/v5.0.8/js/all.js'></script>
	<link rel='stylesheet' href='css/quizStyle.css' type='text/css' />
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
</head>
<nav class=''>
	<ul>
	    <li>
	        <a class='nounderline' href='index.php'>Quiz Start</a>        
		</li>
		<li>
			<a class='nounderline' href='#' >Welcome: " . $_SESSION['username'] . "</a>
		</li>
		<li class='rightSide'>
			<a class='nounderline' href='signIn.php'>Login</a>
		</li>
		<li class='rightSide'>
			<a class='nounderline' href='start.php'>Switch User Type</a>
	    </li>
	    </ul>
	</nav>

";
?>
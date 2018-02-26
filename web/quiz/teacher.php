<?php
include "database.php";
session_start();
// $_SESSION['username']['score']['userType'] = array();
    
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset='utf-8' />
	<title>Quizzer</title>
	<link rel='stylesheet' href='css/quizStyle.css' type='text/css' />
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
</head>
<nav class=''>
	<ul>
	    <li>
	        <a class='nounderline' href='index.php'>Quiz Start</a>        
		</li>
		<li class='rightSide'>
			<a class='nounderline' href='signIn.php'>Login</a>
		</li>
		<li class='rightSide'>
			<a class='nounderline' href='start.php'>Switch User Type</a>
	    </li>
	    </ul>
	</nav>
<body>
	<header>
		<div class="container">
			<h1>Quizzer</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>Test Quiz</h2>
			<p>Enter your Teacher ID</p>
			<form name="myForm" action="loginTeacher.php" method="POST">
				Teacher Name: <input type="text" name="tName">
				<input type="submit" value="Submit">
			</form>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2018, Quizzer
		</div>
	</footer>
</body>
</html>
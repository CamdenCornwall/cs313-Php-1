<?php
echo "
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
	        <a class='nounderline' href='index.php'>Quiz</a>        
	    </li>
		<li>
			<a class='nounderline' href='add.php'>Add Questions</a>
		</li>
		<li>
			<a class='nounderline' href='#' >Welcome: " . $_SESSION['username'] . "</a>
		</li>
		<li class='rightSide'>
			<a class='nounderline' href='start.php'>Switch User</a>
	    </li>
	    </ul>
	</nav>

";
?>
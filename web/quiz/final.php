<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
// 	//Set question number
// 	$number = (int) $_GET['n'];
	
// 	/*
// 	*	Get total questions
// 	*/
// 	$query = "SELECT * FROM `questions`";
// 	//Get result
// 	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
// 	$total = $results->num_rows;
		
// 	/*
// 	*	Get Question
// 	*/
// 	$query = "SELECT * FROM `questions`
// 				WHERE question_number = $number";
// 	//Get result
// 	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	
// 	$question = $result->fetch_assoc();
	
// 	/*
// 	*	Get Choices
// 	*/
// 	$query = "SELECT * FROM `choices`
// 				WHERE question_number = $number";
// 	//Get results
// 	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
// ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>Quizzer</title>
	<link rel="stylesheet" href="css/quizStyle.css" type="text/css" />
</head>
<body>
	<header>
		<div class="container">
			<h1>Quizzer</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>Test Complete</h2>
            <p>You have submited all answers.</p>
            <p>Final Score: 5</p>
		<div class="container">
			Copyright &copy; 2018, Quizzer
		</div>
	</footer>
</body>
</html>
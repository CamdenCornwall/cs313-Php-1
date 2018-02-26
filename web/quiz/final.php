<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
	$stmt = $db->prepare("SELECT COUNT(*) FROM questions");
	$stmt->execute();
	$questions = $stmt->fetch(PDO::FETCH_ASSOC);
	$total = $questions['count'];

	//
	$statement2 = $db->prepare("SELECT * FROM choices WHERE question_number = :number AND id = :selected_choice");
		$statement2->bindParam(':number', $number, PDO::PARAM_INT);
		$statement2->bindParam(':selected_choice', $selected_choice, PDO::PARAM_INT);
		$statement2->execute();

		$result2 = $statement2->fetch(PDO::FETCH_ASSOC);
		$correct_choice = $result2['is_correct'];
		
	//jkhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
	if($_SESSION['userType'] == "student"){
		include 'quizHeader1.php'; 
		}
		else{
			include 'quizHeader.php';
		}	
		
?>
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
            <p>Final Score: 
			<?php echo $_SESSION['score']; echo " out of " . $total ." points possible";
			echo "<h1>" .$correct_choice ."</h1>";?></p>
			<div class="container">
			<form action="index.php" method="POST">
    		<input type="submit" class="finish" name="end" value="Finish" />
		</form>
		</div>

	</main>
	<footer>
	<?php 
		$stmt2 = $db->prepare("UPDATE users SET score = :userScore  WHERE username = :username");
		$stmt2->bindParam(':userScore', $_SESSION['score'], PDO::PARAM_INT);
		$stmt2->bindParam(':username', $_SESSION['username'], PDO::PARAM_STR);
		$stmt2->execute();
		
	?></br>
	<?php 
		echo $_SESSION['score'];
		$_SESSION['qNum'] = 1;

	?>

	</footer>
</body>
</html>
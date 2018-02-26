<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
	$stmt = $db->prepare("SELECT COUNT(*) FROM questions");
	$stmt->execute();
	$questions = $stmt->fetch(PDO::FETCH_ASSOC);
	$total = $questions['count'];
	
?>
<?php include 'quizHeader.php'?>

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
			<?php echo $_SESSION['score']; echo " out of " . $total ." points possible"; $_SESSION = array();?></p>
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
		$stmt2->bindParam(':username', $_SESSION['username'], PDO::PARAM_INT);
		$stmt2->execute();
		
	?></br>
	<?php echo $_SESSION['score'];?>

	</footer>
</body>
</html>
<?php include 'database.php'; ?>
<?php 

	//Set question number
	$number = $_GET['n'];
	//get question totals
	$stm1 = $db->prepare("SELECT COUNT(*) FROM questions");
	$stm1->execute();

	$questions = $stm1->fetch(PDO::FETCH_ASSOC);

	$total = $questions['count'];

	//get question_text
	$query = "SELECT * FROM questions WHERE question_number = $number";
	$statement = $db->prepare($query);

	$statement->execute();
	$question = $statement->fetch(PDO::FETCH_ASSOC);

	//get choices or Options
	// $query = "SELECT * FROM choices WHERE questionNum = $number";
	// $choices = $db->prepare($query);

	// $choices->execute();
	// $choices->fetch(PDO::FETCH_ASSOC);
	
?>
<?php include 'quizHeader.php' ?>
<body>
	<header>
		<div class="container">
			<h1>Quizzer</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
			<p class="question">
				<?php echo $question['question_text']; ?>
			</p>
			<form method="post" action="process.php">
				<ul class="choices">
					
				
				</ul>
				<input type="submit" value="Submit" />
				<input type="hidden" name="number" value="<?php echo $number; ?>" />
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
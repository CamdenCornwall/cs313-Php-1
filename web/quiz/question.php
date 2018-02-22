<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 

	//Set question number
	$number = $_GET['n'];

	//get question totals
	$stm1 = $db->prepare("SELECT COUNT(*) FROM questions");
	$stm1->execute();

	$questions = $stm1->fetch(PDO::FETCH_ASSOC);

	$total = $questions['count'];

	//get question_text
	$statement = $db->prepare("SELECT * FROM questions WHERE question_number = :number");
	$statement->bindParam(':number', $number, PDO::PARAM_INT);

	$statement->execute();
	$question = $statement->fetch(PDO::FETCH_ASSOC);
	
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
					<?php 
						//* get choices
						$stmt3 = $db->prepare("SELECT id, is_correct, answer_text FROM choices WHERE question_number = $number");
						$stmt3->execute();

						while($row = $stmt3->fetch(PDO::FETCH_ASSOC)){
							echo "<li><input name='choice' type='radio' value='" . $row['id'] ."' />" . $row['answer_text'] ."</li>";
						} 
					?>
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
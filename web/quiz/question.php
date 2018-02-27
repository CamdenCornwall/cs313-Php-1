<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
	if (!isset($_SESSION['qNum']))
	{
		$_SESSION['qNum'] = 1;
	}
	//Check to see if score is set
	if(!isset($_SESSION["score"])){
		$_SESSION["score"] = 0;
	}
	//Set question number Chane this to a 
	$number = $_SESSION['qNum'];

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
<?php include 'quizHeader1.php' ?>
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
			<form method="POST" action="process.php">
				<ul class="choices">
					<?php 
						//* get choices
						$stmt3 = $db->prepare("SELECT id, is_correct, answer_text FROM choices WHERE question_number = :number");
						$stmt3->bindParam(':number', $number, PDO::PARAM_INT);

						$stmt3->execute();

						while($row = $stmt3->fetch(PDO::FETCH_ASSOC)){
							echo "<li><input name='choice' type='radio' value='" . 2 ."' />" . $row['answer_text'] ."</li>";
						} 
					?>
				</ul>
				<input name="next" type="submit" value="Submit" />
				<input type="hidden" name="number" value="<?php echo $number; ?>" />
			</form>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2018, Quizzer
		</div>
		<?php print_r($_SESSION);?>
	</footer>
</body>
</html>
<?php include 'database.php'; ?>
<?php 

	session_start(); 

	//Set question number
	require("dbConnect.php");
	$db = get_db();

	$number = $_GET['n'];

	$query = "SELECT * FROM questions WHERE question_number = $number"
	$statement = $db->prepare($query);

	$statement->execute();
	$question = $statement->fetch(PDO::FETCH_ASSOC);


		// $choices = $db->query("SELECT * FROM choices WHERE questionNum = '$number'")
		
	
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
					<?php while($row = $choices->FETCH_ASSOC()): ?>
						<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['text']; ?></li>
					<?php endwhile; ?>
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
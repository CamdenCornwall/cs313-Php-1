<?php include 'database.php'; ?>
<?php
	$statement = $db->prepare("SELECT COUNT(*) FROM questions");
	$statement->execute();

	$questions = $statement->fetch(PDO::FETCH_ASSOC);

	$total = $questions['count'];
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
			<h2>Test Your Knowledge</h2>
			<p>This is a multiple choice quiz to test your knowledge.</p>
			<ul>
				<li class="noListStyle"><strong>Number of Questions: </strong><?php echo $total; ?></li>
				<li class="noListStyle"><strong>Type: </strong>Multiple Choice</li>
				<li class="noListStyle"><strong>Estimated Time: </strong><?php echo $total * .5; ?> Minutes</li>
			</ul>
			<a href="question.php?n=1" class="start">Start Quiz</a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2018, Quizzer
		</div>
	</footer>
</body>
</html>
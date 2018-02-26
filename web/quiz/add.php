<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
    
    //get question totals
	$stm1 = $db->prepare("SELECT COUNT(*) FROM questions");
	$stm1->execute();

	$questions = $stm1->fetch(PDO::FETCH_ASSOC);

    $total = $questions['count'];
    $total++;

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
            <h2>Add a multiple choice question.</h2>
            <div><p><i>(Must have at least two choices.)</i></p></div>
            <div><?php if(isset($msg)) { echo "<p>" . $msg . "</p>";}?></div>
		    <form method="POST" action="insertQ.php" >
                <p>
                    <label>Question Number</label>
                    <input type="number"<?php echo " value='" . $total ."' min='" . $total ."' max='" . $total . "' ";?> name="question_number"/>
                </p>
                <p>
                    <label>Question</label>
                    <input type="text" name="question_text"/>
                </p>
                <p>
                    <label>Choice 1:</label>
                    <input type="text" name="choice1"/>
                </p>
                <p>
                    <label>Choice 2:</label>
                    <input type="text" name="choice2"/>
                </p>
                <p>
                    <label>Choice 3:</label>
                    <input type="text" name="choice3" />
                </p>
                <p>
                    <label>Choice 4:</label>
                    <input type="text" name="choice4" />
                </p>
                <p>
                    <label>Choice 5:</label>
                    <input type="text" name="choice5" />
                </p>
                <p>
                    <label>Correct Choice Number:</label>
                    <input type="number" min="1" max="5" name="correct_choice" />
                </p>
                <p>
                    <label>Question Point Worth:</label>
                    <input type="number" min="1" value="1" name="points_per" />
                </p>
                <p>
                    <label>Submit Question</label>
                    <input type="submit" name="submit" />
                </p>
            </form>
        <div class="container">
			Copyright &copy; 2018, Quizzer
		</div>
	</footer>
</body>
</html>
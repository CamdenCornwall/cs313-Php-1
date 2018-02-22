<?php include 'quizHeader.php' ?>
<body>
	<header>
		<div class="container">
			<h1>Quizzer</h1>
		</div>
	</header>
	<main>
		<div class="container">
            <h2>Add a Question</h2>
		    <from method="POST" action="add.php">
            <p>
                <label>Question Number</label>
                <input type="number" name="question_number" />
            </p>
            <p>
                <label>Question</label>
                <input type="text" name="question_text" />
            </p>
            <p>
                <label>Option 1:</label>
                <input type="text" name="choice" />
            </p>
            <p>
                <label>Option 2:</label>
                <input type="text" name="choice" />
            </p>
            <p>
                <label>Option 3:</label>
                <input type="text" name="choice" />
            </p>
            <p>
                <label>Option 4:</label>
                <input type="text" name="choice" />
            </p>
            <p>
                <label>Option 5:</label>
                <input type="text" name="choice" />
            </p>
            <p>
                <label>Correct Choice Number:</label>
                <input type="number" name="correct_choice" />
            </p>
            <p>
                <label>Points Per Question:</label>
                <input type="number" min="1" name="points_per" />
            </p>
            <p>
                <label>Submit</label>
                <input type="submit" name="submit" />
            </p>

        <div class="container">
			Copyright &copy; 2018, Quizzer
		</div>
	</footer>
</body>
</html>
<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php

    $stm1 = $db->prepare("SELECT * FROM users");
    $stm1->execute();
?>
<?php include "quizHeader.php"; ?>

<body>
	<header>
		<div class="container">
			<h1>Scores</h1>
		</div>
	</header>
	<main>
		<div class="container">
            <p>Student's Quiz Scores</p>
            <table>
            <tr>
                <th>User</th>
                <th>Score</th>
            </tr>
            <?php
                while($row = $stm1->fetch(PDO::FETCH_ASSOC))
                {
                    echo "<tr><td>". $row['username'] ."</td><td>" . $row['score'] ."</td></tr>";
                } 
            ?>
            </table>          
        </div>
    </main>
    </body>
</html>
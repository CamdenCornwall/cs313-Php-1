<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php

    $stm1 = $db->prepare("SELECT * FROM users");
    $stm1->execute();
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset='utf-8' />
	<title>Quizzer</title>
	<link rel='stylesheet' href='css/quizStyle.css' type='text/css' />
</head>
<nav class=''>
	<ul>
	    <li>
	        <a class='nounderline' href='index.php'>Quiz</a>        
	    </li>
		<li>
			<a class='nounderline' href='add.php'>Add Questions</a>
		</li>
		<li>
			<a class='nounderline' href='stuScore.php'>Student's Scores</a>
		</li>
		<li>
			<a class='nounderline' href='#' >Welcome: <?php echo $_SESSION['username'];?></a>
		</li>
		<li class='rightSide'>
			<a class='nounderline' href='start.php'>Switch User</a>
	    </li>
	    </ul>
	</nav>
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
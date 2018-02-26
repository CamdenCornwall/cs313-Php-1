<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 

    /**********************************************************
* File: home.php
* Author: Br. Burton
* 
* Description: This is the home page. It checks that a user
*  exists on the session and redirects to the login page
*  if it does not.
***********************************************************/
if (!isset($_SESSION['username']))
{
    $_SESSION['username'] = "";
}
if(!isset($_SESSION["score"])){
    $_SESSION['score'] = 0;
}
$_SESSION['qNum'] = 1;
?>

<?php include 'quizHeader1.php' ?>
<body>
	<header>
		<div class="container">
			<h1>Quizzer</h1>
		</div>
	</header>
	<main>
		<div class="container text-center" >
                <h2>Are you here to take a quiz, or make a quiz?</h2>
                <p>Let us know if you are a student or a teacher.</p>
             
            <div class="container text-center col-lg-6" >
                <a href="student.php" class="fancyButton float-left"><span>Student</span></a>
                <!-- <button type="button" class="btn btn-primary btn-lrg float-left">Student</button> -->
                <!-- <div><span>THIS IS A SPACE</span></div>  -->
                <a href="teacher.php" class="fancyButton float-right"><span>Teacher</span></a>
                <!-- <button type="button" class="btn btn-primary btn-lrg float-right">Teacher</button> -->
            </div>
			<!-- <a href="question.php?n=1" class="start">Start Quiz</a> -->
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2018, Quizzer
		</div>
	</footer>


</body>
</html>
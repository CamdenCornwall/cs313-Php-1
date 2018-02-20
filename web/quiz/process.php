<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php

	//Check to see if score is set_error_handler
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
	
	if($_POST){
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next = $number+1;
		
    ?>
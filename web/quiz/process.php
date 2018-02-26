<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
	if (!isset($_SESSION['qNum']))
	{
		$_SESSION['qNum'] = 1;
	}
	//Check to see if score is set
	// if(!isset($_SESSION["score"])){
	// 	$_SESSION['score'] = 0;
	// }
	
	if($_POST){
		// $number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		// $next = $number + 1;
		$_SESSION['qNum'] ++;
		$number = $_SESSION['qNum'];
		header("Location: ". $_SERVER['REQUEST_URI']); 
		
		/*
		* Get points/Question
		*/
		$statement1 = $db->prepare("SELECT * FROM questions WHERE question_number = :number");
		$statement1->bindParam(':number', $number, PDO::PARAM_INT);
		$statement1->execute();
		$results = $statement1->fetch(PDO::FETCH_ASSOC);
		$pointsPer = $results['points_per'];
	

		/*
		*	Get total questions
		*/
		$stmt = $db->prepare("SELECT COUNT(*) FROM questions");
		$stmt->execute();
		$questions = $stmt->fetch(PDO::FETCH_ASSOC);
		$total = $questions['count'];
		
		
		/*
		*	Get correct choice
		*/
		$statement2 = $db->prepare("SELECT * FROM choices WHERE question_number = :number AND id = :selected_choice");
		$statement2->bindParam(':number', $number, PDO::PARAM_INT);
		$statement2->bindParam(':selected_choice', $selected_choice, PDO::PARAM_INT);
		$statement2->execute();

		//Get result
		$result2 = $statement2->fetch(PDO::FETCH_ASSOC);

		//Set correct choice
		$correct_choice = $result2['is_correct'];
		
		//Compare
		if($correct_choice){
			//Answer is correct
			$_SESSION['score'] += $pointsPer;
		}
		else{
			$_SESSION['score'] += 1;
		}

		//Check if last question
		if($number > $total){
			header("Location: final.php");
			exit();
		} else {
			header("Location: question.php");
			die();
		}
	}
    ?>
<?php include 'database.php'; ?>
<?php
$i = 0; //count choices

if(isset($_POST['submit'])){
       $question_number = $_POST['question_number'];
       $question_text = $_POST['question_text'];
       $points_per = $_POST['points_per'];
       $choices = array();
       $choices[0] = $_POST['choice1'];
       $choices[1] = $_POST['choice2'];
       $choices[2] = $_POST['choice3'];
       $choices[3] = $_POST['choice4'];
       $choices[4] = $_POST['choice5'];
       $correct_choice = $_POST['correct_choice'];
       $correct_choice--;
       echo "$choices[$i]";
       try{
            
            //insert question
            $sth = $db->prepare("INSERT INTO questions (question_number, points_per, question_text) 
            VALUES (:question_number, :points_per, :question_text)");

            $sth->bindValue(':question_number', $question_number, PDO::PARAM_INT);
            $sth->bindValue(':points_per', $points_per, PDO::PARAM_INT);
            $sth->bindValue(':question_text', $question_text, PDO::PARAM_STR);
            $sth->execute();

            // $questionId = $db->lastInsertId("questions_id_seq");
            
            foreach($choices as $choice){
                if($choice != null){
                    if($i == $correct_choice){
                        $is_correct = TRUE;
                    } else {
                        $is_correct = FALSE;
                    }
                    //Choice query
                    $stm = $db->prepare("INSERT INTO choices (question_number, is_correct, answer_text) VALUES (:question_number, :is_correct, :answer)");
                    $stm->bindValue(':question_number', $question_number, PDO::PARAM_INT);
                    $stm->bindValue(':is_correct', $is_correct, PDO::PARAM_INT);
                    $stm->bindValue(':answer', $choices["$i"], PDO::PARAM_STR);
                    $stm->execute();
                    $i++;
                }
            }
            $msg = 'Question has been added';
        

        }
        catch(Exception $ex){
            echo "Error with DB.  (Details: $ex )";
	        die();
        }
     } //choices insert end

     header("Location: add.php");
     die(); 


<?php include 'database.php'; ?>
<?php
    $statement = $db->prepare("DROP TABLE questions, choices;
    CREATE TABLE questions (
      id SERIAL PRIMARY KEY NOT NULL,
      question_number INT NOT NULL,
      points_per INT NOT NULL,
      question_text text NOT NULL,
      UNIQUE(question_number)
    );
    
    CREATE TABLE choices (
    id SERIAL PRIMARY KEY NOT NULL,
    question_number INT NOT NULL REFERENCES questions(question_number) ON UPDATE CASCADE ON DELETE CASCADE,
    is_correct boolean DEFAULT FALSE,  
    answer_text text NOT NULL
    );");
   
    $statement->execute();

?>
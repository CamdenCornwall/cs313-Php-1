<?php
						
    $teacherName = $_POST['tName'];

    if ($teacherName == "teacher"){
        $_SESSION['userType'] = "teacher";
        $_SESSION['username'] = "Prof";
        header("Location: index.php");
        die();
    }
    else{
        header("Location: teacher.php");
            die();
    }
?>
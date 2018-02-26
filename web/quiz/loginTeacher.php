<?php
	session_start();				
    $teacherName = $_POST['tName'];
    $name = "Prof";
    $noName = "User";
    if ($teacherName == "teacher"){
        $_SESSION["userType"] = "teacher";
        $_SESSION["username"] = $name;
        header("Location: index.php");
        die();
    }
    else{
        $_SESSION["username"] = $noName;
        header("Location: teacher.php");
            die();
    }
?>
<?php

// create connection credentials
$dbHost = 'localhost';
$dbPort = '5432';
$dbName = 'quizzer';
$dbUser = 'teacher';
$dbPassword = 'teacher_pass';

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

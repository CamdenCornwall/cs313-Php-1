<?php
// default Heroku Postgres configuration URL
$dbUrl = getenv('DATABASE_URL'); 

if (empty($dbUrl)) {
// create connection credentials
$dbHost = 'localhost';
$dbPort = '5432';
$dbName = 'quizzer';
$dbUser = 'teacher';
$dbPassword = 'teacher_pass';


}
else{
    $dbopts = parse_url($dbUrl);

// print "<p>$dbUrl</p>\n\n";

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');
}

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

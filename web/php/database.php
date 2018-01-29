<?php
// used to get mysql database connection
class Database{
    // 'mysql'  => [
    //     'driver'    => 'mysql',
    //     'host'      => env('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net'),
    //     'database'  => env('DB_DATABASE', 'heroku_aa14476e4e9f9b1'),
    //     'username'  => env('DB_USERNAME', 'bed000d7465464'),
    //     'password'  => env('DB_PASSWORD', 'd3fc6f22'),
    //     'charset'   => 'utf8',
    //     'collation' => 'utf8_unicode_ci',
    //     'prefix'    => '',
    //     'strict'    => false,
    // ],
 
    // specify your own database credentials
    private $host = "us-cdbr-iron-east-05.cleardb.net";
    private $db_name = "heroku_aa14476e4e9f9b1";
    private $username = "bed000d7465464";
    private $password = "d3fc6f22";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
 
}
?>

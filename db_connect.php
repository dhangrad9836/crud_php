<?php
//create constants to connect for user
DEFINE('DB_USER', 'studentweb');
DEFINE('DB_PASSWORD', 'Notreal78');


//define the datasource...mysql to the host which is localhost
//then define the database name which is students
$dsn = 'mysql:host=localhost;dbname=students';

//try/catch to connect to database
try{
    $db = new PDO($dsn, DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    $err_msg = $e->getMessage();
    include('db_error.php');    //this is an outside file that we will create
    exit();
}



?>
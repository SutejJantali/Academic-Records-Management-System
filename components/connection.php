<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','academic_records');

/*attempt to connect to MySQL database*/
try{
    $con = new PDO("mysql:host=". DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    //set te PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo "connected successfully";
} catch(PDOException $e){
    die("ERROR: Could not connect.".$e->getMessage());
}
?>

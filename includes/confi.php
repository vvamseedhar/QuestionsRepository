<?php
define('HOST','localhost');
define('UN','root');
define('PWD','');
define('DB','question_repo');
define('ROOT','http://localhost/questionsRepo');

session_start();




try {
    $dsn = 'mysql:dbname=question_repo;host=localhost';
    $user = 'root';
    $password = '';
  $dbh = new PDO($dsn, $user, $password);
} 
catch (PDOException $e) {
  print "Open database Error!: " . $e->getMessage() . "<br>";
  die();
}
include("includes/init.php");
?>
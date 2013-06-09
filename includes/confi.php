<?php
define('HOST','localhost');
define('UN','root');
define('PWD','');
define('DB','question_repo');
define('HTTP_ROOT','http://localhost/QuestionsRepository/index.php');

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
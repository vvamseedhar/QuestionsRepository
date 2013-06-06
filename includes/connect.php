<?php
include("confi.php");
$connect = mysql_connect(HOST,UN,PWD)or die(mysql_error());
mysql_select_db(DB,$connect);


/*$connect = mysql_connect('localhost','rollgree_zing','pada@7005')or die(mysql_error());
mysql_select_db('rollgree_zingreel_beta',$connect);*/

?>

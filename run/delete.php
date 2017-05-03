<?php

  $connect = mysql_connect("localhost", "root", "Falaffel9812") or die(mysql_error());
	mysql_select_db("gratis4alla", $connect);
 
 if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
	 
 $id = $_GET['id'];
 
 $result = mysql_query("DELETE FROM lista WHERE id=$id")
 or die(mysql_error()); 
 
 header("Location: ../main.php");
 }
else

 {
 header("Location: ../error.php");
 }
?>
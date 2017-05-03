<?php
	include("../includes/connection.php");
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$sql = "INSERT INTO lista (username, password, rank) VALUES('$username', '$password', '1')";
	
	if($connection->query($sql) === TRUE){  ?>
        <script>
            window.location.replace("http://localhost/gratisforalla2/handleAdmin.php");
        </script>
 <?php
	}
	else{
		echo "";
	}
?>
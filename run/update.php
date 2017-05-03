<?php
	include("../includes/connection.php");
		
		$id = $_POST['id'];
		$password = $_POST['password'];
		
		$sql = "UPDATE lista SET password='$password' WHERE id='$id'";
		
		if ($connection->query($sql) === TRUE) { 
?>
			 
<?php
		}
		else {
			echo "Fel: " . $conn->error;
		}

?>
<?php 
	include("/includes/connection.php");
	
	session_start();
	
	if($_SESSION['rank'] == 0){
			header("location: status.php");
		}
		
	if(!isset($_SESSION['username']) || (trim($_SESSION['username']) =='')) {
		header("location: status.php");
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Gratis för Alla</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<?php include("./includes/header.php"); ?>
	<div id="bodyIsh">
		<div class="info">
			<p>Inloggad som: <?php echo $_SESSION['username'] ?></p>
		</div>
		<div class="howto">
			<table class="table table-striped">
					<tr>
						<th>Användarnamn</th>
						<th>Byt lösenord</th>
						<th>Ta bort</th>
					</tr>
					<?php
						$sql = "SELECT * FROM lista";
						$result = $connection->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								if($row['rank'] > 0){
					?>
					<tr>
						<td><?php echo $row['username'];?></td>
						<td><?php echo "<a href=\"./run/edit.php?id=" . $row['id'] . "\">Byt lösenord</a>"; ?></td>						
						<td><?php if($row['rank'] == 1){echo "<a href=\"./run/deleteAdmin.php?id=" . $row['id'] . "\">Ta bort</a>"; }?></td>								
					</tr>
					<?php
						}
						}
						}
						else {
							echo "0 results";
						}
					?>
				</table>
			</div>
			<a href="add.php"><button class="btn btn-secondary">Lägg till admin</button></a>
		</div>
	</body>
<html>
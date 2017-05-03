	<?php 
	include("/includes/connection.php");
	
	session_start();

	if(!isset($_SESSION['username']) || (trim($_SESSION['username']) =='')) {
		header("location: loginSite.php");
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
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
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
						<th>Status på din ansökan</th>
						<th>Avbryt din ansökan <img id="info" src="images/info.png" class="masterTooltip" title="Då raderas även ditt konto" /></th>
					</tr>
					<?php
						$id = $_SESSION['id'];
					
						$sql = "SELECT * FROM lista WHERE id='$id'";
						$result = $connection->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
					?>
					<tr>
						<td><?php echo $row['username'];?></td>
						<td><?php echo $row['status'];?></td>			
						<td><?php echo "<a href=\"./run/delete.php?id=" . $row['id'] . "\">Avbryt</a>"; ?></td>				
					</tr>
					<?php
						}
						} 
						else {
							echo "0 results";
						}
					?>
				</table>
			</div>
		</div>	
	</body>
<html>
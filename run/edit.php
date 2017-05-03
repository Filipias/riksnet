<html>

<head>
    <meta charset="utf-8">
    <title>Ändra lösenord</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <?php include("../includes/header.php"); ?>
	
	<?php
		include("../includes/connection.php");
		if (isset($_GET['id']) && is_numeric($_GET['id'])){
			$id = $_GET['id'];
		}
			$sql = "SELECT * FROM lista WHERE id = $id";
		$result = $connection->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {					
	?>
	
    <form id="formLogin" action="./update.php" method="POST">
			<div class="form-group">
				<label for="username">Byt lösenord på: <?php echo $row['username']; ?></label>
			</div>
			<div class="form-group">
				<label for="password">Nytt Lösenord</label>
				<input type="password" class="form-control" name="password" id="password" placeholder="Nytt lösenord">
			</div>
			<a href="../handleAdmin.php"><button type="button" class="btn btn-primary">Tillbaka</button></a>
			<button type="submit" class="btn btn-primary">Uppdatera</button>
		</form>
    <?php
			}
		}
    ?>
</body>

</html>

<html>

<head>
    <meta charset="utf-8">
    <title>Lägg till admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <?php include("./includes/header.php"); ?>
    <form id="formLogin" action="./run/addAdmin.php" method="POST">
			<div class="form-group">
				<label for="username">Användarnamn</label>
				<input type="text" class="form-control" name="username" id="username" placeholder="Användarnamn">
			</div>
			<div class="form-group">
				<label for="password">Lösenord</label>
				<input type="password" class="form-control" name="password" id="password" placeholder="Lösenord">
			</div>
			<button type="submit" class="btn btn-primary">Lägg till</button>
		</form>
</body>

</html>

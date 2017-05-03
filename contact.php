<html>

<head>
    <meta charset="utf-8">
    <title>Formulär</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<header>
    <?php include("./includes/header.php"); ?>
</header>

<body>
    <p class="info_title">Kontakta riksnet</p>
	 <div class="contact">
		<p class="contact_text"> 
				Kontakta riksnet via telefon
				<p class="contact_phone">Telefonnummer: 0770 - 33 99 33</p>
				<p class="howto_text">Öppettider<br>Vardagar: 08:00-21:00<br>Helger och helgdagar: 11:00-16:00</p>
		</p>
	</div>
	<div class="contact">
		<p class="contact_text"> 
			<p class="contact_phone">För mejlkontakt fyll i detta formulär</p>
		</p>
	</div>
    <form method="POST" action="./run/skicka.php">
        <div class="formular">
            <div class="form-group">
                <label for="formGroupExampleInput">Namn:</label>
                <input name="firstname" type="text" class="form-control" id="formGroupExampleInput" placeholder="Sven Svensson">
            </div>
			<div class="form-group">
                <label for="formGroupExampleInput">kundnummer (Om du har ett):</label>
                <input name="firstname" type="text" class="form-control" id="formGroupExampleInput" placeholder="1751249">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail :</label>
                <input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="exempel@gmail.com">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telefonnummer :</label>
                <input name="phone" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="070-XXXXXXX">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Ärende:</label>
                <textarea name="descriptionSite" class="form-control" rows="6" placeholder="Beskriv ditt ärende utförligt"></textarea>
            </div>
            <div class="form-group">
                <button id="bone" class="btn btn-primary">Skicka</button>
            </div>
        </div>
    </form>
</body>

</html>

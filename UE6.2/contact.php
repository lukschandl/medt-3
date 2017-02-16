<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>blueIT Kontakt</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<style type="text/css">
		.wrapper {width: 960px; margin: auto;}
		header {}
		nav {}
		main {}
		aside {}
		footer {}
		label {font-weight: normal;}
	</style>
</head>
<body>
<div class="wrapper">
	<header></header>
	<nav>
		<ul class="nav nav-pills">
  		<li role="presentation"><a href="index.php">Home</a></li>
  		<li role="presentation"><a href="#">About</a></li>
  		<li role="presentation"><a href="#">Portfolio</a></li>
  		<li role="presentation" class="active"><a href="contact.php">Kontakt</a></li>
  		<li role="presentation"><a href="#">Mein Konto</a></li>
		</ul>
	</nav>
	<main>
		<h2 style="color: red;">Kontakt</h2>
        <h3>Wir freuen uns auf ihre Anfrage!</h3>
        <form action="contact2.php" method="post">
        	<p>Der Grund für ihre Anfrage!*</p>
        	<label><input type="radio" name="rsn" value="cat1" required=""> Freie Stellen</label>
			<br>
			<label><input type="radio" name="rsn" value="cat2" required=""> Produktreklamation</label>
			<br>
			<label><input type="radio" name="rsn" value="cat3" required=""> Produktneuheiten</label>
			<br>
			<p style="display: inline-block;">Anrede*</p>
			<label><input type="radio" name="anrd" value="cat1" required=""> Frau</label>
			<label><input type="radio" name="anrd" value="cat2" required=""> Herr</label>
			<br>
			<label>Vorname* <input type="text" name="vn" required=""></label>
			<label>Nachname* <input type="text" name="nn" required=""></label>
			<br>
			<label>Straße* <input type="text" name="str" required=""></label>
			<label>PLZ* <input type="text" name="plz" required=""></label>
			<br>
			<label>Ort* <input type="text" name="ort" required=""></label>
			<label>Land* <select size="1" name="cntr" required=""><option>Österreich</option>
													 			  <option>Deutschland</option>
													 			  <option>Schweiz</option></select></label>
			<br>
			<label>Tel.* <input type="text" name="tel" required=""></label>
			<label>E-Mail* <input type="text" name="eml" required=""></label>
			<br>
			<p>Anfrage*</p>
			<textarea name="anfrg" rows="5" style="width: 444px"></textarea>
			<br>
			<label><input type="submit" name="submitbtn" value="Anfrage senden"></label>
			<br>
			<p style="font-size: 8pt;">* Pflichtfelder - bitte ausfüllen</p>
        </form>
	</main>
	<footer>©blueIT 2014</footer>
</div>
</body>
</html>
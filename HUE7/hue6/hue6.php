<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
body{background-color: lightblue;}
#wrapper{width: 500px;margin: auto; background-color: white;border-style: border-radius: 25px;
    border: 2px solid #73AD21;border-radius: 25px;margin-top: 200px;
    
    }
#main{width: 250px;margin: auto; background-color: white;}

li:nth-of-type(odd){
	background-color: lightgray;
}

</style>

<title>PHP</title>
</head>
<body>
	<div id="wrapper">
	<div id="main">
	<h1 style="text-align: center;">Beispiel 1</h1>
	 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	 <p>Ihre Eingabe <input type="text" class="form-control" name="ein" placeholder="Eingabe"></p>
	
	<input type="submit" value="Explode" class="btn btn-danger" name="exbttn">
	<input type="submit" value="Reset" class="btn btn-success" name="clbttn">
	<br>
	<br>
	<h7>Ihre Einagbe als Liste: </h7>

	</form>
	
	<?php 
	if(isset($_POST['exbttn'])){
		$_teile = explode(" ", $_POST['ein']);
		echo "<ul>";
			foreach ($_teile as $item) {
				echo "<li>$item</li>";
			}
			echo "</ul>";
		}
		if(isset($_POST['clbttn'])){
		$myArray = array();
		
		echo "<ul>";
			foreach ($myArray as $item) {
				echo "<li>$item</li>";
			}
			echo "</ul>";
		}
?>
		</div>
		</div>
	
	
	   </body>
	   </html>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<style type="text/css">
	label {
		display: block;
		font-style: thin;
	}

	th {
		font-size: 25px;
	}
</style>

</head>
<body>

<div class="container-fluid" style="padding-left: 40px; padding-right: 200px;">

<h2>Grid Generator</h2>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

<div >


<label><input type="checkbox" name="days[]" value="Monday"> Montag</label>
<label><input type="checkbox" name="days[]" value="Tuesday"> Dienstag</label>
<label><input type="checkbox" name="days[]" value="Wednesday"> Mittwoch</label>
<label><input type="checkbox" name="days[]" value="Thursday"> Donnerstag</label>
<label><input type="checkbox" name="days[]" value="Friday"> Freitag</label>
<label><input type="checkbox" name="days[]" value="Saturday"> Samstag</label>
<label><input type="checkbox" name="days[]" value="Sunday"> Sonntag</label>
</div>

<label>Wie viel Spalten sollen erzeugt werden?* <input type="number" name="spalten" required></label>

<button type="submit" name="btn">Generate</button>

</form>

<br>

<?php 
if (isset($_POST['btn'])) {
 ?>
<table class="table table-bordered table-hover table-responsive">
	<thead class="thead-inverse">
	  <tr>
	    <th>Tag</th>
	    <?php 
	    	$spalte=$_POST['spalten'];
	    	for ($i=1; $i < $spalte+1; $i++) { 
	    		echo '<th>Ereignis '.$i.'</th>';
	    	}
	    ?>
	  </tr>
	</thead>
	<tbody>
		<?php 
			$day=$_POST['days'];
			for ($i=0; $i < sizeof($day); $i++) { 
				echo '<tr><td>'.$day[$i].'</td>';
				for ($j=1; $j < $spalte+1; $j++) { 
					$k=$i+1;
					echo '<td>Ereignis '.$k.'.'.$j;
				}
			}
			'</tr>'
		?>
	</tbody>
</table>
<?php 
}
?>





</div>




</body>
</html>
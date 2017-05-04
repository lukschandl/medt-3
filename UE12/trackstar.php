<?php
	if(isset($_POST['deleteProId'])) {
		echo $_POST['deleteProId'];
		exit;
	}
	$host='localhost';
	$dbname='medt3';
	$user='htluser';
	$pwd='htluser';


	try{
		$db=new PDO ( "mysql:host=$host;dbname=$dbname", $user, $pwd);
	}catch(PDOException $e){
		exit("<h2 class=\"bg-danger\">System nicht verfügbar!<br><br>$e</h2>");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body>
<div class="container">
<h1>Projektübersicht</h1>
<p id="info-box"></p>
<table class="table table-bordered">
	<thead>
	  <tr>
        <th>Name</th>
        <th>Beschreibung</th>
        <th>Datum</th>
        <th>Operationen</th>
	  </tr>
	</thead>
	<tbody>
	<?php
	//PDOStatement
	$res = $db->query("SELECT * FROM project");
	//Array
	$temp = $res->fetchAll(PDO::FETCH_ASSOC);
		foreach ($temp as $row) { ?>
			<tr id="<?php echo $row['id']?>">
				<td><?php echo htmlspecialchars($row['name']);?></td>
				<td><?php echo htmlspecialchars($row['description']);?></td>
				<td><?php echo htmlspecialchars($row['createDate']);?></td>
		        <td>
		        	<span class="glyphicon glyphicon-pencil edit"></span>
		          	<span class="glyphicon glyphicon-trash delete"></span>
		        </td>
			</tr>
	<?php } ?>
	</tbody>
</table>
<button type="button" class="btn" aria-label="Left Align">
  <span class="glyphicon glyphicon-plus" aria-hidden="true" style="margin:0px;"></span>
</button>

</div>

<script src="trackstar.js"></script>

</body>
</html>

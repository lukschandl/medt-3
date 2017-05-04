<!DOCTYPE html>
<html>
<head>
	<title></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- jQuery library -->



<style type="text/css">
	span.glyphicon {
		margin-right: 10px;
		color: #000;
	}
	a {
		text-decoration: none;

	}
</style>


</head>
<body>

<?php 
	$host='localhost';
	$dbname='medt3';
	$user='htluser';
	$pwd='htluser';
	

	try{
		$db=new PDO ( "mysql:host=$host;dbname=$dbname", $user, $pwd);
	}catch(PDOException $e){
		exit("<h2 class=\"bg-danger\">System nicht verfügbar!</h2>");
	}
	?>
	

<div class="container">
<h1 style="text-align: center;">Projektübersicht</h1>



<table class="table table-hover">
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
	$res = $db->query ("SELECT * FROM project");
	//Array
	$temp = $res->fetchAll(PDO::FETCH_ASSOC);
		foreach ($temp as $row) { ?>
			<tr>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['description'];?></td>
				<td><?php echo $row['createDate'];?></td>
                <td>
                	<a data-pid="<?php echo $row['id'];?>" class="change"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    <a id="<?php echo $row['id'];?>" class="delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                    
                  
                </td>
			</tr>
	<?php } ?>
	</tbody>
</table>
<a><button type="button"  class="btn btn-default" >New Project  <span class="glyphicon glyphicon-plus"></button></a>





</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>
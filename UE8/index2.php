<html>
<head>
	<title>Datenbank</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<style>
.wrapper{width: 100%; height: 100%;}
.main{width: 45%;  margin: auto; padding: 10px; margin-top: 200px; background-color: white; border-style: border-radius: 25px;
    border: 3px solid #047ea3;}
 *{font-family: Verdana;}
 body{background-color: #06ade0;}
 table{
 	width: 100%;
 	border:none;
 }
 th{
 	 	background-color: #3e4547;
 	 	color: #fff;
 }


</style>
	
</head>
<body>

<div class = "wrapper">
	<div class="main">
<?php
 $host= 'localhost';
$dbname = 'medt3';
$user = 'htluser';
$pwd ='htluser';
try{

$db=new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
} catch(PDOException $e){
	exit ("<p class='bd-danger'> Datenbank nicht Verfügbar</p>");
}
 $res = $db->query("SELECT * FROM project");
  $tmp = $res->fetchAll(PDO::FETCH_ASSOC);

 echo "<table>";
 	echo "<tr>";
 			echo "<th>Name</th>";
 			echo "<th>Description</th>";
 			echo "<th>Create Date</th>";
 			echo "<th>Operationen</th>";
 	echo "</tr>";
 	foreach($tmp as $fetch)
 	{
 		echo "<tr>";
 			echo "<td>". $fetch['name'] ."</td>";
 			echo "<td>". $fetch['description'] ."</td>";
 			echo "<td>". $fetch['createDate'] ."</td>";
 			echo '<td> 
 				<a href="htaccess.php?delete=$fetch["id"]" style="color: black;"><span class="glyphicon glyphicon-trash"></span></a>
 				<a href-"#" style="color:black;"><span style= "margin-left :10px;" class="glyphicon glyphicon-pencil"></span></a>
 				  </td>';
 		echo "</tr>";

 	}


?>
</div>
</div>
</body>
</html>
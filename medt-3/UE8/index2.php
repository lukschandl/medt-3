<html>
<head>
	<title>Datenbank</title>
	<meta charset="utf-8">
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

$db=new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);

 $res = $db->query("SELECT * FROM project");
  $tmp = $res->fetchAll(PDO::FETCH_ASSOC);

 echo "<table>";
 	echo "<tr>";
 			echo "<th>Name</th>";
 			echo "<th>Description</th>";
 			echo "<th>Create Date</th>";
 	echo "</tr>";
 	foreach($tmp as $fetch)
 	{
 		echo "<tr>";
 			echo "<td>". $fetch['name'] ."</td>";
 			echo "<td>". $fetch['description'] ."</td>";
 			echo "<td>". $fetch['createDate'] ."</td>";
 		echo "</tr>";

 	}


?>
</div>
</div>
</body>
</html>
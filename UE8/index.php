<<html>
<head>
	<title>Datenbank</title>
	<meta charset="utf-8">
	<style>
.wrapper{width: 100%; height: 100%;}
.main{width: 27.9%;  margin: auto; padding: 10px; margin-top: 200px; background-color: white; border-style: border-radius: 25px;
    border: 3px solid #73AD21;border-radius: 25px;}
 body{background-color: lightblue;}


</style>
	
</head>
<body>

<div class = "wrapper">
	<div class="main">
<?php
 mysql_connect('localhost', 'htluser', 'htluser') or die(mysql_error());
 mysql_select_db('medt3') or die(mysql_error());

 $sql = "SELECT * FROM project";
 $query = mysql_query($sql) or die(mysql_error());

 echo "<table border=1>";
 	echo "<tr>";
 			echo "<th>Name</th>";
 			echo "<th>Description</th>";
 			echo "<th>Create Date</th>";
 	echo "<tr>";
 	while($fetch = mysql_fetch_assoc($query))
 	{
 		echo "<tr>";
 			echo "<td>". $fetch['name'] ."</td>";
 			echo "<td>". $fetch['description'] ."</td>";
 			echo "<td>". $fetch['createDate'] ."</td>";
 		echo "<tr>";

 	}


?>
</div>
</div>
</body>
</html>
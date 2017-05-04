<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>dbAccess</title>
    <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    

    <style type="text/css">
      .container
        {
          min-height: 1000px;
          margin-top:30px;
          border: 2px solid black;
          background-color: rgba(255,255,255,0.05);
        }
        .items_edit
        {
          color:green;
        }
        .items_delete
        {
          color:#b71f1f;
        }
    </style>
  </head>
  <body>
    <div class="container">
    <h1>Trackstar</h1>
    <p id="info-box"></p>
    <p>
      <a href="index.php?insert"><button type="button" class="btn btn-default">Insert  </span></button></a>
  	   <a href="index.php?new"><button type="button" class="btn btn-default" >New Project  <span class="glyphicon glyphicon-plus"></button></a>
       <a href="index.php?dele"><button type="button" class="btn btn-default">Delete everything</button></a>

  </p>
  <br>

<?php

// DB Settings
$host = 'localhost';
$dbname = 'medt3';
$user ='htluser';
$pwd = 'htluser';

// Establish & check connection
try {
   $db = new PDO ("mysql:host=$host;dbname=$dbname", $user, $pwd);
} catch (PDOException $e) {
   echo "<h1>Error: " . $e->getMessage()."</h1>";
   die();
}

if(isset($_POST['deleteProId']))
{
  echo "Hallo du";
  exit;
}


// SELECT Statement
$sql = "SELECT * FROM project";
$res = $db->query($sql);
$tmp = $res->fetchAll(PDO::FETCH_OBJ);

// Show Table
echo "<table class=\"table table-hover\">
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>description</th>
      <th>createDate</th>
      <th>operations</th>
    </tr>
  </thead>
  <tbody>";

$items = 0;
foreach ($tmp as $row) {
  echo "<tr id='$row->id'>
  <td>" . $row->id . "</td>
  <td>" . $row->name . "</td>
  <td>" . $row->description . "</td>
  <td>" . $row->createDate . "</td>
  <td>
    <a class=\"change\" data-pid=\" ". $row->id . "\"><span class=\"glyphicon glyphicon-pencil items_edit\"></span>
    <a class=\"delete\" id=\" ". $row->id . "\"><span class=\"glyphicon glyphicon-trash items_delete\"></span>
  </td>";
 
  echo "</tr>";
}



?>
    </div>
<script type="text/javascript" src="function.js"></script>
  </body>
</html>

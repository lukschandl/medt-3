<?php

require "db/db.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title></title>
   
</head>
<body>
<div class="container" style="margin-top: 5%;">
    <?php 

    $host ='localhost';
    $dbname='medt3';
  
    
    if(isset($_POST['deleteProId'])){
        echo "Hallo, du!";
        exit;
    } 
    //$res: PDOStatement
    $res=$db->query ( "SELECT name,description,createDate, id FROM project" );
    //$tmp: array
    $tmp=$res->fetchAll(PDO::FETCH_OBJ); 
    ?>
    <h1>Projektübersicht</h1>
    <p id="info-box"></p>
    <br>
    <table class="table table-bordered table-hover">
		<thead>
			<tr style="background-color: lightgrey;">
				<th>Name</th>
				<th>Description</th>
				<th>Date</th>
				<th>Operations</th>
			</tr>
		</thead>
	    <tbody>
			<?php foreach ($tmp as $row) :?>
        <?php echo '<tr id="'.$row->id.'">' ?>
            <td><?php echo htmlspecialchars($row->name);?></td>
            <td><?php echo $row->description;?></td>
            <td><?php echo $row->createDate;?></td>
            <?php echo '<td><a><span class="glyphicon glyphicon-trash delete-icon" style="color:black"></span></a>
				<a><span class="glyphicon glyphicon-pencil edit-icon" style="color:black"></span></a>				
				</td>';
            ?>
        </tr>
    <?php endforeach; 	 ?>
    </tbody>
    </table>
    <!-- Bootstrap Modal Static - HTML Grundgerüst -->
    <div id="delete-project-modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Projekt löschen</h4>
      </div>
      <div class="modal-body">
        <p>Wollen Sie das Projekt wirklich löschen?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
        <button id="delete-project-btn" type="button" class="btn btn-primary">Löschen</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->    
</div>
 <div id="edit-project-modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Projekt bearbeiten</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
              <label>Name </label>
              <input id="editNameBox" type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
              <label>Description </label>
              <input id="editDescBox" type="text" class="form-control" name="desc">
          </div>
          <div class="form-group ">
              <label>Date </label>
              <input id="editDateBox" type="date" name="createDate">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
        <button id="edit-project-btn" type="button" class="btn btn-primary">Aktualisieren</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->    
</div>
<!-- Latest compiled and minified JavaScript -->
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/app.js"></script>
</body>
</html>
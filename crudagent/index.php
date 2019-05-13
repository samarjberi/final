<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<?php require_once 'process.php'; ?>

	    <?php  
	    if(isset($_SESSION['message'])):   ?>

	    	<div class="alert alert-<?=$_SESSION['msg_type']?>">

	    		<?php 
	    		  echo $_SESSION['message'];
	    		  unset($_SESSION['message']);


	    		?>
	    	</div>
	    <?php endif ?>
	<div class="container">
      <?php 
         $mysqli = new mysqli('localhost','root','', 'crud') or die (mysqli_error($mysqli ));
         $result = $mysqli->query("SELECT * FROM data ") or die($mysqli->error);
         //pre_r($result);
        //pre_r( $result->fetch_assoc());
        //pre_r( $result->fetch_assoc());
        ?>
        

           <div class="justify-content-center">
                     <table class="table">
                     	<thead>
                     		<tr>
                     			<th>Name </th>
                     			<th>  Location </th>
                     			<th colspan="2">Action</th>
                     		</tr>
                     	</thead>
                     	<?php while ( $row = $result->fetch_assoc()): ?>

                          
                          <tr>
                          	<td><?php echo $row['name']; ?></td>
                          	<td><?php echo $row['location']; ?></td>
                          	<td> 
                               <a href="index.php?edit=<?php echo $row['id']; ?>"
                               	class="btn btn-info">Edit</a>
                                
                                <a href="process.php?delete=<?echo $row['id']; ?>"
                                		class="btn btn-danger">Delete</a>
                          	</td>
                          </tr>
                      <?php endwhile; ?>
                     </table>

           </div>
         <?php
           function pre_r( $array){
           	  echo '<pre>';
           	  print_r($array);
           	   echo '</pre>';
           }

      ?>


	<div class=" justify-content_center">


	  <form action="process.php"  method="POST">
	  	<input type="hidden" name="id" value="<?php echo $id ?>">
	  	<div class="form-group">
	  	<label>name</label>
	  	<input type="text" placeholder="enter your name" name="name" class="form-control" value="<?php echo $name; ?>">
	  </div>
	  <div class="form-group">
	  	<label>location</label>
	  	<input type="text" name="location" placeholder="enter your location" class="form-control" value="<?php echo $location; ?>">
	  </div>
         <div class="form-group">
         	<?php 
         	if($update == true):
         		?>
         		<button type="submit" name="update" class="btn btn-primary " > update</button>
         		<?php else: ?>
         		
	  	<button type="submit" name="save" class="btn btn-primary " > save</button>
	  <?php endif; ?>
	  </div>
	  	

	  </form>
	</div>
</div>

</body>
</html>
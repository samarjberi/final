<?php  include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   

	
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

     


     <?php $results = mysqli_query($mysqli, "SELECT * FROM produits"); ?>



     <?php 
         $mysqli = new mysqli('localhost','root','', 'parasquare') or die (mysqli_error($mysqli ));
         $result = $mysqli->query("SELECT * FROM produits ") or die($mysqli->error);
         //pre_r($result);
        //pre_r( $result->fetch_assoc());
        //pre_r( $result->fetch_assoc());
        ?>

<table>
	<thead>
		<tr>
			<th>Nom</th>
			<th>prix</th>
			<th>dispo</th>
			
			<th colspan="2">Action</th>
		</tr>
	</thead>

	<!--trying code-->
	<?php while ( $row = $result->fetch_assoc()): ?>

	
	
		<tr>
			<td><?php echo $row['nom']; ?></td>
			<td><?php echo $row['prix']; ?></td>
			<td><?php echo $row['dispo']; ?></td>
			
           <td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>

			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			
		</tr>
	<?php endwhile; ?>
</table>
<?php
           function pre_r( $array){
           	  echo '<pre>';
           	  print_r($array);
           	   echo '</pre>';
           }
           ?>




	<form method="post" action="server.php" >
		<div class="input-group">
			<label>Nom</label>
			<input type="text" name="nom" value="">
		</div>

		<div class="input-group">
			<label>prix</label>
			<input type="text" name="prix" value="">
		</div>

		<div class="input-group">
			<label>disponiblité</label>
			<input type="text" name="dispo" value="">
		</div>
		
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
	</form>
</body>
</html>
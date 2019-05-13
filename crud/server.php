<?php 
	session_start();
	//$db = mysqli_connect('localhost', 'root', '', 'parasquare');
      

     $mysqli = new mysqli('localhost','root','', 'parasquare') or die (mysqli_error($mysqli ));

	// initialize variables
	$nom = "";
	$prix = "";
	$dispo="";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$nom = $_POST['nom'];
		$prix = $_POST['prix'];
		$dispo = $_POST['dispo'];
		$mysqli->query("INSERT INTO produits(nom , prix, dispo) VALUES ('$nom', '$prix','$dispo')") or die($mysqli->error );

		//mysqli_query($db, "INSERT INTO produits (nom, prix, dispo) VALUES ('$nom', '$prix', '$dispo')"); 
		$_SESSION['message'] = "produit ajouté"; 
		header('location: index.php');
	}
	?>

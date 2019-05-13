<?php

$con = mysqli_connect('localhost','root','','parasquare');
if(isset($_POST['search']) && !empty($_POST['search']))
{
		$search = htmlentities($_POST['search']);
		$sql = "SELECT `nom` FROM `produits` WHERE `nom` LIKE '%$search%' ";
		$result = mysqli_query($con,$sql);
		while($rows=mysqli_fetch_assoc($result))
		{
			echo "<h4>".$rows['nom']."</h4></br>";
		}
		mysqli_free_result($result);
		mysqli_close($con);
}

?>
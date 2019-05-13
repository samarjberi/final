<?php
    include('functions.php');
    $id = $_GET['id'];
    
    $query = "DELETE FROM `requests` WHERE `requests`.`id` = '$id';";
        if(performQuery($query)){
            echo "le compte est rejeté
.";
        }else{
            echo "Une erreur inconnue s'est produite. Veuillez réessayer.";
        }

?>
<br/><br/>
<a href="home.php">retourner</a>
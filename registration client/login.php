<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>connexion client</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>connexion</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Nom</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>mot de passe</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">connexion</button>
  	</div>
  	<p>
  		Pas encore membre? <a href="register.php">s'inscrire</a>
  	</p>
  </form>
</body>
</html>
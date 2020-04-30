<?php
require '../include/header.php'
?>

<!DOCTYPE html>
<html>

	<head>
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="../css/connexion.css">
		<title>Connexion</title>
		
	</head>
	<body>
		<div class="login-form">
			<h1>Identifiez-vous</h1>
			<form action="../function/connexion.php" method="POST">
				<input type="text" name="identifiant" placeholder="Identifiant" required>
				<input type="password" name="motDePasse" placeholder="Mot de passe" required>
				<input type="submit">
			</form>
		</div>
	</body>
</html>
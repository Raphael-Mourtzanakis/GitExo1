<!DOCTYPE html>
	<html lang=fr>
		<head>
			<meta charset="UTF-8">
			<title>Git en local</title>
		</head>
		<body>
			<h1>Bonjour</h1>
			
			<?php
				if (isset($_GET["nom"]) && isset($_GET["prenom"])) {
					$nom = $_GET["nom"];
					$prenom = $_GET["prenom"];

					echo "<h2>".$nom." ".$prenom."</h2>";
				}
			?>
		</body>
	</html>
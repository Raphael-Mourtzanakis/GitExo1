<!DOCTYPE html>
	<html lang=fr>
		<head>
			<meta charset="UTF-8">
			<title>Git en local</title>
		</head>
		<body>
			<?php
				if ($_GET["login"] == "admin" && $_GET["mdp"] == "azerty") {
					$login = $_GET["login"];

					echo "
						<h1>Bonjour</h1>
						<h2>".$login."</h2>
					";
				} else {
					$host = $_SERVER['HTTP_HOST']; // on récupère le nom de l’hôte 
					$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); // on récupère le début de l’URL 
					header("Location: http://$host$uri/index.html"); // on redirige vers l’URL, en complétant les "..."
				}
			?>
		</body>
	</html>
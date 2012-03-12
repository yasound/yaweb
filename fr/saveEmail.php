<?php

if (empty($_POST["email"])) {
	echo "<h2>Erreur</h2><p>Désolé une erreur est survenue :(</p><div id=\"close\"></div>";
} else {
	include_once "php/bdd.php";
	$sql=sprintf("INSERT INTO emails (email) VALUES ('%s')", mysql_real_escape_string($_POST["email"]));
	$result = mysql_query($sql);
	if ($result) {
		echo "<h2>Confirmation</h2>\n\t\t<p>Nous avons bien reçu votre demande d'invitation à la beta privée de Yasound, et nous vous en remercions. Nous vous contacterons dès que des places seront disponibles.<br />Cordialement,</p>\n\t\t<p>L'équipe Yasound </p>\n\t\t<div id=\"close\"></div>";
	} else {
		echo "<h2>Erreur</h2><p>Désolé une erreur est survenue :(</p><div id=\"close\"></div>";
	}
}
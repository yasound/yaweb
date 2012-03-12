<?php

if (empty($_POST["email"])) {
	echo "<h2>Error</h2><p>Sorry an error occured :(</p><div id=\"close\"></div>";
} else {
	include_once "php/bdd.php";
	$sql=sprintf("INSERT INTO emails (email,lang) VALUES ('%s','en')", mysql_real_escape_string($_POST["email"]));
	$result = mysql_query($sql);
	if ($result) {
		echo "<h2>Confirmation</h2>\n\t\t<p>Thanks for your interest in Yasound. We'll contact you as soon as more spots for beta testers become available.</p>\n\t\t<p>Team Yasound</p>\n\t\t<div id=\"close\"></div>";
	} else {
		echo "<h2>Error</h2><p>Sorry an error occured :(</p><div id=\"close\"></div>";
	}
}
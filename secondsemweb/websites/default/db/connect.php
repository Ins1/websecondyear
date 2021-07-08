<?php
	$server = 'v.je';
	$username = 'v.je';
	$password = 'v.je';

	$schema = 'inshan';
	$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	?>
<?php

	try {
			$host='localhost';
	        $username = 'root';
	       	$password = '';
	        $db = 'cadastro';
	        $dbh = new PDO('mysql:host='.$host.';dbname='.$db.'', $username, $password);

			/*
	        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $sth = $dbh->prepare('SELECT * from animal');
	        $sth->execute();
	        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
	        */

	} catch (PDOException $e) {
		print "Error!:" . $e->getMessage();
		die();
	}

?>


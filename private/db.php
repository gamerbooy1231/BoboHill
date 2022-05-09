<?php
	try {

		$db = new PDO('mysql:host=172.31.52.97;dbname=test', 'root', '&qA:+RsE;/a9\'E.B');
		$db->setAttribute(PDO::MYSQL_ATTR_FOUND_ROWS, TRUE);
	}
	
	catch (PDOException $e) {
	
		die('We are currently undergoing database maintenance. We\'ll be back momentarily!');
	
	}
	


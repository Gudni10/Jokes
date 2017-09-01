<?php
	try
	{
		$pdo = new PDO('mysql:host=localhost;dbname=gudnikb', 'gudnikb', 'klemma123');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->exec('SET NAMES "utf8"');
	}
	
	catch (PDOException $e)
	{
		$error = "unable to connect to the database" . $e->getMessage();
		include $_SERVER['DOCUMENT_ROOT']. '/nemendur/gudnikb/jokes/error/error.php';
		exit();
	}
?>
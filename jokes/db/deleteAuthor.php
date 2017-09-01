<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/nemendur/gudnikb/jokes/db/dbConnect.php';

	try
	{
		$sql = 'DELETE FROM authors WHERE id = :id';
		$s = $pdo->prepare($sql);
		$s->bindValue(':id', $_POST['id']);
		$s->execute();
	}
	catch (PDOException $e)
	{
		$error = 'Error deleting authors.';
		include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/error/error.php';
		exit();
	}
?>
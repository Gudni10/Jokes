<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/author/worker.php'; ?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/workers/htmlSpecialChars.php'; ?>

<html>
	<head>
	<link rel="stylesheet" type="text/css" href="author.css">
		<meta charset="utf-8">
		<title> Manage Author</title>
	</head>
	<body>
		<h1>Manage Author</h1>
		<p><a href="worker.php?add">add new author</a></p>
		<ul>
		<?php foreach ($authors as $author): ?>
		<li>
		<form action="" method="post">
		<div>
			<?php echo html ($author["name"]); ?>
			<input type="hidden" name="id" value="<?php
			echo $author["id"]; ?>">
			<input type="submit" name="action" value="Edit">
			<input type="submit" name="action" value="Delete">
			</div>
			</form>
		</li>
		<?php endforeach; ?>
 		</ul>
		<p><a href="..">Return to JMS home</a></p>
	</body>
</html>
<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/dbConnect.php';
    try{
        $sql = 'INSERT INTO category SET name = :name';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_POST['name']);
        $s->execute();
    }
    catch (PDOException $e){
        $error = 'Error adding submitted category.';
        include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/error/error.php';
        exit();
    }
?>
<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/dbConnect.php';
    try{
        $sql = 'UPDATE category SET name = :name WHERE id = :id';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_POST['name']);
        $s->bindValue(':id', $_POST['id']);
        $s->execute();
    }
    catch (PDOException $e){
        $error = 'Error updating submitted category.';
        include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/error/error.php';
        exit();
    }
?>
<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/dbConnect.php';
    try{
        $sql = 'SELECT id, name FROM category WHERE id = :id';
        $s = $pdo->prepare($sql);
        $s->bindValue(':id', $_POST['id']);
        $s->execute();
    }
    catch (PDOException $e){
        $error = 'Error fetching category details.' . $e->getMessage();
        include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/error/error.php';
        exit();
    }
    $row = $s->fetch();
?>
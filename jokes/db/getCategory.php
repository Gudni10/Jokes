<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/dbConnect.php';
    try{
        $result = $pdo->query('SELECT id, name FROM category');
    }
    catch (PDOException $e){
    $error = 'Error fetching category details.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/error/error.php';
    exit();
}
?>
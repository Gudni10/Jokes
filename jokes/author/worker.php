<?php

if (isset($_GET['add'])){
        $pageTitle = 'New Author';
        $action = 'addform';
        $name = '';
        $id = '';
        $button = 'Add author';
        include 'form.php';
        exit();
    }
    if (isset($_GET['addform'])){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/insertAuthor.php';
        header('Location: .');
        exit();
    }
    if (isset($_POST['action']) and  $_POST['action'] == 'Edit'){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/getAuthorWhereid.php';
        $pageTitle = 'Edit Author';
        $action = 'editform';
        $name = $row['name'];
        $id = $row['id'];
        $button = 'Update Author';
        include 'form.php';
        exit();
    }
    if (isset($_GET['editform'])){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/updateAuthor.php';
        header('Location: .');
        exit();
    }
   

	if (isset($_POST['action']) and  $_POST['action'] == 'Delete') {

        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/deleteAuthor.php';

        header('Location: .');
        exit();
    }
	
    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/getAuthor.php';

foreach ($result as $row){

        $authors[] = array('id' => $row['id'], 'name' => $row['name']);
    }

?>
<?php
if (isset($_GET['add'])){
        $pageTitle = 'New Category';
        $action = 'addform';
        $name = '';
        $id = '';
        $button = 'Add category';
        include 'form.php';
        exit();
    }
    if (isset($_GET['addform'])){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/insertCategory.php';
        header('Location: .');
        exit();
    }
    if (isset($_POST['action']) and  $_POST['action'] == 'Edit'){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/getCategoryWhereId.php';
        $pageTitle = 'Edit Category';
        $action = 'editform';
        $name = $row['name'];
        $id = $row['id'];
        $button = 'Update category';
        include 'form.php';
        exit();
    }
    if (isset($_GET['editform'])){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/updateCategory.php';
        header('Location: .');
        exit();
    }
    if (isset($_POST['action']) and  $_POST['action'] == 'Delete') {
		
	
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/deleteJokeCategory.php';

        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/deleteCategory.php';

        header('Location: .');
        exit();
    }
    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/getCategory.php';
foreach ($result as $row){
        $categories[] = array('id' => $row['id'], 'name' => $row['name']);
    }
?>
<?php

require_once('includes/dbconnect.php');
require_once('includes/functions.php');

//if (!isValid) {
//    header('Name: newWonders.php');
//}

//if (!isset($_POST['name']) || !$_POST['name']) {
//    header('Location: index.php');
//}

$wonderAdded = addNewWonder($db, $_POST);

if ($wonderAdded) {
    header('Location: index.php');
} else {
    header('Location: newWonders.php');
}


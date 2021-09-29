<?php

require_once('includes/dbconnect.php');
require_once('includes/functions.php');

if (!isValid) {
    header('Name: newWonders.php');
}

$wonderAdded = addNewWonder($db, $_POST);

if ($wonderAdded) {
    header('Name: index.php');
} else {
    header('Name: newWonders.php');
}

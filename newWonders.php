<?php

require_once('includes/dbconnect.php');
require_once('includes/functions.php');

$wonderAdded = addNewWonder($db, $_POST);

if ($wonderAdded) {
    header('Location: index.php');
} else {
    header('Location: newWonders.php');
}


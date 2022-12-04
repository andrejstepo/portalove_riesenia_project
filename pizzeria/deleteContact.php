<?php
include_once "db_connect.php";

if(isset($_GET['id'])) {
    $db = $GLOBALS['db'];
    $deleteContact = $db->deleteContact($_GET['id']);

   if($deleteContact) {
        header("Location: adminContact.php");
    } else {
        echo "FATAL ERROR!!!!!";
    }
} else {
    header("Location: admin.php");
}



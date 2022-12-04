<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

if(isset($_POST['submit'])) {
    $update = $db->updateEmail($_POST['id'], $_POST['from'], $_POST['email'], $_POST['subject'], $_POST['message']);

    if($update) {
        header("Location: adminContact.php");
    } else {
        echo "FATAL ERROR!!!!";
    }
} else {
    header("Location: adminContact.php");
}
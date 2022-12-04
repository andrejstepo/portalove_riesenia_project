<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

if(isset($_POST['submit'])) {
        $updateMenu = $db->updateMenu($_POST['id'], $_POST['display_name']);

    if($updateMenu) {
        header("Location: adminMenu.php");
    } else {
        echo "FATAL ERROR!!!!";
    }
} else {
    header("Location: adminMenu.php");
}
<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

if(isset($_POST['submit'])) {
    $insert = $db->insertPizza($_POST['sys_name'], $_POST['display_name'], $_POST['img'], $_POST['content']);

    if($insert) {
        header("Location: adminPizzaMenu.php");
    } else {
        echo "FATAL ERROR!!!!";
    }
} else {
    header("Location: adminPizzaMenu.php");
}
<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

if(isset($_POST['submit'])) {
    $updatePizza = $db->updatePizza($_POST['id'], $_POST['sys_name'], $_POST['display_name'], $_POST['img'], $_POST['content']);

    if($updatePizza) {
        header("Location: adminPizzaMenu.php");
    } else {
        echo "FATAL ERROR!!!!";
    }
} else {
    header("Location: adminPizzaMenu.php");
}
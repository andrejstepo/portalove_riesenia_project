<?php
include_once "db_connect.php";

if(isset($_GET['id'])) {
    $db = $GLOBALS['db'];
    $deletePizza= $db->deletePizza($_GET['id']);

    if($deletePizza) {
        header("Location: adminPizzaMenu.php");
    } else {
        echo "FATAL ERROR!!!!!";
    }
} else {
    header("Location: adminPizzaMenu.php");
}

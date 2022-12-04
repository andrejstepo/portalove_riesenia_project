<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

$menuDetails = $db->getMenuDetails($_GET['id']);
?>

<style>
    input[type=submit] {
        background-color: green;
        color: white;
        padding: 10px 25px;
        border: none;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: lightgreen;
        color: black;
        cursor: pointer;
    }

    input[type=text], input[type=password] {
        padding: 10px 10px;
        border: 2px solid grey;
    }

    h2 {
        margin-top: 10px;
        margin-bottom: 4px;
        padding: 5px 5px;
    }
</style>

<form action="updateMenu.php" method="post">
    <h2>Name:</h2>
    <input type="text" name="display_name" value="<?php echo $menuDetails[0]['display_name']; ?>" /><br><br>
    <input type="hidden" name="id" value="<?php echo $menuDetails[0]['id']; ?>">
    <input type="submit" name="submit" value="Update">
</form>
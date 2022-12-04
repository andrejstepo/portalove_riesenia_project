<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];
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

    input[type=text], input[type=password]{
        padding: 10px 10px;
        border: 2px solid grey;
    }

    textarea {
        padding: 12px 15px;
        width: 20%;
        border: 2px solid grey;
    }

    h3 {
        margin-top: 10px;
        margin-bottom: 4px;
        padding: 5px;
    }
</style>

<form action="insertPizza.php" method="post">
    <h3>System Name: </h3>
    <input type="text" name="sys_name" value="" required><br>
    <h3>Display Name:</h3>
    <input type="text" name="display_name" value="" required><br>
    <h3>Image:</h3>
    <input type="text" name="img" value="" required><br>
    <h3>Content:</h3>
    <textarea name="content" required></textarea><br>
    <br>
    <input type="submit" name="submit" value="Insert">
</form>

<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] === false) {
    ?>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <h3>Username:</h3>
        <input type="text" name="username" placeholder="Username"><br>
        <h3>Password:</h3>
        <input type="password" name="password" placeholder="Password"><br>
        <br>
        <input type="submit" name="submit" value="Login">
    </form>
    <?php
} else {
?>

    <br>
    <button class="logout" onclick="location.href='logout.php'">Logout</button><br><br>
    <button onclick="location.href='index.php'">Web page</button><br><br>
    <button onclick="location.href='adminPizzaMenu.php'">Admin pizza menu</button><br><br>
    <button onclick="location.href='adminMenu.php'">Admin menu</button><br><br>
    <button onclick="location.href='adminContact.php'">Admin contact</button><br><br>
    <?php
}
?>

<style>
    input[type=submit] {
        background-color: green;
        color: white;
        padding: 15px 40px;
        border: none;
        width: 10%;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: lightgreen;
        color: black;
        cursor: pointer;
    }

    input[type=text], input[type=password] {
        width: 15%;
        padding: 12px 20px;
        border: 4px solid grey;
    }

    button {
        width: 15%;
        padding: 12px 20px;
        border: 4px solid grey;
        cursor: pointer;
    }

    button:hover {
        background-color: grey;
        color: white;
        cursor: pointer;
    }

    .logout {
        background-color: black;
        color: white;
        width: 10%;
        cursor: pointer;
    }

    .logout:hover {
        background-color: white;
        color: black;
        cursor: pointer;
    }

    h3 {
        margin-top: 10px;
        margin-bottom: 4px;
        padding: 5px;
    }
</style>
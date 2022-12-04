<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

$menu = $db->getAllMenu();

if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] === false) {
    header('Location: login.php');
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

    input[type=text], input[type=password] {
        width: 15%;
        padding: 12px 20px;
        border: 4px solid grey;
    }

    button {
        width: 10%;
        padding: 12px 20px;
        border: 4px solid grey;
        cursor: pointer;
    }

    button:hover {
        background-color: grey;
        color: white;
        cursor: pointer;
    }

    table, td{
        border: 1px solid black;
        padding: 4px;
        border-collapse: collapse;
    }

    th {
        padding-top: 10px;
        padding-bottom: 10px;
        background-color: green;
        color: white;
    }
</style>

<br>
<button onclick="location.href='admin.php'">Admin</button><br><br>
<button onclick="location.href='index.php'">Web page</button><br><br>

<br><br>

<table style="width:15%">
    <tr>
        <th>Name</th>
        <th>Operation</th>
    </tr>

    <?php
    foreach ($menu as $menu_) {
        ?>
        <tr>
            <?php echo '<td>'.$menu_['display_name'].'</td>' ?>
            <td><a href="update_form_menu.php.?id=<?php echo $menu_['id'] ?>">Update</a></td>
        </tr>
        <?php
    }
    ?>
</table>


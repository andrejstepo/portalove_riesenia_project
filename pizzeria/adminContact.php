<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

$emails = $db->getAllEmails();

if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] === false) {
    header('Location: login.php');
}
?>

<style>
    input[type=submit]:hover {
        background-color: green;
        color: white;
        padding: 15px 40px;
        border: darkgreen;
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
<table style="width:50%">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
    <th colspan="2">Operation</th>

</tr>

<?php
    foreach ($emails as $email) {
    ?>
<tr>
    <?php echo '<td>'.$email['name'].'</td>' ?>
    <?php echo '<td>'.$email['email'].'</td>' ?>
    <?php echo '<td>'.$email['subject'].'</td>' ?>
    <?php echo '<td>'.$email['message'].'</td>' ?>
    <td><a href="update_form_contact.php.?id=<?php echo $email['id'] ?>">Update</a></td>
    <td><a href="deleteContact.php.?id=<?php echo $email['id'] ?>">Delete</a></td>
</tr>
    <?php
    }
    ?>
</table>


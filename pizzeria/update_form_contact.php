<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

$emailDetails = $db->getEmailDetails($_GET['id']);
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

    input[type=text], input[type=password], input[type=email]{
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

<form action="updateContact.php" method="post">
    <h3>Name:</h3>
    <input type="text" name="from" value="<?php echo $emailDetails[0]['name']; ?>" /><br>
    <h3>Email:</h3>
    <input type="email" name="email" value="<?php echo $emailDetails[0]['email']; ?>" /><br>
    <h3>Subject:</h3>
    <input type="text" name="subject" value="<?php echo $emailDetails[0]['subject']; ?>" /><br>
    <h3>Message:</h3>
    <textarea name="message"><?php echo $emailDetails[0]['message']; ?></textarea><br><br>
    <input type="hidden" name="id" value="<?php echo $emailDetails[0]['id']; ?>">
    <input type="submit" name="submit" value="Update">
</form>
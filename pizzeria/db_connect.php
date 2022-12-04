<?php
include_once "DB.php";

use pizzeria\DB;
$db = new DB('localhost', 'pizzeria', 'root', '');

global $db;

session_start();

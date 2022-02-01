<?php 
require("connectdb.php");
require("session.php");

unset($_SESSION["user"]);
header('Location: index.php');
?>
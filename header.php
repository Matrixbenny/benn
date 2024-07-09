<?php
session_start();
require_once "config/dbConnect.php";

// Set the full name in the session variable
$_SESSION["Control"]["fullname"] = "Your Full Name"; // Replace with your full name
?>
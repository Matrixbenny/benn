<?php
require_once "config/constants.php";

// Create database connection
$dbConn = new mysqli(HOSTNAME, HOSTUSER, HOSTPASS, DBNAME);

// Verify connection
if ($dbConn->connect_error) {
    die("Connection failed: ". $dbConn->connect_error);
} else {
    print "Connected successfully!!!:-)";
}
http://localhost/webapp/config/dbconnect.php
?>
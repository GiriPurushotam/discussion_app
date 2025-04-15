<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "discussion_app";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("error connecting" . $conn->connect_error);
}

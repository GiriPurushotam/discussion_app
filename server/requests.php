<?php
session_start();
include('../common/db.php');
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $users = $conn->prepare("INSERT INTO users (username, email, password, address) VALUES (?, ?, ?, ?)");
    $users->bind_param("ssss", $username, $email, $password, $address);

    $result = $users->execute();

    if ($result) {
        echo 'Data Inserted Sucessfully';
        $_SESSION["user"] = ["username" => $username, "email" => $email];
    } else {
        echo 'Error Data Inserting';
    }
}

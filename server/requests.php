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
        $_SESSION["user"] = ["username" => $username, "email" => $email];
        header("location: /discussion_app");
    } else {
        echo 'Error Data Inserting';
    }
} else if (isset($_POST['login'])) {
    print_r($_POST);
}

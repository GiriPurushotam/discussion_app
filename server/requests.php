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
        echo 'Error Signing Up';
    }
} else if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = "";

    $loginQuery = " SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($loginQuery);

    if ($result->num_rows) {
        foreach ($result as $row) {
            $username = $row['username'];
        }
        $_SESSION['user'] = ['username' => $username, "email" => $email];
        header("location: /discussion_app");
    } else {
        echo "Eroor log in";
    }
} else if (isset($_GET['logout'])) {
    session_unset();
    header("location: /discussion_app");
}

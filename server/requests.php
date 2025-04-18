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
    $users->insert_id;

    if ($result) {
        $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id" => $users->insert_id];
        header("location: /discussion_app");
    } else {
        echo 'Error Signing Up';
    }
} else if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = "";
    $user_id  = 0;

    $loginQuery = " SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($loginQuery);

    if ($result->num_rows) {
        foreach ($result as $row) {
            $username = $row['username'];
            $user_id = $row['id'];
        }
        $_SESSION['user'] = ['username' => $username, "email" => $email, "user_id" => $user_id];
        header("location: /discussion_app");
    } else {
        echo "Eroor log in";
    }
} else if (isset($_GET['logout'])) {
    session_unset();
    header("location: /discussion_app");
} else if (isset($_POST['ask'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category_id = $_POST['category'];
    $user_id    = $_SESSION['user']['user_id'];

    $questionQuery = $conn->prepare("INSERT INTO questions 
    (title, description, category_id, user_id) 
    VALUES (?, ?, ?, ?)");

    $questionQuery->bind_param("ssii", $title, $description, $category_id, $user_id);
    $result = $questionQuery->execute();

    if ($result) {
        header("location: /discussion_app");
    } else {
        echo "Error Something Wrong";
    }
} else if (isset($_POST['answer'])) {
    $answer = $_POST['answer'];
    $question_id = $_POST['question_id'];
    $user_id = $_SESSION['user']['user_id'];

    $answerQuery = $conn->prepare(" INSERT INTO answers 
    (answer, question_id, user_id) 
    VALUES (?, ?, ?)");

    $answerQuery->bind_param("sii", $answer, $question_id, $user_id);
    $result = $answerQuery->execute();

    if ($result) {
        header("location: /discussion_app?q-id=$question_id");
    } else {
        echo "Error Submitting Answer";
    }
} else if (isset($_GET['delete'])) {
    $qid = $_GET['delete'];
    $deleteQuery = $conn->prepare("DELETE FROM questions WHERE id=$qid");
    $result = $deleteQuery->execute();
    if ($result) {
        header("location: /discussion_app");
    } else {
        echo " Error Try Again";
    }
}

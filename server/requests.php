<?php
include('../common/db.php');
if (isset($_POST['signup'])) {
    echo "my name is " . $_POST['username'] . '</br>';
    echo "my email is " . $_POST['email'] . '</br>';
    echo "my password is " . $_POST['password'] . '</br>';
    echo "my address is " . $_POST['address'] . '</br>';
}

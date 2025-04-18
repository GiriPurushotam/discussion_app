<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion App</title>
    <?php include('./client/commonFiles.php') ?>
</head>

<body>
    <?php session_start(); ?>
    <?php include('./client/header.php'); ?>
    <?php if (isset($_GET['signup']) && !isset($_SESSION['user']['username'])) : ?>
        <?php include('./client/signup.php'); ?>
    <?php elseif (isset($_GET['login']) && !isset($_SESSION['user']['username'])): ?>
        <?php include('./client/login.php'); ?>
    <?php elseif (isset($_GET['ask']) && isset($_SESSION['user']['username'])) : ?>
        <?php include('./client/ask.php') ?>
    <?php elseif (isset($_GET['q-id'])):  ?>
        <?php $qid = $_GET['q-id']; ?>
        <?php include('./client/questionDetail.php') ?>
    <?php elseif (isset($_GET['c-id'])): ?>
        <?php $cid = $_GET['c-id'] ?>
        <?php include('./client/questions.php') ?>
    <?php elseif (isset($_GET['u-id'])): ?>
        <?php $uid = $_GET['u-id'] ?>
        <?php include('./client/questions.php'); ?>
    <?php elseif (include('./client/questions.php')):; ?>
    <?php elseif (isset($_GET['latest'])): ?>
        <?php include('./client/questions.php') ?>
    <?php elseif (isset($_GET['search'])) : ?>
        <?php include('./client/questions.php'); ?>
    <?php endif ?>
</body>

</html>
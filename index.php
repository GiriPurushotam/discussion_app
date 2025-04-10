<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion App</title>
    <?php include('./client/commonFiles.php') ?>
</head>

<body>
    <?php include('./client/header.php'); ?>
    <?php if (isset($_GET['signup'])) : ?>
        <?php include('./client/signup.php'); ?>
    <?php elseif (isset($_GET['login'])): ?>
        <?php include('./client/login.php'); ?>

    <?php endif ?>
</body>

</html>
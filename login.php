<?php
session_start();
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="email" name="email" placeholder="enter your email">
        <br><br>
        <input type="password" name="password" placeholder="enter your password">
        <br><br>
        <button type="submit" name="submit">submit </button>
    </form>
</body>

</html>



<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $select = mysqli_query($conn, $sql);
    if ($select) {
        echo " login suceesfull";
        header("Location: add_listing.php");
    } else {
        echo "invaild user";
    }
}

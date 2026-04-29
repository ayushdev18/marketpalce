<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style=" display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;

    margin: 0;
    background-color: #f4f4f4;
    font-family: Arial, sans-serif;">

    <form action="" method="POST">
        <input type="text" name="name" placeholder="enter your name">
        <br><br>
        <input type="email" name="email" placeholder="enter your email">
        <br><br>
        <input type="password" name="password" placeholder="enter your password">
        <br><br>
        <button type="submit" name="submit"> submit</button>
    </form>

</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = " INSERT INTO users (name,email,password)
VALUES ('$name','$email','$password')";

    $insert = (mysqli_query($conn, $sql));
    if ($insert) {
        echo "data inserted ";
        header("Location: login.php");
    } else {
        echo "somthing else";
    }
}
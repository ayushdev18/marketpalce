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

<body>
    <form action="" method="POST">
        <input type="number" name="user_id" placeholder="user id">
        <br><br>
        <input type="text" name="type" placeholder=" type">
        <br><br>
        <input type="text" name="name" placeholder="enter name">
        <br><br>
        <input type="textarea" name="detail" placeholder="details">
        <br><br>
        <input type="text" name="category" placeholder="category">
        <br><br>
        <input type="text" name="subcategory" placeholder="subcategory">
        <br><br>
        <input type="text" name="country" placeholder="country">
        <br><br>
        <input type="text" name="state" placeholder="state">
        <br><br>
        <input type="text" name="city" placeholder="city">
        <br><br>
        <input type="text" name="area" placeholder="area">
        <br><br>
        <input type="number" name="price" placeholder="price">
        <br><br>
        <button type="submit" name="submit">submit</button>
    </form>
</body>

</html>
<?php
if (isset($_POST['submit'])) {


    $added = ("INSERT INTO listings(user_id,type,name,detail,category,subcategory,country,state,city,area,price)
    VALUES('$_POST[user_id]','$_POST[type]','$_POST[name]','$_POST[detail]','$_POST[category]','$_POST[subcategory]',
    '$_POST[country]','$_POST[state]','$_POST[city]','$_POST[area]','$_POST[price]')");

    $result = mysqli_query($conn, $added);
    if ($result) {
        echo "data inserted";
    } else {
        echo "somthing else";
    }
}
?>
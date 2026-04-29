<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">

        <p><b>city</b></p>
        <select name="city">
            <option value="Mohali">Mohali</option>
            <option value="Chandigrah">Chandigrah</option>
            <option value="Ambala">Ambala</option>
            <option value="Sirhind">Sirhind</option>
            <option value="Ludhiyana">Ludhiyana</option>
        </select>
        <br><br><br>
        <p><b>Category</b></p>
        <select name="category">
            <option value="IT & Programming">IT & Programming</option>
            <option value="Teacher">Teacher</option>
            <option value="Non tech">Non Tech</option>
        </select>
        <br><br>
        <br><br><br>
        <button type="submit" name="submit">submit </button>
    </form>
</body>

</html>

<h2>City-Category Wise Listings</h2>

<?php
if (isset($_POST['submit'])) {
    $city = $_POST['city'];
    $category = $_POST['category'];

    $sql = "SELECT * FROM listings WHERE city='$city' AND category='$category'";

    $result = mysqli_query($conn, $sql);
    echo "<table border='1' cellpadding='10' style='border-collapse: collapse; width: 100%; text-align: left;'>";
    echo "<tr style='background-color: #f2f2f2;'>
                <th>ID</th>
                <th>Name</th>
                <th>Detail</th>
                <th>City</th>
                <th>State</th>
                <th>Price</th>
                <th>Date</th>
              </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['detail'] . "</td>";
        echo "<td>" . $row['city'] . "</td>";
        echo "<td>" . $row['state'] . "</td>";
        echo "<td>₹" . $row['price'] . "</td>";
        echo "<td>" . $row['created_at'] . "</td>";
        echo "</tr>";
    }
}
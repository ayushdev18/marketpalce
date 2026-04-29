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
        <select name="category" id="city">
            <option value="IT & Programming">IT & Programming</option>
            <option value="Teacher">Teacher</option>
            <option value="Non Tech">Non Tech</option>
        </select>
        <br><br>
        <button type="submit" name="submit">submit </button>
    </form>
</body>

</html>






<h2>Category Wise Listings</h2>

<?php
if (isset($_POST['submit'])) {
    $category = $_POST['category'];

    $sql = "SELECT * FROM listings WHERE category='$category'";

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

    //$data = $result->fetch_assoc();
    // echo "<pre>";
    // print_r($data);
    //  echo "</pre>";
}
<?php
include 'config.php';


$sql = "SELECT * FROM listings ORDER BY created_at DESC";

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
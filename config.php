<?php

$conn = (mysqli_connect("localhost", "root", "", "marketpalce"));
if (!$conn) {
    echo "connection is faild";
} else {
    echo "connected ";
}

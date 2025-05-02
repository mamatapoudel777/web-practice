<?php

include("connection.php"); 

$new_name = "sita";
$new_age = "20";
$new_phone = "123456789";

$sql = "UPDATE labwork 
SET name='$new_name', age='$new_age' WHERE phone='123456789'";

try {
    mysqli_query($conn, $sql);
    echo "<br><br>name and age updated successful!!";
} catch (mysqli_sql_exception $e) {
    echo "Exception caught: " . $e->getMessage();
}

mysqli_close($conn);
?>
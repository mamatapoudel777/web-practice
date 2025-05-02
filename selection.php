<?php
include "connection.php"; 

//$sql = "SELECT name FROM teacher "; 
// $sql = "SELECT name, age FROM teacher ";
// $sql = "SELECT name, age FROM teacher WHERE age > 10 ";
$sql = "SELECT age FROM teacher WHERE name = 'mamata'";

$result = mysqli_query($conn, $sql); 

if (mysqli_num_rows($result) > 0) { 
    while ($row = mysqli_fetch_assoc($result)) {
        echo "age: " . $row["age"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn); 
?>

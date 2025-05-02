<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "2607";
$db_name = "teacherdb"; 

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if ($conn) {
    echo "Connection successful" . "<br>";
} else {
    echo "No connection";
}
?>

<?php

$name = $_GET["name"];
$name = htmlspecialchars($name);
$email = $_GET["email"];

echo $name;
echo "<br>";
echo $email;


?>


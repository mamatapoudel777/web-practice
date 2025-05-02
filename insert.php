<html>
<body>
<form method="POST" action="">
name: <input type="text" name="name"><br><br>
age: <input type="number" name="age"><br><br>
Phone: <input type="number" name="phone"><br><br>
<input type="submit" value="Submit">
</form>
</body>
</html>
<?php

include("connection.php"); 




if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $phone = $_POST["phone"];

   
    $sql = "INSERT INTO teacher(Name, Age, Phone ) VALUES ('$name', '$age', '$phone')";
    try {
        mysqli_query($conn, $sql);
        echo "Data insertion successful";
    } catch (mysqli_sql_exception $e) {
        echo "Exception caught: " . $e->getMessage();
    }
    mysqli_close($conn);

























}

?>
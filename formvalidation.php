<?php
if (isset($_POST['submit'])) { //checks whether a variable is null or not
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if (empty($name)) {
        echo "Name is required!<br>";
    } else {
        echo "Hello, " . htmlspecialchars($name) . "!<br>";
    }

    if (empty($email)) {
        echo "Email is required!<br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!<br>";
    } else {
        echo "Your email: " . htmlspecialchars($email) . "<br>";
    }

    if (empty($phone)) {
        echo "Phone number is required!<br>";
    } elseif (!preg_match('[0-9]{10} $/', $phone)) {
        echo "Invalid phone number! It should be 10 digits.<br>";
    } else {
        echo "Your phone number: " . htmlspecialchars($phone) . "<br>";
    }
}
?>

<form method="post">
  Name: <input type="text" name="name"><br><br>
  Email: <input type="text" name="email"><br><br>
  Phone: <input type="text" name="phone"><br><br>
  <input type="submit" name="submit" value="Submit">
</form>



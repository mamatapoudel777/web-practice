<?php

$userid = $password = $name = $address = $country = $zipcode = $email = $sex = $comment = "";
$languages = [];
$errors = [];

function test_input($data) {
  return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
 
  $userid   = test_input($_GET["userid"] ?? '');
  $password = test_input($_GET["password"] ?? '');
  $name     = test_input($_GET["name"] ?? '');
  $address  = test_input($_GET["address"] ?? '');
  $country  = $_GET["country"] ?? '';
  $zipcode  = test_input($_GET["zipcode"] ?? '');
  $email    = test_input($_GET["email"] ?? '');
  $sex      = $_GET["sex"] ?? '';
  $languages = $_GET["language"] ?? [];
  $comment  = test_input($_GET["comment"] ?? '');

  if (empty($userid)) $errors['userid'] = "User ID is required.";
  if (empty($password)) $errors['password'] = "Password is required.";
  if (empty($name)) $errors['name'] = "Full name is required.";
  if (empty($country)) $errors['country'] = "Country is required.";
  if (empty($zipcode)) $errors['zipcode'] = "ZIP Code is required.";
  if (empty($email)) $errors['email'] = "Email is required.";
  if (empty($sex)) $errors['sex'] = "Sex is required.";
  if (empty($languages)) $errors['language'] = "Please select at least one language.";

  if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Invalid email format.";
  }
  if (!empty($zipcode) && !preg_match('/^[A-Za-z0-9\- ]+$/', $zipcode)) {
    $errors['zipcode'] = "ZIP Code must be alphanumeric.";
  }

  if (empty($errors)) {
    echo "<h3 style='color: green;'>Form submitted successfully!</h3><hr>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <style>
    .error { color: red; font-size: 0.9em; }
    label { display: inline-block; width: 100px; }
    .field { margin-bottom: 10px; }
  </style>
</head>
<body>

<h1>Registration Form</h1>

<form action="validation.php" method="get">

  <div class="field">
    <label>User ID:*</label>
    <input type="text" name="userid" value="<?= htmlspecialchars($userid) ?>">
    <span class="error"><?= $errors['userid'] ?? '' ?></span>
  </div>

  <div class="field">
    <label>Password:*</label>
    <input type="password" name="password" value="<?= htmlspecialchars($password) ?>">
    <span class="error"><?= $errors['password'] ?? '' ?></span>
  </div>

  <div class="field">
    <label>Full Name:*</label>
    <input type="text" name="name" value="<?= htmlspecialchars($name) ?>">
    <span class="error"><?= $errors['name'] ?? '' ?></span>
  </div>

  <div class="field">
    <label>Address:</label>
    <input type="text" name="address" value="<?= htmlspecialchars($address) ?>">
  </div>

  <div class="field">
    <label>Country:*</label>
    <select name="country">
      <option value="">Select Country</option>
      <option value="US" <?= $country == 'US' ? 'selected' : '' ?>>United States</option>
      <option value="IN" <?= $country == 'IN' ? 'selected' : '' ?>>India</option>
      <option value="NP" <?= $country == 'NP' ? 'selected' : '' ?>>Nepal</option>
    </select>
    <span class="error"><?= $errors['country'] ?? '' ?></span>
  </div>

  <div class="field">
    <label>ZIP Code:*</label>
    <input type="text" name="zipcode" value="<?= htmlspecialchars($zipcode) ?>">
    <span class="error"><?= $errors['zipcode'] ?? '' ?></span>
  </div>

  <div class="field">
    <label>Email:*</label>
    <input type="email" name="email" value="<?= htmlspecialchars($email) ?>">
    <span class="error"><?= $errors['email'] ?? '' ?></span>
  </div>

  <div class="field">
    <label>Sex:*</label>
    <input type="radio" name="sex" value="female" <?= $sex == 'female' ? 'checked' : '' ?>> Female
    <input type="radio" name="sex" value="male" <?= $sex == 'male' ? 'checked' : '' ?>> Male
    <span class="error"><?= $errors['sex'] ?? '' ?></span>
  </div>

  <div class="field">
    <label>Language:*</label>
    <input type="checkbox" name="language[]" value="english" <?= in_array('english', $languages) ? 'checked' : '' ?>> English
    <input type="checkbox" name="language[]" value="non english" <?= in_array('non english', $languages) ? 'checked' : '' ?>> Non English
    <span class="error"><?= $errors['language'] ?? '' ?></span>
  </div>

  <div class="field">
    <label>About:</label>
    <textarea name="comment" rows="5" cols="40"><?= htmlspecialchars($comment) ?></textarea>
  </div>

  <input type="submit" value="Submit">

</form>
</body>
</html>


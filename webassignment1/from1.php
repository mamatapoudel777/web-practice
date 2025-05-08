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

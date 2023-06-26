<?php
require __DIR__ . '/Db.php';
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the username and password from the form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Get the user details
  $result = getUserDetailsFromUserName($username);

  $authenticated = false;
  $user_role = "none";
  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $userPassword = $row["password"];
    // Verify the password
    if ($password == $userPassword) {
      $user_role = $row["user_role"];
      $authenticated = true;
    } else {
      // Invalid credentials, display an error message
      $error = "Invalid username or password!";
    }
  } else {
    // Invalid username, display an error message
    $error = "Invalid username or password!";
  }
  if ($authenticated) {
    // Successful login, redirect to a dashboard page
    // Assuming the validation is successful
    // Store the username in session
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
  } else {
    // Invalid credentials, display an error message
    $error = "Invalid username or password!";
  }
}
?>

<html>

<head>
  <title>Login Result</title>
</head>

<body>
  <h2>Login Result</h2>
  <?php if (isset($error)): ?>
    <p>
      <?php echo $error; ?>
    </p>
  <?php endif; ?>
</body>

</html>
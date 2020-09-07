<?php
require("includes/common.php");
$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);

// Query checks if the email and password are present in the database.
$query = "SELECT * FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
 echo "Invalid Login Credentials";
  // $error = $_POST['error'];
  // $error = "<span class='red'> Enter Correct E-mail and Password Combination</span>";
  // header('location: modal.php?error=' . $error);
} else {
  $row = mysqli_fetch_array($result);
  $_SESSION['name'] = $row['name'];
  $_SESSION['email'] = $row['email'];
   $_SESSION['contact'] = $row['contact'];
    $_SESSION['address'] = $row['address'];
    $_SESSION['city'] = $row['city'];
  $_SESSION['user_id'] = $row['user_id'];
  header('location: index1.php');
}
?>
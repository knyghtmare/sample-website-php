<?php

if (isset($_POST['login-submit'])) {
  // code...
  require 'dbh.inc.php';

  $emailID = $_POST['mailID'];
  $password = $_POST['pwd'];

  if (empty($emailID) || empty($password)) {
    // code...
    header("Location: ../index.php?error=emptyfields");
    exit();
  }
  else {
    // code...
    $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
  }
}
else {
  // code...
  header("Location: ../index.php");
  exit();
}

?>

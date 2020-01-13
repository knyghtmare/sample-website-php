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
    $stmt = mysqli_stmt_init($conn);

    if (!sqli_stmt_prepare($stmt. $sql)) {
      // code...
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else {
      // code...
      mysqli_stmt_bind_param($stmt, "ss", $emailID, $password);
      mysqli_stmt_execute($stmt);

      $result = mysqli_stmt_get_result($stmt);
    }
  }
}
else {
  // code...
  header("Location: ../index.php");
  exit();
}

?>

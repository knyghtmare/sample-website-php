<?php

if (isset($_POST['login-submit'])) {
  // code...
  require 'dbh.inc.php';

  $usernameID = $_POST['mailUid'];
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

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      // code...
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else {
      // code...
      mysqli_stmt_bind_param($stmt, "ss", $usernameID, $password);
      mysqli_stmt_execute($stmt);

      // $result = mysqli_stmt_get_result($stmt);

      if ($row = mysqli_fetch_assoc()) {
        // code...
        $pwdCheck = password_verify($password, $row['pwdUsers']);
        if ($pwdCheck == false) {
          // code...
          header("Location: ../index.php?error=wrongpwd");
          exit();
        }
        elseif ($pwdCheck == true) {
          // code...
          session_start();
          $_SESSION['userId'] = $row['idUsers'];
          $_SESSION['userUId'] = $row['uidUsers'];

          header("Location: ../index.php?login=success");
          exit();
        }
        else {
          // code...
          header("Location: ../index.php?error=wrongpwd");
          exit();
        }
      }
      else {
        // code...
        header("Location: ../index.php?error=nouser");
        exit();
      }
    }
  }
}
else {
  // code...
  header("Location: ../index.php");
  exit();
}

?>

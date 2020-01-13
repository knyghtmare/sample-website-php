<?php
if (isset($_POST['signup-submit'])) {
    // code...
    require 'dbh.inc.php';

    $username = $_POST['usr_name'];
    $email = $_POST['usr_email'];
    $password = $_POST['usr_pwd'];
    $passwordRepeat = $_POST['usr_pwd_repeat'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat) ) {
      // code...
      header("Location: ../signup.php?error=emptyfields&usr_name=".$username."&usr_email=".$email);
      exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-z0-9]*$/", $username)) {
      // code...
      header("Location: ../signup.php?error=invalidmailuid");
      exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      // code...
      header("Location: ../signup.php?error=invalidmail&usr_name=".$username);
      exit();
    }
    elseif (!preg_match("/^[a-zA-z0-9]*$/", $username)) {
      // code...
      header("Location: ../signup.php?error=invaliduid&usr_email=".$email);
      exit();
    }
    elseif ($password != $passwordRepeat) {
      // code...
      header("Location: ../signup.php?error=passwordcheck&usr_name=".$username."&usr_email=".$email);
      exit();
    }
    else {
      // code...
      $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
      $stmt = mysqli_stmt_init($conn);

      if (!sqli_stmt_prepare($stmt. $sql)) {
        // code...
        header("Location: ../signup.php?error=sqlerror");
        exit();
      }
      else {
        // code...
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);

        if ($resultCheck > 0) {
          // code...
          header("Location: ../signup.php?error=usertaken&usr_email=".$email);
          exit();
        }
        else {
          // code...
          $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
          $stmt = mysqli_stmt_init($conn);

          if (!sqli_stmt_prepare($stmt. $sql)) {
            // code...
            header("Location: ../signup.php?error=sqlerror");
            exit();
          }
          else {
            // code...
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            header("Location: ../signup.php?signup=success");
            exit();
          }
        }
      }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
  // code...
  header("Location: ../signup.php");
  exit();
}
?>

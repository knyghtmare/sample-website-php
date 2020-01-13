<?php

if (isset($_POST['login-submit'])) {
  // code...
  require 'dbh.inc.php';

  $emailID = $_POST['mailID'];
  $userPWD = $_POST['pwd'];
}
else {
  // code...
  header("Location: ../index.php");
  exit();
}

?>

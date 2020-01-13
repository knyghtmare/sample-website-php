<?php
    $servername = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'samplewebsitephp';
    // $dbName = 'users';

    $conn = mysqli_connect(
      $servername, $dbUsername, $dbPassword, $dbName
    );

    if (!$conn) {
      // code...
      die('Connection Failed: '.mysqli_connect_error());
    }

?>

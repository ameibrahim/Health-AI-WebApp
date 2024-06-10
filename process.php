<?php

require_once('config.php');

if(isset($_POST)) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Get the password as plain text
    $cpassword = $_POST['cpassword']; // Get the password as plain text

    if ($password !== $cpassword){
      die('Error');
    }

    // Hash the password using PHP's built-in password_hash function
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES(?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$username, $email, $hash]);

    if($result) {
      echo 'Successfully Saved';
    } else {
      echo 'Error';
    }
} else {
    echo 'No data!';
}
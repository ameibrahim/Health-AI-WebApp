<?php

session_start();

require_once("config.php");

$username = $_POST['username'];
$password = $_POST['password'];

// Retrieve the hashed password from the database
$sql = "SELECT * FROM users WHERE email = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$username]);

if($result) {
    $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
    if(password_verify($password, $user['password'])) {
        $_SESSION['userlogin'] = $user['username'];
        echo"User Loged In";
    } else {
        echo "Invalid credentials";
    }
} else {
    echo "Error";
}
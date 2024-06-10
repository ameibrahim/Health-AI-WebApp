<?php

session_start();
require_once("config.php");


$sql = "SELECT * FROM users WHERE username = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$_SESSION['userlogin']]);

$userId = $stmtselect->fetch(PDO::FETCH_ASSOC)['id'];

$check_chat = "Select * From chats Where userId = ? and chatId = ?";
$stmt_check = $db->prepare($check_chat);
$r_check = $stmt_check->execute([$userId, $_POST['chatId']]);

$r_check = $stmt_check->fetch(PDO::FETCH_ASSOC);

if ($r_check) {
    $sql_insert = "Update chats Set history=? Where chatId=?";
    $stmt_insert = $db->prepare($sql_insert);
    $r_insert = $stmt_insert->execute([$_POST['message'], $_POST['chatId']]);
}else{
    $sql_insert = "Insert Into chats (userId, chatId, history)values(?, ?, ?)";
    $stmt_insert = $db->prepare($sql_insert);
    $r_insert = $stmt_insert->execute([$userId, $_POST['chatId'], $_POST['message']]);
}


echo json_encode([
    'status' => true,
    'message' => 'success',
]);
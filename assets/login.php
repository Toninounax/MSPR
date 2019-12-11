<?php
require_once '../includes/helpers.php';


$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "password");

$dbh = connectDB();

$stmt = $dbh->prepare( "SELECT * FROM users WHERE email = :email LIMIT 1");
$stmt->bindValue(':email', $email);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);





if($user['password'] === sha1($password)){
    $_SESSION['auth_id'] = $user['id'];

    $id = $user['id'];

    header("Location: ../index.php?=$id");

    exit;
} else{
    header('Location: /mspr/login.php');
}
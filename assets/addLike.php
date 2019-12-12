<?php
require_once '../includes/helpers.php';

$playlist_id = $_GET['id'];
$user_id = $_SESSION['auth_id'];

$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO likes (playlist_id, user_id) VALUES (:playlist_id, :user_id)');
$stmt->bindValue(':playlist_id', $playlist_id);
$stmt->bindValue(':user_id', $user_id);
$stmt->execute();




$dbh = connectDB();
$stmt = $dbh->prepare("SELECT COUNT(*) FROM likes WHERE playlist_id = $playlist_id");
$stmt->execute();

dd($stmt);




header('Location: ../');
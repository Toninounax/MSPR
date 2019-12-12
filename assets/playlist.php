<?php
require_once '../includes/helpers.php';

$title = filter_input(INPUT_POST, "title");
$image = filter_input(INPUT_POST, "imgPlaylist");
$user_id = $_SESSION['auth_id'];


$dbh = connectDB();

$stmt = $dbh->prepare('INSERT INTO playlists (title, image, user_id) VALUES (:title, :image, :user_id)');
$stmt->bindValue(':title', $title);
$stmt->bindValue(':image', $image);
$stmt->bindValue(':user_id', $user_id);
$stmt->execute();


$id = $dbh->lastInsertId();


header( "Location: ../playlist.php?id=$id");


?>
<?php
require_once '../includes/helpers.php';

dd($_GET['id']);


$comment= filter_input(INPUT_POST, "comment");
$user_id = $_SESSION['auth_id'];
$playlist_id =

$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO songs (title, artiste, link, playlist_id) VALUES (:title, :artiste, :link, :playlist_id)');
$stmt->bindValue(':title', $title);
$stmt->bindValue(':artiste', $artiste);
$stmt->bindValue(':link', $link);
$stmt->bindValue(':playlist_id', $playlist_id);
$stmt->execute();






header( "Location: ../playlist.php?id=$playlist_id");
exit;


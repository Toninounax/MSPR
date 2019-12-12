<?php
require_once '../includes/helpers.php';

$title = filter_input(INPUT_POST, "title");
$link = filter_input(INPUT_POST, "link");
$artiste= filter_input(INPUT_POST, "artiste");
$playlist_id = $_GET['id'];

$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO songs (title, artiste, link, playlist_id) VALUES (:title, :artiste, :link, :playlist_id)');
$stmt->bindValue(':title', $title);
$stmt->bindValue(':artiste', $artiste);
$stmt->bindValue(':link', $link);
$stmt->bindValue(':playlist_id', $playlist_id);
$stmt->execute();




header( "Location: ../playlist.php?id=$playlist_id");
exit;


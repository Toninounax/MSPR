<?php
require_once '../includes/helpers.php';

$id = $_GET['id'];

$song = getSong($id);

$dbh = connectDB();
$stmt = $dbh->prepare("DELETE FROM songs WHERE id = $id");
$stmt->execute();

$playlist_id = $song['playlist_id'];

header("Location: ../playlist.php?id=$playlist_id");
exit;

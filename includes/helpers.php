<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/mspr/env.php';

session_start();

function dd($var){
    var_dump($var);
    die();
}

function getPath($path){
    return $_SERVER['DOCUMENT_ROOT'] . '/mspr/' . $path;
}

/**
 * @return PDO
 */
function connectDB(){
    try {

        return new PDO("mysql:host=localhost;dbname=mspr", "root", "root");
    }

    catch (Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }
}


/**
 * @return mixed
 */
function getPlaylists(){
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT playlists.*, users.first_name FROM playlists LEFT JOIN users ON playlists.user_id = users.id ");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


/**
 * @return mixed
 */
function getPlaylist($id){
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM playlists WHERE id = :id LIMIT 1");
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}



function getSongs($id){
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM songs WHERE playlist_id = :id");
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
/**
 * @return bool
 */
function isAuth(){
    return isset($_SESSION['auth_id']);
}




function likePlaylist($id){
    $dbh = connectDB();
    $stmt = $dbh->prepare('INSERT INTO likes (playlist_id, user_id) VALUES (:playlist_id, :user_id)');
    $stmt->bindValue(':playlist_id', $id);
    $stmt->bindValue(':user_id', $_SESSION['auth_id']);
    $stmt->execute();

    return true;
}

function getPlaylistLikes($id){
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM likes WHERE playlist_id = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
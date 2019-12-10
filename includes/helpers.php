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
function getUsers(){
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM users");
    $stmt->execute();
    return $dbh->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @return bool
 */
function isAuth(){
    return isset($_SESSION['auth_id']);
}
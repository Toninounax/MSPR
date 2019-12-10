<?php
require_once '../includes/helpers.php';



if (isset($_POST['email']) && isset($_POST['password'])) {

    connectDB();
    // cette requête permet de récupérer l'utilisateur depuis la BD
    $requete = "SELECT * FROM users WHERE email=? AND password=?";
    $resultat = $dbh->prepare($requete);
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $resultat->execute(array($email, $mdp));
    if ($resultat->rowCount() == 1) {
        // l'utilisateur existe dans la table
        // on ajoute ses infos en tant que variables de session
        $_SESSION['login'] = $email;
        $_SESSION['mdp'] = $mdp;
        // cette variable indique que l'authentification a réussi
        $authOK = true;
    }
}
?>
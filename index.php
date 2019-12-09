<?php require_once 'includes/header.php'; ?>
<?php
session_start();
if(isset($_SESSION["id"])){ //Si la variable session id existe
    include "";
} else {
    include "register.php"; //Si la variable n'existe pas redirection sur la page de login
}
?>

<?php require_once 'includes/footer.php'; ?>
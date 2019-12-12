<?php require_once 'vendor/autoload.php'; ?>
<?php require_once 'config.php'; ?>
<?php require_once 'helpers.php'; ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>MusiList</title>
    <link rel="stylesheet" href="./public/css/app.css">
</head>
<body>
<div id="app">
    <header id="header">
        <nav class="navbar navbar-dark ">
            <a class="navbar-brand" href="./index.php?id=<?php echo $_SESSION['auth_id'];?>">Musilist</a>


            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#debug">Debug</a>
            </li>

            <?php if(isAuth()): ?>
            <li class="form-inline">
                <a class="nav-item nav-link active" href="assets/logout.php">deconnexion<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="profil.php?id=<?php echo $_SESSION['auth_id'];?>">profile</a>
            </li>
            <?php else: ?>

            <li>
                <a class="nav-item nav-link active" href="register.php">Inscription<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="login.php">Connexion</a>
            </li>
            <?php endif; ?>

        </nav>
    </header>

    <?php require_once 'debug.php';?>

    <main id="main">
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="./">Musilist</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#debug">Debug</a>
                </li>
                <?php if (isAuth()): ?>
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="assets/logout.php">Déconnexion<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="./profil.php?id=<?php echo $_SESSION['auth_id']; ?>">profile</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-item nav-link active" href="register.php">Inscription<span class="sr-only">(current)</span></a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="login.php">Connexion</a>
                    </li>
                <?php endif; ?>
            </ul>
            </div>
        </nav>
    </header>

    <?php require_once 'debug.php'; ?>

    <main id="main">
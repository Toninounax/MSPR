<?php require_once 'includes/header.php'; ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../mspr">Accueil</a></li>
        <li class="breadcrumb-item"><a href="profil.php">Profil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Playlist</li>
    </ol>
</nav>
<div class="jumbotron">
    <h1>Ajoutez des morceaux à votre playlist !</h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <div class="card yop">
                <div class="card-header">
                    Nouveau morceau
                </div>
                <div class="card-body">
                    <h5 class="card-title">Lien YouTube</h5>
                    <div class="stick">
                        <input class="form-control form-control-lg" type="text">
                    </div>
                    <div class="stick pad">
                        <input class="form-control form-control-lg" type="text" placeholder="Artiste(s)">
                    </div>
                    <div class="stick pad">
                        <input class="form-control form-control-lg" type="text" placeholder="Nom du morceau">
                    </div>
                    <a href="#" class="btn btn-primary loup">Ajouter</a>
                </div>
            </div>
        </div>

    </div>
</div>

    <div class="card jok" style="width: 362px;">
        <iframe width="360" height="315" src="https://www.youtube.com/embed/HYT52LPs3NM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="card-body jab">
            <h5 class="card-title">Titre</h5>
            <h6 class="card-text">Artiste</h6>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

</div>

</body>
</html>
<?php require_once 'includes/footer.php'; ?>



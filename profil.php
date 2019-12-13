<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<?php
$dbh = connectDB();
$id = $_GET['id'];
$stmt = $dbh->prepare("SELECT * FROM playlists WHERE user_id = $id ");
$stmt->execute();


?>
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
            <li class="breadcrumb-item active" aria-current="page">Profil</li>
        </ol>
    </nav>
<div class="container-fluid">
    <div class="row">


    <a data-toggle="collapse" href="#addPlaylist">
        <button>Ajouter une playlist</button>
    </a>
<?php require_once 'includes/addPlaylist.php'; ?>


    <div class="col-sm">

    <main class="col-sm vh-100">
    <h1>Mes Playlists</h1>

    <div class="container">
    <div class="row">

<?php $resultats = $stmt->fetchAll();
for ($i = 0; $i <= count($resultats) - 1; $i++) {
    ?>
    <div class="col pt-5">
        <div class="card" style="width: 18rem;">
            <img src="http://placehold.it/200x100" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo $resultats[$i]['title']; ?>
                </h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="playlist.php?id=<?php echo $resultats[$i]['id'] ?>" class="btn btn-primary">découvrez ma
                    playlist</a>
            </div>
        </div>
    </div>

    <?php } ?>

    </div>
    </div>


    </main>
    </div>


    <div class="col-sm-2 text-black bord">

        <div class="card zap";">
            <img src="http://placehold.it/200x100" class="card-img-top" alt="...">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
    </div>

    </div>

    </div>

    </body>
    </html>
    <?php require_once 'includes/footer.php'; ?>
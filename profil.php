<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<?php
$dbh = connectDB();
dd($_SESSION['auth_id']);
$reponse = $dbh->query('SELECT * FROM playlists WHERE user_id === $id');
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
<div class="container-fluid">
    <div class="row">
        <div class="col-sm vh-100 text-grey">

<div class="card">
    <div class="card-header">


                <h4>Ajouter une Playlist</h4>
    </div>

    <div class="card-body">
        <form method="post" action="assets/playlist.php">
            <div class="form-group">

                <div>
                <label for="title">Nom de la Playlist</label>
                <input class="form-control form-control-lg" name="title" type="text">

                </div>
                <div>
                    <label for="imgPlaylist">Choisissez une photo</label>
                    <div class="custom-file">
                        <input type="file" name="imgPlaylist" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>


            </div>
        </form>
    </div>

</div>
        </div>
        <div class="col-sm">

            <main class="col-sm vh-100">
                <h1>Mes Playlists</h1>

                <div class="container">
                    <div class="row">

                        <?php $resultats = $reponse->fetchAll();
                        for ($i=0; $i<=count($resultats) -1; $i++){?>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="http://placehold.it/200x100" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $resultats[$i]['title']; ?>
                                    </h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">découvrez ma playlist</a>
                                </div>
                            </div>
                        </div>
                        <?php }  ?>

                    </div>
                </div>


            </main>
        </div>
        <div class="col-sm-2 bg-secondary text-black">

            <div class="card" style="width: 18rem;">
                <img src="http://placehold.it/200x100" class="card-img-top" alt="...">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
            </div>
        </div>
    </<div>

    </div>

</body>
</html>
<?php require_once 'includes/footer.php'; ?>
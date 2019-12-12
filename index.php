<?php require_once './includes/header.php'; ?>
<?php require_once './includes/helpers.php'; ?>
<?php

$dbh = connectDB();
$id = $_GET['id'];
$stmt = $dbh->prepare("SELECT * FROM playlists");
$stmt->execute();

?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Index</title>
    </head>

    <body>

    <div class="row py-5">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">
                Cras justo odio
            </a>
            <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
            <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
        </div>
        <div class="container .col-12 .col-md-8">


            <?php $resultats = $stmt->fetchAll();
            for ($i=0; $i<=count($resultats) -1; $i++){?>
            <div class="col">
                <div class="card mb-3">
                    <img src="img/FondB.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $resultats[$i]['title']; ?>
                        </h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, modi.</p>

                            <a href="playlist.php?id=<?php echo $resultats[$i]['id'] ?>"><button type="button" class="btn btn-primary">Découvir !</button><a>
                        </div>
                    </div>
                </div>
            </div>
                <?php } ?>
        </div>
    </div>

    </body>
    </html>




<?php require_once './includes/footer.php'; ?>
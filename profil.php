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
<div class="container-fluid">
    <div class="row">
        <div class="col-sm vh-100 text-grey">

<div class="card">
    <div class="card-header">


                <h4>Ajouter une Playlist</h4>
    </div>

    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Nom de la Playlist</label>
                <div class="stick">
                <input class="form-control form-control-lg" type="text">
                    <a class="btn btn-primary" href="playlist_create.php" role="button">Ajouter</a>
                </div>
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
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="http://placehold.it/200x100" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="http://placehold.it/200x100" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>



            </main>
        </div>
        <div class="col-sm-2 bg-secondary text-black">

            <aside>
                <h4>UserName</h4>
            </aside>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </<div>

    </div>

</body>
</html>
<?php require_once 'includes/footer.php'; ?>

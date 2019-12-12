<?php require_once 'includes/header.php';
$id = $_GET['id'];
$playplay = getPlaylist($id);
?>
    <section>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../mspr">Accueil</a></li>
                <li class="breadcrumb-item"><a href="profil.php">Profil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Playlist</li>
            </ol>
        </nav>

        <div class="jumbotron">
            <h1>Mes morceaux</h1>
        </div>

        <div class="container">

            <div class="card mt-5">
                <div class="card-header">
                    Nouveau morceau
                </div>
                <div class="card-body">
                    <form method="post" action="assets/addSong.php?id=<?php echo $id ?>">
                        <div class="form-group">
                            <input id="link" name="link" class="form-control" placeholder="ID YouTube">
                        </div>
                        <div class="form-group">
                            <input name="artiste" class="form-control" placeholder="Artiste(s)">
                        </div>
                        <div class="form-group">
                            <input name="title" class="form-control" placeholder="Nom du morceau">
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>

            <div class="row"></div>
            <?php foreach (getSongs($playplay['id']) as $song): ?>
            <div class="col-lg-4">
                <div class="card my-5">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $song['link']; ?>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $song['title']; ?></h5>
                        <p class="card-text"><?php echo $song['artiste']; ?></p>
                    </div>
                </div>
                </div>
            <?php endforeach; ?>
        </div>

        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
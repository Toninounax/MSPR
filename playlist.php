<?php require_once 'includes/header.php';

$id = $_GET['id'];
$dbh = connectDB();
$stmt = $dbh->prepare("SELECT * FROM songs WHERE playlist_id = $id ");
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
        <li class="breadcrumb-item"><a href="profil.php">Profil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Playlist</li>
    </ol>
</nav>
<div class="jumbotron">
    <h1>Mes morceaux</h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <div class="card yop">
                <div class="card-header">
                    Nouveau morceau
                </div>
                <form method="post" action="assets/addSong.php?id=<?php echo $id ?>">
                <div class="card-body">
                    <h5 class="card-title">Lien YouTube</h5>
                    <div class="stick">
                        <input type="text" name="link" class="form-control form-control-lg" type="text">
                    </div>
                    <div class="stick pad">
                        <input type="text" name="artiste" class="form-control form-control-lg" type="text" placeholder="Artiste(s)">

                    </div>
                    <div class="stick pad">
                        <input type="text" name="title" class="form-control form-control-lg" type="text" placeholder="Nom du morceau">
                    </div>
                    <button type="submit" class="btn btn-primary loup">Ajouter</button>
                </div>
                </form>
            </div>
        </div>

    </div>
</div>


    <?php $resultats = $stmt->fetchAll();
    for ($i=0; $i<=count($resultats) -1; $i++){?>
    <div class="card jok" style="width: 362px;">
        <iframe width="360" height="315" src="<?php echo $resultats[$i]['link']; ?>" frameborder="0" allowfullscreen></iframe>
        <div class="card-body jab">
            <h5 class="card-title">
                <?php echo $resultats[$i]['title']; ?>
            </h5>
            <h6 class="card-text">
                <?php echo $resultats[$i]['artiste']; ?>
            </h6>
            <a href="<?php echo $resultats[$i]['link']; ?>" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <?php }?>

</div>

</body>
</html>
<?php require_once 'includes/footer.php'; ?>



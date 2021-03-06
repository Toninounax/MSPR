<?php require_once './includes/header.php'; ?>



    <section>
        <div class="container">

            <div class="row py-5">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        Menu
                    </a>
                    <a href="profil.php?id=<?php echo $_SESSION['auth_id']; ?>" class="list-group-item list-group-item-action">Profil</a>
                    <a href="#" class="list-group-item list-group-item-action active">
                        Mes playlists
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1"
                       aria-disabled="true">Vestibulum at eros</a>
                </div>
                <div class="col-12 col-md-8">

                    <h2>Les playlists</h2>

                    <?php foreach (getPlaylists() as $playlist): ?>
                    <?php require './item-playlist.php'; ?>
                    <?php endforeach; ?>

                </div>
            </div>


        </div>
    </section>


<?php require_once './includes/footer.php'; ?>
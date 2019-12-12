<div class="collapse container-fluid" id="addPlaylist">
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
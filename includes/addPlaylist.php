<div class="card collapse" id="addPlaylist">
    <div class="card-header">


        <h4>Ajouter une Playlist</h4>
    </div>

    <div class="card-body">
        <form method="post" action="assets/playlist.php?id=<?php echo $id; ?>">
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
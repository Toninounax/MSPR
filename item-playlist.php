<div class="card mb-3">
    <div class="card-header">
        crée par <?php echo $playlist['first_name']; ?>
    </div>
    <img src="img/FondB.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $playlist['title']; ?>
        </h5>
        <div><?php echo count(getPlaylistLikes($playlist['id'])); ?></div>
        <small class="text-muted">Last updated 3 mins ago</small>
    </div>
    <div class="card-footer">

        <a href="assets/addLike.php?id=<?php echo $playlist['id'] ?>" class="btn text-white btn-danger">J'aime</a>

            <a class="btn btn-secondary"  data-toggle="collapse" href="#addComment">commentaire</a>


            <a href="playlist.php?id=<?php echo $playlist['id'] ?>" class="btn btn-primary">
                Découvir !<a>


    </div>

    <div>
        <?php require_once './includes/addComment.php'?>
    </div>

</div>
<?php require_once 'helpers.php'; ?>



<div class="card collapse" id="addComment">


    <?php foreach (getComments() as $comment) : ?>
    <?php require_once 'comment.php'; ?>
    <?php endforeach; ?>

    <section>
        <form type="post" action="./assets/addComment.php?id=<?php echo $playlist['id']; ?>">
            <div>
                <input class="form-control form-control-lg" name="comment" type="text">
            </div>
            <button type="submit" class="btn btn-primary">commenter</button>
        </form>
    </section>

</div>
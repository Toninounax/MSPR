<?php require_once 'includes/header.php'; ?>

<?php $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : []; ?>

<h1 class="text-center mt-3">Inscription</h1>

    <div class="card container py-2 mt-3">
            <form method="post" action="assets/register.php">

                <div class="form-group">
                    <label for="first_name">Prénom</label>
                    <input type="text" class="form-control" id="first_name" name="first_name">
                </div>

                <div class="form-group">
                    <label for="last_name">Nom</label>
                    <input type="text" class="form-control" id="last_name" name="last_name">
                    <small class="invalid-feedback"><?php echo $errors ?></small>
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
                    <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">S'inscrire</button>

            </form>

        <a href="login.php"><button>Se connecter</button></a>
            </div>


<?php
$_SESSION['errors'] = [];
?>

<?php require_once 'includes/footer.php'; ?>
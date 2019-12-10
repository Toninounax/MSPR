<?php require_once 'includes/header.php'; ?>


    <h1 class="text-center mt-3">Connexion</h1>

    <div class="card container py-2 mt-3">
        <form method="post" action="./assets/login.php">

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" name="buttonLogin" class="btn btn-primary">Se connecter</button>

        </form>
        <a href="register.php"><button>S'inscrire</button></a>

    </div>


<?php require_once 'includes/footer.php'; ?>
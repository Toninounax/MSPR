<aside class="collapse py-5 border-bottom" id="debug">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-4">
                <div class="card-header">
                    $_GET
                </div>
                <div class="card-body">
                    <?php var_dump($_GET);?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-header">
                    $_POST
                </div>
                <div class="card-body">
                    <?php var_dump($_POST);?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-header">
                    $_SESSION
                </div>
                <div class="card-body">
                    <?php var_dump($_SESSION);?>
                </div>
            </div>
        </div>

    </div>
</aside>
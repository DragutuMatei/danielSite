<?php
require_once './core/init.php';

if (isset($_SESSION["admin"])) {
    Redirect::to("admin.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>redirect</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/2647a8e79d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-1.compiled.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-grid.compiled.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-reboot.compiled.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-utilities.compiled.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.compiled.css">
    <link rel="stylesheet" href="assets/scss/styles.css">

</head>

<body>

    <?php require_once 'navbar.php'; ?>

    <header class="masthead">
    </header>



    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Această pagină este protejată printr-o parolă</h2>
                    <p class="w-lg-50">Dacă nu o știi nu o vei putea accesa</p>

                    <?php
                    if (isset($_SESSION["admins"])) {
                        echo "<h2>Parolă greșită</h2>";
                        Session::delete("admins");
                    }
                    ?>

                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4 text-center">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <form class="text-center" action="api/decizie.php" method="POST">
                                <div class="mb-3"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                                <div class="mb-3"><input class="btn btn-primary d-block w-100" type="submit" name="submit"></input></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End: Login Form Basic -->


    <!-- <form action="api/decizie.php" method="POST">
        <input type="password" name="password">
        <input type="submit" name="submit" value="submit">
    </form> -->
    <?php
    require_once './footer.php';  ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>

</body>

</html>
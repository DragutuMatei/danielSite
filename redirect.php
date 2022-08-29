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
    <title>Protected</title>

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
    <?php
    if (isset($_SESSION["admins"])) {
        echo "<h2>Parolă greșită</h2>";
        Session::delete("admins");
    }
    ?>

    <div class="container" style="position:absolute; left:0; right:0; top: 50%; transform: translateY(-50%); -ms-transform: translateY(-50%); -moz-transform: translateY(-50%); -webkit-transform: translateY(-50%); -o-transform: translateY(-50%);">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9 col-xl-9 col-xxl-7">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Această pagină este protejată cu o parolă</h4>
                                    </div><!-- Start: Login Form -->

                                    <form class="user" action="api/decizie.php" method="POST">

                                        <div class="mb-3"></div>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" placeholder="Password" name="password"></div>
                                        <input class="btn btn-primary d-block btn-user w-100" id="submitBtn" type="submit"></input>
                                        <hr>
                                    </form><!-- End: Login Form -->
                                    <div class="text-center"></div><!-- End: Forgot Password -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <input type="password" name="password"> -->
        <!-- <input type="submit" name="submit" value="submit"> -->
        <!-- </form> -->
</body>

</html>
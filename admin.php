<?php
require_once 'core/init.php';

if (!isset($_SESSION["admin"]))
    Redirect::to("redirect.php");
$user = new User();
$posts = $user->getAll();

$events = $user->getAllEv();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Muzeul Tecuci</title>
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

    <header class="masthead" style="background-image:url('assets/img/contact-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="site-heading">
                        <h1><br><strong>Administrarea site-ului muzeului</strong><br></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <p><br><strong>De aici poți adăuga postări</strong></p>

                <form style="display:flex;flex-direction:column;justify-content:center;align-items:center" action="api/admin.api.php" method="POST" enctype="multipart/form-data">

                    <div class="control-group">
                        <div class="form-floating controls mb-3">
                            <input class="border rounded-0 border-1 border-dark form-control" type="text" id="titlu" name="titlu" required placeholder="Titlu">
                            <label class="form-label" for="name" style="margin: 5px;">Titlu</label>
                            <small class="form-text text-danger help-block"></small>
                        </div>
                    </div>

                    <!-- Start: Subtitluri -->
                    <div class="control-group">
                        <div class="form-floating controls mb-3">
                            <textarea class="border rounded-0 border-1 border-dark form-control" required name="subtitluri" placeholder="subtitluri" id="" cols="30" rows="10" style="height: 150px;"></textarea>
                            <label class="form-label" style="margin: 4px;">Subtitluri</label>
                            <small class="form-text text-danger help-block"></small>
                        </div>
                    </div><!-- End: Subtitluri -->


                    <!-- Start: Descrieri -->
                    <div class="control-group">
                        <div class="form-floating controls mb-3">
                            <textarea class="border rounded-0 border-1 border-dark form-control" required name="txt" placeholder="descrieri" id="" cols="30" rows="10" style="height: 150px;"></textarea>
                            <label class="form-label" style="padding: 20px 0px;margin: 5px;">descrieri</label>
                            <small class="form-text text-danger help-block"></small>
                        </div>
                    </div><!-- End: Descrieri -->

                    <!-- Start: imaginea coperta -->
                    <div class="control-group">
                        <div class="form-floating controls mb-3">
                            <input class="form-control form-control-lg d-inline-flex" required type="file" name="cover" style="padding: 44px 0px 10px;">
                            <label class="form-label fs-2 fw-normal text-center text-dark">Imaginea de coperta a postării</label>
                            <small class="form-text text-danger help-block"></small>
                        </div>
                    </div><!-- End: imaginea coperta -->


                    <!-- Start: imaginile postarii -->
                    <div class="control-group">
                        <div class="form-floating controls mb-3">
                            <input class="form-control form-control-lg d-inline-flex" required type="file" name="imagini[]" multiple style="padding: 44px 0px 10px;">
                            <label class="form-label fs-2 fw-normal text-center text-dark">Imagininile postării</label>
                            <small class="form-text text-danger help-block"></small>
                        </div>
                    </div><!-- End: imaginile postarii -->

                    <div class="control-group">
                        <div class="form-floating controls mb-3">
                            <input class="form-control" required type="date" name="data">
                            <label class="form-label fs-2 fw-normal text-center text-dark">Data postării</label>
                            <small class="form-text text-danger help-block"></small>
                        </div>
                    </div><!-- End: Data -->

                    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                    <input type="submit" value="adauga" name="submit">
                </form>

                <?php
                foreach ($posts as $post) {
                    echo ' <div class="post-preview">
                <a href="post.php?id=' . $post->id . '">
                    <h2 class="post-title">' . $post->titlu . '</h2>
                    <h3 class="post-subtitle">' . explode(";", $post->subtitluri)[0] . '&nbsp;</h3>
                </a>
                <form action="api/admin.api.php" method="POST">
                    <input type="hidden" name="id" value="' . $post->id . '" >
                    <button style="background:none;" type="submit" name="delete"> <i class="fas fa-trash-alt"></i> </button>
                </form>
            </div>
            <hr>';
                }
                ?>

                <br><br><br><br><br><br><br>
                <hr>
                <hr>
                <hr>
                <hr>
                <form style="display:flex;flex-direction:column;justify-content:center;align-items:center" action="api/admin.api.php" method="POST" enctype="multipart/form-data">
                    <input required type="text" name="titlu" placeholder="Titlu">
                    <!-- <input required type="text" name="user" placeholder="user"> -->
                    <textarea required name="subtitluri" placeholder="subtitluri" id="" cols="30" rows="10"></textarea>
                    <textarea required name="txt" placeholder="descrieri" id="" cols="30" rows="10"></textarea>

                    <select id="an" name="an" required>
                        <option value=""></option>
                    </select>

                    <script>
                        const an_html_element = document.querySelector("#an");
                        const an = new Date().getFullYear();

                        an_html_element.innerHTML = "<option value=''>Alege un an</option>";

                        for (let i = 2015; i <= an; i++) {
                            let optionTag = "<option value='" + i + "'>" + i + "</option>";
                            an_html_element.innerHTML += optionTag;
                        }
                    </script>


                    <h1>Imaginea de coperta a eventimentului</h1>
                    <input required type="file" name="cover">
                    <h1>Imaginile eventimentului </h1>
                    <input required type="file" name="imagini[]" multiple>
                    <input required type="date" name="data">
                    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                    <input type="submit" value="adauga" name="ev">
                </form>

                <?php
                foreach ($events as $ev) {
                    echo ' <div class="post-preview">
                <a href="post.php?ev=true&id=' . $ev->id . '">
                    <h2 class="post-title">' . $ev->titlu . '</h2>
                    <h3 class="post-subtitle">' . explode(";", $ev->subtitluri)[0] . '&nbsp;</h3>
                </a>
                <form action="api/admin.api.php" method="POST">
                    <input type="hidden" name="id" value="' . $ev->id . '" >
                    <button style="background:none;" type="submit" name="delete_an"> <i class="fas fa-trash-alt"></i> </button>
                </form>
            </div>
            <hr>';
                }
                ?>
                <?php
                require_once './footer.php';  ?>
</body>

</html>
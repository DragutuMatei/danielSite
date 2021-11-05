<?php
require_once './core/init.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Muzeul Tecuci</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-1.compiled.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-grid.compiled.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-reboot.compiled.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-utilities.compiled.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.compiled.css">
    <link rel="stylesheet" href="assets/css/styles.compiled.css">
</head>

<body>
    <?php require_once 'navbar.php'; ?>
    <header class="masthead" style="background-image:url(assets/img/homeHero.jpg);    background-attachment: fixed;
    background-position: bottom;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="site-heading">
                        <h1>Muzeul de istorie&nbsp;</h1>
                        <h1>Teodor Cincu</h1><span class="subheading">Aici mare text pentru tine</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Start: 1 Row 2 Columns -->
    <div class="container">
        <div class="row">
            <div class="col-md-6"><img src="assets/img/Statueta-Muzeul-de-Istorie-Tecuci.png"></div>
            <div class="col-md-6">
                <h3 style="color: #0085a1;text-align: center;font-family: 'Lora',serif;">SCURT ISTORIC</h3>
                <h2 style="text-align: center;font-family: 'Poppins',sans-serif;"><br><strong>MUZEUL DE ISTORIE „TEODOR CINCU” TECUCI</strong><br><br></h2>
                <div class="muzeu_text_column muzeu_content_element muzeu_animate_when_almost_visible muzeu_slideInRight slideInRight vc_custom_1508447400818 muzeu_start_animation animated">
                    <div class="muzeu_wrapper">
                        <h4>Edificiul în care funcţionează <strong>Muzeul de Istorie Teodor Cincu</strong> Tecuci , inclus în lista monumentelor istorice, categoria A, a fost construit în mai multe etape începând cu sfârşitul secolului al XIX-lea.</h4>
                        <p>În anul 1885, clădirea este amintită ca fiind în proprietatea lui Anton Cincu, om politic şi filantrop local, care o va lăsa prin testament, la 22 iulie 1894, fiului <span style="color: #333333;">Teodor Cincu</span>. Din punct de vedere arhitectural, se remarcă stilul baroc, predominant în prima etapă a construcţiei,</p>
                        <p>, când accesul se făcea dinspre sud, un turnuleţ pe care era inserat medalionul cu blazonul familiei străjuind intrarea în casă.</p>
                        <p>La începutul secolului al XX-lea, s-au modificat faţadele casei, accesul principal fiind orientat spre est şi tratat în stil neoclasic. Un fronton&nbsp; susţinut de patru coloane corintice marchează ….</p>
                    </div>
                </div>
                <div class="vc_wp_text muzeu_content_element">
                    <div class="widget widget_text">
                        <div class="textwidget">
                            <p></p>
                            <p style="text-align: center;"><a href="istoric.php" rel="noopener"><span style="color: #0085a1;">&nbsp;Citeste mai multe&nbsp;→</span></a></p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><!-- End: 1 Row 2 Columns -->
    <br><br>
    <br><br>
    <h2 style="color: #0085a1;text-align: center;font-family: 'Lora',serif;"><strong>CELE MAI NOI ARTICOLE</strong><br></h2>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8">

                <?php
                $user = new User();

                $posts = $user->getPosts();
                foreach ($posts as $post) {
                    echo ' <div class="post-preview">
                                <a href="post.php?id=' . $post->id . '">
                                    <h2 class="post-title">' . $post->titlu . '</h2>
                                    <h3 class="post-subtitle">' . explode(";", $post->subtitluri)[0] . '&nbsp;</h3>
                                </a>
                                <p class="post-meta">A fost postat de <a href="https://www.facebook.com/muzeultecucean.antoncincu.1" target="_blank">Daniel Dojan</a></p>
                            </div>
                            <hr>';
                }
                ?>


                <!-- <div class="post-preview"><a href="#">
                        <h2 class="post-title">Aici avem urmatoarea postare</h2>
                    </a>
                    <p class="post-meta">Posted by&nbsp;<a href="#">bag pl in el</a></p>
                </div>
                <hr>
                <div class="post-preview"><a href="#">
                        <h2 class="post-title"><br><strong>Aici avem urmatoarea postare</strong><br><br></h2>
                        <h3 class="post-subtitle">Subtext ma omor</h3>
                    </a>
                    <p class="post-meta">Posted by&nbsp;<a href="#">nu mai fac nimic</a></p>
                </div>
                <hr>
                <div class="post-preview"><a href="#">
                        <h2 class="post-title"><br><strong>Aici avem urmatoarea postare</strong><br><br></h2>
                        <h3 class="post-subtitle"><br>Subtext ma omor<br><br></h3>
                    </a>
                    <p class="post-meta">Posted by&nbsp;<a href="#">te descurci</a></p>
                </div>
                <hr>
                <div class="clearfix"><button class="btn btn-primary float-end" type="button">Ultimele postari</button></div> -->
            </div>
        </div>
    </div>
    <br><br>
    <br><br>
    <section class="features">
        <div class="container">

            <div class="section-title">
                <h2>Features</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
                    in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="assets/img/brevete.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-4">
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    </ul>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2">
                    <img src="assets/img/medalii.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1">
                    <h3>Corporis temporibus maiores provident</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore
                        magna aliqua.
                    </p>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="assets/img/sabie Carol al II lea.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5">
                    <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                    <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut
                        quia voluptatem hic voluptas dolor doloremque.</p>
                    <ul>
                        <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
                    </ul>
                </div>
            </div>
            <style>
                .col-md-5 {
                    align-items: center;
                    display: flex;
                }
            </style>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2">
                    <img src="assets/img/vitrina sala de expunere.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1">
                    <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore
                        magna aliqua.
                    </p>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End Features Section -->

    <?php require_once './footer.php';  ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>
</body>

</html>
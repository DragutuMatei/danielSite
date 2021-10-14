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
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.html">Muzeul Tecucean</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Acasa</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Program Vizitare</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Istoric</a></li><!-- Start: Sectiuni -->
                    <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a aria-expanded="false" data-bs-toggle="dropdown" class="dropdown-toggle text-uppercase" href="#">Sectiuni
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Paleontologie</a><a class="dropdown-item" href="#">Arheologie</a><a class="dropdown-item" href="#">Numismatică</a>
                            <a class="dropdown-item" href="#">Istorie</a>
                            <a class="dropdown-item" href="#">Artă</a>
                            <a class="dropdown-item" href="#">Educație muzeală</a>
                        </div>
                    </li>
                    </li><!-- End: Sectiuni -->
                    <!-- Start: Evenimente -->
                    <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a aria-expanded="false" data-bs-toggle="dropdown" class="dropdown-toggle text-uppercase" href="#">Evenimente
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">2015</a>
                            <a class="dropdown-item" href="#">2016</a>
                            <a class="dropdown-item" href="#">2017</a>
                            <a class="dropdown-item" href="#">2018</a>
                            <a class="dropdown-item" href="#">2019</a>
                            <a class="dropdown-item" href="#">2020</a>
                            <a class="dropdown-item" href="#">2020</a>
                            <a class="dropdown-item" href="#">2021</a>
                        </div>
                    </li>
                    </li><!-- End: Evenimente -->
                    <!-- Start: Organizare -->
                    <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a aria-expanded="false" data-bs-toggle="dropdown" class="dropdown-toggle text-uppercase" href="#">Organizare
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">R.O.F.</a>
                            <a class="dropdown-item" href="#">Organigramă</a>
                            <a class="dropdown-item" href="#">Transparență salarială</a>
                            <a class="dropdown-item" href="#">Buget </a>
                            <a class="dropdown-item" href="#">Plan Cultural</a>
                        </div>
                    </li>
                    </li><!-- End: Organizare -->
                    <li class="nav-item"><a class="nav-link" href="#">Taxe-tarife</a></li><!-- Start: Arhive Online -->
                    <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a aria-expanded="false" data-bs-toggle="dropdown" class="dropdown-toggle text-uppercase" href="#">Arhiva Online
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Publicații tecucene</a>
                            <a class="dropdown-item" href="#">Materiale informative</a>
                            <a class="dropdown-item" href="#">Diverse</a>
                        </div>
                    </li>
                    </li><!-- End: Arhive Online -->
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/muzeu-front.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="site-heading">
                        <h1>Muzeul de istorie&nbsp;</h1>
                        <h1>Anton Cincu</h1><span class="subheading">Aici mare text pentru tine</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
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
                                    <h3 class="post-subtitle">Subtitlul&nbsp;</h3>
                                </a>
                                <p class="post-meta">A fost postat de <a href="https://web.facebook.com/dragutu.persida" target="_blank">ma-ta</a></p>
                            </div>
                            <hr>';
                }
                ?>


                <div class="post-preview"><a href="#">
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
                <div class="clearfix"><button class="btn btn-primary float-end" type="button">Ultimele postari</button></div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></li>
                    </ul>
                    <p class="text-muted copyright">Copyright&nbsp;©&nbsp;Muzeul Tecuci 2021</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>
</body>

</html>
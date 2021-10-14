<?php
require_once './core/init.php';

$id = $_GET['id'];
$user = new User();
$post = $user->getPost($id);
$subtitle  = explode(";", $post->subtitluri);
$txt = explode(";", $post->txt);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog Post - Muzeul Tecuci</title>
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
    <header class="masthead" style="background-image:url('assets/img/post-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="post-heading">
                        <h1>Asta e de la o postare</h1>
                        <h2 class="subheading">Subtitlu</h2><span class="meta">Posted by&nbsp;<a href="#">MA-TA</a>&nbsp;on August 24, 2018</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>
                    <p>Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.</p>
                    <p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>
                    <p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That's how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>
                    <p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.</p>
                    <h2 class="section-heading">Heading</h2>
                    <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>
                    <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>
                    <figure>
                        <blockquote class="blockquote">
                            <p class="mb-0">The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</p>
                        </blockquote>
                    </figure>
                    <p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.</p>
                    <h2 class="section-heading">Reaching for the Stars</h2>
                    <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p><a href="#"><img class="img-fluid" src="assets/img/post-sample-image.jpg"></a><span class="text-muted caption">To go places and do things that have never been done before – that’s what living is all about.</span>
                    <p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>
                    <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>
                </div>
            </div>
        </div>
    </article>
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
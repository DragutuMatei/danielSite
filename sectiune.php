<?php
require_once './core/init.php';

$sect = $_GET['sect'];

$path = "";

switch ($sect) {
    case 'paleontologie':
        $path = "Sectiuni / paleontologie";
        break;
    case 'arheologie':
        $path = "Sectiuni / Arheologie";
        break;
    case 'numismatica':
        $path = "Sectiuni / Numistimatică";
        break;
    case 'istorie':
        $path = "Sectiuni / Istorie";
        break;
    case 'arta':
        $path = "Sectiuni / Arta";
        break;
    case 'educatie':
        $path = "Sectiuni / Educatie muzeala";
        break;
    case '2015':
        $path = "Evenimente / 2015";
        break;
    case '2016':
        $path = "Evenimente / 2016";
        break;
    case '2017':
        $path = "Evenimente / 2017";
        break;
    case '2018':
        $path = "Evenimente / 2018";
        break;
    case '2019':
        $path = "Evenimente / 2019";
        break;
    case '2020':
        $path = "Evenimente / 2020";
        break;
    case '2021':
        $path = "Evenimente / 2021";
        break;
    case 'publicatii':
        $path = "Arhiva Online / Publicatii tecucene";
        break;
    case 'materiale':
        $path = "Arhiva Online / Materiale Informative";
        break;
    case 'diverse':
        $path = "Arhiva Online / Diverse";
        break;
}


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
<?php require_once 'navbar.php'; ?>

    <header class="masthead" style="background-image:url('assets/img/muzeu-front.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="site-heading">
                        <h1>Muzeul de istorie&nbsp;</h1>
                        <h1>Anton Cincu</h1>
                        <span class="subheading">
                            <?php
                            echo $path;
                            ?>
                        </span>
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

                $posts = $user->getPostsBy($sect);
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
                <hr> -->
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
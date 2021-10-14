<?php
require_once './core/init.php';

$id = $_GET['id'];
$user = new User();
$post = $user->getPost($id);
$subtitle  = explode(";", $post->subtitluri);
$txt = explode(";", $post->txt);
$poze = json_decode($post->poze);

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
    <?php require_once 'navbar.php'; ?>

    <header class="masthead" style="background-image:url(<?php echo $poze[0]; ?>);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="post-heading">
                        <h1><?php echo $post->titlu ?></h1>
                        <h2 class="subheading"><?php $subtitle[0] ?></h2><span class="meta">Posted by&nbsp;<a href="https://www.facebook.com/muzeultecucean.antoncincu.1" target="_blank">Daniel Dojan</a>&nbsp;on <?php echo $post->data ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <?php
                    for ($i = 0; $i < count($txt); $i++) {

                        if ($i != 0 && $i < count($subtitle))
                            echo '<h2 class="section-heading">' . $subtitle[$i] . '</h2>';
                        echo "<p>" . $txt[$i] . "</p>";
                    }

                    foreach ($poze as $poza) {
                        echo "<img src='" . $poza . "' />";
                    }

                    ?>
                    <figure>
                        <blockquote class="blockquote">
                            <p class="mb-0">The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</p>
                        </blockquote>
                    </figure>



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
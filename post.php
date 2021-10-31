<?php
require_once './core/init.php';

$id = $_GET['id'];
$user = new User();
$post = $user->getPost($id);
$subtitle  = explode(";", $post->subtitluri);
$txt = explode(";", $post->txt);
$poze = json_decode($post->poze);
$numar_slider = 0;
$inceput = 0;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog Post - Muzeul Tecuci</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css" /> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script> -->



    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript"></script>













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
                    ?>
                    <!--                     <div class="container-lg my-3">


                        <div data-ride="carousel" class="carousel slide" id="carousel-example-generic">
                            <ol class="carousel-indicators">

                                <?php
                                //     $i = 0;
                                //     foreach ($poze as $poza) {

                                //         if ($i == 0)
                                //             echo '<li class="active" data-slide-to="0" data-target="#carousel-example-generic"></li>';
                                //         else
                                //             echo '<li data-slide-to="' . $i . '" data-target="#carousel-example-generic" class=""></li>';

                                //         $i++;
                                //     }

                                //     
                                ?>
                            // </ol>

                            // <div class="carousel-inner">
                            //     <?php
                                    //     $i = 0;
                                    //     foreach ($poze as $poza) {

                                    //         if ($i == 0)
                                    //             echo '
                                    //         <div class="item active">
                                    //             <img src="' . $poza . '" />
                                    //         </div>
                                    //         ';
                                    //         else
                                    //             echo '
                                    //         <div class="item">
                                    //             <img src="' . $poza . '" />
                                    //         </div>
                                    //         ';

                                    //         $i++;
                                    //     }
                                    ?>
                            </div>
                            <a data-slide="prev" href="#carousel-example-generic" class="left carousel-control">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a data-slide="next" href="#carousel-example-generic" class="right carousel-control">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->


                    <div class="row">
                        <style>
                            * {
                                box-sizing: border-box
                            }

                            body {
                                font-family: Verdana, sans-serif;
                                margin: 0
                            }

                            .mySlides {
                                display: none
                            }

                            img {
                                vertical-align: middle;
                                height: 400px;
                                object-fit: contain;
                                width: auto;
                            }

                            /* Slideshow container */
                            .slideshow-container {
                                max-width: 1000px;
                                position: relative;
                                margin: auto;
                            }

                            /* Next & previous buttons */
                            .prev,
                            .next {
                                cursor: pointer;
                                position: absolute;
                                top: 50%;
                                width: auto;
                                padding: 16px;
                                margin-top: -22px;
                                color: white;
                                font-weight: bold;
                                font-size: 18px;
                                transition: 0.6s ease;
                                border-radius: 0 3px 3px 0;
                                user-select: none;
                                background-color: rgba(0, 0, 0, 0.8);

                            }

                            /* Position the "next button" to the right */
                            .next {
                                right: 0;
                                border-radius: 3px 0 0 3px;
                            }

                            /* On hover, add a black background color with a little bit see-through */

                            /* Caption text */
                            .text {
                                color: #f2f2f2;
                                font-size: 15px;
                                padding: 8px 12px;
                                position: absolute;
                                bottom: 8px;
                                width: 100%;
                                text-align: center;
                            }

                            /* Number text (1/3 etc) */
                            .numbertext {
                                color: #f2f2f2;
                                font-size: 12px;
                                padding: 8px 12px;
                                position: absolute;
                                top: 0;
                            }

                            /* The dots/bullets/indicators */
                            .dot {
                                cursor: pointer;
                                height: 15px;
                                width: 15px;
                                margin: 0 2px;
                                background-color: #bbb;
                                border-radius: 50%;
                                display: inline-block;
                                transition: background-color 0.6s ease;
                            }

                            .active,
                            .dot:hover {
                                background-color: #717171;
                            }

                            /* Fading animation */
                            .fadess {
                                -webkit-animation-name: fade;
                                -webkit-animation-duration: 1.5s;
                                animation-name: fade;
                                animation-duration: 1.5s;
                            }

                            @-webkit-keyframes fade {
                                from {
                                    opacity: .4
                                }

                                to {
                                    opacity: 1
                                }
                            }

                            @keyframes fade {
                                from {
                                    opacity: .4
                                }

                                to {
                                    opacity: 1
                                }
                            }

                            /* On smaller screens, decrease text size */
                            @media only screen and (max-width: 300px) {

                                .prev,
                                .next,
                                .text {
                                    font-size: 11px
                                }
                            }
                        </style>
                        </head>

                        <body>

                            <div class="slideshow-container" style="margin-top:30px">
                                <?php
                                $i = 0;
                                foreach ($poze as $poza) {
                                    $i++;

                                    echo '
                        <div class="mySlides fadess">
                            <div class="numbertext">' . $i . ' / ' . count($poze) . '</div>
                            <img src="' . $poza . '" style="width:100%">
                        </div>
                        ';
                                }

                                ?>

                                <!-- <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="img_snow_wide.jpg" style="width:100%">
                            <div class="text">Caption Two</div>
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="img_mountains_wide.jpg" style="width:100%">
                            <div class="text">Caption Three</div>
                        </div> -->

                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                            </div>
                            <br>

                            <div style="text-align:center">
                                <span class="dot" onclick="currentSlide(1)"></span>
                                <span class="dot" onclick="currentSlide(2)"></span>
                                <span class="dot" onclick="currentSlide(3)"></span>
                            </div>

                            <script>
                                var slideIndex = 1;
                                showSlides(slideIndex);

                                function plusSlides(n) {
                                    showSlides(slideIndex += n);
                                }

                                function currentSlide(n) {
                                    showSlides(slideIndex = n);
                                }

                                function showSlides(n) {
                                    var i;
                                    var slides = document.getElementsByClassName("mySlides");
                                    var dots = document.getElementsByClassName("dot");
                                    if (n > slides.length) {
                                        slideIndex = 1
                                    }
                                    if (n < 1) {
                                        slideIndex = slides.length
                                    }
                                    for (i = 0; i < slides.length; i++) {
                                        slides[i].style.display = "none";
                                    }
                                    for (i = 0; i < dots.length; i++) {
                                        dots[i].className = dots[i].className.replace(" active", "");
                                    }
                                    slides[slideIndex - 1].style.display = "block";
                                    dots[slideIndex - 1].className += " active";
                                }
                            </script>
                    </div>


                </div>

                <figure>
                    <blockquote class="blockquote">
                        <p class="mb-0">The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</p>
                    </blockquote>
                </figure>
    </article>
    <?php require_once './footer.php';  ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>
</body>

</html>
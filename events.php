<?php

require_once './core/init.php';

$user = new User();

if (isset($_GET['an'])) {
    // cast var as int
    $anul_evenimentului = (int) $_GET['an'];
}

$posts = $user->getEventsBy($anul_evenimentului);
$numar = $user->getCount();


// number of rows to show per page
$rowsperpage = 10;
// find out total pages
$totalpages = ceil($numar / $rowsperpage);

// get the current page or set a default
if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
    // cast var as int
    $currentpage = (int) $_GET['currentpage'];
} else {
    // default page num
    $currentpage = 1;
} // end if

// if current page is greater than total pages...
if ($currentpage > $totalpages) {
    // set current page to last page
    $currentpage = $totalpages;
} // end if
// if current page is less than first page...
if ($currentpage < 1) {
    // set current page to first page
    $currentpage = 1;
} // end if

// the offset of the list, based on current page 
$offset = ($currentpage - 1) * $rowsperpage;

$posts = $user->getBlogEvents($anul_evenimentului, $offset, $rowsperpage);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog - Muzeul Tecuci</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-1.compiled.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-grid.compiled.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-reboot.compiled.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-utilities.compiled.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.compiled.css">
    <link rel="stylesheet" href="assets/scss/styles.css">




    <style>
        .pagination,
        .pagination li a {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .pagination li {
            background-color: lightseagreen;
        }

        .pagination a {
            font-weight: 300;
            padding-top: 1px;
            text-decoration: none;
            border: 1px solid rgba(0, 0, 0, .25);
            border-left-width: 0;
            min-width: 44px;
            min-height: 44px;
            color: rgba(255, 255, 255, .85);
            box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, .35);
        }

        .pagination li:not([class*="current"]) a:hover {
            background-color: rgba(255, 255, 255, .2);
            border-top-color: rgba(0, 0, 0, .35);
            border-bottom-color: rgba(0, 0, 0, .5);
        }

        .pagination li:not([class*="current"]) a:focus,
        .pagination li:not([class*="current"]) a:active {
            box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, .25);
            border-left-width: 1px;
        }

        .pagination li:first-of-type a {
            border-left-width: 1px;
        }

        .pagination li:first-of-type span,
        .pagination li:last-of-type span,
        .pagination li:nth-of-type(2) span,
        .pagination li:nth-last-of-type(2) span {
            /* screen readers only */
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        .pagination li:first-child a::before,
        .pagination li:last-child a::after,
        .pagination li:nth-of-type(2) a::before,
        .pagination li:nth-last-of-type(2) a::after {
            display: inline-block;
            font-family: Fontawesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            transform: translate(0, 0);
        }

        .pagination li:first-child a::before,
        .pagination li:last-child a::after {
            content: "\f100";
        }

        .pagination li:nth-of-type(2) a::before,
        .pagination li:nth-last-of-type(2) a::after {
            content: "\f104";
        }

        .pagination li:last-child a::after,
        .pagination li:nth-last-of-type(2) a::after {
            transform: rotate(180deg);
        }

        .pagination li.current a {
            padding-top: .25em;
            color: rgba(255, 255, 255, 1);
            background-color: rgba(255, 255, 255, .15);
            box-shadow: inset 0px 2px 1px 0px rgba(0, 0, 0, .25);
            cursor: default;
            pointer-events: none;
        }

        @media only screen and (max-width: 64.063em) {

            .pagination li:first-child,
            .pagination li:last-child {
                /* screen readers only */
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            .pagination li:nth-of-type(2) a {
                border-left-width: 1px;
            }

        }

        @media only screen and (max-width: 40.063em) {
            .pagination li {
                /* screen readers only */
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            .pagination li.current,
            .pagination li:first-of-type,
            .pagination li:last-of-type,
            .pagination li:nth-of-type(2),
            .pagination li:nth-last-of-type(2) {
                position: initial;
                top: initial;
                left: initial;
            }

            .pagination li:nth-of-type(2) a {
                border-left-width: 0;
            }

        }

        @media only screen and (max-width: 30.063em) {

            h1 {
                font-size: 1.35em !important;
            }

            .pagination li:first-child,
            .pagination li:last-child {
                /* screen readers only */
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            .pagination li:nth-of-type(2) a {
                border-left-width: 1px;
            }

        }

        @media only screen and (max-width: 15.063em) {
            /* For watches? */

            .pagination li {
                width: 50%;
            }

            .pagination li.current {
                order: 2;
                width: 100%;
                border-left-width: 1px;

            }

        }
    </style>

</head>

<body>
    <?php require_once 'navbar.php'; ?>
    <header class="masthead" style="background-image:url('assets/img/homeHero.jpg');    background-attachment: fixed;
    background-position: bottom;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="site-heading">
                        <h1>Muzeul de Istorie&nbsp;</h1>
                        <h1>„TEODOR CINCU” TECUCI </h1>
                        <span class="subheading">„Întru luminarea minții și cultivarea sufletului” </span>
                        <span class="subheading">Teodor Cincu, 1934 </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <br><br>
    <br><br>
    <h2 style="color: #0085a1;text-align: center;font-family: 'Lora',serif;"><strong>Toate evenimentele din anul <?php echo $anul_evenimentului ?> (<?php echo $numar ?>)</strong><br></h2>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8">

                <?php

                foreach ($posts as $post) {
                    echo ' <div class="post-preview">
                        <a href="event.php?id=' . $post->id . '">
                            <h2 class="post-title">' . $post->titlu . '</h2>
                            <h3 class="post-subtitle">' . explode(";", $post->subtitluri)[0] . '&nbsp;</h3>
                        </a>
                        </div>
                        <hr>';
                }

                // foreach ($posts as $post) {
                //     echo ' <div class="post-preview">
                //                 <a href="post.php?id=' . $post->id . '">
                //                     <h2 class="post-title">' . $post->titlu . '</h2>
                //                     <h3 class="post-subtitle">' . explode(";", $post->subtitluri)[0] . '&nbsp;</h3>
                //                 </a>
                //                 <p class="post-meta">A fost postat de <a href="https://www.facebook.com/muzeultecucean.antoncincu.1" target="_blank">Daniel Dojan</a></p>
                //             </div>
                //             <hr>';
                // }
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

        <ul class="pagination" role="menubar" aria-label="Pagination">

            <?php

            /******  build the pagination links ******/
            // range of num links to show
            $range = 3;

            // if not on page 1, don't show back links
            // if ($currentpage > 1) {
            // show << link to go back to page 1
            echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=1&an=$anul_evenimentului'><span>First</span></a></li>";
            // get previous page num
            $prevpage = $currentpage - 1;
            if ($currentpage == 1) {
                $prevpage = $currentpage;
            }
            // show < link to go back to 1 page
            echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage&an=$anul_evenimentului'><span>Previous</span></a></li>";
            // } // end if 

            // loop to show links to range of pages around current page
            for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
                // if it's a valid page number...
                if (($x > 0) && ($x <= $totalpages)) {
                    // if we're on current page...
                    if ($x == $currentpage) {
                        // 'highlight' it but don't make a link
                        echo "<li class='current'><a href='#'> $x</a></li> ";
                        // if not current page...
                    } else {
                        // make it a link
                        echo "<li> <a href='{$_SERVER['PHP_SELF']}?currentpage=$x&an=$anul_evenimentului'>$x</a></li> ";
                    } // end else
                } // end if 
            } // end for

            // if not on last page, show forward and last page links        
            // if ($currentpage != $totalpages) {
            // get next page

            $nextpage = $currentpage + 1;
            if ($currentpage == $totalpages) {
                $nextpage = $currentpage;
            }
            // echo forward link for next page 
            echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage&an=$anul_evenimentului'><span>Next</span></a></li> ";
            // echo forward link for lastpage
            echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages&an=$anul_evenimentului'><span>Last</span></a></li>";
            // } // end if
            /****** end build pagination links ******/

            ?>

        </ul>

    </div>

    <?php require_once './footer.php';  ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>
</body>

</html>
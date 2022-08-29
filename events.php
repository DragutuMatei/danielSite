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

$posts = $user->getBlogEvents($anul_evenimentului ,$offset, $rowsperpage);

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

                <?php

                /******  build the pagination links ******/
                // range of num links to show
                $range = 3;

                // if not on page 1, don't show back links
                if ($currentpage > 1) {
                    // show << link to go back to page 1
                    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1&an=$anul_evenimentului'><<</a> ";
                    // get previous page num
                    $prevpage = $currentpage - 1;
                    // show < link to go back to 1 page
                    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage&an=$anul_evenimentului'><</a> ";
                } // end if 

                // loop to show links to range of pages around current page
                for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
                    // if it's a valid page number...
                    if (($x > 0) && ($x <= $totalpages)) {
                        // if we're on current page...
                        if ($x == $currentpage) {
                            // 'highlight' it but don't make a link
                            echo " [<b>$x</b>] ";
                            // if not current page...
                        } else {
                            // make it a link
                            echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x&an=$anul_evenimentului'>$x</a> ";
                        } // end else
                    } // end if 
                } // end for

                // if not on last page, show forward and last page links        
                if ($currentpage != $totalpages) {
                    // get next page
                    $nextpage = $currentpage + 1;
                    // echo forward link for next page 
                    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage&an=$anul_evenimentului'>></a> ";
                    // echo forward link for lastpage
                    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages&an=$anul_evenimentului'>>></a> ";
                } // end if
                /****** end build pagination links ******/

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

    <?php require_once './footer.php';  ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>
</body>

</html>
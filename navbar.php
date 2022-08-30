<style>
    *::first-letter {
        text-transform: uppercase;
    }


/* ============ desktop view ============ */
@media all and (min-width: 992px) {

.dropdown-menu li{
    position: relative;
}
.dropdown-menu .submenu{ 
    display: none;
    position: absolute;
    left:100%; top:-7px;
}
.dropdown-menu .submenu-left{ 
    right:100%; left:auto;
}

.dropdown-menu > li:hover{ background-color: #f1f1f1 }
.dropdown-menu > li:hover > .submenu{
    display: block;
}
}	
/* ============ desktop view .end// ============ */

/* ============ small devices ============ */
@media (max-width: 991px) {

.dropdown-menu .dropdown-menu{
    margin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
}

}	
/* ============ small devices .end// ============ */

</style>

<script src="https://cdn.jsdelivr.net/gh/mickidum/acc_toolbar/acctoolbar/acctoolbar.min.js"></script>
<script>
    // optional init
    window.onload = function() {
        window.micAccessTool = new MicAccessTool({
            link: 'accessibility.php',
            contact: 'mailto:muzeultecuci@yahoo.com',
            buttonPosition: 'right', // default is 'left'
            forceLang: 'ro-RO' // default is 'en' may be 'he-IL', 'ru-RU', or 'fr_FR'
        });
    }
</script>


<nav class="navbar navbar-light navbar-expand-lg fixed-top navbar-scroll" id="mainNav">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="./assets/img/logo_rotund.png" style="width: 80px;" width="80" height="80" class="d-inline-block align-top" alt="">

        </a>
        <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto ">
                <!-- <li class="nav-item"><a class="nav-link" href="despre.php">Despre</a></li> -->
                <li class="nav-item"><a class="nav-link" href="istoric.php">Istoric</a></li>

                <!-- Start: Colectii -->


                <!-- Start: Test -->

                <li class="nav-item dropdown" id="dropColectii">
                    <a aria-expanded="false" data-bs-toggle="dropdown" class="dropdown-toggle text-uppercase" href="#">Colectii
                    </a>
                    <ul class="dropdown-menu">
                        <!-- <li><a class="dropdown-item" href="colectie.php?sect=paleontologie">Paleontologie</a></li> -->
                        <li><a class="dropdown-item" href="paleontologie.php">Paleontologie</a></li>
                        <li><a class="dropdown-item" href="arheologie.php">Arheologie &raquo;</a>
                            <ul class="submenu dropdown-menu">
                                <!-- <li><a class="dropdown-item" href="colectie.php?sect=eneolitic">Eneolitic cucuteni</a></li> -->
                                <li><a class="dropdown-item" href="eneolitic.php">Eneolitic cucuteni</a></li>
                                <!-- <li><a class="dropdown-item" href="colectie.php?sect=epocabronz">Epoca bronzului</a></li> -->
                                <li><a class="dropdown-item" href="bronz.php">Epoca bronzului</a></li>
                                <!-- <li><a class="dropdown-item" href="colectie.php?sect=getodacica">Civilizația geto-dacica</a></li> -->
                                <li><a class="dropdown-item" href="getodacica.php">Civilizația geto-dacica</a></li>
                                <!-- <li><a class="dropdown-item" href="colectie.php?sect=culturamures">Cultura Sântana de Mureș sec. IV</a></li> -->
                                <li><a class="dropdown-item" href="culturamures.php">Cultura Sântana de Mureș sec. IV</a></li>
                                <!-- <li><a class="dropdown-item" href="colectie.php?sect=negrilesti">Situl Negrilesti</a></li> -->
                                <li><a class="dropdown-item" href="negrilesti.php">Situl Negrilesti</a></li>
                                <!-- <li><a class="dropdown-item" href="colectie.php?sect=situri">Siturile arheologice din Tecuci</a></li> -->
                                <li><a class="dropdown-item" href="situri.php">Siturile arheologice din Tecuci</a></li>
                            </ul>
                        </li>
                        <!-- <li><a class="dropdown-item" href="colectie.php?sect=numismatica">Numismatică</a></li> -->
                        <li><a class="dropdown-item" href="numismatica.php">Numismatică</a></li>
                        <!-- <li><a class="dropdown-item" href="colectie.php?sect=arta">Artă</a></li> -->
                        <li><a class="dropdown-item" href="arta.php">Artă</a></li>
                        <!-- <li><a class="dropdown-item" href="colectie.php?sect=etnografie">Etnografie</a></li> -->
                        <li><a class="dropdown-item" href="etnografie.php">Etnografie</a></li>
                        <!-- <li><a class="dropdown-item" href="colectie.php?sect=donatii">Donații și donatori</a></li> -->
                        <li><a class="dropdown-item" href="donatii.php">Donații și donatori</a></li>
                        <!-- <li><a class="dropdown-item" href="colectie.php?sect=automobilul">Automobilul Ego</a></li> -->
                        <li><a class="dropdown-item" href="automobil.php">Automobilul Ego</a></li>

                    </ul>
                </li><!-- End: Test -->

                <!-- Start: Evenimente -->
                <li class="nav-item dropdown">
                    <a aria-expanded="false" data-bs-toggle="dropdown" class="dropdown-toggle text-uppercase" href="#">Evenimente
                    </a>
                    <div id="an" class="dropdown-menu">
                        <!-- <a class="dropdown-item" href="#">nu s-a putut incarca lista de ani</a> -->
                    </div>

                    <script>
                        const an_html_element_nav = document.querySelector("#an");
                        const an_nav = new Date().getFullYear();

                        // an_html_element_nav.innerHTML = "<a class='dropdown-item' href='colectie.php?sect=2015'>2015</a>";

                        for (let i = 2015; i <= an_nav; i++) {
                            let optionTag = "<a class='dropdown-item' href='events.php?currentpage=1&an=" + i + "'>" + i + "</a>";
                            an_html_element_nav.innerHTML += optionTag;
                        }
                    </script>


                </li><!-- End: Evenimente -->

                <li class="nav-item"><a class="nav-link" href="program.php">Program Vizitare</a></li>
                <li class="nav-item"><a class="nav-link" href="tarife.php">Taxe-tarife</a></li>

                <!-- Start: Organizare -->

                <li class="nav-item dropdown">
                    <a aria-expanded="false" data-bs-toggle="dropdown" class="dropdown-toggle text-uppercase" href="#">Organizare
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="rof.php">R.O.F.</a>
                        <a class="dropdown-item" href="organigrama.php">Organigramă</a>
                        <a class="dropdown-item" href="transparenta.php">Transparență salarială</a>
                        <a class="dropdown-item" href="buget.php">Buget </a>
                        <a class="dropdown-item" href="plancultural.php">Plan Cultural</a>
                    </div>
                </li>

                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>

                <li class="nav-item dropdown">
                    <a aria-expanded="false" data-bs-toggle="dropdown" class="dropdown-toggle text-uppercase" href="#">Arhiva Online
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="sectiune.php?sect=publicatii">Publicații tecucene</a>
                        <a class="dropdown-item" href="sectiune.php?sect=materiale">Materiale informative</a>
                        <a class="dropdown-item" href="sectiune.php?sect=diverse">Diverse</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
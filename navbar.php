<style>
    *::first-letter {
        text-transform: uppercase;
    }

/* ============ desktop view ============ */
@media all and (min-width: 992px) {
	.dropdown-menu li{ position: relative; 	}
	.nav-item .submenu{ 
		display: none;
		position: absolute;
		left:100%; top:-7px;
	}
	.nav-item .submenu-left{ 
		right:100%; left:auto;
	}
	.dropdown-menu > li:hover{ background-color: #f1f1f1 }
	.dropdown-menu > li:hover > .submenu{ display: block; }
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
<nav class="navbar navbar-light navbar-expand-lg fixed-top" style="height: 80px;" id="mainNav">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="./assets/img/Asset 1.png" style="width: 100px;" width="69" height="46" class="d-inline-block align-top" alt="">

        </a>
        <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="despre.php">Despre</a></li>
                <li class="nav-item"><a class="nav-link" href="istoric.php">Istoric</a></li>

                <!-- Start: Colectii -->

                <!-- <li class="nav-item dropdown">
                    <a aria-expanded="false" data-bs-toggle="dropdown" class="dropdown-toggle text-uppercase" href="#">Colectii
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="colectie.php?sect=paleontologie">Paleontologie</a>
                        <a class="dropdown-item" href="colectie.php?sect=arheologie">Arheologie</a>
                        <a class="dropdown-item" href="colectie.php?sect=numismatica">Numismatic??</a>
                        <a class="dropdown-item" href="colectie.php?sect=arta">Art??</a>
                        <a class="dropdown-item" href="colectie.php?sect=etnografie">Etnografie</a>
                        <a class="dropdown-item" href="colectie.php?sect=donatii">Dona??ii ??i donatori</a>
                        <a class="dropdown-item" href="colectie.php?sect=automobilul">Automobilul Ego</a>
                    </div>
                </li> -->
                <!-- End: Colectii -->

                <!-- Start: Test -->

                <li class="nav-item dropdown" id="dropColectii">
                    <a aria-expanded="false" data-bs-toggle="dropdown" class="dropdown-toggle text-uppercase" href="#">Colectii
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="colectie.php?sect=paleontologie">Paleontologie</a></li>
                        <li><a class="dropdown-item" href="colectie.php?sect=arheologie">Arheologie &raquo;</a>
                            <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href="colectie.php?sect=eneolitic">Eneolitic cucuteni</a></li>
                                <li><a class="dropdown-item" href="colectie.php?sect=epocabronz">Epoca bronzului</a></li>
                                <li><a class="dropdown-item" href="colectie.php?sect=getodacica">Civiliza??ia geto-dacica</a></li>
                                <li><a class="dropdown-item" href="colectie.php?sect=culturamures">Cultura S??ntana de Mure?? sec. IV</a></li>
                                <li><a class="dropdown-item" href="colectie.php?sect=negrilesti">Situl Negrilesti</a></li>
                                <li><a class="dropdown-item" href="colectie.php?sect=situri">Siturile arheologice din Tecuci</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="colectie.php?sect=numismatica">Numismatic??</a></li>
                        <li><a class="dropdown-item" href="colectie.php?sect=arta">Art??</a></li>
                        <li><a class="dropdown-item" href="colectie.php?sect=etnografie">Etnografie</a></li>
                        <li><a class="dropdown-item" href="colectie.php?sect=donatii">Dona??ii ??i donatori</a></li>
                        <li><a class="dropdown-item" href="colectie.php?sect=automobilul">Automobilul Ego</a></li>

                    </ul>
                </li><!-- End: Test -->

                <!-- Start: Evenimente -->
                <li class="nav-item dropdown">
                    <a aria-expanded="false" data-bs-toggle="dropdown" class="dropdown-toggle text-uppercase" href="#">Evenimente
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="colectie.php?sect=2015">2015</a>
                        <a class="dropdown-item" href="colectie.php?sect=2016">2016</a>
                        <a class="dropdown-item" href="colectie.php?sect=2017">2017</a>
                        <a class="dropdown-item" href="colectie.php?sect=2018">2018</a>
                        <a class="dropdown-item" href="colectie.php?sect=2019">2019</a>
                        <a class="dropdown-item" href="colectie.php?sect=2020">2020</a>
                        <a class="dropdown-item" href="colectie.php?sect=2021">2021</a>
                    </div>
                </li><!-- End: Evenimente -->

                <li class="nav-item"><a class="nav-link" href="program.php">Program Vizitare</a></li>
                <li class="nav-item"><a class="nav-link" href="tarife.php">Taxe-tarife</a></li>

                <!-- Start: Organizare -->

                <li class="nav-item dropdown">
                    <a aria-expanded="false" data-bs-toggle="dropdown" class="dropdown-toggle text-uppercase" href="#">Organizare
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="rof.php">R.O.F.</a>
                        <a class="dropdown-item" href="organigrama.php">Organigram??</a>
                        <a class="dropdown-item" href="transparenta.php">Transparen???? salarial??</a>
                        <a class="dropdown-item" href="buget.php">Buget </a>
                        <a class="dropdown-item" href="plancultural.php">Plan Cultural</a>
                    </div>
                </li>

                <li class="nav-item"><a class="nav-link" href="Blog.php">Blog</a></li>

                <li class="nav-item dropdown">
                    <a aria-expanded="false" data-bs-toggle="dropdown" class="dropdown-toggle text-uppercase" href="#">Arhiva Online
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="sectiune.php?sect=publicatii">Publica??ii tecucene</a>
                        <a class="dropdown-item" href="sectiune.php?sect=materiale">Materiale informative</a>
                        <a class="dropdown-item" href="sectiune.php?sect=diverse">Diverse</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
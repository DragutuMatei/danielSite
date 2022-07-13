<style>
    *::first-letter {
        text-transform: uppercase;
    }

    .dropdown-submenu {
    position: relative;
  }
  
  .dropdown-submenu a::after {
    transform: rotate(-90deg);
    position: absolute;
    right: 6px;
    top: .8em;
  }
  
  .dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
  }


</style>
<nav class="navbar navbar-light navbar-expand-lg fixed-top" style="height: 80px;" id="mainNav">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="./assets/img/Asset 1.png" style="width: 100px;" width="69" height="46" class="d-inline-block align-top" alt="">

        </a>
        <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <!-- <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Acasa</a></li>
                <li class="nav-item"><a class="nav-link" href="program.php">Program Vizitare</a></li>
                <li class="nav-item"><a class="nav-link" href="istoric.php">Istoric</a></li><!-- Start: Sectiuni --
                <li class="nav-item">
                <li class="nav-item dropdown">
                    <a aria-expanded="false" data-bs-toggle="dropdown" class="dropdown-toggle text-uppercase" href="#">Sectiuni
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="colectie.php?sect=paleontologie">Paleontologie</a>
                        <a class="dropdown-item" href="colectie.php?sect=arheologie">Arheologie</a>
                        <a class="dropdown-item" href="colectie.php?sect=numismatica">Numismatică</a>
                        <a class="dropdown-item" href="colectie.php?sect=istorie">Istorie</a>
                        <a class="dropdown-item" href="colectie.php?sect=arta">Artă</a>
                        <a class="dropdown-item" href="colectie.php?sect=educatie">Educație muzeală</a>
                    </div>
                </li>
                </li><!-- End: Sectiuni --
                <!-- Start: Evenimente --
                <li class="nav-item">
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
                </li>
                </li><!-- End: Evenimente --
                <!-- Start: Organizare --
                <li class="nav-item">
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
                </li>
                <li class="nav-item"><a class="nav-link" href="tarife.php">Taxe-tarife</a></li>
                <li class="nav-item">
                <li class="nav-item dropdown">
                    <a aria-expanded="false" data-bs-toggle="dropdown" class="dropdown-toggle text-uppercase" href="#">Arhiva Online
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="colectie.php?sect=publicatii">Publicații tecucene</a>
                        <a class="dropdown-item" href="colectie.php?sect=materiale">Materiale informative</a>
                        <a class="dropdown-item" href="colectie.php?sect=diverse">Diverse</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul> -->
            <ul class="navbar-nav ms-auto"></ul>

            <li class="nav-item"><a class="nav-link" href="istoric.php">Istoric</a></li><!-- Start: Sectiuni -->
            <li class="nav-item">
            <li class="nav-item dropdown">
                <a aria-expanded="false" data-bs-toggle="dropdown" id="navbarColectii" class="dropdown-toggle text-uppercase" href="#">Colectii
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarColectii">
                    <li><a class="dropdown-item" href="colectie.php?sect=paleontologie">Paleontologie</a></li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="colectie.php?sect=arheologie">Arheologie</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="colectie.php?sect=eneolitic">Eneolitic cucuteni</a></li>
                            <li><a class="dropdown-item" href="colectie.php?sect=bronz">Epoca bronzului</a></li>
                            <li><a class="dropdown-item" href="colectie.php?sect=getodacic">Civilizatia geto-dacica</a></li>
                            <li><a class="dropdown-item" href="colectie.php?sect=santana">Cultura Sântana de Mureș sec. IV</a></li>
                            <li><a class="dropdown-item" href="colectie.php?sect=negrilesti">Situl Negrilesti</a></li>
                            <li><a class="dropdown-item" href="colectie.php?sect=situri">Siturile arheologice din Tecuci</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="colectie.php?sect=numismatica">Numismatică</a></li>
                    <li><a class="dropdown-item" href="colectie.php?sect=arta">Arta</a></li>
                    <li><a class="dropdown-item" href="colectie.php?sect=etnografie">Etnografie</a></li>
                    <li><a class="dropdown-item" href="colectie.php?sect=donatii">Donatii si donatori</a></li>
                    <li><a class="dropdown-item" href="colectie.php?sect=aumobilul">Aumobilul Ego</a></li>
                </ul>
            </li>
            </li><!-- End: Sectiuni -->
            <!-- Start: Evenimente -->
            <li class="nav-item">
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
            </li>
            </li><!-- End: Evenimente -->
            <!-- Start: Organizare -->
            <li class="nav-item">
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
            </li>
            <li class="nav-item"><a class="nav-link" href="tarife.php">Taxe-tarife</a></li>
            <li class="nav-item">
            <li class="nav-item dropdown">
                <a aria-expanded="false" data-bs-toggle="dropdown" class="dropdown-toggle text-uppercase" href="#">Arhiva Online
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="colectie.php?sect=publicatii">Publicații tecucene</a>
                    <a class="dropdown-item" href="colectie.php?sect=materiale">Materiale informative</a>
                    <a class="dropdown-item" href="colectie.php?sect=diverse">Diverse</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php
require_once './core/init.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact us - Muzeul Tecuci</title>
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
    <header class="masthead" style="background-image:url('assets/img/contact-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="site-heading">
                        <h1><br><strong>FORMULARUL SI INFORMATIILE DE CONTACT</strong><br></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <p><br><strong>Muzeul de Istorie „Teodor Cincu”</strong><br>Str. 1 Decembrie 1918, nr. 36, Tecuci, 805300, jud. Galaţi<br>tel/fax. 0236 811 672<br>e-mail: muzeultecuci@yahoo.com<br>Cod Unic de Înregistrare: 5569881<br>
                
                Pagina de facebook: <a href="https://www.facebook.com/muzeuldeistorietecuci">Muzeul Teodor Cincu</a><br>
                Cont instagram: <a href="https://www.instagram.com/muzeul_teodor_cincu/">muzeul_teodor_cincu</a><br>
                Canal YouTube: <a href="https://www.youtube.com/channel/UCdO2EAqfyx5kx9VJfQjyRaA/videos">MuzeuldeIstorieTeodorCincu</a><br>
                Cont program educațional: (facebook) <a href="https://www.facebook.com/Clubul-de-Istorie-Excelsior-2025074697815899">Clubul de Istorie Excelsior</a> (instagram) <a href="https://www.instagram.com/excelsiortecuci/">excelsiortecuci</a>
                
                <br><br></p>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="control-group">
                        <div class="form-floating controls mb-3"><input class="form-control" type="text" id="name" required="" placeholder="Name"><label class="form-label" for="name">Nume</label><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-floating controls mb-3"><input class="form-control" type="email" id="email" required="" placeholder="Email Address"><label class="form-label">Adresa de email</label><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-floating controls mb-3"><input class="form-control" type="tel" id="phone" required="" placeholder="Phone Number"><label class="form-label">Numărul de telefon</label><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-floating controls mb-3"><textarea class="form-control" id="message" data-validation-required-message="Please enter a message." required="" placeholder="Message" style="height: 150px;"></textarea><label class="form-label">Mesajul tau pentru noi...&nbsp;</label><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div id="success"></div>
                    <div class="mb-3"><button class="btn btn-primary" id="sendMessageButton" type="submit">Send</button></div>
                </form>
            </div>
        </div>
    </div>
    <hr>

    <?php require_once './footer.php';  ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>
</body>

</html>
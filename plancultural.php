<?php
require_once './core/init.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Planuri culturale - Muzeul Tecuci</title>
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
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

</head>

<body>
    <?php require_once 'navbar.php'; ?>
    <header class="masthead" style="background-image:url('assets/img/transparenta.jpg');     background-attachment: fixed;
    background-position: bottom;">
        <div class="overlay"></div>

    </header>
    <h3 style="color: #17AA4B;text-align: center;font-family: 'Lora',serif;">Planuri culturale</h3>
    <h2 style="text-align: center;font-family: 'Poppins',sans-serif;"><br><strong>MUZEUL DE ISTORIE „TEODOR CINCU” TECUCI</strong><br><br></h2>
    <div class="container" style="text-align: center;">
        <div class="text_istoric">
            <div class="istoric_text_column istoric_content_element ">
                <div class="text_istoric">
                    <table>
                        <tr>
                            <td>Plan cultural 2019</td>
                            <td><a href="plan2019.php">Click</a></td>
                        </tr>
                        <tr>
                            <td>Plan cultural 2020</td>
                            <td><a href="plan2020.php">Click</a></td>
                        </tr>
                        <tr>
                            <td>Plan cultural 2021</td>
                            <td><a href="plan2021.php">Click</a></td>
                        </tr>
                        <tr>
                            <td>Plan cultural 2022</td>
                            <td><a href="plan2022.php">Click</a></td>
                        </tr>
                        ==

                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <?php require_once './footer.php';  ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>
</body>

</html>
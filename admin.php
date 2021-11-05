<?php
require_once 'core/init.php';

if (!isset($_SESSION["admin"]))
    Redirect::to("redirect.php");
$user = new User();
$posts = $user->getAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Muzeul Tecuci</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/2647a8e79d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-1.compiled.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-grid.compiled.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-reboot.compiled.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-utilities.compiled.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.compiled.css">
    <link rel="stylesheet" href="assets/css/styles.compiled.css">
</head>

<body>
    <form style="display:flex;flex-direction:column;justify-content:center;align-items:center" action="api/admin.api.php" method="POST" enctype="multipart/form-data">
        <input required type="text" name="titlu" placeholder="Titlu">
        <textarea required name="subtitluri" id="" cols="30" rows="10"></textarea>
        <textarea required name="txt" id="" cols="30" rows="10"></textarea>
        <select required name="sectiune" id="">
            <optgroup label="Sectiuni">
                <option value="paleontologie">Paleontologie</option>
                <option value="arheologie">Arheologie</option>
                <option value="numismatica">Numistimatică</option>
                <option value="istorie">Istorie</option>
                <option value="arta">Arta</option>
                <option value="educatie">Educatie muzeala</option>
            </optgroup>
            <optgroup label="Evenimente">
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
            </optgroup>
            <optgroup label="Arhiva Online">
                <option value="publicatii">Publicatii tecucene</option>
                <option value="materiale">Materiale Informative</option>
                <option value="diverse">Diverse</option>
            </optgroup>
        </select>
        <input required type="file" name="imagini[]" multiple>
        <input required type="date" name="data">
        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
        <input type="submit" value="adauga" name="submit">
    </form>

    <?php
    foreach ($posts as $post) {
        echo ' <div class="post-preview">
                <a href="post.php?id=' . $post->id . '">
                    <h2 class="post-title">' . $post->titlu . '</h2>
                    <h3 class="post-subtitle">' . explode(";", $post->subtitluri)[0] . '&nbsp;</h3>
                </a>
                <form action="api/admin.api.php" method="POST">
                    <input type="hidden" name="id" value="' . $post->id . '" >
                    <button style="background:none;" type="submit" name="delete"> <i class="fas fa-trash-alt"></i> </button>
                </form>
            </div>
            <hr>';
    }
    ?>

    <?php require_once './footer.php';  ?>
</body>

</html>
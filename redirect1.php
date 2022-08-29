<?php
require_once './core/init.php';

if (isset($_SESSION["admin"])) {
    Redirect::to("admin.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_SESSION["admins"])) {
        echo "<h2>Parolă greșită</h2>";
        Session::delete("admins");
    }
    ?>
    <form action="api/decizie.php" method="POST">
        <input type="password" name="password">
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>
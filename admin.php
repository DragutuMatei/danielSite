<?php
require_once 'core/init.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <form style="display:flex;flex-direction:column;justify-content:center;align-items:center" action="api/admin.api.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="titlu" placeholder="Titlu">
        <textarea name="subtitluri" id="" cols="30" rows="10"></textarea>
        <textarea name="txt" id="" cols="30" rows="10"></textarea>
        <select name="sectiune" id="">
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
        <input type="file" name="imagini[]" multiple>
        <input type="date" name="data" >
        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
        <input type="submit" value="adauga" name="submit">
    </form>
</body>

</html>
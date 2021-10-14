<?php
require_once '../core/init.php';

if (isset($_POST['submit'])) {
    $validation = new Validation();

    $validation = $validation->check($_POST, array(
        "titlu" => array(
            "require" => true
        ),
        "subtitluri" => array(
            "require" => true
        ),
        "txt" => array(
            "require" => true
        ),
        "sectiune" => array(
            "require" => true
        ),
        "data" => array(
            "require" => true
        )
    ));

    if ($validation->passed()) {



        $user = new User();

        $files = array_filter($_FILES['imagini']['name']);
        $cate_is = count($_FILES['imagini']['name']);

        $array_cu_imag = array();

        for ($i = 0; $i < $cate_is; $i++) {
            $temporale = $_FILES['imagini']['tmp_name'][$i];

            if ($temporale != "") {
                $array_cu_imag[$i] = "./assets/img/" . $_FILES['imagini']['name'][$i];
                $newFilePath = "../assets/img/" . $_FILES['imagini']['name'][$i];
                move_uploaded_file($temporale, $newFilePath);
            }
        }

        try {
            $user->addPost(array(
                "titlu" => Input::get("titlu"),
                "subtitluri" => Input::get("subtitluri"),
                "txt" => Input::get("txt"),
                "poze" => json_encode($array_cu_imag),
                "sectiune" => Input::get("sectiune"),
                "data" => Input::get("data")
            ));
            Redirect::to("../admin.php");
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

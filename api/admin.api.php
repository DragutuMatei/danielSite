<?php
require_once '../core/init.php';

if (isset($_POST['submit'])) {
    $validation = new Validation();

    $validation = $validation->check($_POST, array(
        "titlu" => array(
            "require" => true
        ),
        "user" => array(
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

        $imgs = Input::moveImg("muzeu/", $_FILES);

        try {
            $user->addPost(array(
                "titlu" => Input::get("titlu"),
                "user" => Input::get("user"),
                "subtitluri" => Input::get("subtitluri"),
                "txt" => Input::get("txt"),
                "poze" => json_encode($imgs),
                "sectiune" => Input::get("sectiune"),
                "data" => Input::get("data")
            ));
            // Redirect::to("../admin.php");
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


if (isset($_POST['delete'])) {
    $user = new User();

    if ($user->deletePost(array("id", "=", Input::get("id")))) {
        Redirect::to("../admin.php?nop=false");
    } else {
        Redirect::to("../admin.php?nop=true");
    }
}

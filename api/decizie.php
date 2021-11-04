<?php
require_once '../core/init.php';

if (isset($_POST['submit'])) {
    $parola = "parola";
    if (Input::get("password") == $parola) {
        Session::put("admin", true);
    } else {
        Session::put("admins", true);
    }
    Redirect::to(" ../redirect.php");
}

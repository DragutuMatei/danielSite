<?php
session_start();
$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        "username" => 'root',
        'password' => '',
        'db' => 'daniel'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expire' => 604800
    ),
    'session' => array(
        'session_name' => 'user',
        'token_name' => 'token'
    ),
);


spl_autoload_register(function ($class) {
    try {
        require_once './classes/' . $class . '.php';
    } catch (Error $e) {
        require_once '../classes/' . $class . '.php';
    }
});

function escape($string){
    return htmlentities($string, ENT_QUOTES, 'UTF-8');
}

// try {
//     require_once '../functions/sanitize.php';
// } catch (Error $e) {
//     require_once './functions/sanitize.php';
// }
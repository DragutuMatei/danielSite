<?php

require_once '../initCloudinary.php';

use Cloudinary\Api\Upload\UploadApi;



class Input
{
    public static function exists($type = "post")
    {
        switch ($type) {
            case 'post':
                return (!empty($_POST)) ? true : false;
                break;
            case "get":
                return (!empty($_GET)) ? true : false;
            default:
                return false;
                break;
        }
    }

    public static function get($item)
    {
        if (isset($_POST[$item])) {
            return $_POST[$item];
        } else if (isset($_GET[$item])) {
            return $_GET[$item];
        }
        return "";
    }

    public static function moveImg($folder, $names)
    {
        $r = new UploadApi();
        $urls = array();
        // foreach ($names as $name) {
        // foreach($name)
        for ($i = 0; $i < count($names['imagini']); $i++) {
            $rez = $r->upload($names["imagini"]['tmp_name'][$i], ['folder' => $folder]);
            array_push($urls, $rez['secure_url']);
        }
        // return $rez;
        return $urls;
    }
}

<?php

require_once '../initCloudinary.php';

use Cloudinary\Api\Upload\UploadApi;
use Cloudinary\Transformation\Transformation;
use Cloudinary\Transformation\Crop;
use Cloudinary\Transformation\CompassGravity;
use Cloudinary\Transformation\Quality;
use Cloudinary\Transformation\Gravity;
use Cloudinary\Transformation\ChromaSubSampling;


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

    public static function moveImg($folder, $cover = false)
    {
        $r = new UploadApi();
        if (!$cover) {
            $urls = array();
            for ($i = 0; $i < count($_FILES['imagini']['tmp_name']); $i++) {
                $rez = $r->upload($_FILES["imagini"]['tmp_name'][$i], ['folder' => $folder]);
                array_push($urls, $rez['secure_url']);
            }
            return $urls;
        } else {
            $rez = $r->upload($_FILES["cover"]['tmp_name'], ['folder' => $folder,
            [
                (new Transformation())->resize(
                    Crop::thumbnail(100, 100)->gravity(Gravity::face(CompassGravity::center()))
                ),
                ' (new Transformation())->resize(
                    Crop::thumbnail(100, 100)->gravity(Gravity::face(CompassGravity::center()))
                )',
                (new Transformation())->quality(
                    Quality::level(50)->chromaSubSampling(ChromaSubSampling::chroma420())
                ),
                ' (new Transformation())->quality(
                    Quality::level(50)->chromaSubSampling(ChromaSubSampling::chroma420())
                )',
            ],]);
            return $rez['secure_url'];
        }
    }
}

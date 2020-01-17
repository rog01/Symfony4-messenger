<?php
/**
 * Created by PhpStorm.
 * User: James
 * Date: 18/01/2020
 * Time: 00:03
 */

namespace App\Message;


class AddPonkaToImage
{
    private $imagePost;

    public function __construct($imagePost)
    {
        $this->imagePost = $imagePost;
    }

    public function getImagePost()
    {
        return $this->imagePost;
    }
}

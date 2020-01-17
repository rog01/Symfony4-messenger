<?php
/**
 * Created by PhpStorm.
 * User: James
 * Date: 18/01/2020
 * Time: 00:04
 */

namespace App\MessageHandler;


use App\Message\AddPonkaToImage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class AddPonkaToImageHandler implements MessageHandlerInterface
{
    public function __invoke(AddPonkaToImage $addPonkaToImage)
    {
        dump($addPonkaToImage);
    }

}
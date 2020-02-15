<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.02.2020
 * Time: 18:14
 */
namespace Slavamnem\Helper;

class Helper
{
    /**
     * @return array
     */
    public static function getData()
    {
        return [
            'status' => 200,
            'message' => 'Helper works fine!'
        ];
    }

    /**
     * @return int
     */
    public static function getRandomNumber()
    {
        return rand(0, 10);
    }

    /**
     * @return string
     */
    public static function getAuthorName()
    {
        return "Slava!!!";
    }
}
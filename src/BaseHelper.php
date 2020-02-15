<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.02.2020
 * Time: 14:18
 */

namespace App;

/**
 * Class BaseHelper
 * @package App
 */
class BaseHelper
{
    /**
     * @return array
     */
    public static function getData()
    {
        return [
            'status' => 200,
            'message' => 'BaseHelper works fine!'
        ];
    }

    /**
     * @return int
     */
    public static function getRandomNumber()
    {
        return rand(0, 10);
    }
}
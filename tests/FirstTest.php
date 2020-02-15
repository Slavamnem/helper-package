<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.02.2020
 * Time: 14:26
 */

namespace App\Tests;

use App\BaseHelper;
use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    public function testBaseHelperGetData()
    {
        $this->assertNotNull(BaseHelper::getData());
    }

    public function testBaseHelperGetRandomNumber()
    {
        $this->assertNotNull(BaseHelper::getRandomNumber());
    }
}
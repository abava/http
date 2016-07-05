<?php declare(strict_types = 1);

/**
 * Class RequestTest
 */
class RequestTest extends PHPUnit_Framework_TestCase
{

    public function testCreateNewRequestInstance()
    {
        $request = new \Venta\Http\Request();
        $this->assertInstanceOf(\Venta\Http\Contract\RequestContract::class, $request);
    }

}

<?php declare(strict_types = 1);

class EmitterTest extends PHPUnit_Framework_TestCase
{
    
    public function testCreateEmitterInstance()
    {
        $emitter = new \Venta\Http\Emitter();
        $this->assertInstanceOf(\Venta\Http\Contract\EmitterContract::class, $emitter);
    }

}

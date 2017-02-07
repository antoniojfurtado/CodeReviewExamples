<?php
use SwaggerAssert\SwaggerAssert;

class SwaggerTest extends \PHPUnit_Framework_TestCase
{
    public function testResponseHasSwaggerKeys()
    {
        $response = $this->request('get', '/plain');
        $result = SwaggerAssert::responseHasSwaggerKeys($response, 'get', '/plain', $onlyRequired = true);

        $this->assertTrue($result);
    }
}
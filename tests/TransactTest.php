<?php

use SlimCD\Transact\Transact;
use PHPUnit\Framework\TestCase;

class TransactTest extends TestCase
{
    public function testInstantiateTransactClass()
    {
        $testObject = new Transact();
        $this->assertInstanceOf('SlimCD\Transact\Transact', $testObject);
    }

    public function testCloseBatchRequest()
    {
        $testObject = new \SlimCD\Transact\CloseBatchRequest();
        $this->assertInstanceOf('\SlimCD\Transact\CloseBatchRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testProcessTransactionRequest()
    {
        $testObject = new \SlimCD\Transact\ProcessTransactionRequest();
        $this->assertInstanceOf('\SlimCD\Transact\ProcessTransactionRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testProcessRequest()
    {
        $request = new \SlimCD\Transact\ProcessTransactionRequest();
        $testObject = new \SlimCD\Transact\Transact();
        $result = $testObject->processTransaction($request);
        $this->assertInternalType('string', $result->response);

        $testObject->debug = true;
        $result = $testObject->processTransaction($request, 200);
        $this->assertInternalType('string', $result->response);

        $result = $testObject->processTransaction($request, 0);
        $this->assertInternalType('string', $result->response);
    }
}

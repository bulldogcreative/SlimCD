<?php

use SlimCD\Transact\Transact;
use PHPUnit\Framework\TestCase;

class SlimCDTests extends TestCase
{
    public function testingGuzzle()
    {
        $transact = new Transact();
        $ProcessTransactionRequest = new \SlimCD\Transact\ProcessTransactionRequest();
        $reply = $transact->processTransaction($ProcessTransactionRequest);
        $this->assertInternalType('string', $reply->response);
    }
}

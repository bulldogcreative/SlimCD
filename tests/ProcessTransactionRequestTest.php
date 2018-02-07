<?php

use SlimCD\Transact\ProcessTransactionRequest;
use PHPUnit\Framework\TestCase;

class ProcessTransactionRequestTest extends TestCase
{
    public function testProcessTransactionInstantiate()
    {
        $ProcessTransactionRequest = new ProcessTransactionRequest();
        $this->assertInstanceOf('SlimCD\Transact\ProcessTransactionRequest', $ProcessTransactionRequest);
    }

    public function testProcessTransactionJsonSerialize()
    {
        $ProcessTransactionRequest = new ProcessTransactionRequest();
        $this->assertInternalType('array', $ProcessTransactionRequest->jsonSerialize());
    }

    public function testProcessTransaction()
    {
        $request = new SlimCD\Transact\ProcessTransactionRequest();
        $transact = new SlimCD\Transact\Transact();

        $amount = rand(1, 999);

        $request->username = '1032';
        $request->password = '289075';
        $request->clientid = '1032';
        $request->siteid = 228226448;
        $request->priceid = 74;
        $request->transtype = 'SALE';
        $request->amount = $amount . '.00';
        $request->cardnumber = '4111111111111111';
        $request->expmonth = '12';
        $request->expyear = '49';
        $request->product = 'SlimCD Package';
        $request->ver = $transact->getVersion();
        $request->key = 'SVD-072-5QQ6-5K58';

        $reply = $transact->processTransaction($request);
        $this->assertEquals($reply->response, "Success");
    }
}

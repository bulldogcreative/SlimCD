<?php

namespace SlimCD\Interfaces;

use SlimCD\Transact\ProcessTransactionRequest;
use SlimCD\Transact\CloseBatchRequest;

interface Transact
{
    public function processTransaction(ProcessTransactionRequest $request, $timeout = false);

    public function closeBatch(CloseBatchRequest $request, $timeout = false);
}

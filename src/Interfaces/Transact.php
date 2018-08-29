<?php

namespace SlimCD\Interfaces;

use SlimCD\Transact\ProcessTransactionRequest;
use SlimCD\Transact\CloseBatchRequest;

interface Transact
{
    /**
     * Closes the current batch of transactions on SLIM CD’s servers by
     * releasing them to the processor.
     *
     * Transactions processed through SLIM CD are stored in batches. These
     * transactions will not be funded to the merchant until the batch is closed
     * . After closing a batch you can no longer perform VOID, TIPEDIT, or
     * UPDATE transactions against a previous transaction included in the batch.
     *
     * @param CloseBatchRequest $request
     * @param bool              $timeout
     *
     * @return mixed
     */
    public function closeBatch(CloseBatchRequest $request, $timeout = false);

    /**
     * @param ProcessTransactionRequest $request
     * @param bool                      $timeout
     *
     * @return mixed
     */
    public function processTransaction(ProcessTransactionRequest $request, $timeout = false);
}

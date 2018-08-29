<?php

namespace SlimCD\Transact;

use SlimCD\SlimCD;

/**
 * Class Transact.
 */
class Transact extends SlimCD implements \SlimCD\Interfaces\Transact
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
     * @return mixed|object
     *
     * @throws \Exception
     */
    public function closeBatch(CloseBatchRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);

        return $this->httpPost($this->transactionUrl.'/soft/json/jsonscript.asp?service=CloseBatch', $timeout, $request->jsonSerialize());
    }

    /**
     * @param ProcessTransactionRequest $request
     * @param bool                      $timeout
     *
     * @return mixed|object
     *
     * @throws \Exception
     */
    public function processTransaction(ProcessTransactionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);

        return $this->httpPost($this->transactionUrl.'/soft/json/jsonpayment.asp', $timeout, $request->jsonSerialize());
    }
}

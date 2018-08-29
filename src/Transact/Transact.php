<?php

namespace SlimCD\Transact;

use SlimCD\SlimCD;

/**
 * Class Transact.
 */
class Transact extends SlimCD implements \SlimCD\Interfaces\Transact
{
    /**
     * @param ProcessTransactionRequest $request
     * @param bool                      $timeout
     *
     * @return mixed|object
     */
    public function processTransaction(ProcessTransactionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);

        return $this->httpPost($this->transactionUrl.'/soft/json/jsonpayment.asp', $timeout, $request->jsonSerialize());
    }

    /**
     * @param CloseBatchRequest $request
     * @param bool              $timeout
     *
     * @return mixed|object
     */
    public function closeBatch(CloseBatchRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);

        return $this->httpPost($this->transactionUrl.'/soft/json/jsonscript.asp?service=CloseBatch', $timeout, $request->jsonSerialize());
    }
}

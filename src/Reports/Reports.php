<?php

namespace SlimCD\Reports;

use SlimCD\SlimCD;

/**
 * Class Reports
 * @package SlimCD\Reports
 */
class Reports extends SlimCD implements \SlimCD\Interfaces\Reports
{
    /**
     * @param GetOpenBatchRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function getOpenBatch(GetOpenBatchRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetOpenBatch2", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param SearchTransactionsRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function searchTransactions(SearchTransactionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SearchTransactions2", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param GetDailySummaryRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function getDailySummary(GetDailySummaryRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetDailySummary", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param GetBatchSummaryRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function getBatchSummary(GetBatchSummaryRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetBatchSummary2", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param GetClosedBatchTransactionsRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function getClosedBatchTransactions(GetClosedBatchTransactionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetClosedBatchTransactions2", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param GetOpenAuthsRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function getOpenAuths(GetOpenAuthsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetOpenAuths2", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param GetTransactionDetailsRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function getTransactionDetails(GetTransactionDetailsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetTransactionDetails2", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param GetBatchHistoryRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function getBatchHistory(GetBatchHistoryRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetBatchHistory2", $timeout, $request->jsonSerialize()));
    }
}

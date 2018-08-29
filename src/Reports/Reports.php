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
     * Get the batch totals for a particular site/date range, returning a
     * standard format for all processors.
     *
     * GetBatchHistory returns records representing data for each batch within
     * the specified date range. Each record represents a batch of transactions,
     * and contains a unique Batch ID that can be provided to
     * GetClosedBatchTransactions to retrieve the actual transactions in that
     * batch.
     *
     * @param GetBatchHistoryRequest $request
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function getBatchHistory(GetBatchHistoryRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetBatchHistory2", $timeout, $request->jsonSerialize()));
    }

    /**
     * Get the approved batch totals for a particular site/date range, returning
     * standard format for all processors.
     *
     * GetBatchSummary iterates through batches in the specified date range and
     * creates summations for the batches within the requested range.
     * Transaction counts, gross sales, gross refunds and net income are
     * returned whenever possible.
     *
     * @param GetBatchSummaryRequest $request
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function getBatchSummary(GetBatchSummaryRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetBatchSummary2", $timeout, $request->jsonSerialize()));
    }

    /**
     * Get the transactions in a specific batch, returning a standard
     * BatchTransaction.
     *
     * GetClosedBatchTransactions lists the individual credit card transactions
     * for the siteid and batched specified. A BatchTransaction item is returned
     * for each transaction in the batch. Note that batches only contain credit/
     * debit card transactions and not check or gift card transactions.
     *
     * @param GetClosedBatchTransactionsRequest $request
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function getClosedBatchTransactions(GetClosedBatchTransactionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetClosedBatchTransactions2", $timeout, $request->jsonSerialize()));
    }

    /**
     * Gets daily summary for a clientid/siteid/date range.
     *
     * Produces transaction counts and amounts for the date range specified.
     * Check, gift and card totals are listed separately, where card totals are
     * broken out by brand (Visa/MasterCard/Discover, etc).
     *
     * @param GetDailySummaryRequest $request
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function getDailySummary(GetDailySummaryRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetDailySummary", $timeout, $request->jsonSerialize()));
    }

    /**
     * Get the unforced authonly transactions for a particular site/date range,
     * returning a standard BatchTransaction.
     *
     * Returns a BatchTransaction record for each AUTH that has not been VOIDed
     * or FORCEd. Each of the auths will not be funded until the FORCE is
     * performed. This command requires a DATE/TIME rather than just DATE. The
     * format for DATE/TIME is in .NET/Microsoft SQL format of either 24-hour
     * format as “MM/DD/YYYY HH:MM:SS.mmm” or the same format as 12-hour, with
     * AM or PM appended to the date/time.
     *
     * @param GetOpenAuthsRequest $request
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function getOpenAuths(GetOpenAuthsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetOpenAuths2", $timeout, $request->jsonSerialize()));
    }

    /**
     * Get all transactions in the current unsettled batch, returning a standard
     * BatchTransaction.
     *
     * Returns one BatchTransaction record for each transaction in the current
     * batch. Note that for most processors, transactions in the open batch can
     * still be VOIDed, UPDATEd, or have TIPEDIT performed.
     *
     * @param GetOpenBatchRequest $request
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function getOpenBatch(GetOpenBatchRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetOpenBatch2", $timeout, $request->jsonSerialize()));
    }

    /**
     * Get the details of a specific transaction with the same format as
     * SearchTransactions.
     *
     * Returns a standard Transaction item, with all of the details needed to
     * reprint a receipt or identify the type of transaction as card, check, or
     * gift.
     *
     * @param GetTransactionDetailsRequest $request
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function getTransactionDetails(GetTransactionDetailsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetTransactionDetails2", $timeout, $request->jsonSerialize()));
    }

    /**
     * Search all transactions for specific properties, standardized to match
     * GetTransactionDetails.
     *
     * Returns a standard Transaction item for each item in the search criteria.
     * Transaction search is done by date range. Just the count, or the
     * transactions themselves can be returned. A maximum can be set so that the
     * return set is limited. The order can be reversed by specifying
     * “reverseorder” in the search criteria, which causes the items to be
     * returned with the most recent first.
     *
     * @param SearchTransactionsRequest $request
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function searchTransactions(SearchTransactionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SearchTransactions2", $timeout, $request->jsonSerialize()));
    }
}

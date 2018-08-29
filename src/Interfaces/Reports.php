<?php

namespace SlimCD\Interfaces;

use \SlimCD\Reports\GetOpenBatchRequest;
use \SlimCD\Reports\SearchTransactionsRequest;
use \SlimCD\Reports\GetDailySummaryRequest;
use \SlimCD\Reports\GetBatchSummaryRequest;
use \SlimCD\Reports\GetClosedBatchTransactionsRequest;
use \SlimCD\Reports\GetOpenAuthsRequest;
use \SlimCD\Reports\GetTransactionDetailsRequest;
use \SlimCD\Reports\GetBatchHistoryRequest;

interface Reports
{
    public function getOpenBatch(GetOpenBatchRequest $request, $timeout = false);
    public function searchTransactions(SearchTransactionsRequest $request, $timeout = false);
    public function getDailySummary(GetDailySummaryRequest $request, $timeout = false);
    public function getBatchSummary(GetBatchSummaryRequest $request, $timeout = false);
    public function getClosedBatchTransactions(GetClosedBatchTransactionsRequest $request, $timeout = false);
    public function getOpenAuths(GetOpenAuthsRequest $request, $timeout = false);
    public function getTransactionDetails(GetTransactionDetailsRequest $request, $timeout = false);
    public function getBatchHistory(GetBatchHistoryRequest $request, $timeout = false);
}

<?php

use SlimCD\Reports\Reports;
use PHPUnit\Framework\TestCase;

class ReportsTest extends TestCase
{
    public function testInstantiateReportsClass()
    {
        $testObject = new Reports();
        $this->assertInstanceOf('SlimCD\Reports\Reports', $testObject);
    }

    public function testGetBatchHistoryRequest()
    {
        $testObject = new \SlimCD\Reports\GetBatchHistoryRequest();
        $this->assertInstanceOf('\SlimCD\Reports\GetBatchHistoryRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $reports = new Reports();
        $result = $reports->getBatchHistory($testObject);
        $this->assertInternalType('string', $result->response);
    }

    public function testGetBatchSummaryRequest()
    {
        $testObject = new \SlimCD\Reports\GetBatchSummaryRequest();
        $this->assertInstanceOf('\SlimCD\Reports\GetBatchSummaryRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $reports = new Reports();
        $result = $reports->getBatchSummary($testObject);
        $this->assertInternalType('string', $result->response);
    }

    public function testGetClosedBatchTransactionsRequest()
    {
        $testObject = new \SlimCD\Reports\GetClosedBatchTransactionsRequest();
        $this->assertInstanceOf('\SlimCD\Reports\GetClosedBatchTransactionsRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $reports = new Reports();
        $result = $reports->getClosedBatchTransactions($testObject);
        $this->assertInternalType('string', $result->response);
    }

    public function testGetDailySummaryRequest()
    {
        $testObject = new \SlimCD\Reports\GetDailySummaryRequest();
        $this->assertInstanceOf('\SlimCD\Reports\GetDailySummaryRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $reports = new Reports();
        $result = $reports->getDailySummary($testObject);
        $this->assertInternalType('string', $result->response);
    }

    public function testGetOpenAuthsRequest()
    {
        $testObject = new \SlimCD\Reports\GetOpenAuthsRequest();
        $this->assertInstanceOf('\SlimCD\Reports\GetOpenAuthsRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $reports = new Reports();
        $result = $reports->getOpenAuths($testObject);
        $this->assertInternalType('string', $result->response);
    }

    public function testGetOpenBatchRequest()
    {
        $testObject = new \SlimCD\Reports\GetOpenBatchRequest();
        $this->assertInstanceOf('\SlimCD\Reports\GetOpenBatchRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $reports = new Reports();
        $result = $reports->getOpenBatch($testObject);
        $this->assertInternalType('string', $result->response);
    }

    public function testGetTransactionDetailsRequest()
    {
        $testObject = new \SlimCD\Reports\GetTransactionDetailsRequest();
        $this->assertInstanceOf('\SlimCD\Reports\GetTransactionDetailsRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $reports = new Reports();
        $result = $reports->getTransactionDetails($testObject);
        $this->assertInternalType('string', $result->response);
    }

    public function testSearchTransactionsRequest()
    {
        $testObject = new \SlimCD\Reports\SearchTransactionsRequest();
        $this->assertInstanceOf('\SlimCD\Reports\SearchTransactionsRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $reports = new Reports();
        $result = $reports->searchTransactions($testObject);
        $this->assertInternalType('string', $result->response);
    }
}

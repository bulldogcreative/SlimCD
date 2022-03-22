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
        $this->assertIsArray($testObject->jsonSerialize());
        $reports = new Reports();
        $result = $reports->getBatchHistory($testObject);
        $this->assertIsString($result->response);
    }

    public function testGetBatchSummaryRequest()
    {
        $testObject = new \SlimCD\Reports\GetBatchSummaryRequest();
        $this->assertInstanceOf('\SlimCD\Reports\GetBatchSummaryRequest', $testObject);
        $this->assertIsArray($testObject->jsonSerialize());
        $reports = new Reports();
        $result = $reports->getBatchSummary($testObject);
        $this->assertIsString($result->response);
    }

    public function testGetClosedBatchTransactionsRequest()
    {
        $testObject = new \SlimCD\Reports\GetClosedBatchTransactionsRequest();
        $this->assertInstanceOf('\SlimCD\Reports\GetClosedBatchTransactionsRequest', $testObject);
        $this->assertIsArray($testObject->jsonSerialize());
        $reports = new Reports();
        $result = $reports->getClosedBatchTransactions($testObject);
        $this->assertIsString($result->response);
    }

    public function testGetDailySummaryRequest()
    {
        $testObject = new \SlimCD\Reports\GetDailySummaryRequest();
        $this->assertInstanceOf('\SlimCD\Reports\GetDailySummaryRequest', $testObject);
        $this->assertIsArray($testObject->jsonSerialize());
        $reports = new Reports();
        $result = $reports->getDailySummary($testObject);
        $this->assertIsString($result->response);
    }

    public function testGetOpenAuthsRequest()
    {
        $testObject = new \SlimCD\Reports\GetOpenAuthsRequest();
        $this->assertInstanceOf('\SlimCD\Reports\GetOpenAuthsRequest', $testObject);
        $this->assertIsArray($testObject->jsonSerialize());
        $reports = new Reports();
        $result = $reports->getOpenAuths($testObject);
        $this->assertIsString($result->response);
    }

    public function testGetOpenBatchRequest()
    {
        $testObject = new \SlimCD\Reports\GetOpenBatchRequest();
        $this->assertInstanceOf('\SlimCD\Reports\GetOpenBatchRequest', $testObject);
        $this->assertIsArray($testObject->jsonSerialize());
        $reports = new Reports();
        $result = $reports->getOpenBatch($testObject);
        $this->assertIsString($result->response);
    }

    public function testGetTransactionDetailsRequest()
    {
        $testObject = new \SlimCD\Reports\GetTransactionDetailsRequest();
        $this->assertInstanceOf('\SlimCD\Reports\GetTransactionDetailsRequest', $testObject);
        $this->assertIsArray($testObject->jsonSerialize());
        $reports = new Reports();
        $result = $reports->getTransactionDetails($testObject);
        $this->assertIsString($result->response);
    }

    public function testSearchTransactionsRequest()
    {
        $testObject = new \SlimCD\Reports\SearchTransactionsRequest();
        $this->assertInstanceOf('\SlimCD\Reports\SearchTransactionsRequest', $testObject);
        $this->assertIsArray($testObject->jsonSerialize());
        $reports = new Reports();
        $result = $reports->searchTransactions($testObject);
        $this->assertIsString($result->response);
    }
}

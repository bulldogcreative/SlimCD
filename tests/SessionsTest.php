<?php

use SlimCD\Sessions\Sessions;
use PHPUnit\Framework\TestCase;

class SessionsTest extends TestCase
{
    public function testInstantiateSessionsClass()
    {
        $testObject = new Sessions();
        $this->assertInstanceOf('SlimCD\Sessions\Sessions', $testObject);
    }

    public function testCancelSessionRequest()
    {
        $testObject = new \SlimCD\Sessions\CancelSessionRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\CancelSessionRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $sessions = new Sessions();
        $result = $sessions->cancelSession($testObject);
        $this->assertInternalType('string', $result->response);
    }

    public function testCheckSessionRequest()
    {
        $testObject = new \SlimCD\Sessions\CheckSessionRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\CheckSessionRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $testObject->userfields = [
            'key' => 'value'
        ];
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $sessions = new Sessions();
        $result = $sessions->checkSession($testObject);
        $this->assertInternalType('string', $result->response);
    }

    public function testCreateSessionRequest()
    {
        $testObject = new \SlimCD\Sessions\CreateSessionRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\CreateSessionRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $testObject->userfields = [
            'key' => 'value'
        ];
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $sessions = new Sessions();
        $result = $sessions->createSession($testObject);
        $this->assertInternalType('string', $result->response);
    }

    public function testDestroySessionsRequest()
    {
        $testObject = new \SlimCD\Sessions\DestroySessionsRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\DestroySessionsRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $sessions = new Sessions();
        $result = $sessions->destroySessions($testObject);
        $this->assertInternalType('string', $result->response);
    }

    public function testGetSessionFieldsRequest()
    {
        $testObject = new \SlimCD\Sessions\GetSessionFieldsRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\GetSessionFieldsRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $sessions = new Sessions();
        $result = $sessions->getSessionFields($testObject);
        $this->assertInternalType('string', $result->response);
    }

    public function testMultiSessionRequest()
    {
        $testObject = new \SlimCD\Sessions\MultiSessionRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\MultiSessionRequest', $testObject);
        $sessions = new Sessions();
        $result = $sessions->multiSession($testObject);
        $this->assertInternalType('string', $result);
        $testObject->amount = "100.00";
        $result = $sessions->multiSession($testObject);
        $this->assertInternalType('string', $result);
    }

    public function testSearchSessionsRequest()
    {
        $testObject = new \SlimCD\Sessions\SearchSessionsRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\SearchSessionsRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $sessions = new Sessions();
        $result = $sessions->searchSessions($testObject);
        $this->assertInternalType('string', $result->response);
    }

    public function testSendSessionRequest()
    {
        $testObject = new \SlimCD\Sessions\SendSessionRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\SendSessionRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $sessions = new Sessions();
        $result = $sessions->sendSession($testObject);
        $this->assertInternalType('string', $result->response);
    }

    public function testShowSessionRequest()
    {
        $testObject = new \SlimCD\Sessions\ShowSessionRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\ShowSessionRequest', $testObject);
        $sessions = new Sessions();
        $result = $sessions->showSession($testObject);
        $this->assertInternalType('string', $result);
    }

    public function testSpawnSessionsRequest()
    {
        $testObject = new \SlimCD\Sessions\SpawnSessionsRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\SpawnSessionsRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $sessions = new Sessions();
        $result = $sessions->spawnSessions($testObject);
        $this->assertInternalType('string', $result->response);
    }
}

<?php

use SlimCD\Login\Login;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function testInstantiateLoginClass()
    {
        $testObject = new Login();
        $this->assertInstanceOf('SlimCD\Login\Login', $testObject);
    }

    public function testGetUserClientSiteRequest()
    {
        $testObject = new \SlimCD\Login\GetUserClientSiteRequest();
        $this->assertInstanceOf('\SlimCD\Login\GetUserClientSiteRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $login = new Login();
        $result = $login->getUserClientSite($testObject);
        $this->assertInternalType('string', $result->response);
    }

    public function testGetUserClientsRequest()
    {
        $testObject = new \SlimCD\Login\GetUserClientsRequest();
        $this->assertInstanceOf('\SlimCD\Login\GetUserClientsRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $login = new Login();
        $result = $login->getUserClients($testObject);
        $this->assertInternalType('string', $result->response);
    }

    public function testGetUserSettingsRequest()
    {
        $testObject = new \SlimCD\Login\GetUserSettingsRequest();
        $this->assertInstanceOf('\SlimCD\Login\GetUserSettingsRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $login = new Login();
        $result = $login->getUserSettings($testObject);
        $this->assertInternalType('string', $result->response);
    }
}

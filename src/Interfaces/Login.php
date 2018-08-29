<?php

namespace SlimCD\Interfaces;

use \SlimCD\Login\GetUserSettingsRequest;
use \SlimCD\Login\GetUserClientsRequest;
use \SlimCD\Login\GetUserClientSiteRequest;

interface Login
{
    public function getUserSettings(GetUserSettingsRequest $request, $timeout = false);
    public function getUserClients(GetUserClientsRequest $request, $timeout = false);
    public function getUserClientSite(GetUserClientSiteRequest $request, $timeout = false);
}

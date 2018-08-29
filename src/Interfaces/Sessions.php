<?php

namespace SlimCD\Interfaces;

use SlimCD\Sessions\CancelSessionRequest;
use SlimCD\Sessions\CheckSessionRequest;
use SlimCD\Sessions\CreateSessionRequest;
use SlimCD\Sessions\DestroySessionsRequest;
use SlimCD\Sessions\GetSessionFieldsRequest;
use SlimCD\Sessions\MultiSessionRequest;
use SlimCD\Sessions\SearchSessionsRequest;
use SlimCD\Sessions\SendSessionRequest;
use SlimCD\Sessions\ShowSessionRequest;
use SlimCD\Sessions\SpawnSessionsRequest;

interface Sessions
{
    public function cancelSession(CancelSessionRequest $request, $timeout = false);

    public function checkSession(CheckSessionRequest $request, $timeout = false);

    public function createSession(CreateSessionRequest $request, $timeout = false);

    public function destroySessions(DestroySessionsRequest $request, $timeout = false);

    public function getSessionFields(GetSessionFieldsRequest $request, $timeout = false);

    public function multiSession(MultiSessionRequest $request);

    public function searchSessions(SearchSessionsRequest $request, $timeout = false);

    public function sendSession(SendSessionRequest $request, $timeout = false);

    public function showSession(ShowSessionRequest $request);

    public function spawnSessions(SpawnSessionsRequest $request, $timeout = false);
}

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
    /**
     * Prevents the session from being used.
     *
     * CancelSession is used to cancel a session. Cancelling a session will
     * prevent the clerk from performing payment processing. Cancelling a
     * session may not be possible if the payment has already been completed (in
     * which case a VOID transaction must be performed on the gateway), or if
     * the payment is currently in-process for payment processing with the
     * credit card companies.
     *
     * @param CancelSessionRequest $request
     * @param bool                 $timeout
     *
     * @return mixed
     */
    public function cancelSession(CancelSessionRequest $request, $timeout = false);

    /**
     * Checks a session.
     *
     * @param CheckSessionRequest $request
     * @param bool                $timeout
     *
     * @return mixed
     */
    public function checkSession(CheckSessionRequest $request, $timeout = false);

    /**
     * Loads data into SLIM CD and returns a session id.
     *
     * CreateSession is used to create a SessionID. SessionID values are later
     * used as part of a secure and tamper-resistant URL so that a browser-style
     * application can be launched to accept cardholder information outside of
     * the developer’s software. CreateSession can also be used to send initial
     * customer data to SLIM CD so that payment pages are pre-populated for the
     * clerk, providing ease of data entry.
     *
     * @param CreateSessionRequest $request
     * @param bool                 $timeout
     *
     * @return mixed
     */
    public function createSession(CreateSessionRequest $request, $timeout = false);

    public function destroySessions(DestroySessionsRequest $request, $timeout = false);

    public function getSessionFields(GetSessionFieldsRequest $request, $timeout = false);

    public function multiSession(MultiSessionRequest $request);

    public function searchSessions(SearchSessionsRequest $request, $timeout = false);

    public function sendSession(SendSessionRequest $request, $timeout = false);

    public function showSession(ShowSessionRequest $request);

    public function spawnSessions(SpawnSessionsRequest $request, $timeout = false);
}

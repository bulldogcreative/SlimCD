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

    /**
     * Destroy and delete a session.
     *
     * @param DestroySessionsRequest $request
     * @param bool                   $timeout
     *
     * @return mixed
     */
    public function destroySessions(DestroySessionsRequest $request, $timeout = false);

    /**
     * Get Session Fields.
     *
     * Returns all of the session’s “user data”. Any pre-filled data will be
     * stored here. Any fields on the page will also be displayed once the user
     * clicks SUBMIT to save that data as the page is processed.
     *
     * @param GetSessionFieldsRequest $request
     * @param bool                    $timeout
     *
     * @return mixed
     */
    public function getSessionFields(GetSessionFieldsRequest $request, $timeout = false);

    /**
     * Creates a unique session from a master-session and displays it. Used
     * instead of ShowSession when the form is a template form.
     *
     * MultiSession is used to display a previously-created session similarly to
     * ShowSession. It is designed to accept limited input and display HTML
     * output so that the SessionID value can be included in the URL that is
     * provided as a command-line when launching in a browser. This also works
     * well when redirecting from one web server to another. Unlike ShowSession,
     * MultiSession is designed to be used by multiple recipients such as for
     * charitable donations. MultiSession creates a unique session from the
     * original template each time it is called.
     *
     * @param MultiSessionRequest $request
     *
     * @return mixed
     */
    public function multiSession(MultiSessionRequest $request);

    /**
     * Search Sessions.
     *
     * Returns a list of all the session matching the search criteria. Search is
     * performed on a date range. Returned data includes session id, approved,
     * approvedamt, etc.
     *
     * @param SearchSessionsRequest $request
     * @param bool                  $timeout
     *
     * @return mixed
     */
    public function searchSessions(SearchSessionsRequest $request, $timeout = false);

    /**
     * Sends a link via email or sms-text that allows the session to be
     * displayed/filled on a remote PC.
     *
     * SendSession is used to send a session URL via Email or SMS text message.
     * The recipient can then follow this link on their PC or Mobile device to
     * the previously created hosted payment page where they can enter their
     * payment information and complete the transaction.
     *
     * @param SendSessionRequest $request
     * @param bool               $timeout
     *
     * @return mixed
     */
    public function sendSession(SendSessionRequest $request, $timeout = false);

    /**
     * Displays the session inside the browser.
     *
     * ShowSession is used to display a previously-created session. It is
     * designed to accept limited input and display HTML output so that the
     * SessionID value can be included in the URL that is provided as a
     * command-line when launching in a browser. This also works well when
     * redirecting from one web server to another.
     *
     * @param ShowSessionRequest $request
     *
     * @return mixed
     */
    public function showSession(ShowSessionRequest $request);

    /**
     * Spawn a new sessionid from an old one.
     *
     * @param SpawnSessionsRequest $request
     * @param bool                 $timeout
     *
     * @return mixed
     */
    public function spawnSessions(SpawnSessionsRequest $request, $timeout = false);
}

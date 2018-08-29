<?php

namespace SlimCD\Sessions;

use SlimCD\SlimCD;

/**
 * Class Sessions.
 */
class Sessions extends SlimCD implements \SlimCD\Interfaces\Sessions
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
     * @return mixed|object
     *
     * @throws \Exception
     */
    public function cancelSession(CancelSessionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);

        return $this->httpPost($this->statsURL.'/soft/json/jsonscript.asp?service=CancelSession', $timeout, $request->jsonSerialize());
    }

    /**
     * Checks a session.
     *
     * @param CheckSessionRequest $request
     * @param bool                $timeout
     *
     * @return mixed|object
     *
     * @throws \Exception
     */
    public function checkSession(CheckSessionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);

        return $this->httpPost($this->statsURL.'/soft/json/jsonscript.asp?service=CheckSession', $timeout, $request->jsonSerialize());
    }

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
     * @return mixed|object
     *
     * @throws \Exception
     */
    public function createSession(CreateSessionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);

        return $this->httpPost($this->statsURL.'/soft/json/jsonscript.asp?service=CreateSession', $timeout, $request->jsonSerialize());
    }

    /**
     * Destroy and delete a session.
     *
     * @param DestroySessionsRequest $request
     * @param bool                   $timeout
     *
     * @return mixed|object
     *
     * @throws \Exception
     */
    public function destroySessions(DestroySessionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);

        return $this->httpPost($this->statsURL.'/soft/json/jsonscript.asp?service=DestroySessions', $timeout, $request->jsonSerialize());
    }

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
     * @return mixed|object
     *
     * @throws \Exception
     */
    public function getSessionFields(GetSessionFieldsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);

        return $this->httpPost($this->statsURL.'/soft/json/jsonscript.asp?service=GetSessionFields', $timeout, $request->jsonSerialize());
    }

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
     * @return string
     */
    public function multiSession(MultiSessionRequest $request)
    {
        if ('' == $request->amount) {
            return $this->statsURL.'/soft/mulisession.asp?sessionid='.urlencode($request->sessionid);
        } else {
            return $this->statsURL.'/soft/mulisession.asp?sessionid='.urlencode($request->sessionid).'&amount='.urlencode($request->amount);
        }
    }

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
     * @return mixed|object
     *
     * @throws \Exception
     */
    public function searchSessions(SearchSessionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);

        return $this->httpPost($this->statsURL.'/soft/json/jsonscript.asp?service=SearchSessions', $timeout, $request->jsonSerialize());
    }

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
     * @return mixed|object
     *
     * @throws \Exception
     */
    public function sendSession(SendSessionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);

        return $this->httpPost($this->statsURL.'/soft/json/jsonscript.asp?service=SendSession', $timeout, $request->jsonSerialize());
    }

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
     * @return string
     */
    public function showSession(ShowSessionRequest $request)
    {
        return $this->statsURL.'/soft/showsession.asp?sessionid='.urlencode($request->sessionid);
    }

    /**
     * Spawn a new sessionid from an old one.
     *
     * @param SpawnSessionsRequest $request
     * @param bool                 $timeout
     *
     * @return mixed|object
     *
     * @throws \Exception
     */
    public function spawnSessions(SpawnSessionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);

        return $this->httpPost($this->statsURL.'/soft/json/jsonscript.asp?service=SpawnSessions', $timeout, $request->jsonSerialize());
    }
}

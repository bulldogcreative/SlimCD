<?php

namespace SlimCD\Sessions;

/**
 * Class MultiSessionRequest.
 *
 * Creates a unique session from a master-session and displays it. Used instead
 * of ShowSession when the form is a template form.
 *
 * MultiSession is used to display a previously-created session similarly to
 * ShowSession. It is designed to accept limited input and display HTML output
 * so that the SessionID value can be included in the URL that is provided as a
 * command-line when launching in a browser. This also works well when
 * redirecting from one web server to another. Unlike ShowSession, MultiSession
 * is designed to be used by multiple recipients such as for charitable
 * donations. MultiSession creates a unique session from the original template
 * each time it is called.
 */
class MultiSessionRequest
{
    /**
     * HEX string uniquely representing the session.
     *
     * @var string
     */
    public $sessionid = '';

    /**
     * Amount of the transaction, which can override the amount specified by
     * CreateSession.
     *
     * @var string
     */
    public $amount = '';
}

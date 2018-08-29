<?php

namespace SlimCD\Sessions;

/**
 * Class ShowSessionRequest.
 *
 * ShowSession is used to display a previously-created session. It is designed
 * to accept limited input and display HTML output so that the SessionID value
 * can be included in the URL that is provided as a command-line when launching
 * in a browser. This also works well when redirecting from one web server to
 * another.
 */
class ShowSessionRequest
{
    /**
     * HEX string uniquely representing the session.
     *
     * @var string
     */
    public $sessionid = '';
}

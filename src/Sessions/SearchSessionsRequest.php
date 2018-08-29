<?php

namespace SlimCD\Sessions;

use SlimCD\jsonSerializeTrait;

/**
 * Class SearchSessionsRequest.
 *
 * Returns a list of all the session matching the search criteria. Search is
 * performed on a date range. Returned data includes session id, approved,
 * approvedamt, etc.
 */
class SearchSessionsRequest
{
    /**
     * Username or API Access Credential that accesses web service.
     *
     * @var string
     */
    public $username = '';

    /**
     * Plaintext password for the client account.
     *
     * @var string
     */
    public $password = '';

    /**
     * Assigned by the Slim CD administrator.
     *
     * @var int
     */
    public $siteid = 0;

    /**
     * Date of beginning of search.
     *
     * @var string
     */
    public $startdate = '';

    /**
     * 	Date of end of search.
     *
     * @var string
     */
    public $enddate = '';

    /**
     * Assigned by the Slim CD administrator.
     *
     * @var int
     */
    public $clientid = 0;

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
     * @var int
     */
    public $amount = 0;

    /**
     * @var string
     */
    public $approvedamt = '';

    /**
     * @var string
     */
    public $transtype = '';

    /**
     * @var string
     */
    public $cardpart = '';

    /**
     * @var string
     */
    public $approved = '';

    /**
     * @var int
     */
    public $gateid = 0;

    /**
     * @var string
     */
    public $completed = '';

    /**
     * @var string
     */
    public $cancelled = '';

    /**
     * @var string
     */
    public $reverseorder = '';

    use jsonSerializeTrait;
}

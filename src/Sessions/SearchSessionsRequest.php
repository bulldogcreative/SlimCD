<?php

namespace SlimCD\Sessions;

use \SlimCD\jsonSerializeTrait;

/**
 * Class SearchSessionsRequest
 * @package SlimCD\Sessions
 */
class SearchSessionsRequest
{
    // property declaration
    public $username     = '';
    public $password     = '';
    public $siteid       = 0;
    public $enddate      = 0;
    public $clientid     = 0;
    public $startdate    = 0;
    public $sessionid    = '';
    public $amount       = 0;
    public $approvedamt  = '';
    public $transtype    = '';
    public $cardpart     = '';
    public $approved     = '';
    public $gateid       = 0;
    public $completed    = '';
    public $cancelled    = '';
    public $reverseorder = '';

    use jsonSerializeTrait;
}

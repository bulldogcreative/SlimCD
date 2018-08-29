<?php

namespace SlimCD\Sessions;

use \SlimCD\jsonSerializeTrait;

/**
 * Class CancelSessionRequest
 *
 * CancelSession is used to cancel a session. Cancelling a session will prevent
 * the clerk from performing payment processing. Cancelling a session may not be
 * possible if the payment has already been completed (in which case a VOID
 * transaction must be performed on the gateway), or if the payment is currently
 * in-process for payment processing with the credit card companies.
 *
 * @package SlimCD\Sessions
 */
class CancelSessionRequest
{
    /**
     * Username or API Access Credential that accesses web service.
     *
     * @var string
     */
    public $username  = '';

    /**
     * Plaintext password for the client account.
     *
     * @var string
     */
    public $password  = '';

    /**
     * HEX string uniquely representing the session
     *
     * @var string
     */
    public $sessionid = '';

    use jsonSerializeTrait;
}

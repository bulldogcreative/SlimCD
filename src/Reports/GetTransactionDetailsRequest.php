<?php

namespace SlimCD\Reports;

use \SlimCD\jsonSerializeTrait;

/**
 * Class GetTransactionDetailsRequest
 *
 * Returns a standard Transaction item, with all of the details needed to
 * reprint a receipt or identify the type of transaction as card, check, or gift.
 *
 * @package SlimCD\Reports
 */
class GetTransactionDetailsRequest
{
    /**
     * Username or API Access Credential that accesses web service.
     *
     * @var string
     */
    public $username = '';

    /**
     * 	Plaintext password for the client account.
     *
     * @var string
     */
    public $password = '';

    /**
     * Gateway ID for previous transaction.
     *
     * @var int
     */
    public $siteid   = 0;

    use jsonSerializeTrait;
}

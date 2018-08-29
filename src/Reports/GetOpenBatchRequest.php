<?php

namespace SlimCD\Reports;

use \SlimCD\jsonSerializeTrait;

/**
 * Class GetOpenBatchRequest
 *
 * Returns one BatchTransaction record for each transaction in the current batch
 * . Note that for most processors, transactions in the open batch can still be
 * VOIDed, UPDATEd, or have TIPEDIT performed.
 *
 * @package SlimCD\Reports
 */
class GetOpenBatchRequest
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
    public $siteid   = 0;

    use jsonSerializeTrait;
}

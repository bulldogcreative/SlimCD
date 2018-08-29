<?php

namespace SlimCD\Reports;

use \SlimCD\jsonSerializeTrait;

/**
 * Class GetClosedBatchTransactionsRequest
 * @package SlimCD\Reports
 */
class GetClosedBatchTransactionsRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $siteid   = 0;
    public $batchid  = 0;

    use jsonSerializeTrait;
}

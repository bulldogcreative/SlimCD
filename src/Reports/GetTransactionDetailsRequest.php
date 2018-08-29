<?php

namespace SlimCD\Reports;

use \SlimCD\jsonSerializeTrait;

/**
 * Class GetTransactionDetailsRequest
 * @package SlimCD\Reports
 */
class GetTransactionDetailsRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $siteid   = 0;

    use jsonSerializeTrait;
}

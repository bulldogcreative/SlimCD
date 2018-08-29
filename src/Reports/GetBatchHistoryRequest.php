<?php

namespace SlimCD\Reports;

use \SlimCD\jsonSerializeTrait;

/**
 * Class GetBatchHistoryRequest
 * @package SlimCD\Reports
 */
class GetBatchHistoryRequest
{
    // property declaration
    public $username  = '';
    public $password  = '';
    public $siteid    = 0;
    public $startdate = '';
    public $enddate   = '';

    use jsonSerializeTrait;
}

<?php

namespace SlimCD\Reports;

use \SlimCD\jsonSerializeTrait;

/**
 * Class GetBatchSummaryRequest
 * @package SlimCD\Reports
 */
class GetBatchSummaryRequest
{
    // property declaration
    public $username  = '';
    public $password  = '';
    public $siteid    = 0;
    public $startdate = '';
    public $enddate   = '';

    use jsonSerializeTrait;
}

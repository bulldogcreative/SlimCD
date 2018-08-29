<?php

namespace SlimCD\Reports;

use \SlimCD\jsonSerializeTrait;

/**
 * Class GetOpenAuthsRequest
 * @package SlimCD\Reports
 */
class GetOpenAuthsRequest
{
    // property declaration
    public $username  = '';
    public $password  = '';
    public $siteid    = 0;
    public $StartDate = '';
    public $EndDate   = '';

    use jsonSerializeTrait;
}

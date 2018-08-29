<?php

namespace SlimCD\Sessions;

use \SlimCD\jsonSerializeTrait;

/**
 * Class GetSessionFieldsRequest
 * @package SlimCD\Sessions
 */
class GetSessionFieldsRequest
{
    // property declaration
    public $username  = '';
    public $password  = '';
    public $sessionid = '';

    use jsonSerializeTrait;
}

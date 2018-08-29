<?php

namespace SlimCD\Sessions;

use \SlimCD\jsonSerializeTrait;

/**
 * Class DestroySessionsRequest
 * @package SlimCD\Sessions
 */
class DestroySessionsRequest
{
    // property declaration
    public $username  = '';
    public $password  = '';
    public $sessionid = '';

    use jsonSerializeTrait;
}

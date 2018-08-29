<?php

namespace SlimCD\Sessions;

use SlimCD\jsonSerializeTrait;

/**
 * Class DestroySessionsRequest.
 */
class DestroySessionsRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $sessionid = '';

    use jsonSerializeTrait;
}

<?php

namespace SlimCD\Sessions;

use SlimCD\jsonSerializeTrait;

/**
 * Class SpawnSessionsRequest.
 */
class SpawnSessionsRequest
{
    // property declaration
    public $amount = '';
    public $sessionid = '';

    use jsonSerializeTrait;
}

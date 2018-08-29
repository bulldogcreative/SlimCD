<?php

namespace SlimCD\Sessions;

use \SlimCD\jsonSerializeTrait;

/**
 * Class SpawnSessionsRequest
 * @package SlimCD\Sessions
 */
class SpawnSessionsRequest
{
    // property declaration
    public $amount    = '';
    public $sessionid = '';

    use jsonSerializeTrait;
}

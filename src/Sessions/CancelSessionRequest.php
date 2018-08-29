<?php

namespace SlimCD\Sessions;

use \SlimCD\jsonSerializeTrait;

/**
 * Class CancelSessionRequest
 * @package SlimCD\Sessions
 */
class CancelSessionRequest
{
    // property declaration
    public $username  = '';
    public $password  = '';
    public $sessionid = '';

    use jsonSerializeTrait;
}

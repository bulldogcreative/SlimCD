<?php

namespace SlimCD\Sessions;

use SlimCD\jsonSerializeTrait;

/**
 * Class GetSessionFieldsRequest.
 */
class GetSessionFieldsRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $sessionid = '';

    use jsonSerializeTrait;
}

<?php

namespace SlimCD\Login;

use \SlimCD\jsonSerializeTrait;

/**
 * Class GetUserClientSiteRequest
 * @package SlimCD\Login
 */
class GetUserClientSiteRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $clientid = 0;
    public $siteid   = 0;

    use jsonSerializeTrait;
}

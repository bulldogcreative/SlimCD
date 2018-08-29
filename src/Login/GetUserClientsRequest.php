<?php

namespace SlimCD\Login;

use \SlimCD\jsonSerializeTrait;

/**
 * Class GetUserClientsRequest
 * @package SlimCD\Login
 */
class GetUserClientsRequest
{
    // property declaration
    public $username = '';
    public $password = '';

    use jsonSerializeTrait;
}

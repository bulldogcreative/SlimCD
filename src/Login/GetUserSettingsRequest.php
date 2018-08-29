<?php

namespace SlimCD\Login;

use \SlimCD\jsonSerializeTrait;

/**
 * Class GetUserSettingsRequest
 * @package SlimCD\Login
 */
class GetUserSettingsRequest
{
    // property declaration
    public $username = '';
    public $password = '';

    use jsonSerializeTrait;
}

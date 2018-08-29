<?php

namespace SlimCD\Login;

use SlimCD\jsonSerializeTrait;

/**
 * Class GetUserSettingsRequest.
 *
 * Retrieves a list of settings for the username/password, including transaction
 * type permissions and any messages to be displayed to the user. Message blocks
 * contain 5 rows. Multiple message blocks can be returned as multiple settings.
 */
class GetUserSettingsRequest
{
    /**
     * Username or API Access Credential that accesses web service.
     *
     * @var string
     */
    public $username = '';

    /**
     * Plaintext password for the client account.
     *
     * @var string
     */
    public $password = '';

    use jsonSerializeTrait;
}

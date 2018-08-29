<?php

namespace SlimCD\Sessions;

use SlimCD\jsonSerializeTrait;

/**
 * Class DestroySessionsRequest.
 *
 * Destroy and delete a session.
 */
class DestroySessionsRequest
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

    /**
     * HEX string uniquely representing the session.
     *
     * @var string
     */
    public $sessionid = '';

    use jsonSerializeTrait;
}

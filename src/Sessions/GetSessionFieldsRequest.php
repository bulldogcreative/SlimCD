<?php

namespace SlimCD\Sessions;

use SlimCD\jsonSerializeTrait;

/**
 * Class GetSessionFieldsRequest.
 *
 * Returns all of the session’s “user data”. Any prefilled data will be stored
 * here. Any fields on the page will also be displayed once the user clicks
 * SUBMIT to save that data as the page is processed.
 */
class GetSessionFieldsRequest
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

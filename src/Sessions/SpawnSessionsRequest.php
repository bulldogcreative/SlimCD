<?php

namespace SlimCD\Sessions;

use SlimCD\jsonSerializeTrait;

/**
 * Class SpawnSessionsRequest.
 *
 * Spawn a new sessionid from an old one.
 */
class SpawnSessionsRequest
{
    /**
     * Amount of the transaction.
     *
     * @var string
     */
    public $amount = '';

    /**
     * HEX string uniquely representing the session.
     *
     * @var string
     */
    public $sessionid = '';

    use jsonSerializeTrait;
}

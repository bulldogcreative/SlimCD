<?php

namespace SlimCD\Images;

use SlimCD\jsonSerializeTrait;

/**
 * Class DownloadCheckRequest.
 *
 * Downloads the check data that was stored for a specific gateid. The check
 * data is returned in the same format as was used for upload. Data is
 * base-64 encoded.
 */
class DownloadCheckRequest
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
     * Gateway ID for previous transaction.
     *
     * @var int
     */
    public $gateid = 0;

    use jsonSerializeTrait;
}

<?php

namespace SlimCD\Images;

use SlimCD\jsonSerializeTrait;

/**
 * Class DownloadSignatureRequest.
 *
 * Downloads the vector signature data that was stored for a specific gateid.
 * The data is returned as vector-encoded hex bytes.
 */
class DownloadSignatureRequest
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

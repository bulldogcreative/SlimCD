<?php

namespace SlimCD\Images;

use \SlimCD\jsonSerializeTrait;

/**
 * Class UploadCheckRequest
 *
 * Stores a check image on the SLIM CD server so that it can be sent to the
 * processor for check conversion purposes. Data is base-64 encoded.
 *
 * @package SlimCD\Images
 */
class UploadCheckRequest
{
    /**
     * Username or API Access Credential that accesses web service.
     *
     * @var string
     */
    public $username  = '';

    /**
     * Plaintext password for the client account.
     *
     * @var string
     */
    public $password  = '';

    /**
     * Assigned by the Slim CD administrator.
     *
     * @var int
     */
    public $siteid    = 0;

    /**
     * Gateway ID for previous transaction.
     *
     * @var int
     */
    public $gateid    = 0;

    /**
     * Represents type of data.
     *
     * @var string
     */
    public $filetype  = '';

    /**
     * Base-64 encoded data for images, or text for receipts.
     *
     * @var string
     */
    public $imagedata = '';

    use jsonSerializeTrait;
}

<?php

namespace SlimCD\Images;

use \SlimCD\jsonSerializeTrait;

/**
 * Class UploadSignatureRequest
 *
 * Upload a signature image to the database.
 *
 * Stores a series of vectors on the SLIM CD server so they can be retrieved at
 * a later date.Vectors are in hex. They can be in one of the four formats.
 *
 * @package SlimCD\Images
 */
class UploadSignatureRequest
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

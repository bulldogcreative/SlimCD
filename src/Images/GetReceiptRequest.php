<?php

namespace SlimCD\Images;

use SlimCD\jsonSerializeTrait;

/**
 * Class GetReceiptRequest.
 *
 * GetReceipt returns a content-type of text/plain that contains the data for
 * the receipt. If an error occurs, GetReceipt sets the HTTP status code and
 * status text to represent the error. If successful, the status code is set
 * to 200 and the text for the receipt is returned as the body of the response.
 */
class GetReceiptRequest
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

<?php

namespace SlimCD\Transact;

use SlimCD\jsonSerializeTrait;

/**
 * Class CloseBatchRequest.
 *
 * Transactions processed through SLIM CD are stored in batches. These
 * transactions will not be funded to the merchant until the batch is closed.
 * After closing a batch you can no longer perform VOID, TIPEDIT, or UPDATE
 * transactions against a previous transaction included in the batch.
 */
class CloseBatchRequest
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
     * Assigned by the Slim CD administrator.
     *
     * @var int
     */
    public $siteid = 0;

    /**
     * The processor’s batch number. Do not use unless instructed by SLIM CD.
     *
     * @var string
     */
    public $batchnumber = '';

    use jsonSerializeTrait;
}

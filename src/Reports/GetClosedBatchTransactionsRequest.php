<?php

namespace SlimCD\Reports;

use SlimCD\jsonSerializeTrait;

/**
 * Class GetClosedBatchTransactionsRequest.
 *
 * GetClosedBatchTransactions lists the individual credit card transactions for
 * the siteid and batched specified. A BatchTransaction item is returned for
 * each transaction in the batch. Note that batches only contain credit/debit
 * card transactions and not check or gift card transactions.
 */
class GetClosedBatchTransactionsRequest
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
     * Value returned from GetBatchHistory that identifies an individual batch.
     *
     * @var int
     */
    public $batchid = 0;

    use jsonSerializeTrait;
}

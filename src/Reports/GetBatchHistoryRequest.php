<?php

namespace SlimCD\Reports;

use SlimCD\jsonSerializeTrait;

/**
 * Class GetBatchHistoryRequest.
 *
 * GetBatchHistory returns records representing data for each batch within the
 * specified date range. Each record represents a batch of transactions, and
 * contains a unique Batch ID that can be provided to GetClosedBatchTransactions
 * to retrieve the actual transactions in that batch.
 */
class GetBatchHistoryRequest
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
     * Date of beginning of search.
     *
     * @var string
     */
    public $startdate = '';

    /**
     * Date of end of search.
     *
     * @var string
     */
    public $enddate = '';

    use jsonSerializeTrait;
}

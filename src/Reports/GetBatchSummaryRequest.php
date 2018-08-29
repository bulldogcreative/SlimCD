<?php

namespace SlimCD\Reports;

use \SlimCD\jsonSerializeTrait;

/**
 * Class GetBatchSummaryRequest
 *
 * GetBatchSummary iterates through batches in the specified date range and
 * creates summations for the batches within the requested range. Transaction
 * counts, gross sales, gross refunds and net income are returned whenever
 * possible.
 *
 * @package SlimCD\Reports
 */
class GetBatchSummaryRequest
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
    public $enddate   = '';

    use jsonSerializeTrait;
}

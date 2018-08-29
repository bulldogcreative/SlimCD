<?php

namespace SlimCD\Reports;

use SlimCD\jsonSerializeTrait;

/**
 * Class GetDailySummaryRequest.
 *
 * Produces transaction counts and amounts for the date range specified. Check,
 * gift and card totals are listed separately, where card totals are broken out
 * by brand (Visa/MasterCard/Discover, etc).
 */
class GetDailySummaryRequest
{
    /**
     * 	Username or API Access Credential that accesses web service.
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
     * Value of the SLIM CD MetaBank id, or zero.
     *
     * @var int
     */
    public $metabankid = 0;

    /**
     * Value of the SLIM CD bank id, or zero.
     *
     * @var int
     */
    public $bankid = 0;

    /**
     * Assigned by the Slim CD administrator.
     *
     * @var int
     */
    public $clientid = 0;

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

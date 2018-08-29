<?php

namespace SlimCD\Reports;

use \SlimCD\jsonSerializeTrait;

/**
 * Class GetOpenAuthsRequest
 *
 * Returns a BatchTransaction record for each AUTH that has not been VOIDed or
 * FORCEd. Each of the auths will not be funded until the FORCE is performed.
 * This command requires a DATE/TIME rather than just DATE. The format for
 * DATE/TIME is in .NET/Microsoft SQL format of either 24-hour format as
 * “MM/DD/YYYY HH:MM:SS.mmm” or the same format as 12-hour, with AM or PM
 * appended to the date/time.
 *
 * @package SlimCD\Reports
 */
class GetOpenAuthsRequest
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

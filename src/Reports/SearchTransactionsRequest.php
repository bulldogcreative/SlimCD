<?php

namespace SlimCD\Reports;

use SlimCD\jsonSerializeTrait;

/**
 * Class SearchTransactionsRequest.
 *
 * Returns a standard Transaction item for each item in the search criteria.
 * Transaction search is done by date range. Just the count, or the transactions
 * themselves can be returned. A maximum can be set so that the return set is
 * limited. The order can be reversed by specifying “reverseorder” in the search
 * criteria, which causes the items to be returned with the most recent first.
 */
class SearchTransactionsRequest
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
     * true/false.
     *
     * @var bool
     */
    public $recordcountonly = false;

    /**
     * Maximum number of records returnd by the Search.
     *
     * @var int
     */
    public $maxrecords = 0;

    /**
     * Date of beginning of search.
     *
     * @var string
     */
    public $startdate = '';

    /**
     * 	Date of end of search.
     *
     * @var string
     */
    public $enddate = '';

    /**
     * Assigned by the Slim CD administrator.
     *
     * @var int
     */
    public $clientid = 0;

    /**
     * First name of cardholder.
     *
     * @var string
     */
    public $firstname = '';

    /**
     * Last name of cardholder.
     *
     * @var string
     */
    public $lastname = '';

    /**
     * City.
     *
     * @var string
     */
    public $city = '';

    /**
     * State.
     *
     * @var string
     */
    public $state = '';

    /**
     * Zip.
     *
     * @var int
     */
    public $zip = 0;

    /**
     * Cardholder Email address.
     *
     * @var string
     */
    public $email = '';

    /**
     * Amount to credit (USD).
     *
     * @var string
     */
    public $amount = '';

    /**
     * Client-supplied transaction identifier, (i.e. receipt number) which will
     * be passed to the credit card network for specific industry types.
     *
     * @var string
     */
    public $clienttransref = '';

    /**
     * (See Transaction Type Table for Legal Values).
     *
     * @var string
     */
    public $transtype = '';

    /**
     * Card number – used for verification.
     *
     * @var int
     */
    public $cardnumber = 0;

    /**
     * Integer representing unique card value returned by SearchTransaction.
     *
     * @var string
     */
    public $cardid = '';

    /**
     * First 4 or last 4 of card (last 3 for amex).
     *
     * @var string
     */
    public $cardpart = '';

    /**
     * Clerk/Salesperson Name/ID.
     *
     * @var string
     */
    public $clerkname = '';

    /**
     * Gateway ID for previous transaction.
     *
     * @var int
     */
    public $gateid = 0;

    /**
     * Yes/no, causes results to be reversed with most recent first.
     *
     * @var string
     */
    public $reverseorder = '';

    use jsonSerializeTrait;
}

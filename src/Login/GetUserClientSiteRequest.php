<?php

namespace SlimCD\Login;

use \SlimCD\jsonSerializeTrait;

/**
 * Class GetUserClientSiteRequest
 *
 * Gets specific sitename, businesstype, industrycode info for a username/
 * password or clientid/siteid.
 *
 * Retrieves a list of clients and sites for the specified username/password
 * , or a list of sites for the specified clientid, or the details on a
 * specified clientid/siteid. The information returned shows details on the
 * site’s setup.
 * 
 * @package SlimCD\Login
 */
class GetUserClientSiteRequest
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
    public $clientid = 0;

    /**
     * Assigned by the Slim CD administrator.
     *
     * @var int
     */
    public $siteid   = 0;

    use jsonSerializeTrait;
}

<?php

namespace SlimCD\Interfaces;

use SlimCD\Login\GetUserSettingsRequest;
use SlimCD\Login\GetUserClientsRequest;
use SlimCD\Login\GetUserClientSiteRequest;

interface Login
{
    /**
     * Get settings for a specific username/password.
     *
     * Retrieves a list of settings for the username/password, including
     * transaction type permissions and any messages to be displayed to the user
     * . Message blocks contain 5 rows. Multiple message blocks can be returned
     * as multiple settings.
     *
     * @param GetUserSettingsRequest $request
     * @param bool                   $timeout
     *
     * @return mixed
     */
    public function getUserSettings(GetUserSettingsRequest $request, $timeout = false);

    /**
     * List all clients in the system for the specified username/password.
     *
     * Generates a list of all accessible client ids and the name of the client.
     * The list represents client ids available for a particular username/
     * password in the user hierarchy.
     *
     * @param GetUserClientsRequest $request
     * @param bool                  $timeout
     *
     * @return mixed
     */
    public function getUserClients(GetUserClientsRequest $request, $timeout = false);

    /**
     * Gets specific sitename, businesstype, industrycode info for a username/
     * password or clientid/siteid.
     *
     * Retrieves a list of clients and sites for the specified username/password
     * , or a list of sites for the specified clientid, or the details on a
     * specified clientid/siteid. The information returned shows details on the
     * site’s setup.
     *
     * @param GetUserClientSiteRequest $request
     * @param bool                     $timeout
     *
     * @return mixed
     */
    public function getUserClientSite(GetUserClientSiteRequest $request, $timeout = false);
}

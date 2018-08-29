<?php

namespace SlimCD\Login;

use SlimCD\SlimCD;

/**
 * Class Login
 * @package SlimCD\Login
 */
class Login extends SlimCD implements \SlimCD\Interfaces\Login
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
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function getUserSettings(GetUserSettingsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetUserSettings", $timeout, $request->jsonSerialize()));
    }

    /**
     * List all clients in the system for the specified username/password.
     *
     * Generates a list of all accessible client ids and the name of the client.
     * The list represents client ids available for a particular username/
     * password in the user hierarchy.
     *
     * @param GetUserClientsRequest $request
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function getUserClients(GetUserClientsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetUserClients", $timeout, $request->jsonSerialize()));
    }

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
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function getUserClientSite(GetUserClientSiteRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetUserClientSite", $timeout, $request->jsonSerialize()));
    }
}

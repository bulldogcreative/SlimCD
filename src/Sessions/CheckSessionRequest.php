<?php

namespace SlimCD\Sessions;

/**
 * Class CheckSessionRequest
 *
 * Check a session.
 *
 * @package SlimCD\Sessions
 */
class CheckSessionRequest
{
    /**
     * Username or API Access Credential that accesses web service.
     *
     * @var string
     */
    public $username         = '';

    /**
     * Plaintext password for the client account.
     *
     * @var string
     */
    public $password         = '';

    /**
     * HEX string uniquely representing the session
     *
     * @var string
     */
    public $sessionid        = '';

    /**
     * Time to wait, in seconds, for CheckSession to wait while the session is
     * being completed by the user
     *
     * @var int
     */
    public $wait             = 0;

    /**
     * Yes/no indicating that the CheckSession should not return intermediate
     * results, but only final results.
     *
     * @var string
     */
    public $waitforcompleted = '';

    /**
     * This is a USER-SUPPLIED field, can be named whatever the developer wants,
     * and can be used to retrieve additional data with the form. In the case of
     * the libraries, these field names are specified in a dictionary called
     * “userfields”. In the case of the webservice/resource, these fields are
     * simply included with other name/value pairs. CheckSession will return
     * values from the form/session for any fields specified.
     *
     * @var null
     */
    public $userfields       = null;

    public function jsonSerialize()
    {
        $array = array(
            'username'         => $this->username,
            'password'         => $this->password,
            'sessionid'        => $this->sessionid,
            'wait'             => $this->wait,
            'waitforcompleted' => $this->waitforcompleted);

        if (is_array($this->userfields)) {
            foreach ($this->userfields as $key => $value) {
                $array[$key] = $value ;
            }
        }
        return ($array) ;
    }
}

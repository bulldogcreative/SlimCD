<?php

namespace SlimCD\Sessions;

/**
 * Class CheckSessionRequest
 * @package SlimCD\Sessions
 */
class CheckSessionRequest
{
    // property declaration
    public $username         = '';
    public $password         = '';
    public $sessionid        = '';
    public $wait             = 0;
    public $waitforcompleted = '';
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

<?php

namespace SlimCD\Sessions;

/**
 * Class CreateSessionRequest
 * @package SlimCD\Sessions
 */
class CreateSessionRequest
{
    // property declaration
    public $username   = '';
    public $password   = '';
    public $clientid   = 0;
    public $siteid     = 0;
    public $priceid    = 0;
    public $formname   = '';
    public $transtype  = '';
    public $amount     = 0;
    public $userfields = null;

    public function jsonSerialize()
    {
        $array = array(
            'username'  => $this->username,
            'password'  => $this->password,
            'clientid'  => $this->clientid,
            'siteid'    => $this->siteid,
            'priceid'   => $this->priceid,
            'formname'  => $this->formname,
            'transtype' => $this->transtype,
            'amount'    => $this->amount);

        if (is_array($this->userfields)) {
            foreach ($this->userfields as $key => $value) {
                $array[$key] = $value;
            }
        }
        return ($array);
    }
}

<?php

namespace SlimCD\Sessions;

/**
 * Class CreateSessionRequest.
 *
 * CreateSession is used to create a SessionID. SessionID values are later used
 * as part of a secure and tamper-resistant URL so that a browser-style
 * application can be launched to accept cardholder information outside of the
 * developer’s software. CreateSession can also be used to send initial customer
 * data to SLIM CD so that payment pages are pre-populated for the clerk,
 * providing ease of data entry.
 */
class CreateSessionRequest
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
    public $siteid = 0;

    /**
     * Numeric value provided by SLIMCD that is sent when processing a
     * transaction.
     *
     * @var int
     */
    public $priceid = 0;

    /**
     * Name of the form to use when creating a session.
     *
     * @var string
     */
    public $formname = '';

    /**
     * Type of transaction to perform (SALE, CREDIT, VOID, etc).
     *
     * @var string
     */
    public $transtype = '';

    /**
     * Amount of the transaction.
     *
     * @var int
     */
    public $amount = 0;

    /**
     * This is a USER-SUPPLIED field, can be named whatever the developer wants,
     * and can be used to store additional data with the form. In the case of
     * the libraries, these field name/values are provided in a dictionary
     * called “userfields”. In the case of the webservice/resource, these fields
     * are simply included with other name/value pairs.
     *
     * @var null
     */
    public $userfields = null;

    public function jsonSerialize()
    {
        $array = array(
            'username' => $this->username,
            'password' => $this->password,
            'clientid' => $this->clientid,
            'siteid' => $this->siteid,
            'priceid' => $this->priceid,
            'formname' => $this->formname,
            'transtype' => $this->transtype,
            'amount' => $this->amount, );

        if (is_array($this->userfields)) {
            foreach ($this->userfields as $key => $value) {
                $array[$key] = $value;
            }
        }

        return $array;
    }
}

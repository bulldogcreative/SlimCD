<?php

namespace SlimCD\Images;

/**
 * Class SendReceiptRequest
 *
 * Email or SMS-Text delivery of receipts is performed with this function. The
 * text for receipts is generated using information on file with SLIM CD, so the
 * receipts match those produced by the SLIM CD website. Receipts for SMS-Text
 * are abbreviated versions that show a simpler version of the data.
 *
 * @package SlimCD\Images
 */
class SendReceiptRequest
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
     * Gateway ID for previous transaction.
     *
     * @var int
     */
    public $gateid   = 0;

    /**
     * Yes/no causes SMS text to be sent if phone number provided
     *
     * @var string
     */
    public $send_sms   = 'no';

    /**
     * Cardholder phone number
     *
     * @var int
     */
    public $phone      = '';

    /**
     * Yes/no causes email to be sent.
     *
     * @var string
     */
    public $send_email = 'no';

    /**
     * Cardholder Email address
     *
     * @var string
     */
    public $email      = '';

    /**
     * Yes/no causes SMS text to be sent
     *
     * @var string
     */
    public $send_cc    = 'no';

    /**
     * Email address of recipient for a carbon-copy of receipt (overrides
     * merchant settings stored on SLIMCD.COM)
     *
     * @var string
     */
    public $ccemail    = '';

    public function jsonSerialize()
    {
        return array(
            'username'   => $this->username,
            'password'   => $this->password,
            'gateid'     => $this->gateid,
            'send_sms'   => (($this->send_sms === true || $this->send_sms == 'yes' || $this->send_sms == '1') ? 1 : 0),
            'phone'      => $this->phone,
            'send_email' => (($this->send_email === true || $this->send_email == 'yes' || $this->send_email == '1') ? 1 : 0),
            'email'      => $this->email,
            'ccemail'    => $this->ccemail
        );
    }
}

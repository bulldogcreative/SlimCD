<?php

namespace SlimCD\Sessions;

use SlimCD\jsonSerializeTrait;

/**
 * Class SendSessionRequest.
 *
 * SendSession is used to send a session URL via Email or SMS text message. The
 * recipient can then follow this link on their PC or Mobile device to the
 * previously created hosted payment page where they can enter their payment
 * information and complete the transaction.
 */
class SendSessionRequest
{
    public $username = '';
    public $password = '';
    public $sessionid = 0;
    public $message = '';
    public $send_email = '';
    public $email = '';
    public $email_from = '';
    public $send_html = '';
    public $send_sms = '';
    public $phone = 0;

    use jsonSerializeTrait;
}

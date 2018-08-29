<?php

namespace SlimCD\Sessions;

use SlimCD\jsonSerializeTrait;

/**
 * Class SendSessionRequest.
 */
class SendSessionRequest
{
    // property declaration
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

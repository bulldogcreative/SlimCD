<?php

namespace SlimCD\Sessions;

use \SlimCD\jsonSerializeTrait;

class GetSessionFieldsRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $sessionid='';

    use jsonSerializeTrait;
}
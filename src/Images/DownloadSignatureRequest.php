<?php

namespace SlimCD\Images;

use \SlimCD\jsonSerializeTrait;

class DownloadSignatureRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $gateid = 0;

    use jsonSerializeTrait;
}
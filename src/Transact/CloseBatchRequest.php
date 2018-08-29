<?php

namespace SlimCD\Transact;

use \SlimCD\jsonSerializeTrait;

/**
 * Class CloseBatchRequest
 * @package SlimCD\Transact
 */
class CloseBatchRequest
{
    // property declaration
    public $username    = '';
    public $password    = '';
    public $siteid      = 0;
    public $batchnumber = '';

    use jsonSerializeTrait;
}

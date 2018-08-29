<?php

namespace SlimCD\Images;

/**
 * Class GetSignatureImageRequest
 * @package SlimCD\Images
 */
class GetSignatureImageRequest
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
     * Represents type of data ID for previous transaction.
     *
     * @var string
     */
    public $filetype = '';


    public $imgflag     = 'PNG';
    public $height      = null;
    public $width       = null;
    public $transparent = 'yes';
    public $edge        = null;
    public $penwidth    = null;
    public $border      = 'no';
    public $testmode    = 'no';

    public function jsonSerialize()
    {
        $array = array(
            'username' => $this->username,
            'password' => $this->password,
            'gateid'   => $this->gateid);

        if ($this->imgflag !== null && $this->imgflag !== '') {
            $array['imgflag'] = $this->imgflag;
        }

        if ($this->height !== null && intval($this->height) !== 0) {
            $array['height'] = $this->height;
        }

        if ($this->width !== null && intval($this->width) !== 0) {
            $array['width'] = $this->width;
        }

        if ($this->transparent === true || $this->transparent == 'yes' || $this->transparent == '1') {
            $array['transparent'] = "1";
        } else {
            $array['transparent'] = "0";
        }

        if ($this->edge !== null && intval($this->edge) !== 0) {
            $array['edge'] = $this->edge;
        }

        if ($this->penwidth !== null && intval($this->penwidth) !== 0) {
            $array['penwidth'] = $this->penwidth;
        }

        if ($this->border === true || $this->border == 'yes' || $this->border == '1') {
            $array['border'] = "1";
        } else {
            $array['border'] = "0";
        }

        if ($this->testmode === true || $this->testmode == 'yes' || $this->testmode == '1') {
            $array['testmode'] = "1";
        } else {
            $array['testmode'] = "0";
        }

        return($array) ;
    }
}

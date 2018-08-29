<?php

namespace SlimCD\Images;

/**
 * Class GetSignatureImageRequest.
 *
 * Upon success, GetSignatureImage returns a status code of 200, a content-type
 * based on the type of image requested, and binary data that represents the
 * image. Supported image types include PNG, JPG, BMP, ICON, TIFF. In the case
 * of an error, the content type is set to text/plain, the body contains text
 * representing the error, the HTTP status code us set to an error code (not 200)
 * and status text to represent the error.
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
    public $gateid = 0;

    /**
     * Represents type of data ID for previous transaction.
     *
     * @var string
     */
    public $filetype = '';

    public $imgflag = 'PNG';
    public $height = null;
    public $width = null;
    public $transparent = 'yes';
    public $edge = null;
    public $penwidth = null;
    public $border = 'no';
    public $testmode = 'no';

    public function jsonSerialize()
    {
        $array = array(
            'username' => $this->username,
            'password' => $this->password,
            'gateid' => $this->gateid, );

        if (null !== $this->imgflag && '' !== $this->imgflag) {
            $array['imgflag'] = $this->imgflag;
        }

        if (null !== $this->height && 0 !== intval($this->height)) {
            $array['height'] = $this->height;
        }

        if (null !== $this->width && 0 !== intval($this->width)) {
            $array['width'] = $this->width;
        }

        if (true === $this->transparent || 'yes' == $this->transparent || '1' == $this->transparent) {
            $array['transparent'] = '1';
        } else {
            $array['transparent'] = '0';
        }

        if (null !== $this->edge && 0 !== intval($this->edge)) {
            $array['edge'] = $this->edge;
        }

        if (null !== $this->penwidth && 0 !== intval($this->penwidth)) {
            $array['penwidth'] = $this->penwidth;
        }

        if (true === $this->border || 'yes' == $this->border || '1' == $this->border) {
            $array['border'] = '1';
        } else {
            $array['border'] = '0';
        }

        if (true === $this->testmode || 'yes' == $this->testmode || '1' == $this->testmode) {
            $array['testmode'] = '1';
        } else {
            $array['testmode'] = '0';
        }

        return $array;
    }
}

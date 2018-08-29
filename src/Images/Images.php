<?php

namespace SlimCD\Images;

use SlimCD\SlimCD;

/**
 * Class Images
 * @package SlimCD\Images
 */
class Images extends SlimCD implements \SlimCD\Interfaces\Images
{
    /**
     * @param DownloadSignatureRequest $request
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function downloadSignature(DownloadSignatureRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=DownloadSignature", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param DownloadReceiptRequest $request
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function downloadReceipt(DownloadReceiptRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=DownloadReceipt", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param DownloadCheckRequest $request
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function downloadCheck(DownloadCheckRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=DownloadCheck", $timeout, $request->jsonSerialize()));
    }


    /**
     * @param UploadSignatureRequest $request
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function uploadSignature(UploadSignatureRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->transactionUrl . "/soft/json/jsonscript.asp?service=UploadSignature", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param UploadReceiptRequest $request
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function uploadReceipt(UploadReceiptRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->transactionUrl . "/soft/json/jsonscript.asp?service=UploadReceipt", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param UploadCheckRequest $request
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function uploadCheck(UploadCheckRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->transactionUrl . "/soft/json/jsonscript.asp?service=UploadCheck", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param GetReceiptRequest $request
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function getReceipt(GetReceiptRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetReceipt", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param SendReceiptRequest $request
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function sendReceipt(SendReceiptRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->transactionUrl . "/soft/json/jsonscript.asp?service=SendReceipt", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param GetSignatureImageRequest $request
     * @param bool $timeout
     * @return mixed|object
     * @throws \Exception
     */
    public function getSignatureImage(GetSignatureImageRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->transactionUrl . "/soft/json/jsonscript.asp?service=GetSignatureImage", $timeout, $request->jsonSerialize()));
    }
}

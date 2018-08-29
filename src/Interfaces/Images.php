<?php

namespace SlimCD\Interfaces;

use \SlimCD\Images\DownloadSignatureRequest;
use \SlimCD\Images\DownloadReceiptRequest;
use \SlimCD\Images\DownloadCheckRequest;
use \SlimCD\Images\UploadSignatureRequest;
use \SlimCD\Images\UploadReceiptRequest;
use \SlimCD\Images\UploadCheckRequest;
use \SlimCD\Images\GetReceiptRequest;
use \SlimCD\Images\SendReceiptRequest;
use \SlimCD\Images\GetSignatureImageRequest;

interface Images
{
    public function downloadSignature(DownloadSignatureRequest $request, $timeout = false);
    public function downloadReceipt(DownloadReceiptRequest $request, $timeout = false);
    public function downloadCheck(DownloadCheckRequest $request, $timeout = false);
    public function uploadSignature(UploadSignatureRequest $request, $timeout = false);
    public function uploadReceipt(UploadReceiptRequest $request, $timeout = false);
    public function uploadCheck(UploadCheckRequest $request, $timeout = false);
    public function getReceipt(GetReceiptRequest $request, $timeout = false);
    public function sendReceipt(SendReceiptRequest $request, $timeout = false);
    public function getSignatureImage(GetSignatureImageRequest $request, $timeout = false);
}

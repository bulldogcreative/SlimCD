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

/**
 * Interface Images
 * @package SlimCD\Interfaces
 */
interface Images
{
    /**
     * Download a signature from the database.
     *
     * Downloads the vector signature data that was stored for a specific gateid.
     * The data is returned as vector-encoded hex bytes.
     *
     * @param DownloadSignatureRequest $request
     * @param bool $timeout
     * @return mixed
     */
    public function downloadSignature(DownloadSignatureRequest $request, $timeout = false);

    /**
     * Download a receipt from the database.
     *
     * Downloads the receipt data that was stored for a specific gateid. The
     * check data is returned in the same format as was used for upload.
     * Data is base-64 encoded.
     *
     * @param DownloadReceiptRequest $request
     * @param bool $timeout
     * @return mixed
     */
    public function downloadReceipt(DownloadReceiptRequest $request, $timeout = false);

    /**
     * Download a check from the database.
     *
     * Downloads the check data that was stored for a specific gateid. The check
     * data is returned in the same format as was used for upload. Data is
     * base-64 encoded.
     *
     * @param DownloadCheckRequest $request
     * @param bool $timeout
     * @return mixed
     */
    public function downloadCheck(DownloadCheckRequest $request, $timeout = false);

    /**
     * Upload a signature image to the database.
     *
     * Stores a series of vectors on the SLIM CD server so they can be retrieved
     * at a later date.Vectors are in hex. They can be in one of the four
     * formats.
     *
     * @param UploadSignatureRequest $request
     * @param bool $timeout
     * @return mixed
     */
    public function uploadSignature(UploadSignatureRequest $request, $timeout = false);

    /**
     * Upload a receipt image to the database.
     *
     * Stores a receipttext or image on the SLIM CD server so that it can be
     * retrieved at a later date. Data is base-64 encoded.
     *
     * @param UploadReceiptRequest $request
     * @param bool $timeout
     * @return mixed
     */
    public function uploadReceipt(UploadReceiptRequest $request, $timeout = false);

    /**
     * Upload a check image to the database.
     *
     * Stores a check image on the SLIM CD server so that it can be sent to the
     * processor for check conversion purposes. Data is base-64 encoded.
     *
     * @param UploadCheckRequest $request
     * @param bool $timeout
     * @return mixed
     */
    public function uploadCheck(UploadCheckRequest $request, $timeout = false);

    /**
     * Retrieves a plain-text receipt.
     *
     * GetReceipt returns a content-type of text/plain that contains the data
     * for the receipt. If an error occurs, GetReceipt sets the HTTP status code
     * and status text to represent the error. If successful, the status code is
     * set to 200 and the text for the receipt is returned as the body of the
     * response.
     *
     * @param GetReceiptRequest $request
     * @param bool $timeout
     * @return mixed
     */
    public function getReceipt(GetReceiptRequest $request, $timeout = false);

    /**
     * Sends a receipt via email or SMS-text.
     *
     * Email or SMS-Text delivery of receipts is performed with this function.
     * The text for receipts is generated using information on file with SLIM CD
     * , so the receipts match those produced by the SLIM CD website. Receipts
     * for SMS-Text are abbreviated versions that show a simpler version of the
     * data.
     *
     * @param SendReceiptRequest $request
     * @param bool $timeout
     * @return mixed
     */
    public function sendReceipt(SendReceiptRequest $request, $timeout = false);

    /**
     * Retrieves a bitmap version of the vector signature.
     *
     * Upon success, GetSignatureImage returns a status code of 200, a
     * content-type based on the type of image requested, and binary data that
     * represents the image. Supported image types include PNG, JPG, BMP, ICON,
     * TIFF. In the case of an error, the content type is set to text/plain, the
     * body contains text representing the error, the HTTP status code us set to
     * an error code (not 200) and status text to represent the error.
     *
     * @param GetSignatureImageRequest $request
     * @param bool $timeout
     * @return mixed
     */
    public function getSignatureImage(GetSignatureImageRequest $request, $timeout = false);
}

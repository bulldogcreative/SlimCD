<?php

namespace SlimCD\Transact;

use SlimCD\jsonSerializeTrait;

/**
 * Class ProcessTransactionRequest.
 *
 * ProcessTransaction can be used to process SALE, AUTH/FORCE, VOID, CREDIT,
 * TIPEDIT, UPDATE, and other transaction types. ProcessTransaction supports
 * credit, debit, gift/loyalty and check processing. ProcessTransaction can
 * accept direct payment data (such as cardnumber, track data, or check
 * information) or can use tokenized data to charge cards already on file with
 * SLIM CD.
 */
class ProcessTransactionRequest
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
     * @var string
     */
    public $metabankid = '';

    /**
     * @var string
     */
    public $bankid = '';

    /**
     * Assigned by the Slim CD administrator.
     *
     * @var string
     */
    public $clientid = '';

    /**
     * Assigned by the Slim CD administrator.
     *
     * @var string
     */
    public $siteid = '';

    /**
     * Assigned by the Slim CD administrator.
     *
     * @var string
     */
    public $priceid = '';

    /**
     * Product Name (Application name).
     *
     * @var string
     */
    public $product = '';

    /**
     * @var string
     */
    public $ver = '';

    /**
     * SDK developer key obtained from Slim CD.
     *
     * @var string
     */
    public $key = '';

    /**
     * @var string
     */
    public $kiosk = '';

    /**
     * Contains the value “yes” or “no” for a card reader at the merchant’s
     * location.
     *
     * @var string
     */
    public $readerpresent = '';

    /**
     * @var string
     */
    public $contactlessreader = '';

    /**
     * Default is blank, which causes automatic detection based on input. Valid
     * option list will change, but currently:  IDTECH, POSX, MAGTEK.  Note that
     * all devices default to KB mode, but HID mode can be used if trackdata is
     * sent as all HEX digits.
     *
     * @var string
     */
    public $encryption_device = '';

    /**
     * Default is blank, which defaults to TDES. Valid option list will change,
     * but currently: TDES or AES.
     *
     * @var string
     */
    public $encryption_type = '';

    /**
     * @var string
     */
    public $encryption_key = '';

    /**
     * First name of cardholder.
     *
     * @var string
     */
    public $firstname = '';

    /**
     * Last name of cardholder.
     *
     * @var string
     */
    public $lastname = '';

    /**
     * Cardholder address.
     *
     * @var string
     */
    public $address = '';

    /**
     * City.
     *
     * @var string
     */
    public $city = '';

    /**
     * State.
     *
     * @var string
     */
    public $state = '';

    /**
     * Zip.
     *
     * @var string
     */
    public $zip = '';

    /**
     * Country.
     *
     * @var string
     */
    public $country = '';

    /**
     * Phone.
     *
     * @var string
     */
    public $phone = '';

    /**
     * Email.
     *
     * @var string
     */
    public $email = '';

    /**
     * YYMMDD format for the date of birth.
     *
     * @var string
     */
    public $birthdate = '';

    /**
     * Drivers License, SSN, Military ID or Passport ID number, or Base64
     * Driver’s License bar code binary data.
     *
     * @var string
     */
    public $driverlic = '';

    /**
     * @var string
     */
    public $ssn = '';

    /**
     * Gateway ID for previous transaction.
     *
     * @var string
     */
    public $gateid = '';

    /**
     * @var string
     */
    public $use_pooled = '';

    /**
     * Returned by processor from previous transaction, if available.
     *
     * @var string
     */
    public $processor_token = '';

    /**
     * @var string
     */
    public $temporary_token = '';

    /**
     * GC for gift card or LC for loyalty card.
     *
     * @var string
     */
    public $cardtype = '';

    /**
     * Contains the value “yes” or “no”.
     *
     * @var string
     */
    public $corporatecard = '';

    /**
     * Card swipe track data.
     *
     * @var string
     */
    public $trackdata = '';

    /**
     * Card number – used for verification.
     *
     * @var string
     */
    public $cardnumber = '';

    /**
     * Expiration month (MM).
     *
     * @var string
     */
    public $expmonth = '';

    /**
     * Exp year (YYYY or YY).
     *
     * @var string
     */
    public $expyear = '';

    /**
     * CVV2.
     *
     * @var string
     */
    public $cvv2 = '';

    /**
     * @var string
     */
    public $seccode = '';

    /**
     * Contains the encrypted pin code and decryption key from the pinpad. This
     * variable is processor-specific, and should be replaced by using the
     * “pinblock” and “ksn” values as separate fields.
     *
     * @var string
     */
    public $pinblockdata = '';

    /**
     * @var string
     */
    public $pinblock = '';

    /**
     * The Key Serial Number from the pinpad, to be used with “pinblock” as a
     * replacement for the larger “pinblockdata” that contains both fields in
     * one.
     *
     * @var string
     */
    public $ksn = '';

    /**
     * Must contain the value ‘yes’.
     *
     * @var string
     */
    public $checks = '';

    /**
     * Indicates presence of MICR reader – “yes” or “no”.
     *
     * @var string
     */
    public $micrreader = '';

    /**
     * @var string
     */
    public $accttype = '';

    /**
     * Business, personal, or savings.
     *
     * @var string
     */
    public $checktype = '';

    /**
     * Bank routing number on check.
     *
     * @var string
     */
    public $routeno = '';

    /**
     * Account number on check.
     *
     * @var string
     */
    public $accountno = '';

    /**
     * Check number on the check.
     *
     * @var string
     */
    public $checkno = '';

    /**
     * @var string
     */
    public $fullmicr = '';

    /**
     * Check value.
     *
     * @var string
     */
    public $serialno = '';

    /**
     * 2 letter state code.
     *
     * @var string
     */
    public $statecode = '';

    /**
     * @var string
     */
    public $achcode = '';

    /**
     * @var string
     */
    public $transtype = '';

    /**
     * 	Amount to credit (USD).
     *
     * @var string
     */
    public $amount = '';

    /**
     * Client-supplied transaction identifier, (i.e. receipt number) which will
     * be passed to the credit card network for specific industry types.
     *
     * @var string
     */
    public $clienttransref = '';

    /**
     * Purchase order number – used in purchase card data.
     *
     * @var string
     */
    public $po = '';

    /**
     * @var string
     */
    public $salestaxtype = '';

    /**
     * Decimal / purchase card data.
     *
     * @var string
     */
    public $salestax = '';

    /**
     * Auth code received for Offline Transactions.
     *
     * @var string
     */
    public $authcode = '';

    /**
     * This contains the amount paid as cash back to the consumer.
     *
     * @var string
     */
    public $cashback = '';

    /**
     * @var string
     */
    public $surcharge = '';

    /**
     * @var string
     */
    public $gratuity = '';

    /**
     * @var string
     */
    public $Allow_Partial = '';

    /**
     * @var string
     */
    public $allow_duplicates = '';

    /**
     * @var string
     */
    public $blind_credit = '';

    /**
     * @var string
     */
    public $extra_credit = '';

    /**
     * @var string
     */
    public $recurring = '';

    /**
     * @var string
     */
    public $installmentcount = '';

    /**
     * @var string
     */
    public $installmentseqno = '';

    /**
     * @var string
     */
    public $billpayment = '';

    /**
     * @var string
     */
    public $debtindicator = '';

    /**
     * @var string
     */
    public $clientip = '';

    /**
     * @var string
     */
    public $clerkname = '';

    /**
     * @var string
     */
    public $cardpresent = '';

    /**
     * @var string
     */
    public $contactless = '';

    /**
     * @var string
     */
    public $send_email = '';

    /**
     * @var string
     */
    public $send_cc = '';

    /**
     * @var string
     */
    public $send_sms = '';

    /**
     * @var string
     */
    public $cc_email = '';

    use jsonSerializeTrait;
}

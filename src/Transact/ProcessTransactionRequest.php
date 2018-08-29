<?php

namespace SlimCD\Transact;

use SlimCD\jsonSerializeTrait;

/**
 * Class ProcessTransactionRequest.
 */
class ProcessTransactionRequest
{
    public $username = '';
    public $password = '';
    public $metabankid = '';
    public $bankid = '';
    public $clientid = '';
    public $siteid = '';
    public $priceid = '';
    public $product = '';
    public $ver = '';
    public $key = '';
    public $kiosk = '';
    public $readerpresent = '';
    public $contactlessreader = '';
    public $encryption_device = '';
    public $encryption_type = '';
    public $encryption_key = '';
    public $firstname = '';
    public $lastname = '';
    public $address = '';
    public $city = '';
    public $state = '';
    public $zip = '';
    public $country = '';
    public $phone = '';
    public $email = '';
    public $birthdate = '';
    public $driverlic = '';
    public $ssn = '';
    public $gateid = '';
    public $use_pooled = '';
    public $processor_token = '';
    public $temporary_token = '';
    public $cardtype = '';
    public $corporatecard = '';
    public $trackdata = '';
    public $cardnumber = '';
    public $expmonth = '';
    public $expyear = '';
    public $cvv2 = '';
    public $seccode = '';
    public $pinblockdata = '';
    public $pinblock = '';
    public $ksn = '';
    public $checks = '';
    public $micrreader = '';
    public $accttype = '';
    public $checktype = '';
    public $routeno = '';
    public $accountno = '';
    public $checkno = '';
    public $fullmicr = '';
    public $serialno = '';
    public $statecode = '';
    public $achcode = '';
    public $transtype = '';
    public $amount = '';
    public $clienttransref = '';
    public $po = '';
    public $salestaxtype = '';
    public $salestax = '';
    public $authcode = '';
    public $cashback = '';
    public $surcharge = '';
    public $gratuity = '';
    public $Allow_Partial = '';
    public $allow_duplicates = '';
    public $blind_credit = '';
    public $extra_credit = '';
    public $recurring = '';
    public $installmentcount = '';
    public $installmentseqno = '';
    public $billpayment = '';
    public $debtindicator = '';
    public $clientip = '';
    public $clerkname = '';
    public $cardpresent = '';
    public $contactless = '';
    public $send_email = '';
    public $send_cc = '';
    public $send_sms = '';
    public $cc_email = '';

    use jsonSerializeTrait;
}

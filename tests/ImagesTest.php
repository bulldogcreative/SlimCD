<?php

use SlimCD\Images\Images;
use PHPUnit\Framework\TestCase;

class ImagesTest extends TestCase
{
    public function testFake()
    {
        $this->assertTrue(true);
    }
    public function testInstantiateImagesClass()
    {
        $testObject = new Images();
        $this->assertInstanceOf('SlimCD\Images\Images', $testObject);
    }

    public function testDownloadCheckRequest()
    {
        $testObject = new \SlimCD\Images\DownloadCheckRequest();
        $testObject->username = 1032;
        $testObject->password = 289075;
        $testObject->gateid   = 0;
        $this->assertInstanceOf('\SlimCD\Images\DownloadCheckRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testDownloadReceiptRequest()
    {
        $testObject = new \SlimCD\Images\DownloadReceiptRequest();
        $testObject->username = 1032;
        $testObject->password = 289075;
        $testObject->gateid   = 78022528;
        $this->assertInstanceOf('\SlimCD\Images\DownloadReceiptRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testDownloadSignatureRequest()
    {
        $testObject = new \SlimCD\Images\DownloadSignatureRequest();
        $testObject->username = 1032;
        $testObject->password = 289075;
        $testObject->gateid   = 78022528;
        $this->assertInstanceOf('\SlimCD\Images\DownloadSignatureRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testGetReceiptRequest()
    {
        $testObject = new \SlimCD\Images\GetReceiptRequest();
        $testObject->username = 1032;
        $testObject->password = 289075;
        $testObject->gateid   = 78022528;
        $this->assertInstanceOf('\SlimCD\Images\GetReceiptRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testGetSignatureImageRequest()
    {
        $testObject = new \SlimCD\Images\GetSignatureImageRequest();
        $testObject->username = 1032;
        $testObject->password = 289075;
        $testObject->gateid=78829536;
        $testObject->imgflag='PNG';
        $testObject->height=null ;
        $testObject->width=null ;
        $testObject->transparent='yes';
        $testObject->edge = null ;
        $testObject->penwidth = null ;
        $testObject->border = '';
        $testObject->testmode='';
        $this->assertInstanceOf('\SlimCD\Images\GetSignatureImageRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testSendReceiptRequest()
    {
        $testObject = new \SlimCD\Images\SendReceiptRequest();
        $testObject->username   = 'R6UT8C6M';
        $testObject->password   = '';
        $testObject->gateid     = 78022528;
        $testObject->send_sms   = 'no';
        $testObject->phone      = '';
        $testObject->send_email = 'no';
        $testObject->email      = '';
        $testObject->send_cc    = 'no';
        $testObject->ccemail    = '';
        $this->assertInstanceOf('\SlimCD\Images\SendReceiptRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testUploadCheckRequest()
    {
        $testObject = new \SlimCD\Images\UploadCheckRequest();
        $testObject->username  = 1032;
        $testObject->password  = 289075;
        $testObject->siteid    = 228226448;
        $testObject->gateid    = 78022528;
        $testObject->filetype  = 'T';
        $testObject->imagedata = 'SUkqAGoBAABBMDVMSDk3LTEyMDIwMjEwMTIxNwAAVDM2NDAyODIxMFQgMjQ5MCBPMzIyNDQ3MjExMU8ATWFnVGVrLCBJbmMuAABNSUNSSW1hZ2UgUlMyMzIgKCBBMDVMSDk3KQAAPFBBRE9DIFZFUj0nNCcgSVJOPScgQTA1TEg5Ny0xMjAyMDIxMDEyMTcnIFNFUT0nMScgTUFLPSdNYWdUZWssSW5jJyBNREw9J01JQ1JJbWFnZVJTMjMyJyBPQz0nUkRNMDAwMDAwNTI0MScgQU1UPScxLjAwJyBEQVRFPScyMDEyLTAyLTAyJyBUSU1FPScxMDoxMjoxNycgTUVSQz0nQi4wMTA3NTM0MTMwMCcvPgBNSTEuMDcuMjhKAAAyMDEyOjAyOjAyIDEwOjEyOjE3AFRoaXMgd2FzIGFkZGVkIGJ5IHRoZSAgVHJhbnNDbGllbnQAAMgAAAABAAAAyAAAAAEAAAAWAP4AAwABAAAAAAAAAAABAwABAAAAwAQAAAEBAwABAAAAHwIAAAMBAwABAAAABAAAAAYBAwABAAAAAAAAAAoBAwABAAAAAQAAAA0BAgAVAAAACAAAAA4BAgAeAAAAHgAAAA8BAgANAAAAPAAAABABAgAbAAAASgAAABEBBAABAAAAeAIAABIBAwABAAAAAQAAABYBAwABAAAAHwIAABcBBAABAAAAAA0AABoBBQABAAAAWgEAABsBBQABAAAAYgEAAB0BAgCwAAAAZgAAACUBBAABAAAAAAAAACgBAwABAAAAAgAAADEBAgALAAAAFgEAADIBAgAUAAAAIgEAAACAAgAjAAAANgEAAAAAAAAjgdgZy2DUN///lpFiLokZdF8j5fJCLxHRHzwpHGXZgiOZvNeR8wy8RyLxfL5Hy8UZHziN5wyPnowRHiPkfLovl43mbNCk3A0eRoiMzPIPLovkfL5HzmcRqMwiPlzLmYiPG80iOiORHzNkcZhkcjZF8jkcEOMnZcQjkR8uZHy R4jx I RzLo8jTOZwzyMI6x/JEYwlYIELBCIsrgiOpVClKIuIbERHEJEfQQiIiIsEIiSEdHO4ZVc4iRkcQzRHi8YZhEeI8cRhlQiQi fRqMj5HRhHkeZ5F8j5fNmdcjojo5m85mmeRjJ78nQiUQsFQuPkjFRghERFlARXlTKQCERGVqEMKER6EMFbKG0zhqhERERERZW6z7WzmRM4RZRAn1sQh6FnufyeXFlUPoF8ER9aFIdoRyPuwg4QYpEfzCHERFxFREUCERERERERSURiIiIiIiIiIiIgkIiIiIiIiIjiI4jKxiIllviMqmX7pSFmJBHSJcMEdggeCXCcMoH7kEmUDIs8vNAhgvel9eH9jQV8HWQSMhWsXH2HJYvDdKTRJxYQQ D/335c vusfiv8lH7UWhMziMlCpEdR4yL/O1SJEUMikQYhPEXKJFozj7Ps0icICBggYIM2DBxhEO5fsIhML8nhY5DswlJCZYZPegVQgwg1tNO5Dj0v4e/YJhQg4UKnYWXDROHLhy4bMfyzyhy4 ky43p9Zb5n Hp0g3T/vXvTfQbl24Uu/6Gn/p98e6/3 vp6puDg8jvh/W64f634X/wv/9B/xVfwchLpSFi8Vv Gvr/f//sPv/ 0vHOphB3/Zo// DcxHZj XD/9Qg09f7H8u23 D8fS4b4/VB91/giP/v1al9vrv32vBKXcGCj79X/2ulf/ t9pJJN7Ui9rHH/FMcVIXKIcch7xSIfMZc4dP3H6r9qvr/ nLMVD30Xb 01 wgwgwt3fhPUFT/pPEREREREREREREX/q9/7//5KUWr9//7rX Ot/aX21352gZgOQxDgUjgYLhDwpsIbZxlwhmKdQpdmtnzOBD0fNirCXDBKE HHad/YT8IMINVCdRXHkx2/ISCFcj5om7kx38uHJjtljgtPwW2E1hhSU8Jz1LtzaG4xzdp4QP9B0EHSHlvmiZnouIkRiMVH//3H3/3//roR39f/brv9C OOkZ0itIWg/5CfkJDCoGhWtheRIhILSoOwfH9xQYP KzZJ10v2 vhYbv/ 7utlw53oXCm0zHLiDs/P2aHuzUg4bXrg3yz/oNh9/SD4fzp3/87m//7y71X77X7kWNd 0s4  /tbStL7Uu Qk2iY9V20rH iH6iCDrY44/Y9bior45KFX//tU17f9V9cMJ2mg1QYIRDBCDBCIM04kPBhBhCIMKIiIiIiItCIjCx dzCmGcZqZ9nzJDNI8RQZ9n2fO34TCaYQahMJgmEGE  mmmmF7vvLt/LfLdzRlv2fQ0ZoczuZ//rp/31x3rpv9hb/7aw8joRUbr qHH3WK92lH9Cv49e7X/TNm/dLmjLikmvYXzR9Usb20prH5Z/u8z6SfdQlwRH//696Czd/C6uuuXrW1tS8qppGK0k7W1/8VFR3IW8fGiFHFR9/aDTC6wwthUGgwoiIiIiIiIiI/y1r5ausYInzBFyOcgQOTcj2kWCI vBEeCyY5hxbC9NrPGmOnPIwjHBf8V57oER/XHh4pBEdY/xWiTktmPpQoS60rv2RycNpawRHueJ7qjQIt0vp0tv/PgPS6X/  aZj4X/ug 8fESO x1EERx9hDJwhSYXTURERERGWn0UUEGE6o0PNDq9OvH271/6r6 l/ En9fS1pHk3VD FYrTCiPlmFecz0YzGXA8CggYHhZZwMMkGoY//8tUlBCOZFwby0y0MkDFf/ZDJFPyNdH/f///lpk7X53Rn48MzjYnBA 1CD0D4Qf6a2//k7fLtp0Tc4726Sd8P639ab92tb79e//H0v/X/f//v3//8P4r//H9//YP9L1eGHtNrqElg38Vx9nHftdPw 0GFwSzuoZ9GzMGYClxmYLlwx IiPYah2nmcORjmHTNBolmCj3/M 3on0g5Pj9CV04YNA0GYU0I6DMDNDNhoKcOSAQ0Bc0DQRBev91utK/ HoPd/CacP//6wRHm0v/a7wn1fpoO9W9L u8f/kcpGuMff/pp3rEf4odr/jmHyf2TTkefvZYES6iP7J/ZMDVb5vf/z5ocN9Bv/0g3Qbw3hMNf0d//3  l/f/T76gwX g371/7dUP36Qr/0Gv  t/VZxf9f/t7eyY//hftsJJ3hD /75BjTWvIEahf/f8MQv2vkGM/Jj9a/ FY1xERERER//pv/31H///3/9fX//99k3LH/3snQL/8tP/joRv/ofX//v5R9V/H/yg/3 Dtbq7 l2v/tq3qv87EMmUaX7/2/rrr9wgzApsU2EI4oIMwJrwwl/7DCUMJaX9Gts8NnsMM WZ2jY2a8VDI4VjkCI7yBGopjjkM4jWn328Xftx0La/dNpqk8Gdvqt/vr0/C2v/aYVdD31/MLX1rYX74aDULv8Qu44pbka4EQuqOm0wmEIZcGsIQZMkCYLr/PGvmeIiIiIiIj d/WMER7rHvt/ /3S719u19rvpYIp7bpdik4iEEPbikybLQQ8DQRUyYA8GQuGQGrDBCIiIYQkgCWBxEWQaoO5DIBeyFHIMM1aEREf////LVJmVZFSHLUMwcEDOChToZ4FwQcMvAwi YYQMLBl85ufDaTfrtpB 2k3977fff5x9dj7/0n1ZHsPerf7wkyF3PX/p4hBh//0LlwjqX7r mwb9fmfmmj 9sxfV1Vdd 3 laWlhJb3uuCTaWFTCH2w4YSlpEBkBqhCEGIQQiIYQhsRUm6lmoUjkRwNQ0zGRzZlAIRGQoDaGqRwhuKfERHIHgpcQwOXxEahKIiP/5XKaVyInYQcJpru7v8yNEv/ yqLqEnYTURENR/zJSBtIZkGCpBUwnCapwuv0oS1pdZDqeRWmloFpUF1p l11XX6duv/v98 DTyCq01GmrB9dh/2/u/1b7WG5J2OSjNQSRATxBuiN3753v/X///vjXfsV6yTtePrKv8JfzUCn/r sfr9Snj/vWwrTTBWKERhhWoTotw6TeEHi8cpw8eRAtPPzpP///4/HLSGRDZoEOmaCnmThZZiWZyOCHAQ8ZxlwQEDCBhECOaD1 mrfphPu//Ya9lnJO5OGeM41l29ltw70XjBlkPqE9NtfT/vp//dJ/u6/ /fpDv/hdEK3 9ft0Q76/RY Pvf/r5sf/t/5Y43 WONkv/ ly8bstuHv/8FtWvx061/X33Db/p/33v6ftbX/X 8MJd8hLHFfL5xyHHII3z2P3QbtX11/dhe GRjwwv3YJpqImmIiIiIiIiIx/LNjJjOudM3n8 M1EeZ6MBzgz0cOWYZhlIM80Gcap2EGEH EHpbT u9NP 9KGR4Tj93/LzJw/lnJx0oO0HXv79tJ/6biv// kNNfVDRklMwyOL/ljvuu/xjkK r2/H/LH/fnD/0/nt9Kn3b Zx4T/7jv1rfx  /L7Mj l2bHH7/4P/5 ZncR79f/384f9rtyFcLq96v72sP 7Xb59wvzd /eNivRBHFf8rZnAwRzOGYF/W93/dr8Nbf3RcGiG6Rrf3vr 7te7W8znf/cN/TiIiIiIiIiIiIiIiO/HVb/3BEfr2qBwRH/ yhxBEfguKX / /0K8EU/7y1cBfO/ddrdIswYzEXBbAn3WoX1tIt5xSRwD0dhYLYKxsZHznCZHwhFJimGKMwMw1xERiIiIj////// TQZICEgIdTIwOawhOHNYQ6mdAQlxkqCFBkQC5OCHbhTWFOoUnMlyIQHOgc6DIwZEFu01CDtO1QadrhMgpXemq/5UDr n/p/9pu7/v nynbNfk6SXbN0hHyz8hT5j0Wh5EMqGQd8v5Bt3 VUnf m/fDpOfP/6yNxj6/99w4ckMvfVeuv/f//99P//Xff//v //////9fv///arH///3//3/36/f/4/ v/ Nf/r/ P//////r///  nX//4X/BdV79Ptf/OopGBDqE8EjWEr6/lQF/yGFQzUF/ySB P9pwTCS ggtr3te/ gg6/6//GH68KvXxOyz4bkQcs/4UjvQQN/hZ6NYT yYFky5dU8846lhCEqISohJ8eRoovOH82iDzF3Xy66ZEF oeq06T6TTuv96//3/2n//XDCoNe//5wfNTH//p eHx///HGv//T9/// 0////v/// ax////lIP//ykGRA3/37X 9//v17 oj  v Ix/XtK9b7Ue/hqsORQn7/K4muUAiHsVITxyE0x8hS/Yo7NQeQuoP Q n 6 1/tf7X/T  NoNBppp2naYTQdoNMINNEQYaDQhhEuxGIiIiIiIiIiIiIiP///// ACACA';
        $this->assertInstanceOf('\SlimCD\Images\UploadCheckRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testUploadReceiptRequest()
    {
        $testObject = new \SlimCD\Images\UploadReceiptRequest();
        $testObject->username  = 1032;
        $testObject->password  = 289075;
        $testObject->siteid    = 228226448;
        $testObject->gateid    = 78022528;
        $testObject->filetype  = 'X';
        $testObject->imagedata = 'text receipt';
        $this->assertInstanceOf('\SlimCD\Images\UploadReceiptRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testUploadSignatureRequest()
    {
        $testObject = new \SlimCD\Images\UploadSignatureRequest();
        $testObject->username  = 'R6UT8C6M';
        $testObject->username  = 1032;
        $testObject->password  = 289075;
        $testObject->siteid    = 228226448;
        $testObject->gateid    = 78022528;
        $testObject->filetype  = 1;
        $testObject->imagedata = '030010D613508A6908A6908A6908A6908A6908A6908A6908B6908B6908B6908C6908C6908D6A08D6A08E6A08E6A08F6A0906A0916A0926A0926909369094690966809667098660996509A6409B6309C6209D6009D5F09E5E09F5D0A05B0A15A0A1580A2570A3550A3530A4510A5500A64E0A64C0A74A0A8490A8480A9460AA450AA440AB430AB420AB410AC400AC400AC400AB410AB410AB420AB430AA440A9450A9450A8470A8480A7490A64A0A64B0A54C0A44E0A34F0A3500A2510A2530A1540A05509F5709F5809E5909E5A09D5B09C5D09C5E09B5F09B6009A61099620996309865097660966709668095690946A0936B0926C0926D0916E0906F08F7108E7208D7208D7308C7408C7508B7608B7608A770897808978088790887A0877B0877B0867C0867C0857D0857D0847E0847E0837E0837E0837E0827E0827E0827E0817E0817E0807E0807F0807E0807E07F7E07F7E07F7E07F7E07E7E07E7E07E7E07E7E07F7D07F7D07F7C07F7C07F7B0807B0807A081790827808377084760867508774088730897208A7108B7108C7008C7008D7008D7008D7008D7008E7008E7008E7008E7108E7208E7208F7308F7308F7408F7508F75090760907709077091780917809278092790937909479095790967909679097780987809878099780997809A7809A7809A7809B7809B7809B7809B7809B7809A7009A7009A7009970099700997009871098710987109871098710987109871098710A5770A5770A5770A5780A4780A4780A4780A4780A4780A4780A5780A5780A6780A6780A7780A8770A9760AA750AB740AD720AE700B06E0B16C0B36A0B4680B5660B6640B8620B9600BA5F0BA5D0BB5C0BC5A0BC5A0BD590BD590BD590BD590BD590BC590BC5A0BB5B0BB5C0BA5E0B95F0B9600B8620B8630B7640B7650B7660B7660B7670B7680B7680B8690B8690B9690B9690BA690BB690BC680BD670BE660C0650C1630C2610C45F0C55D0C65C0C85A0C8590C9570CA570CA560CA560CA570C9580C85A0C75C0C55E0C3610C2640C1660C0690BF6B0BF6D0BF6F0C0700C1710C2710C3720C3720C3720C3720CB720CA720CA720CA720CA720CA720CA720CB720CC720CC710CE700CF6F0D16E0D26C0D46B0D5690D6670D8660D8640D9620DA600DB5E0DC5C0DD5A0DE580DE570DF550E0540E0520E0510E1510E1500E1500E0510E0510DF530DE540DC560DB590D95B0D85D0D65F0D5620D4640D2660D1690D06B0CF6C0CE6E0CD700CC710CC720CC730CC740CC750CC750CC750CD750CD760CE750CF750D0750D1740D2740D3730D5730D6720D7720D8710D9710DA710DB700DC700DC700DD700DE6F0DE6F0DF6F0DF6F0E06F0E0700E1700E26F0E36F0E46F0E56F0E66F0E76E0E76E0E86E0E86E0E96E0E96F0E96F0E96F0E96F0E9700E9700E9700EA700EA710EA700EB700EC700EE6F0F06D0F26C0F4690F6670F9640FB610FD5E0FF5A1025710354105511074E1084B1094910948109461094510945108451074510546103481004C0FC500F9540F55A0F25F0EF630ED680EA6C0E8700E7740E5770E47A0E37C0E27D0E17E0E17E0E17F0E17F0E27F0E27F0E37F0E57E0E67D0E97B0EB780EE750F2720F66E0FB69100651066010C5A112571175411D5112151125501274F1275012750';
        $this->assertInstanceOf('\SlimCD\Images\UploadSignatureRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }
}

<?php


$apiHost = "https://zendmoney.com/zendPartnerapidev/api";
$partnerId = "00020";
$partnerKey = "9943593047F844F3B3440BF9D9208617";
$zendKey = "azQgMlwUxXl8Zx2T";
$timestamp = strftime('%Y-%m-%dT%H:%M:%SZ', strtotime(date('Y-m-d H:i:s')));
// $sequenceNumber = "000119";



/**
 * PROFILE USER REGULER
 */

// $firstName = "lorem";
// $lastName = "ipsum";
// $idType = "KTP";
// $idNumber = "3173041234567890";
// $idIssuePlace = "jakarta";
// $idIssueDate = "1989-10-21";
// $idExpiryDate = "2030-10-21";
// $birthDate = "1989-10-21";
// $email = "lorem@gmail.com";
// $gender = "Male";
// $phoneNumber = "6281234567890";
// $address1 = "jl.test";
// $address2 = "no 12 rt 12 rw 2";
// $city = "jakarta";
// $postCode = "11140";
// $state = "DKI JAKARTA";
// $country = "INDONESIA";
// $nationality = "INDONESIA";
// $answer1 = "haha";
// $answer2 = "hihi";





/**
 * PARTNER KEY ZMARTTOKEN
 */

$rand_number = mt_rand(10, 999);
$sequenceNumber = sprintf("%06s", $rand_number);

$zmartPartnerKey =  hash_hmac('sha256', $partnerId . $partnerKey . $timestamp . $sequenceNumber, $zendKey, true);
$zmartSign =  base64_encode($zmartPartnerKey);
echo $zmartSign;
echo "<br>";
echo $timestamp;
echo "<br>";
echo $sequenceNumber;
echo "<br>";
echo "<br>";
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://zendmoney.com/ZendPartnerAPIDev/api/ZmartToken',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'PartnerID: 00020',
        'PartnerKey: ' . $zmartSign,
        'TimeStamp: ' . $timestamp,
        'SequenceNumber: ' . $sequenceNumber
    ),
));

$response = curl_exec($curl);

curl_close($curl);
// echo $response;
$result = json_decode($response, true);
echo $result['token'];
echo "<br>";
echo "<br>";



/**
 *  KYC
 */

// $rand_numberKYC = mt_rand(100, 9999);
// $sequenceNumberKYC = sprintf("%06s", $rand_numberKYC);

// $kycPartnerKey =  hash_hmac('sha256', $partnerId . $partnerKey . $firstName . $lastName . $idType . $idNumber . $idIssuePlace . $idIssueDate . $idExpiryDate . $birthDate . $email . $gender . $phoneNumber . $address1 . $address2 . $city . $postCode . $state . $country . $nationality . $answer1 . $answer2 . $timestamp . $sequenceNumberKYC, $zendKey, true);
// $kycSign =  base64_encode($kycPartnerKey);
// echo $kycSign;
// echo "<br>";
// echo $timestamp;
// echo "<br>";
// echo $sequenceNumberKYC;

// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'https://zendmoney.com/ZendPartnerAPIDev/api/KYC',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_POSTFIELDS =>'{
//     "firstName" : "lorem",
//     "lastName" : "ipsum",
//     "idType" : "KTP",
//     "idNumber" : "3173041234567890",
//     "idIssuePlace" : "jakarta",
//     "idIssueDate" : "1989-10-21",
//     "idExpiryDate" : "2030-10-21",
//     "birthDate" : "1989-10-21",
//     "email" : "lorem@gmail.com",
//     "gender" : "Male",
//     "phoneNumber" : "6281234567890",
//     "address1" : "jl.test",
//     "address2" : "no 12 rt 12 rw 2",
//     "city" : "jakarta",
//     "postCode" : "11140",
//     "state" : "DKI JAKARTA",
//     "country" : "INDONESIA",
//     "nationality" : "INDONESIA",
//     "answer1" : "haha",
//     "answer2" : "hihi"

// }',
//   CURLOPT_HTTPHEADER => array(
//     'PartnerID: 00020',
//     'PartnerKey: XKUTBMLjbTt8/+x+A9xekQE2dnTSvmrGRYlGQdCBwLg=',
//     'TimeStamp: 2021-03-30T07:10:56Z',
//     'SequenceNumber: 002954',
//     'Content-Type: application/json',
//     'Authorization: Bearer f3CMaeAOAbu17dJcArHzrCjE1g3ArOdbHJ3VLeDDiBmxe-X2wyUGn7zsxn2nytH5zc4oipiaWhedhZLx42ndvDJhY-AMCoWR_ZrNhBHkg5IR47YEM-TKN_1E4010R4hLSM3A48q9rW3fTbq7GsEgoM7m4A-6_6oexeghgy7ddZjENpSMuVY74Dn4u1FDXfhbWhbXuSl3IISE2ROofm0Ay_O-vmYidRH7_iPkbEPjXo-Ddy-h0AHrbgxlGKSuwv4kXPgTOLNmJKuKtj9F0iw0EvYcC6cPbWcSqiXY4giMi-UTjtDpfxUYKrxCSaT90SUyHPszgRyZnJsr-f2FjfdO3VDIlXUR-WuHCie7D-Yg1spVEVa98e2-rG0j3gnobx-3G0ZoOISOzEPToFktxqHpfhZgdTOAsFJJRQcG4XgAGT_14be5SahDtLOPei1YnNkQY-9IBiOKBXYrNpEmWFZZHw'
//   ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;



/**
 * ZMART SERVICE
 */
// $rand_number_zmart_service = mt_rand(100, 9999);
// $sequenceNumbeZmartServices = sprintf("%06s", $rand_number_zmart_service);

// $zmartServiceKey =  hash_hmac('sha256', $partnerId . $partnerKey . $timestamp . $sequenceNumbeZmartServices, $zendKey, true);
// $zmartServiceSign =  base64_encode($zmartServiceKey);
// echo $zmartServiceSign;
// echo "<br>";
// echo $timestamp;
// echo "<br>";
// echo $sequenceNumbeZmartServices;

// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'https://zendmoney.com/ZendPartnerAPIDev/api/ZmartService',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'GET',
//   CURLOPT_HTTPHEADER => array(
//     'PartnerID: 00020',
//     'PartnerKey: ej0ROh6N7tshE+iSuYc/YMGQJrWy4sPNmf5xKuoUObc=',
//     'TimeStamp: 2021-03-30T07:41:20Z',
//     'SequenceNumber: 005166',
//     'Authorization: Bearer 1HCGpUzBTrdfAauoiXg5rxdIQxGyak9yjKEUnjzxrKesyHiOLKEQJgLYpIk4Rsm0WjPDYjRxq93abU83551awkXY5YR-CVHnQ-mvlbeNHOExWvwCJeIKCmOLo7ueOsZqTB-ydTA53Aml2vR06i4_ys4JUDL1_aFK8TtF-pjB1X9qEdtbu_1lGfy9hR8cMa4_1oGZtQcKVq0Ek7fd_X7fwUCHxDw_DwTyCXjPJg6429xHvDQJEOzvO4QMlSCtCntqXb2lFAqPLbGWw5g3AHq4Oy1FF1HrxYqqevn9CkW96JjGjAevhWDga8ImurO5YW6zPke_H3l2EJmKXV1LUDLJ9EEbUONo24Z8iFD4xtGYWij16CCBOeSM8QLwx5cX8HmC7yYTPkyzbctWJub58X3VISaBDg3Yax2LuhuIXoSMbdo_jcCd-P-JTVzBGWqvZJDT'
//   ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;

/**
 * ZMART INQUIRY CHECK BANK ACCOUNT
 */

$rand_number_inquiry_bank = mt_rand(10, 999);
$sequenceNumber_inquiry_bank = sprintf("%06s", $rand_number_inquiry_bank);
$bank_code = "014";
$account_number = "0916007072";

$zmartInquryBankKey =  hash_hmac('sha256', $partnerId . $partnerKey . $bank_code . $account_number . $timestamp . $sequenceNumber_inquiry_bank, $zendKey, true);
$zmartInquiryBankSign =  base64_encode($zmartInquryBankKey);
echo $zmartInquiryBankSign;
echo "<br>";
echo $timestamp;
echo "<br>";
echo $sequenceNumber_inquiry_bank;
echo "<br>";
echo "<br>";


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://zendmoney.com/ZendPartnerAPIDev/api/ZmartInquiry',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{
    "BankCode" : "014",
    "AccountNumber" : "0916007072"
}',
    CURLOPT_HTTPHEADER => array(
        'PartnerID: 00020',
        'PartnerKey: AwZw7KbwEGP+CXQH0EAvypdbfGpg/B4/9jJzABEEdEA=',
        'TimeStamp: 2021-03-30T07:52:08Z',
        'SequenceNumber: 000483',
        'Authorization: Bearer 5kQntTTImHYvCYym9AGPm9jLzKiJ9aJuQroyH_tIAxmmG5lGtUeveR-SNR4bAiA4cWn5hNJxLdUEFWylIzb1ZRMp-GyQBc6CBgUO3mSO8MCM3U80KLaatTWNYTSz1O6hRrezGvZs0zs47ZoFmyeWkoTWXeJXPILx6FOmGtuNtdVyr_4xN2ddTPUFhhenLGBahsZT-TxGHNKA8W4rAKTHyrw19-KF0EEOKkimYzz4nyb_Gy518VcSrhVdIYJiWlSJO0e1IO5vEyA-4TFM4zIvIrd0xSp4FaqW15tvNDP1vmwxbZfhUC3nnSbgn1aatAjcgZHeF894aAPGzgMO10ElPb-oxaUHGMVhWMqQ8zSvM8tbnP41cJP5pn7lR3Ku-0z6aqrViTMxnz267JG0mPy8aFVFi9PUF2MGItTYv7vGBNKV5oHozBdEK_vClcoHJLrODqVHarzr-uuR_1bq0QA5Kg',
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

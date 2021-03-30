<?php


$apiHost = "my-host-development";
$partnerId = "my-partner-id";
$partnerKey = "my-partner-key";
$zendKey = "my-zend-key";
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

// $rand_number = mt_rand(10, 999);
// $sequenceNumber = sprintf("%06s", $rand_number);

// $zmartPartnerKey =  hash_hmac('sha256', $partnerId . $partnerKey . $timestamp . $sequenceNumber, $zendKey, true);
// $zmartSign =  base64_encode($zmartPartnerKey);
// echo $zmartSign;
// echo "<br>";
// echo $timestamp;
// echo "<br>";
// echo $sequenceNumber;
// echo "<br>";
// echo "<br>";
// $curl = curl_init();

// curl_setopt_array($curl, array(
//     CURLOPT_URL => 'https://zendmoney.com/ZendPartnerAPIDev/api/ZmartToken',
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_ENCODING => '',
//     CURLOPT_MAXREDIRS => 10,
//     CURLOPT_TIMEOUT => 0,
//     CURLOPT_FOLLOWLOCATION => true,
//     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//     CURLOPT_CUSTOMREQUEST => 'GET',
//     CURLOPT_HTTPHEADER => array(
//         'PartnerID: [partner-id]',
//         'PartnerKey: [partner-key]',
//         'TimeStamp: ' . $timestamp,
//         'SequenceNumber: ' . $sequenceNumber
//     ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// // echo $response;
// $result = json_decode($response, true);
// echo $result['token'];
// echo "<br>";
// echo "<br>";



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
//     'PartnerID: [partner-id]',
// 'PartnerKey: [partner-key]',
//     'TimeStamp: 2021-03-30T07:10:56Z',
//     'SequenceNumber: 002954',
//     'Content-Type: application/json',
//     'Authorization: Bearer [secret-number]'
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
//     'PartnerID: [partner-id]',
// 'PartnerKey: [partner-key]',
//     'TimeStamp: 2021-03-30T07:41:20Z',
//     'SequenceNumber: 005166',
//     'Authorization: Bearer [secret-number]'
//   ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;

/**
 * ZMART INQUIRY CHECK BANK ACCOUNT
 */

// $rand_number_inquiry_bank = mt_rand(10, 999);
// $sequenceNumber_inquiry_bank = sprintf("%06s", $rand_number_inquiry_bank);
// $bank_code = "014";
// $account_number = "0916007072";

// $zmartInquryBankKey =  hash_hmac('sha256', $partnerId . $partnerKey . $bank_code . $account_number . $timestamp . $sequenceNumber_inquiry_bank, $zendKey, true);
// $zmartInquiryBankSign =  base64_encode($zmartInquryBankKey);
// echo $zmartInquiryBankSign;
// echo "<br>";
// echo $timestamp;
// echo "<br>";
// echo $sequenceNumber_inquiry_bank;
// echo "<br>";
// echo "<br>";


// $curl = curl_init();

// curl_setopt_array($curl, array(
//     CURLOPT_URL => 'https://zendmoney.com/ZendPartnerAPIDev/api/ZmartInquiry',
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_ENCODING => '',
//     CURLOPT_MAXREDIRS => 10,
//     CURLOPT_TIMEOUT => 0,
//     CURLOPT_FOLLOWLOCATION => true,
//     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//     CURLOPT_CUSTOMREQUEST => 'POST',
//     CURLOPT_POSTFIELDS => '{
//     "BankCode" : "014",
//     "AccountNumber" : "0916007072"
// }',
//     CURLOPT_HTTPHEADER => array(
//         'PartnerID: [partner-id]',
//         'PartnerKey: [partner-key]',
//         'TimeStamp: 2021-03-30T07:52:08Z',
//         'SequenceNumber: 000483',
//         'Authorization: Bearer [secret-number]',
//         'Content-Type: application/json'
//     ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;

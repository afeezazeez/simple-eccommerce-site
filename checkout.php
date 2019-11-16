<?php
session_start();
$curl = curl_init();

$email = "princedivineolarinde2010@gmail.com";
$amount = $_SESSION['total']*100;  //the amount in kobo. This value is actually NGN 300

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'amount'=>$amount,
    'email'=>$email,
  ]),
  CURLOPT_HTTPHEADER => [
    "authorization: Bearer sk_test_ac4c1a020d3bf70b8c9ffe8bc6049b3309b0b1cf", //replace this with your own test key
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

$tranx = json_decode($response, true);
header('Location: ' . $tranx['data']['authorization_url']);
?>
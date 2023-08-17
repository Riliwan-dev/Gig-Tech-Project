<?php
$curl = curl_init();

$email = "genius.rio121@gmail.com";
$amount = 300;  //the amount in kobo. This value is actually NGN 300

// url to go to after payment
// $callback_url = 'localhost/paystack/callback.php';  
// url to go to after payment
// $callback_url = 'localhost/paystack/callback.php';  
// $callback_url = 'http://localhost\Php 2023\GitMistake\gitneww\paystack/callback.php'; // Error here is folders and subfolder uses \ while the files inside uses /
// $callback_url = 'http://localhost/Php 2023/GitMistake/gitneww\gitneww\paystack/callback.php'; // Error here is folders and subfolder uses \ while the files inside uses /
// c:\xampp\htdocs\Php 2023\GitMistake\gitneww\paystack/callback.php' 
// c:\xampp\htdocs\Php 2023\GitMistake\gitneww\paystack/callback.php'

                            //Use These
// $callback_url = 'http://localhost/Php%202023/GitMistake/gitneww/Payment_Details.php/\paystack/callback.php'; //form one files to a folder use /\
                          //or
$callback_url = 'http://localhost/Php%202023/GitMistake/gitneww/Payment_Details.php//paystack/callback.php'; //form one files to a folder use //
// $callback_url = 'http://localhost/Php 2023/GitMistake/gitneww/paystack/callback.php';


curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'amount'=>$amount,
    'email'=>$email,
    'callback_url' => $callback_url
  ]),
  CURLOPT_HTTPHEADER => [
    "authorization: Bearer sk_test_a5f61f52623306ae96022258e6ec68c82b54c7eb", //replace this with your own test key
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
  // there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response, true);

if(!$tranx['status']){
  // there was an error from the API
  print_r('API returned error: ' . $tranx['message']);
}

// comment out this line if you want to redirect the user to the payment page
print_r($tranx);
// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
header('Location: ' . $tranx['data']['authorization_url']);

<?php

// $curl = curl_init();
// $reference = isset($_GET['reference']) ? $_GET['reference'] : '';
// if(!$reference){
//   die('No reference supplied');
// }

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_HTTPHEADER => [
//     "accept: application/json",
//     "authorization: Bearer sk_test_a5f61f52623306ae96022258e6ec68c82b54c7eb",
//     "cache-control: no-cache"
//   ],
// ));

// $response = curl_exec($curl);
// $err = curl_error($curl);

// if($err){
//     // there was an error contacting the Paystack API
//   die('Curl returned error: ' . $err);
// }

// $tranx = json_decode($response);

// if(!$tranx->status){
//   // there was an error from the API
//   die('API returned error: ' . $tranx->message);
// }

//Edit Start Here

// if('success' == $tranx->data->status){
//   // transaction was successful...
//   // please check other things like whether you already gave value for this ref
//   // if the email matches the customer who owns the product etc
//   // Give value
//   echo "<h2>Thank you for making a purchase. Your file has been sent your email.</h2>";
// }

// if ('success' == $tranx->data->status) {
  // transaction was successful...
  // Redirect back to index.php
  
  // ob_clean(); // Clear output buffer
  // header('Location: http://localhost/index.php'); mistake in redirection back to the index.php
  $email= $_GET['email'];
  header('location: http://localhost/Php2023/GitMistake/gitneww/signup.php?email='.$email.''); // Correct code for redirection to index.php
  exit; // Ensure that the script stops executing after the header redirect
//}
//Edit Ends Here

?>

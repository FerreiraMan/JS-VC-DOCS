<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://vendor-api-staging.jumia.com/login?client_id=18dbd821-a001-4466-aa40-3dbed5b640da&response_type=code&scope=openid&prompt=login&redirect_uri=http%3A%2F%2Flocalhost%2Ftoken",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}  
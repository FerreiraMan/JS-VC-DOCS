<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://vendor-api-staging.jumia.com/feeds/products/price",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n  \"products\": [\n    {\n      \"id\": \"string\",\n      \"sellerSku\": \"string\",\n      \"category\": 0,\n      \"price\": {\n        \"currency\": \"string\",\n        \"value\": 0,\n        \"salePrice\": {\n          \"value\": 0,\n          \"startAt\": \"string\",\n          \"endAt\": \"string\"\n        }\n      },\n      \"businessClients\": [\n        {\n          \"businessClientCode\": \"string\",\n          \"price\": {\n            \"currency\": \"string\",\n            \"value\": 0,\n            \"salePrice\": {\n              \"value\": 0,\n              \"startAt\": \"string\",\n              \"endAt\": \"string\"\n            }\n          }\n        }\n      ]\n    }\n  ]\n}",
  CURLOPT_HTTPHEADER => [
    "Authorization: Bearer "
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://vendor-api-staging.jumia.com/feeds/products/update",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n  \"shopId\": \"string\",\n  \"products\": [\n    {\n      \"id\": \"string\",\n      \"name\": {\n        \"value\": \"string\",\n        \"translations\": [\n          {\n            \"language\": \"string\",\n            \"value\": \"string\"\n          }\n        ]\n      },\n      \"description\": {\n        \"value\": \"string\",\n        \"translations\": [\n          {\n            \"language\": \"string\",\n            \"value\": \"string\"\n          }\n        ]\n      },\n      \"parentSku\": \"string\",\n      \"sellerSku\": \"string\",\n      \"barcodeEan\": \"string\",\n      \"brand\": {\n        \"code\": 0,\n        \"name\": \"string\"\n      },\n      \"category\": {\n        \"code\": 0,\n        \"name\": \"string\"\n      },\n      \"additionalCategories\": [\n        {\n          \"code\": 0,\n          \"name\": \"string\"\n        }\n      ],\n      \"images\": [\n        {\n          \"url\": \"string\",\n          \"primary\": true\n        }\n      ],\n      \"price\": {\n        \"value\": 0,\n        \"salePrice\": {\n          \"value\": 0,\n          \"startAt\": \"string\",\n          \"endAt\": \"string\"\n        }\n      },\n      \"stock\": 0,\n      \"attributes\": [\n        {\n          \"name\": \"string\",\n          \"value\": \"string\",\n          \"translations\": [\n            {\n              \"language\": \"string\",\n              \"value\": \"string\"\n            }\n          ]\n        }\n      ]\n    }\n  ]\n}",
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
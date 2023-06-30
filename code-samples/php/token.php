<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://vendor-api-staging.jumia.com/token",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "client_id=8702c6f1-7868-4be2-a52b-6fd13b61499e&grant_type=refresh_token&refresh_token=eyJhbGciOiJIUzI1NiIsInR5cCIgOiAiSldUIiwia2lkIiA6ICJiYTZkNTJjOS1mYTU4LTRiMzItYmU0OC00NDk1ZWNkODUxYTkifQ.eyJqdGkiOiI3NzcyMjllOS1hMmRiLTQzZGMtYjNhOS0yNzkyNTI0NzA5ZTUiLCJleHAiOjE3MTkwNjk0NTIsIm5iZiI6MCwiaWF0IjoxNjg3NTMzNDUyLCJpc3MiOiJodHRwczovL3ZlbmRvci1hcGktc3RhZ2luZy5qdW1pYS5jb20vYXV0aC9yZWFsbXMvYWNsIiwiYXVkIjoiaHR0cHM6Ly92ZW5kb3ItYXBpLXN0YWdpbmcuanVtaWEuY29tL2F1dGgvcmVhbG1zL2FjbCIsInN1YiI6ImQ5ZTE3M2Y4LTZkNWEtNGJlZC1iMjRiLTBkZjk4M2IyMjc4ZCIsInR5cCI6IlJlZnJlc2giLCJhenAiOiI4NzAyYzZmMS03ODY4LTRiZTItYTUyYi02ZmQxM2I2MTQ5OWUiLCJhdXRoX3RpbWUiOjAsInNlc3Npb25fc3RhdGUiOiIyZGRlMTUxNS03YjI4LTQzNTAtYmEyMi01ODExMzE3OGFlZTEiLCJzY29wZSI6InByb2ZpbGUgZW1haWwifQ.y4ZW4Iy6TzX2Mgzlm45HXep22NGSVPiL73lKgwnBxs0",
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/x-www-form-urlencoded"
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
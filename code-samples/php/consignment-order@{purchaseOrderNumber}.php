const purchaseOrderNumber = "YOUR_purchaseOrderNumber_PARAMETER";
$query = array(
    "purchaseOrderNumber" => "purchaseOrderNumber=123abc"
);

$curl = curl_init();

$payload = array(
    "isShipped" => true,
    "trackingNumber" => "string",
    "actualDepartureDate" => "2022-02-01T17:51:03.413Z",
    "estimatedArrivalDate" => "2022-02-01T17:51:03.413Z",
    "deliveryAgentPhoneNumber" => "string",
    ""3plName"" => "string"
);

curl_setopt_array($curl, [
    CURLOPT_HTTPHEADER => [
    "Authorization: string",
    "Content-Type: application/json"
    ],
    CURLOPT_POSTFIELDS => json_encode($payload),
    CURLOPT_URL => "https://vendor-api-staging.jumia.com/consignment-order/" . purchaseOrderNumber . "?" . http_build_query($query),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "PATCH",
]);

$response = curl_exec($curl);
$error = curl_error($curl);

curl_close($curl);

if ($error) {
    echo "cURL Error #:" . $error;
} else {
    echo $response;
}
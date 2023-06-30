import requests

purchase_order_number = "YOUR_purchaseOrderNumber_PARAMETER"
url = "https://vendor-api-staging.jumia.com/consignment-order/" + purchase_order_number

query = {
    "purchaseOrderNumber": "purchaseOrderNumber=123abc"
}

payload = {
    "isShipped": True,
    "trackingNumber": "string",
    "actualDepartureDate": "2022-02-01T17:51:03.413Z",
    "estimatedArrivalDate": "2022-02-01T17:51:03.413Z",
    "deliveryAgentPhoneNumber": "string",
    "3plName": "string"
}

headers = {
    "Content-Type": "application/json",
    "Authorization": "string"
}

response = requests.patch(url, json=payload, headers=headers, params=query)

data = response.json()
print(data)
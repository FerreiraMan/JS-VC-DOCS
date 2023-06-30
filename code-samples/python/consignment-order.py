import requests

url = "https://vendor-api-staging.jumia.com/consignment-order"

payload = {
    "shopId": "string",
    "businessClientCode": "string",
    "shippingDate": "string",
    "comment": "string",
    "products": [
        {
            "sku": "string",
            "quantity": 0,
            "labelCode": "string"
        }
    ]
}
headers = {"Authorization": "Bearer "}

response = requests.request("POST", url, json=payload, headers=headers)

print(response.text)
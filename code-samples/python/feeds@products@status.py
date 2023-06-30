import requests

url = "https://vendor-api-staging.jumia.com/feeds/products/status"

payload = {"products": [
        {
            "id": "string",
            "sellerSku": "string",
            "createdAt": "string",
            "businessClients": [
                {
                    "businessClientCode": "string",
                    "status": "string"
                }
            ]
        }
    ]}
headers = {"Authorization": "Bearer "}

response = requests.request("POST", url, json=payload, headers=headers)

print(response.text)
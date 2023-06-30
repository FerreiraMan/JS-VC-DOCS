import requests

url = "https://vendor-api-staging.jumia.com/feeds/products/price"

payload = {"products": [
        {
            "id": "string",
            "sellerSku": "string",
            "category": 0,
            "price": {
                "currency": "string",
                "value": 0,
                "salePrice": {
                    "value": 0,
                    "startAt": "string",
                    "endAt": "string"
                }
            },
            "businessClients": [
                {
                    "businessClientCode": "string",
                    "price": {
                        "currency": "string",
                        "value": 0,
                        "salePrice": {
                            "value": 0,
                            "startAt": "string",
                            "endAt": "string"
                        }
                    }
                }
            ]
        }
    ]}
headers = {"Authorization": "Bearer "}

response = requests.request("POST", url, json=payload, headers=headers)

print(response.text)
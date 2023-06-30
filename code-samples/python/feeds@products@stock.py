import requests

url = "https://vendor-api-staging.jumia.com/feeds/products/stock"

payload = {"products": [
        {
            "sellerSku": "string",
            "id": "string",
            "stock": 0
        }
    ]}
headers = {"Authorization": "Bearer "}

response = requests.request("POST", url, json=payload, headers=headers)

print(response.text)
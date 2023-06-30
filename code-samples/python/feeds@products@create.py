import requests

url = "https://vendor-api-staging.jumia.com/feeds/products/create"

payload = {
    "shopId": "string",
    "products": [
        {
            "name": {
                "value": "string",
                "translations": [
                    {
                        "language": "string",
                        "value": "string"
                    }
                ]
            },
            "description": {
                "value": "string",
                "translations": [
                    {
                        "language": "string",
                        "value": "string"
                    }
                ]
            },
            "parentSku": "string",
            "sellerSku": "string",
            "barcodeEan": "string",
            "variation": "string",
            "brand": {
                "code": 0,
                "name": "string"
            },
            "category": {
                "code": 0,
                "name": "string"
            },
            "additionalCategories": [
                {
                    "code": 0,
                    "name": "string"
                }
            ],
            "images": [
                {
                    "url": "string",
                    "primary": True
                }
            ],
            "price": {
                "currency": "string",
                "value": 0,
                "salePrice": {
                    "value": 0,
                    "startAt": "string",
                    "endAt": "string"
                }
            },
            "stock": 0,
            "attributes": [
                {
                    "name": "string",
                    "value": "string",
                    "translations": [
                        {
                            "language": "string",
                            "value": "string"
                        }
                    ]
                }
            ]
        }
    ]
}
headers = {"Authorization": "Bearer "}

response = requests.request("POST", url, json=payload, headers=headers)

print(response.text)
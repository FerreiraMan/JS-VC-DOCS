import requests

url = "https://vendor-api-staging.jumia.com/catalog/products"

payload = ""
headers = {
    "Authorization": "Bearer "
}

response = requests.request("GET", url, data=payload, headers=headers)

print(response.text)
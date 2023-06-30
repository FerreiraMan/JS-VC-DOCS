import requests

url = "https://vendor-api-staging.jumia.com/consignment-stock"

querystring = {"businessClientCode":"string","sku":"string"}

payload = ""
headers = {"Authorization": "Bearer "}

response = requests.request("GET", url, data=payload, headers=headers, params=querystring)

print(response.text)
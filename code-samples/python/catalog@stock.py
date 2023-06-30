import requests

url = "https://vendor-api-staging.jumia.com/catalog/stock"

querystring = {"token":"string","size":"10","productSids":"string"}

payload = ""
headers = {"Authorization": "Bearer "}

response = requests.request("GET", url, data=payload, headers=headers, params=querystring)

print(response.text)
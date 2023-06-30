import requests

id = "YOUR_id_PARAMETER"
url = "https://vendor-api-staging.jumia.com/feeds/" + id

payload = ""
headers = {"Authorization": "Bearer "}

response = requests.request("GET", url, data=payload, headers=headers)

print(response.text)
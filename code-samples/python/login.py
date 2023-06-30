import requests

url = "https://vendor-api-staging.jumia.com/login"

querystring = {"client_id":"18dbd821-a001-4466-aa40-3dbed5b640da","response_type":"code","scope":"openid","prompt":"login","redirect_uri":"http://localhost/token"}

payload = ""
response = requests.request("GET", url, data=payload, params=querystring)

print(response.text)
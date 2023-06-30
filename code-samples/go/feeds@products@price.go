package main

import (
  "fmt"
  "strings"
  "net/http"
  "io/ioutil"
)

func main() {

  url := "https://vendor-api-staging.jumia.com/feeds/products/price"

  payload := strings.NewReader("{\n  \"products\": [\n    {\n      \"id\": \"string\",\n      \"sellerSku\": \"string\",\n      \"category\": 0,\n      \"price\": {\n        \"currency\": \"string\",\n        \"value\": 0,\n        \"salePrice\": {\n          \"value\": 0,\n          \"startAt\": \"string\",\n          \"endAt\": \"string\"\n        }\n      },\n      \"businessClients\": [\n        {\n          \"businessClientCode\": \"string\",\n          \"price\": {\n            \"currency\": \"string\",\n            \"value\": 0,\n            \"salePrice\": {\n              \"value\": 0,\n              \"startAt\": \"string\",\n              \"endAt\": \"string\"\n            }\n          }\n        }\n      ]\n    }\n  ]\n}")

  req, _ := http.NewRequest("POST", url, payload)

  req.Header.Add("Authorization", "Bearer ")

  res, _ := http.DefaultClient.Do(req)

  defer res.Body.Close()
  body, _ := ioutil.ReadAll(res.Body)

  fmt.Println(res)
  fmt.Println(string(body))

}
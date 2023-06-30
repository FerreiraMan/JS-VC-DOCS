package main

import (
  "fmt"
  "strings"
  "net/http"
  "io/ioutil"
)

func main() {

  url := "https://vendor-api-staging.jumia.com/feeds/products/update"

  payload := strings.NewReader("{\n  \"shopId\": \"string\",\n  \"products\": [\n    {\n      \"id\": \"string\",\n      \"name\": {\n        \"value\": \"string\",\n        \"translations\": [\n          {\n            \"language\": \"string\",\n            \"value\": \"string\"\n          }\n        ]\n      },\n      \"description\": {\n        \"value\": \"string\",\n        \"translations\": [\n          {\n            \"language\": \"string\",\n            \"value\": \"string\"\n          }\n        ]\n      },\n      \"parentSku\": \"string\",\n      \"sellerSku\": \"string\",\n      \"barcodeEan\": \"string\",\n      \"brand\": {\n        \"code\": 0,\n        \"name\": \"string\"\n      },\n      \"category\": {\n        \"code\": 0,\n        \"name\": \"string\"\n      },\n      \"additionalCategories\": [\n        {\n          \"code\": 0,\n          \"name\": \"string\"\n        }\n      ],\n      \"images\": [\n        {\n          \"url\": \"string\",\n          \"primary\": true\n        }\n      ],\n      \"price\": {\n        \"value\": 0,\n        \"salePrice\": {\n          \"value\": 0,\n          \"startAt\": \"string\",\n          \"endAt\": \"string\"\n        }\n      },\n      \"stock\": 0,\n      \"attributes\": [\n        {\n          \"name\": \"string\",\n          \"value\": \"string\",\n          \"translations\": [\n            {\n              \"language\": \"string\",\n              \"value\": \"string\"\n            }\n          ]\n        }\n      ]\n    }\n  ]\n}")

  req, _ := http.NewRequest("POST", url, payload)

  req.Header.Add("Authorization", "Bearer ")

  res, _ := http.DefaultClient.Do(req)

  defer res.Body.Close()
  body, _ := ioutil.ReadAll(res.Body)

  fmt.Println(res)
  fmt.Println(string(body))

}
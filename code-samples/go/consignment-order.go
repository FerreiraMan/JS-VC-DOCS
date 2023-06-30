package main

import (
  "fmt"
  "strings"
  "net/http"
  "io/ioutil"
)

func main() {

  url := "https://vendor-api-staging.jumia.com/consignment-order"

  payload := strings.NewReader("{\n  \"shopId\": \"string\",\n  \"businessClientCode\": \"string\",\n  \"shippingDate\": \"string\",\n  \"comment\": \"string\",\n  \"products\": [\n    {\n      \"sku\": \"string\",\n      \"quantity\": 0,\n      \"labelCode\": \"string\"\n    }\n  ]\n}")

  req, _ := http.NewRequest("POST", url, payload)

  req.Header.Add("Authorization", "Bearer ")

  res, _ := http.DefaultClient.Do(req)

  defer res.Body.Close()
  body, _ := ioutil.ReadAll(res.Body)

  fmt.Println(res)
  fmt.Println(string(body))

}
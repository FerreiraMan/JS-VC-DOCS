package main

import (
  "fmt"
  "strings"
  "net/http"
  "io/ioutil"
)

func main() {

  url := "https://vendor-api-staging.jumia.com/feeds/products/status"

  payload := strings.NewReader("{\n  \"products\": [\n    {\n      \"id\": \"string\",\n      \"sellerSku\": \"string\",\n      \"createdAt\": \"string\",\n      \"businessClients\": [\n        {\n          \"businessClientCode\": \"string\",\n          \"status\": \"string\"\n        }\n      ]\n    }\n  ]\n}")

  req, _ := http.NewRequest("POST", url, payload)

  req.Header.Add("Authorization", "Bearer ")

  res, _ := http.DefaultClient.Do(req)

  defer res.Body.Close()
  body, _ := ioutil.ReadAll(res.Body)

  fmt.Println(res)
  fmt.Println(string(body))

}
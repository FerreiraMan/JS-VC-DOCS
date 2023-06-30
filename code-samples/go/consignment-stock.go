package main

import (
  "fmt"
  "net/http"
  "io/ioutil"
)

func main() {

  url := "https://vendor-api-staging.jumia.com/consignment-stock?businessClientCode=string&sku=string"

  req, _ := http.NewRequest("GET", url, nil)

  req.Header.Add("Authorization", "Bearer ")

  res, _ := http.DefaultClient.Do(req)

  defer res.Body.Close()
  body, _ := ioutil.ReadAll(res.Body)

  fmt.Println(res)
  fmt.Println(string(body))

}
package main

import (
  "fmt"
  "net/http"
  "io/ioutil"
)

func main() {

  url := "https://vendor-api-staging.jumia.com/login?client_id=18dbd821-a001-4466-aa40-3dbed5b640da&response_type=code&scope=openid&prompt=login&redirect_uri=http%3A%2F%2Flocalhost%2Ftoken"

  req, _ := http.NewRequest("GET", url, nil)

  res, _ := http.DefaultClient.Do(req)

  defer res.Body.Close()
  body, _ := ioutil.ReadAll(res.Body)

  fmt.Println(res)
  fmt.Println(string(body))

}
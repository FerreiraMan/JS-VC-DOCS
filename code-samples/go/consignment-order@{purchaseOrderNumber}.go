package main

import (
  "fmt"
  "bytes"
  "net/http"
  "io/ioutil"
)

func main() {
  purchaseOrderNumber := "YOUR_purchaseOrderNumber_PARAMETER";
  reqUrl := "https://vendor-api-staging.jumia.com/consignment-order/" + purchaseOrderNumber
  var data = []byte(`{
	"isShipped": true,
	"trackingNumber": "string",
	"actualDepartureDate": "2022-02-01T17:51:03.413Z",
	"estimatedArrivalDate": "2022-02-01T17:51:03.413Z",
	"deliveryAgentPhoneNumber": "string",
	"3plName": "string"
  }`)
  req, _ := http.NewRequest("PATCH", reqUrl, bytes.NewBuffer(data))

  query := req.URL.Query()
  query.Add("purchaseOrderNumber", "purchaseOrderNumber=123abc")
  req.URL.RawQuery = query.Encode()

  req.Header.Add("Content-Type", "application/json")
  req.Header.Add("Authorization", "string")
  res, _ := http.DefaultClient.Do(req)
  defer res.Body.Close()
  body, _ := ioutil.ReadAll(res.Body)

  fmt.Println(res)
  fmt.Println(string(body))
}
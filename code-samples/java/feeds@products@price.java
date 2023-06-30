HttpRequest request = HttpRequest.newBuilder()
    .uri(URI.create("https://vendor-api-staging.jumia.com/feeds/products/price"))
    .header("Authorization", "Bearer ")
    .method("POST", HttpRequest.BodyPublishers.ofString("{\n  \"products\": [\n    {\n      \"id\": \"string\",\n      \"sellerSku\": \"string\",\n      \"category\": 0,\n      \"price\": {\n        \"currency\": \"string\",\n        \"value\": 0,\n        \"salePrice\": {\n          \"value\": 0,\n          \"startAt\": \"string\",\n          \"endAt\": \"string\"\n        }\n      },\n      \"businessClients\": [\n        {\n          \"businessClientCode\": \"string\",\n          \"price\": {\n            \"currency\": \"string\",\n            \"value\": 0,\n            \"salePrice\": {\n              \"value\": 0,\n              \"startAt\": \"string\",\n              \"endAt\": \"string\"\n            }\n          }\n        }\n      ]\n    }\n  ]\n}"))
    .build();
HttpResponse<String> response = HttpClient.newHttpClient().send(request, HttpResponse.BodyHandlers.ofString());
System.out.println(response.body());
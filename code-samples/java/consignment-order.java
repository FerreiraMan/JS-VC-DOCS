HttpRequest request = HttpRequest.newBuilder()
    .uri(URI.create("https://vendor-api-staging.jumia.com/consignment-order"))
    .header("Authorization", "Bearer ")
    .method("POST", HttpRequest.BodyPublishers.ofString("{\n  \"shopId\": \"string\",\n  \"businessClientCode\": \"string\",\n  \"shippingDate\": \"string\",\n  \"comment\": \"string\",\n  \"products\": [\n    {\n      \"sku\": \"string\",\n      \"quantity\": 0,\n      \"labelCode\": \"string\"\n    }\n  ]\n}"))
    .build();
HttpResponse<String> response = HttpClient.newHttpClient().send(request, HttpResponse.BodyHandlers.ofString());
System.out.println(response.body());
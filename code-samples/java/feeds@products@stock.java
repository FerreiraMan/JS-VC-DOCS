HttpRequest request = HttpRequest.newBuilder()
    .uri(URI.create("https://vendor-api-staging.jumia.com/feeds/products/stock"))
    .header("Authorization", "Bearer ")
    .method("POST", HttpRequest.BodyPublishers.ofString("{\n  \"products\": [\n    {\n      \"sellerSku\": \"string\",\n      \"id\": \"string\",\n      \"stock\": 0\n    }\n  ]\n}"))
    .build();
HttpResponse<String> response = HttpClient.newHttpClient().send(request, HttpResponse.BodyHandlers.ofString());
System.out.println(response.body());
HttpRequest request = HttpRequest.newBuilder()
    .uri(URI.create("https://vendor-api-staging.jumia.com/feeds/products/status"))
    .header("Authorization", "Bearer ")
    .method("POST", HttpRequest.BodyPublishers.ofString("{\n  \"products\": [\n    {\n      \"id\": \"string\",\n      \"sellerSku\": \"string\",\n      \"createdAt\": \"string\",\n      \"businessClients\": [\n        {\n          \"businessClientCode\": \"string\",\n          \"status\": \"string\"\n        }\n      ]\n    }\n  ]\n}"))
    .build();
HttpResponse<String> response = HttpClient.newHttpClient().send(request, HttpResponse.BodyHandlers.ofString());
System.out.println(response.body());
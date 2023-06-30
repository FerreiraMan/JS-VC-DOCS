HttpRequest request = HttpRequest.newBuilder()
    .uri(URI.create("https://vendor-api-staging.jumia.com/catalog/categories"))
    .header("Authorization", "Bearer ")
    .method("GET", HttpRequest.BodyPublishers.noBody())
    .build();
HttpResponse<String> response = HttpClient.newHttpClient().send(request, HttpResponse.BodyHandlers.ofString());
System.out.println(response.body());
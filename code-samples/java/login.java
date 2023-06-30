HttpRequest request = HttpRequest.newBuilder()
    .uri(URI.create("https://vendor-api-staging.jumia.com/login?client_id=18dbd821-a001-4466-aa40-3dbed5b640da&response_type=code&scope=openid&prompt=login&redirect_uri=http%3A%2F%2Flocalhost%2Ftoken"))
    .method("GET", HttpRequest.BodyPublishers.noBody())
    .build();
HttpResponse<String> response = HttpClient.newHttpClient().send(request, HttpResponse.BodyHandlers.ofString());
System.out.println(response.body());
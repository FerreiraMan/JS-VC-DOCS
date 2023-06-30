HttpRequest request = HttpRequest.newBuilder()
    .uri(URI.create("https://vendor-api-staging.jumia.com/shops-of-master-shop"))
    .header("cookie", "__cf_bm=jlHJP1oJ54kGp7iXuEH.U45tJ5F_yBcYVtuP1DYbg2A-1687860165-0-Ad7my33EtWDSyUxW0M%2FzOqz%2FZpyKdCfTQEbcq4TL0UvSBpjzjUrRjRDH7taHjK56Ofednrv6af9imX%2BYzYvQppQ%3D")
    .header("Authorization", "Bearer ")
    .method("GET", HttpRequest.BodyPublishers.noBody())
    .build();
HttpResponse<String> response = HttpClient.newHttpClient().send(request, HttpResponse.BodyHandlers.ofString());
System.out.println(response.body());
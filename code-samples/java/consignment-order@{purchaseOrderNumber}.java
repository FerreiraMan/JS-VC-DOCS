import java.net.*;
import java.net.http.*;
import java.util.*;
import java.nio.charset.StandardCharsets;
import java.util.stream.Collectors;

public class App {
    public static void main(String[] args) throws Exception {
    var httpClient = HttpClient.newBuilder().build();

    var payload = String.join("\n"
        , "{"
        , " \"isShipped\": true,"
        , " \"trackingNumber\": \"string\","
        , " \"actualDepartureDate\": \"2022-02-01T17:51:03.413Z\","
        , " \"estimatedArrivalDate\": \"2022-02-01T17:51:03.413Z\","
        , " \"deliveryAgentPhoneNumber\": \"string\","
        , " \"3plName\": \"string\""
        , "}"
    );

    HashMap<String, String> params = new HashMap<>();
    params.put("purchaseOrderNumber", "purchaseOrderNumber=123abc");

    var query = params.keySet().stream()
        .map(key -> key + "=" + URLEncoder.encode(params.get(key), StandardCharsets.UTF_8))
        .collect(Collectors.joining("&"));

    var host = "https://vendor-api-staging.jumia.com";
    var purchaseOrderNumber = "YOUR_purchaseOrderNumber_PARAMETER";
    var pathname = "/consignment-order/" + purchaseOrderNumber;
    var request = HttpRequest.newBuilder()
        .method("PATCH", HttpRequest.BodyPublishers.ofString(payload))
        .uri(URI.create(host + pathname + '?' + query))
        .header("Content-Type", "application/json")
        .header("Authorization", "string")
        .build();

    var response = httpClient.send(request, HttpResponse.BodyHandlers.ofString());

    System.out.println(response.body());
    }
}
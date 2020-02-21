# OpenAPI\Client\ReverseApi

All URIs are relative to *https://eu1.locationiq.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reverse**](ReverseApi.md#reverse) | **GET** /reverse.php | Reverse Geocoding



## reverse

> \OpenAPI\Client\Model\Location reverse($lat, $lon, $format, $normalizecity, $addressdetails, $accept_language, $namedetails, $extratags, $statecode, $showdistance, $postaladdress)

Reverse Geocoding

Reverse geocoding is the process of converting a coordinate or location (latitude, longitude) to a readable address or place name. This permits the identification of nearby street addresses, places, and/or area subdivisions such as a neighborhood, county, state, or country.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lat = 40.7487727; // float | Latitude of the location to generate an address for.
$lon = -73.9849336; // float | Longitude of the location to generate an address for.
$format = "json"; // string | Format to geocode. Only JSON supported for SDKs
$normalizecity = 1; // int | Normalizes village to city level data to city
$addressdetails = 1; // int | Include a breakdown of the address into elements. Defaults to 1.
$accept_language = "en"; // string | Preferred language order for showing search results, overrides the value specified in the Accept-Language HTTP header. Defaults to en. To use native language for the response when available, use accept-language=native
$namedetails = 0; // int | Include a list of alternative names in the results. These may include language variants, references, operator and brand.
$extratags = 0; // int | Include additional information in the result if available, e.g. wikipedia link, opening hours.
$statecode = 0; // int | Adds state or province code when available to the statecode key inside the address element. Currently supported for addresses in the USA, Canada and Australia. Defaults to 0
$showdistance = 0; // int | Returns the straight line distance (meters) between the input location and the result's location. Value is set in the distance key of the response. Defaults to 0 [0,1]
$postaladdress = 0; // int | Returns address inside the postaladdress key, that is specifically formatted for each country. Currently supported for addresses in Germany. Defaults to 0 [0,1]

try {
    $result = $apiInstance->reverse($lat, $lon, $format, $normalizecity, $addressdetails, $accept_language, $namedetails, $extratags, $statecode, $showdistance, $postaladdress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReverseApi->reverse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lat** | **float**| Latitude of the location to generate an address for. |
 **lon** | **float**| Longitude of the location to generate an address for. |
 **format** | **string**| Format to geocode. Only JSON supported for SDKs |
 **normalizecity** | **int**| Normalizes village to city level data to city |
 **addressdetails** | **int**| Include a breakdown of the address into elements. Defaults to 1. | [optional] [default to 1]
 **accept_language** | **string**| Preferred language order for showing search results, overrides the value specified in the Accept-Language HTTP header. Defaults to en. To use native language for the response when available, use accept-language&#x3D;native | [optional]
 **namedetails** | **int**| Include a list of alternative names in the results. These may include language variants, references, operator and brand. | [optional]
 **extratags** | **int**| Include additional information in the result if available, e.g. wikipedia link, opening hours. | [optional]
 **statecode** | **int**| Adds state or province code when available to the statecode key inside the address element. Currently supported for addresses in the USA, Canada and Australia. Defaults to 0 | [optional]
 **showdistance** | **int**| Returns the straight line distance (meters) between the input location and the result&#39;s location. Value is set in the distance key of the response. Defaults to 0 [0,1] | [optional]
 **postaladdress** | **int**| Returns address inside the postaladdress key, that is specifically formatted for each country. Currently supported for addresses in Germany. Defaults to 0 [0,1] | [optional]

### Return type

[**\OpenAPI\Client\Model\Location**](../Model/Location.md)

### Authorization

[key](../../README.md#key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


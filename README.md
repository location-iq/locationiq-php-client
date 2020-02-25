# locationiq

LocationIQ provides flexible enterprise-grade location based solutions. We work with developers, startups and enterprises worldwide serving billions of requests everyday. This page provides an overview of the technical aspects of our API and will help you get started.

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.1.0
- Package version: 1.1.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/location-iq/locationiq-php-client.git"
    }
  ],
  "require": {
    "location-iq/locationiq-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/locationiq/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: key
$config = LocationIq\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LocationIq\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');


$apiInstance = new LocationIq\Api\AutocompleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "Empire state"; // string | Address to geocode
$normalizecity = 1; // int | For responses with no city value in the address section, the next available element in this order - city_district, locality, town, borough, municipality, village, hamlet, quarter, neighbourhood - from the address section will be normalized to city. Defaults to 1 for SDKs.
$limit = 10; // int | Limit the number of returned results. Default is 10.
$viewbox = "-132.84908,47.69382,-70.44674,30.82531"; // string | The preferred area to find search results.  To restrict results to those within the viewbox, use along with the bounded option. Tuple of 4 floats. Any two corner points of the box - `max_lon,max_lat,min_lon,min_lat` or `min_lon,min_lat,max_lon,max_lat` - are accepted in any order as long as they span a real box.
$bounded = 1; // int | Restrict the results to only items contained with the viewbox
$countrycodes = "us"; // string | Limit search to a list of countries.
$accept_language = "en"; // string | Preferred language order for showing search results, overrides the value specified in the Accept-Language HTTP header. Defaults to en. To use native language for the response when available, use accept-language=native
$tag = "place"; // string | Restricts the autocomplete search results to elements of specific OSM class and type.  Example - To restrict results to only class place and type city: tag=place:city, To restrict the results to all of OSM class place: tag=place

try {
    $result = $apiInstance->autocomplete($q, $normalizecity, $limit, $viewbox, $bounded, $countrycodes, $accept_language, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutocompleteApi->autocomplete: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://eu1.locationiq.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AutocompleteApi* | [**autocomplete**](docs/Api/AutocompleteApi.md#autocomplete) | **GET** /autocomplete.php | 
*BalanceApi* | [**balance**](docs/Api/BalanceApi.md#balance) | **GET** /balance.php | 
*DirectionsApi* | [**directions**](docs/Api/DirectionsApi.md#directions) | **GET** /directions/driving/{coordinates} | Directions Service
*MatchingApi* | [**matching**](docs/Api/MatchingApi.md#matching) | **GET** /matching/driving/{coordinates} | Matching Service
*MatrixApi* | [**matrix**](docs/Api/MatrixApi.md#matrix) | **GET** /matrix/driving/{coordinates} | Matrix Service
*NearestApi* | [**nearest**](docs/Api/NearestApi.md#nearest) | **GET** /nearest/driving/{coordinates} | Nearest Service
*ReverseApi* | [**reverse**](docs/Api/ReverseApi.md#reverse) | **GET** /reverse.php | Reverse Geocoding
*SearchApi* | [**search**](docs/Api/SearchApi.md#search) | **GET** /search.php | Forward Geocoding


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [Balance](docs/Model/Balance.md)
 - [Daybalance](docs/Model/Daybalance.md)
 - [DirectionsDirections](docs/Model/DirectionsDirections.md)
 - [DirectionsDirectionsRoutes](docs/Model/DirectionsDirectionsRoutes.md)
 - [DirectionsMatching](docs/Model/DirectionsMatching.md)
 - [DirectionsMatrix](docs/Model/DirectionsMatrix.md)
 - [DirectionsMatrixSources](docs/Model/DirectionsMatrixSources.md)
 - [DirectionsNearest](docs/Model/DirectionsNearest.md)
 - [DirectionsNearestWaypoints](docs/Model/DirectionsNearestWaypoints.md)
 - [Error](docs/Model/Error.md)
 - [Location](docs/Model/Location.md)
 - [Matchquality](docs/Model/Matchquality.md)
 - [Namedetails](docs/Model/Namedetails.md)


## Documentation For Authorization



## key


- **Type**: API key
- **API key parameter name**: key
- **Location**: URL query string



## Author




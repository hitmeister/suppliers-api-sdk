# SMS\Suppliers\ItemMeasurementApi

All URIs are relative to *https://sms.kaufland.de/api/v2/supplier*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createItemMeasurement**](ItemMeasurementApi.md#createItemMeasurement) | **POST** /item-measurements | Create item-measurement by gtin (for crossdock &amp; wholesaler)
[**getItemMeasurement**](ItemMeasurementApi.md#getItemMeasurement) | **GET** /item-measurements/{gtin} | Find item-measurement by gtin


# **createItemMeasurement**
> createItemMeasurement($body)

Create item-measurement by gtin (for crossdock & wholesaler)

Creates an item measurement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_PARAMETER_VALUE');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: apiUsername
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-username', 'YOUR_PARAMETER_VALUE');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-username', 'Bearer');
// Set API version (1 or 2)
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiVersion(2);

$apiInstance = new SMS\Suppliers\Api\v2\ItemMeasurementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SMS\Suppliers\Model\v2\CreateItemMeasurementRequest(); // \SMS\Suppliers\Model\v2\CreateItemMeasurementRequest | 

try {
    $apiInstance->createItemMeasurement($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemMeasurementApi->createItemMeasurement: ', $e->getMessage(), PHP_EOL;
}

?>
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SMS\Suppliers\Model\v2\CreateItemMeasurementRequest**](../Model/CreateItemMeasurementRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../../README.md#apiKey), [apiUsername](../../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **getItemMeasurement**
> \SMS\Suppliers\Model\v2\ItemMeasurementResponse getItemMeasurement($gtin)

Find item-measurement by gtin

Returns a single item-measurement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_PARAMETER_VALUE');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: apiUsername
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-username', 'YOUR_PARAMETER_VALUE');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-username', 'Bearer');
// Set API version (1 or 2)
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiVersion(2);

$apiInstance = new SMS\Suppliers\Api\v2\ItemMeasurementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gtin = "gtin_example"; // string | gtin of item to request its measurement data

try {
    $result = $apiInstance->getItemMeasurement($gtin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemMeasurementApi->getItemMeasurement: ', $e->getMessage(), PHP_EOL;
}

?>
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gtin** | **string**| gtin of item to request its measurement data |

### Return type

[**\SMS\Suppliers\Model\v2\ItemMeasurementResponse**](../Model/ItemMeasurementResponse.md)

### Authorization

[apiKey](../../../README.md#apiKey), [apiUsername](../../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)


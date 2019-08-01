# SMS\Suppliers\ItemMeasurementApi

All URIs are relative to *https://sms.real.de/api/v1/supplier*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getItemMeasurement**](ItemMeasurementApi.md#getItemMeasurement) | **GET** /item-measurements/{gtin} | Find item-measurement by gtin


# **getItemMeasurement**
> \SMS\Suppliers\Model\ItemMeasurementResponse getItemMeasurement($gtin)

Find item-measurement by gtin

Returns a single item-measurement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: apiUsername
SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-username', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-username', 'Bearer');

$api_instance = new SMS\Suppliers\Api\ItemMeasurementApi();
$gtin = "gtin_example"; // string | gtin of item to request its measurement data

try {
    $result = $api_instance->getItemMeasurement($gtin);
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

[**\SMS\Suppliers\Model\ItemMeasurementResponse**](../Model/ItemMeasurementResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Suppliers\Api\OrderUnitApi

All URIs are relative to *https://localhost/api/v1/supplier*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrderUnit**](OrderUnitApi.md#cancelOrderUnit) | **POST** /order-units/{id}/cancel | Cancel an order unit
[**sendOrderUnit**](OrderUnitApi.md#sendOrderUnit) | **POST** /order-units/{id}/send | Send an order unit


# **cancelOrderUnit**
> cancelOrderUnit($id, $body)

Cancel an order unit

Cancel an order unit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Suppliers\Api\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Suppliers\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: apiUsername
Suppliers\Api\Configuration::getDefaultConfiguration()->setApiKey('api-username', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Suppliers\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-username', 'Bearer');

$api_instance = new Suppliers\Api\Api\OrderUnitApi();
$id = "id_example"; // string | ID of order unit to cancel
$body = new \Suppliers\Api\Model\CancelOrderUnitRequest(); // \Suppliers\Api\Model\CancelOrderUnitRequest | Order unit that should be cancelled

try {
    $api_instance->cancelOrderUnit($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitApi->cancelOrderUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of order unit to cancel |
 **body** | [**\Suppliers\Api\Model\CancelOrderUnitRequest**](../Model/\Suppliers\Api\Model\CancelOrderUnitRequest.md)| Order unit that should be cancelled |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendOrderUnit**
> sendOrderUnit($id, $body)

Send an order unit

Confirm that an order unit has already been sent by a supplier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Suppliers\Api\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Suppliers\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: apiUsername
Suppliers\Api\Configuration::getDefaultConfiguration()->setApiKey('api-username', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Suppliers\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-username', 'Bearer');

$api_instance = new Suppliers\Api\Api\OrderUnitApi();
$id = "id_example"; // string | ID of order unit to mark as sent
$body = new \Suppliers\Api\Model\SendOrderUnitRequest(); // \Suppliers\Api\Model\SendOrderUnitRequest | Order unit that should be marked as sent

try {
    $api_instance->sendOrderUnit($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitApi->sendOrderUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of order unit to mark as sent |
 **body** | [**\Suppliers\Api\Model\SendOrderUnitRequest**](../Model/\Suppliers\Api\Model\SendOrderUnitRequest.md)| Order unit that should be marked as sent |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


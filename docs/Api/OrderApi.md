# SMS\Suppliers\OrderApi

All URIs are relative to *https://sms.real.de/api/v1/supplier*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrder**](OrderApi.md#cancelOrder) | **POST** /orders/{id}/cancel | Cancel whole order
[**confirmOrder**](OrderApi.md#confirmOrder) | **POST** /orders/{id}/confirm | Confirm order
[**getOrder**](OrderApi.md#getOrder) | **GET** /orders/{id} | Find order by ID


# **cancelOrder**
> cancelOrder($id, $body)

Cancel whole order

Cancels all order units

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

$api_instance = new SMS\Suppliers\Api\OrderApi();
$id = "id_example"; // string | ID of order to cancel
$body = new \SMS\Suppliers\Model\CancelOrderRequest(); // \SMS\Suppliers\Model\CancelOrderRequest | Pet object that needs to be added to the store

try {
    $api_instance->cancelOrder($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of order to cancel |
 **body** | [**\SMS\Suppliers\Model\CancelOrderRequest**](../Model/CancelOrderRequest.md)| Pet object that needs to be added to the store |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confirmOrder**
> confirmOrder($id)

Confirm order

Confirm that order has been received by a supplier

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

$api_instance = new SMS\Suppliers\Api\OrderApi();
$id = "id_example"; // string | ID of order to confirm

try {
    $api_instance->confirmOrder($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->confirmOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of order to confirm |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrder**
> \SMS\Suppliers\Model\GetOrderResponse getOrder($id)

Find order by ID

Returns a single order

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

$api_instance = new SMS\Suppliers\Api\OrderApi();
$id = "id_example"; // string | ID of order to return

try {
    $result = $api_instance->getOrder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of order to return |

### Return type

[**\SMS\Suppliers\Model\GetOrderResponse**](../Model/GetOrderResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


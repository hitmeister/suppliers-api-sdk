# Suppliers\Api\OrderApi

All URIs are relative to *https://localhost/api/v1/supplier*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrder**](OrderApi.md#cancelOrder) | **POST** /orders/{id}/cancel | Cancel whole order
[**confirmOrder**](OrderApi.md#confirmOrder) | **POST** /orders/{id}/confirm | Confirm order
[**getOrderByID**](OrderApi.md#getOrderByID) | **GET** /orders/{id} | Find order by ID


# **cancelOrder**
> cancelOrder($id, $body)

Cancel whole order

Cancels all order units

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

$api_instance = new Suppliers\Api\Api\OrderApi();
$id = "id_example"; // string | ID of order to cancel
$body = new \Suppliers\Api\Model\CancelOrderRequest(); // \Suppliers\Api\Model\CancelOrderRequest | Pet object that needs to be added to the store

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
 **body** | [**\Suppliers\Api\Model\CancelOrderRequest**](../Model/CancelOrderRequest.md)| Pet object that needs to be added to the store |

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
Suppliers\Api\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Suppliers\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: apiUsername
Suppliers\Api\Configuration::getDefaultConfiguration()->setApiKey('api-username', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Suppliers\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-username', 'Bearer');

$api_instance = new Suppliers\Api\Api\OrderApi();
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

# **getOrderByID**
> \Suppliers\Api\Model\GetOrderByIDResponse getOrderByID($id)

Find order by ID

Returns a single order

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

$api_instance = new Suppliers\Api\Api\OrderApi();
$id = "id_example"; // string | ID of order to return

try {
    $result = $api_instance->getOrderByID($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of order to return |

### Return type

[**\Suppliers\Api\Model\GetOrderByIDResponse**](../Model/GetOrderByIDResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


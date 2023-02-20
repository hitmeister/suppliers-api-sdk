# SMS\Suppliers\OrderApi

All URIs are relative to *https://sms.kaufland.de/api/v1/supplier*

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirmOrder**](OrderApi.md#confirmOrder) | **POST** /orders/{id}/confirm | Confirm order
[**getOrder**](OrderApi.md#getOrder) | **GET** /orders/{id} | Find order by ID
[**getOrders**](OrderApi.md#getOrders) | **GET** /orders | Find all orders by given parameters


# **confirmOrder**
> confirmOrder($id)

Confirm order

Confirm that an order has been received

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
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiVersion(1);

$apiInstance = new SMS\Suppliers\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of order to confirm

try {
    $apiInstance->confirmOrder($id);
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
> \SMS\Suppliers\Model\GetFulfilmentOrderResponse getOrder($id)

Find order by ID

Returns a single order

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
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiVersion(1);

$apiInstance = new SMS\Suppliers\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of order to return

try {
    $result = $apiInstance->getOrder($id);
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

[**\SMS\Suppliers\Model\GetFulfilmentOrderResponse**](../Model/GetFulfilmentOrderResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrders**
> \SMS\Suppliers\Model\GetFulfilmentOrdersResponse getOrders($created_at, $open, $limit, $page)

Find all orders by given parameters

Returns list of orders

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
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiVersion(1);

$apiInstance = new SMS\Suppliers\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$created_at = "created_at_example"; // string | Creation date of order
$open = "open_example"; // string | Order is not sent or canceled (values example: yes|true|1)
$limit = 100; // int | Results per page
$page = 1; // int | Page number applied to the result set

try {
    $result = $apiInstance->getOrders($created_at, $open, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrders: ', $e->getMessage(), PHP_EOL;
}

?>
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_at** | **string**| Creation date of order | [optional]
 **open** | **string**| Order is not sent or canceled (values example: yes|true|1) | [optional]
 **limit** | **int**| Results per page | [optional] [default to 100]
 **page** | **int**| Page number applied to the result set | [optional] [default to 1]

### Return type

[**\SMS\Suppliers\Model\GetFulfilmentOrdersResponse**](../Model/GetFulfilmentOrdersResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


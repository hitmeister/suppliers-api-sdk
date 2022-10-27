# SMS\Suppliers\OrderUnitApi

All URIs are relative to *https://sms.kaufland.de/api/v2/supplier*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrderUnit**](OrderUnitApi.md#cancelOrderUnit) | **POST** /order-units/{id}/cancel | Cancel an order unit
[**getOrderUnit**](OrderUnitApi.md#getOrderUnit) | **GET** /order-units/{id} | Find order unit by ID
[**pickOrderUnit**](OrderUnitApi.md#pickOrderUnit) | **POST** /order-units/{id}/pick | Change order unit status to &#39;picking&#39;
[**sendOrderUnit**](OrderUnitApi.md#sendOrderUnit) | **POST** /order-units/{id}/send | Send an order unit
[**updateOrderUnitShipment**](OrderUnitApi.md#updateOrderUnitShipment) | **POST** /order-units/{id}/shipment | Update shipment data of the order unit


# **cancelOrderUnit**
> cancelOrderUnit($id, $body)

Cancel an order unit

Cancels an order unit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: apiUsername
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-username', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-username', 'Bearer');
// Set API version (1 or 2)
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiVersion(2);

$apiInstance = new SMS\Suppliers\Api\v2\OrderUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of order unit to cancel
$body = new \SMS\Suppliers\Model\v2\CancelOrderUnitRequest(); // \SMS\Suppliers\Model\v2\CancelOrderUnitRequest | 

try {
    $apiInstance->cancelOrderUnit($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitApi->cancelOrderUnit: ', $e->getMessage(), PHP_EOL;
}

?>
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of order unit to cancel |
 **body** | [**\SMS\Suppliers\Model\v2\CancelOrderUnitRequest**](../Model/CancelOrderUnitRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderUnit**
> \SMS\Suppliers\Model\v2\GetFulfilmentOrderUnitResponse getOrderUnit($id)

Find order unit by ID

Returns a single order unit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: apiUsername
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-username', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-username', 'Bearer');
// Set API version (1 or 2)
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiVersion(2);

$apiInstance = new SMS\Suppliers\Api\v2\OrderUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of order unit to return

try {
    $result = $apiInstance->getOrderUnit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitApi->getOrderUnit: ', $e->getMessage(), PHP_EOL;
}

?>
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of order unit to return |

### Return type

[**\SMS\Suppliers\Model\v2\GetFulfilmentOrderUnitResponse**](../Model/GetFulfilmentOrderUnitResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pickOrderUnit**
> pickOrderUnit($id)

Change order unit status to 'picking'

Change order unit status to 'picking'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: apiUsername
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-username', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-username', 'Bearer');
// Set API version (1 or 2)
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiVersion(2);

$apiInstance = new SMS\Suppliers\Api\v2\OrderUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of order unit to update the status

try {
    $apiInstance->pickOrderUnit($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitApi->pickOrderUnit: ', $e->getMessage(), PHP_EOL;
}

?>
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of order unit to update the status |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendOrderUnit**
> sendOrderUnit($id, $body)

Send an order unit

Change order unit status to 'sent'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: apiUsername
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-username', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-username', 'Bearer');
// Set API version (1 or 2)
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiVersion(2);

$apiInstance = new SMS\Suppliers\Api\v2\OrderUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of order unit to mark as sent
$body = new \SMS\Suppliers\Model\v2\SendOrderUnitRequest(); // \SMS\Suppliers\Model\v2\SendOrderUnitRequest | 

try {
    $apiInstance->sendOrderUnit($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitApi->sendOrderUnit: ', $e->getMessage(), PHP_EOL;
}

?>
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of order unit to mark as sent |
 **body** | [**\SMS\Suppliers\Model\v2\SendOrderUnitRequest**](../Model/SendOrderUnitRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderUnitShipment**
> updateOrderUnitShipment($id, $body)

Update shipment data of the order unit

Update carrier and tracking number of the shipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: apiUsername
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-username', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-username', 'Bearer');
// Set API version (1 or 2)
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiVersion(2);

$apiInstance = new SMS\Suppliers\Api\v2\OrderUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of order unit to update shipment data
$body = new \SMS\Suppliers\Model\v2\UpdateOrderUnitShipmentDataRequest(); // \SMS\Suppliers\Model\v2\UpdateOrderUnitShipmentDataRequest | 

try {
    $apiInstance->updateOrderUnitShipment($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitApi->updateOrderUnitShipment: ', $e->getMessage(), PHP_EOL;
}

?>
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of order unit to update shipment data |
 **body** | [**\SMS\Suppliers\Model\v2\UpdateOrderUnitShipmentDataRequest**](../Model/UpdateOrderUnitShipmentDataRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


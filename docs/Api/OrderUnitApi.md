# SMS\Suppliers\OrderUnitApi

All URIs are relative to *https://sms.real.de/api/v1/supplier*

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
SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: apiUsername
SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-username', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-username', 'Bearer');

$api_instance = new SMS\Suppliers\Api\OrderUnitApi();
$id = "id_example"; // string | ID of order unit to cancel
$body = new \SMS\Suppliers\Model\CancelOrderUnitRequest(); // \SMS\Suppliers\Model\CancelOrderUnitRequest | 

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
 **body** | [**\SMS\Suppliers\Model\CancelOrderUnitRequest**](../Model/CancelOrderUnitRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderUnit**
> \SMS\Suppliers\Model\GetFulfilmentOrderUnitResponse getOrderUnit($id)

Find order unit by ID

Returns a single order unit

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

$api_instance = new SMS\Suppliers\Api\OrderUnitApi();
$id = "id_example"; // string | ID of order unit to return

try {
    $result = $api_instance->getOrderUnit($id);
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

[**\SMS\Suppliers\Model\GetFulfilmentOrderUnitResponse**](../Model/GetFulfilmentOrderUnitResponse.md)

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
SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: apiUsername
SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-username', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-username', 'Bearer');

$api_instance = new SMS\Suppliers\Api\OrderUnitApi();
$id = "id_example"; // string | ID of order unit to update the status

try {
    $api_instance->pickOrderUnit($id);
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
SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: apiUsername
SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-username', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-username', 'Bearer');

$api_instance = new SMS\Suppliers\Api\OrderUnitApi();
$id = "id_example"; // string | ID of order unit to mark as sent
$body = new \SMS\Suppliers\Model\SendOrderUnitRequest(); // \SMS\Suppliers\Model\SendOrderUnitRequest | 

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
 **body** | [**\SMS\Suppliers\Model\SendOrderUnitRequest**](../Model/SendOrderUnitRequest.md)|  |

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
SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: apiUsername
SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-username', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-username', 'Bearer');

$api_instance = new SMS\Suppliers\Api\OrderUnitApi();
$id = "id_example"; // string | ID of order unit to update shipment data
$body = new \SMS\Suppliers\Model\UpdateOrderUnitShipmentDataRequest(); // \SMS\Suppliers\Model\UpdateOrderUnitShipmentDataRequest | 

try {
    $api_instance->updateOrderUnitShipment($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrderUnitApi->updateOrderUnitShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of order unit to update shipment data |
 **body** | [**\SMS\Suppliers\Model\UpdateOrderUnitShipmentDataRequest**](../Model/UpdateOrderUnitShipmentDataRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# SMS\Suppliers\InventoryUnitApi

All URIs are relative to *https://localhost/api/v1/supplier*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteInventoryUnit**](InventoryUnitApi.md#deleteInventoryUnit) | **DELETE** /inventory-units/{id} | Delete inventory unit by ID
[**getInventoryUnit**](InventoryUnitApi.md#getInventoryUnit) | **GET** /inventory-units/{id} | Find inventory unit by ID
[**updateInventoryUnit**](InventoryUnitApi.md#updateInventoryUnit) | **PATCH** /inventory-units/{id} | Update inventory unit


# **deleteInventoryUnit**
> deleteInventoryUnit($id)

Delete inventory unit by ID

Deletes a single inventory unit

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

$api_instance = new SMS\Suppliers\Api\InventoryUnitApi();
$id = "id_example"; // string | ID of inventory unit to delete

try {
    $api_instance->deleteInventoryUnit($id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryUnitApi->deleteInventoryUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of inventory unit to delete |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryUnit**
> \SMS\Suppliers\Model\GetInventoryUnitResponse getInventoryUnit($id)

Find inventory unit by ID

Returns a single inventory unit

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

$api_instance = new SMS\Suppliers\Api\InventoryUnitApi();
$id = "id_example"; // string | ID of inventory unit to return

try {
    $result = $api_instance->getInventoryUnit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryUnitApi->getInventoryUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of inventory unit to return |

### Return type

[**\SMS\Suppliers\Model\GetInventoryUnitResponse**](../Model/GetInventoryUnitResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInventoryUnit**
> updateInventoryUnit($id, $body)

Update inventory unit

Update inventory unit

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

$api_instance = new SMS\Suppliers\Api\InventoryUnitApi();
$id = "id_example"; // string | ID of inventory
$body = new \SMS\Suppliers\Model\UpdateInventoryUnitRequest(); // \SMS\Suppliers\Model\UpdateInventoryUnitRequest | Inventory unit object that needs to be updated

try {
    $api_instance->updateInventoryUnit($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling InventoryUnitApi->updateInventoryUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of inventory |
 **body** | [**\SMS\Suppliers\Model\UpdateInventoryUnitRequest**](../Model/UpdateInventoryUnitRequest.md)| Inventory unit object that needs to be updated | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


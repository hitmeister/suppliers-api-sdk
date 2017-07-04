# Suppliers\Api\InventoryUnitApi

All URIs are relative to *https://localhost/api/v1/supplier*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteInventoryUnitByID**](InventoryUnitApi.md#deleteInventoryUnitByID) | **DELETE** /inventory-units/{id} | Delete inventory unit by ID
[**getInventoryUnitByID**](InventoryUnitApi.md#getInventoryUnitByID) | **GET** /inventory-units/{id} | Find inventory unit by ID
[**updateInventoryUnit**](InventoryUnitApi.md#updateInventoryUnit) | **PUT** /inventory-units/{id} | Update inventory unit


# **deleteInventoryUnitByID**
> deleteInventoryUnitByID($id)

Delete inventory unit by ID

Deletes a single inventory unit

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

$api_instance = new Suppliers\Api\Api\InventoryUnitApi();
$id = "id_example"; // string | ID of inventory unit to delete

try {
    $api_instance->deleteInventoryUnitByID($id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryUnitApi->deleteInventoryUnitByID: ', $e->getMessage(), PHP_EOL;
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

# **getInventoryUnitByID**
> \Suppliers\Api\Model\GetInventoryUnitsByInventoryIDResponse getInventoryUnitByID($id)

Find inventory unit by ID

Returns a single inventory unit

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

$api_instance = new Suppliers\Api\Api\InventoryUnitApi();
$id = "id_example"; // string | ID of inventory unit to return

try {
    $result = $api_instance->getInventoryUnitByID($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryUnitApi->getInventoryUnitByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of inventory unit to return |

### Return type

[**\Suppliers\Api\Model\GetInventoryUnitsByInventoryIDResponse**](../Model/GetInventoryUnitsByInventoryIDResponse.md)

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
Suppliers\Api\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Suppliers\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: apiUsername
Suppliers\Api\Configuration::getDefaultConfiguration()->setApiKey('api-username', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Suppliers\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-username', 'Bearer');

$api_instance = new Suppliers\Api\Api\InventoryUnitApi();
$id = "id_example"; // string | ID of inventory
$body = new \Suppliers\Api\Model\CreateInventoryUnitRequest(); // \Suppliers\Api\Model\CreateInventoryUnitRequest | Inventory unit object that needs to be updated

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
 **body** | [**\Suppliers\Api\Model\CreateInventoryUnitRequest**](../Model/\Suppliers\Api\Model\CreateInventoryUnitRequest.md)| Inventory unit object that needs to be updated |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


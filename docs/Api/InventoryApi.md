# SMS\Suppliers\InventoryApi

All URIs are relative to *http://sms.real.de/api/v1/supplier*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createImportRequest**](InventoryApi.md#createImportRequest) | **POST** /inventories/{id}/import-requests | Create new inventory import
[**createInventoryUnit**](InventoryApi.md#createInventoryUnit) | **POST** /inventories/{id}/units | Create new inventory unit
[**getInventory**](InventoryApi.md#getInventory) | **GET** /inventories/{id} | Find inventory by ID
[**getInventoryUnits**](InventoryApi.md#getInventoryUnits) | **GET** /inventories/{id}/units | Find all inventory units by inventory ID


# **createImportRequest**
> createImportRequest($id, $body)

Create new inventory import

Create new inventory import

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

$api_instance = new SMS\Suppliers\Api\InventoryApi();
$id = "id_example"; // string | ID of inventory
$body = new \SMS\Suppliers\Model\CreateImportRequest(); // \SMS\Suppliers\Model\CreateImportRequest | Inventory import request which stores all the necessary info

try {
    $api_instance->createImportRequest($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->createImportRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of inventory |
 **body** | [**\SMS\Suppliers\Model\CreateImportRequest**](../Model/CreateImportRequest.md)| Inventory import request which stores all the necessary info |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createInventoryUnit**
> \SMS\Suppliers\Model\CreateInventoryUnitResponse createInventoryUnit($id, $body)

Create new inventory unit

Create new inventory unit

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

$api_instance = new SMS\Suppliers\Api\InventoryApi();
$id = "id_example"; // string | ID of inventory
$body = new \SMS\Suppliers\Model\CreateInventoryUnitRequest(); // \SMS\Suppliers\Model\CreateInventoryUnitRequest | Inventory unit object that needs to be added to the inventory

try {
    $result = $api_instance->createInventoryUnit($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->createInventoryUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of inventory |
 **body** | [**\SMS\Suppliers\Model\CreateInventoryUnitRequest**](../Model/CreateInventoryUnitRequest.md)| Inventory unit object that needs to be added to the inventory |

### Return type

[**\SMS\Suppliers\Model\CreateInventoryUnitResponse**](../Model/CreateInventoryUnitResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventory**
> \SMS\Suppliers\Model\GetInventoryResponse getInventory($id)

Find inventory by ID

Returns a single inventory

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

$api_instance = new SMS\Suppliers\Api\InventoryApi();
$id = "id_example"; // string | ID of inventory to return

try {
    $result = $api_instance->getInventory($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of inventory to return |

### Return type

[**\SMS\Suppliers\Model\GetInventoryResponse**](../Model/GetInventoryResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryUnits**
> getInventoryUnits($id)

Find all inventory units by inventory ID

Returns a list of inventory units

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

$api_instance = new SMS\Suppliers\Api\InventoryApi();
$id = "id_example"; // string | ID of inventory

try {
    $api_instance->getInventoryUnits($id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventoryUnits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of inventory |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


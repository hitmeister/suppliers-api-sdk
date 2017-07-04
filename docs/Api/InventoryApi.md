# Suppliers\Api\InventoryApi

All URIs are relative to *https://localhost/api/v1/supplier*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInventoryUnit**](InventoryApi.md#createInventoryUnit) | **POST** /inventories/{id}/units | Create new inventory unit
[**createInventoryUnitImport**](InventoryApi.md#createInventoryUnitImport) | **POST** /inventories/{id}/import-requests | Create new inventory import
[**getInventoryByID**](InventoryApi.md#getInventoryByID) | **GET** /inventories/{id} | Find inventory by ID
[**getInventoryUnitsByInventoryID**](InventoryApi.md#getInventoryUnitsByInventoryID) | **GET** /inventories/{id}/units | Find all inventory units by inventory ID


# **createInventoryUnit**
> \Suppliers\Api\Model\CreateInventoryUnitResponse createInventoryUnit($id, $body)

Create new inventory unit

Create new inventory unit

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

$api_instance = new Suppliers\Api\Api\InventoryApi();
$id = "id_example"; // string | ID of inventory
$body = new \Suppliers\Api\Model\CreateInventoryUnitRequest(); // \Suppliers\Api\Model\CreateInventoryUnitRequest | Inventory unit object that needs to be added to the inventory

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
 **body** | [**\Suppliers\Api\Model\CreateInventoryUnitRequest**](../Model/\Suppliers\Api\Model\CreateInventoryUnitRequest.md)| Inventory unit object that needs to be added to the inventory |

### Return type

[**\Suppliers\Api\Model\CreateInventoryUnitResponse**](../Model/CreateInventoryUnitResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createInventoryUnitImport**
> createInventoryUnitImport($id, $body)

Create new inventory import

Create new inventory import

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

$api_instance = new Suppliers\Api\Api\InventoryApi();
$id = "id_example"; // string | ID of inventory
$body = new \Suppliers\Api\Model\CreateInventoryUnitImportRequest(); // \Suppliers\Api\Model\CreateInventoryUnitImportRequest | Inventory import request which stores all the necessary info

try {
    $api_instance->createInventoryUnitImport($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->createInventoryUnitImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of inventory |
 **body** | [**\Suppliers\Api\Model\CreateInventoryUnitImportRequest**](../Model/\Suppliers\Api\Model\CreateInventoryUnitImportRequest.md)| Inventory import request which stores all the necessary info |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryByID**
> \Suppliers\Api\Model\GetInventoryByIDResponse getInventoryByID($id)

Find inventory by ID

Returns a single inventory

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

$api_instance = new Suppliers\Api\Api\InventoryApi();
$id = "id_example"; // string | ID of inventory to return

try {
    $result = $api_instance->getInventoryByID($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventoryByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of inventory to return |

### Return type

[**\Suppliers\Api\Model\GetInventoryByIDResponse**](../Model/GetInventoryByIDResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryUnitsByInventoryID**
> getInventoryUnitsByInventoryID($id)

Find all inventory units by inventory ID

Returns a list of inventory units

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

$api_instance = new Suppliers\Api\Api\InventoryApi();
$id = "id_example"; // string | ID of inventory

try {
    $api_instance->getInventoryUnitsByInventoryID($id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventoryUnitsByInventoryID: ', $e->getMessage(), PHP_EOL;
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


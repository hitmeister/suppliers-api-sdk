# SMS\Suppliers\InventoryUnitApi

All URIs are relative to *https://sms.kaufland.de/api/v1/supplier*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInventoryUnit**](InventoryUnitApi.md#createInventoryUnit) | **POST** /inventory-units | Create new inventory unit
[**deleteInventoryUnit**](InventoryUnitApi.md#deleteInventoryUnit) | **DELETE** /inventory-units/{id} | Delete inventory unit by supplier_item_id
[**getInventoryUnit**](InventoryUnitApi.md#getInventoryUnit) | **GET** /inventory-units/{id} | Find inventory unit by supplier_item_id
[**getInventoryUnits**](InventoryUnitApi.md#getInventoryUnits) | **GET** /inventory-units | Find all inventory units
[**updateInventoryUnit**](InventoryUnitApi.md#updateInventoryUnit) | **PATCH** /inventory-units/{id} | Update inventory unit


# **createInventoryUnit**
> \SMS\Suppliers\Model\CreateInventoryUnitResponse createInventoryUnit($body)

Create new inventory unit

Creates a new inventory unit with specified data

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

$apiInstance = new SMS\Suppliers\Api\InventoryUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SMS\Suppliers\Model\CreateInventoryUnitRequest(); // \SMS\Suppliers\Model\CreateInventoryUnitRequest | Inventory unit object that needs to be added to the inventory

try {
    $result = $apiInstance->createInventoryUnit($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryUnitApi->createInventoryUnit: ', $e->getMessage(), PHP_EOL;
}

?>
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SMS\Suppliers\Model\CreateInventoryUnitRequest**](../Model/CreateInventoryUnitRequest.md)| Inventory unit object that needs to be added to the inventory |

### Return type

[**\SMS\Suppliers\Model\CreateInventoryUnitResponse**](../Model/CreateInventoryUnitResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInventoryUnit**
> deleteInventoryUnit($id)

Delete inventory unit by supplier_item_id

Deletes a single inventory unit

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

$apiInstance = new SMS\Suppliers\Api\InventoryUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | supplier_item_id of inventory unit to delete

try {
    $apiInstance->deleteInventoryUnit($id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryUnitApi->deleteInventoryUnit: ', $e->getMessage(), PHP_EOL;
}

?>
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| supplier_item_id of inventory unit to delete |

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

Find inventory unit by supplier_item_id

Returns a single inventory unit

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

$apiInstance = new SMS\Suppliers\Api\InventoryUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | supplier_item_id of inventory unit to return

try {
    $result = $apiInstance->getInventoryUnit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryUnitApi->getInventoryUnit: ', $e->getMessage(), PHP_EOL;
}

?>
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| supplier_item_id of inventory unit to return |

### Return type

[**\SMS\Suppliers\Model\GetInventoryUnitResponse**](../Model/GetInventoryUnitResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryUnits**
> \SMS\Suppliers\Model\GetInventoryUnitResponse[] getInventoryUnits($limit, $page)

Find all inventory units

Returns a list of inventory units

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

$apiInstance = new SMS\Suppliers\Api\InventoryUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Results per page
$page = 1; // int | Page number applied to the result set

try {
    $result = $apiInstance->getInventoryUnits($limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryUnitApi->getInventoryUnits: ', $e->getMessage(), PHP_EOL;
}

?>
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Results per page | [optional] [default to 100]
 **page** | **int**| Page number applied to the result set | [optional] [default to 1]

### Return type

[**\SMS\Suppliers\Model\GetInventoryUnitResponse[]**](../Model/GetInventoryUnitResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInventoryUnit**
> updateInventoryUnit($id, $body)

Update inventory unit

Updates an inventory unit by specified supplier_item_id

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

$apiInstance = new SMS\Suppliers\Api\InventoryUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | supplier_item_id of inventory unit
$body = new \SMS\Suppliers\Model\UpdateInventoryUnitRequest(); // \SMS\Suppliers\Model\UpdateInventoryUnitRequest | Inventory unit object that needs to be updated

try {
    $apiInstance->updateInventoryUnit($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling InventoryUnitApi->updateInventoryUnit: ', $e->getMessage(), PHP_EOL;
}

?>
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| supplier_item_id of inventory unit |
 **body** | [**\SMS\Suppliers\Model\UpdateInventoryUnitRequest**](../Model/UpdateInventoryUnitRequest.md)| Inventory unit object that needs to be updated | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


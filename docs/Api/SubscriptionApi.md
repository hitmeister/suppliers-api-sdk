# SMS\Suppliers\SubscriptionApi

All URIs are relative to *https://sms.kaufland.de/api/v1/supplier*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSubscription**](SubscriptionApi.md#createSubscription) | **POST** /subscriptions | Create new subscription
[**deleteSubscription**](SubscriptionApi.md#deleteSubscription) | **DELETE** /subscriptions/{id} | Delete existing subscription
[**updateSubscription**](SubscriptionApi.md#updateSubscription) | **PATCH** /subscriptions/{id} | Update existing subscription
[**viewSubscription**](SubscriptionApi.md#viewSubscription) | **GET** /subscriptions/{id} | View existing subscription
[**viewSubscriptions**](SubscriptionApi.md#viewSubscriptions) | **GET** /subscriptions | Get all existing subscriptions


# **createSubscription**
> \SMS\Suppliers\Model\CreateSubscriptionResponse createSubscription($body)

Create new subscription

Subscribes a current api client to the specific event

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

$apiInstance = new SMS\Suppliers\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SMS\Suppliers\Model\CreateSubscriptionRequest(); // \SMS\Suppliers\Model\CreateSubscriptionRequest | Subscription object that needs to be created

try {
    $result = $apiInstance->createSubscription($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}

?>
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SMS\Suppliers\Model\CreateSubscriptionRequest**](../Model/CreateSubscriptionRequest.md)| Subscription object that needs to be created |

### Return type

[**\SMS\Suppliers\Model\CreateSubscriptionResponse**](../Model/CreateSubscriptionResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubscription**
> deleteSubscription($id)

Delete existing subscription

Deletes an existing subscription by the specified id

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

$apiInstance = new SMS\Suppliers\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of Subscription

try {
    $apiInstance->deleteSubscription($id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->deleteSubscription: ', $e->getMessage(), PHP_EOL;
}

?>
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of Subscription |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSubscription**
> \SMS\Suppliers\Model\UpdateSubscriptionResponse updateSubscription($id, $body)

Update existing subscription

Updates an existing subscription by the specified id

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

$apiInstance = new SMS\Suppliers\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of Subscription
$body = new \SMS\Suppliers\Model\UpdateSubscriptionRequest(); // \SMS\Suppliers\Model\UpdateSubscriptionRequest | Subscription object that needs to be created

try {
    $result = $apiInstance->updateSubscription($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->updateSubscription: ', $e->getMessage(), PHP_EOL;
}

?>
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of Subscription |
 **body** | [**\SMS\Suppliers\Model\UpdateSubscriptionRequest**](../Model/UpdateSubscriptionRequest.md)| Subscription object that needs to be created |

### Return type

[**\SMS\Suppliers\Model\UpdateSubscriptionResponse**](../Model/UpdateSubscriptionResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewSubscription**
> \SMS\Suppliers\Model\ViewSubscriptionResponse viewSubscription($id)

View existing subscription

Returns an existing subscription by the specified id

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

$apiInstance = new SMS\Suppliers\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of Subscription

try {
    $result = $apiInstance->viewSubscription($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->viewSubscription: ', $e->getMessage(), PHP_EOL;
}

?>
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of Subscription |

### Return type

[**\SMS\Suppliers\Model\ViewSubscriptionResponse**](../Model/ViewSubscriptionResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewSubscriptions**
> \SMS\Suppliers\Model\ViewSubscriptionResponse[] viewSubscriptions()

Get all existing subscriptions

Returns all existing subscriptions for a current api client

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

$apiInstance = new SMS\Suppliers\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->viewSubscriptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->viewSubscriptions: ', $e->getMessage(), PHP_EOL;
}

?>
```


### Parameters
This endpoint does not need any parameter.

### Return type

[**\SMS\Suppliers\Model\ViewSubscriptionResponse[]**](../Model/ViewSubscriptionResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


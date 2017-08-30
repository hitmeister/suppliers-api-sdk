# suppliers-api-sdk
This documentation describes SMS Suppliers API. To be able use this API you should have an api-key and api-username

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.1
- Package version: 0.1.1
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/hitmeister/suppliers-api-sdk.git"
    }
  ],
  "require": {
    "hitmeister/suppliers-api-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/suppliers-api-sdk/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://sms.real.de/api/v1/supplier*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InventoryApi* | [**createImportRequest**](docs/Api/InventoryApi.md#createimportrequest) | **POST** /inventories/{id}/import-requests | Create new inventory import
*InventoryApi* | [**createInventoryUnit**](docs/Api/InventoryApi.md#createinventoryunit) | **POST** /inventories/{id}/units | Create new inventory unit
*InventoryApi* | [**getInventory**](docs/Api/InventoryApi.md#getinventory) | **GET** /inventories/{id} | Find inventory by ID
*InventoryApi* | [**getInventoryUnits**](docs/Api/InventoryApi.md#getinventoryunits) | **GET** /inventories/{id}/units | Find all inventory units by inventory ID
*InventoryUnitApi* | [**deleteInventoryUnit**](docs/Api/InventoryUnitApi.md#deleteinventoryunit) | **DELETE** /inventory-units/{id} | Delete inventory unit by ID
*InventoryUnitApi* | [**getInventoryUnit**](docs/Api/InventoryUnitApi.md#getinventoryunit) | **GET** /inventory-units/{id} | Find inventory unit by ID
*InventoryUnitApi* | [**updateInventoryUnit**](docs/Api/InventoryUnitApi.md#updateinventoryunit) | **PATCH** /inventory-units/{id} | Update inventory unit
*OrderApi* | [**cancelOrder**](docs/Api/OrderApi.md#cancelorder) | **POST** /orders/{id}/cancel | Cancel whole order
*OrderApi* | [**confirmOrder**](docs/Api/OrderApi.md#confirmorder) | **POST** /orders/{id}/confirm | Confirm order
*OrderApi* | [**getOrder**](docs/Api/OrderApi.md#getorder) | **GET** /orders/{id} | Find order by ID
*OrderUnitApi* | [**cancelOrderUnit**](docs/Api/OrderUnitApi.md#cancelorderunit) | **POST** /order-units/{id}/cancel | Cancel an order unit
*OrderUnitApi* | [**sendOrderUnit**](docs/Api/OrderUnitApi.md#sendorderunit) | **POST** /order-units/{id}/send | Send an order unit


## Documentation For Models

 - [BadRequestResponse](docs/Model/BadRequestResponse.md)
 - [CancelOrderRequest](docs/Model/CancelOrderRequest.md)
 - [CancelOrderUnitRequest](docs/Model/CancelOrderUnitRequest.md)
 - [CreateImportRequest](docs/Model/CreateImportRequest.md)
 - [CreateInventoryUnitResponse](docs/Model/CreateInventoryUnitResponse.md)
 - [GetInventoryResponse](docs/Model/GetInventoryResponse.md)
 - [GetInventoryUnitResponse](docs/Model/GetInventoryUnitResponse.md)
 - [GetOrderResponse](docs/Model/GetOrderResponse.md)
 - [SendOrderUnitRequest](docs/Model/SendOrderUnitRequest.md)
 - [UpdateInventoryUnitRequest](docs/Model/UpdateInventoryUnitRequest.md)
 - [User](docs/Model/User.md)
 - [CreateInventoryUnitRequest](docs/Model/CreateInventoryUnitRequest.md)


## Documentation For Authorization


## apiKey

- **Type**: API key
- **API key parameter name**: api-key
- **Location**: HTTP header

## apiUsername

- **Type**: API key
- **API key parameter name**: api-username
- **Location**: HTTP header


## Author

sms.tech@real-digital.de



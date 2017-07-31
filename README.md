# 
This documentation describes SMS API. To use this API you should have an api-key and api-username

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Package version: 0.0.1
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
    require_once('/path/to//autoload.php');
```

## Tests

To run the unit tests:

```
composer install
composer test
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://localhost/api/v1/supplier*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InventoryApi* | [**createInventoryUnit**](docs/Api/InventoryApi.md#createinventoryunit) | **POST** /inventories/{id}/units | Create new inventory unit
*InventoryApi* | [**createInventoryUnitImport**](docs/Api/InventoryApi.md#createinventoryunitimport) | **POST** /inventories/{id}/import-requests | Create new inventory import
*InventoryApi* | [**getInventoryByID**](docs/Api/InventoryApi.md#getinventorybyid) | **GET** /inventories/{id} | Find inventory by ID
*InventoryApi* | [**getInventoryUnitsByInventoryID**](docs/Api/InventoryApi.md#getinventoryunitsbyinventoryid) | **GET** /inventories/{id}/units | Find all inventory units by inventory ID
*InventoryUnitApi* | [**deleteInventoryUnitByID**](docs/Api/InventoryUnitApi.md#deleteinventoryunitbyid) | **DELETE** /inventory-units/{id} | Delete inventory unit by ID
*InventoryUnitApi* | [**getInventoryUnitByID**](docs/Api/InventoryUnitApi.md#getinventoryunitbyid) | **GET** /inventory-units/{id} | Find inventory unit by ID
*InventoryUnitApi* | [**updateInventoryUnit**](docs/Api/InventoryUnitApi.md#updateinventoryunit) | **PATCH** /inventory-units/{id} | Update inventory unit
*OrderApi* | [**cancelOrder**](docs/Api/OrderApi.md#cancelorder) | **POST** /orders/{id}/cancel | Cancel whole order
*OrderApi* | [**confirmOrder**](docs/Api/OrderApi.md#confirmorder) | **POST** /orders/{id}/confirm | Confirm order
*OrderApi* | [**getOrderByID**](docs/Api/OrderApi.md#getorderbyid) | **GET** /orders/{id} | Find order by ID
*OrderUnitApi* | [**cancelOrderUnit**](docs/Api/OrderUnitApi.md#cancelorderunit) | **POST** /order-units/{id}/cancel | Cancel an order unit
*OrderUnitApi* | [**sendOrderUnit**](docs/Api/OrderUnitApi.md#sendorderunit) | **POST** /order-units/{id}/send | Send an order unit


## Documentation For Models

 - [BadRequestResponse](docs/Model/BadRequestResponse.md)
 - [CancelOrderRequest](docs/Model/CancelOrderRequest.md)
 - [CancelOrderUnitRequest](docs/Model/CancelOrderUnitRequest.md)
 - [CreateInventoryUnitImportRequest](docs/Model/CreateInventoryUnitImportRequest.md)
 - [CreateInventoryUnitResponse](docs/Model/CreateInventoryUnitResponse.md)
 - [GetInventoryByIDResponse](docs/Model/GetInventoryByIDResponse.md)
 - [GetInventoryUnitsByInventoryIDResponse](docs/Model/GetInventoryUnitsByInventoryIDResponse.md)
 - [GetOrderByIDResponse](docs/Model/GetOrderByIDResponse.md)
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

apiteam@swagger.io



# CreateInventoryUnitRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **int** | Item ID | [optional] 
**condition** | **string** | Unit condition | [optional] 
**ean** | **string** | EAN | 
**quantity** | **int** | Unit Quantity | 
**minimal_order_volume** | **int** | Minimal Order Volume | [optional] 
**is_hauler_delivery** | **bool** | If this unit required a hauler delivery | [optional] 
**supplier_item_id** | **string** | Supplier Item ID | 
**origin_manufacturer_country** | **string** | Origin Manufacturer Country of the unit (in ISO-Alpha2 Format) | [optional] 
**country_values** | [**\SMS\Suppliers\Model\v2\CreateInventoryCountryValuesRequest[]**](CreateInventoryCountryValuesRequest.md) | Country specific values | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



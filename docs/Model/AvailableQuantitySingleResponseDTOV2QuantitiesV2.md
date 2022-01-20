# AvailableQuantitySingleResponseDTOV2QuantitiesV2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_modified** | **string** | The last modified date and time of available quantity as a ISO8601 format (yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSX). This date should not be neither in future nor older than previous lastModified value from partner. If it is future date/time, then it will lead to an error response. If it is older than previous lastModified value from partner, then the quantity update will be ignored. It is used to ensure the current status of the updated quantities. | 
**quantity** | **int** | The available quantity of a specific SKU, which can be any integer value &gt;&#x3D; 0. | 
**sku** | **string** | StockKeepingUnit given by partner configuration. e.g. &#x27;shirt-red-M&#x27;, external identifier of article variation. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


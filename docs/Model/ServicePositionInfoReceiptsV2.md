# ServicePositionInfoReceiptsV2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unit_price** | [**AllOfServicePositionInfoReceiptsV2UnitPrice**](AllOfServicePositionInfoReceiptsV2UnitPrice.md) | Price of service per item. | 
**vat_rate** | **float** | VAT rate for the specific service | 
**quantity** | **int** | Number for items which are applicable for service | 
**total** | [**AllOfServicePositionInfoReceiptsV2Total**](AllOfServicePositionInfoReceiptsV2Total.md) | Total price of this service; i.e unitPrice is multiplied by quantity | 
**service_name** | **string** | Service name | 
**service_type** | **string** |  | [optional] 
**product_title** | **string** | Title of the linked product | 
**article_number** | **string** | Article number of the linked product | 
**promotion** | **string** | Promotion code of the linked product | 
**service_position_items** | [**\Otto\Client\Model\ServicePositionItemInfoReceiptsV2[]**](ServicePositionItemInfoReceiptsV2.md) |  | 
**linked_product_receipt_number** | **string** | Human-readable identifier refers to the purchase receipt the linked item was billed. Displayed only if item is billed with another receipt. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


# LineItemReceiptsV2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unit_price** | [**AllOfLineItemReceiptsV2UnitPrice**](AllOfLineItemReceiptsV2UnitPrice.md) | The original unit gross price for a single item of this position before discount. Always displayed positively. | 
**price_to_pay** | [**AllOfLineItemReceiptsV2PriceToPay**](AllOfLineItemReceiptsV2PriceToPay.md) | The billed unit gross price for a single position item of this position after discount (if there is any). Always displayed positively. | 
**total_discount** | [**AllOfLineItemReceiptsV2TotalDiscount**](AllOfLineItemReceiptsV2TotalDiscount.md) | The total amount of discount of this lineItem (&#x3D; discount per item * qantity). Values are always positive. | [optional] 
**discount_details** | [**\Otto\Client\Model\DiscountDetailsReceiptsV2**](DiscountDetailsReceiptsV2.md) |  | [optional] 
**vat_rate** | **float** | The vat rate applicable for this position | 
**quantity** | **int** | Number of position items of this product billed or refunded with this receipt | 
**total** | [**AllOfLineItemReceiptsV2Total**](AllOfLineItemReceiptsV2Total.md) | Total gross price of this position.In case of purchase receipts it&#x27;s calculated out of unit price and quantity.In case of refund or partial refund receipts, it&#x27;s the granted price.Always displayed positively. | 
**position_item_ids** | **string[]** | List of all position item ids of the order billed or reimbursed. In case of refund receipts the list can be empty. | 
**promotion** | **string** | Promotion code, that together with the articleNumber it is shown as \&quot;article number\&quot; on the product detail page at the time of ordering. It&#x27;s part of the unique description of an ordered product on a receipt. | 
**dimensions** | **string** | Characteristics of a product like color, size or extension separated by commas.Shown on the product detail page when choosing the product. It&#x27;s part of the unique description of an ordered product on a receipt. | 
**product_title** | **string** | Short description of the ordered product shown on the product detail page at the time of ordering. It&#x27;s part of the unique description of an ordered product on a receipt. | 
**article_number** | **string** | External identifier of the product, together with the promotion it is shown as \&quot;article number\&quot; on the product detail page at the time of ordering. It&#x27;s part of the unique description of an ordered product on a receipt. | 
**partial_refund_history** | [**\Otto\Client\Model\PartialRefundReceiptsV2[]**](PartialRefundReceiptsV2.md) | List of all partial refunds that were processed for different position items. In case there were no prior partial reimbursements, then this section will not be available. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


# Receipt

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Special type of receipt. Needed to make a distinction between different type of receipts | 
**original_receipt_number** | **string** | Unique identifier of the corresponding purchase receipt with which the reimbursed position item was billed. Only filled in case of refund or partial refund receipts.In case of &#x27;refund receipt for shipping costs only&#x27; the field remains empty even if it is a refund receipt.Printed on the purchase receipt and used to identified the corresponding purchase receipt. | [optional] 
**original_creation_date** | [**\DateTime**](\DateTime.md) | Creation date of the corresponding purchase receipt. This is not available for purchase receipt. | [optional] 
**receipt_number** | **string** | Unique identifier of a receipt. Printed on the receipt and used to identified the receipt in case of contact to user and partner. | 
**sales_order_id** | **string** | Reference to the sales order with that the order was placed. Taken from corresponding sales order. | 
**order_number** | **string** | The human-readable sales order number taken from corresponding sales order. Printed on the receipt. | 
**url** | **string** | API call to get corresponding PDF receipts, if available. | [optional] 
**creation_date** | [**\DateTime**](\DateTime.md) | Date and time when receipt is created by system. | 
**order_date** | [**\DateTime**](\DateTime.md) | Date and time when the corresponding order was placed. | 
**shipment_date** | [**\DateTime**](\DateTime.md) | Date and time when the position items handed over to the carrier for delivery to the customer. Only available for purchase receipts. | [optional] 
**payment_method** | **string** | Payment method used by the customer to pay for this order. | 
**partner** | [**\Otto\Client\Receipts\Model\Partner**](Partner.md) |  | 
**customer** | [**\Otto\Client\Receipts\Model\Customer**](Customer.md) |  | 
**delivery_address** | [**\Otto\Client\Receipts\Model\DeliveryAddress**](DeliveryAddress.md) |  | [optional] 
**line_items** | [**\Otto\Client\Receipts\Model\LineItem[]**](LineItem.md) | List of specific position item ids of the order billed or reimbursed.In case of &#x27;refund receipt for shipping costs only&#x27; the list can be empty. | [optional] 
**shipping_cost** | [**\Otto\Client\Receipts\Model\ShippingCost**](ShippingCost.md) |  | [optional] 
**total** | [**\Otto\Client\Receipts\Model\Total**](Total.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


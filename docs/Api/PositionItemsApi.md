# Otto\Client\PositionItemsApi

All URIs are relative to *//live.api.otto.market*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelPartnerOrderPositionItems**](PositionItemsApi.md#cancelpartnerorderpositionitems) | **POST** /v3/orders/{salesOrderId}/positionItems/{positionItemId}/cancellation | Cancels PositionItems of an order by ids

# **cancelPartnerOrderPositionItems**
> cancelPartnerOrderPositionItems($sales_order_id, $position_item_id)

Cancels PositionItems of an order by ids

Using the provided ids, all of the corresponding PositionItems will be cancelled. Note, only PositionItems in the states PROCESSABLE  will get changed. PositionItems in different states will be ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Orders\Api\PositionItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_order_id = "sales_order_id_example"; // string | The Sales Order Id of the order to cancel
$position_item_id = array("position_item_id_example"); // string[] | The ids of the PositionItems to cancel

try {
    $apiInstance->cancelPartnerOrderPositionItems($sales_order_id, $position_item_id);
} catch (Exception $e) {
    echo 'Exception when calling PositionItemsApi->cancelPartnerOrderPositionItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_order_id** | **string**| The Sales Order Id of the order to cancel |
 **position_item_id** | [**string[]**](../Model/string.md)| The ids of the PositionItems to cancel |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Otto\Client\ALLApi

All URIs are relative to *//live.api.otto.market*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelPartnerOrderPositionItems**](ALLApi.md#cancelpartnerorderpositionitems) | **POST** /v3/orders/{salesOrderId}/positionItems/{positionItemId}/cancellation | Cancels PositionItems of an order by ids
[**cancelPartnerOrders**](ALLApi.md#cancelpartnerorders) | **POST** /v3/orders/{salesOrderId}/cancellation | Cancel all PositionItems of an order
[**findPartnerOrders**](ALLApi.md#findpartnerorders) | **GET** /v3/orders | Get a list of orders which can be filtered on fulfillmentStatus.
[**getPartnerOrderByOrderNumber**](ALLApi.md#getpartnerorderbyordernumber) | **GET** /v3/orders/{orderNumber} | Get a single order via Order Number
[**getPartnerOrderBySalesOrderId**](ALLApi.md#getpartnerorderbysalesorderid) | **GET** /v3/orders/{salesOrderId} | Get a single order via Sales Order Id

# **cancelPartnerOrderPositionItems**
> cancelPartnerOrderPositionItems($sales_order_id, $position_item_id)

Cancels PositionItems of an order by ids

Using the provided ids, all of the corresponding PositionItems will be cancelled. Note, only PositionItems in the states PROCESSABLE  will get changed. PositionItems in different states will be ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Orders\Api\ALLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_order_id = "sales_order_id_example"; // string | The Sales Order Id of the order to cancel
$position_item_id = array("position_item_id_example"); // string[] | The ids of the PositionItems to cancel

try {
    $apiInstance->cancelPartnerOrderPositionItems($sales_order_id, $position_item_id);
} catch (Exception $e) {
    echo 'Exception when calling ALLApi->cancelPartnerOrderPositionItems: ', $e->getMessage(), PHP_EOL;
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

# **cancelPartnerOrders**
> cancelPartnerOrders($sales_order_id)

Cancel all PositionItems of an order

Cancel all PositionItems of a order. Note, only PositionItems in the states PROCESSABLE  will get changed. PositionItems in different states will be ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Orders\Api\ALLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_order_id = array("sales_order_id_example"); // string[] | The Sales Order Id of the order to cancel

try {
    $apiInstance->cancelPartnerOrders($sales_order_id);
} catch (Exception $e) {
    echo 'Exception when calling ALLApi->cancelPartnerOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_order_id** | [**string[]**](../Model/string.md)| The Sales Order Id of the order to cancel |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findPartnerOrders**
> \Otto\Client\Orders\Model\PartnerOrderList findPartnerOrders($from_date, $from_order_date, $to_order_date, $fulfillment_status, $limit, $order_direction, $order_column_type, $mode, $nextcursor, $search_term)

Get a list of orders which can be filtered on fulfillmentStatus.

The orders will be sorted on orderDate from oldest to newest. Additionally we provide cursor based pagination via next link. This endpoint is limited to at max 128 results. Note: It can happen, if orders are created in the same millisecond, that you will receive the same partner twice on two successive pages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Orders\Api\ALLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_date = "from_date_example"; // string | Defines, which minimum change date the returned order should have. In ISO 8601 format.
$from_order_date = "from_order_date_example"; // string | Lower boundary of filter by order date: Only orders newer than the date specified will be returned. In ISO 8601 format.
$to_order_date = "to_order_date_example"; // string | Upper boundary of filter by order date: Only orders older than the date specified will be returned. In ISO 8601 format.
$fulfillment_status = "fulfillment_status_example"; // string | Defines, which minimum state the returned orders should have.<br>If ANNOUNCED is given, all orders, which have at least one PositionItem in ANNOUNCED state are returned.<br>If PROCESSABLE is given, all orders, which have at least one PositionItem in PROCESSABLE state and none in ANNOUNCED state are returned.<br>If SENT is given, all orders, which have at least one PositionItem in SENT state and none in either ANNOUNCED or PROCESSABLE state are returned.<br>If RETURNED is given, all orders, which have at least one PositionItem in RETURNED state and none in either ANNOUNCED or PROCESSABLE or SENT state are returned.<br>If CANCELLED_BY_PARTNER is given, all orders, which have at least one PositionItem in CANCELLED_BY_PARTNER state are returned.<br>If CANCELLED_BY_MARKETPLACE is given, all orders, which have at least one PositionItem in CANCELLED_BY_MARKETPLACE state are returned.<br>If none is provided, all status will be returned.<br>Several values can be passed via request param array, when multiple values passed, search result will be combination of multiple fulfillmentStatuses - no duplicates will appear.<br>Example: ?fulfillmentStatus=PROCESSABLE&fulfillmentStatus=CANCELLED_BY_MARKETPLACE - will return orders in these 3 fulfillmentStatuses.<br>Alternatively, mode can be passed for a different search type. BUCKET/AT_LEAST_ONE, where BUCKET is default behaviour explained above and AT_LEAST_ONE checks if there is at least 1 PositionItem with passed fulfillmentStatus/fulfillmentStatuses.
$limit = 128; // int | The maximum amount of returned orders
$order_direction = "ASC"; // string | 
$order_column_type = "ORDER_LIFECYCLE_DATE"; // string | 
$mode = "BUCKET"; // string | The search mode. Default search mode is bucket search
$nextcursor = "nextcursor_example"; // string | For paging request this cursor is required. If a next cursor is provided, the only other request parameter being considered is 'limit'.<br>Only the cursor string is required, not the whole link to the cursor.<br>Example: nextcursor=eyJmZiI6MTU5NDg5NDQ3MTA1OCwicGlmIjoiNDcxM...
$search_term = "search_term_example"; // string | The search term for partial text search.

try {
    $result = $apiInstance->findPartnerOrders($from_date, $from_order_date, $to_order_date, $fulfillment_status, $limit, $order_direction, $order_column_type, $mode, $nextcursor, $search_term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ALLApi->findPartnerOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **string**| Defines, which minimum change date the returned order should have. In ISO 8601 format. | [optional]
 **from_order_date** | **string**| Lower boundary of filter by order date: Only orders newer than the date specified will be returned. In ISO 8601 format. | [optional]
 **to_order_date** | **string**| Upper boundary of filter by order date: Only orders older than the date specified will be returned. In ISO 8601 format. | [optional]
 **fulfillment_status** | **string**| Defines, which minimum state the returned orders should have.&lt;br&gt;If ANNOUNCED is given, all orders, which have at least one PositionItem in ANNOUNCED state are returned.&lt;br&gt;If PROCESSABLE is given, all orders, which have at least one PositionItem in PROCESSABLE state and none in ANNOUNCED state are returned.&lt;br&gt;If SENT is given, all orders, which have at least one PositionItem in SENT state and none in either ANNOUNCED or PROCESSABLE state are returned.&lt;br&gt;If RETURNED is given, all orders, which have at least one PositionItem in RETURNED state and none in either ANNOUNCED or PROCESSABLE or SENT state are returned.&lt;br&gt;If CANCELLED_BY_PARTNER is given, all orders, which have at least one PositionItem in CANCELLED_BY_PARTNER state are returned.&lt;br&gt;If CANCELLED_BY_MARKETPLACE is given, all orders, which have at least one PositionItem in CANCELLED_BY_MARKETPLACE state are returned.&lt;br&gt;If none is provided, all status will be returned.&lt;br&gt;Several values can be passed via request param array, when multiple values passed, search result will be combination of multiple fulfillmentStatuses - no duplicates will appear.&lt;br&gt;Example: ?fulfillmentStatus&#x3D;PROCESSABLE&amp;fulfillmentStatus&#x3D;CANCELLED_BY_MARKETPLACE - will return orders in these 3 fulfillmentStatuses.&lt;br&gt;Alternatively, mode can be passed for a different search type. BUCKET/AT_LEAST_ONE, where BUCKET is default behaviour explained above and AT_LEAST_ONE checks if there is at least 1 PositionItem with passed fulfillmentStatus/fulfillmentStatuses. | [optional]
 **limit** | **int**| The maximum amount of returned orders | [optional] [default to 128]
 **order_direction** | **string**|  | [optional] [default to ASC]
 **order_column_type** | **string**|  | [optional] [default to ORDER_LIFECYCLE_DATE]
 **mode** | **string**| The search mode. Default search mode is bucket search | [optional] [default to BUCKET]
 **nextcursor** | **string**| For paging request this cursor is required. If a next cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;.&lt;br&gt;Only the cursor string is required, not the whole link to the cursor.&lt;br&gt;Example: nextcursor&#x3D;eyJmZiI6MTU5NDg5NDQ3MTA1OCwicGlmIjoiNDcxM... | [optional]
 **search_term** | **string**| The search term for partial text search. | [optional]

### Return type

[**\Otto\Client\Orders\Model\PartnerOrderList**](../Model/PartnerOrderList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPartnerOrderByOrderNumber**
> \Otto\Client\Orders\Model\PartnerOrder getPartnerOrderByOrderNumber($order_number)

Get a single order via Order Number

Using the provided Order Number will provide the according order. The Order Number is a unique key, so it will always return only one order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Orders\Api\ALLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | The Order Number used for searching

try {
    $result = $apiInstance->getPartnerOrderByOrderNumber($order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ALLApi->getPartnerOrderByOrderNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| The Order Number used for searching |

### Return type

[**\Otto\Client\Orders\Model\PartnerOrder**](../Model/PartnerOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPartnerOrderBySalesOrderId**
> \Otto\Client\Orders\Model\PartnerOrder getPartnerOrderBySalesOrderId($sales_order_id)

Get a single order via Sales Order Id

Using the provided Sales Order Id will provide the according order. The Sales Order Id is a unique key, so it will always return only one order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Orders\Api\ALLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_order_id = "sales_order_id_example"; // string | The Sales Order Id used for searching

try {
    $result = $apiInstance->getPartnerOrderBySalesOrderId($sales_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ALLApi->getPartnerOrderBySalesOrderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_order_id** | **string**| The Sales Order Id used for searching |

### Return type

[**\Otto\Client\Orders\Model\PartnerOrder**](../Model/PartnerOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


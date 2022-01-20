# Otto\Client\OrdersV4Api

All URIs are relative to *https://api.otto.market*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersV4CancelPartnerOrderPositionItems**](OrdersV4Api.md#ordersv4cancelpartnerorderpositionitems) | **POST** /v4/orders/{salesOrderId}/positionItems/{positionItemId}/cancellation | Cancel specific position items of an order
[**ordersV4CancelPartnerOrders**](OrdersV4Api.md#ordersv4cancelpartnerorders) | **POST** /v4/orders/{salesOrderId}/cancellation | Cancel all position items of an order
[**ordersV4FindPartnerOrders**](OrdersV4Api.md#ordersv4findpartnerorders) | **GET** /v4/orders | List of orders filtered by fulfillment state
[**ordersV4GetPartnerOrderByOrderNumber**](OrdersV4Api.md#ordersv4getpartnerorderbyordernumber) | **GET** /v4/orders/{orderNumber} | Get an order via order number
[**ordersV4GetPartnerOrderBySalesOrderId**](OrdersV4Api.md#ordersv4getpartnerorderbysalesorderid) | **GET** /v4/orders/{salesOrderId} | Get an order via sales order id

# **ordersV4CancelPartnerOrderPositionItems**
> ordersV4CancelPartnerOrderPositionItems($sales_order_id, $position_item_id)

Cancel specific position items of an order

Allows to cancel specific position items of an order by salesOrderId and positionItemIds.<br>Note: Only position items in state PROCESSABLE can be cancelled. Position items in state CANCELLED_BY_PARTNER will be ignored. If any position item is in a different state the operation will leave the whole order unchanged and respond with a conflict error message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\OrdersV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order_id = "sales_order_id_example"; // string | The salesOrderId of the order
$position_item_id = array("position_item_id_example"); // string[] | The positionItemIds of the order to cancel

try {
    $apiInstance->ordersV4CancelPartnerOrderPositionItems($sales_order_id, $position_item_id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV4Api->ordersV4CancelPartnerOrderPositionItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_order_id** | **string**| The salesOrderId of the order |
 **position_item_id** | [**string[]**](../Model/string.md)| The positionItemIds of the order to cancel |

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV4CancelPartnerOrders**
> ordersV4CancelPartnerOrders($sales_order_id)

Cancel all position items of an order

Allows to cancel all position items of one or more orders by salesOrderId.<br>Note: Only position items in state PROCESSABLE can be cancelled. Position items in different states will be ignored. If no position item can be cancelled the operation will respond with a conflict error message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\OrdersV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order_id = array("sales_order_id_example"); // string[] | The salesOrderIds of the orders to cancel

try {
    $apiInstance->ordersV4CancelPartnerOrders($sales_order_id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV4Api->ordersV4CancelPartnerOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_order_id** | [**string[]**](../Model/string.md)| The salesOrderIds of the orders to cancel |

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV4FindPartnerOrders**
> \Otto\Client\Model\PartnerOrderListOrdersV4 ordersV4FindPartnerOrders($from_date, $from_order_date, $to_order_date, $fulfillment_status, $limit, $order_direction, $order_column_type, $mode, $nextcursor)

List of orders filtered by fulfillment state

Retrieve orders sorted by order date from oldest to newest. The number of returned orders is limited to 128; cursor based pagination is supported.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\OrdersV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = "from_date_example"; // string | Defines earliest change date (ISO 8601) the returned orders should have
$from_order_date = "from_order_date_example"; // string | Only orders newer than the date specified (ISO 8601) will be returned
$to_order_date = "to_order_date_example"; // string | Only orders older than the date specified (ISO 8601) will be returned
$fulfillment_status = "fulfillment_status_example"; // string | <br>ANNOUNCED: Orders with at least one position item in state ANNOUNCED<br>PROCESSABLE: Orders with at least one position item in state PROCESSABLE and none in ANNOUNCED<br>SENT: Orders with at least one position item in state SENT and none in either ANNOUNCED or PROCESSABLE<br>RETURNED: Orders with at least one position item in state RETURNED and none in either ANNOUNCED, PROCESSABLE, or SENT<br>CANCELLED_BY_PARTNER: Orders with at least one position item in state CANCELLED_BY_PARTNER<br>CANCELLED_BY_MARKETPLACE: Orders with at least one position item in state CANCELLED_BY_MARKETPLACE<br><br>If no state is provided, orders in all possible states are returned.<br>Several values can be passed; it will return a combination of these states without duplicates. Also see parameter 'mode'.<br><br>Example: ?fulfillmentStatus=PROCESSABLE&fulfillmentStatus=CANCELLED_BY_MARKETPLACE
$limit = 128; // int | The maximum amount of orders to return
$order_direction = "ASC"; // string | Sort result by 'orderColumnType' in ASCending or DESCending order
$order_column_type = "ORDER_LIFECYCLE_DATE"; // string | The column on which to apply 'orderDirection' parameter
$mode = "BUCKET"; // string | In search mode AT_LEAST_ONE orders with at least one  position item in given 'fulfillmentStatus' will always be returned
$nextcursor = "nextcursor_example"; // string | Cursor for paging requests. If a next cursor is provided, the only other request parameter being considered is 'limit'<br><br>Note: Only the cursor string is required - not the whole link

try {
    $result = $apiInstance->ordersV4FindPartnerOrders($from_date, $from_order_date, $to_order_date, $fulfillment_status, $limit, $order_direction, $order_column_type, $mode, $nextcursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV4Api->ordersV4FindPartnerOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **string**| Defines earliest change date (ISO 8601) the returned orders should have | [optional]
 **from_order_date** | **string**| Only orders newer than the date specified (ISO 8601) will be returned | [optional]
 **to_order_date** | **string**| Only orders older than the date specified (ISO 8601) will be returned | [optional]
 **fulfillment_status** | **string**| &lt;br&gt;ANNOUNCED: Orders with at least one position item in state ANNOUNCED&lt;br&gt;PROCESSABLE: Orders with at least one position item in state PROCESSABLE and none in ANNOUNCED&lt;br&gt;SENT: Orders with at least one position item in state SENT and none in either ANNOUNCED or PROCESSABLE&lt;br&gt;RETURNED: Orders with at least one position item in state RETURNED and none in either ANNOUNCED, PROCESSABLE, or SENT&lt;br&gt;CANCELLED_BY_PARTNER: Orders with at least one position item in state CANCELLED_BY_PARTNER&lt;br&gt;CANCELLED_BY_MARKETPLACE: Orders with at least one position item in state CANCELLED_BY_MARKETPLACE&lt;br&gt;&lt;br&gt;If no state is provided, orders in all possible states are returned.&lt;br&gt;Several values can be passed; it will return a combination of these states without duplicates. Also see parameter &#x27;mode&#x27;.&lt;br&gt;&lt;br&gt;Example: ?fulfillmentStatus&#x3D;PROCESSABLE&amp;fulfillmentStatus&#x3D;CANCELLED_BY_MARKETPLACE | [optional]
 **limit** | **int**| The maximum amount of orders to return | [optional] [default to 128]
 **order_direction** | **string**| Sort result by &#x27;orderColumnType&#x27; in ASCending or DESCending order | [optional] [default to ASC]
 **order_column_type** | **string**| The column on which to apply &#x27;orderDirection&#x27; parameter | [optional] [default to ORDER_LIFECYCLE_DATE]
 **mode** | **string**| In search mode AT_LEAST_ONE orders with at least one  position item in given &#x27;fulfillmentStatus&#x27; will always be returned | [optional] [default to BUCKET]
 **nextcursor** | **string**| Cursor for paging requests. If a next cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;&lt;br&gt;&lt;br&gt;Note: Only the cursor string is required - not the whole link | [optional]

### Return type

[**\Otto\Client\Model\PartnerOrderListOrdersV4**](../Model/PartnerOrderListOrdersV4.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV4GetPartnerOrderByOrderNumber**
> \Otto\Client\Model\PartnerOrderOrdersV4 ordersV4GetPartnerOrderByOrderNumber($order_number)

Get an order via order number

Fetch a single order by its unique order number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\OrdersV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | 

try {
    $result = $apiInstance->ordersV4GetPartnerOrderByOrderNumber($order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV4Api->ordersV4GetPartnerOrderByOrderNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**|  |

### Return type

[**\Otto\Client\Model\PartnerOrderOrdersV4**](../Model/PartnerOrderOrdersV4.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV4GetPartnerOrderBySalesOrderId**
> \Otto\Client\Model\PartnerOrderOrdersV4 ordersV4GetPartnerOrderBySalesOrderId($sales_order_id)

Get an order via sales order id

Fetch a single order by its unique sales order id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\OrdersV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order_id = "sales_order_id_example"; // string | 

try {
    $result = $apiInstance->ordersV4GetPartnerOrderBySalesOrderId($sales_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV4Api->ordersV4GetPartnerOrderBySalesOrderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_order_id** | **string**|  |

### Return type

[**\Otto\Client\Model\PartnerOrderOrdersV4**](../Model/PartnerOrderOrdersV4.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


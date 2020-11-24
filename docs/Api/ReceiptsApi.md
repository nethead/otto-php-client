# Otto\Client\ReceiptsApi

All URIs are relative to *https://live.api.otto.market/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReceiptPdfUsingGET3**](ReceiptsApi.md#getreceiptpdfusingget3) | **GET** /v2/receipts/{receiptNumber}.pdf | Get the PDF document of a specific receipt by receipt number.
[**getReceiptUsingGET5**](ReceiptsApi.md#getreceiptusingget5) | **GET** /v2/receipts/{receiptNumber} | Get a specific receipt for the given receipt number as JSON object
[**getReceiptsUsingGET5**](ReceiptsApi.md#getreceiptsusingget5) | **GET** /v2/receipts | Get all receipts as list of JSON objects

# **getReceiptPdfUsingGET3**
> getReceiptPdfUsingGET3($receipt_number)

Get the PDF document of a specific receipt by receipt number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Receipts\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$receipt_number = "receipt_number_example"; // string | ReceiptNumber

try {
    $apiInstance->getReceiptPdfUsingGET3($receipt_number);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceiptPdfUsingGET3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_number** | **string**| ReceiptNumber |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceiptUsingGET5**
> \Otto\Client\Receipts\Model\Receipt getReceiptUsingGET5($receipt_number)

Get a specific receipt for the given receipt number as JSON object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Receipts\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$receipt_number = "receipt_number_example"; // string | ReceiptNumber

try {
    $result = $apiInstance->getReceiptUsingGET5($receipt_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceiptUsingGET5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_number** | **string**| ReceiptNumber |

### Return type

[**\Otto\Client\Receipts\Model\Receipt**](../Model/Receipt.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceiptsUsingGET5**
> \Otto\Client\Receipts\Model\ReceiptsList getReceiptsUsingGET5($limit, $page, $type, $sales_order_id)

Get all receipts as list of JSON objects

The receipts will be sorted on receiptId in chronological order. Additionally we provide cursor based pagination via next link. This endpoint is limited to at max 128 results per page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Receipts\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 128; // int | Page size to limit the number of receipts returned in the response
$page = 1; // int | Page number to fetch. This parameter is required to fetch data for specific page number
$type = "type_example"; // string | Search for receipts filtered by receipt type
$sales_order_id = "sales_order_id_example"; // string | Search for receipts filtered by sales order Id

try {
    $result = $apiInstance->getReceiptsUsingGET5($limit, $page, $type, $sales_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceiptsUsingGET5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Page size to limit the number of receipts returned in the response | [optional] [default to 128]
 **page** | **int**| Page number to fetch. This parameter is required to fetch data for specific page number | [optional] [default to 1]
 **type** | **string**| Search for receipts filtered by receipt type | [optional]
 **sales_order_id** | **string**| Search for receipts filtered by sales order Id | [optional]

### Return type

[**\Otto\Client\Receipts\Model\ReceiptsList**](../Model/ReceiptsList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


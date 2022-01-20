# Otto\Client\ReceiptsV2Api

All URIs are relative to *https://api.otto.market*

Method | HTTP request | Description
------------- | ------------- | -------------
[**receiptsV2GetReceiptPdfUsingGET3**](ReceiptsV2Api.md#receiptsv2getreceiptpdfusingget3) | **GET** /v2/receipts/{receiptNumber}.pdf | Get the PDF document of a specific receipt by receipt number.
[**receiptsV2GetReceiptUsingGET5**](ReceiptsV2Api.md#receiptsv2getreceiptusingget5) | **GET** /v2/receipts/{receiptNumber} | Get a specific receipt for the given receipt number as JSON object
[**receiptsV2GetReceiptsUsingGET5**](ReceiptsV2Api.md#receiptsv2getreceiptsusingget5) | **GET** /v2/receipts | Get all receipts as list of JSON objects

# **receiptsV2GetReceiptPdfUsingGET3**
> receiptsV2GetReceiptPdfUsingGET3($receipt_number)

Get the PDF document of a specific receipt by receipt number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReceiptsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_number = "receipt_number_example"; // string | ReceiptNumber

try {
    $apiInstance->receiptsV2GetReceiptPdfUsingGET3($receipt_number);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsV2Api->receiptsV2GetReceiptPdfUsingGET3: ', $e->getMessage(), PHP_EOL;
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

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **receiptsV2GetReceiptUsingGET5**
> \Otto\Client\Model\ReceiptReceiptsV2 receiptsV2GetReceiptUsingGET5($receipt_number)

Get a specific receipt for the given receipt number as JSON object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReceiptsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_number = "receipt_number_example"; // string | ReceiptNumber

try {
    $result = $apiInstance->receiptsV2GetReceiptUsingGET5($receipt_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsV2Api->receiptsV2GetReceiptUsingGET5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_number** | **string**| ReceiptNumber |

### Return type

[**\Otto\Client\Model\ReceiptReceiptsV2**](../Model/ReceiptReceiptsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **receiptsV2GetReceiptsUsingGET5**
> \Otto\Client\Model\ReceiptsListReceiptsV2 receiptsV2GetReceiptsUsingGET5($limit, $page, $type, $sales_order_id)

Get all receipts as list of JSON objects

The receipts will be sorted based on creationDate, latest one comes first. This endpoint is limited to at max 128 results per page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReceiptsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 128; // int | Page size to limit the number of receipts returned in the response
$page = 1; // int | Page number to fetch. This parameter is required to fetch data for specific page number
$type = "type_example"; // string | Search for receipts filtered by receipt type
$sales_order_id = "sales_order_id_example"; // string | Search for receipts filtered by sales order Id

try {
    $result = $apiInstance->receiptsV2GetReceiptsUsingGET5($limit, $page, $type, $sales_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsV2Api->receiptsV2GetReceiptsUsingGET5: ', $e->getMessage(), PHP_EOL;
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

[**\Otto\Client\Model\ReceiptsListReceiptsV2**](../Model/ReceiptsListReceiptsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


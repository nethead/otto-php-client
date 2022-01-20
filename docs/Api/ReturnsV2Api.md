# Otto\Client\ReturnsV2Api

All URIs are relative to *https://api.otto.market*

Method | HTTP request | Description
------------- | ------------- | -------------
[**returnsV2GetPositionItemsForUsingGETV2**](ReturnsV2Api.md#returnsv2getpositionitemsforusinggetv2) | **GET** /v2/returns | Get all the items filtered on return status
[**returnsV2ReceiveAcceptedReturnsV2UsingPOSTV2**](ReturnsV2Api.md#returnsv2receiveacceptedreturnsv2usingpostv2) | **POST** /v2/returns/acceptance | Accept the return for a sent position item (up to 200 items per request)
[**returnsV2ReceiveRejectedReturnsV2UsingPOSTV2**](ReturnsV2Api.md#returnsv2receiverejectedreturnsv2usingpostv2) | **POST** /v2/returns/rejection | Reject the return for a sent position item (up to 200 items per request)

# **returnsV2GetPositionItemsForUsingGETV2**
> \Otto\Client\Model\PositionItemListReturnsV2 returnsV2GetPositionItemsForUsingGETV2($limit, $page, $status)

Get all the items filtered on return status

The items will be sorted on status modified time in reverse chronological order. Additionally we provide cursor based pagination via next link. This endpoint is limited to at max 50 results per page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReturnsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Page size to limit the number of items returned in the response. Maximum value for limit can 50
$page = 1; // int | Page number to fetch. This parameter is required to fetch data for specific page number
$status = "status_example"; // string | Return status for which items are being queried for (case-insensitive)

try {
    $result = $apiInstance->returnsV2GetPositionItemsForUsingGETV2($limit, $page, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsV2Api->returnsV2GetPositionItemsForUsingGETV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Page size to limit the number of items returned in the response. Maximum value for limit can 50 | [optional] [default to 10]
 **page** | **int**| Page number to fetch. This parameter is required to fetch data for specific page number | [optional] [default to 1]
 **status** | **string**| Return status for which items are being queried for (case-insensitive) | [optional]

### Return type

[**\Otto\Client\Model\PositionItemListReturnsV2**](../Model/PositionItemListReturnsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnsV2ReceiveAcceptedReturnsV2UsingPOSTV2**
> object returnsV2ReceiveAcceptedReturnsV2UsingPOSTV2($body)

Accept the return for a sent position item (up to 200 items per request)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReturnsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Otto\Client\Model\AcceptedPartnerReturnV2ReturnsV2(); // \Otto\Client\Model\AcceptedPartnerReturnV2ReturnsV2 | acceptedPartnerReturn

try {
    $result = $apiInstance->returnsV2ReceiveAcceptedReturnsV2UsingPOSTV2($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsV2Api->returnsV2ReceiveAcceptedReturnsV2UsingPOSTV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Otto\Client\Model\AcceptedPartnerReturnV2ReturnsV2**](../Model/AcceptedPartnerReturnV2ReturnsV2.md)| acceptedPartnerReturn |

### Return type

**object**

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnsV2ReceiveRejectedReturnsV2UsingPOSTV2**
> object returnsV2ReceiveRejectedReturnsV2UsingPOSTV2($body)

Reject the return for a sent position item (up to 200 items per request)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReturnsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Otto\Client\Model\RejectedPartnerReturnV2ReturnsV2(); // \Otto\Client\Model\RejectedPartnerReturnV2ReturnsV2 | rejectedPartnerReturn

try {
    $result = $apiInstance->returnsV2ReceiveRejectedReturnsV2UsingPOSTV2($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsV2Api->returnsV2ReceiveRejectedReturnsV2UsingPOSTV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Otto\Client\Model\RejectedPartnerReturnV2ReturnsV2**](../Model/RejectedPartnerReturnV2ReturnsV2.md)| rejectedPartnerReturn |

### Return type

**object**

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


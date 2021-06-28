# Otto\Client\MarketplaceStatusApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMarketPlaceStatus**](MarketplaceStatusApi.md#getmarketplacestatus) | **GET** /v2/products/{sku}/marketplace-status | Read the marketplace status for a single product variation.
[**getMarketPlaceStatusList**](MarketplaceStatusApi.md#getmarketplacestatuslist) | **GET** /v2/products/marketplace-status | Read the marketplace status for your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting marketplace status will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

# **getMarketPlaceStatus**
> \Otto\Client\Products\Model\MarketPlaceStatus getMarketPlaceStatus($sku)

Read the marketplace status for a single product variation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Products\Api\MarketplaceStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | search for a marketplace status by its SKU value

try {
    $result = $apiInstance->getMarketPlaceStatus($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceStatusApi->getMarketPlaceStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for a marketplace status by its SKU value |

### Return type

[**\Otto\Client\Products\Model\MarketPlaceStatus**](../Model/MarketPlaceStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketPlaceStatusList**
> \Otto\Client\Products\Model\MarketPlaceStatusApiResult getMarketPlaceStatusList($sku, $product_reference, $category, $brand, $page, $limit, $market_place_status)

Read the marketplace status for your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting marketplace status will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Products\Api\MarketplaceStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$product_reference = "product_reference_example"; // string | search marketplace status by the productReference value of the related product variations
$category = "category_example"; // string | search marketplace status by the category value of the related product variations
$brand = "brand_example"; // string | search marketplace status by the brand value of the related product variations
$page = 56; // int | page to load
$limit = 56; // int | proposed limit for the number of marketplace status per response page (at most 1000)
$market_place_status = array("market_place_status_example"); // string[] | only include items that match any of the provided status

try {
    $result = $apiInstance->getMarketPlaceStatusList($sku, $product_reference, $category, $brand, $page, $limit, $market_place_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceStatusApi->getMarketPlaceStatusList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for product variations by their sku value. Use this if your sku values contain slash (&#x27;/&#x27;) or dot (&#x27;.&#x27;) characters. | [optional]
 **product_reference** | **string**| search marketplace status by the productReference value of the related product variations | [optional]
 **category** | **string**| search marketplace status by the category value of the related product variations | [optional]
 **brand** | **string**| search marketplace status by the brand value of the related product variations | [optional]
 **page** | **int**| page to load | [optional]
 **limit** | **int**| proposed limit for the number of marketplace status per response page (at most 1000) | [optional]
 **market_place_status** | [**string[]**](../Model/string.md)| only include items that match any of the provided status | [optional]

### Return type

[**\Otto\Client\Products\Model\MarketPlaceStatusApiResult**](../Model/MarketPlaceStatusApiResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


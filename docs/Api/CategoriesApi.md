# Otto\Client\CategoriesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCategoryGroups**](CategoriesApi.md#getcategorygroups) | **GET** /v2/products/categories | Read the product categories and associated attributes of the OTTO market place. The total number of results could be limited by specifying query parameters. Generally the resulting product categories values will be paginated. The default page length is 100 product categories per response, the page size limit is 2000. The links specified in the result can be used to page through the total result space.

# **getCategoryGroups**
> \Otto\Client\Products\Model\CategoryGroups getCategoryGroups($page, $limit)

Read the product categories and associated attributes of the OTTO market place. The total number of results could be limited by specifying query parameters. Generally the resulting product categories values will be paginated. The default page length is 100 product categories per response, the page size limit is 2000. The links specified in the result can be used to page through the total result space.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Products\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | 
$limit = 56; // int | proposed limit for the number of product categories per response page  (at most 2000)

try {
    $result = $apiInstance->getCategoryGroups($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoryGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **limit** | **int**| proposed limit for the number of product categories per response page  (at most 2000) | [optional]

### Return type

[**\Otto\Client\Products\Model\CategoryGroups**](../Model/CategoryGroups.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


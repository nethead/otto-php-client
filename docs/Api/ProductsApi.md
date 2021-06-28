# Otto\Client\ProductsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateProductVariations**](ProductsApi.md#createorupdateproductvariations) | **POST** /v2/products | Create or update your product variations and get a process-id to query results. The limit for the number of product variations in one request is 500.
[**failedByProcessId**](ProductsApi.md#failedbyprocessid) | **GET** /v2/products/update-tasks/{processUuid}/failed | Request the failed products of the product data delivery with the linked processUuid. The response will contain a list of failed products with associated error details.
[**getPartnerProducts**](ProductsApi.md#getpartnerproducts) | **GET** /v2/products | Read your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting product variations will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.
[**getProductVariation**](ProductsApi.md#getproductvariation) | **GET** /v2/products/{sku} | Read a single product variation.
[**progressByProcessId**](ProductsApi.md#progressbyprocessid) | **GET** /v2/products/update-tasks/{processUuid} | Request the results of a product data delivery. The response will contain the links for the different parts of the result: products successfully created or updated, products with failures, products which did not contain any changes compared to the last sent version.
[**succeededByProcessId**](ProductsApi.md#succeededbyprocessid) | **GET** /v2/products/update-tasks/{processUuid}/succeeded | Request the succeeded products of the product data delivery with the linked processUuid. The response will contain a list of successfully delivered products.
[**unchangedByProcessId**](ProductsApi.md#unchangedbyprocessid) | **GET** /v2/products/update-tasks/{processUuid}/unchanged | Request the unchanged products of the product data delivery with the linked processUuid. The response will contain a list of unchanged products.

# **createOrUpdateProductVariations**
> \Otto\Client\Products\Model\ProductProcessProgress createOrUpdateProductVariations($body, $x_request_timestamp)

Create or update your product variations and get a process-id to query results. The limit for the number of product variations in one request is 500.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Products\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Otto\Client\Products\Model\ProductVariation()); // \Otto\Client\Products\Model\ProductVariation[] | 
$x_request_timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Holds the client side update request timestamp

try {
    $result = $apiInstance->createOrUpdateProductVariations($body, $x_request_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createOrUpdateProductVariations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Otto\Client\Products\Model\ProductVariation[]**](../Model/ProductVariation.md)|  | [optional]
 **x_request_timestamp** | **\DateTime**| Holds the client side update request timestamp | [optional]

### Return type

[**\Otto\Client\Products\Model\ProductProcessProgress**](../Model/ProductProcessProgress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **failedByProcessId**
> \Otto\Client\Products\Model\ProductProcessResult failedByProcessId($process_uuid)

Request the failed products of the product data delivery with the linked processUuid. The response will contain a list of failed products with associated error details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Products\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$process_uuid = "process_uuid_example"; // string | search for the failed products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->failedByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->failedByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_uuid** | **string**| search for the failed products of a product data delivery identified by its processUuid. |

### Return type

[**\Otto\Client\Products\Model\ProductProcessResult**](../Model/ProductProcessResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPartnerProducts**
> \Otto\Client\Products\Model\ProductVariationApiResult getPartnerProducts($sku, $product_reference, $category, $brand, $page, $limit)

Read your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting product variations will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Products\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$product_reference = "product_reference_example"; // string | search for product variations by their productReference value
$category = "category_example"; // string | search for product variations by their category value
$brand = "brand_example"; // string | search for product variations by their brand value
$page = 56; // int | 
$limit = 56; // int | proposed limit for the number of products per response page (at most 100)

try {
    $result = $apiInstance->getPartnerProducts($sku, $product_reference, $category, $brand, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getPartnerProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for product variations by their sku value. Use this if your sku values contain slash (&#x27;/&#x27;) or dot (&#x27;.&#x27;) characters. | [optional]
 **product_reference** | **string**| search for product variations by their productReference value | [optional]
 **category** | **string**| search for product variations by their category value | [optional]
 **brand** | **string**| search for product variations by their brand value | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**| proposed limit for the number of products per response page (at most 100) | [optional]

### Return type

[**\Otto\Client\Products\Model\ProductVariationApiResult**](../Model/ProductVariationApiResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductVariation**
> \Otto\Client\Products\Model\ProductVariation getProductVariation($sku)

Read a single product variation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Products\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->getProductVariation($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for a product variation by its SKU value |

### Return type

[**\Otto\Client\Products\Model\ProductVariation**](../Model/ProductVariation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **progressByProcessId**
> \Otto\Client\Products\Model\ProductProcessProgress progressByProcessId($process_uuid)

Request the results of a product data delivery. The response will contain the links for the different parts of the result: products successfully created or updated, products with failures, products which did not contain any changes compared to the last sent version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Products\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$process_uuid = "process_uuid_example"; // string | search for a product data delivery result by its processUuid.

try {
    $result = $apiInstance->progressByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->progressByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_uuid** | **string**| search for a product data delivery result by its processUuid. |

### Return type

[**\Otto\Client\Products\Model\ProductProcessProgress**](../Model/ProductProcessProgress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **succeededByProcessId**
> \Otto\Client\Products\Model\ProductProcessResult succeededByProcessId($process_uuid)

Request the succeeded products of the product data delivery with the linked processUuid. The response will contain a list of successfully delivered products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Products\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$process_uuid = "process_uuid_example"; // string | search for the succeeded products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->succeededByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->succeededByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_uuid** | **string**| search for the succeeded products of a product data delivery identified by its processUuid. |

### Return type

[**\Otto\Client\Products\Model\ProductProcessResult**](../Model/ProductProcessResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unchangedByProcessId**
> \Otto\Client\Products\Model\ProductProcessResult unchangedByProcessId($process_uuid)

Request the unchanged products of the product data delivery with the linked processUuid. The response will contain a list of unchanged products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Products\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$process_uuid = "process_uuid_example"; // string | search for the unchanged products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->unchangedByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->unchangedByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_uuid** | **string**| search for the unchanged products of a product data delivery identified by its processUuid. |

### Return type

[**\Otto\Client\Products\Model\ProductProcessResult**](../Model/ProductProcessResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


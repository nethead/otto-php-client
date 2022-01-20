# Otto\Client\ProductsV2Api

All URIs are relative to *https://api.otto.market*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsV2CreateOrUpdateProductVariations**](ProductsV2Api.md#productsv2createorupdateproductvariations) | **POST** /v2/products | Create or update your product variations
[**productsV2FailedByProcessId**](ProductsV2Api.md#productsv2failedbyprocessid) | **GET** /v2/products/update-tasks/{processUuid}/failed | List failed products of a product data delivery
[**productsV2GetActiveStatus**](ProductsV2Api.md#productsv2getactivestatus) | **GET** /v2/products/active-status | Read the active status of your product variations
[**productsV2GetBrands**](ProductsV2Api.md#productsv2getbrands) | **GET** /v2/products/brands | List brands
[**productsV2GetCategoryGroups**](ProductsV2Api.md#productsv2getcategorygroups) | **GET** /v2/products/categories | Read the product categories
[**productsV2GetContentChanges**](ProductsV2Api.md#productsv2getcontentchanges) | **GET** /v2/products/{sku}/content-changes | Read content changes for a single product variation
[**productsV2GetContentChanges2**](ProductsV2Api.md#productsv2getcontentchanges2) | **GET** /v2/products/content-changes | Read content changes within time period
[**productsV2GetMarketPlaceStatus**](ProductsV2Api.md#productsv2getmarketplacestatus) | **GET** /v2/products/{sku}/marketplace-status | Read the marketplace status for a single product variation
[**productsV2GetMarketPlaceStatusList**](ProductsV2Api.md#productsv2getmarketplacestatuslist) | **GET** /v2/products/marketplace-status | Read the marketplace status for your product variations
[**productsV2GetPartnerProducts**](ProductsV2Api.md#productsv2getpartnerproducts) | **GET** /v2/products | Read your product variations
[**productsV2GetProductVariation**](ProductsV2Api.md#productsv2getproductvariation) | **GET** /v2/products/{sku} | Read a single product variation
[**productsV2GetProductVariationPrice**](ProductsV2Api.md#productsv2getproductvariationprice) | **GET** /v2/products/{sku}/prices | Read product variations prices
[**productsV2GetProductVariationPrices**](ProductsV2Api.md#productsv2getproductvariationprices) | **GET** /v2/products/prices | Read product variations prices
[**productsV2GetVariationActiveStatus**](ProductsV2Api.md#productsv2getvariationactivestatus) | **GET** /v2/products/{sku}/active-status | Read the active status of a single product variation
[**productsV2ProgressByProcessId**](ProductsV2Api.md#productsv2progressbyprocessid) | **GET** /v2/products/update-tasks/{processUuid} | Request the results of a product data delivery
[**productsV2SucceededByProcessId**](ProductsV2Api.md#productsv2succeededbyprocessid) | **GET** /v2/products/update-tasks/{processUuid}/succeeded | List succeeded products of a product data delivery
[**productsV2UnchangedByProcessId**](ProductsV2Api.md#productsv2unchangedbyprocessid) | **GET** /v2/products/update-tasks/{processUuid}/unchanged | List unchanged products of a product data delivery
[**productsV2UpdateActiveStatus**](ProductsV2Api.md#productsv2updateactivestatus) | **POST** /v2/products/active-status | Update the active status of your product variations
[**productsV2UpdateProductVariationPrices**](ProductsV2Api.md#productsv2updateproductvariationprices) | **POST** /v2/products/prices | Update product variation prices

# **productsV2CreateOrUpdateProductVariations**
> \Otto\Client\Model\ProductProcessProgressProductsV2 productsV2CreateOrUpdateProductVariations($body, $x_request_timestamp)

Create or update your product variations

Returns a process-id to query results. The limit for the number of product variations in one request is 500.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Otto\Client\Model\ProductVariationProductsV2()); // \Otto\Client\Model\ProductVariationProductsV2[] | 
$x_request_timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Holds the client side update request timestamp

try {
    $result = $apiInstance->productsV2CreateOrUpdateProductVariations($body, $x_request_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2CreateOrUpdateProductVariations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Otto\Client\Model\ProductVariationProductsV2[]**](../Model/ProductVariationProductsV2.md)|  | [optional]
 **x_request_timestamp** | **\DateTime**| Holds the client side update request timestamp | [optional]

### Return type

[**\Otto\Client\Model\ProductProcessProgressProductsV2**](../Model/ProductProcessProgressProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV2FailedByProcessId**
> \Otto\Client\Model\ProductProcessResultProductsV2 productsV2FailedByProcessId($process_uuid)

List failed products of a product data delivery

Request the failed products of the product data delivery with the linked processUuid. The response will contain a list of failed products with associated error details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_uuid = "process_uuid_example"; // string | search for the failed products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->productsV2FailedByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2FailedByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_uuid** | **string**| search for the failed products of a product data delivery identified by its processUuid. |

### Return type

[**\Otto\Client\Model\ProductProcessResultProductsV2**](../Model/ProductProcessResultProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV2GetActiveStatus**
> \Otto\Client\Model\ActiveStatusListResponseProductsV2 productsV2GetActiveStatus($sku, $product_reference, $category, $brand, $page, $limit)

Read the active status of your product variations

The total number of results could be limited by specifying query parameters. Generally the resulting active status values will be paginated. The default page length is 100 active status entries per response, also the page size limit. The links specified in the result can be used to page through the total result space. Replaces corresponding online-status endpoint which now is marked as deprecated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$product_reference = "product_reference_example"; // string | search for product variations by their productReference value
$category = "category_example"; // string | search for product variations by their category value
$brand = "brand_example"; // string | search for product variations by their brand value
$page = 56; // int | 
$limit = 56; // int | proposed limit for the number of active status values per response page (at most 100)

try {
    $result = $apiInstance->productsV2GetActiveStatus($sku, $product_reference, $category, $brand, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetActiveStatus: ', $e->getMessage(), PHP_EOL;
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
 **limit** | **int**| proposed limit for the number of active status values per response page (at most 100) | [optional]

### Return type

[**\Otto\Client\Model\ActiveStatusListResponseProductsV2**](../Model/ActiveStatusListResponseProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV2GetBrands**
> \Otto\Client\Model\BrandProductsV2[] productsV2GetBrands()

List brands

Read the list of brands that are known on the Otto market place.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->productsV2GetBrands();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetBrands: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Otto\Client\Model\BrandProductsV2[]**](../Model/BrandProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV2GetCategoryGroups**
> \Otto\Client\Model\CategoryGroupsProductsV2 productsV2GetCategoryGroups($page, $limit)

Read the product categories

Returns product categories and associated attributes of the OTTO market place. The total number of results could be limited by specifying query parameters. Generally the resulting product categories values will be paginated. The default page length is 100 product categories per response, the page size limit is 2000. The links specified in the result can be used to page through the total result space.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | 
$limit = 56; // int | proposed limit for the number of product categories per response page  (at most 2000)

try {
    $result = $apiInstance->productsV2GetCategoryGroups($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetCategoryGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **limit** | **int**| proposed limit for the number of product categories per response page  (at most 2000) | [optional]

### Return type

[**\Otto\Client\Model\CategoryGroupsProductsV2**](../Model/CategoryGroupsProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV2GetContentChanges**
> \Otto\Client\Model\ContentChangesApiResultProductsV2 productsV2GetContentChanges($sku, $from_date, $page, $limit)

Read content changes for a single product variation

Returns the content changes info for a single product variation within a specific time period. The resulting content changes will be paginated. The default page length is 100 entries per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | search for a product variation by its SKU value
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | search for content changes from this time on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result.
$page = 56; // int | 
$limit = 56; // int | proposed limit for the number of entries per response page (at most 100)

try {
    $result = $apiInstance->productsV2GetContentChanges($sku, $from_date, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetContentChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for a product variation by its SKU value |
 **from_date** | **\DateTime**| search for content changes from this time on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result. | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**| proposed limit for the number of entries per response page (at most 100) | [optional]

### Return type

[**\Otto\Client\Model\ContentChangesApiResultProductsV2**](../Model/ContentChangesApiResultProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV2GetContentChanges2**
> \Otto\Client\Model\ContentChangesApiResultProductsV2 productsV2GetContentChanges2($sku, $from_date, $page, $limit)

Read content changes within time period

Read the content changes for all your product variations within a specific time period. You can also use this endpoint to read the content changes for more than one variation or if the sku value contains slash ('/') or dot ('.') characters, so that you cannot use the other endpoint with one dedicated sku value in the path. The resulting content changes will be paginated. The default page length is 100 entries per response, which also is the page size upper limit. The links specified in the result can be used to page through the total result space.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = array("sku_example"); // string[] | search for product variations by their sku value. Use this to query for multiple variations or if your sku values contain slash ('/') or dot ('.') characters. You may separate multiple sku values by comma or state each one with a &sku= in front of the value. Please note that if you like to query for a single variation whose value contains a comma you have to add one empty &sku= at the end of the query string or use the other endpoint.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | search for content changes from this time on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result.
$page = 56; // int | 
$limit = 56; // int | proposed limit for the number of content changes per response page (at most 100)

try {
    $result = $apiInstance->productsV2GetContentChanges2($sku, $from_date, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetContentChanges2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | [**string[]**](../Model/string.md)| search for product variations by their sku value. Use this to query for multiple variations or if your sku values contain slash (&#x27;/&#x27;) or dot (&#x27;.&#x27;) characters. You may separate multiple sku values by comma or state each one with a &amp;sku&#x3D; in front of the value. Please note that if you like to query for a single variation whose value contains a comma you have to add one empty &amp;sku&#x3D; at the end of the query string or use the other endpoint. | [optional]
 **from_date** | **\DateTime**| search for content changes from this time on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result. | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**| proposed limit for the number of content changes per response page (at most 100) | [optional]

### Return type

[**\Otto\Client\Model\ContentChangesApiResultProductsV2**](../Model/ContentChangesApiResultProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV2GetMarketPlaceStatus**
> \Otto\Client\Model\MarketPlaceStatusProductsV2 productsV2GetMarketPlaceStatus($sku)

Read the marketplace status for a single product variation

Returns marketplace status for a single product variation by SKU.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | search for a marketplace status by its SKU value

try {
    $result = $apiInstance->productsV2GetMarketPlaceStatus($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetMarketPlaceStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for a marketplace status by its SKU value |

### Return type

[**\Otto\Client\Model\MarketPlaceStatusProductsV2**](../Model/MarketPlaceStatusProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV2GetMarketPlaceStatusList**
> \Otto\Client\Model\MarketPlaceStatusApiResultProductsV2 productsV2GetMarketPlaceStatusList($sku, $product_reference, $category, $brand, $from_date, $page, $limit, $market_place_status)

Read the marketplace status for your product variations

The total number of results could be limited by specifying query parameters. Generally the resulting marketplace status will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$product_reference = "product_reference_example"; // string | search marketplace status by the productReference value of the related product variations
$category = "category_example"; // string | search marketplace status by the category value of the related product variations
$brand = "brand_example"; // string | search marketplace status by the brand value of the related product variations
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | search marketplace status for a time range starting with the given date (in ISO8601, like '2021-10-09T07:52:19.820Z' or '2021-10-09T07:52:19.820+01:00')
$page = 56; // int | page to load
$limit = 56; // int | proposed limit for the number of marketplace status per response page (at most 1000)
$market_place_status = array("market_place_status_example"); // string[] | only include items that match any of the provided status

try {
    $result = $apiInstance->productsV2GetMarketPlaceStatusList($sku, $product_reference, $category, $brand, $from_date, $page, $limit, $market_place_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetMarketPlaceStatusList: ', $e->getMessage(), PHP_EOL;
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
 **from_date** | **\DateTime**| search marketplace status for a time range starting with the given date (in ISO8601, like &#x27;2021-10-09T07:52:19.820Z&#x27; or &#x27;2021-10-09T07:52:19.820+01:00&#x27;) | [optional]
 **page** | **int**| page to load | [optional]
 **limit** | **int**| proposed limit for the number of marketplace status per response page (at most 1000) | [optional]
 **market_place_status** | [**string[]**](../Model/string.md)| only include items that match any of the provided status | [optional]

### Return type

[**\Otto\Client\Model\MarketPlaceStatusApiResultProductsV2**](../Model/MarketPlaceStatusApiResultProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV2GetPartnerProducts**
> \Otto\Client\Model\ProductVariationApiResultProductsV2 productsV2GetPartnerProducts($sku, $product_reference, $category, $brand, $page, $limit)

Read your product variations

The total number of results could be limited by specifying query parameters. Generally the resulting product variations will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$product_reference = "product_reference_example"; // string | search for product variations by their productReference value
$category = "category_example"; // string | search for product variations by their category value
$brand = "brand_example"; // string | search for product variations by their brand value
$page = 56; // int | 
$limit = 56; // int | proposed limit for the number of products per response page (at most 100)

try {
    $result = $apiInstance->productsV2GetPartnerProducts($sku, $product_reference, $category, $brand, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetPartnerProducts: ', $e->getMessage(), PHP_EOL;
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

[**\Otto\Client\Model\ProductVariationApiResultProductsV2**](../Model/ProductVariationApiResultProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV2GetProductVariation**
> \Otto\Client\Model\ProductVariationProductsV2 productsV2GetProductVariation($sku)

Read a single product variation

Returns a single product variation by SKU.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->productsV2GetProductVariation($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetProductVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for a product variation by its SKU value |

### Return type

[**\Otto\Client\Model\ProductVariationProductsV2**](../Model/ProductVariationProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV2GetProductVariationPrice**
> \Otto\Client\Model\SkuPricingProductsV2 productsV2GetProductVariationPrice($sku)

Read product variations prices

Read the price data of a single product variation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->productsV2GetProductVariationPrice($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetProductVariationPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for a product variation by its SKU value |

### Return type

[**\Otto\Client\Model\SkuPricingProductsV2**](../Model/SkuPricingProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV2GetProductVariationPrices**
> \Otto\Client\Model\PriceApiResultProductsV2 productsV2GetProductVariationPrices($sku, $product_reference, $category, $brand, $page, $limit)

Read product variations prices

Read your product variations prices. The total number of results could be limited by specifying query parameters. Generally the resulting product variations will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$product_reference = "product_reference_example"; // string | search for product variations by their productReference value
$category = "category_example"; // string | search for product variations by their category value
$brand = "brand_example"; // string | search for product variations by their brand value
$page = 56; // int | 
$limit = 56; // int | proposed limit for the number of products per response page (at most 100)

try {
    $result = $apiInstance->productsV2GetProductVariationPrices($sku, $product_reference, $category, $brand, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetProductVariationPrices: ', $e->getMessage(), PHP_EOL;
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

[**\Otto\Client\Model\PriceApiResultProductsV2**](../Model/PriceApiResultProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV2GetVariationActiveStatus**
> \Otto\Client\Model\ActiveStatusProductsV2 productsV2GetVariationActiveStatus($sku)

Read the active status of a single product variation

Returns active status of the requested product variation by SKU.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->productsV2GetVariationActiveStatus($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetVariationActiveStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| search for a product variation by its SKU value |

### Return type

[**\Otto\Client\Model\ActiveStatusProductsV2**](../Model/ActiveStatusProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV2ProgressByProcessId**
> \Otto\Client\Model\ProductProcessProgressProductsV2 productsV2ProgressByProcessId($process_uuid)

Request the results of a product data delivery

The response will contain the links for the different parts of the result: products successfully created or updated, products with failures, products which did not contain any changes compared to the last sent version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_uuid = "process_uuid_example"; // string | search for a product data delivery result by its processUuid.

try {
    $result = $apiInstance->productsV2ProgressByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2ProgressByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_uuid** | **string**| search for a product data delivery result by its processUuid. |

### Return type

[**\Otto\Client\Model\ProductProcessProgressProductsV2**](../Model/ProductProcessProgressProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV2SucceededByProcessId**
> \Otto\Client\Model\ProductProcessResultProductsV2 productsV2SucceededByProcessId($process_uuid)

List succeeded products of a product data delivery

Request the succeeded products of the product data delivery with the linked processUuid. The response will contain a list of successfully delivered products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_uuid = "process_uuid_example"; // string | search for the succeeded products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->productsV2SucceededByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2SucceededByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_uuid** | **string**| search for the succeeded products of a product data delivery identified by its processUuid. |

### Return type

[**\Otto\Client\Model\ProductProcessResultProductsV2**](../Model/ProductProcessResultProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV2UnchangedByProcessId**
> \Otto\Client\Model\ProductProcessResultProductsV2 productsV2UnchangedByProcessId($process_uuid)

List unchanged products of a product data delivery

Request the unchanged products of the product data delivery with the linked processUuid. The response will contain a list of unchanged products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_uuid = "process_uuid_example"; // string | search for the unchanged products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->productsV2UnchangedByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2UnchangedByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_uuid** | **string**| search for the unchanged products of a product data delivery identified by its processUuid. |

### Return type

[**\Otto\Client\Model\ProductProcessResultProductsV2**](../Model/ProductProcessResultProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV2UpdateActiveStatus**
> \Otto\Client\Model\ProductProcessProgressProductsV2 productsV2UpdateActiveStatus($body, $x_request_timestamp)

Update the active status of your product variations

Returns a process-id to query results.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Otto\Client\Model\ActiveStatusListRequestProductsV2(); // \Otto\Client\Model\ActiveStatusListRequestProductsV2 | 
$x_request_timestamp = "x_request_timestamp_example"; // string | Holds the optional client side update request timestamp, in ISO DateTime format

try {
    $result = $apiInstance->productsV2UpdateActiveStatus($body, $x_request_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2UpdateActiveStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Otto\Client\Model\ActiveStatusListRequestProductsV2**](../Model/ActiveStatusListRequestProductsV2.md)|  | [optional]
 **x_request_timestamp** | **string**| Holds the optional client side update request timestamp, in ISO DateTime format | [optional]

### Return type

[**\Otto\Client\Model\ProductProcessProgressProductsV2**](../Model/ProductProcessProgressProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsV2UpdateProductVariationPrices**
> \Otto\Client\Model\ProductProcessProgressProductsV2 productsV2UpdateProductVariationPrices($body, $x_request_timestamp)

Update product variation prices

Update your product variation prices and get a process-id to query results. The limit for the number of product variation prices in one request is 500.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Otto\Client\Model\SkuPricingProductsV2()); // \Otto\Client\Model\SkuPricingProductsV2[] | 
$x_request_timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Holds the client side update request timestamp

try {
    $result = $apiInstance->productsV2UpdateProductVariationPrices($body, $x_request_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2UpdateProductVariationPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Otto\Client\Model\SkuPricingProductsV2[]**](../Model/SkuPricingProductsV2.md)|  | [optional]
 **x_request_timestamp** | **\DateTime**| Holds the client side update request timestamp | [optional]

### Return type

[**\Otto\Client\Model\ProductProcessProgressProductsV2**](../Model/ProductProcessProgressProductsV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Otto\Client\QuantitiesV2Api

All URIs are relative to *https://api.otto.market*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quantitiesV2GetAvailableQuantities**](QuantitiesV2Api.md#quantitiesv2getavailablequantities) | **GET** /v2/quantities | Get available quantities for a specific Partner (Upto 200 per request). The partner needs to update the quantities for all his products once or limit the products being returned in the response by setting the limit value to number of products they have updated
[**quantitiesV2GetAvailableQuantityBySku**](QuantitiesV2Api.md#quantitiesv2getavailablequantitybysku) | **GET** /v2/quantities/{sku} | Get available quantity for a specific Sku
[**quantitiesV2StoreAvailableQuantitiesUsingPOST**](QuantitiesV2Api.md#quantitiesv2storeavailablequantitiesusingpost) | **POST** /v2/quantities | Update the available quantity for a specific SKU (up to 200 SKUs per request)

# **quantitiesV2GetAvailableQuantities**
> \Otto\Client\Model\AvailableQuantityResponseV2QuantitiesV2 quantitiesV2GetAvailableQuantities($limit, $page)

Get available quantities for a specific Partner (Upto 200 per request). The partner needs to update the quantities for all his products once or limit the products being returned in the response by setting the limit value to number of products they have updated

Retrieve available quantities sorted by sku name in ascending.The maximum number of returned quantities is limited to 200.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\QuantitiesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 200; // int | The maximum number of available quantities to be returned in each response.
$page = 0; // int | Page number (0..N)

try {
    $result = $apiInstance->quantitiesV2GetAvailableQuantities($limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuantitiesV2Api->quantitiesV2GetAvailableQuantities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The maximum number of available quantities to be returned in each response. | [optional] [default to 200]
 **page** | **int**| Page number (0..N) | [optional] [default to 0]

### Return type

[**\Otto\Client\Model\AvailableQuantityResponseV2QuantitiesV2**](../Model/AvailableQuantityResponseV2QuantitiesV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quantitiesV2GetAvailableQuantityBySku**
> \Otto\Client\Model\AvailableQuantitySingleResponseDTOV2QuantitiesV2 quantitiesV2GetAvailableQuantityBySku($sku)

Get available quantity for a specific Sku

Fetch a single available quantity by its unique sku name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\QuantitiesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | The sku for the available quantity

try {
    $result = $apiInstance->quantitiesV2GetAvailableQuantityBySku($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuantitiesV2Api->quantitiesV2GetAvailableQuantityBySku: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| The sku for the available quantity |

### Return type

[**\Otto\Client\Model\AvailableQuantitySingleResponseDTOV2QuantitiesV2**](../Model/AvailableQuantitySingleResponseDTOV2QuantitiesV2.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quantitiesV2StoreAvailableQuantitiesUsingPOST**
> object quantitiesV2StoreAvailableQuantitiesUsingPOST($body)

Update the available quantity for a specific SKU (up to 200 SKUs per request)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\QuantitiesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Otto\Client\Model\AvailableQuantityRequestDTOV2QuantitiesV2()); // \Otto\Client\Model\AvailableQuantityRequestDTOV2QuantitiesV2[] | availableQuantityRequestDTO

try {
    $result = $apiInstance->quantitiesV2StoreAvailableQuantitiesUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuantitiesV2Api->quantitiesV2StoreAvailableQuantitiesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Otto\Client\Model\AvailableQuantityRequestDTOV2QuantitiesV2[]**](../Model/AvailableQuantityRequestDTOV2QuantitiesV2.md)| availableQuantityRequestDTO |

### Return type

**object**

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


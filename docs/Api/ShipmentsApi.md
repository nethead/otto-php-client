# Otto\Client\ShipmentsApi

All URIs are relative to *https://live.api.otto.market/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appendPositionItemsByCarrierAndTrackingNumberUsingPOST**](ShipmentsApi.md#appendpositionitemsbycarrierandtrackingnumberusingpost) | **POST** /shipments/carriers/{carrier}/trackingnumbers/{trackingNumber}/positionitems | 
[**appendPositionItemsUsingPOST**](ShipmentsApi.md#appendpositionitemsusingpost) | **POST** /shipments/{shipmentId}/positionitems | 
[**createdAndSentShipmentUsingPOST**](ShipmentsApi.md#createdandsentshipmentusingpost) | **POST** /shipments | 
[**listShipmentsUsingGET**](ShipmentsApi.md#listshipmentsusingget) | **GET** /shipments | 
[**shipmentByCarrierAndTrackingNumberUsingGET**](ShipmentsApi.md#shipmentbycarrierandtrackingnumberusingget) | **GET** /shipments/carriers/{carrier}/trackingnumbers/{trackingNumber} | 
[**shipmentUsingGET**](ShipmentsApi.md#shipmentusingget) | **GET** /shipments/{shipmentId} | 

# **appendPositionItemsByCarrierAndTrackingNumberUsingPOST**
> appendPositionItemsByCarrierAndTrackingNumberUsingPOST($body, $carrier, $tracking_number)



This endpoint allows to update an existing shipment with new position items. Note that this is just a correction process for shipments where position items are missing. A separate purchase receipt will be generated for the newly added position items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Shipments\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Otto\Client\Shipments\Model\PositionItem()); // \Otto\Client\Shipments\Model\PositionItem[] | The position items included in shipment.
$carrier = "carrier_example"; // string | The carrier of the shipment.
$tracking_number = "tracking_number_example"; // string | The tracking number of the shipment assigned by the carrier.

try {
    $apiInstance->appendPositionItemsByCarrierAndTrackingNumberUsingPOST($body, $carrier, $tracking_number);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->appendPositionItemsByCarrierAndTrackingNumberUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Otto\Client\Shipments\Model\PositionItem[]**](../Model/PositionItem.md)| The position items included in shipment. |
 **carrier** | **string**| The carrier of the shipment. |
 **tracking_number** | **string**| The tracking number of the shipment assigned by the carrier. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appendPositionItemsUsingPOST**
> appendPositionItemsUsingPOST($body, $shipment_id)



This endpoint allows to update an existing shipment with new position items. Note that this is just a correction process for shipments where position items are missing. A separate purchase receipt will be generated for the newly added position items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Shipments\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Otto\Client\Shipments\Model\PositionItem()); // \Otto\Client\Shipments\Model\PositionItem[] | positionItems
$shipment_id = "shipment_id_example"; // string | Internal shipment identifier assigned by OTTO Market.

try {
    $apiInstance->appendPositionItemsUsingPOST($body, $shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->appendPositionItemsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Otto\Client\Shipments\Model\PositionItem[]**](../Model/PositionItem.md)| positionItems |
 **shipment_id** | **string**| Internal shipment identifier assigned by OTTO Market. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createdAndSentShipmentUsingPOST**
> \Otto\Client\Shipments\Model\CreateShipmentResponse createdAndSentShipmentUsingPOST($body)



This endpoint should be used to create a shipment with a list of position items. It confirms that the position items in the list have been handed over to the carrier for final delivery to the customer. At this point, the position items are marked with the state ''SENT'' in OTTO Market. This is the trigger for the generation of a purchase receipt.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Shipments\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Otto\Client\Shipments\Model\CreateShipmentRequest(); // \Otto\Client\Shipments\Model\CreateShipmentRequest | request

try {
    $result = $apiInstance->createdAndSentShipmentUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->createdAndSentShipmentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Otto\Client\Shipments\Model\CreateShipmentRequest**](../Model/CreateShipmentRequest.md)| request |

### Return type

[**\Otto\Client\Shipments\Model\CreateShipmentResponse**](../Model/CreateShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listShipmentsUsingGET**
> \Otto\Client\Shipments\Model\ShipmentList listShipmentsUsingGET($datefrom, $limit, $next)



This endpoint can be used to retrieve the shipments for a given authorized partner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Shipments\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datefrom = "datefrom_example"; // string | Shipments created from this date onwards for the given authorized partner will be returned. The date is considered as UTC.
$limit = 25; // int | The maximum number of shipments to be returned in each response.
$next = "next_example"; // string | The cursor which points to the next shipment that should be queried. It is used to paginate the results.

try {
    $result = $apiInstance->listShipmentsUsingGET($datefrom, $limit, $next);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->listShipmentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datefrom** | **string**| Shipments created from this date onwards for the given authorized partner will be returned. The date is considered as UTC. |
 **limit** | **int**| The maximum number of shipments to be returned in each response. | [optional] [default to 25]
 **next** | **string**| The cursor which points to the next shipment that should be queried. It is used to paginate the results. | [optional]

### Return type

[**\Otto\Client\Shipments\Model\ShipmentList**](../Model/ShipmentList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentByCarrierAndTrackingNumberUsingGET**
> \Otto\Client\Shipments\Model\Shipment shipmentByCarrierAndTrackingNumberUsingGET($carrier, $tracking_number)



This endpoint can be used to retrieve a shipment by carrier and tracking number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Shipments\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$carrier = "carrier_example"; // string | The carrier of the shipment.
$tracking_number = "tracking_number_example"; // string | The tracking number of the shipment assigned by the carrier.

try {
    $result = $apiInstance->shipmentByCarrierAndTrackingNumberUsingGET($carrier, $tracking_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentByCarrierAndTrackingNumberUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier** | **string**| The carrier of the shipment. |
 **tracking_number** | **string**| The tracking number of the shipment assigned by the carrier. |

### Return type

[**\Otto\Client\Shipments\Model\Shipment**](../Model/Shipment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentUsingGET**
> \Otto\Client\Shipments\Model\Shipment shipmentUsingGET($shipment_id)



This endpoint can be used to retrieve a shipment by OTTO internal shipment ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Otto\Client\Shipments\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = "shipment_id_example"; // string | Internal shipment identifier assigned by OTTO Market.

try {
    $result = $apiInstance->shipmentUsingGET($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| Internal shipment identifier assigned by OTTO Market. |

### Return type

[**\Otto\Client\Shipments\Model\Shipment**](../Model/Shipment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


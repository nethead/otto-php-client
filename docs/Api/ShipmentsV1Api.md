# Otto\Client\ShipmentsV1Api

All URIs are relative to *https://api.otto.market*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shipmentsV1AppendPositionItemsByCarrierAndTrackingNumberUsingPOST**](ShipmentsV1Api.md#shipmentsv1appendpositionitemsbycarrierandtrackingnumberusingpost) | **POST** /v1/shipments/carriers/{carrier}/trackingnumbers/{trackingNumber}/positionitems | Correct an existing shipment (add sent items) by carrier and tracking number.
[**shipmentsV1AppendPositionItemsUsingPOST**](ShipmentsV1Api.md#shipmentsv1appendpositionitemsusingpost) | **POST** /v1/shipments/{shipmentId}/positionitems | Correct an existing shipment (add sent items) by shipment ID.
[**shipmentsV1CreatedAndSentShipmentUsingPOST**](ShipmentsV1Api.md#shipmentsv1createdandsentshipmentusingpost) | **POST** /v1/shipments | Create a shipment and mark the position items as sent.
[**shipmentsV1ListShipmentsUsingGET**](ShipmentsV1Api.md#shipmentsv1listshipmentsusingget) | **GET** /v1/shipments | Retrieve shipments.
[**shipmentsV1ShipmentByCarrierAndTrackingNumberUsingGET**](ShipmentsV1Api.md#shipmentsv1shipmentbycarrierandtrackingnumberusingget) | **GET** /v1/shipments/carriers/{carrier}/trackingnumbers/{trackingNumber} | Retrieve shipment by shipment ID.
[**shipmentsV1ShipmentUsingGET**](ShipmentsV1Api.md#shipmentsv1shipmentusingget) | **GET** /v1/shipments/{shipmentId} | Retrieve a shipment and its position items.

# **shipmentsV1AppendPositionItemsByCarrierAndTrackingNumberUsingPOST**
> shipmentsV1AppendPositionItemsByCarrierAndTrackingNumberUsingPOST($body, $carrier, $tracking_number)

Correct an existing shipment (add sent items) by carrier and tracking number.

This endpoint allows to update an existing shipment with new position items. Note that this is just a correction process for shipments where position items are missing. A separate purchase receipt will be generated for the newly added position items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Otto\Client\Model\PositionItemShipmentsV1()); // \Otto\Client\Model\PositionItemShipmentsV1[] | The position items included in shipment.
$carrier = "carrier_example"; // string | The carrier of the shipment.
$tracking_number = "tracking_number_example"; // string | The tracking number of the shipment assigned by the carrier.

try {
    $apiInstance->shipmentsV1AppendPositionItemsByCarrierAndTrackingNumberUsingPOST($body, $carrier, $tracking_number);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1AppendPositionItemsByCarrierAndTrackingNumberUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Otto\Client\Model\PositionItemShipmentsV1[]**](../Model/PositionItemShipmentsV1.md)| The position items included in shipment. |
 **carrier** | **string**| The carrier of the shipment. |
 **tracking_number** | **string**| The tracking number of the shipment assigned by the carrier. |

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsV1AppendPositionItemsUsingPOST**
> shipmentsV1AppendPositionItemsUsingPOST($body, $shipment_id)

Correct an existing shipment (add sent items) by shipment ID.

This endpoint allows to update an existing shipment with new position items. Note that this is just a correction process for shipments where position items are missing. A separate purchase receipt will be generated for the newly added position items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Otto\Client\Model\PositionItemShipmentsV1()); // \Otto\Client\Model\PositionItemShipmentsV1[] | positionItems
$shipment_id = "shipment_id_example"; // string | Internal shipment identifier assigned by OTTO Market.

try {
    $apiInstance->shipmentsV1AppendPositionItemsUsingPOST($body, $shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1AppendPositionItemsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Otto\Client\Model\PositionItemShipmentsV1[]**](../Model/PositionItemShipmentsV1.md)| positionItems |
 **shipment_id** | **string**| Internal shipment identifier assigned by OTTO Market. |

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsV1CreatedAndSentShipmentUsingPOST**
> \Otto\Client\Model\CreateShipmentResponseShipmentsV1 shipmentsV1CreatedAndSentShipmentUsingPOST($body)

Create a shipment and mark the position items as sent.

This endpoint should be used to create a shipment with a list of position items. It confirms that the position items in the list have been handed over to the carrier for final delivery to the customer. At this point, the position items are marked with the state ''SENT'' in OTTO Market. This is the trigger for the generation of a purchase receipt.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Otto\Client\Model\CreateShipmentRequestShipmentsV1(); // \Otto\Client\Model\CreateShipmentRequestShipmentsV1 | request

try {
    $result = $apiInstance->shipmentsV1CreatedAndSentShipmentUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1CreatedAndSentShipmentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Otto\Client\Model\CreateShipmentRequestShipmentsV1**](../Model/CreateShipmentRequestShipmentsV1.md)| request |

### Return type

[**\Otto\Client\Model\CreateShipmentResponseShipmentsV1**](../Model/CreateShipmentResponseShipmentsV1.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsV1ListShipmentsUsingGET**
> \Otto\Client\Model\ShipmentListShipmentsV1 shipmentsV1ListShipmentsUsingGET($datefrom, $limit, $next)

Retrieve shipments.

This endpoint can be used to retrieve the shipments for a given authorized partner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datefrom = "datefrom_example"; // string | Shipments created from this date onwards for the given authorized partner will be returned. The date is considered as UTC.
$limit = 25; // int | The maximum number of shipments to be returned in each response.
$next = "next_example"; // string | The cursor which points to the next shipment that should be queried. It is used to paginate the results.

try {
    $result = $apiInstance->shipmentsV1ListShipmentsUsingGET($datefrom, $limit, $next);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1ListShipmentsUsingGET: ', $e->getMessage(), PHP_EOL;
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

[**\Otto\Client\Model\ShipmentListShipmentsV1**](../Model/ShipmentListShipmentsV1.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsV1ShipmentByCarrierAndTrackingNumberUsingGET**
> \Otto\Client\Model\ShipmentShipmentsV1 shipmentsV1ShipmentByCarrierAndTrackingNumberUsingGET($carrier, $tracking_number)

Retrieve shipment by shipment ID.

This endpoint can be used to retrieve a shipment by carrier and tracking number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier = "carrier_example"; // string | The carrier of the shipment.
$tracking_number = "tracking_number_example"; // string | The tracking number of the shipment assigned by the carrier.

try {
    $result = $apiInstance->shipmentsV1ShipmentByCarrierAndTrackingNumberUsingGET($carrier, $tracking_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1ShipmentByCarrierAndTrackingNumberUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier** | **string**| The carrier of the shipment. |
 **tracking_number** | **string**| The tracking number of the shipment assigned by the carrier. |

### Return type

[**\Otto\Client\Model\ShipmentShipmentsV1**](../Model/ShipmentShipmentsV1.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsV1ShipmentUsingGET**
> \Otto\Client\Model\ShipmentShipmentsV1 shipmentsV1ShipmentUsingGET($shipment_id)

Retrieve a shipment and its position items.

This endpoint can be used to retrieve a shipment by OTTO internal shipment ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT
    $config = Otto\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = "shipment_id_example"; // string | Internal shipment identifier assigned by OTTO Market.

try {
    $result = $apiInstance->shipmentsV1ShipmentUsingGET($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1ShipmentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| Internal shipment identifier assigned by OTTO Market. |

### Return type

[**\Otto\Client\Model\ShipmentShipmentsV1**](../Model/ShipmentShipmentsV1.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


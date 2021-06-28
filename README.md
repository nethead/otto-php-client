# otto-php-client
This API documentation describes all endpoints for: 

Orders - v3
Shipments - v1
Returns - v2

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) 

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
composer require nethead.co/otto-php-client
```

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/otto-php-client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Documentation for Orders API Endpoints

All URIs are relative to *//live.api.otto.market*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ALLApi* | [**cancelPartnerOrderPositionItems**](docs/Api/ALLApi.md#cancelpartnerorderpositionitems) | **POST** /v3/orders/{salesOrderId}/positionItems/{positionItemId}/cancellation | Cancels PositionItems of an order by ids
*ALLApi* | [**cancelPartnerOrders**](docs/Api/ALLApi.md#cancelpartnerorders) | **POST** /v3/orders/{salesOrderId}/cancellation | Cancel all PositionItems of an order
*ALLApi* | [**findPartnerOrders**](docs/Api/ALLApi.md#findpartnerorders) | **GET** /v3/orders | Get a list of orders which can be filtered on fulfillmentStatus.
*ALLApi* | [**getPartnerOrderByOrderNumber**](docs/Api/ALLApi.md#getpartnerorderbyordernumber) | **GET** /v3/orders/{orderNumber} | Get a single order via Order Number
*ALLApi* | [**getPartnerOrderBySalesOrderId**](docs/Api/ALLApi.md#getpartnerorderbysalesorderid) | **GET** /v3/orders/{salesOrderId} | Get a single order via Sales Order Id
*OrdersApi* | [**cancelPartnerOrders**](docs/Api/OrdersApi.md#cancelpartnerorders) | **POST** /v3/orders/{salesOrderId}/cancellation | Cancel all PositionItems of an order
*OrdersApi* | [**findPartnerOrders**](docs/Api/OrdersApi.md#findpartnerorders) | **GET** /v3/orders | Get a list of orders which can be filtered on fulfillmentStatus.
*OrdersApi* | [**getPartnerOrderByOrderNumber**](docs/Api/OrdersApi.md#getpartnerorderbyordernumber) | **GET** /v3/orders/{orderNumber} | Get a single order via Order Number
*OrdersApi* | [**getPartnerOrderBySalesOrderId**](docs/Api/OrdersApi.md#getpartnerorderbysalesorderid) | **GET** /v3/orders/{salesOrderId} | Get a single order via Sales Order Id
*PositionItemsApi* | [**cancelPartnerOrderPositionItems**](docs/Api/PositionItemsApi.md#cancelpartnerorderpositionitems) | **POST** /v3/orders/{salesOrderId}/positionItems/{positionItemId}/cancellation | Cancels PositionItems of an order by ids

## Documentation For Orders API Models

 - [Address](docs/Model/Address.md)
 - [Amount](docs/Model/Amount.md)
 - [InitialServiceFee](docs/Model/InitialServiceFee.md)
 - [Link](docs/Model/Link.md)
 - [OrderLifecycleInformation](docs/Model/OrderLifecycleInformation.md)
 - [PartnerOrder](docs/Model/PartnerOrder.md)
 - [PartnerOrderList](docs/Model/PartnerOrderList.md)
 - [PositionItem](docs/Model/PositionItem.md)
 - [Product](docs/Model/Product.md)
 - [TrackingInfo](docs/Model/TrackingInfo.md)

## Documentation for Shipments API Endpoints

All URIs are relative to *https://live.api.otto.market*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ShipmentsApi* | [**appendPositionItemsByCarrierAndTrackingNumberUsingPOST**](docs/Api/ShipmentsApi.md#appendpositionitemsbycarrierandtrackingnumberusingpost) | **POST** /v1/shipments/carriers/{carrier}/trackingnumbers/{trackingNumber}/positionitems | 
*ShipmentsApi* | [**appendPositionItemsUsingPOST**](docs/Api/ShipmentsApi.md#appendpositionitemsusingpost) | **POST** /v1/shipments/{shipmentId}/positionitems | 
*ShipmentsApi* | [**createdAndSentShipmentUsingPOST**](docs/Api/ShipmentsApi.md#createdandsentshipmentusingpost) | **POST** /v1/shipments | 
*ShipmentsApi* | [**listShipmentsUsingGET**](docs/Api/ShipmentsApi.md#listshipmentsusingget) | **GET** /v1/shipments | 
*ShipmentsApi* | [**shipmentByCarrierAndTrackingNumberUsingGET**](docs/Api/ShipmentsApi.md#shipmentbycarrierandtrackingnumberusingget) | **GET** /v1/shipments/carriers/{carrier}/trackingnumbers/{trackingNumber} | 
*ShipmentsApi* | [**shipmentUsingGET**](docs/Api/ShipmentsApi.md#shipmentusingget) | **GET** /v1/shipments/{shipmentId} | 

## Documentation For Shipments API Models

 - [Address](docs/Model/Address.md)
 - [BadRequest](docs/Model/BadRequest.md)
 - [BadRequestAddPositionItemByShipmentId](docs/Model/BadRequestAddPositionItemByShipmentId.md)
 - [BadRequestAddPositionItemByTrackingNumber](docs/Model/BadRequestAddPositionItemByTrackingNumber.md)
 - [Conflict](docs/Model/Conflict.md)
 - [ConflictAddPositionItemByShipmentId](docs/Model/ConflictAddPositionItemByShipmentId.md)
 - [ConflictAddPositionItemByTrackingNumber](docs/Model/ConflictAddPositionItemByTrackingNumber.md)
 - [CreateShipmentRequest](docs/Model/CreateShipmentRequest.md)
 - [CreateShipmentResponse](docs/Model/CreateShipmentResponse.md)
 - [ErrorDescription](docs/Model/ErrorDescription.md)
 - [ForbiddenGetShipmentByShipmentId](docs/Model/ForbiddenGetShipmentByShipmentId.md)
 - [ForbiddenGetShipmentByTrackingNumber](docs/Model/ForbiddenGetShipmentByTrackingNumber.md)
 - [InternalServerError](docs/Model/InternalServerError.md)
 - [InternalServerErrorAddPositionItemByShipmentId](docs/Model/InternalServerErrorAddPositionItemByShipmentId.md)
 - [InternalServerErrorAddPositionItemByTrackingNumber](docs/Model/InternalServerErrorAddPositionItemByTrackingNumber.md)
 - [InternalServerErrorGetShipmentByShipmentId](docs/Model/InternalServerErrorGetShipmentByShipmentId.md)
 - [InternalServerErrorGetShipmentByTrackingNumber](docs/Model/InternalServerErrorGetShipmentByTrackingNumber.md)
 - [InternalServerErrorGetShipmentList](docs/Model/InternalServerErrorGetShipmentList.md)
 - [Link](docs/Model/Link.md)
 - [NotFoundAddPositionItemByShipmentId](docs/Model/NotFoundAddPositionItemByShipmentId.md)
 - [NotFoundAddPositionItemByTrackingNumber](docs/Model/NotFoundAddPositionItemByTrackingNumber.md)
 - [NotFoundGetShipmentByShipmentId](docs/Model/NotFoundGetShipmentByShipmentId.md)
 - [NotFoundGetShipmentByTrackingNumber](docs/Model/NotFoundGetShipmentByTrackingNumber.md)
 - [PositionItem](docs/Model/PositionItem.md)
 - [ReturnTrackingKey](docs/Model/ReturnTrackingKey.md)
 - [Shipment](docs/Model/Shipment.md)
 - [ShipmentList](docs/Model/ShipmentList.md)
 - [ShipmentWithMinimumDetails](docs/Model/ShipmentWithMinimumDetails.md)
 - [TrackingKey](docs/Model/TrackingKey.md)
 - [Unauthenticated](docs/Model/Unauthenticated.md)


## Documentation for Returns API Endpoints

All URIs are relative to *https://live.api.otto.market*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ReturnsStatusApi* | [**getPositionItemsForUsingGET**](docs/Api/ReturnsStatusApi.md#getpositionitemsforusingget) | **GET** /v2/returns | Get all the items filtered on return status
*ReturnsStatusApi* | [**receiveAcceptedReturnsV2UsingPOST**](docs/Api/ReturnsStatusApi.md#receiveacceptedreturnsv2usingpost) | **POST** /v2/returns/acceptance | Accept the return for a sent position item (up to 200 items per request)
*ReturnsStatusApi* | [**receiveRejectedReturnsV2UsingPOST**](docs/Api/ReturnsStatusApi.md#receiverejectedreturnsv2usingpost) | **POST** /v2/returns/rejection | Reject the return for a sent position item (up to 200 items per request)

## Documentation For Returns API Models

 - [AcceptedPartnerReturnV2](docs/Model/AcceptedPartnerReturnV2.md)
 - [AcceptedReturnMultiStatusResponse](docs/Model/AcceptedReturnMultiStatusResponse.md)
 - [AcceptedStatusData](docs/Model/AcceptedStatusData.md)
 - [AnnouncedStatusData](docs/Model/AnnouncedStatusData.md)
 - [ApiError](docs/Model/ApiError.md)
 - [ApiErrorResponse](docs/Model/ApiErrorResponse.md)
 - [Link](docs/Model/Link.md)
 - [MisdirectedStatusData](docs/Model/MisdirectedStatusData.md)
 - [PositionItem](docs/Model/PositionItem.md)
 - [PositionItemList](docs/Model/PositionItemList.md)
 - [RejectedPartnerReturnV2](docs/Model/RejectedPartnerReturnV2.md)
 - [RejectedPositionItem](docs/Model/RejectedPositionItem.md)
 - [RejectedReturnMultiStatusResponse](docs/Model/RejectedReturnMultiStatusResponse.md)
 - [RejectedStatusData](docs/Model/RejectedStatusData.md)
 - [ReturnTrackingKey](docs/Model/ReturnTrackingKey.md)
 - [ReturnedItemStatusData](docs/Model/ReturnedItemStatusData.md)
 - [ReturnedPositionItem](docs/Model/ReturnedPositionItem.md)
 
 
 
 ## Documentation for Reciepts API Endpoints
 
 All URIs are relative to *https://live.api.otto.market*
 
 Class | Method | HTTP request | Description
 ------------ | ------------- | ------------- | -------------
 *ReceiptsApi* | [**getReceiptPdfUsingGET3**](docs/Api/ReceiptsApi.md#getreceiptpdfusingget3) | **GET** /v2/receipts/{receiptNumber}.pdf | Get the PDF document of a specific receipt by receipt number.
 *ReceiptsApi* | [**getReceiptUsingGET5**](docs/Api/ReceiptsApi.md#getreceiptusingget5) | **GET** /v2/receipts/{receiptNumber} | Get a specific receipt for the given receipt number as JSON object
 *ReceiptsApi* | [**getReceiptsUsingGET5**](docs/Api/ReceiptsApi.md#getreceiptsusingget5) | **GET** /v2/receipts | Get all receipts as list of JSON objects
 
 ## Documentation For Reciepts Models
 
  - [AllOfLineItemTotal](docs/Model/AllOfLineItemTotal.md)
  - [AllOfLineItemUnitPrice](docs/Model/AllOfLineItemUnitPrice.md)
  - [AllOfPartialRefundPartialRefundAmount](docs/Model/AllOfPartialRefundPartialRefundAmount.md)
  - [AllOfShippingFeePrice](docs/Model/AllOfShippingFeePrice.md)
  - [AllOfTotalAmountDue](docs/Model/AllOfTotalAmountDue.md)
  - [AllOfTotalGross](docs/Model/AllOfTotalGross.md)
  - [AllOfTotalNet](docs/Model/AllOfTotalNet.md)
  - [Customer](docs/Model/Customer.md)
  - [DeliveryAddress](docs/Model/DeliveryAddress.md)
  - [LineItem](docs/Model/LineItem.md)
  - [Link](docs/Model/Link.md)
  - [PartialRefund](docs/Model/PartialRefund.md)
  - [Partner](docs/Model/Partner.md)
  - [Receipt](docs/Model/Receipt.md)
  - [ReceiptsList](docs/Model/ReceiptsList.md)
  - [ShippingCost](docs/Model/ShippingCost.md)
  - [ShippingFee](docs/Model/ShippingFee.md)
  - [Total](docs/Model/Total.md)

## Documentation for API Endpoints

All URIs are relative to */*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BrandsApi* | [**getBrands**](docs/Api/BrandsApi.md#getbrands) | **GET** /v2/products/brands | Read the list of brands that are known on the Otto market place.
*CategoriesApi* | [**getCategoryGroups**](docs/Api/CategoriesApi.md#getcategorygroups) | **GET** /v2/products/categories | Read the product categories and associated attributes of the OTTO market place. The total number of results could be limited by specifying query parameters. Generally the resulting product categories values will be paginated. The default page length is 100 product categories per response, the page size limit is 2000. The links specified in the result can be used to page through the total result space.
*MarketplaceStatusApi* | [**getMarketPlaceStatus**](docs/Api/MarketplaceStatusApi.md#getmarketplacestatus) | **GET** /v2/products/{sku}/marketplace-status | Read the marketplace status for a single product variation.
*MarketplaceStatusApi* | [**getMarketPlaceStatusList**](docs/Api/MarketplaceStatusApi.md#getmarketplacestatuslist) | **GET** /v2/products/marketplace-status | Read the marketplace status for your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting marketplace status will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.
*ProductActiveStatusApi* | [**getActiveStatus**](docs/Api/ProductActiveStatusApi.md#getactivestatus) | **GET** /v2/products/active-status | Read the active status of your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting active status values will be paginated. The default page length is 100 active status entries per response, also the page size limit. The links specified in the result can be used to page through the total result space. Replaces corresponding online-status endpoint which now is marked as deprecated.
*ProductActiveStatusApi* | [**getVariationActiveStatus**](docs/Api/ProductActiveStatusApi.md#getvariationactivestatus) | **GET** /v2/products/{sku}/active-status | Read the active status of a single product variation. Replaces corresponding online-status endpoint which now is marked as deprecated.
*ProductActiveStatusApi* | [**updateActiveStatus**](docs/Api/ProductActiveStatusApi.md#updateactivestatus) | **POST** /v2/products/active-status | Update the active status of your product variations and get a process-id to query results.
*ProductsApi* | [**createOrUpdateProductVariations**](docs/Api/ProductsApi.md#createorupdateproductvariations) | **POST** /v2/products | Create or update your product variations and get a process-id to query results. The limit for the number of product variations in one request is 500.
*ProductsApi* | [**failedByProcessId**](docs/Api/ProductsApi.md#failedbyprocessid) | **GET** /v2/products/update-tasks/{processUuid}/failed | Request the failed products of the product data delivery with the linked processUuid. The response will contain a list of failed products with associated error details.
*ProductsApi* | [**getPartnerProducts**](docs/Api/ProductsApi.md#getpartnerproducts) | **GET** /v2/products | Read your product variations. The total number of results could be limited by specifying query parameters. Generally the resulting product variations will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.
*ProductsApi* | [**getProductVariation**](docs/Api/ProductsApi.md#getproductvariation) | **GET** /v2/products/{sku} | Read a single product variation.
*ProductsApi* | [**progressByProcessId**](docs/Api/ProductsApi.md#progressbyprocessid) | **GET** /v2/products/update-tasks/{processUuid} | Request the results of a product data delivery. The response will contain the links for the different parts of the result: products successfully created or updated, products with failures, products which did not contain any changes compared to the last sent version.
*ProductsApi* | [**succeededByProcessId**](docs/Api/ProductsApi.md#succeededbyprocessid) | **GET** /v2/products/update-tasks/{processUuid}/succeeded | Request the succeeded products of the product data delivery with the linked processUuid. The response will contain a list of successfully delivered products.
*ProductsApi* | [**unchangedByProcessId**](docs/Api/ProductsApi.md#unchangedbyprocessid) | **GET** /v2/products/update-tasks/{processUuid}/unchanged | Request the unchanged products of the product data delivery with the linked processUuid. The response will contain a list of unchanged products.

## Documentation For Models

- [ActiveStatus](docs/Model/ActiveStatus.md)
- [ActiveStatusListRequest](docs/Model/ActiveStatusListRequest.md)
- [ActiveStatusListResponse](docs/Model/ActiveStatusListResponse.md)
- [AdditionalRequirement](docs/Model/AdditionalRequirement.md)
- [Attribute](docs/Model/Attribute.md)
- [AttributeDefinition](docs/Model/AttributeDefinition.md)
- [Brand](docs/Model/Brand.md)
- [CategoryGroup](docs/Model/CategoryGroup.md)
- [CategoryGroups](docs/Model/CategoryGroups.md)
- [Condition](docs/Model/Condition.md)
- [Delivery](docs/Model/Delivery.md)
- [Link](docs/Model/Link.md)
- [Logistics](docs/Model/Logistics.md)
- [MarketPlaceStatus](docs/Model/MarketPlaceStatus.md)
- [MarketPlaceStatusApiResult](docs/Model/MarketPlaceStatusApiResult.md)
- [MarketPlaceStatusError](docs/Model/MarketPlaceStatusError.md)
- [MarketPlaceStatusLink](docs/Model/MarketPlaceStatusLink.md)
- [MediaAsset](docs/Model/MediaAsset.md)
- [MonetaryAmount](docs/Model/MonetaryAmount.md)
- [NormPriceInfo](docs/Model/NormPriceInfo.md)
- [PackingUnit](docs/Model/PackingUnit.md)
- [Pricing](docs/Model/Pricing.md)
- [ProductDescription](docs/Model/ProductDescription.md)
- [ProductLink](docs/Model/ProductLink.md)
- [ProductProcessProgress](docs/Model/ProductProcessProgress.md)
- [ProductProcessResult](docs/Model/ProductProcessResult.md)
- [ProductProcessResultLink](docs/Model/ProductProcessResultLink.md)
- [ProductProcessTaskError](docs/Model/ProductProcessTaskError.md)
- [ProductProcessTaskResult](docs/Model/ProductProcessTaskResult.md)
- [ProductVariation](docs/Model/ProductVariation.md)
- [ProductVariationApiResult](docs/Model/ProductVariationApiResult.md)
- [Sale](docs/Model/Sale.md)

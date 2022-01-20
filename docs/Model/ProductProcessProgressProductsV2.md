# ProductProcessProgressProductsV2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | **string** | the current state of the process | [optional] 
**message** | **string** | a human-readable message describing the current state of the process | [optional] 
**progress** | **int** | the fraction of work that is already completed, as compared to the total work | [optional] 
**total** | **int** | the total work to complete for this process | [optional] 
**ping_after** | [**\DateTime**](\DateTime.md) | recommendation when to poll this resource again to receive a meaningful update | [optional] 
**links** | [**\Otto\Client\Model\ProductProcessResultLinkProductsV2[]**](ProductProcessResultLinkProductsV2.md) | a list of links that can be used to access detailed information about the process result | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


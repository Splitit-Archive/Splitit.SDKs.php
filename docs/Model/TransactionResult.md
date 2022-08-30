# TransactionResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**gateway_transaction_id** | **string** |  | [optional] 
**splitit_transaction_id** | **int** |  | 
**splitit_gateway_transaction_id** | **string** |  | [optional] 
**gateway_result_code** | **string** |  | [optional] 
**gateway_result_message** | **string** |  | [optional] 
**operation_type** | [**\SplititSdkClient\Model\ReferenceEntityBase**](ReferenceEntityBase.md) |  | [optional] 
**gateway_result** | **bool** |  | 
**gateway_transaction_date** | [**\DateTime**](\DateTime.md) |  | 
**is_chargeback** | **bool** |  | 
**avs_result** | [**\SplititSdkClient\Model\CardResult**](CardResult.md) |  | [optional] 
**cvc_result** | [**\SplititSdkClient\Model\CardResult**](CardResult.md) |  | [optional] 
**is_in_dispute** | **bool** |  | [optional] 
**dispute_status** | [**\SplititSdkClient\Model\DisputeStatus**](DisputeStatus.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



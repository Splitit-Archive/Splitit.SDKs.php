# Processors

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | 
**name** | **string** |  | [optional] 
**api_url** | **string** |  | [optional] 
**max_number_of_retries** | **int** |  | 
**timeout_seconds** | **int** |  | 
**max_auth** | **int** |  | 
**grace_period** | **int** |  | 
**async_refund_grace_period_days** | **int** |  | [optional] 
**is_checked_mastercard** | **bool** |  | 
**is_checked_upi** | **bool** |  | 
**is_checked_visa** | **bool** |  | 
**is_checked_amex** | **bool** |  | 
**is_checked_maestro** | **bool** |  | 
**is_checked_jcb** | **bool** |  | 
**is_checked_discover** | **bool** |  | 
**is3ds2_supported** | **bool** |  | 
**gateway_apiassembly** | **string** |  | [optional] 
**display_name** | **string** |  | [optional] 
**gateway_apiimplementor_ns** | **string** |  | [optional] 
**is_token_supported** | **bool** |  | 
**consumer_update_cc_grace_period** | **string** |  | [optional] 
**is_void_supported** | **bool** |  | 
**is_void_after_fail_refund** | **bool** |  | 
**min_amount_allowed_for_auth** | **float** |  | 
**capture_delay_in_sec** | **int** |  | 
**void_delay_in_sec** | **int** |  | 
**allow_partial_void** | **bool** |  | 
**installments** | [**\SplititSdkClient\Model\Installments[]**](Installments.md) |  | [optional] 
**processor_authentication_parameters** | [**\SplititSdkClient\Model\ProcessorAuthenticationParameters[]**](ProcessorAuthenticationParameters.md) |  | [optional] 
**re_authorizations** | [**\SplititSdkClient\Model\ReAuthorizations[]**](ReAuthorizations.md) |  | [optional] 
**terminal_gateway_datas** | [**\SplititSdkClient\Model\TerminalGatewayDatas[]**](TerminalGatewayDatas.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



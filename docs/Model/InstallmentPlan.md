# InstallmentPlan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**installment_plan_number** | **string** |  | [optional] 
**installment_plan_status** | [**\SplititSdkClient\Model\ReferenceEntityBase**](ReferenceEntityBase.md) |  | [optional] 
**amount** | [**\SplititSdkClient\Model\Money**](Money.md) |  | [optional] 
**outstanding_amount** | [**\SplititSdkClient\Model\Money**](Money.md) |  | [optional] 
**number_of_installments** | **int** |  | 
**number_of_processed_installments** | **int** |  | 
**original_amount** | [**\SplititSdkClient\Model\Money**](Money.md) |  | [optional] 
**refund_amount** | [**\SplititSdkClient\Model\Money**](Money.md) |  | [optional] 
**consumer** | [**\SplititSdkClient\Model\ConsumerData**](ConsumerData.md) |  | [optional] 
**active_card** | [**\SplititSdkClient\Model\CardData**](CardData.md) |  | [optional] 
**fraud_check** | [**\SplititSdkClient\Model\FraudCheck**](FraudCheck.md) |  | [optional] 
**merchant** | [**\SplititSdkClient\Model\MerchantRef**](MerchantRef.md) |  | [optional] 
**ref_order_number** | **string** |  | [optional] 
**purchase_method** | [**\SplititSdkClient\Model\ReferenceEntityBase**](ReferenceEntityBase.md) |  | [optional] 
**strategy** | [**\SplititSdkClient\Model\ReferenceEntityBase**](ReferenceEntityBase.md) |  | [optional] 
**delay_resolution** | [**\SplititSdkClient\Model\ReferenceEntityBase**](ReferenceEntityBase.md) |  | [optional] 
**extended_params** | **map[string,string]** |  | [optional] 
**is_full_captured** | **bool** |  | 
**is_charged_back** | **bool** |  | 
**are_payments_on_hold** | **bool** |  | 
**scp_funding_percent** | **float** |  | 
**test_mode** | [**\SplititSdkClient\Model\TestModes**](TestModes.md) |  | 
**creation_date_time** | [**\DateTime**](\DateTime.md) |  | 
**installments** | [**\SplititSdkClient\Model\Installment[]**](Installment.md) |  | [optional] 
**secure_authorizations** | [**\SplititSdkClient\Model\ReAuthorization[]**](ReAuthorization.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



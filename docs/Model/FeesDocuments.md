# FeesDocuments

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | 
**fee_amount_in_effective_currency_amount** | **float** |  | 
**fee_amount_in_transaction_currency_amount** | **float** |  | 
**fee_amount_in_uniform_currency_amount** | **float** |  | 
**effective_currency_id** | **int** |  | 
**transaction_currency_id** | **int** |  | [optional] 
**uniform_currency_id** | **int** |  | 
**reference_fees_document_id** | **int** |  | [optional] 
**installment_id** | **int** |  | [optional] 
**plan_id** | **int** |  | [optional] 
**business_unit_id** | **int** |  | [optional] 
**effective_date_utc** | [**\DateTime**](\DateTime.md) |  | 
**fee_rule_data_id** | **int** |  | [optional] 
**fee_rule_data** | [**\SplititSdkClient\Model\FeesRuleDatas**](FeesRuleDatas.md) |  | [optional] 
**business_unit** | [**\SplititSdkClient\Model\BusinessUnits**](BusinessUnits.md) |  | [optional] 
**effective_currency** | [**\SplititSdkClient\Model\Currencies**](Currencies.md) |  | [optional] 
**installment** | [**\SplititSdkClient\Model\Installments**](Installments.md) |  | [optional] 
**plan** | [**\SplititSdkClient\Model\InstallmentPlans**](InstallmentPlans.md) |  | [optional] 
**reference_fees_document** | [**\SplititSdkClient\Model\FeesDocuments**](FeesDocuments.md) |  | [optional] 
**transaction_currency** | [**\SplititSdkClient\Model\Currencies**](Currencies.md) |  | [optional] 
**uniform_currency** | [**\SplititSdkClient\Model\Currencies**](Currencies.md) |  | [optional] 
**inverse_reference_fees_document** | [**\SplititSdkClient\Model\FeesDocuments[]**](FeesDocuments.md) |  | [optional] 
**fee_entity** | [**\SplititSdkClient\Model\AccountingParty**](AccountingParty.md) |  | 
**fee_type** | [**\SplititSdkClient\Model\FeesTypes**](FeesTypes.md) |  | 
**range_type** | [**\SplititSdkClient\Model\RangeType**](RangeType.md) |  | [optional] 
**fee_amount_in_effective_currency** | [**\SplititSdkClient\Model\Money2**](Money2.md) |  | [optional] 
**fee_amount_in_transaction_currency** | [**\SplititSdkClient\Model\Money2**](Money2.md) |  | [optional] 
**fee_amount_in_uniform_currency** | [**\SplititSdkClient\Model\Money2**](Money2.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# Installments

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | 
**installment_plan_id** | **int** |  | 
**installment_number** | **int** |  | 
**processor_id** | **int** |  | 
**origin_utc_offset** | **double** |  | 
**created_date_utc** | [**\DateTime**](\DateTime.md) |  | 
**amount** | **float** |  | 
**process_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**process_date_time_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**is_refund** | **bool** |  | 
**card_state_id** | **int** |  | [optional] 
**original_amount** | **float** |  | 
**refund_amount** | **float** |  | 
**is_full_capture** | **bool** |  | 
**authorized_amount** | **float** |  | 
**is_pre_authorized** | **bool** |  | 
**amount_for_funding** | **float** |  | 
**card_state** | [**\SplititSdkClient\Model\CardStateLogs**](CardStateLogs.md) |  | [optional] 
**installment_plan** | [**\SplititSdkClient\Model\InstallmentPlans**](InstallmentPlans.md) |  | [optional] 
**processor** | [**\SplititSdkClient\Model\Processors**](Processors.md) |  | [optional] 
**fees_documents** | [**\SplititSdkClient\Model\FeesDocuments[]**](FeesDocuments.md) |  | [optional] 
**funding_collect_document_details** | [**\SplititSdkClient\Model\FundingCollectDocumentDetails[]**](FundingCollectDocumentDetails.md) |  | [optional] 
**installment_payment_gateway_transaction_logs** | [**\SplititSdkClient\Model\InstallmentPaymentGatewayTransactionLogs[]**](InstallmentPaymentGatewayTransactionLogs.md) |  | [optional] 
**transfer_document_details** | [**\SplititSdkClient\Model\TransferDocumentDetails[]**](TransferDocumentDetails.md) |  | [optional] 
**merchant_account_type** | [**\SplititSdkClient\Model\MerchantAccountType**](MerchantAccountType.md) |  | 
**status** | [**\SplititSdkClient\Model\InstallmentStatus**](InstallmentStatus.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



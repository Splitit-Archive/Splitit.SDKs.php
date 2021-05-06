# InstallmentPlans

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | 
**terminal_id** | **int** |  | 
**number_of_installments** | **int** |  | 
**amount** | **float** |  | 
**amount_before_fees** | **float** |  | 
**eula** | **bool** |  | 
**installment_plan_number** | **string** |  | [optional] 
**is_full_captured** | **bool** |  | 
**begin_lock_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**merchant_financed_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**merchant_reserve_returned_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**planned_full_capture** | [**\DateTime**](\DateTime.md) |  | [optional] 
**installment_plan_terminal_data_id** | **int** |  | 
**currency_id** | **int** |  | 
**ref_order_number** | **string** |  | [optional] 
**active_card_id** | **int** |  | [optional] 
**base64_png_signature** | **string** |  | [optional] 
**is_charged_back** | **bool** |  | 
**are_charges_held** | **bool** |  | 
**auto_retry** | **bool** |  | 
**pis_member_unique_id** | **string** |  | [optional] 
**pis_member_id** | **int** |  | [optional] 
**subtotal** | **float** |  | 
**tax** | **float** |  | 
**shipping** | **float** |  | 
**setup_context_id** | **int** |  | 
**original_amount** | **float** |  | 
**refund_amount** | **float** |  | 
**reserve_pool_amount** | **float** |  | 
**shopper_approval_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**cancellation_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**activated_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**de_activated_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**amount_for_funding** | **float** |  | 
**amount_for_funding_currency** | [**\SplititSdkClient\Model\Currencies**](Currencies.md) |  | [optional] 
**amount_for_funding_exchange_rate** | **float** |  | 
**amount_for_funding_transaction_currency** | **float** |  | 
**active_card** | [**\SplititSdkClient\Model\Cards**](Cards.md) |  | [optional] 
**currency** | [**\SplititSdkClient\Model\Currencies**](Currencies.md) |  | [optional] 
**installment_plan_terminal_data** | [**\SplititSdkClient\Model\InstallmentPlanTerminalDatas**](InstallmentPlanTerminalDatas.md) |  | [optional] 
**pis_member** | **object** |  | [optional] 
**setup_context** | [**\SplititSdkClient\Model\InstallmentPlanSetupContexts**](InstallmentPlanSetupContexts.md) |  | [optional] 
**terminal** | [**\SplititSdkClient\Model\Terminals**](Terminals.md) |  | [optional] 
**cart_items** | [**\SplititSdkClient\Model\CartItems[]**](CartItems.md) |  | [optional] 
**email_audit_logs** | [**\SplititSdkClient\Model\EmailAuditLogs[]**](EmailAuditLogs.md) |  | [optional] 
**fees_documents** | [**\SplititSdkClient\Model\FeesDocuments[]**](FeesDocuments.md) |  | [optional] 
**fraud_detection_logs** | [**\SplititSdkClient\Model\FraudDetectionLogs[]**](FraudDetectionLogs.md) |  | [optional] 
**funding_collect_document_details** | [**\SplititSdkClient\Model\FundingCollectDocumentDetails[]**](FundingCollectDocumentDetails.md) |  | [optional] 
**installment_plan_audit_logs** | [**\SplititSdkClient\Model\InstallmentPlanAuditLogs[]**](InstallmentPlanAuditLogs.md) |  | [optional] 
**installment_plan_events** | [**\SplititSdkClient\Model\InstallmentPlanEvents[]**](InstallmentPlanEvents.md) |  | [optional] 
**installment_plan_status_log_entries** | [**\SplititSdkClient\Model\InstallmentPlanStatusLogEntries[]**](InstallmentPlanStatusLogEntries.md) |  | [optional] 
**installments** | [**\SplititSdkClient\Model\Installments[]**](Installments.md) |  | [optional] 
**re_authorizations** | [**\SplititSdkClient\Model\ReAuthorizations[]**](ReAuthorizations.md) |  | [optional] 
**refund_log_entries** | [**\SplititSdkClient\Model\RefundLogEntries[]**](RefundLogEntries.md) |  | [optional] 
**transfer_document_details** | [**\SplititSdkClient\Model\TransferDocumentDetails[]**](TransferDocumentDetails.md) |  | [optional] 
**active_terminal_data_id** | **int** |  | [optional] 
**active_terminal_data** | [**\SplititSdkClient\Model\TerminalGatewayDatas**](TerminalGatewayDatas.md) |  | [optional] 
**delay_resolution** | [**\SplititSdkClient\Model\DelayResolution**](DelayResolution.md) |  | [optional] 
**test_mode** | [**\SplititSdkClient\Model\TestModes**](TestModes.md) |  | 
**funding_types_id** | [**\SplititSdkClient\Model\MoneyFlows**](MoneyFlows.md) |  | 
**strategy** | [**\SplititSdkClient\Model\PlanStrategy**](PlanStrategy.md) |  | 
**status** | [**\SplititSdkClient\Model\InstallmentPlanStatus**](InstallmentPlanStatus.md) |  | 
**purchase_method** | [**\SplititSdkClient\Model\PurchaseMethod**](PurchaseMethod.md) |  | 
**extended_params_serialized_data** | **string** |  | [optional] 
**extended_params** | **map[string,string]** |  | [optional] 
**auto_capture** | **bool** |  | 
**items** | [**\SplititSdkClient\Model\CartItems[]**](CartItems.md) |  | [optional] 
**amount_details** | [**\SplititSdkClient\Model\AmountDetails2**](AmountDetails2.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



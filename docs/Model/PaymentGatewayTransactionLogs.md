# PaymentGatewayTransactionLogs

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | 
**avs_message_message_code** | **string** |  | [optional] 
**avs_message_message_text** | **string** |  | [optional] 
**cvv_message_message_code** | **string** |  | [optional] 
**cvv_message_message_text** | **string** |  | [optional] 
**expiry_date_message_message_code** | **string** |  | [optional] 
**expiry_date_message_message_text** | **string** |  | [optional] 
**result_message_message_code** | **string** |  | [optional] 
**result_message_message_text** | **string** |  | [optional] 
**result** | **bool** |  | 
**transaction_id** | **string** |  | [optional] 
**complete_response_xml** | **string** |  | [optional] 
**additional_data** | **string** |  | [optional] 
**requested_currency_code** | **string** |  | [optional] 
**terminal_gateway_data_id** | **int** |  | 
**reference_payment_gateway_transaction_log_id** | **int** |  | [optional] 
**processed_amount_amount** | **float** |  | 
**requested_amount_amount** | **float** |  | 
**installment_plan_id** | **int** |  | [optional] 
**is_chargeback** | **bool** |  | 
**is_async** | **bool** |  | [optional] 
**transfer_id** | **string** |  | [optional] 
**reference_payment_gateway_transaction_log** | [**\SplititSdkClient\Model\PaymentGatewayTransactionLogs**](PaymentGatewayTransactionLogs.md) |  | [optional] 
**terminal_gateway_data** | [**\SplititSdkClient\Model\TerminalGatewayDatas**](TerminalGatewayDatas.md) |  | [optional] 
**fraud_detection_logs** | [**\SplititSdkClient\Model\FraudDetectionLogs[]**](FraudDetectionLogs.md) |  | [optional] 
**installment_payment_gateway_transaction_logs** | [**\SplititSdkClient\Model\InstallmentPaymentGatewayTransactionLogs[]**](InstallmentPaymentGatewayTransactionLogs.md) |  | [optional] 
**inverse_reference_payment_gateway_transaction_log** | [**\SplititSdkClient\Model\PaymentGatewayTransactionLogs[]**](PaymentGatewayTransactionLogs.md) |  | [optional] 
**payment_gateway_transaction_async_logs** | [**\SplititSdkClient\Model\PaymentGatewayTransactionAsyncLogs[]**](PaymentGatewayTransactionAsyncLogs.md) |  | [optional] 
**re_authorization_payment_gateway_transaction_logs** | [**\SplititSdkClient\Model\ReAuthorizationPaymentGatewayTransactionLogs[]**](ReAuthorizationPaymentGatewayTransactionLogs.md) |  | [optional] 
**public_id** | **string** |  | [optional] 
**trace_id** | **string** |  | [optional] 
**type** | [**\SplititSdkClient\Model\OperationType**](OperationType.md) |  | 
**avs_message** | [**\SplititSdkClient\Model\PaymentGatewayMessage**](PaymentGatewayMessage.md) |  | [optional] 
**cvv_message** | [**\SplititSdkClient\Model\PaymentGatewayMessage**](PaymentGatewayMessage.md) |  | [optional] 
**expiry_date_message** | [**\SplititSdkClient\Model\PaymentGatewayMessage**](PaymentGatewayMessage.md) |  | [optional] 
**result_message** | [**\SplititSdkClient\Model\PaymentGatewayMessage**](PaymentGatewayMessage.md) |  | [optional] 
**processed_amount** | [**\SplititSdkClient\Model\Money2**](Money2.md) |  | [optional] 
**requested_amount** | [**\SplititSdkClient\Model\Money2**](Money2.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# InstallmentPlanSetupContexts

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | 
**public_installment_plan_session** | **string** |  | [optional] 
**billing_address_address_line** | **string** |  | [optional] 
**billing_address_zip** | **string** |  | [optional] 
**billing_address_address_line2** | **string** |  | [optional] 
**billing_address_city** | **string** |  | [optional] 
**requested_number_of_installments** | **string** |  | [optional] 
**success_exit_url** | **string** |  | [optional] 
**error_exit_url** | **string** |  | [optional] 
**cancel_exit_url** | **string** |  | [optional] 
**ab_test_query_string** | **string** |  | [optional] 
**requested_first_installment_amount** | **float** |  | 
**requested_first_scheduled_installment_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**send_shopper_approval_request** | [**\DateTime**](\DateTime.md) |  | [optional] 
**send_shopper_payment_request** | [**\DateTime**](\DateTime.md) |  | [optional] 
**requested_capture_on_creation** | **bool** |  | [optional] 
**billing_address_country_id** | **int** |  | [optional] 
**suggested_payment_tp_id** | **int** |  | [optional] 
**ab_testing_session_id** | **int** |  | [optional] 
**default_num_of_installments** | **int** |  | 
**billing_address_state_id** | **int** |  | [optional] 
**billing_address_legacy_full_address_line** | **string** |  | [optional] 
**requested_funding** | **bool** |  | [optional] 
**success_async_url** | **string** |  | [optional] 
**attempt3_dsecure** | **bool** |  | [optional] 
**view_name** | **string** |  | [optional] 
**is_opened_in_iframe** | **bool** |  | 
**is3d_secure_in_popup** | **bool** |  | [optional] 
**external_auth_unique_gateway_id** | **string** |  | [optional] 
**external_amount_details** | **float** |  | 
**external_auth_date** | [**\DateTime**](\DateTime.md) |  | 
**external_auth_transaction_log** | **string** |  | [optional] 
**payment_approval_phone** | **string** |  | [optional] 
**payment_approval_email** | **string** |  | [optional] 
**payment_message** | **string** |  | [optional] 
**terms_and_conditions_key** | **string** |  | [optional] 
**finger_print_id** | **string** |  | [optional] 
**request_update_card_phone** | **string** |  | [optional] 
**request_update_card_email** | **string** |  | [optional] 
**request_update_card_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**billing_address_first_time_populated_by** | **string** |  | [optional] 
**country** | [**\SplititSdkClient\Model\Countries**](Countries.md) |  | [optional] 
**state** | [**\SplititSdkClient\Model\CountrySubdivisions**](CountrySubdivisions.md) |  | [optional] 
**ab_testing_session** | [**\SplititSdkClient\Model\PaymentFormTPABTestingDefinition**](PaymentFormTPABTestingDefinition.md) |  | [optional] 
**suggested_payment_tp** | [**\SplititSdkClient\Model\VersionedTouchPoints**](VersionedTouchPoints.md) |  | [optional] 
**installment_plans** | [**\SplititSdkClient\Model\InstallmentPlans[]**](InstallmentPlans.md) |  | [optional] 
**requested_strategy** | [**\SplititSdkClient\Model\PlanStrategy**](PlanStrategy.md) |  | [optional] 
**billing_address** | [**\SplititSdkClient\Model\AddressData2**](AddressData2.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



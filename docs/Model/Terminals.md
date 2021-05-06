# Terminals

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | 
**name** | **string** |  | [optional] 
**email** | **string** |  | [optional] 
**api_key** | **string** |  | [optional] 
**wizard_timeout** | **int** |  | 
**merchant_id** | **int** |  | 
**utc_offset** | **double** |  | 
**is_disabled** | **bool** |  | 
**charge_before_shipping** | **bool** |  | 
**terminal_id** | **string** |  | [optional] 
**agent_id** | **int** |  | 
**can_cancel_installments_plan** | **bool** |  | 
**crm_id** | **string** |  | [optional] 
**currency_id** | **int** |  | [optional] 
**pending_shipment_reminder_days** | **int** |  | 
**business_unit_id** | **int** |  | 
**keep_non_approved_plan_live** | **int** |  | 
**use_test_gateway** | **bool** |  | 
**agent** | [**\SplititSdkClient\Model\Agents**](Agents.md) |  | [optional] 
**business_unit** | [**\SplititSdkClient\Model\BusinessUnits**](BusinessUnits.md) |  | [optional] 
**currency** | [**\SplititSdkClient\Model\Currencies**](Currencies.md) |  | [optional] 
**merchant** | [**\SplititSdkClient\Model\Merchants**](Merchants.md) |  | [optional] 
**account_updater_subscribers_scopes** | [**\SplititSdkClient\Model\AccountUpdaterSubscribersScopes[]**](AccountUpdaterSubscribersScopes.md) |  | [optional] 
**installment_plans** | [**\SplititSdkClient\Model\InstallmentPlans[]**](InstallmentPlans.md) |  | [optional] 
**reconciliation_reports** | [**\SplititSdkClient\Model\ReconciliationReports[]**](ReconciliationReports.md) |  | [optional] 
**state_limit_rule_datas** | [**\SplititSdkClient\Model\StateLimitRuleDatas[]**](StateLimitRuleDatas.md) |  | [optional] 
**terminal_countries** | [**\SplititSdkClient\Model\TerminalCountries[]**](TerminalCountries.md) |  | [optional] 
**terminal_gateway_datas** | [**\SplititSdkClient\Model\TerminalGatewayDatas[]**](TerminalGatewayDatas.md) |  | [optional] 
**terminal_kvps** | [**\SplititSdkClient\Model\TerminalKvps[]**](TerminalKvps.md) |  | [optional] 
**continue_existing_plan_with_original_gateway** | **bool** |  | 
**active_terminal_data** | [**\SplititSdkClient\Model\TerminalGatewayDatas**](TerminalGatewayDatas.md) |  | [optional] 
**chb_default_action** | [**\SplititSdkClient\Model\ChbDefaultAction**](ChbDefaultAction.md) |  | 
**failure_under_frozen_installments_plan** | [**\SplititSdkClient\Model\FailureUnderFrozenInstallmentsPlan**](FailureUnderFrozenInstallmentsPlan.md) |  | 
**refund_under_cancelation** | [**\SplititSdkClient\Model\RefundUnderCancelation**](RefundUnderCancelation.md) |  | 
**integration_type** | [**\SplititSdkClient\Model\IntegrationType**](IntegrationType.md) |  | 
**test_mode** | [**\SplititSdkClient\Model\TestModes**](TestModes.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



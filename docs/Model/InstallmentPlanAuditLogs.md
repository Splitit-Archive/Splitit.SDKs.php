# InstallmentPlanAuditLogs

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | 
**activity_execution_date** | [**\DateTime**](\DateTime.md) |  | 
**user_id** | **int** |  | [optional] 
**user_unique_id** | **string** |  | [optional] 
**business_activity** | [**\SplititSdkClient\Model\BusinessActivity**](BusinessActivity.md) |  | 
**trace_id** | **string** |  | [optional] 
**result** | **bool** |  | 
**versioned_touch_point** | [**\SplititSdkClient\Model\VersionedTouchPoints**](VersionedTouchPoints.md) |  | [optional] 
**versioned_touch_point_id** | **int** |  | [optional] 
**discriminator** | **string** |  | [optional] 
**additional_info** | **string** |  | [optional] 
**user_type** | [**\SplititSdkClient\Model\UserType**](UserType.md) |  | [optional] 
**installment_plan_id** | **int** |  | [optional] 
**creating_ip_address** | **string** |  | [optional] 
**card_id** | **int** |  | [optional] 
**card** | [**\SplititSdkClient\Model\Cards**](Cards.md) |  | [optional] 
**installment_plan** | [**\SplititSdkClient\Model\InstallmentPlans**](InstallmentPlans.md) |  | [optional] 
**error_code** | [**\SplititSdkClient\Model\PisErrorCodes**](PisErrorCodes.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



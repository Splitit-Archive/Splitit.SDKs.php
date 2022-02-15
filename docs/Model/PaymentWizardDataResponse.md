# PaymentWizardDataResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requested_number_of_installments** | **string** |  | [optional] 
**success_exit_url** | **string** |  | [optional] 
**error_exit_url** | **string** |  | [optional] 
**cancel_exit_url** | **string** |  | [optional] 
**success_async_url** | **string** |  | [optional] 
**view_name** | **string** |  | [optional] 
**is_opened_in_iframe** | **bool** |  | 
**is3d_secure_in_popup** | **bool** |  | [optional] 
**payment_form_message** | **string** |  | [optional] 
**set_short_url** | **bool** |  | 
**show_address_elements** | **string** |  | [optional] 
**currency_display** | [**\SplititSdkClient\Model\ExtendedCurrency**](ExtendedCurrency.md) |  | [optional] 
**force_display_important_notes** | **bool** |  | 
**show_shopper_details_expended_on_start** | **bool** |  | 
**show_payment_schedule_required_credit** | **bool** |  | 
**is_shopper_email_mandatory** | **bool** |  | 
**is_shopper_phone_mandatory** | **bool** |  | 
**number_of_installments_selections_option** | **string** |  | [optional] 
**is3ds2_supported** | **bool** |  | 
**processor_name** | **string** |  | [optional] 
**address_is_readonly** | **bool** |  | 
**phone_is_read_only** | **bool** |  | 
**email_is_read_only** | **bool** |  | 
**show_learn_more** | **bool** |  | 
**show_mobile_phone** | **bool** |  | 
**show_close_dialog_before_abandon** | **bool** |  | 
**logo_url** | **string** |  | [optional] 
**default_num_of_installments** | **int** |  | 
**privacy_policy_url** | **string** |  | [optional] 
**terms_and_conditions_url** | **string** |  | [optional] 
**learn_more_url** | **string** |  | [optional] 
**potential_card_types** | [**\SplititSdkClient\Model\CardType[]**](CardType.md) |  | [optional] 
**potential_card_brands** | [**\SplititSdkClient\Model\CardBrand[]**](CardBrand.md) |  | [optional] 
**payment_form_messages** | [**\SplititSdkClient\Model\PaymentFormMessage[]**](PaymentFormMessage.md) |  | [optional] 
**display_properties** | **map[string,string]** |  | [optional] 
**terms_and_conditions** | [**\SplititSdkClient\Model\TermsAndConditions**](TermsAndConditions.md) |  | [optional] 
**payment_methods** | [**\SplititSdkClient\Model\PaymentMethods[]**](PaymentMethods.md) |  | [optional] 
**status** | [**\SplititSdkClient\Model\InstallmentPlanStatus**](InstallmentPlanStatus.md) |  | 
**is_attempt3_dsecure** | **bool** |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



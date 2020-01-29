# SplititSdkClient\CreateInstallmentPlanApi

All URIs are relative to *https://webapi.production.splitit.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInstallmentPlanGet**](CreateInstallmentPlanApi.md#createInstallmentPlanGet) | **GET** /api/CreateInstallmentPlan | 


# **createInstallmentPlanGet**
> \SplititSdkClient\Model\CreateInstallmentPlanLegacyResponse createInstallmentPlanGet($amount_before_fees, $api_key, $avs_address, $avs_zip, $card_cvv, $card_exp_month, $card_exp_year, $card_holder, $card_number, $card_type_id, $consumer_full_name, $country_id, $email, $installment_number, $param_x, $session_id)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\CreateInstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$amount_before_fees = 8.14; // float | 
$api_key = "api_key_example"; // string | 
$avs_address = "avs_address_example"; // string | 
$avs_zip = "avs_zip_example"; // string | 
$card_cvv = "card_cvv_example"; // string | 
$card_exp_month = "card_exp_month_example"; // string | 
$card_exp_year = "card_exp_year_example"; // string | 
$card_holder = "card_holder_example"; // string | 
$card_number = "card_number_example"; // string | 
$card_type_id = 56; // int | 
$consumer_full_name = "consumer_full_name_example"; // string | 
$country_id = 56; // int | 
$email = "email_example"; // string | 
$installment_number = 56; // int | 
$param_x = "param_x_example"; // string | 
$session_id = "session_id_example"; // string | 

try {
    $result = $apiInstance->createInstallmentPlanGet($amount_before_fees, $api_key, $avs_address, $avs_zip, $card_cvv, $card_exp_month, $card_exp_year, $card_holder, $card_number, $card_type_id, $consumer_full_name, $country_id, $email, $installment_number, $param_x, $session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateInstallmentPlanApi->createInstallmentPlanGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amount_before_fees** | **float**|  | [optional]
 **api_key** | **string**|  | [optional]
 **avs_address** | **string**|  | [optional]
 **avs_zip** | **string**|  | [optional]
 **card_cvv** | **string**|  | [optional]
 **card_exp_month** | **string**|  | [optional]
 **card_exp_year** | **string**|  | [optional]
 **card_holder** | **string**|  | [optional]
 **card_number** | **string**|  | [optional]
 **card_type_id** | **int**|  | [optional]
 **consumer_full_name** | **string**|  | [optional]
 **country_id** | **int**|  | [optional]
 **email** | **string**|  | [optional]
 **installment_number** | **int**|  | [optional]
 **param_x** | **string**|  | [optional]
 **session_id** | **string**|  | [optional]

### Return type

[**\SplititSdkClient\Model\CreateInstallmentPlanLegacyResponse**](../Model/CreateInstallmentPlanLegacyResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to CreateInstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


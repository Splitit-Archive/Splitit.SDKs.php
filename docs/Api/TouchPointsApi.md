# SplititSdkClient\TouchPointsApi

All URIs are relative to *https://webapi.production.splitit.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**touchPointsFlexFieldsData**](TouchPointsApi.md#touchPointsFlexFieldsData) | **GET** /api/TouchPoints/SetupData/FlexFieldsData | 


# **touchPointsFlexFieldsData**
> \SplititSdkClient\Model\FlexFieldsDataResponse touchPointsFlexFieldsData($api_key, $requested_number_of_installments)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\TouchPointsApi(
    Configuration::sandbox(),
    $session_id
);

$api_key = "api_key_example"; // string | 
$requested_number_of_installments = "requested_number_of_installments_example"; // string | 

try {
    $result = $apiInstance->touchPointsFlexFieldsData($api_key, $requested_number_of_installments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TouchPointsApi->touchPointsFlexFieldsData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  | [optional]
 **requested_number_of_installments** | **string**|  | [optional]

### Return type

[**\SplititSdkClient\Model\FlexFieldsDataResponse**](../Model/FlexFieldsDataResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to TouchPointsApi constructor.

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


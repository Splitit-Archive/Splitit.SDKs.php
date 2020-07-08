# SplititSdkClient\InfoApi

All URIs are relative to *https://webapi.production.splitit.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**infoGetLearnMoreDetails**](InfoApi.md#infoGetLearnMoreDetails) | **POST** /api/Merchant/GetLearnMoreDetails | 


# **infoGetLearnMoreDetails**
> \SplititSdkClient\Model\LearnMoreDetailsResponse infoGetLearnMoreDetails($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InfoApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\LearnMoreDetailsRequest(); // \SplititSdkClient\Model\LearnMoreDetailsRequest | 

try {
    $result = $apiInstance->infoGetLearnMoreDetails($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->infoGetLearnMoreDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\LearnMoreDetailsRequest**](../Model/LearnMoreDetailsRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\LearnMoreDetailsResponse**](../Model/LearnMoreDetailsResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InfoApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


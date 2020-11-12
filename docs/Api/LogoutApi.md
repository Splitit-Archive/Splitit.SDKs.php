# SplititSdkClient\LogoutApi

All URIs are relative to *https://webapi.production.splitit.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**logoutPost**](LogoutApi.md#logoutPost) | **POST** /api/logout | 


# **logoutPost**
> \SplititSdkClient\Model\LogoutResponse logoutPost($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\LogoutApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\LogoutRequest(); // \SplititSdkClient\Model\LogoutRequest | 

try {
    $result = $apiInstance->logoutPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogoutApi->logoutPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\LogoutRequest**](../Model/LogoutRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\LogoutResponse**](../Model/LogoutResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to LogoutApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


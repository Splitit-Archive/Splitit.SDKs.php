# SplititSdkClient\LoginApi

All URIs are relative to *https://webapi.production.splitit.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**loginPost**](LoginApi.md#loginPost) | **POST** /api/Login | 

# **loginPost**
> \SplititSdkClient\Model\LoginResponse loginPost($request)

### Example
```php
<?php
require(__DIR__ . '/vendor/autoload.php');

# Using the sandbox environment. Use Configuration::production() for production or omit the parameter.
$apiInstance = new SplititSdkClient\Api\LoginApi(Configuration::sandbox());

$request = new \SplititSdkClient\Model\LoginRequest(); // \SplititSdkClient\Model\LoginRequest | 

try {
    $result = $apiInstance->loginPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\LoginRequest**](../Model/LoginRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


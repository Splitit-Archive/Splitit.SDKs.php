# SplititSdkClient\LoginApi

All URIs are relative to *https://webapi.production.splitit.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**loginGet**](LoginApi.md#loginGet) | **GET** /api/Login | 
[**loginPost**](LoginApi.md#loginPost) | **POST** /api/Login | 


# **loginGet**
> \SplititSdkClient\Model\LoginResponse loginGet($user_name, $password)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SplititSdkClient\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = "user_name_example"; // string | 
$password = "password_example"; // string | 

try {
    $result = $apiInstance->loginGet($user_name, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_name** | **string**|  | [optional]
 **password** | **string**|  | [optional]

### Return type

[**\SplititSdkClient\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginPost**
> \SplititSdkClient\Model\LoginResponse loginPost($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SplititSdkClient\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
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


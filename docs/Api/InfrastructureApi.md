# SplititSdkClient\InfrastructureApi

All URIs are relative to *https://webapi.production.splitit.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**infrastructureGetResources**](InfrastructureApi.md#infrastructureGetResources) | **POST** /api/Infrastructure/GetResources | 


# **infrastructureGetResources**
> \SplititSdkClient\Model\GetResourcesResponse infrastructureGetResources($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InfrastructureApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\GetResourcesRequest(); // \SplititSdkClient\Model\GetResourcesRequest | 

try {
    $result = $apiInstance->infrastructureGetResources($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfrastructureApi->infrastructureGetResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\GetResourcesRequest**](../Model/GetResourcesRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\GetResourcesResponse**](../Model/GetResourcesResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InfrastructureApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


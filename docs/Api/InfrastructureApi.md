# SplititSdkClient\InfrastructureApi

All URIs are relative to *https://webapi.production.splitit.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**infrastructureGetResources**](InfrastructureApi.md#infrastructureGetResources) | **POST** /api/Infrastructure/GetResources | 
[**infrastructureGetResources2**](InfrastructureApi.md#infrastructureGetResources2) | **GET** /api/Infrastructure/GetResources | 


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

# **infrastructureGetResources2**
> \SplititSdkClient\Model\GetResourcesResponse infrastructureGetResources2($api_key, $session_id, $merchant_code, $culture_name, $touch_point_code, $system_text_categories)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InfrastructureApi(
    Configuration::sandbox(),
    $session_id
);

$api_key = "api_key_example"; // string | 
$session_id = "session_id_example"; // string | 
$merchant_code = "merchant_code_example"; // string | 
$culture_name = "culture_name_example"; // string | 
$touch_point_code = "touch_point_code_example"; // string | 
$system_text_categories = array(new \SplititSdkClient\Model\\SplititSdkClient\Model\SystemTextCategory()); // \SplititSdkClient\Model\SystemTextCategory[] | 

try {
    $result = $apiInstance->infrastructureGetResources2($api_key, $session_id, $merchant_code, $culture_name, $touch_point_code, $system_text_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfrastructureApi->infrastructureGetResources2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  | [optional]
 **session_id** | **string**|  | [optional]
 **merchant_code** | **string**|  | [optional]
 **culture_name** | **string**|  | [optional]
 **touch_point_code** | **string**|  | [optional]
 **system_text_categories** | [**\SplititSdkClient\Model\SystemTextCategory[]**](../Model/\SplititSdkClient\Model\SystemTextCategory.md)|  | [optional]

### Return type

[**\SplititSdkClient\Model\GetResourcesResponse**](../Model/GetResourcesResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InfrastructureApi constructor.

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


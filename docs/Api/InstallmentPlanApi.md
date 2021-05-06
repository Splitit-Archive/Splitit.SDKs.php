# SplititSdkClient\InstallmentPlanApi

All URIs are relative to *https://webapi.production.splitit.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**installmentPlanApprove**](InstallmentPlanApi.md#installmentPlanApprove) | **POST** /api/InstallmentPlan/Approve | 
[**installmentPlanCancel**](InstallmentPlanApi.md#installmentPlanCancel) | **POST** /api/InstallmentPlan/Cancel | 
[**installmentPlanChargeBack**](InstallmentPlanApi.md#installmentPlanChargeBack) | **POST** /api/InstallmentPlan/ChargeBack | 
[**installmentPlanCreate**](InstallmentPlanApi.md#installmentPlanCreate) | **POST** /api/InstallmentPlan/Create | 
[**installmentPlanGet**](InstallmentPlanApi.md#installmentPlanGet) | **POST** /api/InstallmentPlan/Get | 
[**installmentPlanGet3DSecureParameters**](InstallmentPlanApi.md#installmentPlanGet3DSecureParameters) | **POST** /api/InstallmentPlan/Get3DSecureParameters | 
[**installmentPlanGetExtended**](InstallmentPlanApi.md#installmentPlanGetExtended) | **POST** /api/InstallmentPlan/GetExtended | 
[**installmentPlanGetFraudStatusDisplay**](InstallmentPlanApi.md#installmentPlanGetFraudStatusDisplay) | **POST** /api/InstallmentPlan/GetFraudStatusDisplay | 
[**installmentPlanGetInitiatedInstallmentPlanRequest**](InstallmentPlanApi.md#installmentPlanGetInitiatedInstallmentPlanRequest) | **POST** /api/InstallmentPlan/GetInitiatedInstallmentPlanRequest | 
[**installmentPlanGetInitiatedUpdatePaymentData**](InstallmentPlanApi.md#installmentPlanGetInitiatedUpdatePaymentData) | **GET** /api/InstallmentPlan/GetInitiatedUpdatePaymentData | 
[**installmentPlanGetLearnMoreDetails**](InstallmentPlanApi.md#installmentPlanGetLearnMoreDetails) | **POST** /api/InstallmentPlan/GetLearnMoreDetails | 
[**installmentPlanGetPGTL**](InstallmentPlanApi.md#installmentPlanGetPGTL) | **POST** /api/InstallmentPlan/GetPGTL | 
[**installmentPlanGetSchedules**](InstallmentPlanApi.md#installmentPlanGetSchedules) | **POST** /api/InstallmentPlan/GetSchedules | 
[**installmentPlanInitiate**](InstallmentPlanApi.md#installmentPlanInitiate) | **POST** /api/InstallmentPlan/Initiate | 
[**installmentPlanRefund**](InstallmentPlanApi.md#installmentPlanRefund) | **POST** /api/InstallmentPlan/Refund | 
[**installmentPlanStartInstallments**](InstallmentPlanApi.md#installmentPlanStartInstallments) | **POST** /api/InstallmentPlan/StartInstallments | 
[**installmentPlanTermsAndConditions**](InstallmentPlanApi.md#installmentPlanTermsAndConditions) | **POST** /api/InstallmentPlan/TermsAndConditions | 
[**installmentPlanTestCard**](InstallmentPlanApi.md#installmentPlanTestCard) | **POST** /api/InstallmentPlan/TestCard | 
[**installmentPlanUpdate**](InstallmentPlanApi.md#installmentPlanUpdate) | **POST** /api/InstallmentPlan/Update | 
[**installmentPlanVerifyPayment**](InstallmentPlanApi.md#installmentPlanVerifyPayment) | **POST** /api/InstallmentPlan/Get/VerifyPayment | 


# **installmentPlanApprove**
> \SplititSdkClient\Model\InstallmentPlanResponse installmentPlanApprove($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\ApproveInstallmentPlanRequest(); // \SplititSdkClient\Model\ApproveInstallmentPlanRequest | 

try {
    $result = $apiInstance->installmentPlanApprove($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanApprove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\ApproveInstallmentPlanRequest**](../Model/ApproveInstallmentPlanRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\InstallmentPlanResponse**](../Model/InstallmentPlanResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanCancel**
> \SplititSdkClient\Model\InstallmentPlanResponse installmentPlanCancel($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\CancelInstallmentPlanRequest(); // \SplititSdkClient\Model\CancelInstallmentPlanRequest | 

try {
    $result = $apiInstance->installmentPlanCancel($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\CancelInstallmentPlanRequest**](../Model/CancelInstallmentPlanRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\InstallmentPlanResponse**](../Model/InstallmentPlanResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanChargeBack**
> \SplititSdkClient\Model\InstallmentPlanResponse installmentPlanChargeBack($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\ChargebackRequest(); // \SplititSdkClient\Model\ChargebackRequest | 

try {
    $result = $apiInstance->installmentPlanChargeBack($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanChargeBack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\ChargebackRequest**](../Model/ChargebackRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\InstallmentPlanResponse**](../Model/InstallmentPlanResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanCreate**
> \SplititSdkClient\Model\CreateInstallmentsPlanResponse installmentPlanCreate($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\CreateInstallmentPlanRequest(); // \SplititSdkClient\Model\CreateInstallmentPlanRequest | 

try {
    $result = $apiInstance->installmentPlanCreate($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\CreateInstallmentPlanRequest**](../Model/CreateInstallmentPlanRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\CreateInstallmentsPlanResponse**](../Model/CreateInstallmentsPlanResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanGet**
> \SplititSdkClient\Model\GetInstallmentsPlanResponse installmentPlanGet($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\GetInstallmentsPlanSearchCriteriaRequest(); // \SplititSdkClient\Model\GetInstallmentsPlanSearchCriteriaRequest | 

try {
    $result = $apiInstance->installmentPlanGet($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\GetInstallmentsPlanSearchCriteriaRequest**](../Model/GetInstallmentsPlanSearchCriteriaRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\GetInstallmentsPlanResponse**](../Model/GetInstallmentsPlanResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanGet3DSecureParameters**
> \SplititSdkClient\Model\Get3DSecureParametersResponse installmentPlanGet3DSecureParameters($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\Get3DSecureParametersRequest(); // \SplititSdkClient\Model\Get3DSecureParametersRequest | 

try {
    $result = $apiInstance->installmentPlanGet3DSecureParameters($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanGet3DSecureParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\Get3DSecureParametersRequest**](../Model/Get3DSecureParametersRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\Get3DSecureParametersResponse**](../Model/Get3DSecureParametersResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanGetExtended**
> \SplititSdkClient\Model\GetInstallmentsPlanExtendedResponse installmentPlanGetExtended($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\GetInstallmentsPlanSearchCriteriaRequest(); // \SplititSdkClient\Model\GetInstallmentsPlanSearchCriteriaRequest | 

try {
    $result = $apiInstance->installmentPlanGetExtended($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanGetExtended: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\GetInstallmentsPlanSearchCriteriaRequest**](../Model/GetInstallmentsPlanSearchCriteriaRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\GetInstallmentsPlanExtendedResponse**](../Model/GetInstallmentsPlanExtendedResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanGetFraudStatusDisplay**
> \SplititSdkClient\Model\GetFraudStatusDisplayResponse installmentPlanGetFraudStatusDisplay($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\GetFraudStatusDisplayRequest(); // \SplititSdkClient\Model\GetFraudStatusDisplayRequest | 

try {
    $result = $apiInstance->installmentPlanGetFraudStatusDisplay($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanGetFraudStatusDisplay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\GetFraudStatusDisplayRequest**](../Model/GetFraudStatusDisplayRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\GetFraudStatusDisplayResponse**](../Model/GetFraudStatusDisplayResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanGetInitiatedInstallmentPlanRequest**
> \SplititSdkClient\Model\GetInitiatedInstallmentPlanResponse installmentPlanGetInitiatedInstallmentPlanRequest($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\GetInitiatedInstallmentPlanRequest(); // \SplititSdkClient\Model\GetInitiatedInstallmentPlanRequest | 

try {
    $result = $apiInstance->installmentPlanGetInitiatedInstallmentPlanRequest($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanGetInitiatedInstallmentPlanRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\GetInitiatedInstallmentPlanRequest**](../Model/GetInitiatedInstallmentPlanRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\GetInitiatedInstallmentPlanResponse**](../Model/GetInitiatedInstallmentPlanResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanGetInitiatedUpdatePaymentData**
> \SplititSdkClient\Model\GetInitiatedUpdatePaymentDataResponse installmentPlanGetInitiatedUpdatePaymentData()



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);


try {
    $result = $apiInstance->installmentPlanGetInitiatedUpdatePaymentData();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanGetInitiatedUpdatePaymentData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SplititSdkClient\Model\GetInitiatedUpdatePaymentDataResponse**](../Model/GetInitiatedUpdatePaymentDataResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanGetLearnMoreDetails**
> \SplititSdkClient\Model\LearnMoreDetailsResponse installmentPlanGetLearnMoreDetails($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\LearnMoreDetailsRequest(); // \SplititSdkClient\Model\LearnMoreDetailsRequest | 

try {
    $result = $apiInstance->installmentPlanGetLearnMoreDetails($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanGetLearnMoreDetails: ', $e->getMessage(), PHP_EOL;
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

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanGetPGTL**
> \SplititSdkClient\Model\GetPGTLResponse installmentPlanGetPGTL($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\GetPGTLRequest(); // \SplititSdkClient\Model\GetPGTLRequest | 

try {
    $result = $apiInstance->installmentPlanGetPGTL($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanGetPGTL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\GetPGTLRequest**](../Model/GetPGTLRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\GetPGTLResponse**](../Model/GetPGTLResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanGetSchedules**
> \SplititSdkClient\Model\GetInstallmentsScheduleResponse installmentPlanGetSchedules($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\GetInstallmentSchedulesRequest(); // \SplititSdkClient\Model\GetInstallmentSchedulesRequest | 

try {
    $result = $apiInstance->installmentPlanGetSchedules($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanGetSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\GetInstallmentSchedulesRequest**](../Model/GetInstallmentSchedulesRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\GetInstallmentsScheduleResponse**](../Model/GetInstallmentsScheduleResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanInitiate**
> \SplititSdkClient\Model\InitiateInstallmentsPlanResponse installmentPlanInitiate($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\InitiateInstallmentPlanRequest(); // \SplititSdkClient\Model\InitiateInstallmentPlanRequest | 

try {
    $result = $apiInstance->installmentPlanInitiate($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanInitiate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\InitiateInstallmentPlanRequest**](../Model/InitiateInstallmentPlanRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\InitiateInstallmentsPlanResponse**](../Model/InitiateInstallmentsPlanResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanRefund**
> \SplititSdkClient\Model\RefundInstallmentPlanResponse installmentPlanRefund($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\RefundPlanRequest(); // \SplititSdkClient\Model\RefundPlanRequest | 

try {
    $result = $apiInstance->installmentPlanRefund($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\RefundPlanRequest**](../Model/RefundPlanRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\RefundInstallmentPlanResponse**](../Model/RefundInstallmentPlanResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanStartInstallments**
> \SplititSdkClient\Model\InstallmentPlanResponse installmentPlanStartInstallments($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\StartInstallmentsRequest(); // \SplititSdkClient\Model\StartInstallmentsRequest | 

try {
    $result = $apiInstance->installmentPlanStartInstallments($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanStartInstallments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\StartInstallmentsRequest**](../Model/StartInstallmentsRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\InstallmentPlanResponse**](../Model/InstallmentPlanResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanTermsAndConditions**
> \SplititSdkClient\Model\TermsAndConditionsGetResponse installmentPlanTermsAndConditions($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\TermsAndConditionsGetRequest(); // \SplititSdkClient\Model\TermsAndConditionsGetRequest | 

try {
    $result = $apiInstance->installmentPlanTermsAndConditions($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanTermsAndConditions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\TermsAndConditionsGetRequest**](../Model/TermsAndConditionsGetRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\TermsAndConditionsGetResponse**](../Model/TermsAndConditionsGetResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanTestCard**
> \SplititSdkClient\Model\InstallmentPlanResponse installmentPlanTestCard($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\TestCardRequest(); // \SplititSdkClient\Model\TestCardRequest | 

try {
    $result = $apiInstance->installmentPlanTestCard($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanTestCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\TestCardRequest**](../Model/TestCardRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\InstallmentPlanResponse**](../Model/InstallmentPlanResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanUpdate**
> \SplititSdkClient\Model\UpdateInstallmentsPlanResponse installmentPlanUpdate($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\UpdateInstallmentPlanRequest(); // \SplititSdkClient\Model\UpdateInstallmentPlanRequest | 

try {
    $result = $apiInstance->installmentPlanUpdate($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\UpdateInstallmentPlanRequest**](../Model/UpdateInstallmentPlanRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\UpdateInstallmentsPlanResponse**](../Model/UpdateInstallmentsPlanResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installmentPlanVerifyPayment**
> \SplititSdkClient\Model\VerifyPaymentResponse installmentPlanVerifyPayment($request)



### Example
```php
<?php
require __DIR__ . '/vendor/autoload.php';

# Use Configuration::production() for production API
$apiInstance = new SplititSdkClient\Api\InstallmentPlanApi(
    Configuration::sandbox(),
    $session_id
);

$request = new \SplititSdkClient\Model\VerifyPaymentRequest(); // \SplititSdkClient\Model\VerifyPaymentRequest | 

try {
    $result = $apiInstance->installmentPlanVerifyPayment($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->installmentPlanVerifyPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SplititSdkClient\Model\VerifyPaymentRequest**](../Model/VerifyPaymentRequest.md)|  |

### Return type

[**\SplititSdkClient\Model\VerifyPaymentResponse**](../Model/VerifyPaymentResponse.md)

### Authorization

Use session_id received from LoginApi and pass it to InstallmentPlanApi constructor.

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


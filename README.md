# Splitit SDK for PHP

This is Splitit Web API SDK source code for PHP 5.5+ applications. For other languages, please visit [Splitit.SDKs](https://github.com/Splitit/Splitit.SDKs).

- API version: 1.0.0
- Package version: 1.3.33

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "require": {
    "splitit/sdk": "^1.3.33"
  }
}
```

Then run `composer install`.

## Getting Started

Replace _YOUR_SANDBOX_API_KEY_, _YOUR_PRODUCTION_API_KEY_, _YOUR_USERNAME_ and _YOUR_PASSWORD_ placeholders with your corresponding credentials.
Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use SplititSdkClient\Configuration;
use SplititSdkClient\ObjectSerializer;
use SplititSdkClient\Api\LoginApi;
use SplititSdkClient\Api\InstallmentPlanApi;
use SplititSdkClient\Model\LoginRequest;
use SplititSdkClient\Model\PlanData;
use SplititSdkClient\Model\ConsumerData;
use SplititSdkClient\Model\RequestHeader;
use SplititSdkClient\Model\AddressData;
use SplititSdkClient\Model\PlanApprovalEvidence;
use SplititSdkClient\Model\CardData;
use SplititSdkClient\Model\MoneyWithCurrencyCode;
use SplititSdkClient\Model\InitiateInstallmentPlanRequest;
use SplititSdkClient\Model\CreateInstallmentPlanRequest;

Configuration::sandbox()->setApiKey('_YOUR_SANDBOX_API_KEY_');
Configuration::production()->setApiKey('_YOUR_PRODUCTION_API_KEY_');

# Using the sandbox environment. Use Configuration::production() for production or omit the parameter.
$loginApi = new LoginApi(Configuration::sandbox());

try{
    $request = new LoginRequest();
    
    # Replace with your login information
    $request->setUserName('_YOUR_USERNAME_');
    $request->setPassword('_YOUR_PASSWORD_');
    $loginResponse = $loginApi->loginPost($request);
    
    $session_id = $loginResponse->getSessionId();
    
    # Use Configuration::production() for production API
    $installmentPlanApi = new InstallmentPlanApi(
        Configuration::sandbox(),
        $session_id
    );
    
    $initiateRequest = new InitiateInstallmentPlanRequest();
    
    $plan_data = new PlanData();
    $plan_data->setNumberOfInstallments(3);
    $plan_data->setAmount(new MoneyWithCurrencyCode(array("value" => 1000, "currency_code" => "USD")));
    
    $billing_address = new AddressData(array(
        "address_line" => "260 Madison avenue",
        "address_line2" => "Apt. 1",
        "city" => "New York",
        "country" => "USA",
        "zip" => "10016"
    ));
    
    $consumer_data = new ConsumerData(array(
        "full_name" => "John Smith",
        "email" => "j.smith@fake-email.com",
        "phone_number" => "4343-555-45",
        "culture_name" => "en-us",
        "is_locked" => false,
        "is_data_restricted" => false,
    ));
    
    $initiateRequest->setPlanData($plan_data);
    $initiateRequest->setBillingAddress($billing_address);
    $initiateRequest->setConsumerData($consumer_data);
    
    $initResponse = $installmentPlanApi->installmentPlanInitiate($initiateRequest);

    echo "Calling /Initiate...\r\n";
    echo $initResponse->getResponseHeader();

    $createRequest = new CreateInstallmentPlanRequest();
    $createRequest->setCreditCardDetails(new CardData(array(
        'card_number' => "411111111111111",
        'card_cvv' => "123",
        'card_holder_full_name' => "John Smith",
        'card_exp_month' => "12",
        'card_exp_year' => "2022"
    )));
    $createRequest->setInstallmentPlanNumber($initResponse->getInstallmentPlan()->getInstallmentPlanNumber());
    $createRequest->setPlanApprovalEvidence(new PlanApprovalEvidence(array(
        "are_terms_and_conditions_approved" => true
    )));

    $createResponse = $installmentPlanApi->installmentPlanCreate($createRequest);

    echo "Calling /Create...\r\n";
    echo $createResponse->getResponseHeader();

} catch(Exception $e){
    echo "Exception has ocurred:\r\n";
    echo $e;
    echo "\r\n**********************\r\n";
}
?>
```

For detailed information on request and response procedures, please visit [Splitit Web API documentation](https://documenter.getpostman.com/view/795699/RWaNQSJH?version=latest)

## Documentation for API Endpoints

All URIs are relative to *https://webapi.production.splitit.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InfrastructureApi* | [**infrastructureGetResources**](docs/Api/InfrastructureApi.md#infrastructuregetresources) | **POST** /api/Infrastructure/GetResources | 
*InstallmentPlanApi* | [**installmentPlanApprove**](docs/Api/InstallmentPlanApi.md#installmentplanapprove) | **POST** /api/InstallmentPlan/Approve | 
*InstallmentPlanApi* | [**installmentPlanCancel**](docs/Api/InstallmentPlanApi.md#installmentplancancel) | **POST** /api/InstallmentPlan/Cancel | 
*InstallmentPlanApi* | [**installmentPlanCreate**](docs/Api/InstallmentPlanApi.md#installmentplancreate) | **POST** /api/InstallmentPlan/Create | 
*InstallmentPlanApi* | [**installmentPlanGet**](docs/Api/InstallmentPlanApi.md#installmentplanget) | **POST** /api/InstallmentPlan/Get | 
*InstallmentPlanApi* | [**installmentPlanGet3DSecureParameters**](docs/Api/InstallmentPlanApi.md#installmentplanget3dsecureparameters) | **POST** /api/InstallmentPlan/Get3DSecureParameters | 
*InstallmentPlanApi* | [**installmentPlanGetExtended**](docs/Api/InstallmentPlanApi.md#installmentplangetextended) | **POST** /api/InstallmentPlan/GetExtended | 
*InstallmentPlanApi* | [**installmentPlanInitiate**](docs/Api/InstallmentPlanApi.md#installmentplaninitiate) | **POST** /api/InstallmentPlan/Initiate | 
*InstallmentPlanApi* | [**installmentPlanRefund**](docs/Api/InstallmentPlanApi.md#installmentplanrefund) | **POST** /api/InstallmentPlan/Refund | 
*InstallmentPlanApi* | [**installmentPlanStartInstallments**](docs/Api/InstallmentPlanApi.md#installmentplanstartinstallments) | **POST** /api/InstallmentPlan/StartInstallments | 
*InstallmentPlanApi* | [**installmentPlanTermsAndConditions**](docs/Api/InstallmentPlanApi.md#installmentplantermsandconditions) | **POST** /api/InstallmentPlan/TermsAndConditions | 
*InstallmentPlanApi* | [**installmentPlanUpdate**](docs/Api/InstallmentPlanApi.md#installmentplanupdate) | **POST** /api/InstallmentPlan/Update | 
*InstallmentPlanApi* | [**installmentPlanVerifyPayment**](docs/Api/InstallmentPlanApi.md#installmentplanverifypayment) | **POST** /api/InstallmentPlan/Get/VerifyPayment | 
*LoginApi* | [**loginPost**](docs/Api/LoginApi.md#loginpost) | **POST** /api/Login | 


## Documentation For Models

 - [AddressData2](docs/Model/AddressData2.md)
 - [AmountDetails2](docs/Model/AmountDetails2.md)
 - [ApproveInstallmentPlanRequest](docs/Model/ApproveInstallmentPlanRequest.md)
 - [AuthenticationType](docs/Model/AuthenticationType.md)
 - [CancelInstallmentPlanRequest](docs/Model/CancelInstallmentPlanRequest.md)
 - [CardData](docs/Model/CardData.md)
 - [CartData](docs/Model/CartData.md)
 - [CreateInstallmentPlanLegacyResponse](docs/Model/CreateInstallmentPlanLegacyResponse.md)
 - [CreateInstallmentPlanRequest](docs/Model/CreateInstallmentPlanRequest.md)
 - [DelayResolution](docs/Model/DelayResolution.md)
 - [Error](docs/Model/Error.md)
 - [EventsEndpoints](docs/Model/EventsEndpoints.md)
 - [ExternalAuth](docs/Model/ExternalAuth.md)
 - [FraudCheck](docs/Model/FraudCheck.md)
 - [FraudCheckResult](docs/Model/FraudCheckResult.md)
 - [Get3DSecureParametersRequest](docs/Model/Get3DSecureParametersRequest.md)
 - [Get3DSecureParametersResponse](docs/Model/Get3DSecureParametersResponse.md)
 - [GetInstallmentsPlanResponse](docs/Model/GetInstallmentsPlanResponse.md)
 - [GetInstallmentsPlanSearchCriteriaRequest](docs/Model/GetInstallmentsPlanSearchCriteriaRequest.md)
 - [GetResourcesRequest](docs/Model/GetResourcesRequest.md)
 - [GetResourcesRequestContext](docs/Model/GetResourcesRequestContext.md)
 - [GetResourcesResponse](docs/Model/GetResourcesResponse.md)
 - [InitiateInstallmentPlanRequest](docs/Model/InitiateInstallmentPlanRequest.md)
 - [Installment](docs/Model/Installment.md)
 - [InstallmentPlan](docs/Model/InstallmentPlan.md)
 - [InstallmentPlanActivityStatus](docs/Model/InstallmentPlanActivityStatus.md)
 - [InstallmentPlanCancelationReason](docs/Model/InstallmentPlanCancelationReason.md)
 - [InstallmentPlanDateInfo](docs/Model/InstallmentPlanDateInfo.md)
 - [InstallmentPlanInitiatedStatuses](docs/Model/InstallmentPlanInitiatedStatuses.md)
 - [InstallmentPlanQueryCriteria](docs/Model/InstallmentPlanQueryCriteria.md)
 - [InstallmentPlanResponse](docs/Model/InstallmentPlanResponse.md)
 - [InstallmentPlanStatus](docs/Model/InstallmentPlanStatus.md)
 - [InstallmentsPlanDateType](docs/Model/InstallmentsPlanDateType.md)
 - [ItemData](docs/Model/ItemData.md)
 - [LoginRequest](docs/Model/LoginRequest.md)
 - [LoginResponse2](docs/Model/LoginResponse2.md)
 - [Money](docs/Model/Money.md)
 - [MoneyWithCurrencyCode](docs/Model/MoneyWithCurrencyCode.md)
 - [PagingRequestHeader](docs/Model/PagingRequestHeader.md)
 - [PagingResponseHeader](docs/Model/PagingResponseHeader.md)
 - [PaymentToken](docs/Model/PaymentToken.md)
 - [PaymentWizardData](docs/Model/PaymentWizardData.md)
 - [PlanApprovalEvidence](docs/Model/PlanApprovalEvidence.md)
 - [PlanData](docs/Model/PlanData.md)
 - [PlanStrategy](docs/Model/PlanStrategy.md)
 - [PurchaseMethod](docs/Model/PurchaseMethod.md)
 - [ReAuthorization](docs/Model/ReAuthorization.md)
 - [RedirectUrls](docs/Model/RedirectUrls.md)
 - [ReferenceEntityBase](docs/Model/ReferenceEntityBase.md)
 - [RefundPlanRequest](docs/Model/RefundPlanRequest.md)
 - [RefundStrategy](docs/Model/RefundStrategy.md)
 - [RefundUnderCancelation](docs/Model/RefundUnderCancelation.md)
 - [RelationsLoad](docs/Model/RelationsLoad.md)
 - [RequestHeader](docs/Model/RequestHeader.md)
 - [ResponseError](docs/Model/ResponseError.md)
 - [ResponseHeader](docs/Model/ResponseHeader.md)
 - [ResponseStatus](docs/Model/ResponseStatus.md)
 - [StartInstallmentsRequest](docs/Model/StartInstallmentsRequest.md)
 - [SystemTextCategory](docs/Model/SystemTextCategory.md)
 - [TermsAndConditions](docs/Model/TermsAndConditions.md)
 - [TermsAndConditionsGetRequest](docs/Model/TermsAndConditionsGetRequest.md)
 - [TermsAndConditionsGetResponse](docs/Model/TermsAndConditionsGetResponse.md)
 - [TestModes](docs/Model/TestModes.md)
 - [TouchPoint](docs/Model/TouchPoint.md)
 - [TransactionInfo](docs/Model/TransactionInfo.md)
 - [TransactionResult](docs/Model/TransactionResult.md)
 - [TransactionStatus](docs/Model/TransactionStatus.md)
 - [TransactionType](docs/Model/TransactionType.md)
 - [User](docs/Model/User.md)
 - [VerifyPaymentRequest](docs/Model/VerifyPaymentRequest.md)
 - [VerifyPaymentResponse](docs/Model/VerifyPaymentResponse.md)
 - [AddressData](docs/Model/AddressData.md)
 - [AmountDetails](docs/Model/AmountDetails.md)
 - [BuRef](docs/Model/BuRef.md)
 - [ConsumerData](docs/Model/ConsumerData.md)
 - [CreateInstallmentsPlanResponse](docs/Model/CreateInstallmentsPlanResponse.md)
 - [Currency](docs/Model/Currency.md)
 - [ExtendedInstallmentPlan](docs/Model/ExtendedInstallmentPlan.md)
 - [GetInstallmentsPlanExtendedResponse](docs/Model/GetInstallmentsPlanExtendedResponse.md)
 - [InitiateInstallmentsPlanResponse](docs/Model/InitiateInstallmentsPlanResponse.md)
 - [LoginResponse](docs/Model/LoginResponse.md)
 - [MerchantRef](docs/Model/MerchantRef.md)
 - [RefundInstallmentPlanResponse](docs/Model/RefundInstallmentPlanResponse.md)
 - [UpdateInstallmentPlanRequest](docs/Model/UpdateInstallmentPlanRequest.md)
 - [UpdateInstallmentsPlanResponse](docs/Model/UpdateInstallmentsPlanResponse.md)


## Author

[Splitit](https://www.splitit.com/developers/integrations/hosted-solution/)
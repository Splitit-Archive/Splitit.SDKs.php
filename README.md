# Splitit SDK for PHP

This is Splitit Web API SDK source code for PHP 5.5+ applications. For other languages, please visit [Splitit.SDKs](https://github.com/Splitit/Splitit.SDKs).

- API version: 1.0.0
- Package version: 1.6.6

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "require": {
    "splitit/sdk": "^1.6.6"
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

    //$installmentPlanApi->setCulture('de-DE'); -> optionally set culture to be used in subsequent calls to this API.
    
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

## Flex Fields

Common usage for Splitit PHP SDK is in making necessary server-side requests as part of FlexFields product integration.
The code below is an example of how SDK wrappers can be used to simplify acquiring public token and verifying payment.
For more information, please visit [FlexFields documentation](https://flex-fields.production.splitit.com/#php).

Server-side code consists of two parts: acquiring public token which needs to be passed to FlexFields JS library 
and verifying payment before order is finalized and shipped.

### Getting public token
```php
<?php

use SplititSdkClient\Configuration;
use SplititSdkClient\ObjectSerializer;
use SplititSdkClient\FlexFields;

Configuration::sandbox()->setApiKey('_YOUR_SANDBOX_API_KEY_');
Configuration::production()->setApiKey('_YOUR_PRODUCTION_API_KEY_');

try{
    $ff = FlexFields::authenticate(Configuration::sandbox(), 'YOUR_USERNAME', 'YOUR_PASSWORD');
    $publicToken = $ff->getPublicToken(1000, "USD");

    echo $publicToken;
} catch(Exception $e){
    ...
}
?>
```

### Payment verification
```php
<?php

use SplititSdkClient\Configuration;
use SplititSdkClient\ObjectSerializer;
use SplititSdkClient\FlexFields;

Configuration::sandbox()->setApiKey('_YOUR_SANDBOX_API_KEY_');
Configuration::production()->setApiKey('_YOUR_PRODUCTION_API_KEY_');

try{
    $ff = FlexFields::authenticate(Configuration::sandbox(), 'YOUR_USERNAME', 'YOUR_PASSWORD');
    $verifyPaymentResponse = $ff->verifyPayment($installmentPlanNumber, 1000);

    if ($verifyPaymentResponse) 
    {
        # all good
    }
    else
    {
        # error
    }
} catch(Exception $e){
    ...
}
?>
```

For detailed information on request and response procedures, please visit [Splitit Web API documentation](https://documenter.getpostman.com/view/795699/RWaNQSJH?version=latest)

## Documentation for API Endpoints

All URIs are relative to *https://webapi.production.splitit.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InfoApi* | [**infoGetLearnMoreDetails**](docs/Api/InfoApi.md#infogetlearnmoredetails) | **POST** /api/Merchant/GetLearnMoreDetails | 
*InfrastructureApi* | [**infrastructureGetResources**](docs/Api/InfrastructureApi.md#infrastructuregetresources) | **POST** /api/Infrastructure/GetResources | 
*InfrastructureApi* | [**infrastructureGetResources2**](docs/Api/InfrastructureApi.md#infrastructuregetresources2) | **GET** /api/Infrastructure/GetResources | 
*InstallmentPlanApi* | [**installmentPlanApprove**](docs/Api/InstallmentPlanApi.md#installmentplanapprove) | **POST** /api/InstallmentPlan/Approve | 
*InstallmentPlanApi* | [**installmentPlanCancel**](docs/Api/InstallmentPlanApi.md#installmentplancancel) | **POST** /api/InstallmentPlan/Cancel | 
*InstallmentPlanApi* | [**installmentPlanChargeBack**](docs/Api/InstallmentPlanApi.md#installmentplanchargeback) | **POST** /api/InstallmentPlan/ChargeBack | 
*InstallmentPlanApi* | [**installmentPlanCreate**](docs/Api/InstallmentPlanApi.md#installmentplancreate) | **POST** /api/InstallmentPlan/Create | 
*InstallmentPlanApi* | [**installmentPlanGet**](docs/Api/InstallmentPlanApi.md#installmentplanget) | **POST** /api/InstallmentPlan/Get | 
*InstallmentPlanApi* | [**installmentPlanGet3DSecureParameters**](docs/Api/InstallmentPlanApi.md#installmentplanget3dsecureparameters) | **POST** /api/InstallmentPlan/Get3DSecureParameters | 
*InstallmentPlanApi* | [**installmentPlanGetExtended**](docs/Api/InstallmentPlanApi.md#installmentplangetextended) | **POST** /api/InstallmentPlan/GetExtended | 
*InstallmentPlanApi* | [**installmentPlanGetFraudStatusDisplay**](docs/Api/InstallmentPlanApi.md#installmentplangetfraudstatusdisplay) | **POST** /api/InstallmentPlan/GetFraudStatusDisplay | 
*InstallmentPlanApi* | [**installmentPlanGetInitiatedInstallmentPlanRequest**](docs/Api/InstallmentPlanApi.md#installmentplangetinitiatedinstallmentplanrequest) | **POST** /api/InstallmentPlan/GetInitiatedInstallmentPlanRequest | 
*InstallmentPlanApi* | [**installmentPlanGetInitiatedUpdatePaymentData**](docs/Api/InstallmentPlanApi.md#installmentplangetinitiatedupdatepaymentdata) | **GET** /api/InstallmentPlan/GetInitiatedUpdatePaymentData | 
*InstallmentPlanApi* | [**installmentPlanGetLearnMoreDetails**](docs/Api/InstallmentPlanApi.md#installmentplangetlearnmoredetails) | **POST** /api/InstallmentPlan/GetLearnMoreDetails | 
*InstallmentPlanApi* | [**installmentPlanGetPGTL**](docs/Api/InstallmentPlanApi.md#installmentplangetpgtl) | **POST** /api/InstallmentPlan/GetPGTL | 
*InstallmentPlanApi* | [**installmentPlanGetSchedules**](docs/Api/InstallmentPlanApi.md#installmentplangetschedules) | **POST** /api/InstallmentPlan/GetSchedules | 
*InstallmentPlanApi* | [**installmentPlanInitiate**](docs/Api/InstallmentPlanApi.md#installmentplaninitiate) | **POST** /api/InstallmentPlan/Initiate | 
*InstallmentPlanApi* | [**installmentPlanRefund**](docs/Api/InstallmentPlanApi.md#installmentplanrefund) | **POST** /api/InstallmentPlan/Refund | 
*InstallmentPlanApi* | [**installmentPlanStartInstallments**](docs/Api/InstallmentPlanApi.md#installmentplanstartinstallments) | **POST** /api/InstallmentPlan/StartInstallments | 
*InstallmentPlanApi* | [**installmentPlanTermsAndConditions**](docs/Api/InstallmentPlanApi.md#installmentplantermsandconditions) | **POST** /api/InstallmentPlan/TermsAndConditions | 
*InstallmentPlanApi* | [**installmentPlanTestCard**](docs/Api/InstallmentPlanApi.md#installmentplantestcard) | **POST** /api/InstallmentPlan/TestCard | 
*InstallmentPlanApi* | [**installmentPlanUpdate**](docs/Api/InstallmentPlanApi.md#installmentplanupdate) | **POST** /api/InstallmentPlan/Update | 
*InstallmentPlanApi* | [**installmentPlanVerifyPayment**](docs/Api/InstallmentPlanApi.md#installmentplanverifypayment) | **POST** /api/InstallmentPlan/Get/VerifyPayment | 
*LoginApi* | [**loginPost**](docs/Api/LoginApi.md#loginpost) | **POST** /api/Login | 


## Documentation For Models

 - [AccountUpdaterProvider](docs/Model/AccountUpdaterProvider.md)
 - [AccountingParty](docs/Model/AccountingParty.md)
 - [AddressData2](docs/Model/AddressData2.md)
 - [AgentFeeType](docs/Model/AgentFeeType.md)
 - [AmountDetails2](docs/Model/AmountDetails2.md)
 - [ApproveInstallmentPlanRequest](docs/Model/ApproveInstallmentPlanRequest.md)
 - [AuthenticationType](docs/Model/AuthenticationType.md)
 - [BankDetails](docs/Model/BankDetails.md)
 - [BinData](docs/Model/BinData.md)
 - [BusinessActivity](docs/Model/BusinessActivity.md)
 - [BusinessParty](docs/Model/BusinessParty.md)
 - [CancelInstallmentPlanRequest](docs/Model/CancelInstallmentPlanRequest.md)
 - [CardBrand](docs/Model/CardBrand.md)
 - [CardData](docs/Model/CardData.md)
 - [CardResult](docs/Model/CardResult.md)
 - [CardType](docs/Model/CardType.md)
 - [CartData](docs/Model/CartData.md)
 - [ChargebackRequest](docs/Model/ChargebackRequest.md)
 - [ChbDefaultAction](docs/Model/ChbDefaultAction.md)
 - [CountryState](docs/Model/CountryState.md)
 - [CreateInstallmentPlanLegacyResponse](docs/Model/CreateInstallmentPlanLegacyResponse.md)
 - [CreateInstallmentPlanRequest](docs/Model/CreateInstallmentPlanRequest.md)
 - [CurrencyCountries](docs/Model/CurrencyCountries.md)
 - [DelayResolution](docs/Model/DelayResolution.md)
 - [EntityBase](docs/Model/EntityBase.md)
 - [Error](docs/Model/Error.md)
 - [EventsEndpoints](docs/Model/EventsEndpoints.md)
 - [ExternalAuth](docs/Model/ExternalAuth.md)
 - [FailureUnderFrozenInstallmentsPlan](docs/Model/FailureUnderFrozenInstallmentsPlan.md)
 - [FeesTypes](docs/Model/FeesTypes.md)
 - [FraudCheck](docs/Model/FraudCheck.md)
 - [FraudCheckResult](docs/Model/FraudCheckResult.md)
 - [FundingTransferReason](docs/Model/FundingTransferReason.md)
 - [Get3DSecureParametersRequest](docs/Model/Get3DSecureParametersRequest.md)
 - [Get3DSecureParametersResponse](docs/Model/Get3DSecureParametersResponse.md)
 - [GetFraudStatusDisplayRequest](docs/Model/GetFraudStatusDisplayRequest.md)
 - [GetFraudStatusDisplayResponse](docs/Model/GetFraudStatusDisplayResponse.md)
 - [GetInitiatedInstallmentPlanRequest](docs/Model/GetInitiatedInstallmentPlanRequest.md)
 - [GetInitiatedInstallmentPlanResponse](docs/Model/GetInitiatedInstallmentPlanResponse.md)
 - [GetInitiatedUpdatePaymentDataResponse](docs/Model/GetInitiatedUpdatePaymentDataResponse.md)
 - [GetInstallmentSchedulesRequest](docs/Model/GetInstallmentSchedulesRequest.md)
 - [GetInstallmentsPlanResponse](docs/Model/GetInstallmentsPlanResponse.md)
 - [GetInstallmentsPlanSearchCriteriaRequest](docs/Model/GetInstallmentsPlanSearchCriteriaRequest.md)
 - [GetInstallmentsScheduleResponse](docs/Model/GetInstallmentsScheduleResponse.md)
 - [GetPGTLRequest](docs/Model/GetPGTLRequest.md)
 - [GetPGTLResponse](docs/Model/GetPGTLResponse.md)
 - [GetResourcesRequest](docs/Model/GetResourcesRequest.md)
 - [GetResourcesRequestContext](docs/Model/GetResourcesRequestContext.md)
 - [GetResourcesResponse](docs/Model/GetResourcesResponse.md)
 - [IUserPasswordHistory](docs/Model/IUserPasswordHistory.md)
 - [InitiateInstallmentPlanRequest](docs/Model/InitiateInstallmentPlanRequest.md)
 - [Installment](docs/Model/Installment.md)
 - [Installment2](docs/Model/Installment2.md)
 - [InstallmentPaymentGatewayTransactionLogs](docs/Model/InstallmentPaymentGatewayTransactionLogs.md)
 - [InstallmentPlan](docs/Model/InstallmentPlan.md)
 - [InstallmentPlanActivityStatus](docs/Model/InstallmentPlanActivityStatus.md)
 - [InstallmentPlanCancelationReason](docs/Model/InstallmentPlanCancelationReason.md)
 - [InstallmentPlanDateInfo](docs/Model/InstallmentPlanDateInfo.md)
 - [InstallmentPlanEventType](docs/Model/InstallmentPlanEventType.md)
 - [InstallmentPlanInitiatedStatuses](docs/Model/InstallmentPlanInitiatedStatuses.md)
 - [InstallmentPlanQueryCriteria](docs/Model/InstallmentPlanQueryCriteria.md)
 - [InstallmentPlanResponse](docs/Model/InstallmentPlanResponse.md)
 - [InstallmentPlanStatus](docs/Model/InstallmentPlanStatus.md)
 - [InstallmentStatus](docs/Model/InstallmentStatus.md)
 - [InstallmentsPlanDateType](docs/Model/InstallmentsPlanDateType.md)
 - [IntegrationType](docs/Model/IntegrationType.md)
 - [ItemData](docs/Model/ItemData.md)
 - [LearnMoreDetailsRequest](docs/Model/LearnMoreDetailsRequest.md)
 - [LearnMoreDetailsResponse](docs/Model/LearnMoreDetailsResponse.md)
 - [LoginRequest](docs/Model/LoginRequest.md)
 - [LoginResponse](docs/Model/LoginResponse.md)
 - [MerchantAccountType](docs/Model/MerchantAccountType.md)
 - [MerchantStatus](docs/Model/MerchantStatus.md)
 - [MerchantVertical](docs/Model/MerchantVertical.md)
 - [Money](docs/Model/Money.md)
 - [Money2](docs/Model/Money2.md)
 - [MoneyFlows](docs/Model/MoneyFlows.md)
 - [MoneyWithCurrencyCode](docs/Model/MoneyWithCurrencyCode.md)
 - [OnBoardingMethod](docs/Model/OnBoardingMethod.md)
 - [OperationType](docs/Model/OperationType.md)
 - [PagingRequestHeader](docs/Model/PagingRequestHeader.md)
 - [PagingResponseHeader](docs/Model/PagingResponseHeader.md)
 - [PaymentFormMessage](docs/Model/PaymentFormMessage.md)
 - [PaymentFormMessageType](docs/Model/PaymentFormMessageType.md)
 - [PaymentGatewayMessage](docs/Model/PaymentGatewayMessage.md)
 - [PaymentToken](docs/Model/PaymentToken.md)
 - [PaymentWizardData](docs/Model/PaymentWizardData.md)
 - [PisErrorCodes](docs/Model/PisErrorCodes.md)
 - [PisUserBusinessUnits](docs/Model/PisUserBusinessUnits.md)
 - [PlanApprovalEvidence](docs/Model/PlanApprovalEvidence.md)
 - [PlanData](docs/Model/PlanData.md)
 - [PlanStrategy](docs/Model/PlanStrategy.md)
 - [ProcessorType](docs/Model/ProcessorType.md)
 - [PurchaseMethod](docs/Model/PurchaseMethod.md)
 - [RangeType](docs/Model/RangeType.md)
 - [ReAuthorization](docs/Model/ReAuthorization.md)
 - [ReAuthorizationPaymentGatewayTransactionLogs](docs/Model/ReAuthorizationPaymentGatewayTransactionLogs.md)
 - [RedirectUrls](docs/Model/RedirectUrls.md)
 - [ReferenceEntityBase](docs/Model/ReferenceEntityBase.md)
 - [RefundPlanRequest](docs/Model/RefundPlanRequest.md)
 - [RefundStrategy](docs/Model/RefundStrategy.md)
 - [RefundUnderCancelation](docs/Model/RefundUnderCancelation.md)
 - [RelationsLoad](docs/Model/RelationsLoad.md)
 - [RequestHeader](docs/Model/RequestHeader.md)
 - [ResponseHeader](docs/Model/ResponseHeader.md)
 - [Schedule](docs/Model/Schedule.md)
 - [ScheduleElements](docs/Model/ScheduleElements.md)
 - [ScpProvidersCurrencies](docs/Model/ScpProvidersCurrencies.md)
 - [SessionAvailibility](docs/Model/SessionAvailibility.md)
 - [SplititEntity](docs/Model/SplititEntity.md)
 - [StartInstallmentsRequest](docs/Model/StartInstallmentsRequest.md)
 - [SystemEmailsTypes](docs/Model/SystemEmailsTypes.md)
 - [SystemTextCategory](docs/Model/SystemTextCategory.md)
 - [TerminalCountries](docs/Model/TerminalCountries.md)
 - [TermsAndConditions](docs/Model/TermsAndConditions.md)
 - [TermsAndConditionsGetRequest](docs/Model/TermsAndConditionsGetRequest.md)
 - [TermsAndConditionsGetResponse](docs/Model/TermsAndConditionsGetResponse.md)
 - [TestCardRequest](docs/Model/TestCardRequest.md)
 - [TestModes](docs/Model/TestModes.md)
 - [TouchPoint](docs/Model/TouchPoint.md)
 - [TransactionInfo](docs/Model/TransactionInfo.md)
 - [TransactionResult](docs/Model/TransactionResult.md)
 - [TransactionStatus](docs/Model/TransactionStatus.md)
 - [TransactionType](docs/Model/TransactionType.md)
 - [User](docs/Model/User.md)
 - [UserPermissionLevel](docs/Model/UserPermissionLevel.md)
 - [UserStatus](docs/Model/UserStatus.md)
 - [UserType](docs/Model/UserType.md)
 - [VerifyPaymentRequest](docs/Model/VerifyPaymentRequest.md)
 - [VerifyPaymentResponse](docs/Model/VerifyPaymentResponse.md)
 - [AccountUpdaterPendingCards](docs/Model/AccountUpdaterPendingCards.md)
 - [AccountUpdaterSubscribersScopes](docs/Model/AccountUpdaterSubscribersScopes.md)
 - [AddressData](docs/Model/AddressData.md)
 - [Agents](docs/Model/Agents.md)
 - [AmountDetails](docs/Model/AmountDetails.md)
 - [AuditLogs](docs/Model/AuditLogs.md)
 - [BinDataItems](docs/Model/BinDataItems.md)
 - [BusinessUnits](docs/Model/BusinessUnits.md)
 - [CardStateLogs](docs/Model/CardStateLogs.md)
 - [Cards](docs/Model/Cards.md)
 - [CartItems](docs/Model/CartItems.md)
 - [CollectDocuments](docs/Model/CollectDocuments.md)
 - [ConfigKeys](docs/Model/ConfigKeys.md)
 - [ConfigValues](docs/Model/ConfigValues.md)
 - [ConsumerData](docs/Model/ConsumerData.md)
 - [Countries](docs/Model/Countries.md)
 - [CountrySubdivisions](docs/Model/CountrySubdivisions.md)
 - [CreateInstallmentsPlanResponse](docs/Model/CreateInstallmentsPlanResponse.md)
 - [Currencies](docs/Model/Currencies.md)
 - [Currency](docs/Model/Currency.md)
 - [DEKData](docs/Model/DEKData.md)
 - [EmailAuditLogs](docs/Model/EmailAuditLogs.md)
 - [FeeRateCollections](docs/Model/FeeRateCollections.md)
 - [FeeRates](docs/Model/FeeRates.md)
 - [FeesDocuments](docs/Model/FeesDocuments.md)
 - [FeesRuleDatas](docs/Model/FeesRuleDatas.md)
 - [FraudDetectionLogs](docs/Model/FraudDetectionLogs.md)
 - [FundingCollectDocumentDetails](docs/Model/FundingCollectDocumentDetails.md)
 - [FundingPayDocumentDetails](docs/Model/FundingPayDocumentDetails.md)
 - [FundingRuleDataScpProviderSetting](docs/Model/FundingRuleDataScpProviderSetting.md)
 - [GetInstallmentsPlanExtendedResponse](docs/Model/GetInstallmentsPlanExtendedResponse.md)
 - [InitiateInstallmentsPlanResponse](docs/Model/InitiateInstallmentsPlanResponse.md)
 - [InstallmentPlanEventSubscriberRecordSendLogs](docs/Model/InstallmentPlanEventSubscriberRecordSendLogs.md)
 - [InstallmentPlanEventSubscriberRecords](docs/Model/InstallmentPlanEventSubscriberRecords.md)
 - [InstallmentPlanEvents](docs/Model/InstallmentPlanEvents.md)
 - [InstallmentPlanEventsSubscriptionDatas](docs/Model/InstallmentPlanEventsSubscriptionDatas.md)
 - [InstallmentPlanSetupContexts](docs/Model/InstallmentPlanSetupContexts.md)
 - [InstallmentPlanStatusLogEntries](docs/Model/InstallmentPlanStatusLogEntries.md)
 - [InstallmentPlanTerminalDatas](docs/Model/InstallmentPlanTerminalDatas.md)
 - [InstallmentPlans](docs/Model/InstallmentPlans.md)
 - [Installments](docs/Model/Installments.md)
 - [Keks](docs/Model/Keks.md)
 - [MerchantRef](docs/Model/MerchantRef.md)
 - [Merchants](docs/Model/Merchants.md)
 - [ParameterGroups](docs/Model/ParameterGroups.md)
 - [Parameters](docs/Model/Parameters.md)
 - [PayDocuments](docs/Model/PayDocuments.md)
 - [PaymentFormTPABTestingDefinition](docs/Model/PaymentFormTPABTestingDefinition.md)
 - [PaymentGatewayTransactionAsyncLogs](docs/Model/PaymentGatewayTransactionAsyncLogs.md)
 - [PaymentGatewayTransactionLogs](docs/Model/PaymentGatewayTransactionLogs.md)
 - [PaymentWizardDataResponse](docs/Model/PaymentWizardDataResponse.md)
 - [PisSessions](docs/Model/PisSessions.md)
 - [ProcessorAuthenticationParameters](docs/Model/ProcessorAuthenticationParameters.md)
 - [Processors](docs/Model/Processors.md)
 - [ReAuthorizations](docs/Model/ReAuthorizations.md)
 - [ReconciliationReportItems](docs/Model/ReconciliationReportItems.md)
 - [ReconciliationReports](docs/Model/ReconciliationReports.md)
 - [RefundInstallmentPlanResponse](docs/Model/RefundInstallmentPlanResponse.md)
 - [RefundLogEntries](docs/Model/RefundLogEntries.md)
 - [Roles](docs/Model/Roles.md)
 - [SalesAssociates](docs/Model/SalesAssociates.md)
 - [ScpProviders](docs/Model/ScpProviders.md)
 - [SplititJobDefinitions](docs/Model/SplititJobDefinitions.md)
 - [StateLimitRuleDatas](docs/Model/StateLimitRuleDatas.md)
 - [TerminalGatewayDatas](docs/Model/TerminalGatewayDatas.md)
 - [TerminalKvps](docs/Model/TerminalKvps.md)
 - [Terminals](docs/Model/Terminals.md)
 - [Tokens](docs/Model/Tokens.md)
 - [TouchPointColorValues](docs/Model/TouchPointColorValues.md)
 - [TouchPoints](docs/Model/TouchPoints.md)
 - [TransferDocumentDetails](docs/Model/TransferDocumentDetails.md)
 - [TransferDocuments](docs/Model/TransferDocuments.md)
 - [UpdateInstallmentPlanRequest](docs/Model/UpdateInstallmentPlanRequest.md)
 - [UpdateInstallmentsPlanResponse](docs/Model/UpdateInstallmentsPlanResponse.md)
 - [User2](docs/Model/User2.md)
 - [UserJobSubscriptions](docs/Model/UserJobSubscriptions.md)
 - [UserPasswordHistory](docs/Model/UserPasswordHistory.md)
 - [VersionedTouchPoints](docs/Model/VersionedTouchPoints.md)
 - [ZipAddressDetails](docs/Model/ZipAddressDetails.md)
 - [ApiUserPasswordHistories](docs/Model/ApiUserPasswordHistories.md)
 - [ApiUsers](docs/Model/ApiUsers.md)
 - [ApplicativeUser](docs/Model/ApplicativeUser.md)
 - [ApplicativeUserPasswordHistory](docs/Model/ApplicativeUserPasswordHistory.md)
 - [ExtendedCurrency](docs/Model/ExtendedCurrency.md)
 - [InstallmentPlanAuditLogs](docs/Model/InstallmentPlanAuditLogs.md)
 - [PisMemberPasswordHistories](docs/Model/PisMemberPasswordHistories.md)
 - [PisMembers](docs/Model/PisMembers.md)
 - [PisUserPasswordHistories](docs/Model/PisUserPasswordHistories.md)
 - [UserWithActionItem](docs/Model/UserWithActionItem.md)
 - [PisUsers](docs/Model/PisUsers.md)


## Author

[Splitit](https://www.splitit.com/developers/integrations/hosted-solution/)
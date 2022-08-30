<?php

namespace SplititSdkClient;

use SplititSdkClient\Configuration;
use SplititSdkClient\Api\LoginApi;
use SplititSdkClient\Api\InstallmentPlanApi;
use SplititSdkClient\Model\LoginRequest;
use SplititSdkClient\Model\PublicTokenRequest;
use SplititSdkClient\Model\MoneyWithCurrencyCode;
use SplititSdkClient\Model\VerifyPaymentRequest;
use SplititSdkClient\Model\PlanData;
use SplititSdkClient\Model\ConsumerData;
use SplititSdkClient\Model\PaymentWizardData;
use SplititSdkClient\Model\RedirectUrls;
use SplititSdkClient\Model\AddressData;
use SplititSdkClient\Model\CardData;
use SplititSdkClient\Model\InitiateInstallmentPlanRequest;

/**
 * Configuration Class Doc Comment
 * PHP version 5
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Splitit
 */
class FlexFields
{
    protected $configuration;

    protected $api;
    protected $request;

    public function __construct(
        Configuration $configuration
    ) {
        $this->configuration = $configuration;
        $this->request = new InitiateInstallmentPlanRequest();
        $this->request->setPlanData(new PlanData());
    }

    public static function authenticate(Configuration $configuration, string $username, string $password, string $apiKey = null)
    {
        if ($apiKey !== null){
            $configuration->setApiKey($apiKey);
        }

        $ff = new FlexFields($configuration);
        $sessionId = $ff->getSessionId($username, $password);
        $ff->api = new InstallmentPlanApi($configuration, $sessionId);
        return $ff;
    }

    public function addCulture(string $culture)
    {
        $this->api->setCulture($culture);
        return $this;
    }

    public function addInstallments($installmentOptions, $defaultNumInstallments)
    {
        $this->request->getPlanData()->setNumberOfInstallments($defaultNumInstallments);

        if (is_null($this->request->getPaymentWizardData()))
        {
            $this->request->setPaymentWizardData(new PaymentWizardData());
        }

        $this->request->getPaymentWizardData()->setRequestedNumberOfInstallments(implode(",", $installmentOptions));
        return $this;
    }

    public function addBillingInformation(AddressData $billingAddress, ConsumerData $consumerData)
    {
        $this->request->setBillingAddress($billingAddress);
        $this->request->setConsumerData($consumerData);
        return $this;
    }

    public function add3DSecure(RedirectUrls $redirectUrls)
    {
        $this->request->getPlanData()->setAttempt3DSecure(true);
        $this->request->setRedirectUrls($redirectUrls);
        return $this;
    }

    public function addCaptureSettings(
        $autoCapture = false, 
        $firstInstallmentAmount = null,
        string $currencyCode = null,
        $firstChargeDate = null)
    {
        $this->request->getPlanData()->setAutoCapture($autoCapture);
        
        if ($firstInstallmentAmount != null){
            $this->request->getPlanData()->setFirstInstallmentAmount(
                new MoneyWithCurrencyCode(array("value" => $firstInstallmentAmount, "currency_code" => $currencyCode))
            );
        }
        
        $this->request->getPlanData()->setFirstChargeDate($firstChargeDate);
        return $this;
    }

    public function getPublicToken($amount, string $currencyCode)
    {
        $this->request->getPlanData()->setAmount(new MoneyWithCurrencyCode(array("value" => $amount, "currency_code" => $currencyCode)));
        $initResponse = $this->api->installmentPlanInitiate($this->request);
        return $initResponse->getPublicToken();
    }

    public function verifyPayment(string $planNumber, $orderAmount)
    {
        $verifyPaymentRequest = new VerifyPaymentRequest(array("installment_plan_number" => $planNumber));
        $verifyPaymentResponse = $this->api->installmentPlanVerifyPayment($verifyPaymentRequest);

        if ($verifyPaymentResponse->getIsPaid() && $verifyPaymentResponse->getOriginalAmountPaid() == $orderAmount)
        {
            return true;
        }

        return false;
    }

    public function getSessionId(string $username, string $password)
    {
        $loginApi = new LoginApi($this->configuration);
        $request = new LoginRequest();
        $request->setUserName($username);
        $request->setPassword($password);
        $loginResponse = $loginApi->loginPost($request);
        
        return $loginResponse->getSessionId();
    }   
}
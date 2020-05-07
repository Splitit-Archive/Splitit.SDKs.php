<?php

namespace SplititSdkClient;

use SplititSdkClient\Configuration;
use SplititSdkClient\Api\LoginApi;
use SplititSdkClient\Api\InstallmentPlanApi;
use SplititSdkClient\Model\LoginRequest;
use SplititSdkClient\Model\PublicTokenRequest;
use SplititSdkClient\Model\MoneyWithCurrencyCode;
use SplititSdkClient\Model\VerifyPaymentRequest;

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
    protected $sessionId;

    public function __construct(
        Configuration $configuration
    ) {
        $this->configuration = $configuration;
    }

    public static function authenticate(Configuration $configuration, string $username, string $password, string $apiKey = null)
    {
        if ($apiKey !== null){
            $configuration->setApiKey($apiKey);
        }

        $ff = new FlexFields($configuration);
        $ff->sessionId = $ff->getSessionId($username, $password);
        return $ff;
    }

    public function getPublicToken($amount, string $currencyCode, string $culture = null)
    {
        $installmentPlanApi = new InstallmentPlanApi($this->configuration, $this->sessionId);

        if ($culture !== null)
        {
            $installmentPlanApi->setCulture(culture);
        }

        $claimTokenRequest = new PublicTokenRequest();
        $claimTokenRequest->setAmount(new MoneyWithCurrencyCode(array("value" => $amount, "currency_code" => $currencyCode)));

        $claimTokenResponse = $installmentPlanApi->installmentPlanCreatePublicToken($claimTokenRequest);

        return $claimTokenResponse->getPublicToken();
    }

    public function verifyPayment(string $planNumber, $orderAmount)
    {
        $installmentPlanApi = new InstallmentPlanApi($this->configuration, $this->sessionId);

        $verifyPaymentRequest = new VerifyPaymentRequest(array("installment_plan_number" => $planNumber));
        $verifyPaymentResponse = $installmentPlanApi->installmentPlanVerifyPayment($verifyPaymentRequest);

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
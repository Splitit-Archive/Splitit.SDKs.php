<?php
/**
 * PaymentMethods
 *
 * PHP version 5
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * splitit-web-api-public-sdk
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.14
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SplititSdkClient\Model;
use \SplititSdkClient\ObjectSerializer;

/**
 * PaymentMethods Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentMethods
{
    /**
     * Possible values of this enum
     */
    const APPLE_PAY = 'ApplePay';
    const GOOGLE_PAY = 'GooglePay';
    const CREDIT_CARD = 'CreditCard';
    const PAYSAFE_ISSUED_CARD_ID = 'PaysafeIssuedCardID';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APPLE_PAY,
            self::GOOGLE_PAY,
            self::CREDIT_CARD,
            self::PAYSAFE_ISSUED_CARD_ID,
        ];
    }
}


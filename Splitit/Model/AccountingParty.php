<?php
/**
 * AccountingParty
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
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SplititSdkClient\Model;
use \SplititSdkClient\ObjectSerializer;

/**
 * AccountingParty Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountingParty
{
    /**
     * Possible values of this enum
     */
    const SCP = 'Scp';
    const AGENT = 'Agent';
    const MERCHANT = 'Merchant';
    const SPLITIT_USA = 'SplititUsa';
    const SPLITIT_CAPITAL = 'SplititCapital';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SCP,
            self::AGENT,
            self::MERCHANT,
            self::SPLITIT_USA,
            self::SPLITIT_CAPITAL,
        ];
    }
}



<?php
/**
 * RefundUnderCancelation
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
 * RefundUnderCancelation Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RefundUnderCancelation
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const NO_REFUNDS = 'NoRefunds';
    const ONLY_IF_A_FULL_REFUND_IS_POSSIBLE = 'OnlyIfAFullRefundIsPossible';
    const CHOOSE = 'Choose';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::NO_REFUNDS,
            self::ONLY_IF_A_FULL_REFUND_IS_POSSIBLE,
            self::CHOOSE,
        ];
    }
}



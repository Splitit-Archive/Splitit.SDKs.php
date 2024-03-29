<?php
/**
 * InstallmentPlanStatus
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
 * InstallmentPlanStatus Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InstallmentPlanStatus
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const PENDING_APPROVAL = 'PendingApproval';
    const PENDING_MERCHANT_SHIPMENT_NOTICE = 'PendingMerchantShipmentNotice';
    const IN_PROGRESS = 'InProgress';
    const DELETED = 'Deleted';
    const CLEARED = 'Cleared';
    const PENDING_PAYMENT_UPDATE = 'PendingPaymentUpdate';
    const CANCELED = 'Canceled';
    const DELAYED = 'Delayed';
    const INITIALIZING = 'Initializing';
    const ALL_STATUSES = 'AllStatuses';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::PENDING_APPROVAL,
            self::PENDING_MERCHANT_SHIPMENT_NOTICE,
            self::IN_PROGRESS,
            self::DELETED,
            self::CLEARED,
            self::PENDING_PAYMENT_UPDATE,
            self::CANCELED,
            self::DELAYED,
            self::INITIALIZING,
            self::ALL_STATUSES,
        ];
    }
}



<?php
/**
 * InstallmentPlanQueryCriteria
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

use \ArrayAccess;
use \SplititSdkClient\ObjectSerializer;

/**
 * InstallmentPlanQueryCriteria Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InstallmentPlanQueryCriteria implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InstallmentPlanQueryCriteria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant_id' => 'int',
        'currency_id' => 'int',
        'business_unit_ids' => 'int[]',
        'installment_plan_id' => 'int',
        'installment_plan_number' => 'string',
        'ref_order_number' => 'string',
        'installment_plan_amount' => 'float',
        'card_number' => 'string',
        'consumer_name' => 'string',
        'consumer_email' => 'string',
        'card_holder' => 'string',
        'pis_member_id' => 'int',
        'any_filter' => 'string',
        'eula' => 'bool',
        'are_payments_on_hold' => 'bool',
        'show_chargeback_plans' => 'bool',
        'is_in_auto_retry' => 'bool',
        'strategies' => '\SplititSdkClient\Model\PlanStrategy[]',
        'initiated_statuses' => '\SplititSdkClient\Model\InstallmentPlanInitiatedStatuses',
        'fraud_check_result' => '\SplititSdkClient\Model\FraudCheckResult',
        'installments_plan_statuses' => '\SplititSdkClient\Model\InstallmentPlanStatus[]',
        'test_modes' => '\SplititSdkClient\Model\TestModes[]',
        'delay_resolutions' => '\SplititSdkClient\Model\DelayResolution[]',
        'transaction_information' => '\SplititSdkClient\Model\TransactionInfo',
        'date_info' => '\SplititSdkClient\Model\InstallmentPlanDateInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant_id' => 'int64',
        'currency_id' => 'int64',
        'business_unit_ids' => 'int64',
        'installment_plan_id' => 'int64',
        'installment_plan_number' => null,
        'ref_order_number' => null,
        'installment_plan_amount' => 'decimal',
        'card_number' => null,
        'consumer_name' => null,
        'consumer_email' => null,
        'card_holder' => null,
        'pis_member_id' => 'int64',
        'any_filter' => null,
        'eula' => null,
        'are_payments_on_hold' => null,
        'show_chargeback_plans' => null,
        'is_in_auto_retry' => null,
        'strategies' => null,
        'initiated_statuses' => null,
        'fraud_check_result' => null,
        'installments_plan_statuses' => null,
        'test_modes' => null,
        'delay_resolutions' => null,
        'transaction_information' => null,
        'date_info' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'merchant_id' => 'MerchantId',
        'currency_id' => 'CurrencyId',
        'business_unit_ids' => 'BusinessUnitIds',
        'installment_plan_id' => 'InstallmentPlanId',
        'installment_plan_number' => 'InstallmentPlanNumber',
        'ref_order_number' => 'RefOrderNumber',
        'installment_plan_amount' => 'InstallmentPlanAmount',
        'card_number' => 'CardNumber',
        'consumer_name' => 'ConsumerName',
        'consumer_email' => 'ConsumerEmail',
        'card_holder' => 'CardHolder',
        'pis_member_id' => 'PisMemberId',
        'any_filter' => 'AnyFilter',
        'eula' => 'Eula',
        'are_payments_on_hold' => 'ArePaymentsOnHold',
        'show_chargeback_plans' => 'ShowChargebackPlans',
        'is_in_auto_retry' => 'IsInAutoRetry',
        'strategies' => 'Strategies',
        'initiated_statuses' => 'InitiatedStatuses',
        'fraud_check_result' => 'FraudCheckResult',
        'installments_plan_statuses' => 'InstallmentsPlanStatuses',
        'test_modes' => 'TestModes',
        'delay_resolutions' => 'DelayResolutions',
        'transaction_information' => 'TransactionInformation',
        'date_info' => 'DateInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_id' => 'setMerchantId',
        'currency_id' => 'setCurrencyId',
        'business_unit_ids' => 'setBusinessUnitIds',
        'installment_plan_id' => 'setInstallmentPlanId',
        'installment_plan_number' => 'setInstallmentPlanNumber',
        'ref_order_number' => 'setRefOrderNumber',
        'installment_plan_amount' => 'setInstallmentPlanAmount',
        'card_number' => 'setCardNumber',
        'consumer_name' => 'setConsumerName',
        'consumer_email' => 'setConsumerEmail',
        'card_holder' => 'setCardHolder',
        'pis_member_id' => 'setPisMemberId',
        'any_filter' => 'setAnyFilter',
        'eula' => 'setEula',
        'are_payments_on_hold' => 'setArePaymentsOnHold',
        'show_chargeback_plans' => 'setShowChargebackPlans',
        'is_in_auto_retry' => 'setIsInAutoRetry',
        'strategies' => 'setStrategies',
        'initiated_statuses' => 'setInitiatedStatuses',
        'fraud_check_result' => 'setFraudCheckResult',
        'installments_plan_statuses' => 'setInstallmentsPlanStatuses',
        'test_modes' => 'setTestModes',
        'delay_resolutions' => 'setDelayResolutions',
        'transaction_information' => 'setTransactionInformation',
        'date_info' => 'setDateInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_id' => 'getMerchantId',
        'currency_id' => 'getCurrencyId',
        'business_unit_ids' => 'getBusinessUnitIds',
        'installment_plan_id' => 'getInstallmentPlanId',
        'installment_plan_number' => 'getInstallmentPlanNumber',
        'ref_order_number' => 'getRefOrderNumber',
        'installment_plan_amount' => 'getInstallmentPlanAmount',
        'card_number' => 'getCardNumber',
        'consumer_name' => 'getConsumerName',
        'consumer_email' => 'getConsumerEmail',
        'card_holder' => 'getCardHolder',
        'pis_member_id' => 'getPisMemberId',
        'any_filter' => 'getAnyFilter',
        'eula' => 'getEula',
        'are_payments_on_hold' => 'getArePaymentsOnHold',
        'show_chargeback_plans' => 'getShowChargebackPlans',
        'is_in_auto_retry' => 'getIsInAutoRetry',
        'strategies' => 'getStrategies',
        'initiated_statuses' => 'getInitiatedStatuses',
        'fraud_check_result' => 'getFraudCheckResult',
        'installments_plan_statuses' => 'getInstallmentsPlanStatuses',
        'test_modes' => 'getTestModes',
        'delay_resolutions' => 'getDelayResolutions',
        'transaction_information' => 'getTransactionInformation',
        'date_info' => 'getDateInfo'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['business_unit_ids'] = isset($data['business_unit_ids']) ? $data['business_unit_ids'] : null;
        $this->container['installment_plan_id'] = isset($data['installment_plan_id']) ? $data['installment_plan_id'] : null;
        $this->container['installment_plan_number'] = isset($data['installment_plan_number']) ? $data['installment_plan_number'] : null;
        $this->container['ref_order_number'] = isset($data['ref_order_number']) ? $data['ref_order_number'] : null;
        $this->container['installment_plan_amount'] = isset($data['installment_plan_amount']) ? $data['installment_plan_amount'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['consumer_name'] = isset($data['consumer_name']) ? $data['consumer_name'] : null;
        $this->container['consumer_email'] = isset($data['consumer_email']) ? $data['consumer_email'] : null;
        $this->container['card_holder'] = isset($data['card_holder']) ? $data['card_holder'] : null;
        $this->container['pis_member_id'] = isset($data['pis_member_id']) ? $data['pis_member_id'] : null;
        $this->container['any_filter'] = isset($data['any_filter']) ? $data['any_filter'] : null;
        $this->container['eula'] = isset($data['eula']) ? $data['eula'] : null;
        $this->container['are_payments_on_hold'] = isset($data['are_payments_on_hold']) ? $data['are_payments_on_hold'] : null;
        $this->container['show_chargeback_plans'] = isset($data['show_chargeback_plans']) ? $data['show_chargeback_plans'] : null;
        $this->container['is_in_auto_retry'] = isset($data['is_in_auto_retry']) ? $data['is_in_auto_retry'] : null;
        $this->container['strategies'] = isset($data['strategies']) ? $data['strategies'] : null;
        $this->container['initiated_statuses'] = isset($data['initiated_statuses']) ? $data['initiated_statuses'] : null;
        $this->container['fraud_check_result'] = isset($data['fraud_check_result']) ? $data['fraud_check_result'] : null;
        $this->container['installments_plan_statuses'] = isset($data['installments_plan_statuses']) ? $data['installments_plan_statuses'] : null;
        $this->container['test_modes'] = isset($data['test_modes']) ? $data['test_modes'] : null;
        $this->container['delay_resolutions'] = isset($data['delay_resolutions']) ? $data['delay_resolutions'] : null;
        $this->container['transaction_information'] = isset($data['transaction_information']) ? $data['transaction_information'] : null;
        $this->container['date_info'] = isset($data['date_info']) ? $data['date_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['merchant_id'] === null) {
            $invalidProperties[] = "'merchant_id' can't be null";
        }
        if ($this->container['currency_id'] === null) {
            $invalidProperties[] = "'currency_id' can't be null";
        }
        if ($this->container['installment_plan_id'] === null) {
            $invalidProperties[] = "'installment_plan_id' can't be null";
        }
        if ($this->container['installment_plan_amount'] === null) {
            $invalidProperties[] = "'installment_plan_amount' can't be null";
        }
        if ($this->container['pis_member_id'] === null) {
            $invalidProperties[] = "'pis_member_id' can't be null";
        }
        if ($this->container['eula'] === null) {
            $invalidProperties[] = "'eula' can't be null";
        }
        if ($this->container['show_chargeback_plans'] === null) {
            $invalidProperties[] = "'show_chargeback_plans' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets merchant_id
     *
     * @return int
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param int $merchant_id merchant_id
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return int
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param int $currency_id currency_id
     *
     * @return $this
     */
    public function setCurrencyId($currency_id)
    {
        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets business_unit_ids
     *
     * @return int[]
     */
    public function getBusinessUnitIds()
    {
        return $this->container['business_unit_ids'];
    }

    /**
     * Sets business_unit_ids
     *
     * @param int[] $business_unit_ids business_unit_ids
     *
     * @return $this
     */
    public function setBusinessUnitIds($business_unit_ids)
    {
        $this->container['business_unit_ids'] = $business_unit_ids;

        return $this;
    }

    /**
     * Gets installment_plan_id
     *
     * @return int
     */
    public function getInstallmentPlanId()
    {
        return $this->container['installment_plan_id'];
    }

    /**
     * Sets installment_plan_id
     *
     * @param int $installment_plan_id installment_plan_id
     *
     * @return $this
     */
    public function setInstallmentPlanId($installment_plan_id)
    {
        $this->container['installment_plan_id'] = $installment_plan_id;

        return $this;
    }

    /**
     * Gets installment_plan_number
     *
     * @return string
     */
    public function getInstallmentPlanNumber()
    {
        return $this->container['installment_plan_number'];
    }

    /**
     * Sets installment_plan_number
     *
     * @param string $installment_plan_number installment_plan_number
     *
     * @return $this
     */
    public function setInstallmentPlanNumber($installment_plan_number)
    {
        $this->container['installment_plan_number'] = $installment_plan_number;

        return $this;
    }

    /**
     * Gets ref_order_number
     *
     * @return string
     */
    public function getRefOrderNumber()
    {
        return $this->container['ref_order_number'];
    }

    /**
     * Sets ref_order_number
     *
     * @param string $ref_order_number ref_order_number
     *
     * @return $this
     */
    public function setRefOrderNumber($ref_order_number)
    {
        $this->container['ref_order_number'] = $ref_order_number;

        return $this;
    }

    /**
     * Gets installment_plan_amount
     *
     * @return float
     */
    public function getInstallmentPlanAmount()
    {
        return $this->container['installment_plan_amount'];
    }

    /**
     * Sets installment_plan_amount
     *
     * @param float $installment_plan_amount installment_plan_amount
     *
     * @return $this
     */
    public function setInstallmentPlanAmount($installment_plan_amount)
    {
        $this->container['installment_plan_amount'] = $installment_plan_amount;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string $card_number card_number
     *
     * @return $this
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets consumer_name
     *
     * @return string
     */
    public function getConsumerName()
    {
        return $this->container['consumer_name'];
    }

    /**
     * Sets consumer_name
     *
     * @param string $consumer_name consumer_name
     *
     * @return $this
     */
    public function setConsumerName($consumer_name)
    {
        $this->container['consumer_name'] = $consumer_name;

        return $this;
    }

    /**
     * Gets consumer_email
     *
     * @return string
     */
    public function getConsumerEmail()
    {
        return $this->container['consumer_email'];
    }

    /**
     * Sets consumer_email
     *
     * @param string $consumer_email consumer_email
     *
     * @return $this
     */
    public function setConsumerEmail($consumer_email)
    {
        $this->container['consumer_email'] = $consumer_email;

        return $this;
    }

    /**
     * Gets card_holder
     *
     * @return string
     */
    public function getCardHolder()
    {
        return $this->container['card_holder'];
    }

    /**
     * Sets card_holder
     *
     * @param string $card_holder card_holder
     *
     * @return $this
     */
    public function setCardHolder($card_holder)
    {
        $this->container['card_holder'] = $card_holder;

        return $this;
    }

    /**
     * Gets pis_member_id
     *
     * @return int
     */
    public function getPisMemberId()
    {
        return $this->container['pis_member_id'];
    }

    /**
     * Sets pis_member_id
     *
     * @param int $pis_member_id pis_member_id
     *
     * @return $this
     */
    public function setPisMemberId($pis_member_id)
    {
        $this->container['pis_member_id'] = $pis_member_id;

        return $this;
    }

    /**
     * Gets any_filter
     *
     * @return string
     */
    public function getAnyFilter()
    {
        return $this->container['any_filter'];
    }

    /**
     * Sets any_filter
     *
     * @param string $any_filter any_filter
     *
     * @return $this
     */
    public function setAnyFilter($any_filter)
    {
        $this->container['any_filter'] = $any_filter;

        return $this;
    }

    /**
     * Gets eula
     *
     * @return bool
     */
    public function getEula()
    {
        return $this->container['eula'];
    }

    /**
     * Sets eula
     *
     * @param bool $eula eula
     *
     * @return $this
     */
    public function setEula($eula)
    {
        $this->container['eula'] = $eula;

        return $this;
    }

    /**
     * Gets are_payments_on_hold
     *
     * @return bool
     */
    public function getArePaymentsOnHold()
    {
        return $this->container['are_payments_on_hold'];
    }

    /**
     * Sets are_payments_on_hold
     *
     * @param bool $are_payments_on_hold are_payments_on_hold
     *
     * @return $this
     */
    public function setArePaymentsOnHold($are_payments_on_hold)
    {
        $this->container['are_payments_on_hold'] = $are_payments_on_hold;

        return $this;
    }

    /**
     * Gets show_chargeback_plans
     *
     * @return bool
     */
    public function getShowChargebackPlans()
    {
        return $this->container['show_chargeback_plans'];
    }

    /**
     * Sets show_chargeback_plans
     *
     * @param bool $show_chargeback_plans show_chargeback_plans
     *
     * @return $this
     */
    public function setShowChargebackPlans($show_chargeback_plans)
    {
        $this->container['show_chargeback_plans'] = $show_chargeback_plans;

        return $this;
    }

    /**
     * Gets is_in_auto_retry
     *
     * @return bool
     */
    public function getIsInAutoRetry()
    {
        return $this->container['is_in_auto_retry'];
    }

    /**
     * Sets is_in_auto_retry
     *
     * @param bool $is_in_auto_retry is_in_auto_retry
     *
     * @return $this
     */
    public function setIsInAutoRetry($is_in_auto_retry)
    {
        $this->container['is_in_auto_retry'] = $is_in_auto_retry;

        return $this;
    }

    /**
     * Gets strategies
     *
     * @return \SplititSdkClient\Model\PlanStrategy[]
     */
    public function getStrategies()
    {
        return $this->container['strategies'];
    }

    /**
     * Sets strategies
     *
     * @param \SplititSdkClient\Model\PlanStrategy[] $strategies strategies
     *
     * @return $this
     */
    public function setStrategies($strategies)
    {
        $this->container['strategies'] = $strategies;

        return $this;
    }

    /**
     * Gets initiated_statuses
     *
     * @return \SplititSdkClient\Model\InstallmentPlanInitiatedStatuses
     */
    public function getInitiatedStatuses()
    {
        return $this->container['initiated_statuses'];
    }

    /**
     * Sets initiated_statuses
     *
     * @param \SplititSdkClient\Model\InstallmentPlanInitiatedStatuses $initiated_statuses initiated_statuses
     *
     * @return $this
     */
    public function setInitiatedStatuses($initiated_statuses)
    {
        $this->container['initiated_statuses'] = $initiated_statuses;

        return $this;
    }

    /**
     * Gets fraud_check_result
     *
     * @return \SplititSdkClient\Model\FraudCheckResult
     */
    public function getFraudCheckResult()
    {
        return $this->container['fraud_check_result'];
    }

    /**
     * Sets fraud_check_result
     *
     * @param \SplititSdkClient\Model\FraudCheckResult $fraud_check_result fraud_check_result
     *
     * @return $this
     */
    public function setFraudCheckResult($fraud_check_result)
    {
        $this->container['fraud_check_result'] = $fraud_check_result;

        return $this;
    }

    /**
     * Gets installments_plan_statuses
     *
     * @return \SplititSdkClient\Model\InstallmentPlanStatus[]
     */
    public function getInstallmentsPlanStatuses()
    {
        return $this->container['installments_plan_statuses'];
    }

    /**
     * Sets installments_plan_statuses
     *
     * @param \SplititSdkClient\Model\InstallmentPlanStatus[] $installments_plan_statuses installments_plan_statuses
     *
     * @return $this
     */
    public function setInstallmentsPlanStatuses($installments_plan_statuses)
    {
        $this->container['installments_plan_statuses'] = $installments_plan_statuses;

        return $this;
    }

    /**
     * Gets test_modes
     *
     * @return \SplititSdkClient\Model\TestModes[]
     */
    public function getTestModes()
    {
        return $this->container['test_modes'];
    }

    /**
     * Sets test_modes
     *
     * @param \SplititSdkClient\Model\TestModes[] $test_modes test_modes
     *
     * @return $this
     */
    public function setTestModes($test_modes)
    {
        $this->container['test_modes'] = $test_modes;

        return $this;
    }

    /**
     * Gets delay_resolutions
     *
     * @return \SplititSdkClient\Model\DelayResolution[]
     */
    public function getDelayResolutions()
    {
        return $this->container['delay_resolutions'];
    }

    /**
     * Sets delay_resolutions
     *
     * @param \SplititSdkClient\Model\DelayResolution[] $delay_resolutions delay_resolutions
     *
     * @return $this
     */
    public function setDelayResolutions($delay_resolutions)
    {
        $this->container['delay_resolutions'] = $delay_resolutions;

        return $this;
    }

    /**
     * Gets transaction_information
     *
     * @return \SplititSdkClient\Model\TransactionInfo
     */
    public function getTransactionInformation()
    {
        return $this->container['transaction_information'];
    }

    /**
     * Sets transaction_information
     *
     * @param \SplititSdkClient\Model\TransactionInfo $transaction_information transaction_information
     *
     * @return $this
     */
    public function setTransactionInformation($transaction_information)
    {
        $this->container['transaction_information'] = $transaction_information;

        return $this;
    }

    /**
     * Gets date_info
     *
     * @return \SplititSdkClient\Model\InstallmentPlanDateInfo
     */
    public function getDateInfo()
    {
        return $this->container['date_info'];
    }

    /**
     * Sets date_info
     *
     * @param \SplititSdkClient\Model\InstallmentPlanDateInfo $date_info date_info
     *
     * @return $this
     */
    public function setDateInfo($date_info)
    {
        $this->container['date_info'] = $date_info;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



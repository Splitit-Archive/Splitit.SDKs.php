<?php
/**
 * CancelInstallmentPlanRequest
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

use \ArrayAccess;
use \SplititSdkClient\ObjectSerializer;

/**
 * CancelInstallmentPlanRequest Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CancelInstallmentPlanRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CancelInstallmentPlanRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'installment_plan_number' => 'string',
        'refund_under_cancelation' => '\SplititSdkClient\Model\RefundUnderCancelation',
        'cancelation_reason' => '\SplititSdkClient\Model\InstallmentPlanCancelationReason',
        'is_executed_unattended' => 'bool',
        'partial_response_mapping' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'installment_plan_number' => null,
        'refund_under_cancelation' => null,
        'cancelation_reason' => null,
        'is_executed_unattended' => null,
        'partial_response_mapping' => null
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
        'installment_plan_number' => 'InstallmentPlanNumber',
        'refund_under_cancelation' => 'RefundUnderCancelation',
        'cancelation_reason' => 'CancelationReason',
        'is_executed_unattended' => 'IsExecutedUnattended',
        'partial_response_mapping' => 'PartialResponseMapping'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'installment_plan_number' => 'setInstallmentPlanNumber',
        'refund_under_cancelation' => 'setRefundUnderCancelation',
        'cancelation_reason' => 'setCancelationReason',
        'is_executed_unattended' => 'setIsExecutedUnattended',
        'partial_response_mapping' => 'setPartialResponseMapping'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'installment_plan_number' => 'getInstallmentPlanNumber',
        'refund_under_cancelation' => 'getRefundUnderCancelation',
        'cancelation_reason' => 'getCancelationReason',
        'is_executed_unattended' => 'getIsExecutedUnattended',
        'partial_response_mapping' => 'getPartialResponseMapping'
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
        $this->container['installment_plan_number'] = isset($data['installment_plan_number']) ? $data['installment_plan_number'] : null;
        $this->container['refund_under_cancelation'] = isset($data['refund_under_cancelation']) ? $data['refund_under_cancelation'] : null;
        $this->container['cancelation_reason'] = isset($data['cancelation_reason']) ? $data['cancelation_reason'] : null;
        $this->container['is_executed_unattended'] = isset($data['is_executed_unattended']) ? $data['is_executed_unattended'] : null;
        $this->container['partial_response_mapping'] = isset($data['partial_response_mapping']) ? $data['partial_response_mapping'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['refund_under_cancelation'] === null) {
            $invalidProperties[] = "'refund_under_cancelation' can't be null";
        }
        if ($this->container['cancelation_reason'] === null) {
            $invalidProperties[] = "'cancelation_reason' can't be null";
        }
        if ($this->container['is_executed_unattended'] === null) {
            $invalidProperties[] = "'is_executed_unattended' can't be null";
        }
        if ($this->container['partial_response_mapping'] === null) {
            $invalidProperties[] = "'partial_response_mapping' can't be null";
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
     * Gets refund_under_cancelation
     *
     * @return \SplititSdkClient\Model\RefundUnderCancelation
     */
    public function getRefundUnderCancelation()
    {
        return $this->container['refund_under_cancelation'];
    }

    /**
     * Sets refund_under_cancelation
     *
     * @param \SplititSdkClient\Model\RefundUnderCancelation $refund_under_cancelation refund_under_cancelation
     *
     * @return $this
     */
    public function setRefundUnderCancelation($refund_under_cancelation)
    {
        $this->container['refund_under_cancelation'] = $refund_under_cancelation;

        return $this;
    }

    /**
     * Gets cancelation_reason
     *
     * @return \SplititSdkClient\Model\InstallmentPlanCancelationReason
     */
    public function getCancelationReason()
    {
        return $this->container['cancelation_reason'];
    }

    /**
     * Sets cancelation_reason
     *
     * @param \SplititSdkClient\Model\InstallmentPlanCancelationReason $cancelation_reason cancelation_reason
     *
     * @return $this
     */
    public function setCancelationReason($cancelation_reason)
    {
        $this->container['cancelation_reason'] = $cancelation_reason;

        return $this;
    }

    /**
     * Gets is_executed_unattended
     *
     * @return bool
     */
    public function getIsExecutedUnattended()
    {
        return $this->container['is_executed_unattended'];
    }

    /**
     * Sets is_executed_unattended
     *
     * @param bool $is_executed_unattended is_executed_unattended
     *
     * @return $this
     */
    public function setIsExecutedUnattended($is_executed_unattended)
    {
        $this->container['is_executed_unattended'] = $is_executed_unattended;

        return $this;
    }

    /**
     * Gets partial_response_mapping
     *
     * @return bool
     */
    public function getPartialResponseMapping()
    {
        return $this->container['partial_response_mapping'];
    }

    /**
     * Sets partial_response_mapping
     *
     * @param bool $partial_response_mapping partial_response_mapping
     *
     * @return $this
     */
    public function setPartialResponseMapping($partial_response_mapping)
    {
        $this->container['partial_response_mapping'] = $partial_response_mapping;

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



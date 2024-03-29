<?php
/**
 * PlanData
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
 * PlanData Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlanData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PlanData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number_of_installments' => 'int',
        'amount' => '\SplititSdkClient\Model\MoneyWithCurrencyCode',
        'first_installment_amount' => '\SplititSdkClient\Model\MoneyWithCurrencyCode',
        'ref_order_number' => 'string',
        'test_mode' => '\SplititSdkClient\Model\TestModes',
        'purchase_method' => '\SplititSdkClient\Model\PurchaseMethod',
        'strategy' => '\SplititSdkClient\Model\PlanStrategy',
        'extended_params' => 'map[string,string]',
        'first_charge_date' => '\DateTime',
        'auto_capture' => 'bool',
        'is_funded' => 'bool',
        'attempt3_d_secure' => 'bool',
        'external_provider_supported' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'number_of_installments' => 'int32',
        'amount' => null,
        'first_installment_amount' => null,
        'ref_order_number' => null,
        'test_mode' => null,
        'purchase_method' => null,
        'strategy' => null,
        'extended_params' => null,
        'first_charge_date' => 'date-time',
        'auto_capture' => null,
        'is_funded' => null,
        'attempt3_d_secure' => null,
        'external_provider_supported' => null
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
        'number_of_installments' => 'NumberOfInstallments',
        'amount' => 'Amount',
        'first_installment_amount' => 'FirstInstallmentAmount',
        'ref_order_number' => 'RefOrderNumber',
        'test_mode' => 'TestMode',
        'purchase_method' => 'PurchaseMethod',
        'strategy' => 'Strategy',
        'extended_params' => 'ExtendedParams',
        'first_charge_date' => 'FirstChargeDate',
        'auto_capture' => 'AutoCapture',
        'is_funded' => 'IsFunded',
        'attempt3_d_secure' => 'Attempt3DSecure',
        'external_provider_supported' => 'ExternalProviderSupported'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number_of_installments' => 'setNumberOfInstallments',
        'amount' => 'setAmount',
        'first_installment_amount' => 'setFirstInstallmentAmount',
        'ref_order_number' => 'setRefOrderNumber',
        'test_mode' => 'setTestMode',
        'purchase_method' => 'setPurchaseMethod',
        'strategy' => 'setStrategy',
        'extended_params' => 'setExtendedParams',
        'first_charge_date' => 'setFirstChargeDate',
        'auto_capture' => 'setAutoCapture',
        'is_funded' => 'setIsFunded',
        'attempt3_d_secure' => 'setAttempt3DSecure',
        'external_provider_supported' => 'setExternalProviderSupported'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number_of_installments' => 'getNumberOfInstallments',
        'amount' => 'getAmount',
        'first_installment_amount' => 'getFirstInstallmentAmount',
        'ref_order_number' => 'getRefOrderNumber',
        'test_mode' => 'getTestMode',
        'purchase_method' => 'getPurchaseMethod',
        'strategy' => 'getStrategy',
        'extended_params' => 'getExtendedParams',
        'first_charge_date' => 'getFirstChargeDate',
        'auto_capture' => 'getAutoCapture',
        'is_funded' => 'getIsFunded',
        'attempt3_d_secure' => 'getAttempt3DSecure',
        'external_provider_supported' => 'getExternalProviderSupported'
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
        $this->container['number_of_installments'] = isset($data['number_of_installments']) ? $data['number_of_installments'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['first_installment_amount'] = isset($data['first_installment_amount']) ? $data['first_installment_amount'] : null;
        $this->container['ref_order_number'] = isset($data['ref_order_number']) ? $data['ref_order_number'] : null;
        $this->container['test_mode'] = isset($data['test_mode']) ? $data['test_mode'] : null;
        $this->container['purchase_method'] = isset($data['purchase_method']) ? $data['purchase_method'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
        $this->container['extended_params'] = isset($data['extended_params']) ? $data['extended_params'] : null;
        $this->container['first_charge_date'] = isset($data['first_charge_date']) ? $data['first_charge_date'] : null;
        $this->container['auto_capture'] = isset($data['auto_capture']) ? $data['auto_capture'] : null;
        $this->container['is_funded'] = isset($data['is_funded']) ? $data['is_funded'] : null;
        $this->container['attempt3_d_secure'] = isset($data['attempt3_d_secure']) ? $data['attempt3_d_secure'] : null;
        $this->container['external_provider_supported'] = isset($data['external_provider_supported']) ? $data['external_provider_supported'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['external_provider_supported'] === null) {
            $invalidProperties[] = "'external_provider_supported' can't be null";
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
     * Gets number_of_installments
     *
     * @return int
     */
    public function getNumberOfInstallments()
    {
        return $this->container['number_of_installments'];
    }

    /**
     * Sets number_of_installments
     *
     * @param int $number_of_installments number_of_installments
     *
     * @return $this
     */
    public function setNumberOfInstallments($number_of_installments)
    {
        $this->container['number_of_installments'] = $number_of_installments;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \SplititSdkClient\Model\MoneyWithCurrencyCode
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \SplititSdkClient\Model\MoneyWithCurrencyCode $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets first_installment_amount
     *
     * @return \SplititSdkClient\Model\MoneyWithCurrencyCode
     */
    public function getFirstInstallmentAmount()
    {
        return $this->container['first_installment_amount'];
    }

    /**
     * Sets first_installment_amount
     *
     * @param \SplititSdkClient\Model\MoneyWithCurrencyCode $first_installment_amount first_installment_amount
     *
     * @return $this
     */
    public function setFirstInstallmentAmount($first_installment_amount)
    {
        $this->container['first_installment_amount'] = $first_installment_amount;

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
     * Gets test_mode
     *
     * @return \SplititSdkClient\Model\TestModes
     */
    public function getTestMode()
    {
        return $this->container['test_mode'];
    }

    /**
     * Sets test_mode
     *
     * @param \SplititSdkClient\Model\TestModes $test_mode test_mode
     *
     * @return $this
     */
    public function setTestMode($test_mode)
    {
        $this->container['test_mode'] = $test_mode;

        return $this;
    }

    /**
     * Gets purchase_method
     *
     * @return \SplititSdkClient\Model\PurchaseMethod
     */
    public function getPurchaseMethod()
    {
        return $this->container['purchase_method'];
    }

    /**
     * Sets purchase_method
     *
     * @param \SplititSdkClient\Model\PurchaseMethod $purchase_method purchase_method
     *
     * @return $this
     */
    public function setPurchaseMethod($purchase_method)
    {
        $this->container['purchase_method'] = $purchase_method;

        return $this;
    }

    /**
     * Gets strategy
     *
     * @return \SplititSdkClient\Model\PlanStrategy
     */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
     * Sets strategy
     *
     * @param \SplititSdkClient\Model\PlanStrategy $strategy strategy
     *
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;

        return $this;
    }

    /**
     * Gets extended_params
     *
     * @return map[string,string]
     */
    public function getExtendedParams()
    {
        return $this->container['extended_params'];
    }

    /**
     * Sets extended_params
     *
     * @param map[string,string] $extended_params extended_params
     *
     * @return $this
     */
    public function setExtendedParams($extended_params)
    {
        $this->container['extended_params'] = $extended_params;

        return $this;
    }

    /**
     * Gets first_charge_date
     *
     * @return \DateTime
     */
    public function getFirstChargeDate()
    {
        return $this->container['first_charge_date'];
    }

    /**
     * Sets first_charge_date
     *
     * @param \DateTime $first_charge_date first_charge_date
     *
     * @return $this
     */
    public function setFirstChargeDate($first_charge_date)
    {
        $this->container['first_charge_date'] = $first_charge_date;

        return $this;
    }

    /**
     * Gets auto_capture
     *
     * @return bool
     */
    public function getAutoCapture()
    {
        return $this->container['auto_capture'];
    }

    /**
     * Sets auto_capture
     *
     * @param bool $auto_capture auto_capture
     *
     * @return $this
     */
    public function setAutoCapture($auto_capture)
    {
        $this->container['auto_capture'] = $auto_capture;

        return $this;
    }

    /**
     * Gets is_funded
     *
     * @return bool
     */
    public function getIsFunded()
    {
        return $this->container['is_funded'];
    }

    /**
     * Sets is_funded
     *
     * @param bool $is_funded is_funded
     *
     * @return $this
     */
    public function setIsFunded($is_funded)
    {
        $this->container['is_funded'] = $is_funded;

        return $this;
    }

    /**
     * Gets attempt3_d_secure
     *
     * @return bool
     */
    public function getAttempt3DSecure()
    {
        return $this->container['attempt3_d_secure'];
    }

    /**
     * Sets attempt3_d_secure
     *
     * @param bool $attempt3_d_secure attempt3_d_secure
     *
     * @return $this
     */
    public function setAttempt3DSecure($attempt3_d_secure)
    {
        $this->container['attempt3_d_secure'] = $attempt3_d_secure;

        return $this;
    }

    /**
     * Gets external_provider_supported
     *
     * @return bool
     */
    public function getExternalProviderSupported()
    {
        return $this->container['external_provider_supported'];
    }

    /**
     * Sets external_provider_supported
     *
     * @param bool $external_provider_supported external_provider_supported
     *
     * @return $this
     */
    public function setExternalProviderSupported($external_provider_supported)
    {
        $this->container['external_provider_supported'] = $external_provider_supported;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


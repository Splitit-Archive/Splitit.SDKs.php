<?php
/**
 * FraudCheck
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
 * FraudCheck Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FraudCheck implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FraudCheck';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fraud_check_result' => '\SplititSdkClient\Model\ReferenceEntityBase',
        'provider_result_code' => 'string',
        'provider_result_desc' => 'string',
        'provider_reference_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fraud_check_result' => null,
        'provider_result_code' => null,
        'provider_result_desc' => null,
        'provider_reference_id' => null
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
        'fraud_check_result' => 'FraudCheckResult',
        'provider_result_code' => 'ProviderResultCode',
        'provider_result_desc' => 'ProviderResultDesc',
        'provider_reference_id' => 'ProviderReferenceId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fraud_check_result' => 'setFraudCheckResult',
        'provider_result_code' => 'setProviderResultCode',
        'provider_result_desc' => 'setProviderResultDesc',
        'provider_reference_id' => 'setProviderReferenceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fraud_check_result' => 'getFraudCheckResult',
        'provider_result_code' => 'getProviderResultCode',
        'provider_result_desc' => 'getProviderResultDesc',
        'provider_reference_id' => 'getProviderReferenceId'
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
        $this->container['fraud_check_result'] = isset($data['fraud_check_result']) ? $data['fraud_check_result'] : null;
        $this->container['provider_result_code'] = isset($data['provider_result_code']) ? $data['provider_result_code'] : null;
        $this->container['provider_result_desc'] = isset($data['provider_result_desc']) ? $data['provider_result_desc'] : null;
        $this->container['provider_reference_id'] = isset($data['provider_reference_id']) ? $data['provider_reference_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets fraud_check_result
     *
     * @return \SplititSdkClient\Model\ReferenceEntityBase
     */
    public function getFraudCheckResult()
    {
        return $this->container['fraud_check_result'];
    }

    /**
     * Sets fraud_check_result
     *
     * @param \SplititSdkClient\Model\ReferenceEntityBase $fraud_check_result fraud_check_result
     *
     * @return $this
     */
    public function setFraudCheckResult($fraud_check_result)
    {
        $this->container['fraud_check_result'] = $fraud_check_result;

        return $this;
    }

    /**
     * Gets provider_result_code
     *
     * @return string
     */
    public function getProviderResultCode()
    {
        return $this->container['provider_result_code'];
    }

    /**
     * Sets provider_result_code
     *
     * @param string $provider_result_code provider_result_code
     *
     * @return $this
     */
    public function setProviderResultCode($provider_result_code)
    {
        $this->container['provider_result_code'] = $provider_result_code;

        return $this;
    }

    /**
     * Gets provider_result_desc
     *
     * @return string
     */
    public function getProviderResultDesc()
    {
        return $this->container['provider_result_desc'];
    }

    /**
     * Sets provider_result_desc
     *
     * @param string $provider_result_desc provider_result_desc
     *
     * @return $this
     */
    public function setProviderResultDesc($provider_result_desc)
    {
        $this->container['provider_result_desc'] = $provider_result_desc;

        return $this;
    }

    /**
     * Gets provider_reference_id
     *
     * @return string
     */
    public function getProviderReferenceId()
    {
        return $this->container['provider_reference_id'];
    }

    /**
     * Sets provider_reference_id
     *
     * @param string $provider_reference_id provider_reference_id
     *
     * @return $this
     */
    public function setProviderReferenceId($provider_reference_id)
    {
        $this->container['provider_reference_id'] = $provider_reference_id;

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


<?php
/**
 * VersionedTouchPoints
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
 * VersionedTouchPoints Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VersionedTouchPoints implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VersionedTouchPoints';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'version' => 'string',
        'touch_point_id' => 'int',
        'sub_version' => 'string',
        'touch_point' => '\SplititSdkClient\Model\TouchPoints',
        'pis_sessions' => '\SplititSdkClient\Model\PisSessions[]',
        'installment_plan_audit_logs' => '\SplititSdkClient\Model\InstallmentPlanAuditLogs[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'version' => null,
        'touch_point_id' => 'int64',
        'sub_version' => null,
        'touch_point' => null,
        'pis_sessions' => null,
        'installment_plan_audit_logs' => null
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
        'id' => 'Id',
        'version' => 'Version',
        'touch_point_id' => 'TouchPointId',
        'sub_version' => 'SubVersion',
        'touch_point' => 'TouchPoint',
        'pis_sessions' => 'PisSessions',
        'installment_plan_audit_logs' => 'InstallmentPlanAuditLogs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'version' => 'setVersion',
        'touch_point_id' => 'setTouchPointId',
        'sub_version' => 'setSubVersion',
        'touch_point' => 'setTouchPoint',
        'pis_sessions' => 'setPisSessions',
        'installment_plan_audit_logs' => 'setInstallmentPlanAuditLogs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'version' => 'getVersion',
        'touch_point_id' => 'getTouchPointId',
        'sub_version' => 'getSubVersion',
        'touch_point' => 'getTouchPoint',
        'pis_sessions' => 'getPisSessions',
        'installment_plan_audit_logs' => 'getInstallmentPlanAuditLogs'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['touch_point_id'] = isset($data['touch_point_id']) ? $data['touch_point_id'] : null;
        $this->container['sub_version'] = isset($data['sub_version']) ? $data['sub_version'] : null;
        $this->container['touch_point'] = isset($data['touch_point']) ? $data['touch_point'] : null;
        $this->container['pis_sessions'] = isset($data['pis_sessions']) ? $data['pis_sessions'] : null;
        $this->container['installment_plan_audit_logs'] = isset($data['installment_plan_audit_logs']) ? $data['installment_plan_audit_logs'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['touch_point_id'] === null) {
            $invalidProperties[] = "'touch_point_id' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets touch_point_id
     *
     * @return int
     */
    public function getTouchPointId()
    {
        return $this->container['touch_point_id'];
    }

    /**
     * Sets touch_point_id
     *
     * @param int $touch_point_id touch_point_id
     *
     * @return $this
     */
    public function setTouchPointId($touch_point_id)
    {
        $this->container['touch_point_id'] = $touch_point_id;

        return $this;
    }

    /**
     * Gets sub_version
     *
     * @return string
     */
    public function getSubVersion()
    {
        return $this->container['sub_version'];
    }

    /**
     * Sets sub_version
     *
     * @param string $sub_version sub_version
     *
     * @return $this
     */
    public function setSubVersion($sub_version)
    {
        $this->container['sub_version'] = $sub_version;

        return $this;
    }

    /**
     * Gets touch_point
     *
     * @return \SplititSdkClient\Model\TouchPoints
     */
    public function getTouchPoint()
    {
        return $this->container['touch_point'];
    }

    /**
     * Sets touch_point
     *
     * @param \SplititSdkClient\Model\TouchPoints $touch_point touch_point
     *
     * @return $this
     */
    public function setTouchPoint($touch_point)
    {
        $this->container['touch_point'] = $touch_point;

        return $this;
    }

    /**
     * Gets pis_sessions
     *
     * @return \SplititSdkClient\Model\PisSessions[]
     */
    public function getPisSessions()
    {
        return $this->container['pis_sessions'];
    }

    /**
     * Sets pis_sessions
     *
     * @param \SplititSdkClient\Model\PisSessions[] $pis_sessions pis_sessions
     *
     * @return $this
     */
    public function setPisSessions($pis_sessions)
    {
        $this->container['pis_sessions'] = $pis_sessions;

        return $this;
    }

    /**
     * Gets installment_plan_audit_logs
     *
     * @return \SplititSdkClient\Model\InstallmentPlanAuditLogs[]
     */
    public function getInstallmentPlanAuditLogs()
    {
        return $this->container['installment_plan_audit_logs'];
    }

    /**
     * Sets installment_plan_audit_logs
     *
     * @param \SplititSdkClient\Model\InstallmentPlanAuditLogs[] $installment_plan_audit_logs installment_plan_audit_logs
     *
     * @return $this
     */
    public function setInstallmentPlanAuditLogs($installment_plan_audit_logs)
    {
        $this->container['installment_plan_audit_logs'] = $installment_plan_audit_logs;

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



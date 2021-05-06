<?php
/**
 * ApiUsers
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
 * ApiUsers Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiUsers implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApiUsers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'culture' => 'string',
        'user_full_name' => 'string',
        'phone_number' => 'string',
        'role' => '\SplititSdkClient\Model\Roles',
        'user_name' => 'string',
        'unique_id' => 'string',
        'login_attempt' => 'int',
        'max_invalid_login_attempts' => 'int',
        'status' => '\SplititSdkClient\Model\UserStatus',
        'is_locked' => 'bool',
        'email' => 'string',
        'culture_name' => 'string',
        'role_id' => 'int',
        'login_user_name' => 'string',
        'crm_id' => 'string',
        'merchant' => '\SplititSdkClient\Model\Merchants',
        'api_user_password_histories' => '\SplititSdkClient\Model\ApiUserPasswordHistories[]',
        'merchant_id' => 'int',
        'merchant_name' => 'string',
        'password' => '\SplititSdkClient\Model\IUserPasswordHistory'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'culture' => null,
        'user_full_name' => null,
        'phone_number' => null,
        'role' => null,
        'user_name' => null,
        'unique_id' => null,
        'login_attempt' => 'int32',
        'max_invalid_login_attempts' => 'int32',
        'status' => null,
        'is_locked' => null,
        'email' => null,
        'culture_name' => null,
        'role_id' => 'int64',
        'login_user_name' => null,
        'crm_id' => null,
        'merchant' => null,
        'api_user_password_histories' => null,
        'merchant_id' => 'int64',
        'merchant_name' => null,
        'password' => null
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
        'culture' => 'Culture',
        'user_full_name' => 'UserFullName',
        'phone_number' => 'PhoneNumber',
        'role' => 'Role',
        'user_name' => 'UserName',
        'unique_id' => 'UniqueId',
        'login_attempt' => 'LoginAttempt',
        'max_invalid_login_attempts' => 'MaxInvalidLoginAttempts',
        'status' => 'Status',
        'is_locked' => 'IsLocked',
        'email' => 'Email',
        'culture_name' => 'CultureName',
        'role_id' => 'RoleId',
        'login_user_name' => 'LoginUserName',
        'crm_id' => 'CrmId',
        'merchant' => 'Merchant',
        'api_user_password_histories' => 'ApiUserPasswordHistories',
        'merchant_id' => 'MerchantId',
        'merchant_name' => 'MerchantName',
        'password' => 'Password'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'culture' => 'setCulture',
        'user_full_name' => 'setUserFullName',
        'phone_number' => 'setPhoneNumber',
        'role' => 'setRole',
        'user_name' => 'setUserName',
        'unique_id' => 'setUniqueId',
        'login_attempt' => 'setLoginAttempt',
        'max_invalid_login_attempts' => 'setMaxInvalidLoginAttempts',
        'status' => 'setStatus',
        'is_locked' => 'setIsLocked',
        'email' => 'setEmail',
        'culture_name' => 'setCultureName',
        'role_id' => 'setRoleId',
        'login_user_name' => 'setLoginUserName',
        'crm_id' => 'setCrmId',
        'merchant' => 'setMerchant',
        'api_user_password_histories' => 'setApiUserPasswordHistories',
        'merchant_id' => 'setMerchantId',
        'merchant_name' => 'setMerchantName',
        'password' => 'setPassword'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'culture' => 'getCulture',
        'user_full_name' => 'getUserFullName',
        'phone_number' => 'getPhoneNumber',
        'role' => 'getRole',
        'user_name' => 'getUserName',
        'unique_id' => 'getUniqueId',
        'login_attempt' => 'getLoginAttempt',
        'max_invalid_login_attempts' => 'getMaxInvalidLoginAttempts',
        'status' => 'getStatus',
        'is_locked' => 'getIsLocked',
        'email' => 'getEmail',
        'culture_name' => 'getCultureName',
        'role_id' => 'getRoleId',
        'login_user_name' => 'getLoginUserName',
        'crm_id' => 'getCrmId',
        'merchant' => 'getMerchant',
        'api_user_password_histories' => 'getApiUserPasswordHistories',
        'merchant_id' => 'getMerchantId',
        'merchant_name' => 'getMerchantName',
        'password' => 'getPassword'
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
        $this->container['culture'] = isset($data['culture']) ? $data['culture'] : null;
        $this->container['user_full_name'] = isset($data['user_full_name']) ? $data['user_full_name'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['unique_id'] = isset($data['unique_id']) ? $data['unique_id'] : null;
        $this->container['login_attempt'] = isset($data['login_attempt']) ? $data['login_attempt'] : null;
        $this->container['max_invalid_login_attempts'] = isset($data['max_invalid_login_attempts']) ? $data['max_invalid_login_attempts'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['is_locked'] = isset($data['is_locked']) ? $data['is_locked'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['culture_name'] = isset($data['culture_name']) ? $data['culture_name'] : null;
        $this->container['role_id'] = isset($data['role_id']) ? $data['role_id'] : null;
        $this->container['login_user_name'] = isset($data['login_user_name']) ? $data['login_user_name'] : null;
        $this->container['crm_id'] = isset($data['crm_id']) ? $data['crm_id'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['api_user_password_histories'] = isset($data['api_user_password_histories']) ? $data['api_user_password_histories'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['merchant_name'] = isset($data['merchant_name']) ? $data['merchant_name'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
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
        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) > 150)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['user_name']) && (mb_strlen($this->container['user_name']) > 150)) {
            $invalidProperties[] = "invalid value for 'user_name', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['user_name']) && (mb_strlen($this->container['user_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'user_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['unique_id']) && (mb_strlen($this->container['unique_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'unique_id', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['unique_id']) && (mb_strlen($this->container['unique_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'unique_id', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['login_attempt'] === null) {
            $invalidProperties[] = "'login_attempt' can't be null";
        }
        if ($this->container['max_invalid_login_attempts'] === null) {
            $invalidProperties[] = "'max_invalid_login_attempts' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['is_locked'] === null) {
            $invalidProperties[] = "'is_locked' can't be null";
        }
        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 150)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 0)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['role_id'] === null) {
            $invalidProperties[] = "'role_id' can't be null";
        }
        if ($this->container['merchant_id'] === null) {
            $invalidProperties[] = "'merchant_id' can't be null";
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
     * Gets culture
     *
     * @return string
     */
    public function getCulture()
    {
        return $this->container['culture'];
    }

    /**
     * Sets culture
     *
     * @param string $culture culture
     *
     * @return $this
     */
    public function setCulture($culture)
    {
        $this->container['culture'] = $culture;

        return $this;
    }

    /**
     * Gets user_full_name
     *
     * @return string
     */
    public function getUserFullName()
    {
        return $this->container['user_full_name'];
    }

    /**
     * Sets user_full_name
     *
     * @param string $user_full_name user_full_name
     *
     * @return $this
     */
    public function setUserFullName($user_full_name)
    {
        $this->container['user_full_name'] = $user_full_name;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number phone_number
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        if (!is_null($phone_number) && (mb_strlen($phone_number) > 150)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling ApiUsers., must be smaller than or equal to 150.');
        }
        if (!is_null($phone_number) && (mb_strlen($phone_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling ApiUsers., must be bigger than or equal to 0.');
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets role
     *
     * @return \SplititSdkClient\Model\Roles
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param \SplititSdkClient\Model\Roles $role role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string $user_name user_name
     *
     * @return $this
     */
    public function setUserName($user_name)
    {
        if (!is_null($user_name) && (mb_strlen($user_name) > 150)) {
            throw new \InvalidArgumentException('invalid length for $user_name when calling ApiUsers., must be smaller than or equal to 150.');
        }
        if (!is_null($user_name) && (mb_strlen($user_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $user_name when calling ApiUsers., must be bigger than or equal to 0.');
        }

        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets unique_id
     *
     * @return string
     */
    public function getUniqueId()
    {
        return $this->container['unique_id'];
    }

    /**
     * Sets unique_id
     *
     * @param string $unique_id unique_id
     *
     * @return $this
     */
    public function setUniqueId($unique_id)
    {
        if (!is_null($unique_id) && (mb_strlen($unique_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $unique_id when calling ApiUsers., must be smaller than or equal to 100.');
        }
        if (!is_null($unique_id) && (mb_strlen($unique_id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $unique_id when calling ApiUsers., must be bigger than or equal to 0.');
        }

        $this->container['unique_id'] = $unique_id;

        return $this;
    }

    /**
     * Gets login_attempt
     *
     * @return int
     */
    public function getLoginAttempt()
    {
        return $this->container['login_attempt'];
    }

    /**
     * Sets login_attempt
     *
     * @param int $login_attempt login_attempt
     *
     * @return $this
     */
    public function setLoginAttempt($login_attempt)
    {
        $this->container['login_attempt'] = $login_attempt;

        return $this;
    }

    /**
     * Gets max_invalid_login_attempts
     *
     * @return int
     */
    public function getMaxInvalidLoginAttempts()
    {
        return $this->container['max_invalid_login_attempts'];
    }

    /**
     * Sets max_invalid_login_attempts
     *
     * @param int $max_invalid_login_attempts max_invalid_login_attempts
     *
     * @return $this
     */
    public function setMaxInvalidLoginAttempts($max_invalid_login_attempts)
    {
        $this->container['max_invalid_login_attempts'] = $max_invalid_login_attempts;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \SplititSdkClient\Model\UserStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \SplititSdkClient\Model\UserStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets is_locked
     *
     * @return bool
     */
    public function getIsLocked()
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked
     *
     * @param bool $is_locked is_locked
     *
     * @return $this
     */
    public function setIsLocked($is_locked)
    {
        $this->container['is_locked'] = $is_locked;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 150)) {
            throw new \InvalidArgumentException('invalid length for $email when calling ApiUsers., must be smaller than or equal to 150.');
        }
        if (!is_null($email) && (mb_strlen($email) < 0)) {
            throw new \InvalidArgumentException('invalid length for $email when calling ApiUsers., must be bigger than or equal to 0.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets culture_name
     *
     * @return string
     */
    public function getCultureName()
    {
        return $this->container['culture_name'];
    }

    /**
     * Sets culture_name
     *
     * @param string $culture_name culture_name
     *
     * @return $this
     */
    public function setCultureName($culture_name)
    {
        $this->container['culture_name'] = $culture_name;

        return $this;
    }

    /**
     * Gets role_id
     *
     * @return int
     */
    public function getRoleId()
    {
        return $this->container['role_id'];
    }

    /**
     * Sets role_id
     *
     * @param int $role_id role_id
     *
     * @return $this
     */
    public function setRoleId($role_id)
    {
        $this->container['role_id'] = $role_id;

        return $this;
    }

    /**
     * Gets login_user_name
     *
     * @return string
     */
    public function getLoginUserName()
    {
        return $this->container['login_user_name'];
    }

    /**
     * Sets login_user_name
     *
     * @param string $login_user_name login_user_name
     *
     * @return $this
     */
    public function setLoginUserName($login_user_name)
    {
        $this->container['login_user_name'] = $login_user_name;

        return $this;
    }

    /**
     * Gets crm_id
     *
     * @return string
     */
    public function getCrmId()
    {
        return $this->container['crm_id'];
    }

    /**
     * Sets crm_id
     *
     * @param string $crm_id crm_id
     *
     * @return $this
     */
    public function setCrmId($crm_id)
    {
        $this->container['crm_id'] = $crm_id;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return \SplititSdkClient\Model\Merchants
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param \SplititSdkClient\Model\Merchants $merchant merchant
     *
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets api_user_password_histories
     *
     * @return \SplititSdkClient\Model\ApiUserPasswordHistories[]
     */
    public function getApiUserPasswordHistories()
    {
        return $this->container['api_user_password_histories'];
    }

    /**
     * Sets api_user_password_histories
     *
     * @param \SplititSdkClient\Model\ApiUserPasswordHistories[] $api_user_password_histories api_user_password_histories
     *
     * @return $this
     */
    public function setApiUserPasswordHistories($api_user_password_histories)
    {
        $this->container['api_user_password_histories'] = $api_user_password_histories;

        return $this;
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
     * Gets merchant_name
     *
     * @return string
     */
    public function getMerchantName()
    {
        return $this->container['merchant_name'];
    }

    /**
     * Sets merchant_name
     *
     * @param string $merchant_name merchant_name
     *
     * @return $this
     */
    public function setMerchantName($merchant_name)
    {
        $this->container['merchant_name'] = $merchant_name;

        return $this;
    }

    /**
     * Gets password
     *
     * @return \SplititSdkClient\Model\IUserPasswordHistory
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param \SplititSdkClient\Model\IUserPasswordHistory $password password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

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



<?php
/**
 * InitiateInstallmentsPlanResponse
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
 * InitiateInstallmentsPlanResponse Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InitiateInstallmentsPlanResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InitiateInstallmentsPlanResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'response_header' => '\SplititSdkClient\Model\ResponseHeader',
        'installment_plan' => '\SplititSdkClient\Model\InstallmentPlan',
        'gateway_transaction_results' => '\SplititSdkClient\Model\TransactionResult[]',
        'checkout_url' => 'string',
        'approval_url' => 'string',
        'terms_and_conditions_url' => 'string',
        'privacy_policy_url' => 'string',
        'installment_plan_info_url' => 'string',
        'public_token' => 'string',
        'learn_more_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'response_header' => null,
        'installment_plan' => null,
        'gateway_transaction_results' => null,
        'checkout_url' => null,
        'approval_url' => null,
        'terms_and_conditions_url' => null,
        'privacy_policy_url' => null,
        'installment_plan_info_url' => null,
        'public_token' => null,
        'learn_more_url' => null
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
        'response_header' => 'ResponseHeader',
        'installment_plan' => 'InstallmentPlan',
        'gateway_transaction_results' => 'GatewayTransactionResults',
        'checkout_url' => 'CheckoutUrl',
        'approval_url' => 'ApprovalUrl',
        'terms_and_conditions_url' => 'TermsAndConditionsUrl',
        'privacy_policy_url' => 'PrivacyPolicyUrl',
        'installment_plan_info_url' => 'InstallmentPlanInfoUrl',
        'public_token' => 'PublicToken',
        'learn_more_url' => 'LearnMoreUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'response_header' => 'setResponseHeader',
        'installment_plan' => 'setInstallmentPlan',
        'gateway_transaction_results' => 'setGatewayTransactionResults',
        'checkout_url' => 'setCheckoutUrl',
        'approval_url' => 'setApprovalUrl',
        'terms_and_conditions_url' => 'setTermsAndConditionsUrl',
        'privacy_policy_url' => 'setPrivacyPolicyUrl',
        'installment_plan_info_url' => 'setInstallmentPlanInfoUrl',
        'public_token' => 'setPublicToken',
        'learn_more_url' => 'setLearnMoreUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'response_header' => 'getResponseHeader',
        'installment_plan' => 'getInstallmentPlan',
        'gateway_transaction_results' => 'getGatewayTransactionResults',
        'checkout_url' => 'getCheckoutUrl',
        'approval_url' => 'getApprovalUrl',
        'terms_and_conditions_url' => 'getTermsAndConditionsUrl',
        'privacy_policy_url' => 'getPrivacyPolicyUrl',
        'installment_plan_info_url' => 'getInstallmentPlanInfoUrl',
        'public_token' => 'getPublicToken',
        'learn_more_url' => 'getLearnMoreUrl'
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
        $this->container['response_header'] = isset($data['response_header']) ? $data['response_header'] : null;
        $this->container['installment_plan'] = isset($data['installment_plan']) ? $data['installment_plan'] : null;
        $this->container['gateway_transaction_results'] = isset($data['gateway_transaction_results']) ? $data['gateway_transaction_results'] : null;
        $this->container['checkout_url'] = isset($data['checkout_url']) ? $data['checkout_url'] : null;
        $this->container['approval_url'] = isset($data['approval_url']) ? $data['approval_url'] : null;
        $this->container['terms_and_conditions_url'] = isset($data['terms_and_conditions_url']) ? $data['terms_and_conditions_url'] : null;
        $this->container['privacy_policy_url'] = isset($data['privacy_policy_url']) ? $data['privacy_policy_url'] : null;
        $this->container['installment_plan_info_url'] = isset($data['installment_plan_info_url']) ? $data['installment_plan_info_url'] : null;
        $this->container['public_token'] = isset($data['public_token']) ? $data['public_token'] : null;
        $this->container['learn_more_url'] = isset($data['learn_more_url']) ? $data['learn_more_url'] : null;
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
     * Gets response_header
     *
     * @return \SplititSdkClient\Model\ResponseHeader
     */
    public function getResponseHeader()
    {
        return $this->container['response_header'];
    }

    /**
     * Sets response_header
     *
     * @param \SplititSdkClient\Model\ResponseHeader $response_header response_header
     *
     * @return $this
     */
    public function setResponseHeader($response_header)
    {
        $this->container['response_header'] = $response_header;

        return $this;
    }

    /**
     * Gets installment_plan
     *
     * @return \SplititSdkClient\Model\InstallmentPlan
     */
    public function getInstallmentPlan()
    {
        return $this->container['installment_plan'];
    }

    /**
     * Sets installment_plan
     *
     * @param \SplititSdkClient\Model\InstallmentPlan $installment_plan installment_plan
     *
     * @return $this
     */
    public function setInstallmentPlan($installment_plan)
    {
        $this->container['installment_plan'] = $installment_plan;

        return $this;
    }

    /**
     * Gets gateway_transaction_results
     *
     * @return \SplititSdkClient\Model\TransactionResult[]
     */
    public function getGatewayTransactionResults()
    {
        return $this->container['gateway_transaction_results'];
    }

    /**
     * Sets gateway_transaction_results
     *
     * @param \SplititSdkClient\Model\TransactionResult[] $gateway_transaction_results gateway_transaction_results
     *
     * @return $this
     */
    public function setGatewayTransactionResults($gateway_transaction_results)
    {
        $this->container['gateway_transaction_results'] = $gateway_transaction_results;

        return $this;
    }

    /**
     * Gets checkout_url
     *
     * @return string
     */
    public function getCheckoutUrl()
    {
        return $this->container['checkout_url'];
    }

    /**
     * Sets checkout_url
     *
     * @param string $checkout_url checkout_url
     *
     * @return $this
     */
    public function setCheckoutUrl($checkout_url)
    {
        $this->container['checkout_url'] = $checkout_url;

        return $this;
    }

    /**
     * Gets approval_url
     *
     * @return string
     */
    public function getApprovalUrl()
    {
        return $this->container['approval_url'];
    }

    /**
     * Sets approval_url
     *
     * @param string $approval_url approval_url
     *
     * @return $this
     */
    public function setApprovalUrl($approval_url)
    {
        $this->container['approval_url'] = $approval_url;

        return $this;
    }

    /**
     * Gets terms_and_conditions_url
     *
     * @return string
     */
    public function getTermsAndConditionsUrl()
    {
        return $this->container['terms_and_conditions_url'];
    }

    /**
     * Sets terms_and_conditions_url
     *
     * @param string $terms_and_conditions_url terms_and_conditions_url
     *
     * @return $this
     */
    public function setTermsAndConditionsUrl($terms_and_conditions_url)
    {
        $this->container['terms_and_conditions_url'] = $terms_and_conditions_url;

        return $this;
    }

    /**
     * Gets privacy_policy_url
     *
     * @return string
     */
    public function getPrivacyPolicyUrl()
    {
        return $this->container['privacy_policy_url'];
    }

    /**
     * Sets privacy_policy_url
     *
     * @param string $privacy_policy_url privacy_policy_url
     *
     * @return $this
     */
    public function setPrivacyPolicyUrl($privacy_policy_url)
    {
        $this->container['privacy_policy_url'] = $privacy_policy_url;

        return $this;
    }

    /**
     * Gets installment_plan_info_url
     *
     * @return string
     */
    public function getInstallmentPlanInfoUrl()
    {
        return $this->container['installment_plan_info_url'];
    }

    /**
     * Sets installment_plan_info_url
     *
     * @param string $installment_plan_info_url installment_plan_info_url
     *
     * @return $this
     */
    public function setInstallmentPlanInfoUrl($installment_plan_info_url)
    {
        $this->container['installment_plan_info_url'] = $installment_plan_info_url;

        return $this;
    }

    /**
     * Gets public_token
     *
     * @return string
     */
    public function getPublicToken()
    {
        return $this->container['public_token'];
    }

    /**
     * Sets public_token
     *
     * @param string $public_token public_token
     *
     * @return $this
     */
    public function setPublicToken($public_token)
    {
        $this->container['public_token'] = $public_token;

        return $this;
    }

    /**
     * Gets learn_more_url
     *
     * @return string
     */
    public function getLearnMoreUrl()
    {
        return $this->container['learn_more_url'];
    }

    /**
     * Sets learn_more_url
     *
     * @param string $learn_more_url learn_more_url
     *
     * @return $this
     */
    public function setLearnMoreUrl($learn_more_url)
    {
        $this->container['learn_more_url'] = $learn_more_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetGet($offset): mixed
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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


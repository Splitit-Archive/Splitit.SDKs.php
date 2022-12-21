<?php
/**
 * PgtlDto
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
 * PgtlDto Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PgtlDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PgtlDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'result' => 'bool',
        'trace_id' => 'string',
        'capture_id' => 'string',
        'is_chargeback' => 'bool',
        'created_date' => 'string',
        'transaction_id' => 'string',
        'installment_plan_id' => 'int',
        'complete_response_xml' => 'string',
        'terminal_gateway_data_id' => 'int',
        'avs_message_message_code' => 'string',
        'avs_message_message_text' => 'string',
        'cvv_message_message_code' => 'string',
        'cvv_message_message_text' => 'string',
        'requested_currency_code' => 'string',
        'processed_amount_amount' => 'float',
        'requested_amount_amount' => 'float',
        'result_message_message_code' => 'string',
        'result_message_message_text' => 'string',
        'type' => '\SplititSdkClient\Model\OperationType',
        'reference_payment_gateway_transaction_log_id' => 'string',
        'idempotency_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'result' => null,
        'trace_id' => null,
        'capture_id' => null,
        'is_chargeback' => null,
        'created_date' => null,
        'transaction_id' => null,
        'installment_plan_id' => 'int64',
        'complete_response_xml' => null,
        'terminal_gateway_data_id' => 'int64',
        'avs_message_message_code' => null,
        'avs_message_message_text' => null,
        'cvv_message_message_code' => null,
        'cvv_message_message_text' => null,
        'requested_currency_code' => null,
        'processed_amount_amount' => 'decimal',
        'requested_amount_amount' => 'decimal',
        'result_message_message_code' => null,
        'result_message_message_text' => null,
        'type' => null,
        'reference_payment_gateway_transaction_log_id' => null,
        'idempotency_key' => null
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
        'result' => 'Result',
        'trace_id' => 'TraceId',
        'capture_id' => 'CaptureId',
        'is_chargeback' => 'IsChargeback',
        'created_date' => 'CreatedDate',
        'transaction_id' => 'TransactionId',
        'installment_plan_id' => 'InstallmentPlanId',
        'complete_response_xml' => 'CompleteResponseXml',
        'terminal_gateway_data_id' => 'TerminalGatewayDataId',
        'avs_message_message_code' => 'AvsMessageMessageCode',
        'avs_message_message_text' => 'AvsMessageMessageText',
        'cvv_message_message_code' => 'CvvMessageMessageCode',
        'cvv_message_message_text' => 'CvvMessageMessageText',
        'requested_currency_code' => 'RequestedCurrencyCode',
        'processed_amount_amount' => 'ProcessedAmountAmount',
        'requested_amount_amount' => 'RequestedAmountAmount',
        'result_message_message_code' => 'ResultMessageMessageCode',
        'result_message_message_text' => 'ResultMessageMessageText',
        'type' => 'Type',
        'reference_payment_gateway_transaction_log_id' => 'ReferencePaymentGatewayTransactionLogId',
        'idempotency_key' => 'IdempotencyKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'result' => 'setResult',
        'trace_id' => 'setTraceId',
        'capture_id' => 'setCaptureId',
        'is_chargeback' => 'setIsChargeback',
        'created_date' => 'setCreatedDate',
        'transaction_id' => 'setTransactionId',
        'installment_plan_id' => 'setInstallmentPlanId',
        'complete_response_xml' => 'setCompleteResponseXml',
        'terminal_gateway_data_id' => 'setTerminalGatewayDataId',
        'avs_message_message_code' => 'setAvsMessageMessageCode',
        'avs_message_message_text' => 'setAvsMessageMessageText',
        'cvv_message_message_code' => 'setCvvMessageMessageCode',
        'cvv_message_message_text' => 'setCvvMessageMessageText',
        'requested_currency_code' => 'setRequestedCurrencyCode',
        'processed_amount_amount' => 'setProcessedAmountAmount',
        'requested_amount_amount' => 'setRequestedAmountAmount',
        'result_message_message_code' => 'setResultMessageMessageCode',
        'result_message_message_text' => 'setResultMessageMessageText',
        'type' => 'setType',
        'reference_payment_gateway_transaction_log_id' => 'setReferencePaymentGatewayTransactionLogId',
        'idempotency_key' => 'setIdempotencyKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'result' => 'getResult',
        'trace_id' => 'getTraceId',
        'capture_id' => 'getCaptureId',
        'is_chargeback' => 'getIsChargeback',
        'created_date' => 'getCreatedDate',
        'transaction_id' => 'getTransactionId',
        'installment_plan_id' => 'getInstallmentPlanId',
        'complete_response_xml' => 'getCompleteResponseXml',
        'terminal_gateway_data_id' => 'getTerminalGatewayDataId',
        'avs_message_message_code' => 'getAvsMessageMessageCode',
        'avs_message_message_text' => 'getAvsMessageMessageText',
        'cvv_message_message_code' => 'getCvvMessageMessageCode',
        'cvv_message_message_text' => 'getCvvMessageMessageText',
        'requested_currency_code' => 'getRequestedCurrencyCode',
        'processed_amount_amount' => 'getProcessedAmountAmount',
        'requested_amount_amount' => 'getRequestedAmountAmount',
        'result_message_message_code' => 'getResultMessageMessageCode',
        'result_message_message_text' => 'getResultMessageMessageText',
        'type' => 'getType',
        'reference_payment_gateway_transaction_log_id' => 'getReferencePaymentGatewayTransactionLogId',
        'idempotency_key' => 'getIdempotencyKey'
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['trace_id'] = isset($data['trace_id']) ? $data['trace_id'] : null;
        $this->container['capture_id'] = isset($data['capture_id']) ? $data['capture_id'] : null;
        $this->container['is_chargeback'] = isset($data['is_chargeback']) ? $data['is_chargeback'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['installment_plan_id'] = isset($data['installment_plan_id']) ? $data['installment_plan_id'] : null;
        $this->container['complete_response_xml'] = isset($data['complete_response_xml']) ? $data['complete_response_xml'] : null;
        $this->container['terminal_gateway_data_id'] = isset($data['terminal_gateway_data_id']) ? $data['terminal_gateway_data_id'] : null;
        $this->container['avs_message_message_code'] = isset($data['avs_message_message_code']) ? $data['avs_message_message_code'] : null;
        $this->container['avs_message_message_text'] = isset($data['avs_message_message_text']) ? $data['avs_message_message_text'] : null;
        $this->container['cvv_message_message_code'] = isset($data['cvv_message_message_code']) ? $data['cvv_message_message_code'] : null;
        $this->container['cvv_message_message_text'] = isset($data['cvv_message_message_text']) ? $data['cvv_message_message_text'] : null;
        $this->container['requested_currency_code'] = isset($data['requested_currency_code']) ? $data['requested_currency_code'] : null;
        $this->container['processed_amount_amount'] = isset($data['processed_amount_amount']) ? $data['processed_amount_amount'] : null;
        $this->container['requested_amount_amount'] = isset($data['requested_amount_amount']) ? $data['requested_amount_amount'] : null;
        $this->container['result_message_message_code'] = isset($data['result_message_message_code']) ? $data['result_message_message_code'] : null;
        $this->container['result_message_message_text'] = isset($data['result_message_message_text']) ? $data['result_message_message_text'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['reference_payment_gateway_transaction_log_id'] = isset($data['reference_payment_gateway_transaction_log_id']) ? $data['reference_payment_gateway_transaction_log_id'] : null;
        $this->container['idempotency_key'] = isset($data['idempotency_key']) ? $data['idempotency_key'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
        if ($this->container['is_chargeback'] === null) {
            $invalidProperties[] = "'is_chargeback' can't be null";
        }
        if ($this->container['terminal_gateway_data_id'] === null) {
            $invalidProperties[] = "'terminal_gateway_data_id' can't be null";
        }
        if ($this->container['processed_amount_amount'] === null) {
            $invalidProperties[] = "'processed_amount_amount' can't be null";
        }
        if ($this->container['requested_amount_amount'] === null) {
            $invalidProperties[] = "'requested_amount_amount' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets result
     *
     * @return bool
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param bool $result result
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets trace_id
     *
     * @return string
     */
    public function getTraceId()
    {
        return $this->container['trace_id'];
    }

    /**
     * Sets trace_id
     *
     * @param string $trace_id trace_id
     *
     * @return $this
     */
    public function setTraceId($trace_id)
    {
        $this->container['trace_id'] = $trace_id;

        return $this;
    }

    /**
     * Gets capture_id
     *
     * @return string
     */
    public function getCaptureId()
    {
        return $this->container['capture_id'];
    }

    /**
     * Sets capture_id
     *
     * @param string $capture_id capture_id
     *
     * @return $this
     */
    public function setCaptureId($capture_id)
    {
        $this->container['capture_id'] = $capture_id;

        return $this;
    }

    /**
     * Gets is_chargeback
     *
     * @return bool
     */
    public function getIsChargeback()
    {
        return $this->container['is_chargeback'];
    }

    /**
     * Sets is_chargeback
     *
     * @param bool $is_chargeback is_chargeback
     *
     * @return $this
     */
    public function setIsChargeback($is_chargeback)
    {
        $this->container['is_chargeback'] = $is_chargeback;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param string $created_date created_date
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string $transaction_id transaction_id
     *
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

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
     * Gets complete_response_xml
     *
     * @return string
     */
    public function getCompleteResponseXml()
    {
        return $this->container['complete_response_xml'];
    }

    /**
     * Sets complete_response_xml
     *
     * @param string $complete_response_xml complete_response_xml
     *
     * @return $this
     */
    public function setCompleteResponseXml($complete_response_xml)
    {
        $this->container['complete_response_xml'] = $complete_response_xml;

        return $this;
    }

    /**
     * Gets terminal_gateway_data_id
     *
     * @return int
     */
    public function getTerminalGatewayDataId()
    {
        return $this->container['terminal_gateway_data_id'];
    }

    /**
     * Sets terminal_gateway_data_id
     *
     * @param int $terminal_gateway_data_id terminal_gateway_data_id
     *
     * @return $this
     */
    public function setTerminalGatewayDataId($terminal_gateway_data_id)
    {
        $this->container['terminal_gateway_data_id'] = $terminal_gateway_data_id;

        return $this;
    }

    /**
     * Gets avs_message_message_code
     *
     * @return string
     */
    public function getAvsMessageMessageCode()
    {
        return $this->container['avs_message_message_code'];
    }

    /**
     * Sets avs_message_message_code
     *
     * @param string $avs_message_message_code avs_message_message_code
     *
     * @return $this
     */
    public function setAvsMessageMessageCode($avs_message_message_code)
    {
        $this->container['avs_message_message_code'] = $avs_message_message_code;

        return $this;
    }

    /**
     * Gets avs_message_message_text
     *
     * @return string
     */
    public function getAvsMessageMessageText()
    {
        return $this->container['avs_message_message_text'];
    }

    /**
     * Sets avs_message_message_text
     *
     * @param string $avs_message_message_text avs_message_message_text
     *
     * @return $this
     */
    public function setAvsMessageMessageText($avs_message_message_text)
    {
        $this->container['avs_message_message_text'] = $avs_message_message_text;

        return $this;
    }

    /**
     * Gets cvv_message_message_code
     *
     * @return string
     */
    public function getCvvMessageMessageCode()
    {
        return $this->container['cvv_message_message_code'];
    }

    /**
     * Sets cvv_message_message_code
     *
     * @param string $cvv_message_message_code cvv_message_message_code
     *
     * @return $this
     */
    public function setCvvMessageMessageCode($cvv_message_message_code)
    {
        $this->container['cvv_message_message_code'] = $cvv_message_message_code;

        return $this;
    }

    /**
     * Gets cvv_message_message_text
     *
     * @return string
     */
    public function getCvvMessageMessageText()
    {
        return $this->container['cvv_message_message_text'];
    }

    /**
     * Sets cvv_message_message_text
     *
     * @param string $cvv_message_message_text cvv_message_message_text
     *
     * @return $this
     */
    public function setCvvMessageMessageText($cvv_message_message_text)
    {
        $this->container['cvv_message_message_text'] = $cvv_message_message_text;

        return $this;
    }

    /**
     * Gets requested_currency_code
     *
     * @return string
     */
    public function getRequestedCurrencyCode()
    {
        return $this->container['requested_currency_code'];
    }

    /**
     * Sets requested_currency_code
     *
     * @param string $requested_currency_code requested_currency_code
     *
     * @return $this
     */
    public function setRequestedCurrencyCode($requested_currency_code)
    {
        $this->container['requested_currency_code'] = $requested_currency_code;

        return $this;
    }

    /**
     * Gets processed_amount_amount
     *
     * @return float
     */
    public function getProcessedAmountAmount()
    {
        return $this->container['processed_amount_amount'];
    }

    /**
     * Sets processed_amount_amount
     *
     * @param float $processed_amount_amount processed_amount_amount
     *
     * @return $this
     */
    public function setProcessedAmountAmount($processed_amount_amount)
    {
        $this->container['processed_amount_amount'] = $processed_amount_amount;

        return $this;
    }

    /**
     * Gets requested_amount_amount
     *
     * @return float
     */
    public function getRequestedAmountAmount()
    {
        return $this->container['requested_amount_amount'];
    }

    /**
     * Sets requested_amount_amount
     *
     * @param float $requested_amount_amount requested_amount_amount
     *
     * @return $this
     */
    public function setRequestedAmountAmount($requested_amount_amount)
    {
        $this->container['requested_amount_amount'] = $requested_amount_amount;

        return $this;
    }

    /**
     * Gets result_message_message_code
     *
     * @return string
     */
    public function getResultMessageMessageCode()
    {
        return $this->container['result_message_message_code'];
    }

    /**
     * Sets result_message_message_code
     *
     * @param string $result_message_message_code result_message_message_code
     *
     * @return $this
     */
    public function setResultMessageMessageCode($result_message_message_code)
    {
        $this->container['result_message_message_code'] = $result_message_message_code;

        return $this;
    }

    /**
     * Gets result_message_message_text
     *
     * @return string
     */
    public function getResultMessageMessageText()
    {
        return $this->container['result_message_message_text'];
    }

    /**
     * Sets result_message_message_text
     *
     * @param string $result_message_message_text result_message_message_text
     *
     * @return $this
     */
    public function setResultMessageMessageText($result_message_message_text)
    {
        $this->container['result_message_message_text'] = $result_message_message_text;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \SplititSdkClient\Model\OperationType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \SplititSdkClient\Model\OperationType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets reference_payment_gateway_transaction_log_id
     *
     * @return string
     */
    public function getReferencePaymentGatewayTransactionLogId()
    {
        return $this->container['reference_payment_gateway_transaction_log_id'];
    }

    /**
     * Sets reference_payment_gateway_transaction_log_id
     *
     * @param string $reference_payment_gateway_transaction_log_id reference_payment_gateway_transaction_log_id
     *
     * @return $this
     */
    public function setReferencePaymentGatewayTransactionLogId($reference_payment_gateway_transaction_log_id)
    {
        $this->container['reference_payment_gateway_transaction_log_id'] = $reference_payment_gateway_transaction_log_id;

        return $this;
    }

    /**
     * Gets idempotency_key
     *
     * @return string
     */
    public function getIdempotencyKey()
    {
        return $this->container['idempotency_key'];
    }

    /**
     * Sets idempotency_key
     *
     * @param string $idempotency_key idempotency_key
     *
     * @return $this
     */
    public function setIdempotencyKey($idempotency_key)
    {
        $this->container['idempotency_key'] = $idempotency_key;

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


<?php
/**
 * Installment
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
 * Installment Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Installment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Installment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'installment_number' => 'int',
        'amount' => '\SplititSdkClient\Model\Money',
        'original_amount' => '\SplititSdkClient\Model\Money',
        'refund_amount' => '\SplititSdkClient\Model\Money',
        'process_date_time' => '\DateTime',
        'is_refund' => 'bool',
        'required_credit' => '\SplititSdkClient\Model\Money',
        'created_date_time' => '\DateTime',
        'status' => '\SplititSdkClient\Model\ReferenceEntityBase',
        'transaction_results' => '\SplititSdkClient\Model\TransactionResult[]',
        'card_details' => '\SplititSdkClient\Model\CardData',
        'result' => 'bool',
        'payment_method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'installment_number' => 'int32',
        'amount' => null,
        'original_amount' => null,
        'refund_amount' => null,
        'process_date_time' => 'date-time',
        'is_refund' => null,
        'required_credit' => null,
        'created_date_time' => 'date-time',
        'status' => null,
        'transaction_results' => null,
        'card_details' => null,
        'result' => null,
        'payment_method' => null
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
        'installment_number' => 'InstallmentNumber',
        'amount' => 'Amount',
        'original_amount' => 'OriginalAmount',
        'refund_amount' => 'RefundAmount',
        'process_date_time' => 'ProcessDateTime',
        'is_refund' => 'IsRefund',
        'required_credit' => 'RequiredCredit',
        'created_date_time' => 'CreatedDateTime',
        'status' => 'Status',
        'transaction_results' => 'TransactionResults',
        'card_details' => 'CardDetails',
        'result' => 'Result',
        'payment_method' => 'PaymentMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'installment_number' => 'setInstallmentNumber',
        'amount' => 'setAmount',
        'original_amount' => 'setOriginalAmount',
        'refund_amount' => 'setRefundAmount',
        'process_date_time' => 'setProcessDateTime',
        'is_refund' => 'setIsRefund',
        'required_credit' => 'setRequiredCredit',
        'created_date_time' => 'setCreatedDateTime',
        'status' => 'setStatus',
        'transaction_results' => 'setTransactionResults',
        'card_details' => 'setCardDetails',
        'result' => 'setResult',
        'payment_method' => 'setPaymentMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'installment_number' => 'getInstallmentNumber',
        'amount' => 'getAmount',
        'original_amount' => 'getOriginalAmount',
        'refund_amount' => 'getRefundAmount',
        'process_date_time' => 'getProcessDateTime',
        'is_refund' => 'getIsRefund',
        'required_credit' => 'getRequiredCredit',
        'created_date_time' => 'getCreatedDateTime',
        'status' => 'getStatus',
        'transaction_results' => 'getTransactionResults',
        'card_details' => 'getCardDetails',
        'result' => 'getResult',
        'payment_method' => 'getPaymentMethod'
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
        $this->container['installment_number'] = isset($data['installment_number']) ? $data['installment_number'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['original_amount'] = isset($data['original_amount']) ? $data['original_amount'] : null;
        $this->container['refund_amount'] = isset($data['refund_amount']) ? $data['refund_amount'] : null;
        $this->container['process_date_time'] = isset($data['process_date_time']) ? $data['process_date_time'] : null;
        $this->container['is_refund'] = isset($data['is_refund']) ? $data['is_refund'] : null;
        $this->container['required_credit'] = isset($data['required_credit']) ? $data['required_credit'] : null;
        $this->container['created_date_time'] = isset($data['created_date_time']) ? $data['created_date_time'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['transaction_results'] = isset($data['transaction_results']) ? $data['transaction_results'] : null;
        $this->container['card_details'] = isset($data['card_details']) ? $data['card_details'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['installment_number'] === null) {
            $invalidProperties[] = "'installment_number' can't be null";
        }
        if ($this->container['is_refund'] === null) {
            $invalidProperties[] = "'is_refund' can't be null";
        }
        if ($this->container['created_date_time'] === null) {
            $invalidProperties[] = "'created_date_time' can't be null";
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
     * Gets installment_number
     *
     * @return int
     */
    public function getInstallmentNumber()
    {
        return $this->container['installment_number'];
    }

    /**
     * Sets installment_number
     *
     * @param int $installment_number installment_number
     *
     * @return $this
     */
    public function setInstallmentNumber($installment_number)
    {
        $this->container['installment_number'] = $installment_number;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \SplititSdkClient\Model\Money
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \SplititSdkClient\Model\Money $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets original_amount
     *
     * @return \SplititSdkClient\Model\Money
     */
    public function getOriginalAmount()
    {
        return $this->container['original_amount'];
    }

    /**
     * Sets original_amount
     *
     * @param \SplititSdkClient\Model\Money $original_amount original_amount
     *
     * @return $this
     */
    public function setOriginalAmount($original_amount)
    {
        $this->container['original_amount'] = $original_amount;

        return $this;
    }

    /**
     * Gets refund_amount
     *
     * @return \SplititSdkClient\Model\Money
     */
    public function getRefundAmount()
    {
        return $this->container['refund_amount'];
    }

    /**
     * Sets refund_amount
     *
     * @param \SplititSdkClient\Model\Money $refund_amount refund_amount
     *
     * @return $this
     */
    public function setRefundAmount($refund_amount)
    {
        $this->container['refund_amount'] = $refund_amount;

        return $this;
    }

    /**
     * Gets process_date_time
     *
     * @return \DateTime
     */
    public function getProcessDateTime()
    {
        return $this->container['process_date_time'];
    }

    /**
     * Sets process_date_time
     *
     * @param \DateTime $process_date_time process_date_time
     *
     * @return $this
     */
    public function setProcessDateTime($process_date_time)
    {
        $this->container['process_date_time'] = $process_date_time;

        return $this;
    }

    /**
     * Gets is_refund
     *
     * @return bool
     */
    public function getIsRefund()
    {
        return $this->container['is_refund'];
    }

    /**
     * Sets is_refund
     *
     * @param bool $is_refund is_refund
     *
     * @return $this
     */
    public function setIsRefund($is_refund)
    {
        $this->container['is_refund'] = $is_refund;

        return $this;
    }

    /**
     * Gets required_credit
     *
     * @return \SplititSdkClient\Model\Money
     */
    public function getRequiredCredit()
    {
        return $this->container['required_credit'];
    }

    /**
     * Sets required_credit
     *
     * @param \SplititSdkClient\Model\Money $required_credit required_credit
     *
     * @return $this
     */
    public function setRequiredCredit($required_credit)
    {
        $this->container['required_credit'] = $required_credit;

        return $this;
    }

    /**
     * Gets created_date_time
     *
     * @return \DateTime
     */
    public function getCreatedDateTime()
    {
        return $this->container['created_date_time'];
    }

    /**
     * Sets created_date_time
     *
     * @param \DateTime $created_date_time created_date_time
     *
     * @return $this
     */
    public function setCreatedDateTime($created_date_time)
    {
        $this->container['created_date_time'] = $created_date_time;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \SplititSdkClient\Model\ReferenceEntityBase
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \SplititSdkClient\Model\ReferenceEntityBase $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets transaction_results
     *
     * @return \SplititSdkClient\Model\TransactionResult[]
     */
    public function getTransactionResults()
    {
        return $this->container['transaction_results'];
    }

    /**
     * Sets transaction_results
     *
     * @param \SplititSdkClient\Model\TransactionResult[] $transaction_results transaction_results
     *
     * @return $this
     */
    public function setTransactionResults($transaction_results)
    {
        $this->container['transaction_results'] = $transaction_results;

        return $this;
    }

    /**
     * Gets card_details
     *
     * @return \SplititSdkClient\Model\CardData
     */
    public function getCardDetails()
    {
        return $this->container['card_details'];
    }

    /**
     * Sets card_details
     *
     * @param \SplititSdkClient\Model\CardData $card_details card_details
     *
     * @return $this
     */
    public function setCardDetails($card_details)
    {
        $this->container['card_details'] = $card_details;

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
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

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


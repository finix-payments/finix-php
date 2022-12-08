<?php
/**
 * CreateTransferRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */

namespace Finix\Model;

use \ArrayAccess;
use \Finix\ObjectSerializer;

/**
 * CreateTransferRequest Class Doc Comment
 *
 * @category Class
 * @description Create a &#x60;transfer&#x60;.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateTransferRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateTransferRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_buyer_charges' => '\Finix\Model\AdditionalBuyerCharges',
        'additional_purchase_data' => '\Finix\Model\AdditionalPurchaseData',
        'adjustment_request' => 'bool',
        'amount' => 'int',
        'currency' => '\Finix\Model\Currency',
        'destination' => 'string',
        'device' => 'string',
        'device_configuration' => '\Finix\Model\ConfigurationDetails',
        'fee' => 'int',
        'fraud_session_id' => 'string',
        'hsa_fsa_payment' => 'bool',
        'idempotency_id' => 'string',
        'merchant' => 'string',
        'operation_key' => 'string',
        'payment_instrument' => '\Finix\Model\CardPresentInstrumentForm',
        'processor' => 'string',
        'source' => 'string',
        'security_code' => 'string',
        'statement_descriptor' => 'string',
        'tags' => 'array<string,string>',
        '_3d_secure_authentication' => '\Finix\Model\CreateTransferRequest3dSecureAuthentication'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_buyer_charges' => null,
        'additional_purchase_data' => null,
        'adjustment_request' => null,
        'amount' => 'int64',
        'currency' => null,
        'destination' => null,
        'device' => null,
        'device_configuration' => null,
        'fee' => 'int64',
        'fraud_session_id' => null,
        'hsa_fsa_payment' => null,
        'idempotency_id' => null,
        'merchant' => null,
        'operation_key' => null,
        'payment_instrument' => null,
        'processor' => null,
        'source' => null,
        'security_code' => null,
        'statement_descriptor' => null,
        'tags' => null,
        '_3d_secure_authentication' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'additional_buyer_charges' => 'additional_buyer_charges',
        'additional_purchase_data' => 'additional_purchase_data',
        'adjustment_request' => 'adjustment_request',
        'amount' => 'amount',
        'currency' => 'currency',
        'destination' => 'destination',
        'device' => 'device',
        'device_configuration' => 'device_configuration',
        'fee' => 'fee',
        'fraud_session_id' => 'fraud_session_id',
        'hsa_fsa_payment' => 'hsa_fsa_payment',
        'idempotency_id' => 'idempotency_id',
        'merchant' => 'merchant',
        'operation_key' => 'operation_key',
        'payment_instrument' => 'payment_instrument',
        'processor' => 'processor',
        'source' => 'source',
        'security_code' => 'security_code',
        'statement_descriptor' => 'statement_descriptor',
        'tags' => 'tags',
        '_3d_secure_authentication' => '3d_secure_authentication'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_buyer_charges' => 'setAdditionalBuyerCharges',
        'additional_purchase_data' => 'setAdditionalPurchaseData',
        'adjustment_request' => 'setAdjustmentRequest',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'destination' => 'setDestination',
        'device' => 'setDevice',
        'device_configuration' => 'setDeviceConfiguration',
        'fee' => 'setFee',
        'fraud_session_id' => 'setFraudSessionId',
        'hsa_fsa_payment' => 'setHsaFsaPayment',
        'idempotency_id' => 'setIdempotencyId',
        'merchant' => 'setMerchant',
        'operation_key' => 'setOperationKey',
        'payment_instrument' => 'setPaymentInstrument',
        'processor' => 'setProcessor',
        'source' => 'setSource',
        'security_code' => 'setSecurityCode',
        'statement_descriptor' => 'setStatementDescriptor',
        'tags' => 'setTags',
        '_3d_secure_authentication' => 'set3dSecureAuthentication'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_buyer_charges' => 'getAdditionalBuyerCharges',
        'additional_purchase_data' => 'getAdditionalPurchaseData',
        'adjustment_request' => 'getAdjustmentRequest',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'destination' => 'getDestination',
        'device' => 'getDevice',
        'device_configuration' => 'getDeviceConfiguration',
        'fee' => 'getFee',
        'fraud_session_id' => 'getFraudSessionId',
        'hsa_fsa_payment' => 'getHsaFsaPayment',
        'idempotency_id' => 'getIdempotencyId',
        'merchant' => 'getMerchant',
        'operation_key' => 'getOperationKey',
        'payment_instrument' => 'getPaymentInstrument',
        'processor' => 'getProcessor',
        'source' => 'getSource',
        'security_code' => 'getSecurityCode',
        'statement_descriptor' => 'getStatementDescriptor',
        'tags' => 'getTags',
        '_3d_secure_authentication' => 'get3dSecureAuthentication'
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
        return self::$openAPIModelName;
    }

    public const OPERATION_KEY_PUSH_TO_CARD = 'PUSH_TO_CARD';
    public const OPERATION_KEY_PULL_FROM_CARD = 'PULL_FROM_CARD';
    public const OPERATION_KEY_CARD_PRESENT_DEBIT = 'CARD_PRESENT_DEBIT';
    public const OPERATION_KEY_CARD_PRESENT_UNREFERENCED_REFUND = 'CARD_PRESENT_UNREFERENCED_REFUND';
    public const OPERATION_KEY_SALE = 'SALE';
    public const OPERATION_KEY_UNREFERENCED_REFUND = 'UNREFERENCED_REFUND';
    public const OPERATION_KEY_MERCHANT_CREDIT_ADJUSTMENT = 'MERCHANT_CREDIT_ADJUSTMENT';
    public const OPERATION_KEY_MERCHANT_DEBIT_ADJUSTMENT = 'MERCHANT_DEBIT_ADJUSTMENT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationKeyAllowableValues()
    {
        return [
            self::OPERATION_KEY_PUSH_TO_CARD,
            self::OPERATION_KEY_PULL_FROM_CARD,
            self::OPERATION_KEY_CARD_PRESENT_DEBIT,
            self::OPERATION_KEY_CARD_PRESENT_UNREFERENCED_REFUND,
            self::OPERATION_KEY_SALE,
            self::OPERATION_KEY_UNREFERENCED_REFUND,
            self::OPERATION_KEY_MERCHANT_CREDIT_ADJUSTMENT,
            self::OPERATION_KEY_MERCHANT_DEBIT_ADJUSTMENT,
        ];
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
        $this->container['additional_buyer_charges'] = $data['additional_buyer_charges'] ?? null;
        $this->container['additional_purchase_data'] = $data['additional_purchase_data'] ?? null;
        $this->container['adjustment_request'] = $data['adjustment_request'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['destination'] = $data['destination'] ?? null;
        $this->container['device'] = $data['device'] ?? null;
        $this->container['device_configuration'] = $data['device_configuration'] ?? null;
        $this->container['fee'] = $data['fee'] ?? null;
        $this->container['fraud_session_id'] = $data['fraud_session_id'] ?? null;
        $this->container['hsa_fsa_payment'] = $data['hsa_fsa_payment'] ?? null;
        $this->container['idempotency_id'] = $data['idempotency_id'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['operation_key'] = $data['operation_key'] ?? null;
        $this->container['payment_instrument'] = $data['payment_instrument'] ?? null;
        $this->container['processor'] = $data['processor'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['security_code'] = $data['security_code'] ?? null;
        $this->container['statement_descriptor'] = $data['statement_descriptor'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['_3d_secure_authentication'] = $data['_3d_secure_authentication'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        $allowedValues = $this->getOperationKeyAllowableValues();
        if (!is_null($this->container['operation_key']) && !in_array($this->container['operation_key'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'operation_key', must be one of '%s'",
                $this->container['operation_key'],
                implode("', '", $allowedValues)
            );
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
     * Gets additional_buyer_charges
     *
     * @return \Finix\Model\AdditionalBuyerCharges|null
     */
    public function getAdditionalBuyerCharges()
    {
        return $this->container['additional_buyer_charges'];
    }

    /**
     * Sets additional_buyer_charges
     *
     * @param \Finix\Model\AdditionalBuyerCharges|null $additional_buyer_charges additional_buyer_charges
     *
     * @return self
     */
    public function setAdditionalBuyerCharges($additional_buyer_charges, $deserialize = false)
    {
        $this->container['additional_buyer_charges'] = $additional_buyer_charges;

        return $this;
    }

    /**
     * Gets additional_purchase_data
     *
     * @return \Finix\Model\AdditionalPurchaseData|null
     */
    public function getAdditionalPurchaseData()
    {
        return $this->container['additional_purchase_data'];
    }

    /**
     * Sets additional_purchase_data
     *
     * @param \Finix\Model\AdditionalPurchaseData|null $additional_purchase_data additional_purchase_data
     *
     * @return self
     */
    public function setAdditionalPurchaseData($additional_purchase_data, $deserialize = false)
    {
        $this->container['additional_purchase_data'] = $additional_purchase_data;

        return $this;
    }

    /**
     * Gets adjustment_request
     *
     * @return bool|null
     */
    public function getAdjustmentRequest()
    {
        return $this->container['adjustment_request'];
    }

    /**
     * Sets adjustment_request
     *
     * @param bool|null $adjustment_request Details if the `transfer` was created to adjust funds.
     *
     * @return self
     */
    public function setAdjustmentRequest($adjustment_request, $deserialize = false)
    {
        $this->container['adjustment_request'] = $adjustment_request;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount The total amount that will be debited in cents (e.g. 100 cents to debit $1.00).
     *
     * @return self
     */
    public function setAmount($amount, $deserialize = false)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Finix\Model\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Finix\Model\Currency $currency currency
     *
     * @return self
     */
    public function setCurrency($currency, $deserialize = false)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return string|null
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param string|null $destination ID of the `Payment Instrument` where funds will be sent.
     *
     * @return self
     */
    public function setDestination($destination, $deserialize = false)
    {
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets device
     *
     * @return string|null
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param string|null $device The ID of the activated device.
     *
     * @return self
     */
    public function setDevice($device, $deserialize = false)
    {
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets device_configuration
     *
     * @return \Finix\Model\ConfigurationDetails|null
     */
    public function getDeviceConfiguration()
    {
        return $this->container['device_configuration'];
    }

    /**
     * Sets device_configuration
     *
     * @param \Finix\Model\ConfigurationDetails|null $device_configuration device_configuration
     *
     * @return self
     */
    public function setDeviceConfiguration($device_configuration, $deserialize = false)
    {
        $this->container['device_configuration'] = $device_configuration;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return int|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param int|null $fee The amount of the `Transfer` you'd like to collect as your fee in cents. Defaults to zero (must be less than or equal to the `amount`).
     *
     * @return self
     */
    public function setFee($fee, $deserialize = false)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets fraud_session_id
     *
     * @return string|null
     */
    public function getFraudSessionId()
    {
        return $this->container['fraud_session_id'];
    }

    /**
     * Sets fraud_session_id
     *
     * @param string|null $fraud_session_id The `fraud_session_session` ID you want to review for fraud. For more info, see [Fraud Detection](/guides/payments/fraud-detection/).
     *
     * @return self
     */
    public function setFraudSessionId($fraud_session_id, $deserialize = false)
    {
        $this->container['fraud_session_id'] = $fraud_session_id;

        return $this;
    }

    /**
     * Gets hsa_fsa_payment
     *
     * @return bool|null
     */
    public function getHsaFsaPayment()
    {
        return $this->container['hsa_fsa_payment'];
    }

    /**
     * Sets hsa_fsa_payment
     *
     * @param bool|null $hsa_fsa_payment Set to to **true** to process a payment using a `Payment Instrument` [created from a health savings account (HSA) or flexible spending account (FSA)](/docs/guides/making-a-payment/hsa-fsa/).
     *
     * @return self
     */
    public function setHsaFsaPayment($hsa_fsa_payment, $deserialize = false)
    {
        $this->container['hsa_fsa_payment'] = $hsa_fsa_payment;

        return $this;
    }

    /**
     * Gets idempotency_id
     *
     * @return string|null
     */
    public function getIdempotencyId()
    {
        return $this->container['idempotency_id'];
    }

    /**
     * Sets idempotency_id
     *
     * @param string|null $idempotency_id A randomly generated value that'll be associated with the request.
     *
     * @return self
     */
    public function setIdempotencyId($idempotency_id, $deserialize = false)
    {
        $this->container['idempotency_id'] = $idempotency_id;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return string|null
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param string|null $merchant ID of the `Merchant` the `Transfer` was created under.
     *
     * @return self
     */
    public function setMerchant($merchant, $deserialize = false)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets operation_key
     *
     * @return string|null
     */
    public function getOperationKey()
    {
        return $this->container['operation_key'];
    }

    /**
     * Sets operation_key
     *
     * @param string|null $operation_key Details the operation that'll be performed in the transaction.
     *
     * @return self
     */
    public function setOperationKey($operation_key, $deserialize = false)
    {
        $allowedValues = $this->getOperationKeyAllowableValues();
        if (!is_null($operation_key) && !in_array($operation_key, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'operation_key', must be one of '%s'",
                    $operation_key,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation_key'] = $operation_key;

        return $this;
    }

    /**
     * Gets payment_instrument
     *
     * @return \Finix\Model\CardPresentInstrumentForm|null
     */
    public function getPaymentInstrument()
    {
        return $this->container['payment_instrument'];
    }

    /**
     * Sets payment_instrument
     *
     * @param \Finix\Model\CardPresentInstrumentForm|null $payment_instrument payment_instrument
     *
     * @return self
     */
    public function setPaymentInstrument($payment_instrument, $deserialize = false)
    {
        $this->container['payment_instrument'] = $payment_instrument;

        return $this;
    }

    /**
     * Gets processor
     *
     * @return string|null
     */
    public function getProcessor()
    {
        return $this->container['processor'];
    }

    /**
     * Sets processor
     *
     * @param string|null $processor Name of the transaction processor.
     *
     * @return self
     */
    public function setProcessor($processor, $deserialize = false)
    {
        $this->container['processor'] = $processor;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source ID of the `Payment Instrument` where funds get debited.
     *
     * @return self
     */
    public function setSource($source, $deserialize = false)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets security_code
     *
     * @return string|null
     */
    public function getSecurityCode()
    {
        return $this->container['security_code'];
    }

    /**
     * Sets security_code
     *
     * @param string|null $security_code The 3-4 digit security code for the card (i.e. CVV code). Include the CVV code of the card to include [Card Verification Checks](/guides/payments/making-a-payment/card-verification-checks/) with the created `Transfer`.
     *
     * @return self
     */
    public function setSecurityCode($security_code, $deserialize = false)
    {
        $this->container['security_code'] = $security_code;

        return $this;
    }

    /**
     * Gets statement_descriptor
     *
     * @return string|null
     */
    public function getStatementDescriptor()
    {
        return $this->container['statement_descriptor'];
    }

    /**
     * Sets statement_descriptor
     *
     * @param string|null $statement_descriptor <li>The description of the transaction that appears on the buyer's bank or card statement.</li><li><kbd>statement_descriptors</kbd> for `Transfers` in <strong>live</strong> enviroments will have a <kbd>FI*</kbd> prefix.
     *
     * @return self
     */
    public function setStatementDescriptor($statement_descriptor, $deserialize = false)
    {
        $this->container['statement_descriptor'] = $statement_descriptor;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return array<string,string>|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param array<string,string>|null $tags Key value pair for annotating custom meta data (e.g. order numbers).
     *
     * @return self
     */
    public function setTags($tags, $deserialize = false)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets _3d_secure_authentication
     *
     * @return \Finix\Model\CreateTransferRequest3dSecureAuthentication|null
     */
    public function get3dSecureAuthentication()
    {
        return $this->container['_3d_secure_authentication'];
    }

    /**
     * Sets _3d_secure_authentication
     *
     * @param \Finix\Model\CreateTransferRequest3dSecureAuthentication|null $_3d_secure_authentication _3d_secure_authentication
     *
     * @return self
     */
    public function set3dSecureAuthentication($_3d_secure_authentication, $deserialize = false)
    {
        $this->container['_3d_secure_authentication'] = $_3d_secure_authentication;

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
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



<?php
/**
 * Transfer
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
 * Transfer Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Transfer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Transfer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'additional_buyer_charges' => '\Finix\Model\AdditionalBuyerCharges',
        'additional_healthcare_data' => '\Finix\Model\AdditionalHealthcareData',
        'address_verification' => 'string',
        'amount' => 'int',
        'amount_requested' => 'int',
        'application' => 'string',
        'card_present_details' => '\Finix\Model\CardPresentDetails',
        'currency' => '\Finix\Model\Currency',
        'destination' => 'string',
        'device' => 'string',
        'externally_funded' => 'string',
        'failure_code' => 'string',
        'failure_message' => 'string',
        'fee' => 'int',
        'fee_type' => '\Finix\Model\FeeType',
        'idempotency_id' => 'string',
        'merchant_identity' => 'string',
        'messages' => 'string[]',
        'raw' => 'object',
        'ready_to_settle_at' => '\DateTime',
        'security_code_verification' => 'string',
        'source' => 'string',
        'state' => 'string',
        'statement_descriptor' => 'string',
        'subtype' => 'string',
        'tags' => 'array<string,string>',
        'trace_id' => 'string',
        'type' => 'string',
        '_links' => '\Finix\Model\TransferLinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'additional_buyer_charges' => null,
        'additional_healthcare_data' => null,
        'address_verification' => null,
        'amount' => 'int64',
        'amount_requested' => null,
        'application' => null,
        'card_present_details' => null,
        'currency' => null,
        'destination' => null,
        'device' => null,
        'externally_funded' => null,
        'failure_code' => null,
        'failure_message' => null,
        'fee' => 'int64',
        'fee_type' => null,
        'idempotency_id' => null,
        'merchant_identity' => null,
        'messages' => null,
        'raw' => null,
        'ready_to_settle_at' => 'date-time',
        'security_code_verification' => null,
        'source' => null,
        'state' => null,
        'statement_descriptor' => null,
        'subtype' => null,
        'tags' => null,
        'trace_id' => null,
        'type' => null,
        '_links' => null
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
        'id' => 'id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'additional_buyer_charges' => 'additional_buyer_charges',
        'additional_healthcare_data' => 'additional_healthcare_data',
        'address_verification' => 'address_verification',
        'amount' => 'amount',
        'amount_requested' => 'amount_requested',
        'application' => 'application',
        'card_present_details' => 'card_present_details',
        'currency' => 'currency',
        'destination' => 'destination',
        'device' => 'device',
        'externally_funded' => 'externally_funded',
        'failure_code' => 'failure_code',
        'failure_message' => 'failure_message',
        'fee' => 'fee',
        'fee_type' => 'fee_type',
        'idempotency_id' => 'idempotency_id',
        'merchant_identity' => 'merchant_identity',
        'messages' => 'messages',
        'raw' => 'raw',
        'ready_to_settle_at' => 'ready_to_settle_at',
        'security_code_verification' => 'security_code_verification',
        'source' => 'source',
        'state' => 'state',
        'statement_descriptor' => 'statement_descriptor',
        'subtype' => 'subtype',
        'tags' => 'tags',
        'trace_id' => 'trace_id',
        'type' => 'type',
        '_links' => '_links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'additional_buyer_charges' => 'setAdditionalBuyerCharges',
        'additional_healthcare_data' => 'setAdditionalHealthcareData',
        'address_verification' => 'setAddressVerification',
        'amount' => 'setAmount',
        'amount_requested' => 'setAmountRequested',
        'application' => 'setApplication',
        'card_present_details' => 'setCardPresentDetails',
        'currency' => 'setCurrency',
        'destination' => 'setDestination',
        'device' => 'setDevice',
        'externally_funded' => 'setExternallyFunded',
        'failure_code' => 'setFailureCode',
        'failure_message' => 'setFailureMessage',
        'fee' => 'setFee',
        'fee_type' => 'setFeeType',
        'idempotency_id' => 'setIdempotencyId',
        'merchant_identity' => 'setMerchantIdentity',
        'messages' => 'setMessages',
        'raw' => 'setRaw',
        'ready_to_settle_at' => 'setReadyToSettleAt',
        'security_code_verification' => 'setSecurityCodeVerification',
        'source' => 'setSource',
        'state' => 'setState',
        'statement_descriptor' => 'setStatementDescriptor',
        'subtype' => 'setSubtype',
        'tags' => 'setTags',
        'trace_id' => 'setTraceId',
        'type' => 'setType',
        '_links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'additional_buyer_charges' => 'getAdditionalBuyerCharges',
        'additional_healthcare_data' => 'getAdditionalHealthcareData',
        'address_verification' => 'getAddressVerification',
        'amount' => 'getAmount',
        'amount_requested' => 'getAmountRequested',
        'application' => 'getApplication',
        'card_present_details' => 'getCardPresentDetails',
        'currency' => 'getCurrency',
        'destination' => 'getDestination',
        'device' => 'getDevice',
        'externally_funded' => 'getExternallyFunded',
        'failure_code' => 'getFailureCode',
        'failure_message' => 'getFailureMessage',
        'fee' => 'getFee',
        'fee_type' => 'getFeeType',
        'idempotency_id' => 'getIdempotencyId',
        'merchant_identity' => 'getMerchantIdentity',
        'messages' => 'getMessages',
        'raw' => 'getRaw',
        'ready_to_settle_at' => 'getReadyToSettleAt',
        'security_code_verification' => 'getSecurityCodeVerification',
        'source' => 'getSource',
        'state' => 'getState',
        'statement_descriptor' => 'getStatementDescriptor',
        'subtype' => 'getSubtype',
        'tags' => 'getTags',
        'trace_id' => 'getTraceId',
        'type' => 'getType',
        '_links' => 'getLinks'
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

    public const STATE_CANCELED = 'CANCELED';
    public const STATE_PENDING = 'PENDING';
    public const STATE_FAILED = 'FAILED';
    public const STATE_SUCCEEDED = 'SUCCEEDED';
    public const STATE_UNKNOWN = 'UNKNOWN';
    public const SUBTYPE_API = 'API';
    public const SUBTYPE_APPLICATION_FEE = 'APPLICATION_FEE';
    public const SUBTYPE_DISPUTE = 'DISPUTE';
    public const SUBTYPE_MERCHANT_CREDIT = 'MERCHANT_CREDIT';
    public const SUBTYPE_MERCHANT_CREDIT_ADJUSTMENT = 'MERCHANT_CREDIT_ADJUSTMENT';
    public const SUBTYPE_MERCHANT_DEBIT = 'MERCHANT_DEBIT';
    public const SUBTYPE_MERCHANT_DEBIT_ADJUSTMENT = 'MERCHANT_DEBIT_ADJUSTMENT';
    public const SUBTYPE_PLATFORM_CREDIT = 'PLATFORM_CREDIT';
    public const SUBTYPE_PLATFORM_CREDIT_ADJUSTMENT = 'PLATFORM_CREDIT_ADJUSTMENT';
    public const SUBTYPE_PLATFORM_DEBIT = 'PLATFORM_DEBIT';
    public const SUBTYPE_PLATFORM_DEBIT_ADJUSTMENT = 'PLATFORM_DEBIT_ADJUSTMENT';
    public const SUBTYPE_PLATFORM_FEE = 'PLATFORM_FEE';
    public const SUBTYPE_SETTLEMENT_MERCHANT = 'SETTLEMENT_MERCHANT';
    public const SUBTYPE_SETTLEMENT_NOOP = 'SETTLEMENT_NOOP';
    public const SUBTYPE_SETTLEMENT_PARTNER = 'SETTLEMENT_PARTNER';
    public const SUBTYPE_SETTLEMENT_PLATFORM = 'SETTLEMENT_PLATFORM';
    public const SUBTYPE_SPLIT_PAYOUT = 'SPLIT_PAYOUT';
    public const SUBTYPE_SPLIT_PAYOUT_ADJUSTMENT = 'SPLIT_PAYOUT_ADJUSTMENT';
    public const SUBTYPE_SYSTEM = 'SYSTEM';
    public const TYPE_DEBIT = 'DEBIT';
    public const TYPE_CREDIT = 'CREDIT';
    public const TYPE_REVERSAL = 'REVERSAL';
    public const TYPE_FEE = 'FEE';
    public const TYPE_ADJUSTMENT = 'ADJUSTMENT';
    public const TYPE_DISPUTE = 'DISPUTE';
    public const TYPE_RESERVE = 'RESERVE';
    public const TYPE_SETTLEMENT = 'SETTLEMENT';
    public const TYPE_UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_CANCELED,
            self::STATE_PENDING,
            self::STATE_FAILED,
            self::STATE_SUCCEEDED,
            self::STATE_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubtypeAllowableValues()
    {
        return [
            self::SUBTYPE_API,
            self::SUBTYPE_APPLICATION_FEE,
            self::SUBTYPE_DISPUTE,
            self::SUBTYPE_MERCHANT_CREDIT,
            self::SUBTYPE_MERCHANT_CREDIT_ADJUSTMENT,
            self::SUBTYPE_MERCHANT_DEBIT,
            self::SUBTYPE_MERCHANT_DEBIT_ADJUSTMENT,
            self::SUBTYPE_PLATFORM_CREDIT,
            self::SUBTYPE_PLATFORM_CREDIT_ADJUSTMENT,
            self::SUBTYPE_PLATFORM_DEBIT,
            self::SUBTYPE_PLATFORM_DEBIT_ADJUSTMENT,
            self::SUBTYPE_PLATFORM_FEE,
            self::SUBTYPE_SETTLEMENT_MERCHANT,
            self::SUBTYPE_SETTLEMENT_NOOP,
            self::SUBTYPE_SETTLEMENT_PARTNER,
            self::SUBTYPE_SETTLEMENT_PLATFORM,
            self::SUBTYPE_SPLIT_PAYOUT,
            self::SUBTYPE_SPLIT_PAYOUT_ADJUSTMENT,
            self::SUBTYPE_SYSTEM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DEBIT,
            self::TYPE_CREDIT,
            self::TYPE_REVERSAL,
            self::TYPE_FEE,
            self::TYPE_ADJUSTMENT,
            self::TYPE_DISPUTE,
            self::TYPE_RESERVE,
            self::TYPE_SETTLEMENT,
            self::TYPE_UNKNOWN,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['additional_buyer_charges'] = $data['additional_buyer_charges'] ?? null;
        $this->container['additional_healthcare_data'] = $data['additional_healthcare_data'] ?? null;
        $this->container['address_verification'] = $data['address_verification'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['amount_requested'] = $data['amount_requested'] ?? null;
        $this->container['application'] = $data['application'] ?? null;
        $this->container['card_present_details'] = $data['card_present_details'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['destination'] = $data['destination'] ?? null;
        $this->container['device'] = $data['device'] ?? null;
        $this->container['externally_funded'] = $data['externally_funded'] ?? null;
        $this->container['failure_code'] = $data['failure_code'] ?? null;
        $this->container['failure_message'] = $data['failure_message'] ?? null;
        $this->container['fee'] = $data['fee'] ?? null;
        $this->container['fee_type'] = $data['fee_type'] ?? null;
        $this->container['idempotency_id'] = $data['idempotency_id'] ?? null;
        $this->container['merchant_identity'] = $data['merchant_identity'] ?? null;
        $this->container['messages'] = $data['messages'] ?? null;
        $this->container['raw'] = $data['raw'] ?? null;
        $this->container['ready_to_settle_at'] = $data['ready_to_settle_at'] ?? null;
        $this->container['security_code_verification'] = $data['security_code_verification'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['statement_descriptor'] = $data['statement_descriptor'] ?? null;
        $this->container['subtype'] = $data['subtype'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['trace_id'] = $data['trace_id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['_links'] = $data['_links'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSubtypeAllowableValues();
        if (!is_null($this->container['subtype']) && !in_array($this->container['subtype'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'subtype', must be one of '%s'",
                $this->container['subtype'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The ID of the `Transfer` resource.
     *
     * @return self
     */
    public function setId($id, $deserialize = false)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Timestamp of when the object was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at, $deserialize = false)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at Timestamp of when the object was last updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at, $deserialize = false)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
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
     * Gets additional_healthcare_data
     *
     * @return \Finix\Model\AdditionalHealthcareData|null
     */
    public function getAdditionalHealthcareData()
    {
        return $this->container['additional_healthcare_data'];
    }

    /**
     * Sets additional_healthcare_data
     *
     * @param \Finix\Model\AdditionalHealthcareData|null $additional_healthcare_data additional_healthcare_data
     *
     * @return self
     */
    public function setAdditionalHealthcareData($additional_healthcare_data, $deserialize = false)
    {
        $this->container['additional_healthcare_data'] = $additional_healthcare_data;

        return $this;
    }

    /**
     * Gets address_verification
     *
     * @return string|null
     */
    public function getAddressVerification()
    {
        return $this->container['address_verification'];
    }

    /**
     * Sets address_verification
     *
     * @param string|null $address_verification Details the results of the Address Verification checks.
     *
     * @return self
     */
    public function setAddressVerification($address_verification, $deserialize = false)
    {
        $this->container['address_verification'] = $address_verification;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount The total amount that will be debited in cents (e.g. 100 cents to debit $1.00).
     *
     * @return self
     */
    public function setAmount($amount, $deserialize = false)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amount_requested
     *
     * @return int|null
     */
    public function getAmountRequested()
    {
        return $this->container['amount_requested'];
    }

    /**
     * Sets amount_requested
     *
     * @param int|null $amount_requested Details the `amount` that was requested to get debited from the `source` when the transaction was created.
     *
     * @return self
     */
    public function setAmountRequested($amount_requested, $deserialize = false)
    {
        $this->container['amount_requested'] = $amount_requested;

        return $this;
    }

    /**
     * Gets application
     *
     * @return string|null
     */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
     * Sets application
     *
     * @param string|null $application The ID of the `Application` the `Transfer` was created under.
     *
     * @return self
     */
    public function setApplication($application, $deserialize = false)
    {
        $this->container['application'] = $application;

        return $this;
    }

    /**
     * Gets card_present_details
     *
     * @return \Finix\Model\CardPresentDetails|null
     */
    public function getCardPresentDetails()
    {
        return $this->container['card_present_details'];
    }

    /**
     * Sets card_present_details
     *
     * @param \Finix\Model\CardPresentDetails|null $card_present_details card_present_details
     *
     * @return self
     */
    public function setCardPresentDetails($card_present_details, $deserialize = false)
    {
        $this->container['card_present_details'] = $card_present_details;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Finix\Model\Currency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Finix\Model\Currency|null $currency currency
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
     * @param string|null $destination The ID of the destination.
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
     * @param string|null $device The ID of the `Device` resource the `Transfer` was created under.
     *
     * @return self
     */
    public function setDevice($device, $deserialize = false)
    {
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets externally_funded
     *
     * @return string|null
     */
    public function getExternallyFunded()
    {
        return $this->container['externally_funded'];
    }

    /**
     * Sets externally_funded
     *
     * @param string|null $externally_funded Details if the `Transfer` will be settled externally by card processors.
     *
     * @return self
     */
    public function setExternallyFunded($externally_funded, $deserialize = false)
    {
        $this->container['externally_funded'] = $externally_funded;

        return $this;
    }

    /**
     * Gets failure_code
     *
     * @return string|null
     */
    public function getFailureCode()
    {
        return $this->container['failure_code'];
    }

    /**
     * Sets failure_code
     *
     * @param string|null $failure_code The code of the failure so the decline can be handled programmatically. For more info on how to handle the failure, see [Failure Codes](/guides/developers/errors/#failure-codes).
     *
     * @return self
     */
    public function setFailureCode($failure_code, $deserialize = false)
    {
        $this->container['failure_code'] = $failure_code;

        return $this;
    }

    /**
     * Gets failure_message
     *
     * @return string|null
     */
    public function getFailureMessage()
    {
        return $this->container['failure_message'];
    }

    /**
     * Sets failure_message
     *
     * @param string|null $failure_message A human-readable description of why the transaction was declined. This will also include a suggestion on how to complete the payment.
     *
     * @return self
     */
    public function setFailureMessage($failure_message, $deserialize = false)
    {
        $this->container['failure_message'] = $failure_message;

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
     * Gets fee_type
     *
     * @return \Finix\Model\FeeType|null
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type
     *
     * @param \Finix\Model\FeeType|null $fee_type fee_type
     *
     * @return self
     */
    public function setFeeType($fee_type, $deserialize = false)
    {
        $this->container['fee_type'] = $fee_type;

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
     * @param string|null $idempotency_id ID to [idempotently](/api/overview/#section/Idempotency-Requests) identifty the transfer.
     *
     * @return self
     */
    public function setIdempotencyId($idempotency_id, $deserialize = false)
    {
        $this->container['idempotency_id'] = $idempotency_id;

        return $this;
    }

    /**
     * Gets merchant_identity
     *
     * @return string|null
     */
    public function getMerchantIdentity()
    {
        return $this->container['merchant_identity'];
    }

    /**
     * Sets merchant_identity
     *
     * @param string|null $merchant_identity The ID of the `Merchant` the `Authorization` was created under.
     *
     * @return self
     */
    public function setMerchantIdentity($merchant_identity, $deserialize = false)
    {
        $this->container['merchant_identity'] = $merchant_identity;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return string[]|null
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param string[]|null $messages Message field that provides additional details. This field is typically **null**.
     *
     * @return self
     */
    public function setMessages($messages, $deserialize = false)
    {
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets raw
     *
     * @return object|null
     */
    public function getRaw()
    {
        return $this->container['raw'];
    }

    /**
     * Sets raw
     *
     * @param object|null $raw Raw response from the processor.
     *
     * @return self
     */
    public function setRaw($raw, $deserialize = false)
    {
        $this->container['raw'] = $raw;

        return $this;
    }

    /**
     * Gets ready_to_settle_at
     *
     * @return \DateTime|null
     */
    public function getReadyToSettleAt()
    {
        return $this->container['ready_to_settle_at'];
    }

    /**
     * Sets ready_to_settle_at
     *
     * @param \DateTime|null $ready_to_settle_at Timestamp of when the `Transfer` is ready to be settled at.
     *
     * @return self
     */
    public function setReadyToSettleAt($ready_to_settle_at, $deserialize = false)
    {
        $this->container['ready_to_settle_at'] = $ready_to_settle_at;

        return $this;
    }

    /**
     * Gets security_code_verification
     *
     * @return string|null
     */
    public function getSecurityCodeVerification()
    {
        return $this->container['security_code_verification'];
    }

    /**
     * Sets security_code_verification
     *
     * @param string|null $security_code_verification Details the results of the Security Code Verification checks.
     *
     * @return self
     */
    public function setSecurityCodeVerification($security_code_verification, $deserialize = false)
    {
        $this->container['security_code_verification'] = $security_code_verification;

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
     * @param string|null $source The ID of the `Payment Instrument` that will be debited and performing the `Transfer`.
     *
     * @return self
     */
    public function setSource($source, $deserialize = false)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state The stauts of the `Transfer`.
     *
     * @return self
     */
    public function setState($state, $deserialize = false)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

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
     * @param string|null $statement_descriptor <li>The description of the seller that appears on the buyer's bank or card statement.</li><li><kbd>statement_descriptors</kbd> for `Transfers` in <strong>live</strong> enviroments will have a <kbd>FI*</kbd> prefix.
     *
     * @return self
     */
    public function setStatementDescriptor($statement_descriptor, $deserialize = false)
    {
        $this->container['statement_descriptor'] = $statement_descriptor;

        return $this;
    }

    /**
     * Gets subtype
     *
     * @return string|null
     */
    public function getSubtype()
    {
        return $this->container['subtype'];
    }

    /**
     * Sets subtype
     *
     * @param string|null $subtype Additional information describing the `payment_type`.
     *
     * @return self
     */
    public function setSubtype($subtype, $deserialize = false)
    {
        $allowedValues = $this->getSubtypeAllowableValues();
        if (!is_null($subtype) && !in_array($subtype, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'subtype', must be one of '%s'",
                    $subtype,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['subtype'] = $subtype;

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
     * Gets trace_id
     *
     * @return string|null
     */
    public function getTraceId()
    {
        return $this->container['trace_id'];
    }

    /**
     * Sets trace_id
     *
     * @param string|null $trace_id Trace ID of the `Transfer`. The processor sends back the `trace_id` so you can track the `Transfer` end-to-end.
     *
     * @return self
     */
    public function setTraceId($trace_id, $deserialize = false)
    {
        $this->container['trace_id'] = $trace_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of `Transfer`.
     *
     * @return self
     */
    public function setType($type, $deserialize = false)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets _links
     *
     * @return \Finix\Model\TransferLinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \Finix\Model\TransferLinks|null $_links _links
     *
     * @return self
     */
    public function setLinks($_links, $deserialize = false)
    {
        $this->container['_links'] = $_links;

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



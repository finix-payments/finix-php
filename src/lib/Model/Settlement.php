<?php
/**
 * Settlement
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
 * Settlement Class Doc Comment
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
class Settlement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Settlement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'application' => 'string',
        'currency' => '\Finix\Model\Currency',
        'destination' => 'string',
        'funds_flow' => 'string',
        'identity' => 'string',
        'merchant_id' => 'string',
        'net_amount' => 'int',
        'payment_type' => 'string',
        'processor' => 'string',
        'status' => 'string',
        'tags' => 'array<string,string>',
        'total_amount' => 'int',
        'total_fee' => 'int',
        'total_fees' => 'int',
        'type' => 'string',
        '_links' => '\Finix\Model\SettlementLinks'
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
        'application' => null,
        'currency' => null,
        'destination' => null,
        'funds_flow' => null,
        'identity' => null,
        'merchant_id' => null,
        'net_amount' => null,
        'payment_type' => null,
        'processor' => null,
        'status' => null,
        'tags' => null,
        'total_amount' => null,
        'total_fee' => null,
        'total_fees' => null,
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
        'application' => 'application',
        'currency' => 'currency',
        'destination' => 'destination',
        'funds_flow' => 'funds_flow',
        'identity' => 'identity',
        'merchant_id' => 'merchant_id',
        'net_amount' => 'net_amount',
        'payment_type' => 'payment_type',
        'processor' => 'processor',
        'status' => 'status',
        'tags' => 'tags',
        'total_amount' => 'total_amount',
        'total_fee' => 'total_fee',
        'total_fees' => 'total_fees',
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
        'application' => 'setApplication',
        'currency' => 'setCurrency',
        'destination' => 'setDestination',
        'funds_flow' => 'setFundsFlow',
        'identity' => 'setIdentity',
        'merchant_id' => 'setMerchantId',
        'net_amount' => 'setNetAmount',
        'payment_type' => 'setPaymentType',
        'processor' => 'setProcessor',
        'status' => 'setStatus',
        'tags' => 'setTags',
        'total_amount' => 'setTotalAmount',
        'total_fee' => 'setTotalFee',
        'total_fees' => 'setTotalFees',
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
        'application' => 'getApplication',
        'currency' => 'getCurrency',
        'destination' => 'getDestination',
        'funds_flow' => 'getFundsFlow',
        'identity' => 'getIdentity',
        'merchant_id' => 'getMerchantId',
        'net_amount' => 'getNetAmount',
        'payment_type' => 'getPaymentType',
        'processor' => 'getProcessor',
        'status' => 'getStatus',
        'tags' => 'getTags',
        'total_amount' => 'getTotalAmount',
        'total_fee' => 'getTotalFee',
        'total_fees' => 'getTotalFees',
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

    public const STATUS_APPROVED = 'APPROVED';
    public const STATUS_AWAITING_APPROVAL = 'AWAITING_APPROVAL';
    public const STATUS_PENDING = 'PENDING';
    public const TYPE_MERCHANT_REVENUE = 'MERCHANT_REVENUE';
    public const TYPE_PLATFORM_FEE = 'PLATFORM_FEE';
    public const TYPE_PARTNER_FEE = 'PARTNER_FEE';
    public const TYPE_NOOP = 'NOOP';
    public const TYPE_MERCHANT = 'MERCHANT';
    public const TYPE_APPLICATION = 'APPLICATION';
    public const TYPE_PLATFORM = 'PLATFORM';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_APPROVED,
            self::STATUS_AWAITING_APPROVAL,
            self::STATUS_PENDING,
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
            self::TYPE_MERCHANT_REVENUE,
            self::TYPE_PLATFORM_FEE,
            self::TYPE_PARTNER_FEE,
            self::TYPE_NOOP,
            self::TYPE_MERCHANT,
            self::TYPE_APPLICATION,
            self::TYPE_PLATFORM,
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
        $this->container['application'] = $data['application'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['destination'] = $data['destination'] ?? null;
        $this->container['funds_flow'] = $data['funds_flow'] ?? null;
        $this->container['identity'] = $data['identity'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['net_amount'] = $data['net_amount'] ?? null;
        $this->container['payment_type'] = $data['payment_type'] ?? null;
        $this->container['processor'] = $data['processor'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
        $this->container['total_fee'] = $data['total_fee'] ?? null;
        $this->container['total_fees'] = $data['total_fees'] ?? null;
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * @param string|null $id The ID of the `Settlement` resource.
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
     * @param string|null $application The ID of the `Application` resource the `Settlement` was created under.
     *
     * @return self
     */
    public function setApplication($application, $deserialize = false)
    {
        $this->container['application'] = $application;

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
     * Gets funds_flow
     *
     * @return string|null
     */
    public function getFundsFlow()
    {
        return $this->container['funds_flow'];
    }

    /**
     * Sets funds_flow
     *
     * @param string|null $funds_flow Details how funds will be dispersed in the `Funding Transfer` (usually **null**).
     *
     * @return self
     */
    public function setFundsFlow($funds_flow, $deserialize = false)
    {
        $this->container['funds_flow'] = $funds_flow;

        return $this;
    }

    /**
     * Gets identity
     *
     * @return string|null
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param string|null $identity The ID of the `Identity` used to create the `Settlement` resource.
     *
     * @return self
     */
    public function setIdentity($identity, $deserialize = false)
    {
        $this->container['identity'] = $identity;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string|null
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string|null $merchant_id The ID of the `Merchant` used to create the `Settlement` resource.
     *
     * @return self
     */
    public function setMerchantId($merchant_id, $deserialize = false)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets net_amount
     *
     * @return int|null
     */
    public function getNetAmount()
    {
        return $this->container['net_amount'];
    }

    /**
     * Sets net_amount
     *
     * @param int|null $net_amount The amount in cents that will be deposited into the merchant's bank account.
     *
     * @return self
     */
    public function setNetAmount($net_amount, $deserialize = false)
    {
        $this->container['net_amount'] = $net_amount;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string|null $payment_type The type of `Payment Instrument` used in the `Funding Transfer` (or the original payment).
     *
     * @return self
     */
    public function setPaymentType($payment_type, $deserialize = false)
    {
        $this->container['payment_type'] = $payment_type;

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
     * @param string|null $processor Name of the `Settlement` processor.
     *
     * @return self
     */
    public function setProcessor($processor, $deserialize = false)
    {
        $this->container['processor'] = $processor;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status of the `Settlement`. Available values include:<ul><li>**PENDING**<li>**AWAITING_APPROVAL**<li>**APPROVED**.</ul> Merchants only receive payouts when `Settlements` are **APPROVED** and receive the resulting funding `Transfer` . For more information, see [Payouts](/guides/payouts/).
     *
     * @return self
     */
    public function setStatus($status, $deserialize = false)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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
     * Gets total_amount
     *
     * @return int|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param int|null $total_amount Total amount of the `Settlement` (in cents).
     *
     * @return self
     */
    public function setTotalAmount($total_amount, $deserialize = false)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets total_fee
     *
     * @return int|null
     */
    public function getTotalFee()
    {
        return $this->container['total_fee'];
    }

    /**
     * Sets total_fee
     *
     * @param int|null $total_fee Sum of the fees in the `Settlement`.
     *
     * @return self
     */
    public function setTotalFee($total_fee, $deserialize = false)
    {
        $this->container['total_fee'] = $total_fee;

        return $this;
    }

    /**
     * Gets total_fees
     *
     * @return int|null
     */
    public function getTotalFees()
    {
        return $this->container['total_fees'];
    }

    /**
     * Sets total_fees
     *
     * @param int|null $total_fees Sum of the fees  (including Subcription Billing) in the `Settlement`.
     *
     * @return self
     */
    public function setTotalFees($total_fees, $deserialize = false)
    {
        $this->container['total_fees'] = $total_fees;

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
     * @param string|null $type Type of `Settlement`.
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
     * @return \Finix\Model\SettlementLinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \Finix\Model\SettlementLinks|null $_links _links
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



<?php
/**
 * CreateFeeRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Finix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Finix API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2022-02-01
 * Contact: support@finixpayments.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Finix\Model;

use \ArrayAccess;
use \Finix\ObjectSerializer;

/**
 * CreateFeeRequest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateFeeRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateFeeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tags' => 'array<string,string>',
        'amount' => 'int',
        'currency' => '\Finix\Model\Currency',
        'label' => 'string',
        'fee_subtype' => 'string',
        'fee_type' => '\Finix\Model\FeeType',
        'linked_id' => 'string',
        'linked_type' => 'string',
        'merchant_id' => 'string',
        'settlement_delay_days' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tags' => null,
        'amount' => 'int64',
        'currency' => null,
        'label' => null,
        'fee_subtype' => null,
        'fee_type' => null,
        'linked_id' => null,
        'linked_type' => null,
        'merchant_id' => null,
        'settlement_delay_days' => null
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
        'tags' => 'tags',
        'amount' => 'amount',
        'currency' => 'currency',
        'label' => 'label',
        'fee_subtype' => 'fee_subtype',
        'fee_type' => 'fee_type',
        'linked_id' => 'linked_id',
        'linked_type' => 'linked_type',
        'merchant_id' => 'merchant_id',
        'settlement_delay_days' => 'settlement_delay_days'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tags' => 'setTags',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'label' => 'setLabel',
        'fee_subtype' => 'setFeeSubtype',
        'fee_type' => 'setFeeType',
        'linked_id' => 'setLinkedId',
        'linked_type' => 'setLinkedType',
        'merchant_id' => 'setMerchantId',
        'settlement_delay_days' => 'setSettlementDelayDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tags' => 'getTags',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'label' => 'getLabel',
        'fee_subtype' => 'getFeeSubtype',
        'fee_type' => 'getFeeType',
        'linked_id' => 'getLinkedId',
        'linked_type' => 'getLinkedType',
        'merchant_id' => 'getMerchantId',
        'settlement_delay_days' => 'getSettlementDelayDays'
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

    public const FEE_SUBTYPE_CUSTOM = 'CUSTOM';
    public const LINKED_TYPE_APPLICATION = 'APPLICATION';
    public const LINKED_TYPE_PLATFORM = 'PLATFORM';
    public const LINKED_TYPE_SUBSCRIPTION = 'SUBSCRIPTION';
    public const LINKED_TYPE_TRANSFER = 'TRANSFER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeeSubtypeAllowableValues()
    {
        return [
            self::FEE_SUBTYPE_CUSTOM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLinkedTypeAllowableValues()
    {
        return [
            self::LINKED_TYPE_APPLICATION,
            self::LINKED_TYPE_PLATFORM,
            self::LINKED_TYPE_SUBSCRIPTION,
            self::LINKED_TYPE_TRANSFER,
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
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['fee_subtype'] = $data['fee_subtype'] ?? null;
        $this->container['fee_type'] = $data['fee_type'] ?? null;
        $this->container['linked_id'] = $data['linked_id'] ?? null;
        $this->container['linked_type'] = $data['linked_type'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['settlement_delay_days'] = $data['settlement_delay_days'] ?? null;
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
        if ($this->container['fee_subtype'] === null) {
            $invalidProperties[] = "'fee_subtype' can't be null";
        }
        $allowedValues = $this->getFeeSubtypeAllowableValues();
        if (!is_null($this->container['fee_subtype']) && !in_array($this->container['fee_subtype'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fee_subtype', must be one of '%s'",
                $this->container['fee_subtype'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fee_type'] === null) {
            $invalidProperties[] = "'fee_type' can't be null";
        }
        $allowedValues = $this->getLinkedTypeAllowableValues();
        if (!is_null($this->container['linked_type']) && !in_array($this->container['linked_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'linked_type', must be one of '%s'",
                $this->container['linked_type'],
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
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label The display name of the `Fee` that can be used for filtering purposes.
     *
     * @return self
     */
    public function setLabel($label, $deserialize = false)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets fee_subtype
     *
     * @return string
     */
    public function getFeeSubtype()
    {
        return $this->container['fee_subtype'];
    }

    /**
     * Sets fee_subtype
     *
     * @param string $fee_subtype Subtype of the fee. Set to **CUSTOM**.
     *
     * @return self
     */
    public function setFeeSubtype($fee_subtype, $deserialize = false)
    {
        $allowedValues = $this->getFeeSubtypeAllowableValues();
        if (!in_array($fee_subtype, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fee_subtype', must be one of '%s'",
                    $fee_subtype,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fee_subtype'] = $fee_subtype;

        return $this;
    }

    /**
     * Gets fee_type
     *
     * @return \Finix\Model\FeeType
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type
     *
     * @param \Finix\Model\FeeType $fee_type fee_type
     *
     * @return self
     */
    public function setFeeType($fee_type, $deserialize = false)
    {
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets linked_id
     *
     * @return string|null
     */
    public function getLinkedId()
    {
        return $this->container['linked_id'];
    }

    /**
     * Sets linked_id
     *
     * @param string|null $linked_id ID of the linked resource
     *
     * @return self
     */
    public function setLinkedId($linked_id, $deserialize = false)
    {
        $this->container['linked_id'] = $linked_id;

        return $this;
    }

    /**
     * Gets linked_type
     *
     * @return string|null
     */
    public function getLinkedType()
    {
        return $this->container['linked_type'];
    }

    /**
     * Sets linked_type
     *
     * @param string|null $linked_type The type of entity the fee is linked to (**null** by default).
     *
     * @return self
     */
    public function setLinkedType($linked_type, $deserialize = false)
    {
        $allowedValues = $this->getLinkedTypeAllowableValues();
        if (!is_null($linked_type) && !in_array($linked_type, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'linked_type', must be one of '%s'",
                    $linked_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['linked_type'] = $linked_type;

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
     * @param string|null $merchant_id The ID of the resource.
     *
     * @return self
     */
    public function setMerchantId($merchant_id, $deserialize = false)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets settlement_delay_days
     *
     * @return int|null
     */
    public function getSettlementDelayDays()
    {
        return $this->container['settlement_delay_days'];
    }

    /**
     * Sets settlement_delay_days
     *
     * @param int|null $settlement_delay_days Delays in days, when the fee will be submitted for settlement.
     *
     * @return self
     */
    public function setSettlementDelayDays($settlement_delay_days, $deserialize = false)
    {
        $this->container['settlement_delay_days'] = $settlement_delay_days;

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


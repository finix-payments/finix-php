<?php
/**
 * SubscriptionAmount
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
 * SubscriptionAmount Class Doc Comment
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
class SubscriptionAmount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscriptionAmount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'amount_type' => 'string',
        'created_by' => 'string',
        'fee_amount_data' => '\Finix\Model\SubscriptionAmountFeeAmountData',
        'nickname' => 'string',
        'subscription_schedule' => 'string',
        'tags' => 'array<string,string>',
        '_links' => '\Finix\Model\SubscriptionAmountLinks'
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
        'amount_type' => null,
        'created_by' => null,
        'fee_amount_data' => null,
        'nickname' => null,
        'subscription_schedule' => null,
        'tags' => null,
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
        'amount_type' => 'amount_type',
        'created_by' => 'created_by',
        'fee_amount_data' => 'fee_amount_data',
        'nickname' => 'nickname',
        'subscription_schedule' => 'subscription_schedule',
        'tags' => 'tags',
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
        'amount_type' => 'setAmountType',
        'created_by' => 'setCreatedBy',
        'fee_amount_data' => 'setFeeAmountData',
        'nickname' => 'setNickname',
        'subscription_schedule' => 'setSubscriptionSchedule',
        'tags' => 'setTags',
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
        'amount_type' => 'getAmountType',
        'created_by' => 'getCreatedBy',
        'fee_amount_data' => 'getFeeAmountData',
        'nickname' => 'getNickname',
        'subscription_schedule' => 'getSubscriptionSchedule',
        'tags' => 'getTags',
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

    public const AMOUNT_TYPE_FEE = 'FEE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAmountTypeAllowableValues()
    {
        return [
            self::AMOUNT_TYPE_FEE,
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
        $this->container['amount_type'] = $data['amount_type'] ?? null;
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['fee_amount_data'] = $data['fee_amount_data'] ?? null;
        $this->container['nickname'] = $data['nickname'] ?? null;
        $this->container['subscription_schedule'] = $data['subscription_schedule'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
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

        if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getAmountTypeAllowableValues();
        if (!is_null($this->container['amount_type']) && !in_array($this->container['amount_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'amount_type', must be one of '%s'",
                $this->container['amount_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['created_by']) && (mb_strlen($this->container['created_by']) < 1)) {
            $invalidProperties[] = "invalid value for 'created_by', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['subscription_schedule']) && (mb_strlen($this->container['subscription_schedule']) < 1)) {
            $invalidProperties[] = "invalid value for 'subscription_schedule', the character length must be bigger than or equal to 1.";
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
     * @param string|null $id ID of the `Subscription Amount`.
     *
     * @return self
     */
    public function setId($id, $deserialize = false)
    {

        if (!is_null($id) && (mb_strlen($id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id when calling SubscriptionAmount., must be bigger than or equal to 1.');
        }
        

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
     * Gets amount_type
     *
     * @return string|null
     */
    public function getAmountType()
    {
        return $this->container['amount_type'];
    }

    /**
     * Sets amount_type
     *
     * @param string|null $amount_type `Subscription Amount` type. The only type supported as of now is **FEE**.
     *
     * @return self
     */
    public function setAmountType($amount_type, $deserialize = false)
    {
        $allowedValues = $this->getAmountTypeAllowableValues();
        if (!is_null($amount_type) && !in_array($amount_type, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'amount_type', must be one of '%s'",
                    $amount_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['amount_type'] = $amount_type;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string|null $created_by The ID of the `User` that created the `Subscription Amount`.
     *
     * @return self
     */
    public function setCreatedBy($created_by, $deserialize = false)
    {

        if (!is_null($created_by) && (mb_strlen($created_by) < 1)) {
            throw new \InvalidArgumentException('invalid length for $created_by when calling SubscriptionAmount., must be bigger than or equal to 1.');
        }
        

        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets fee_amount_data
     *
     * @return \Finix\Model\SubscriptionAmountFeeAmountData|null
     */
    public function getFeeAmountData()
    {
        return $this->container['fee_amount_data'];
    }

    /**
     * Sets fee_amount_data
     *
     * @param \Finix\Model\SubscriptionAmountFeeAmountData|null $fee_amount_data fee_amount_data
     *
     * @return self
     */
    public function setFeeAmountData($fee_amount_data, $deserialize = false)
    {
        $this->container['fee_amount_data'] = $fee_amount_data;

        return $this;
    }

    /**
     * Gets nickname
     *
     * @return string|null
     */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
     * Sets nickname
     *
     * @param string|null $nickname Human readable name.
     *
     * @return self
     */
    public function setNickname($nickname, $deserialize = false)
    {
        $this->container['nickname'] = $nickname;

        return $this;
    }

    /**
     * Gets subscription_schedule
     *
     * @return string|null
     */
    public function getSubscriptionSchedule()
    {
        return $this->container['subscription_schedule'];
    }

    /**
     * Sets subscription_schedule
     *
     * @param string|null $subscription_schedule ID of the `Subscription Schedule`.
     *
     * @return self
     */
    public function setSubscriptionSchedule($subscription_schedule, $deserialize = false)
    {

        if (!is_null($subscription_schedule) && (mb_strlen($subscription_schedule) < 1)) {
            throw new \InvalidArgumentException('invalid length for $subscription_schedule when calling SubscriptionAmount., must be bigger than or equal to 1.');
        }
        

        $this->container['subscription_schedule'] = $subscription_schedule;

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
     * Gets _links
     *
     * @return \Finix\Model\SubscriptionAmountLinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \Finix\Model\SubscriptionAmountLinks|null $_links _links
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



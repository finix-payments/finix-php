<?php
/**
 * SubscriptionSchedule
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
 * SubscriptionSchedule Class Doc Comment
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
class SubscriptionSchedule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscriptionSchedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'created_by' => 'string',
        'fixed_time_interval_offset' => '\Finix\Model\SubscriptionScheduleFixedTimeIntervalOffset',
        'line_item_type' => 'string',
        'nickname' => 'string',
        'period_offset' => '\Finix\Model\SubscriptionSchedulePeriodOffset',
        'subscription_type' => 'string',
        'tags' => 'array<string,string>',
        '_links' => '\Finix\Model\SubscriptionScheduleLinks'
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
        'created_by' => null,
        'fixed_time_interval_offset' => null,
        'line_item_type' => null,
        'nickname' => null,
        'period_offset' => null,
        'subscription_type' => null,
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
        'created_by' => 'created_by',
        'fixed_time_interval_offset' => 'fixed_time_interval_offset',
        'line_item_type' => 'line_item_type',
        'nickname' => 'nickname',
        'period_offset' => 'period_offset',
        'subscription_type' => 'subscription_type',
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
        'created_by' => 'setCreatedBy',
        'fixed_time_interval_offset' => 'setFixedTimeIntervalOffset',
        'line_item_type' => 'setLineItemType',
        'nickname' => 'setNickname',
        'period_offset' => 'setPeriodOffset',
        'subscription_type' => 'setSubscriptionType',
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
        'created_by' => 'getCreatedBy',
        'fixed_time_interval_offset' => 'getFixedTimeIntervalOffset',
        'line_item_type' => 'getLineItemType',
        'nickname' => 'getNickname',
        'period_offset' => 'getPeriodOffset',
        'subscription_type' => 'getSubscriptionType',
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

    public const LINE_ITEM_TYPE_FEE = 'FEE';
    public const SUBSCRIPTION_TYPE_PERIODIC_MONTHLY = 'PERIODIC_MONTHLY';
    public const SUBSCRIPTION_TYPE_PERIODIC_YEARLY = 'PERIODIC_YEARLY';
    public const SUBSCRIPTION_TYPE_FIXED_TIME_INTERVAL = 'FIXED_TIME_INTERVAL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLineItemTypeAllowableValues()
    {
        return [
            self::LINE_ITEM_TYPE_FEE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubscriptionTypeAllowableValues()
    {
        return [
            self::SUBSCRIPTION_TYPE_PERIODIC_MONTHLY,
            self::SUBSCRIPTION_TYPE_PERIODIC_YEARLY,
            self::SUBSCRIPTION_TYPE_FIXED_TIME_INTERVAL,
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
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['fixed_time_interval_offset'] = $data['fixed_time_interval_offset'] ?? null;
        $this->container['line_item_type'] = $data['line_item_type'] ?? null;
        $this->container['nickname'] = $data['nickname'] ?? null;
        $this->container['period_offset'] = $data['period_offset'] ?? null;
        $this->container['subscription_type'] = $data['subscription_type'] ?? null;
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

        if (!is_null($this->container['created_by']) && (mb_strlen($this->container['created_by']) < 1)) {
            $invalidProperties[] = "invalid value for 'created_by', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getLineItemTypeAllowableValues();
        if (!is_null($this->container['line_item_type']) && !in_array($this->container['line_item_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'line_item_type', must be one of '%s'",
                $this->container['line_item_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['line_item_type']) && (mb_strlen($this->container['line_item_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'line_item_type', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getSubscriptionTypeAllowableValues();
        if (!is_null($this->container['subscription_type']) && !in_array($this->container['subscription_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'subscription_type', must be one of '%s'",
                $this->container['subscription_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['subscription_type']) && (mb_strlen($this->container['subscription_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'subscription_type', the character length must be bigger than or equal to 1.";
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
     * @param string|null $id ID of the `Subscription Schedule`.
     *
     * @return self
     */
    public function setId($id, $deserialize = false)
    {

        if (!is_null($id) && (mb_strlen($id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id when calling SubscriptionSchedule., must be bigger than or equal to 1.');
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
     * @param string|null $created_by `User` ID who created the schedule.
     *
     * @return self
     */
    public function setCreatedBy($created_by, $deserialize = false)
    {

        if (!is_null($created_by) && (mb_strlen($created_by) < 1)) {
            throw new \InvalidArgumentException('invalid length for $created_by when calling SubscriptionSchedule., must be bigger than or equal to 1.');
        }
        

        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets fixed_time_interval_offset
     *
     * @return \Finix\Model\SubscriptionScheduleFixedTimeIntervalOffset|null
     */
    public function getFixedTimeIntervalOffset()
    {
        return $this->container['fixed_time_interval_offset'];
    }

    /**
     * Sets fixed_time_interval_offset
     *
     * @param \Finix\Model\SubscriptionScheduleFixedTimeIntervalOffset|null $fixed_time_interval_offset fixed_time_interval_offset
     *
     * @return self
     */
    public function setFixedTimeIntervalOffset($fixed_time_interval_offset, $deserialize = false)
    {
        $this->container['fixed_time_interval_offset'] = $fixed_time_interval_offset;

        return $this;
    }

    /**
     * Gets line_item_type
     *
     * @return string|null
     */
    public function getLineItemType()
    {
        return $this->container['line_item_type'];
    }

    /**
     * Sets line_item_type
     *
     * @param string|null $line_item_type `Subscription Schedule` type. For subscriptions, the type is **FEE**.
     *
     * @return self
     */
    public function setLineItemType($line_item_type, $deserialize = false)
    {
        $allowedValues = $this->getLineItemTypeAllowableValues();
        if (!is_null($line_item_type) && !in_array($line_item_type, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'line_item_type', must be one of '%s'",
                    $line_item_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (!is_null($line_item_type) && (mb_strlen($line_item_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $line_item_type when calling SubscriptionSchedule., must be bigger than or equal to 1.');
        }
        

        $this->container['line_item_type'] = $line_item_type;

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
     * Gets period_offset
     *
     * @return \Finix\Model\SubscriptionSchedulePeriodOffset|null
     */
    public function getPeriodOffset()
    {
        return $this->container['period_offset'];
    }

    /**
     * Sets period_offset
     *
     * @param \Finix\Model\SubscriptionSchedulePeriodOffset|null $period_offset period_offset
     *
     * @return self
     */
    public function setPeriodOffset($period_offset, $deserialize = false)
    {
        $this->container['period_offset'] = $period_offset;

        return $this;
    }

    /**
     * Gets subscription_type
     *
     * @return string|null
     */
    public function getSubscriptionType()
    {
        return $this->container['subscription_type'];
    }

    /**
     * Sets subscription_type
     *
     * @param string|null $subscription_type `Subscription Schedule` type.
     *
     * @return self
     */
    public function setSubscriptionType($subscription_type, $deserialize = false)
    {
        $allowedValues = $this->getSubscriptionTypeAllowableValues();
        if (!is_null($subscription_type) && !in_array($subscription_type, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'subscription_type', must be one of '%s'",
                    $subscription_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (!is_null($subscription_type) && (mb_strlen($subscription_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $subscription_type when calling SubscriptionSchedule., must be bigger than or equal to 1.');
        }
        

        $this->container['subscription_type'] = $subscription_type;

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
     * @return \Finix\Model\SubscriptionScheduleLinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \Finix\Model\SubscriptionScheduleLinks|null $_links _links
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



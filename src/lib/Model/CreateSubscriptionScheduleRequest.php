<?php
/**
 * CreateSubscriptionScheduleRequest
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
 * CreateSubscriptionScheduleRequest Class Doc Comment
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
class CreateSubscriptionScheduleRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateSubscriptionScheduleRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fixed_time_interval_offset' => '\Finix\Model\CreateSubscriptionScheduleRequestFixedTimeIntervalOffset',
        'line_item_type' => 'string',
        'nickname' => 'string',
        'period_offset' => '\Finix\Model\CreateSubscriptionScheduleRequestPeriodOffset',
        'subscription_type' => 'string',
        'tags' => 'array<string,string>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fixed_time_interval_offset' => null,
        'line_item_type' => null,
        'nickname' => null,
        'period_offset' => null,
        'subscription_type' => null,
        'tags' => null
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
        'fixed_time_interval_offset' => 'fixed_time_interval_offset',
        'line_item_type' => 'line_item_type',
        'nickname' => 'nickname',
        'period_offset' => 'period_offset',
        'subscription_type' => 'subscription_type',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fixed_time_interval_offset' => 'setFixedTimeIntervalOffset',
        'line_item_type' => 'setLineItemType',
        'nickname' => 'setNickname',
        'period_offset' => 'setPeriodOffset',
        'subscription_type' => 'setSubscriptionType',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fixed_time_interval_offset' => 'getFixedTimeIntervalOffset',
        'line_item_type' => 'getLineItemType',
        'nickname' => 'getNickname',
        'period_offset' => 'getPeriodOffset',
        'subscription_type' => 'getSubscriptionType',
        'tags' => 'getTags'
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
    public const SUBSCRIPTION_TYPE_FIXED_TIME_INTERVAL = 'FIXED_TIME_INTERVAL';
    public const SUBSCRIPTION_TYPE_PERIODIC_MONTHLY = 'PERIODIC_MONTHLY';
    public const SUBSCRIPTION_TYPE_PERIODIC_YEARLY = 'PERIODIC_YEARLY';

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
            self::SUBSCRIPTION_TYPE_FIXED_TIME_INTERVAL,
            self::SUBSCRIPTION_TYPE_PERIODIC_MONTHLY,
            self::SUBSCRIPTION_TYPE_PERIODIC_YEARLY,
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
        $this->container['fixed_time_interval_offset'] = $data['fixed_time_interval_offset'] ?? null;
        $this->container['line_item_type'] = $data['line_item_type'] ?? null;
        $this->container['nickname'] = $data['nickname'] ?? null;
        $this->container['period_offset'] = $data['period_offset'] ?? null;
        $this->container['subscription_type'] = $data['subscription_type'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['line_item_type'] === null) {
            $invalidProperties[] = "'line_item_type' can't be null";
        }
        $allowedValues = $this->getLineItemTypeAllowableValues();
        if (!is_null($this->container['line_item_type']) && !in_array($this->container['line_item_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'line_item_type', must be one of '%s'",
                $this->container['line_item_type'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['line_item_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'line_item_type', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['nickname'] === null) {
            $invalidProperties[] = "'nickname' can't be null";
        }
        if ($this->container['subscription_type'] === null) {
            $invalidProperties[] = "'subscription_type' can't be null";
        }
        $allowedValues = $this->getSubscriptionTypeAllowableValues();
        if (!is_null($this->container['subscription_type']) && !in_array($this->container['subscription_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'subscription_type', must be one of '%s'",
                $this->container['subscription_type'],
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
     * Gets fixed_time_interval_offset
     *
     * @return \Finix\Model\CreateSubscriptionScheduleRequestFixedTimeIntervalOffset|null
     */
    public function getFixedTimeIntervalOffset()
    {
        return $this->container['fixed_time_interval_offset'];
    }

    /**
     * Sets fixed_time_interval_offset
     *
     * @param \Finix\Model\CreateSubscriptionScheduleRequestFixedTimeIntervalOffset|null $fixed_time_interval_offset fixed_time_interval_offset
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
     * @return string
     */
    public function getLineItemType()
    {
        return $this->container['line_item_type'];
    }

    /**
     * Sets line_item_type
     *
     * @param string $line_item_type Subscription Schedule type. For subscriptions, the type is **FEE**.
     *
     * @return self
     */
    public function setLineItemType($line_item_type, $deserialize = false)
    {
        $allowedValues = $this->getLineItemTypeAllowableValues();
        if (!in_array($line_item_type, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'line_item_type', must be one of '%s'",
                    $line_item_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if ((mb_strlen($line_item_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $line_item_type when calling CreateSubscriptionScheduleRequest., must be bigger than or equal to 1.');
        }
        

        $this->container['line_item_type'] = $line_item_type;

        return $this;
    }

    /**
     * Gets nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
     * Sets nickname
     *
     * @param string $nickname Human readable name.
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
     * @return \Finix\Model\CreateSubscriptionScheduleRequestPeriodOffset|null
     */
    public function getPeriodOffset()
    {
        return $this->container['period_offset'];
    }

    /**
     * Sets period_offset
     *
     * @param \Finix\Model\CreateSubscriptionScheduleRequestPeriodOffset|null $period_offset period_offset
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
     * @return string
     */
    public function getSubscriptionType()
    {
        return $this->container['subscription_type'];
    }

    /**
     * Sets subscription_type
     *
     * @param string $subscription_type Specify the type of schedule: - **FIXED\\_TIME\\_INTERVAL**: Charges a Merchant on a fixed hourly interval. - **PERIODIC\\_MONTHLY**: Charges a Merchant once a month on a specific day. - **PERIODIC\\_YEARLY**: Charges a Merchant once a year on a specific day and month.
     *
     * @return self
     */
    public function setSubscriptionType($subscription_type, $deserialize = false)
    {
        $allowedValues = $this->getSubscriptionTypeAllowableValues();
        if (!in_array($subscription_type, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'subscription_type', must be one of '%s'",
                    $subscription_type,
                    implode("', '", $allowedValues)
                )
            );
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



<?php
/**
 * CreateSubscriptionEnrollmentRequest
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
 * CreateSubscriptionEnrollmentRequest Class Doc Comment
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
class CreateSubscriptionEnrollmentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateSubscriptionEnrollmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ended_at' => 'string',
        'merchant' => 'string',
        'nickname' => 'string',
        'started_at' => 'string',
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
        'ended_at' => null,
        'merchant' => null,
        'nickname' => null,
        'started_at' => null,
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
        'ended_at' => 'ended_at',
        'merchant' => 'merchant',
        'nickname' => 'nickname',
        'started_at' => 'started_at',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ended_at' => 'setEndedAt',
        'merchant' => 'setMerchant',
        'nickname' => 'setNickname',
        'started_at' => 'setStartedAt',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ended_at' => 'getEndedAt',
        'merchant' => 'getMerchant',
        'nickname' => 'getNickname',
        'started_at' => 'getStartedAt',
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
        $this->container['ended_at'] = $data['ended_at'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['nickname'] = $data['nickname'] ?? null;
        $this->container['started_at'] = $data['started_at'] ?? null;
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

        if (!is_null($this->container['ended_at']) && (mb_strlen($this->container['ended_at']) < 1)) {
            $invalidProperties[] = "invalid value for 'ended_at', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['merchant'] === null) {
            $invalidProperties[] = "'merchant' can't be null";
        }
        if ((mb_strlen($this->container['merchant']) < 1)) {
            $invalidProperties[] = "invalid value for 'merchant', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['nickname'] === null) {
            $invalidProperties[] = "'nickname' can't be null";
        }
        if ((mb_strlen($this->container['nickname']) < 1)) {
            $invalidProperties[] = "invalid value for 'nickname', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['started_at'] === null) {
            $invalidProperties[] = "'started_at' can't be null";
        }
        if ((mb_strlen($this->container['started_at']) < 1)) {
            $invalidProperties[] = "invalid value for 'started_at', the character length must be bigger than or equal to 1.";
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
     * Gets ended_at
     *
     * @return string|null
     */
    public function getEndedAt()
    {
        return $this->container['ended_at'];
    }

    /**
     * Sets ended_at
     *
     * @param string|null $ended_at When the `subscription_enrollment` will end in **DateTime** format. If left **null**, the Fee will continue in perpetuity and won't end.
     *
     * @return self
     */
    public function setEndedAt($ended_at, $deserialize = false)
    {

        if (!is_null($ended_at) && (mb_strlen($ended_at) < 1)) {
            throw new \InvalidArgumentException('invalid length for $ended_at when calling CreateSubscriptionEnrollmentRequest., must be bigger than or equal to 1.');
        }
        

        $this->container['ended_at'] = $ended_at;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return string
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param string $merchant ID of the `Merchant` resource.
     *
     * @return self
     */
    public function setMerchant($merchant, $deserialize = false)
    {

        if ((mb_strlen($merchant) < 1)) {
            throw new \InvalidArgumentException('invalid length for $merchant when calling CreateSubscriptionEnrollmentRequest., must be bigger than or equal to 1.');
        }
        

        $this->container['merchant'] = $merchant;

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

        if ((mb_strlen($nickname) < 1)) {
            throw new \InvalidArgumentException('invalid length for $nickname when calling CreateSubscriptionEnrollmentRequest., must be bigger than or equal to 1.');
        }
        

        $this->container['nickname'] = $nickname;

        return $this;
    }

    /**
     * Gets started_at
     *
     * @return string
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     *
     * @param string $started_at When the `subscription_enrollment` will begin in **DateTime** format. The start date must be a future date.
     *
     * @return self
     */
    public function setStartedAt($started_at, $deserialize = false)
    {

        if ((mb_strlen($started_at) < 1)) {
            throw new \InvalidArgumentException('invalid length for $started_at when calling CreateSubscriptionEnrollmentRequest., must be bigger than or equal to 1.');
        }
        

        $this->container['started_at'] = $started_at;

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



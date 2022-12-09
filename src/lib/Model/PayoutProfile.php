<?php
/**
 * PayoutProfile
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
 * PayoutProfile Class Doc Comment
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
class PayoutProfile implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayoutProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'gross' => '\Finix\Model\PayoutProfileGross',
        'linked_id' => 'string',
        'linked_type' => 'string',
        'tags' => 'array<string,string>',
        'type' => 'string',
        '_links' => '\Finix\Model\ListLinks',
        'net' => '\Finix\Model\PayoutProfileNet',
        'custom' => 'object'
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
        'gross' => null,
        'linked_id' => null,
        'linked_type' => null,
        'tags' => null,
        'type' => null,
        '_links' => null,
        'net' => null,
        'custom' => null
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
        'gross' => 'gross',
        'linked_id' => 'linked_id',
        'linked_type' => 'linked_type',
        'tags' => 'tags',
        'type' => 'type',
        '_links' => '_links',
        'net' => 'net',
        'custom' => 'custom'
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
        'gross' => 'setGross',
        'linked_id' => 'setLinkedId',
        'linked_type' => 'setLinkedType',
        'tags' => 'setTags',
        'type' => 'setType',
        '_links' => 'setLinks',
        'net' => 'setNet',
        'custom' => 'setCustom'
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
        'gross' => 'getGross',
        'linked_id' => 'getLinkedId',
        'linked_type' => 'getLinkedType',
        'tags' => 'getTags',
        'type' => 'getType',
        '_links' => 'getLinks',
        'net' => 'getNet',
        'custom' => 'getCustom'
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

    public const TYPE_CUSTOM = 'CUSTOM';
    public const TYPE_GROSS = 'GROSS';
    public const TYPE_NET = 'NET';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CUSTOM,
            self::TYPE_GROSS,
            self::TYPE_NET,
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
        $this->container['gross'] = $data['gross'] ?? null;
        $this->container['linked_id'] = $data['linked_id'] ?? null;
        $this->container['linked_type'] = $data['linked_type'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['_links'] = $data['_links'] ?? null;
        $this->container['net'] = $data['net'] ?? null;
        $this->container['custom'] = $data['custom'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @param string|null $id The ID of the `Payout Profile` resource.
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
     * Gets gross
     *
     * @return \Finix\Model\PayoutProfileGross|null
     */
    public function getGross()
    {
        return $this->container['gross'];
    }

    /**
     * Sets gross
     *
     * @param \Finix\Model\PayoutProfileGross|null $gross gross
     *
     * @return self
     */
    public function setGross($gross, $deserialize = false)
    {
        $this->container['gross'] = $gross;

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
     * @param string|null $linked_id ID of the resource linked to the `Payout Profile`.
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
     * @param string|null $linked_type The type of resource the `Payout Profile` is linked to.
     *
     * @return self
     */
    public function setLinkedType($linked_type, $deserialize = false)
    {
        $this->container['linked_type'] = $linked_type;

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
     * @param string|null $type Configures how fees are calculated and billed from payouts. For more infromation, see [Payout Types](/guides/payouts/#payout-types).
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
     * @return \Finix\Model\ListLinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \Finix\Model\ListLinks|null $_links _links
     *
     * @return self
     */
    public function setLinks($_links, $deserialize = false)
    {
        $this->container['_links'] = $_links;

        return $this;
    }

    /**
     * Gets net
     *
     * @return \Finix\Model\PayoutProfileNet|null
     */
    public function getNet()
    {
        return $this->container['net'];
    }

    /**
     * Sets net
     *
     * @param \Finix\Model\PayoutProfileNet|null $net net
     *
     * @return self
     */
    public function setNet($net, $deserialize = false)
    {
        $this->container['net'] = $net;

        return $this;
    }

    /**
     * Gets custom
     *
     * @return object|null
     */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom
     *
     * @param object|null $custom Details how `Payout Profiles` with type **CUSTOM** are configured. `Payout Profiles` with type **CUSTOM** can be setup with more specific configurations. To configure a **CUSTOM** `Payout Profile` [contact Finix Support](/guides/payouts/#payout-types).
     *
     * @return self
     */
    public function setCustom($custom, $deserialize = false)
    {
        $this->container['custom'] = $custom;

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



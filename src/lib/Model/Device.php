<?php
/**
 * Device
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
 * Device Class Doc Comment
 *
 * @category Class
 * @description &#x60;Device&#x60; resource.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Device implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Device';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'configuration_details' => '\Finix\Model\DeviceConfigDetails',
        'connection' => 'string',
        'description' => 'string',
        'enabled' => 'bool',
        'idle_message' => 'string',
        'merchant' => 'string',
        'model' => 'string',
        'name' => 'string',
        'serial_number' => 'string',
        'tags' => 'array<string,string>',
        '_links' => '\Finix\Model\DeviceLinks'
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
        'configuration_details' => null,
        'connection' => null,
        'description' => null,
        'enabled' => null,
        'idle_message' => null,
        'merchant' => null,
        'model' => null,
        'name' => null,
        'serial_number' => null,
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
        'configuration_details' => 'configuration_details',
        'connection' => 'connection',
        'description' => 'description',
        'enabled' => 'enabled',
        'idle_message' => 'idle_message',
        'merchant' => 'merchant',
        'model' => 'model',
        'name' => 'name',
        'serial_number' => 'serial_number',
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
        'configuration_details' => 'setConfigurationDetails',
        'connection' => 'setConnection',
        'description' => 'setDescription',
        'enabled' => 'setEnabled',
        'idle_message' => 'setIdleMessage',
        'merchant' => 'setMerchant',
        'model' => 'setModel',
        'name' => 'setName',
        'serial_number' => 'setSerialNumber',
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
        'configuration_details' => 'getConfigurationDetails',
        'connection' => 'getConnection',
        'description' => 'getDescription',
        'enabled' => 'getEnabled',
        'idle_message' => 'getIdleMessage',
        'merchant' => 'getMerchant',
        'model' => 'getModel',
        'name' => 'getName',
        'serial_number' => 'getSerialNumber',
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
        $this->container['configuration_details'] = $data['configuration_details'] ?? null;
        $this->container['connection'] = $data['connection'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['idle_message'] = $data['idle_message'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['model'] = $data['model'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['serial_number'] = $data['serial_number'] ?? null;
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
     * @param string|null $id The ID of the activated `Device`.
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
     * Gets configuration_details
     *
     * @return \Finix\Model\DeviceConfigDetails|null
     */
    public function getConfigurationDetails()
    {
        return $this->container['configuration_details'];
    }

    /**
     * Sets configuration_details
     *
     * @param \Finix\Model\DeviceConfigDetails|null $configuration_details configuration_details
     *
     * @return self
     */
    public function setConfigurationDetails($configuration_details, $deserialize = false)
    {
        $this->container['configuration_details'] = $configuration_details;

        return $this;
    }

    /**
     * Gets connection
     *
     * @return string|null
     */
    public function getConnection()
    {
        return $this->container['connection'];
    }

    /**
     * Sets connection
     *
     * @param string|null $connection Details if the `Device` is connected and online. Only returned when `include_connection parameter` provided.
     *
     * @return self
     */
    public function setConnection($connection, $deserialize = false)
    {
        $this->container['connection'] = $connection;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Additional information about device (e.g. self serving terminal).
     *
     * @return self
     */
    public function setDescription($description, $deserialize = false)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled Details if the `Device` resource is enabled. Set to **false** to disable the `Device`.
     *
     * @return self
     */
    public function setEnabled($enabled, $deserialize = false)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets idle_message
     *
     * @return string|null
     */
    public function getIdleMessage()
    {
        return $this->container['idle_message'];
    }

    /**
     * Sets idle_message
     *
     * @param string|null $idle_message The message that diplays on the device after a period of inactivity.
     *
     * @return self
     */
    public function setIdleMessage($idle_message, $deserialize = false)
    {
        $this->container['idle_message'] = $idle_message;

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
     * @param string|null $merchant ID of the `Merchant` resource.
     *
     * @return self
     */
    public function setMerchant($merchant, $deserialize = false)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string|null $model Details the model of the card reader.
     *
     * @return self
     */
    public function setModel($model, $deserialize = false)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the `Device`.
     *
     * @return self
     */
    public function setName($name, $deserialize = false)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets serial_number
     *
     * @return string|null
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param string|null $serial_number Serial number of the device.
     *
     * @return self
     */
    public function setSerialNumber($serial_number, $deserialize = false)
    {
        $this->container['serial_number'] = $serial_number;

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
     * @return \Finix\Model\DeviceLinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \Finix\Model\DeviceLinks|null $_links _links
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



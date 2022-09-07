<?php
/**
 * File
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
 * File Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class File implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'File';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'application_id' => 'string',
        'display_name' => 'string',
        'extension' => 'string',
        'identity_id' => 'string',
        'linked_to' => 'string',
        'linked_type' => 'string',
        'platform_id' => 'string',
        'status' => 'string',
        'tags' => 'array<string,string>',
        'type' => 'string'
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
        'application_id' => null,
        'display_name' => null,
        'extension' => null,
        'identity_id' => null,
        'linked_to' => null,
        'linked_type' => null,
        'platform_id' => null,
        'status' => null,
        'tags' => null,
        'type' => null
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
        'application_id' => 'application_id',
        'display_name' => 'display_name',
        'extension' => 'extension',
        'identity_id' => 'identity_id',
        'linked_to' => 'linked_to',
        'linked_type' => 'linked_type',
        'platform_id' => 'platform_id',
        'status' => 'status',
        'tags' => 'tags',
        'type' => 'type'
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
        'application_id' => 'setApplicationId',
        'display_name' => 'setDisplayName',
        'extension' => 'setExtension',
        'identity_id' => 'setIdentityId',
        'linked_to' => 'setLinkedTo',
        'linked_type' => 'setLinkedType',
        'platform_id' => 'setPlatformId',
        'status' => 'setStatus',
        'tags' => 'setTags',
        'type' => 'setType'
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
        'application_id' => 'getApplicationId',
        'display_name' => 'getDisplayName',
        'extension' => 'getExtension',
        'identity_id' => 'getIdentityId',
        'linked_to' => 'getLinkedTo',
        'linked_type' => 'getLinkedType',
        'platform_id' => 'getPlatformId',
        'status' => 'getStatus',
        'tags' => 'getTags',
        'type' => 'getType'
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
        $this->container['application_id'] = $data['application_id'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['extension'] = $data['extension'] ?? null;
        $this->container['identity_id'] = $data['identity_id'] ?? null;
        $this->container['linked_to'] = $data['linked_to'] ?? null;
        $this->container['linked_type'] = $data['linked_type'] ?? null;
        $this->container['platform_id'] = $data['platform_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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
     * @param string|null $id The ID of the `File` resource.
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
     * Gets application_id
     *
     * @return string|null
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     *
     * @param string|null $application_id The ID of the `Application` that the `File` was created under.
     *
     * @return self
     */
    public function setApplicationId($application_id, $deserialize = false)
    {
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name The name of the `File` object. If you don't provide a name, Finix will name the object with the convention: **FILE_(file_id)**.
     *
     * @return self
     */
    public function setDisplayName($display_name, $deserialize = false)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets extension
     *
     * @return string|null
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param string|null $extension The extension of the file.
     *
     * @return self
     */
    public function setExtension($extension, $deserialize = false)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets identity_id
     *
     * @return string|null
     */
    public function getIdentityId()
    {
        return $this->container['identity_id'];
    }

    /**
     * Sets identity_id
     *
     * @param string|null $identity_id ID of the `Identity` that created the `File`.
     *
     * @return self
     */
    public function setIdentityId($identity_id, $deserialize = false)
    {
        $this->container['identity_id'] = $identity_id;

        return $this;
    }

    /**
     * Gets linked_to
     *
     * @return string|null
     */
    public function getLinkedTo()
    {
        return $this->container['linked_to'];
    }

    /**
     * Sets linked_to
     *
     * @param string|null $linked_to The resource ID the `File` is linked to.
     *
     * @return self
     */
    public function setLinkedTo($linked_to, $deserialize = false)
    {
        $this->container['linked_to'] = $linked_to;

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
     * @param string|null $linked_type Autofills to **Merchant**.
     *
     * @return self
     */
    public function setLinkedType($linked_type, $deserialize = false)
    {
        $this->container['linked_type'] = $linked_type;

        return $this;
    }

    /**
     * Gets platform_id
     *
     * @return string|null
     */
    public function getPlatformId()
    {
        return $this->container['platform_id'];
    }

    /**
     * Sets platform_id
     *
     * @param string|null $platform_id The ID of the `Platform` that the `File` was created under.
     *
     * @return self
     */
    public function setPlatformId($platform_id, $deserialize = false)
    {
        $this->container['platform_id'] = $platform_id;

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
     * @param string|null $status The status of the file's review. The statuses available includes:<br><li><strong>REQUIRES_UPLOAD</strong>: A file still needs to be uploaded to the file object.<br><li><strong>PENDING</strong>: Finix's underwriting team is still reviewing the uploaded files.<br><li><strong>INVALID</strong>: The file couldn't be read.<br><li><strong>UPLOADED</strong>: The file has been uploaded to the resource.
     *
     * @return self
     */
    public function setStatus($status, $deserialize = false)
    {
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
     * @param string|null $type The type of document.
     *
     * @return self
     */
    public function setType($type, $deserialize = false)
    {
        $this->container['type'] = $type;

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



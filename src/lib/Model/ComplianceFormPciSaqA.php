<?php
/**
 * ComplianceFormPciSaqA
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
 * ComplianceFormPciSaqA Class Doc Comment
 *
 * @category Class
 * @description Details used to fille out the PCI Self-Assessment Questionnaire (SAQ).
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ComplianceFormPciSaqA implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ComplianceForm_pci_saq_a';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'signed_at' => 'string',
        'user_agent' => 'string',
        'ip_address' => 'string',
        'is_accepted' => 'bool',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'signed_at' => null,
        'user_agent' => null,
        'ip_address' => null,
        'is_accepted' => null,
        'title' => null
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
        'name' => 'name',
        'signed_at' => 'signed_at',
        'user_agent' => 'user_agent',
        'ip_address' => 'ip_address',
        'is_accepted' => 'is_accepted',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'signed_at' => 'setSignedAt',
        'user_agent' => 'setUserAgent',
        'ip_address' => 'setIpAddress',
        'is_accepted' => 'setIsAccepted',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'signed_at' => 'getSignedAt',
        'user_agent' => 'getUserAgent',
        'ip_address' => 'getIpAddress',
        'is_accepted' => 'getIsAccepted',
        'title' => 'getTitle'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['signed_at'] = $data['signed_at'] ?? null;
        $this->container['user_agent'] = $data['user_agent'] ?? null;
        $this->container['ip_address'] = $data['ip_address'] ?? null;
        $this->container['is_accepted'] = $data['is_accepted'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
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
     * @param string|null $name Name of the person completing (aka attesting to) the `compliance_form`.
     *
     * @return self
     */
    public function setName($name, $deserialize = false)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets signed_at
     *
     * @return string|null
     */
    public function getSignedAt()
    {
        return $this->container['signed_at'];
    }

    /**
     * Sets signed_at
     *
     * @param string|null $signed_at Timestamp of the person attesting to this `compliance_form`.
     *
     * @return self
     */
    public function setSignedAt($signed_at, $deserialize = false)
    {
        $this->container['signed_at'] = $signed_at;

        return $this;
    }

    /**
     * Gets user_agent
     *
     * @return string|null
     */
    public function getUserAgent()
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent
     *
     * @param string|null $user_agent User agent of the person attesting to this `compliance_form`.
     *
     * @return self
     */
    public function setUserAgent($user_agent, $deserialize = false)
    {
        $this->container['user_agent'] = $user_agent;

        return $this;
    }

    /**
     * Gets ip_address
     *
     * @return string|null
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string|null $ip_address IP address of the person attesting to this `compliance_form`.
     *
     * @return self
     */
    public function setIpAddress($ip_address, $deserialize = false)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets is_accepted
     *
     * @return bool|null
     */
    public function getIsAccepted()
    {
        return $this->container['is_accepted'];
    }

    /**
     * Sets is_accepted
     *
     * @param bool|null $is_accepted If all `pci_saq_a` fields are all submitted, `is_accepted` updates to **true**.
     *
     * @return self
     */
    public function setIsAccepted($is_accepted, $deserialize = false)
    {
        $this->container['is_accepted'] = $is_accepted;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Title or role of the person completing (aka attesting to) the `compliance_form`.
     *
     * @return self
     */
    public function setTitle($title, $deserialize = false)
    {
        $this->container['title'] = $title;

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



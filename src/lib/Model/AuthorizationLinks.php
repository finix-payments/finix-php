<?php
/**
 * AuthorizationLinks
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
 * AuthorizationLinks Class Doc Comment
 *
 * @category Class
 * @description For your convenience, every response includes several URLs which link to resources relevant to the request. You can use these &#x60;_links&#x60; to make your follow-up requests and quickly access relevant IDs.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AuthorizationLinks implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Authorization__links';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'application' => '\Finix\Model\ApplicationProfileLinksApplication',
        'device' => '\Finix\Model\AuthorizationLinksDevice',
        'merchant_identity' => '\Finix\Model\AuthorizationLinksMerchantIdentity',
        'self' => '\Finix\Model\ApplicationLinksSelf',
        'transfer' => '\Finix\Model\AuthorizationLinksTransfer'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'application' => null,
        'device' => null,
        'merchant_identity' => null,
        'self' => null,
        'transfer' => null
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
        'application' => 'application',
        'device' => 'device',
        'merchant_identity' => 'merchant_identity',
        'self' => 'self',
        'transfer' => 'transfer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'application' => 'setApplication',
        'device' => 'setDevice',
        'merchant_identity' => 'setMerchantIdentity',
        'self' => 'setSelf',
        'transfer' => 'setTransfer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'application' => 'getApplication',
        'device' => 'getDevice',
        'merchant_identity' => 'getMerchantIdentity',
        'self' => 'getSelf',
        'transfer' => 'getTransfer'
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
        $this->container['application'] = $data['application'] ?? null;
        $this->container['device'] = $data['device'] ?? null;
        $this->container['merchant_identity'] = $data['merchant_identity'] ?? null;
        $this->container['self'] = $data['self'] ?? null;
        $this->container['transfer'] = $data['transfer'] ?? null;
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
     * Gets application
     *
     * @return \Finix\Model\ApplicationProfileLinksApplication|null
     */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
     * Sets application
     *
     * @param \Finix\Model\ApplicationProfileLinksApplication|null $application application
     *
     * @return self
     */
    public function setApplication($application, $deserialize = false)
    {
        $this->container['application'] = $application;

        return $this;
    }

    /**
     * Gets device
     *
     * @return \Finix\Model\AuthorizationLinksDevice|null
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param \Finix\Model\AuthorizationLinksDevice|null $device device
     *
     * @return self
     */
    public function setDevice($device, $deserialize = false)
    {
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets merchant_identity
     *
     * @return \Finix\Model\AuthorizationLinksMerchantIdentity|null
     */
    public function getMerchantIdentity()
    {
        return $this->container['merchant_identity'];
    }

    /**
     * Sets merchant_identity
     *
     * @param \Finix\Model\AuthorizationLinksMerchantIdentity|null $merchant_identity merchant_identity
     *
     * @return self
     */
    public function setMerchantIdentity($merchant_identity, $deserialize = false)
    {
        $this->container['merchant_identity'] = $merchant_identity;

        return $this;
    }

    /**
     * Gets self
     *
     * @return \Finix\Model\ApplicationLinksSelf|null
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param \Finix\Model\ApplicationLinksSelf|null $self self
     *
     * @return self
     */
    public function setSelf($self, $deserialize = false)
    {
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets transfer
     *
     * @return \Finix\Model\AuthorizationLinksTransfer|null
     */
    public function getTransfer()
    {
        return $this->container['transfer'];
    }

    /**
     * Sets transfer
     *
     * @param \Finix\Model\AuthorizationLinksTransfer|null $transfer transfer
     *
     * @return self
     */
    public function setTransfer($transfer, $deserialize = false)
    {
        $this->container['transfer'] = $transfer;

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



<?php
/**
 * PaymentInstrumentLinks
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
 * PaymentInstrumentLinks Class Doc Comment
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
class PaymentInstrumentLinks implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentInstrument__links';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'self' => '\Finix\Model\ApplicationLinksSelf',
        'authorizations' => '\Finix\Model\PaymentInstrumentLinksAuthorizations',
        'transfers' => '\Finix\Model\PaymentInstrumentLinksTransfers',
        'verifications' => '\Finix\Model\MerchantLinksVerifications',
        'application' => '\Finix\Model\MerchantLinksApplication',
        'identity' => '\Finix\Model\MerchantLinksIdentity'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'self' => null,
        'authorizations' => null,
        'transfers' => null,
        'verifications' => null,
        'application' => null,
        'identity' => null
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
        'self' => 'self',
        'authorizations' => 'authorizations',
        'transfers' => 'transfers',
        'verifications' => 'verifications',
        'application' => 'application',
        'identity' => 'identity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'self' => 'setSelf',
        'authorizations' => 'setAuthorizations',
        'transfers' => 'setTransfers',
        'verifications' => 'setVerifications',
        'application' => 'setApplication',
        'identity' => 'setIdentity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'self' => 'getSelf',
        'authorizations' => 'getAuthorizations',
        'transfers' => 'getTransfers',
        'verifications' => 'getVerifications',
        'application' => 'getApplication',
        'identity' => 'getIdentity'
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
        $this->container['self'] = $data['self'] ?? null;
        $this->container['authorizations'] = $data['authorizations'] ?? null;
        $this->container['transfers'] = $data['transfers'] ?? null;
        $this->container['verifications'] = $data['verifications'] ?? null;
        $this->container['application'] = $data['application'] ?? null;
        $this->container['identity'] = $data['identity'] ?? null;
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
     * Gets authorizations
     *
     * @return \Finix\Model\PaymentInstrumentLinksAuthorizations|null
     */
    public function getAuthorizations()
    {
        return $this->container['authorizations'];
    }

    /**
     * Sets authorizations
     *
     * @param \Finix\Model\PaymentInstrumentLinksAuthorizations|null $authorizations authorizations
     *
     * @return self
     */
    public function setAuthorizations($authorizations, $deserialize = false)
    {
        $this->container['authorizations'] = $authorizations;

        return $this;
    }

    /**
     * Gets transfers
     *
     * @return \Finix\Model\PaymentInstrumentLinksTransfers|null
     */
    public function getTransfers()
    {
        return $this->container['transfers'];
    }

    /**
     * Sets transfers
     *
     * @param \Finix\Model\PaymentInstrumentLinksTransfers|null $transfers transfers
     *
     * @return self
     */
    public function setTransfers($transfers, $deserialize = false)
    {
        $this->container['transfers'] = $transfers;

        return $this;
    }

    /**
     * Gets verifications
     *
     * @return \Finix\Model\MerchantLinksVerifications|null
     */
    public function getVerifications()
    {
        return $this->container['verifications'];
    }

    /**
     * Sets verifications
     *
     * @param \Finix\Model\MerchantLinksVerifications|null $verifications verifications
     *
     * @return self
     */
    public function setVerifications($verifications, $deserialize = false)
    {
        $this->container['verifications'] = $verifications;

        return $this;
    }

    /**
     * Gets application
     *
     * @return \Finix\Model\MerchantLinksApplication|null
     */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
     * Sets application
     *
     * @param \Finix\Model\MerchantLinksApplication|null $application application
     *
     * @return self
     */
    public function setApplication($application, $deserialize = false)
    {
        $this->container['application'] = $application;

        return $this;
    }

    /**
     * Gets identity
     *
     * @return \Finix\Model\MerchantLinksIdentity|null
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param \Finix\Model\MerchantLinksIdentity|null $identity identity
     *
     * @return self
     */
    public function setIdentity($identity, $deserialize = false)
    {
        $this->container['identity'] = $identity;

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



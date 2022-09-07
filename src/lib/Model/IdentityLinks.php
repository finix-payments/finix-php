<?php
/**
 * IdentityLinks
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
 * IdentityLinks Class Doc Comment
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
class IdentityLinks implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Identity__links';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'self' => '\Finix\Model\IdentityLinksSelf',
        'verifications' => '\Finix\Model\IdentityLinksVerifications',
        'merchants' => '\Finix\Model\IdentityLinksMerchants',
        'settlements' => '\Finix\Model\IdentityLinksSettlements',
        'authorizations' => '\Finix\Model\IdentityLinksAuthorizations',
        'transfers' => '\Finix\Model\IdentityLinksTransfers',
        'payment_instruments' => '\Finix\Model\IdentityLinksPaymentInstruments',
        'associated_identities' => '\Finix\Model\IdentityLinksAssociatedIdentities',
        'disputes' => '\Finix\Model\IdentityLinksDisputes',
        'application' => '\Finix\Model\IdentityLinksApplication'
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
        'verifications' => null,
        'merchants' => null,
        'settlements' => null,
        'authorizations' => null,
        'transfers' => null,
        'payment_instruments' => null,
        'associated_identities' => null,
        'disputes' => null,
        'application' => null
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
        'verifications' => 'verifications',
        'merchants' => 'merchants',
        'settlements' => 'settlements',
        'authorizations' => 'authorizations',
        'transfers' => 'transfers',
        'payment_instruments' => 'payment_instruments',
        'associated_identities' => 'associated_identities',
        'disputes' => 'disputes',
        'application' => 'application'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'self' => 'setSelf',
        'verifications' => 'setVerifications',
        'merchants' => 'setMerchants',
        'settlements' => 'setSettlements',
        'authorizations' => 'setAuthorizations',
        'transfers' => 'setTransfers',
        'payment_instruments' => 'setPaymentInstruments',
        'associated_identities' => 'setAssociatedIdentities',
        'disputes' => 'setDisputes',
        'application' => 'setApplication'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'self' => 'getSelf',
        'verifications' => 'getVerifications',
        'merchants' => 'getMerchants',
        'settlements' => 'getSettlements',
        'authorizations' => 'getAuthorizations',
        'transfers' => 'getTransfers',
        'payment_instruments' => 'getPaymentInstruments',
        'associated_identities' => 'getAssociatedIdentities',
        'disputes' => 'getDisputes',
        'application' => 'getApplication'
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
        $this->container['verifications'] = $data['verifications'] ?? null;
        $this->container['merchants'] = $data['merchants'] ?? null;
        $this->container['settlements'] = $data['settlements'] ?? null;
        $this->container['authorizations'] = $data['authorizations'] ?? null;
        $this->container['transfers'] = $data['transfers'] ?? null;
        $this->container['payment_instruments'] = $data['payment_instruments'] ?? null;
        $this->container['associated_identities'] = $data['associated_identities'] ?? null;
        $this->container['disputes'] = $data['disputes'] ?? null;
        $this->container['application'] = $data['application'] ?? null;
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
     * @return \Finix\Model\IdentityLinksSelf|null
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param \Finix\Model\IdentityLinksSelf|null $self self
     *
     * @return self
     */
    public function setSelf($self, $deserialize = false)
    {
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets verifications
     *
     * @return \Finix\Model\IdentityLinksVerifications|null
     */
    public function getVerifications()
    {
        return $this->container['verifications'];
    }

    /**
     * Sets verifications
     *
     * @param \Finix\Model\IdentityLinksVerifications|null $verifications verifications
     *
     * @return self
     */
    public function setVerifications($verifications, $deserialize = false)
    {
        $this->container['verifications'] = $verifications;

        return $this;
    }

    /**
     * Gets merchants
     *
     * @return \Finix\Model\IdentityLinksMerchants|null
     */
    public function getMerchants()
    {
        return $this->container['merchants'];
    }

    /**
     * Sets merchants
     *
     * @param \Finix\Model\IdentityLinksMerchants|null $merchants merchants
     *
     * @return self
     */
    public function setMerchants($merchants, $deserialize = false)
    {
        $this->container['merchants'] = $merchants;

        return $this;
    }

    /**
     * Gets settlements
     *
     * @return \Finix\Model\IdentityLinksSettlements|null
     */
    public function getSettlements()
    {
        return $this->container['settlements'];
    }

    /**
     * Sets settlements
     *
     * @param \Finix\Model\IdentityLinksSettlements|null $settlements settlements
     *
     * @return self
     */
    public function setSettlements($settlements, $deserialize = false)
    {
        $this->container['settlements'] = $settlements;

        return $this;
    }

    /**
     * Gets authorizations
     *
     * @return \Finix\Model\IdentityLinksAuthorizations|null
     */
    public function getAuthorizations()
    {
        return $this->container['authorizations'];
    }

    /**
     * Sets authorizations
     *
     * @param \Finix\Model\IdentityLinksAuthorizations|null $authorizations authorizations
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
     * @return \Finix\Model\IdentityLinksTransfers|null
     */
    public function getTransfers()
    {
        return $this->container['transfers'];
    }

    /**
     * Sets transfers
     *
     * @param \Finix\Model\IdentityLinksTransfers|null $transfers transfers
     *
     * @return self
     */
    public function setTransfers($transfers, $deserialize = false)
    {
        $this->container['transfers'] = $transfers;

        return $this;
    }

    /**
     * Gets payment_instruments
     *
     * @return \Finix\Model\IdentityLinksPaymentInstruments|null
     */
    public function getPaymentInstruments()
    {
        return $this->container['payment_instruments'];
    }

    /**
     * Sets payment_instruments
     *
     * @param \Finix\Model\IdentityLinksPaymentInstruments|null $payment_instruments payment_instruments
     *
     * @return self
     */
    public function setPaymentInstruments($payment_instruments, $deserialize = false)
    {
        $this->container['payment_instruments'] = $payment_instruments;

        return $this;
    }

    /**
     * Gets associated_identities
     *
     * @return \Finix\Model\IdentityLinksAssociatedIdentities|null
     */
    public function getAssociatedIdentities()
    {
        return $this->container['associated_identities'];
    }

    /**
     * Sets associated_identities
     *
     * @param \Finix\Model\IdentityLinksAssociatedIdentities|null $associated_identities associated_identities
     *
     * @return self
     */
    public function setAssociatedIdentities($associated_identities, $deserialize = false)
    {
        $this->container['associated_identities'] = $associated_identities;

        return $this;
    }

    /**
     * Gets disputes
     *
     * @return \Finix\Model\IdentityLinksDisputes|null
     */
    public function getDisputes()
    {
        return $this->container['disputes'];
    }

    /**
     * Sets disputes
     *
     * @param \Finix\Model\IdentityLinksDisputes|null $disputes disputes
     *
     * @return self
     */
    public function setDisputes($disputes, $deserialize = false)
    {
        $this->container['disputes'] = $disputes;

        return $this;
    }

    /**
     * Gets application
     *
     * @return \Finix\Model\IdentityLinksApplication|null
     */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
     * Sets application
     *
     * @param \Finix\Model\IdentityLinksApplication|null $application application
     *
     * @return self
     */
    public function setApplication($application, $deserialize = false)
    {
        $this->container['application'] = $application;

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



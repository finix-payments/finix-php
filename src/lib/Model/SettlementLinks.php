<?php
/**
 * SettlementLinks
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
 * SettlementLinks Class Doc Comment
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
class SettlementLinks implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Settlement__links';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'application' => '\Finix\Model\ApplicationProfileLinksApplication',
        'credits' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'debits' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'disputes' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'fees' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'funding_transfers' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'identity' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'reversals' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'self' => '\Finix\Model\ApplicationLinksSelf',
        'transfers' => '\Finix\Model\ApplicationLinksApplicationProfile'
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
        'credits' => null,
        'debits' => null,
        'disputes' => null,
        'fees' => null,
        'funding_transfers' => null,
        'identity' => null,
        'reversals' => null,
        'self' => null,
        'transfers' => null
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
        'credits' => 'credits',
        'debits' => 'debits',
        'disputes' => 'disputes',
        'fees' => 'fees',
        'funding_transfers' => 'funding_transfers',
        'identity' => 'identity',
        'reversals' => 'reversals',
        'self' => 'self',
        'transfers' => 'transfers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'application' => 'setApplication',
        'credits' => 'setCredits',
        'debits' => 'setDebits',
        'disputes' => 'setDisputes',
        'fees' => 'setFees',
        'funding_transfers' => 'setFundingTransfers',
        'identity' => 'setIdentity',
        'reversals' => 'setReversals',
        'self' => 'setSelf',
        'transfers' => 'setTransfers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'application' => 'getApplication',
        'credits' => 'getCredits',
        'debits' => 'getDebits',
        'disputes' => 'getDisputes',
        'fees' => 'getFees',
        'funding_transfers' => 'getFundingTransfers',
        'identity' => 'getIdentity',
        'reversals' => 'getReversals',
        'self' => 'getSelf',
        'transfers' => 'getTransfers'
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
        $this->container['credits'] = $data['credits'] ?? null;
        $this->container['debits'] = $data['debits'] ?? null;
        $this->container['disputes'] = $data['disputes'] ?? null;
        $this->container['fees'] = $data['fees'] ?? null;
        $this->container['funding_transfers'] = $data['funding_transfers'] ?? null;
        $this->container['identity'] = $data['identity'] ?? null;
        $this->container['reversals'] = $data['reversals'] ?? null;
        $this->container['self'] = $data['self'] ?? null;
        $this->container['transfers'] = $data['transfers'] ?? null;
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
     * Gets credits
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getCredits()
    {
        return $this->container['credits'];
    }

    /**
     * Sets credits
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $credits credits
     *
     * @return self
     */
    public function setCredits($credits, $deserialize = false)
    {
        $this->container['credits'] = $credits;

        return $this;
    }

    /**
     * Gets debits
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getDebits()
    {
        return $this->container['debits'];
    }

    /**
     * Sets debits
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $debits debits
     *
     * @return self
     */
    public function setDebits($debits, $deserialize = false)
    {
        $this->container['debits'] = $debits;

        return $this;
    }

    /**
     * Gets disputes
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getDisputes()
    {
        return $this->container['disputes'];
    }

    /**
     * Sets disputes
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $disputes disputes
     *
     * @return self
     */
    public function setDisputes($disputes, $deserialize = false)
    {
        $this->container['disputes'] = $disputes;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $fees fees
     *
     * @return self
     */
    public function setFees($fees, $deserialize = false)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets funding_transfers
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getFundingTransfers()
    {
        return $this->container['funding_transfers'];
    }

    /**
     * Sets funding_transfers
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $funding_transfers funding_transfers
     *
     * @return self
     */
    public function setFundingTransfers($funding_transfers, $deserialize = false)
    {
        $this->container['funding_transfers'] = $funding_transfers;

        return $this;
    }

    /**
     * Gets identity
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $identity identity
     *
     * @return self
     */
    public function setIdentity($identity, $deserialize = false)
    {
        $this->container['identity'] = $identity;

        return $this;
    }

    /**
     * Gets reversals
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getReversals()
    {
        return $this->container['reversals'];
    }

    /**
     * Sets reversals
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $reversals reversals
     *
     * @return self
     */
    public function setReversals($reversals, $deserialize = false)
    {
        $this->container['reversals'] = $reversals;

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
     * Gets transfers
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getTransfers()
    {
        return $this->container['transfers'];
    }

    /**
     * Sets transfers
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $transfers transfers
     *
     * @return self
     */
    public function setTransfers($transfers, $deserialize = false)
    {
        $this->container['transfers'] = $transfers;

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



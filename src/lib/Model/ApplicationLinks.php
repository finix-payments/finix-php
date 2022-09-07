<?php
/**
 * ApplicationLinks
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
 * ApplicationLinks Class Doc Comment
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
class ApplicationLinks implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Application__links';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'application_profile' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'authorizations' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'disputes' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'identities' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'merchants' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'owner_identity' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'payment_instruments' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'processors' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'reversals' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'self' => '\Finix\Model\ApplicationLinksSelf',
        'settlements' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'tokens' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'transfers' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'users' => '\Finix\Model\ApplicationLinksApplicationProfile',
        'webhooks' => '\Finix\Model\ApplicationLinksApplicationProfile'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'application_profile' => null,
        'authorizations' => null,
        'disputes' => null,
        'identities' => null,
        'merchants' => null,
        'owner_identity' => null,
        'payment_instruments' => null,
        'processors' => null,
        'reversals' => null,
        'self' => null,
        'settlements' => null,
        'tokens' => null,
        'transfers' => null,
        'users' => null,
        'webhooks' => null
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
        'application_profile' => 'application_profile',
        'authorizations' => 'authorizations',
        'disputes' => 'disputes',
        'identities' => 'identities',
        'merchants' => 'merchants',
        'owner_identity' => 'owner_identity',
        'payment_instruments' => 'payment_instruments',
        'processors' => 'processors',
        'reversals' => 'reversals',
        'self' => 'self',
        'settlements' => 'settlements',
        'tokens' => 'tokens',
        'transfers' => 'transfers',
        'users' => 'users',
        'webhooks' => 'webhooks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'application_profile' => 'setApplicationProfile',
        'authorizations' => 'setAuthorizations',
        'disputes' => 'setDisputes',
        'identities' => 'setIdentities',
        'merchants' => 'setMerchants',
        'owner_identity' => 'setOwnerIdentity',
        'payment_instruments' => 'setPaymentInstruments',
        'processors' => 'setProcessors',
        'reversals' => 'setReversals',
        'self' => 'setSelf',
        'settlements' => 'setSettlements',
        'tokens' => 'setTokens',
        'transfers' => 'setTransfers',
        'users' => 'setUsers',
        'webhooks' => 'setWebhooks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'application_profile' => 'getApplicationProfile',
        'authorizations' => 'getAuthorizations',
        'disputes' => 'getDisputes',
        'identities' => 'getIdentities',
        'merchants' => 'getMerchants',
        'owner_identity' => 'getOwnerIdentity',
        'payment_instruments' => 'getPaymentInstruments',
        'processors' => 'getProcessors',
        'reversals' => 'getReversals',
        'self' => 'getSelf',
        'settlements' => 'getSettlements',
        'tokens' => 'getTokens',
        'transfers' => 'getTransfers',
        'users' => 'getUsers',
        'webhooks' => 'getWebhooks'
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
        $this->container['application_profile'] = $data['application_profile'] ?? null;
        $this->container['authorizations'] = $data['authorizations'] ?? null;
        $this->container['disputes'] = $data['disputes'] ?? null;
        $this->container['identities'] = $data['identities'] ?? null;
        $this->container['merchants'] = $data['merchants'] ?? null;
        $this->container['owner_identity'] = $data['owner_identity'] ?? null;
        $this->container['payment_instruments'] = $data['payment_instruments'] ?? null;
        $this->container['processors'] = $data['processors'] ?? null;
        $this->container['reversals'] = $data['reversals'] ?? null;
        $this->container['self'] = $data['self'] ?? null;
        $this->container['settlements'] = $data['settlements'] ?? null;
        $this->container['tokens'] = $data['tokens'] ?? null;
        $this->container['transfers'] = $data['transfers'] ?? null;
        $this->container['users'] = $data['users'] ?? null;
        $this->container['webhooks'] = $data['webhooks'] ?? null;
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
     * Gets application_profile
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getApplicationProfile()
    {
        return $this->container['application_profile'];
    }

    /**
     * Sets application_profile
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $application_profile application_profile
     *
     * @return self
     */
    public function setApplicationProfile($application_profile, $deserialize = false)
    {
        $this->container['application_profile'] = $application_profile;

        return $this;
    }

    /**
     * Gets authorizations
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getAuthorizations()
    {
        return $this->container['authorizations'];
    }

    /**
     * Sets authorizations
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $authorizations authorizations
     *
     * @return self
     */
    public function setAuthorizations($authorizations, $deserialize = false)
    {
        $this->container['authorizations'] = $authorizations;

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
     * Gets identities
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getIdentities()
    {
        return $this->container['identities'];
    }

    /**
     * Sets identities
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $identities identities
     *
     * @return self
     */
    public function setIdentities($identities, $deserialize = false)
    {
        $this->container['identities'] = $identities;

        return $this;
    }

    /**
     * Gets merchants
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getMerchants()
    {
        return $this->container['merchants'];
    }

    /**
     * Sets merchants
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $merchants merchants
     *
     * @return self
     */
    public function setMerchants($merchants, $deserialize = false)
    {
        $this->container['merchants'] = $merchants;

        return $this;
    }

    /**
     * Gets owner_identity
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getOwnerIdentity()
    {
        return $this->container['owner_identity'];
    }

    /**
     * Sets owner_identity
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $owner_identity owner_identity
     *
     * @return self
     */
    public function setOwnerIdentity($owner_identity, $deserialize = false)
    {
        $this->container['owner_identity'] = $owner_identity;

        return $this;
    }

    /**
     * Gets payment_instruments
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getPaymentInstruments()
    {
        return $this->container['payment_instruments'];
    }

    /**
     * Sets payment_instruments
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $payment_instruments payment_instruments
     *
     * @return self
     */
    public function setPaymentInstruments($payment_instruments, $deserialize = false)
    {
        $this->container['payment_instruments'] = $payment_instruments;

        return $this;
    }

    /**
     * Gets processors
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getProcessors()
    {
        return $this->container['processors'];
    }

    /**
     * Sets processors
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $processors processors
     *
     * @return self
     */
    public function setProcessors($processors, $deserialize = false)
    {
        $this->container['processors'] = $processors;

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
     * Gets settlements
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getSettlements()
    {
        return $this->container['settlements'];
    }

    /**
     * Sets settlements
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $settlements settlements
     *
     * @return self
     */
    public function setSettlements($settlements, $deserialize = false)
    {
        $this->container['settlements'] = $settlements;

        return $this;
    }

    /**
     * Gets tokens
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getTokens()
    {
        return $this->container['tokens'];
    }

    /**
     * Sets tokens
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $tokens tokens
     *
     * @return self
     */
    public function setTokens($tokens, $deserialize = false)
    {
        $this->container['tokens'] = $tokens;

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
     * Gets users
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $users users
     *
     * @return self
     */
    public function setUsers($users, $deserialize = false)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets webhooks
     *
     * @return \Finix\Model\ApplicationLinksApplicationProfile|null
     */
    public function getWebhooks()
    {
        return $this->container['webhooks'];
    }

    /**
     * Sets webhooks
     *
     * @param \Finix\Model\ApplicationLinksApplicationProfile|null $webhooks webhooks
     *
     * @return self
     */
    public function setWebhooks($webhooks, $deserialize = false)
    {
        $this->container['webhooks'] = $webhooks;

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



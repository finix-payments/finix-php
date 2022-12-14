<?php
/**
 * Webhook
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
 * Webhook Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Webhook implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Webhook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'application' => 'string',
        'authentication' => '\Finix\Model\WebhookAuthentication',
        'enabled' => 'bool',
        'enabled_events' => '\Finix\Model\WebhookEnabledEventsInner[]',
        'previous_secret_expires_at' => 'string',
        'secret_signing_key' => 'string',
        'url' => 'string',
        '_links' => '\Finix\Model\ProcessorLinks'
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
        'application' => null,
        'authentication' => null,
        'enabled' => null,
        'enabled_events' => null,
        'previous_secret_expires_at' => null,
        'secret_signing_key' => null,
        'url' => null,
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
        'application' => 'application',
        'authentication' => 'authentication',
        'enabled' => 'enabled',
        'enabled_events' => 'enabled_events',
        'previous_secret_expires_at' => 'previous_secret_expires_at',
        'secret_signing_key' => 'secret_signing_key',
        'url' => 'url',
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
        'application' => 'setApplication',
        'authentication' => 'setAuthentication',
        'enabled' => 'setEnabled',
        'enabled_events' => 'setEnabledEvents',
        'previous_secret_expires_at' => 'setPreviousSecretExpiresAt',
        'secret_signing_key' => 'setSecretSigningKey',
        'url' => 'setUrl',
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
        'application' => 'getApplication',
        'authentication' => 'getAuthentication',
        'enabled' => 'getEnabled',
        'enabled_events' => 'getEnabledEvents',
        'previous_secret_expires_at' => 'getPreviousSecretExpiresAt',
        'secret_signing_key' => 'getSecretSigningKey',
        'url' => 'getUrl',
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
        $this->container['application'] = $data['application'] ?? null;
        $this->container['authentication'] = $data['authentication'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['enabled_events'] = $data['enabled_events'] ?? null;
        $this->container['previous_secret_expires_at'] = $data['previous_secret_expires_at'] ?? null;
        $this->container['secret_signing_key'] = $data['secret_signing_key'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
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
     * @param string|null $id The ID of the `Webhook` resource.
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
     * Gets application
     *
     * @return string|null
     */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
     * Sets application
     *
     * @param string|null $application The ID of the `Application` resource the `Webhook` was created under.
     *
     * @return self
     */
    public function setApplication($application, $deserialize = false)
    {
        $this->container['application'] = $application;

        return $this;
    }

    /**
     * Gets authentication
     *
     * @return \Finix\Model\WebhookAuthentication|null
     */
    public function getAuthentication()
    {
        return $this->container['authentication'];
    }

    /**
     * Sets authentication
     *
     * @param \Finix\Model\WebhookAuthentication|null $authentication authentication
     *
     * @return self
     */
    public function setAuthentication($authentication, $deserialize = false)
    {
        $this->container['authentication'] = $authentication;

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
     * @param bool|null $enabled Details if the `Webhook` is enabled:<ul><li><strong>true</strong>: Events are being sent to the `url`.<li><strong>false</strong>: Events are not being sent.
     *
     * @return self
     */
    public function setEnabled($enabled, $deserialize = false)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets enabled_events
     *
     * @return \Finix\Model\WebhookEnabledEventsInner[]|null
     */
    public function getEnabledEvents()
    {
        return $this->container['enabled_events'];
    }

    /**
     * Sets enabled_events
     *
     * @param \Finix\Model\WebhookEnabledEventsInner[]|null $enabled_events A list of events the [webhook is explicitly enabled for](/guides/developers/webhooks/#webhook-event-filtering).
     *
     * @return self
     */
    public function setEnabledEvents($enabled_events, $deserialize = false)
    {
        $this->container['enabled_events'] = $enabled_events;

        return $this;
    }

    /**
     * Gets previous_secret_expires_at
     *
     * @return string|null
     */
    public function getPreviousSecretExpiresAt()
    {
        return $this->container['previous_secret_expires_at'];
    }

    /**
     * Sets previous_secret_expires_at
     *
     * @param string|null $previous_secret_expires_at The time when the previous `secret_signing_key` will expire. This is **null** when the webhook is initially created.
     *
     * @return self
     */
    public function setPreviousSecretExpiresAt($previous_secret_expires_at, $deserialize = false)
    {
        $this->container['previous_secret_expires_at'] = $previous_secret_expires_at;

        return $this;
    }

    /**
     * Gets secret_signing_key
     *
     * @return string|null
     */
    public function getSecretSigningKey()
    {
        return $this->container['secret_signing_key'];
    }

    /**
     * Sets secret_signing_key
     *
     * @param string|null $secret_signing_key The secret signing key that gets used to verify webhook events.
     *
     * @return self
     */
    public function setSecretSigningKey($secret_signing_key, $deserialize = false)
    {
        $this->container['secret_signing_key'] = $secret_signing_key;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url The HTTP or HTTPS URL where callbacks (i.e. events) will be sent via POST request (max 120 characters).
     *
     * @return self
     */
    public function setUrl($url, $deserialize = false)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets _links
     *
     * @return \Finix\Model\ProcessorLinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \Finix\Model\ProcessorLinks|null $_links _links
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



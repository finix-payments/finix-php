<?php
/**
 * Verification
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
 * Verification Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Verification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Verification';

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
        'identity' => 'string',
        'merchant' => 'string',
        'merchant_identity' => 'string',
        'messages' => 'object[]',
        'payment_instrument' => 'string',
        'processor' => 'string',
        'raw' => 'object',
        'state' => 'string',
        'tags' => 'array<string,string>',
        'trace_id' => 'string',
        '_links' => '\Finix\Model\VerificationLinks'
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
        'identity' => null,
        'merchant' => null,
        'merchant_identity' => null,
        'messages' => null,
        'payment_instrument' => null,
        'processor' => null,
        'raw' => null,
        'state' => null,
        'tags' => null,
        'trace_id' => null,
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
        'identity' => 'identity',
        'merchant' => 'merchant',
        'merchant_identity' => 'merchant_identity',
        'messages' => 'messages',
        'payment_instrument' => 'payment_instrument',
        'processor' => 'processor',
        'raw' => 'raw',
        'state' => 'state',
        'tags' => 'tags',
        'trace_id' => 'trace_id',
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
        'identity' => 'setIdentity',
        'merchant' => 'setMerchant',
        'merchant_identity' => 'setMerchantIdentity',
        'messages' => 'setMessages',
        'payment_instrument' => 'setPaymentInstrument',
        'processor' => 'setProcessor',
        'raw' => 'setRaw',
        'state' => 'setState',
        'tags' => 'setTags',
        'trace_id' => 'setTraceId',
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
        'identity' => 'getIdentity',
        'merchant' => 'getMerchant',
        'merchant_identity' => 'getMerchantIdentity',
        'messages' => 'getMessages',
        'payment_instrument' => 'getPaymentInstrument',
        'processor' => 'getProcessor',
        'raw' => 'getRaw',
        'state' => 'getState',
        'tags' => 'getTags',
        'trace_id' => 'getTraceId',
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

    public const STATE_PENDING = 'PENDING';
    public const STATE_SUCCEEDED = 'SUCCEEDED';
    public const STATE_FAILED = 'FAILED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PENDING,
            self::STATE_SUCCEEDED,
            self::STATE_FAILED,
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
        $this->container['application'] = $data['application'] ?? null;
        $this->container['identity'] = $data['identity'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['merchant_identity'] = $data['merchant_identity'] ?? null;
        $this->container['messages'] = $data['messages'] ?? null;
        $this->container['payment_instrument'] = $data['payment_instrument'] ?? null;
        $this->container['processor'] = $data['processor'] ?? null;
        $this->container['raw'] = $data['raw'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['trace_id'] = $data['trace_id'] ?? null;
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

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
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
     * @param string|null $id The ID of the `Verification` attempt (begins with `VIXXX`).
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
     * @param string|null $application ID of the `Application` the `Merchant` was created under.
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
     * @return string|null
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param string|null $identity ID of the `Identity` that created the `Merchant`.
     *
     * @return self
     */
    public function setIdentity($identity, $deserialize = false)
    {
        $this->container['identity'] = $identity;

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
     * Gets merchant_identity
     *
     * @return string|null
     */
    public function getMerchantIdentity()
    {
        return $this->container['merchant_identity'];
    }

    /**
     * Sets merchant_identity
     *
     * @param string|null $merchant_identity ID of the `Identity` associated with the `Merchant`.
     *
     * @return self
     */
    public function setMerchantIdentity($merchant_identity, $deserialize = false)
    {
        $this->container['merchant_identity'] = $merchant_identity;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return object[]|null
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param object[]|null $messages Provides additional details about the verification (e.g why it failed). This field is usually **null**.
     *
     * @return self
     */
    public function setMessages($messages, $deserialize = false)
    {
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets payment_instrument
     *
     * @return string|null
     */
    public function getPaymentInstrument()
    {
        return $this->container['payment_instrument'];
    }

    /**
     * Sets payment_instrument
     *
     * @param string|null $payment_instrument The `Payment Instrument` that'll be used to settle the `Merchant's` processed funds.
     *
     * @return self
     */
    public function setPaymentInstrument($payment_instrument, $deserialize = false)
    {
        $this->container['payment_instrument'] = $payment_instrument;

        return $this;
    }

    /**
     * Gets processor
     *
     * @return string|null
     */
    public function getProcessor()
    {
        return $this->container['processor'];
    }

    /**
     * Sets processor
     *
     * @param string|null $processor Name of the verification processor.
     *
     * @return self
     */
    public function setProcessor($processor, $deserialize = false)
    {
        $this->container['processor'] = $processor;

        return $this;
    }

    /**
     * Gets raw
     *
     * @return object|null
     */
    public function getRaw()
    {
        return $this->container['raw'];
    }

    /**
     * Sets raw
     *
     * @param object|null $raw Raw response from the processor.
     *
     * @return self
     */
    public function setRaw($raw, $deserialize = false)
    {
        $this->container['raw'] = $raw;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state The status of the `Verification` request.
     *
     * @return self
     */
    public function setState($state, $deserialize = false)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

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
     * Gets trace_id
     *
     * @return string|null
     */
    public function getTraceId()
    {
        return $this->container['trace_id'];
    }

    /**
     * Sets trace_id
     *
     * @param string|null $trace_id Trace ID of the `Verification`. The processor sends back the `trace_id` so you can track the verification end-to-end.
     *
     * @return self
     */
    public function setTraceId($trace_id, $deserialize = false)
    {
        $this->container['trace_id'] = $trace_id;

        return $this;
    }

    /**
     * Gets _links
     *
     * @return \Finix\Model\VerificationLinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \Finix\Model\VerificationLinks|null $_links _links
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



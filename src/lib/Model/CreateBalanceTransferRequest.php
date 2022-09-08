<?php
/**
 * CreateBalanceTransferRequest
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
 * CreateBalanceTransferRequest Class Doc Comment
 *
 * @category Class
 * @description Create a &#x60;balance_transfer&#x60; resource.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateBalanceTransferRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateBalanceTransferRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'int',
        'currency' => '\Finix\Model\Currency',
        'description' => 'string',
        'destination' => 'string',
        'processor_type' => 'string',
        'source' => 'string',
        'tags' => 'array<string,string>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => 'int64',
        'currency' => null,
        'description' => null,
        'destination' => null,
        'processor_type' => null,
        'source' => null,
        'tags' => null
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
        'amount' => 'amount',
        'currency' => 'currency',
        'description' => 'description',
        'destination' => 'destination',
        'processor_type' => 'processor_type',
        'source' => 'source',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'description' => 'setDescription',
        'destination' => 'setDestination',
        'processor_type' => 'setProcessorType',
        'source' => 'setSource',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'description' => 'getDescription',
        'destination' => 'getDestination',
        'processor_type' => 'getProcessorType',
        'source' => 'getSource',
        'tags' => 'getTags'
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

    public const DESTINATION_FOR_BENEFIT_OF_ACCOUNT = 'FOR_BENEFIT_OF_ACCOUNT';
    public const DESTINATION_OPERATING_ACCOUNT = 'OPERATING_ACCOUNT';
    public const SOURCE_FOR_BENEFIT_OF_ACCOUNT = 'FOR_BENEFIT_OF_ACCOUNT';
    public const SOURCE_OPERATING_ACCOUNT = 'OPERATING_ACCOUNT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDestinationAllowableValues()
    {
        return [
            self::DESTINATION_FOR_BENEFIT_OF_ACCOUNT,
            self::DESTINATION_OPERATING_ACCOUNT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_FOR_BENEFIT_OF_ACCOUNT,
            self::SOURCE_OPERATING_ACCOUNT,
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['destination'] = $data['destination'] ?? null;
        $this->container['processor_type'] = $data['processor_type'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
        }
        $allowedValues = $this->getDestinationAllowableValues();
        if (!is_null($this->container['destination']) && !in_array($this->container['destination'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'destination', must be one of '%s'",
                $this->container['destination'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['processor_type'] === null) {
            $invalidProperties[] = "'processor_type' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'source', must be one of '%s'",
                $this->container['source'],
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
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount The total amount that will be debited in cents (e.g. 100 cents to debit $1.00).
     *
     * @return self
     */
    public function setAmount($amount, $deserialize = false)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Finix\Model\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Finix\Model\Currency $currency currency
     *
     * @return self
     */
    public function setCurrency($currency, $deserialize = false)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Additional information about the `balance_transfer` (e.g. **Transferring funds for Holidays**).
     *
     * @return self
     */
    public function setDescription($description, $deserialize = false)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param string $destination The account where funds get credited. For balance transfers, this is an aliased ID and will have the value of `FOR_BENEFIT_OF_ACCOUNT` or `OPERATING_ACCOUNT`.
     *
     * @return self
     */
    public function setDestination($destination, $deserialize = false)
    {
        $allowedValues = $this->getDestinationAllowableValues();
        if (!in_array($destination, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'destination', must be one of '%s'",
                    $destination,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets processor_type
     *
     * @return string
     */
    public function getProcessorType()
    {
        return $this->container['processor_type'];
    }

    /**
     * Sets processor_type
     *
     * @param string $processor_type Pass **LITLE_V1**; `balance_transfers` are only avalible for platforms with **LITLE_V1** credentials.
     *
     * @return self
     */
    public function setProcessorType($processor_type, $deserialize = false)
    {
        $this->container['processor_type'] = $processor_type;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source The account where funds get debited. For balance transfers, this is an aliased ID and will have the value of `FOR_BENEFIT_OF_ACCOUNT` or `OPERATING_ACCOUNT`.
     *
     * @return self
     */
    public function setSource($source, $deserialize = false)
    {
        $allowedValues = $this->getSourceAllowableValues();
        if (!in_array($source, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'source', must be one of '%s'",
                    $source,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

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



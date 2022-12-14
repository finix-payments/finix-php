<?php
/**
 * UpdateAuthorizationRequest
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
 * UpdateAuthorizationRequest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateAuthorizationRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateAuthorizationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_purchase_data' => '\Finix\Model\AdditionalPurchaseData',
        'capture_amount' => 'int',
        'fee' => 'int',
        'tags' => 'array<string,string>',
        'void_me' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_purchase_data' => null,
        'capture_amount' => 'int64',
        'fee' => 'int64',
        'tags' => null,
        'void_me' => null
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
        'additional_purchase_data' => 'additional_purchase_data',
        'capture_amount' => 'capture_amount',
        'fee' => 'fee',
        'tags' => 'tags',
        'void_me' => 'void_me'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_purchase_data' => 'setAdditionalPurchaseData',
        'capture_amount' => 'setCaptureAmount',
        'fee' => 'setFee',
        'tags' => 'setTags',
        'void_me' => 'setVoidMe'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_purchase_data' => 'getAdditionalPurchaseData',
        'capture_amount' => 'getCaptureAmount',
        'fee' => 'getFee',
        'tags' => 'getTags',
        'void_me' => 'getVoidMe'
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
        $this->container['additional_purchase_data'] = $data['additional_purchase_data'] ?? null;
        $this->container['capture_amount'] = $data['capture_amount'] ?? null;
        $this->container['fee'] = $data['fee'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['void_me'] = $data['void_me'] ?? null;
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
     * Gets additional_purchase_data
     *
     * @return \Finix\Model\AdditionalPurchaseData|null
     */
    public function getAdditionalPurchaseData()
    {
        return $this->container['additional_purchase_data'];
    }

    /**
     * Sets additional_purchase_data
     *
     * @param \Finix\Model\AdditionalPurchaseData|null $additional_purchase_data additional_purchase_data
     *
     * @return self
     */
    public function setAdditionalPurchaseData($additional_purchase_data, $deserialize = false)
    {
        $this->container['additional_purchase_data'] = $additional_purchase_data;

        return $this;
    }

    /**
     * Gets capture_amount
     *
     * @return int|null
     */
    public function getCaptureAmount()
    {
        return $this->container['capture_amount'];
    }

    /**
     * Sets capture_amount
     *
     * @param int|null $capture_amount The amount of the  `Authorization`  you would like to capture in cents. Must be less than or equal to the `amount` of the `Authorization`.
     *
     * @return self
     */
    public function setCaptureAmount($capture_amount, $deserialize = false)
    {
        $this->container['capture_amount'] = $capture_amount;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return int|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param int|null $fee The amount of the `Authorization` you'd like to collect as your fee in cents. Defaults to zero (must be less than or equal to the `amount`).
     *
     * @return self
     */
    public function setFee($fee, $deserialize = false)
    {
        $this->container['fee'] = $fee;

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
     * Gets void_me
     *
     * @return bool|null
     */
    public function getVoidMe()
    {
        return $this->container['void_me'];
    }

    /**
     * Sets void_me
     *
     * @param bool|null $void_me Set to **True** to void the `Authorization`.
     *
     * @return self
     */
    public function setVoidMe($void_me, $deserialize = false)
    {
        $this->container['void_me'] = $void_me;

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



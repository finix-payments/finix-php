<?php
/**
 * CardPresentDetails
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
 * CardPresentDetails Class Doc Comment
 *
 * @category Class
 * @description Details needed to process card present transactions.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CardPresentDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CardPresentDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'approval_code' => 'string',
        'brand' => 'string',
        'emv_data' => '\Finix\Model\CardPresentDetailsEmvData',
        'entry_mode' => 'string',
        'masked_account_number' => 'string',
        'name' => 'string',
        'payment_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'approval_code' => null,
        'brand' => null,
        'emv_data' => null,
        'entry_mode' => null,
        'masked_account_number' => null,
        'name' => null,
        'payment_type' => null
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
        'approval_code' => 'approval_code',
        'brand' => 'brand',
        'emv_data' => 'emv_data',
        'entry_mode' => 'entry_mode',
        'masked_account_number' => 'masked_account_number',
        'name' => 'name',
        'payment_type' => 'payment_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'approval_code' => 'setApprovalCode',
        'brand' => 'setBrand',
        'emv_data' => 'setEmvData',
        'entry_mode' => 'setEntryMode',
        'masked_account_number' => 'setMaskedAccountNumber',
        'name' => 'setName',
        'payment_type' => 'setPaymentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'approval_code' => 'getApprovalCode',
        'brand' => 'getBrand',
        'emv_data' => 'getEmvData',
        'entry_mode' => 'getEntryMode',
        'masked_account_number' => 'getMaskedAccountNumber',
        'name' => 'getName',
        'payment_type' => 'getPaymentType'
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
        $this->container['approval_code'] = $data['approval_code'] ?? null;
        $this->container['brand'] = $data['brand'] ?? null;
        $this->container['emv_data'] = $data['emv_data'] ?? null;
        $this->container['entry_mode'] = $data['entry_mode'] ?? null;
        $this->container['masked_account_number'] = $data['masked_account_number'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['payment_type'] = $data['payment_type'] ?? null;
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
     * Gets approval_code
     *
     * @return string|null
     */
    public function getApprovalCode()
    {
        return $this->container['approval_code'];
    }

    /**
     * Sets approval_code
     *
     * @param string|null $approval_code Unique ID used to identify the approval of the `Transfer`.
     *
     * @return self
     */
    public function setApprovalCode($approval_code, $deserialize = false)
    {
        $this->container['approval_code'] = $approval_code;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand The brand of the card saved in the `Payment Instrument`.
     *
     * @return self
     */
    public function setBrand($brand, $deserialize = false)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets emv_data
     *
     * @return \Finix\Model\CardPresentDetailsEmvData|null
     */
    public function getEmvData()
    {
        return $this->container['emv_data'];
    }

    /**
     * Sets emv_data
     *
     * @param \Finix\Model\CardPresentDetailsEmvData|null $emv_data emv_data
     *
     * @return self
     */
    public function setEmvData($emv_data, $deserialize = false)
    {
        $this->container['emv_data'] = $emv_data;

        return $this;
    }

    /**
     * Gets entry_mode
     *
     * @return string|null
     */
    public function getEntryMode()
    {
        return $this->container['entry_mode'];
    }

    /**
     * Sets entry_mode
     *
     * @param string|null $entry_mode Details how the card was entered to process the transaction.
     *
     * @return self
     */
    public function setEntryMode($entry_mode, $deserialize = false)
    {
        $this->container['entry_mode'] = $entry_mode;

        return $this;
    }

    /**
     * Gets masked_account_number
     *
     * @return string|null
     */
    public function getMaskedAccountNumber()
    {
        return $this->container['masked_account_number'];
    }

    /**
     * Sets masked_account_number
     *
     * @param string|null $masked_account_number Last four digits of the bank account number.
     *
     * @return self
     */
    public function setMaskedAccountNumber($masked_account_number, $deserialize = false)
    {
        $this->container['masked_account_number'] = $masked_account_number;

        return $this;
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
     * @param string|null $name The name of the bank account or card owner.
     *
     * @return self
     */
    public function setName($name, $deserialize = false)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string|null $payment_type The type of `Payment Instrument` used in the transaction (or the original payment).
     *
     * @return self
     */
    public function setPaymentType($payment_type, $deserialize = false)
    {
        $this->container['payment_type'] = $payment_type;

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



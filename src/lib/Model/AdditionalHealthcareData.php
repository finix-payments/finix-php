<?php
/**
 * AdditionalHealthcareData
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
 * AdditionalHealthcareData Class Doc Comment
 *
 * @category Class
 * @description Optional object detailing [specific healthcare amounts](/docs/guides/making-a-payment/hsa-fsa/).
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AdditionalHealthcareData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalHealthcareData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'clinic_amount' => 'int',
        'dental_amount' => 'int',
        'prescription_amount' => 'int',
        'vision_amount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'clinic_amount' => null,
        'dental_amount' => null,
        'prescription_amount' => null,
        'vision_amount' => null
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
        'clinic_amount' => 'clinic_amount',
        'dental_amount' => 'dental_amount',
        'prescription_amount' => 'prescription_amount',
        'vision_amount' => 'vision_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clinic_amount' => 'setClinicAmount',
        'dental_amount' => 'setDentalAmount',
        'prescription_amount' => 'setPrescriptionAmount',
        'vision_amount' => 'setVisionAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clinic_amount' => 'getClinicAmount',
        'dental_amount' => 'getDentalAmount',
        'prescription_amount' => 'getPrescriptionAmount',
        'vision_amount' => 'getVisionAmount'
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
        $this->container['clinic_amount'] = $data['clinic_amount'] ?? null;
        $this->container['dental_amount'] = $data['dental_amount'] ?? null;
        $this->container['prescription_amount'] = $data['prescription_amount'] ?? null;
        $this->container['vision_amount'] = $data['vision_amount'] ?? null;
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
     * Gets clinic_amount
     *
     * @return int|null
     */
    public function getClinicAmount()
    {
        return $this->container['clinic_amount'];
    }

    /**
     * Sets clinic_amount
     *
     * @param int|null $clinic_amount The amount used for clinic and office visits such as a copay amount.
     *
     * @return self
     */
    public function setClinicAmount($clinic_amount, $deserialize = false)
    {
        $this->container['clinic_amount'] = $clinic_amount;

        return $this;
    }

    /**
     * Gets dental_amount
     *
     * @return int|null
     */
    public function getDentalAmount()
    {
        return $this->container['dental_amount'];
    }

    /**
     * Sets dental_amount
     *
     * @param int|null $dental_amount The amount used for dental related expenses.
     *
     * @return self
     */
    public function setDentalAmount($dental_amount, $deserialize = false)
    {
        $this->container['dental_amount'] = $dental_amount;

        return $this;
    }

    /**
     * Gets prescription_amount
     *
     * @return int|null
     */
    public function getPrescriptionAmount()
    {
        return $this->container['prescription_amount'];
    }

    /**
     * Sets prescription_amount
     *
     * @param int|null $prescription_amount The amount used to purchase perscriptions and medications.
     *
     * @return self
     */
    public function setPrescriptionAmount($prescription_amount, $deserialize = false)
    {
        $this->container['prescription_amount'] = $prescription_amount;

        return $this;
    }

    /**
     * Gets vision_amount
     *
     * @return int|null
     */
    public function getVisionAmount()
    {
        return $this->container['vision_amount'];
    }

    /**
     * Sets vision_amount
     *
     * @param int|null $vision_amount The amount used for vision related expenses.
     *
     * @return self
     */
    public function setVisionAmount($vision_amount, $deserialize = false)
    {
        $this->container['vision_amount'] = $vision_amount;

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



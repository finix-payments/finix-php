<?php
/**
 * IdentityAdditionalUnderwritingDataVolumeDistributionByBusinessType
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
 * IdentityAdditionalUnderwritingDataVolumeDistributionByBusinessType Class Doc Comment
 *
 * @category Class
 * @description Merchant&#39;s distribution of credit card volume by business type. Sum of &#x60;volume_distribution_by_business_type&#x60; must be 100.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IdentityAdditionalUnderwritingDataVolumeDistributionByBusinessType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Identity_additional_underwriting_data_volume_distribution_by_business_type';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'business_to_business_volume_percentage' => 'int',
        'business_to_consumer_volume_percentage' => 'int',
        'consumer_to_consumer_volume_percentage' => 'int',
        'other_volume_percentage' => 'int',
        'person_to_person_volume_percentage' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'business_to_business_volume_percentage' => null,
        'business_to_consumer_volume_percentage' => null,
        'consumer_to_consumer_volume_percentage' => null,
        'other_volume_percentage' => null,
        'person_to_person_volume_percentage' => null
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
        'business_to_business_volume_percentage' => 'business_to_business_volume_percentage',
        'business_to_consumer_volume_percentage' => 'business_to_consumer_volume_percentage',
        'consumer_to_consumer_volume_percentage' => 'consumer_to_consumer_volume_percentage',
        'other_volume_percentage' => 'other_volume_percentage',
        'person_to_person_volume_percentage' => 'person_to_person_volume_percentage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_to_business_volume_percentage' => 'setBusinessToBusinessVolumePercentage',
        'business_to_consumer_volume_percentage' => 'setBusinessToConsumerVolumePercentage',
        'consumer_to_consumer_volume_percentage' => 'setConsumerToConsumerVolumePercentage',
        'other_volume_percentage' => 'setOtherVolumePercentage',
        'person_to_person_volume_percentage' => 'setPersonToPersonVolumePercentage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_to_business_volume_percentage' => 'getBusinessToBusinessVolumePercentage',
        'business_to_consumer_volume_percentage' => 'getBusinessToConsumerVolumePercentage',
        'consumer_to_consumer_volume_percentage' => 'getConsumerToConsumerVolumePercentage',
        'other_volume_percentage' => 'getOtherVolumePercentage',
        'person_to_person_volume_percentage' => 'getPersonToPersonVolumePercentage'
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
        $this->container['business_to_business_volume_percentage'] = $data['business_to_business_volume_percentage'] ?? null;
        $this->container['business_to_consumer_volume_percentage'] = $data['business_to_consumer_volume_percentage'] ?? null;
        $this->container['consumer_to_consumer_volume_percentage'] = $data['consumer_to_consumer_volume_percentage'] ?? null;
        $this->container['other_volume_percentage'] = $data['other_volume_percentage'] ?? null;
        $this->container['person_to_person_volume_percentage'] = $data['person_to_person_volume_percentage'] ?? null;
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
     * Gets business_to_business_volume_percentage
     *
     * @return int|null
     */
    public function getBusinessToBusinessVolumePercentage()
    {
        return $this->container['business_to_business_volume_percentage'];
    }

    /**
     * Sets business_to_business_volume_percentage
     *
     * @param int|null $business_to_business_volume_percentage The percentage of the merchant's volume that's business to business (between 0 and 100).
     *
     * @return self
     */
    public function setBusinessToBusinessVolumePercentage($business_to_business_volume_percentage, $deserialize = false)
    {
        $this->container['business_to_business_volume_percentage'] = $business_to_business_volume_percentage;

        return $this;
    }

    /**
     * Gets business_to_consumer_volume_percentage
     *
     * @return int|null
     */
    public function getBusinessToConsumerVolumePercentage()
    {
        return $this->container['business_to_consumer_volume_percentage'];
    }

    /**
     * Sets business_to_consumer_volume_percentage
     *
     * @param int|null $business_to_consumer_volume_percentage The percentage of the merchant's volume that's business to consumer (between 0 and 100).
     *
     * @return self
     */
    public function setBusinessToConsumerVolumePercentage($business_to_consumer_volume_percentage, $deserialize = false)
    {
        $this->container['business_to_consumer_volume_percentage'] = $business_to_consumer_volume_percentage;

        return $this;
    }

    /**
     * Gets consumer_to_consumer_volume_percentage
     *
     * @return int|null
     */
    public function getConsumerToConsumerVolumePercentage()
    {
        return $this->container['consumer_to_consumer_volume_percentage'];
    }

    /**
     * Sets consumer_to_consumer_volume_percentage
     *
     * @param int|null $consumer_to_consumer_volume_percentage Merchant's percentage of volume that is consumer to consumer (between 0 and 100).
     *
     * @return self
     */
    public function setConsumerToConsumerVolumePercentage($consumer_to_consumer_volume_percentage, $deserialize = false)
    {
        $this->container['consumer_to_consumer_volume_percentage'] = $consumer_to_consumer_volume_percentage;

        return $this;
    }

    /**
     * Gets other_volume_percentage
     *
     * @return int|null
     */
    public function getOtherVolumePercentage()
    {
        return $this->container['other_volume_percentage'];
    }

    /**
     * Sets other_volume_percentage
     *
     * @param int|null $other_volume_percentage The percentage of the merchant's volume that isn't represented by the previous fields (between 0 and 100).
     *
     * @return self
     */
    public function setOtherVolumePercentage($other_volume_percentage, $deserialize = false)
    {
        $this->container['other_volume_percentage'] = $other_volume_percentage;

        return $this;
    }

    /**
     * Gets person_to_person_volume_percentage
     *
     * @return int|null
     */
    public function getPersonToPersonVolumePercentage()
    {
        return $this->container['person_to_person_volume_percentage'];
    }

    /**
     * Sets person_to_person_volume_percentage
     *
     * @param int|null $person_to_person_volume_percentage The percentage the merchant's volume that's person to person (between 0 and 100).
     *
     * @return self
     */
    public function setPersonToPersonVolumePercentage($person_to_person_volume_percentage, $deserialize = false)
    {
        $this->container['person_to_person_volume_percentage'] = $person_to_person_volume_percentage;

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



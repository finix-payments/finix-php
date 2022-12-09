<?php
/**
 * CreateIdentityRequestEntityBusinessAddress
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
 * CreateIdentityRequestEntityBusinessAddress Class Doc Comment
 *
 * @category Class
 * @description The primary address for the legal entity.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateIdentityRequestEntityBusinessAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateIdentityRequest_entity_business_address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'city' => 'string',
        'country' => 'string',
        'region' => 'string',
        'line2' => 'string',
        'line1' => 'string',
        'postal_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'city' => null,
        'country' => null,
        'region' => null,
        'line2' => null,
        'line1' => null,
        'postal_code' => null
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
        'city' => 'city',
        'country' => 'country',
        'region' => 'region',
        'line2' => 'line2',
        'line1' => 'line1',
        'postal_code' => 'postal_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'city' => 'setCity',
        'country' => 'setCountry',
        'region' => 'setRegion',
        'line2' => 'setLine2',
        'line1' => 'setLine1',
        'postal_code' => 'setPostalCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'city' => 'getCity',
        'country' => 'getCountry',
        'region' => 'getRegion',
        'line2' => 'getLine2',
        'line1' => 'getLine1',
        'postal_code' => 'getPostalCode'
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
        $this->container['city'] = $data['city'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
        $this->container['line2'] = $data['line2'] ?? null;
        $this->container['line1'] = $data['line1'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) < 1)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 1)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 1)) {
            $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['line2']) && (mb_strlen($this->container['line2']) < 1)) {
            $invalidProperties[] = "invalid value for 'line2', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['line1']) && (mb_strlen($this->container['line1']) < 1)) {
            $invalidProperties[] = "invalid value for 'line1', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be bigger than or equal to 1.";
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
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city City (max 20 characters).
     *
     * @return self
     */
    public function setCity($city, $deserialize = false)
    {

        if (!is_null($city) && (mb_strlen($city) < 1)) {
            throw new \InvalidArgumentException('invalid length for $city when calling CreateIdentityRequestEntityBusinessAddress., must be bigger than or equal to 1.');
        }
        

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country 3-Letter Country code (e.g. USA).
     *
     * @return self
     */
    public function setCountry($country, $deserialize = false)
    {

        if (!is_null($country) && (mb_strlen($country) < 1)) {
            throw new \InvalidArgumentException('invalid length for $country when calling CreateIdentityRequestEntityBusinessAddress., must be bigger than or equal to 1.');
        }
        

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region 2-letter state code.
     *
     * @return self
     */
    public function setRegion($region, $deserialize = false)
    {

        if (!is_null($region) && (mb_strlen($region) < 1)) {
            throw new \InvalidArgumentException('invalid length for $region when calling CreateIdentityRequestEntityBusinessAddress., must be bigger than or equal to 1.');
        }
        

        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets line2
     *
     * @return string|null
     */
    public function getLine2()
    {
        return $this->container['line2'];
    }

    /**
     * Sets line2
     *
     * @param string|null $line2 Second line of the address (max 35 characters).
     *
     * @return self
     */
    public function setLine2($line2, $deserialize = false)
    {

        if (!is_null($line2) && (mb_strlen($line2) < 1)) {
            throw new \InvalidArgumentException('invalid length for $line2 when calling CreateIdentityRequestEntityBusinessAddress., must be bigger than or equal to 1.');
        }
        

        $this->container['line2'] = $line2;

        return $this;
    }

    /**
     * Gets line1
     *
     * @return string|null
     */
    public function getLine1()
    {
        return $this->container['line1'];
    }

    /**
     * Sets line1
     *
     * @param string|null $line1 First line of the address (max 35 characters).
     *
     * @return self
     */
    public function setLine1($line1, $deserialize = false)
    {

        if (!is_null($line1) && (mb_strlen($line1) < 1)) {
            throw new \InvalidArgumentException('invalid length for $line1 when calling CreateIdentityRequestEntityBusinessAddress., must be bigger than or equal to 1.');
        }
        

        $this->container['line1'] = $line1;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code Zip or Postal code (max 7 characters).
     *
     * @return self
     */
    public function setPostalCode($postal_code, $deserialize = false)
    {

        if (!is_null($postal_code) && (mb_strlen($postal_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling CreateIdentityRequestEntityBusinessAddress., must be bigger than or equal to 1.');
        }
        

        $this->container['postal_code'] = $postal_code;

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



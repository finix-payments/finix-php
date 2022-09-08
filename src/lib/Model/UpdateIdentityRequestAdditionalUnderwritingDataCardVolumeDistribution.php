<?php
/**
 * UpdateIdentityRequestAdditionalUnderwritingDataCardVolumeDistribution
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
 * UpdateIdentityRequestAdditionalUnderwritingDataCardVolumeDistribution Class Doc Comment
 *
 * @category Class
 * @description The distribution of the merchant&#39;s credit card volume The sum of &#x60;card_volume_distribution&#x60; must be 100.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateIdentityRequestAdditionalUnderwritingDataCardVolumeDistribution implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateIdentityRequest_additional_underwriting_data_card_volume_distribution';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'card_present_percentage' => 'int',
        'ecommerce_percentage' => 'int',
        'mail_order_telephone_order_percentage' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'card_present_percentage' => null,
        'ecommerce_percentage' => null,
        'mail_order_telephone_order_percentage' => null
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
        'card_present_percentage' => 'card_present_percentage',
        'ecommerce_percentage' => 'ecommerce_percentage',
        'mail_order_telephone_order_percentage' => 'mail_order_telephone_order_percentage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_present_percentage' => 'setCardPresentPercentage',
        'ecommerce_percentage' => 'setEcommercePercentage',
        'mail_order_telephone_order_percentage' => 'setMailOrderTelephoneOrderPercentage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_present_percentage' => 'getCardPresentPercentage',
        'ecommerce_percentage' => 'getEcommercePercentage',
        'mail_order_telephone_order_percentage' => 'getMailOrderTelephoneOrderPercentage'
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
        $this->container['card_present_percentage'] = $data['card_present_percentage'] ?? null;
        $this->container['ecommerce_percentage'] = $data['ecommerce_percentage'] ?? null;
        $this->container['mail_order_telephone_order_percentage'] = $data['mail_order_telephone_order_percentage'] ?? null;
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
     * Gets card_present_percentage
     *
     * @return int|null
     */
    public function getCardPresentPercentage()
    {
        return $this->container['card_present_percentage'];
    }

    /**
     * Sets card_present_percentage
     *
     * @param int|null $card_present_percentage The percentage of the merchant's business that's card present (between 0 and 100).
     *
     * @return self
     */
    public function setCardPresentPercentage($card_present_percentage, $deserialize = false)
    {
        $this->container['card_present_percentage'] = $card_present_percentage;

        return $this;
    }

    /**
     * Gets ecommerce_percentage
     *
     * @return int|null
     */
    public function getEcommercePercentage()
    {
        return $this->container['ecommerce_percentage'];
    }

    /**
     * Sets ecommerce_percentage
     *
     * @param int|null $ecommerce_percentage The percentage of the merchant's business that's e-commerce (between 0 and 100).
     *
     * @return self
     */
    public function setEcommercePercentage($ecommerce_percentage, $deserialize = false)
    {
        $this->container['ecommerce_percentage'] = $ecommerce_percentage;

        return $this;
    }

    /**
     * Gets mail_order_telephone_order_percentage
     *
     * @return int|null
     */
    public function getMailOrderTelephoneOrderPercentage()
    {
        return $this->container['mail_order_telephone_order_percentage'];
    }

    /**
     * Sets mail_order_telephone_order_percentage
     *
     * @param int|null $mail_order_telephone_order_percentage The percentage of the merchant's business that's mail or telephone order (between 0 and 100).
     *
     * @return self
     */
    public function setMailOrderTelephoneOrderPercentage($mail_order_telephone_order_percentage, $deserialize = false)
    {
        $this->container['mail_order_telephone_order_percentage'] = $mail_order_telephone_order_percentage;

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



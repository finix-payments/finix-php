<?php
/**
 * CreateAuthorizationRequest3dSecureAuthentication
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
 * CreateAuthorizationRequest3dSecureAuthentication Class Doc Comment
 *
 * @category Class
 * @description The information required to create a 3D secure &#x60;Authorization&#x60;.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateAuthorizationRequest3dSecureAuthentication implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateAuthorizationRequest_3d_secure_authentication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cardholder_authentication' => 'string',
        'cardholder_ip_address' => 'string',
        'electronic_commerce_indicator' => 'string',
        'transaction_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cardholder_authentication' => null,
        'cardholder_ip_address' => null,
        'electronic_commerce_indicator' => null,
        'transaction_id' => null
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
        'cardholder_authentication' => 'cardholder_authentication',
        'cardholder_ip_address' => 'cardholder_ip_address',
        'electronic_commerce_indicator' => 'electronic_commerce_indicator',
        'transaction_id' => 'transaction_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cardholder_authentication' => 'setCardholderAuthentication',
        'cardholder_ip_address' => 'setCardholderIpAddress',
        'electronic_commerce_indicator' => 'setElectronicCommerceIndicator',
        'transaction_id' => 'setTransactionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cardholder_authentication' => 'getCardholderAuthentication',
        'cardholder_ip_address' => 'getCardholderIpAddress',
        'electronic_commerce_indicator' => 'getElectronicCommerceIndicator',
        'transaction_id' => 'getTransactionId'
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
        $this->container['cardholder_authentication'] = $data['cardholder_authentication'] ?? null;
        $this->container['cardholder_ip_address'] = $data['cardholder_ip_address'] ?? null;
        $this->container['electronic_commerce_indicator'] = $data['electronic_commerce_indicator'] ?? null;
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
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
     * Gets cardholder_authentication
     *
     * @return string|null
     */
    public function getCardholderAuthentication()
    {
        return $this->container['cardholder_authentication'];
    }

    /**
     * Sets cardholder_authentication
     *
     * @param string|null $cardholder_authentication Provides evidence that the cardholder authentication occurred or that the merchant attempted authentication. This is unique for each authentication transaction.
     *
     * @return self
     */
    public function setCardholderAuthentication($cardholder_authentication, $deserialize = false)
    {
        $this->container['cardholder_authentication'] = $cardholder_authentication;

        return $this;
    }

    /**
     * Gets cardholder_ip_address
     *
     * @return string|null
     */
    public function getCardholderIpAddress()
    {
        return $this->container['cardholder_ip_address'];
    }

    /**
     * Sets cardholder_ip_address
     *
     * @param string|null $cardholder_ip_address Only required for American Express cards. Format is nnn.nnn.nnn.nnn
     *
     * @return self
     */
    public function setCardholderIpAddress($cardholder_ip_address, $deserialize = false)
    {
        $this->container['cardholder_ip_address'] = $cardholder_ip_address;

        return $this;
    }

    /**
     * Gets electronic_commerce_indicator
     *
     * @return string|null
     */
    public function getElectronicCommerceIndicator()
    {
        return $this->container['electronic_commerce_indicator'];
    }

    /**
     * Sets electronic_commerce_indicator
     *
     * @param string|null $electronic_commerce_indicator AUTHENTICATED: Approved by 3D Secure Vendor; ATTEMPTED: Issuer or cardholder does not support 3D Secure
     *
     * @return self
     */
    public function setElectronicCommerceIndicator($electronic_commerce_indicator, $deserialize = false)
    {
        $this->container['electronic_commerce_indicator'] = $electronic_commerce_indicator;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string|null $transaction_id Only valid for Visa transactions
     *
     * @return self
     */
    public function setTransactionId($transaction_id, $deserialize = false)
    {
        $this->container['transaction_id'] = $transaction_id;

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



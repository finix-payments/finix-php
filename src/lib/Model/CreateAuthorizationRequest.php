<?php
/**
 * CreateAuthorizationRequest
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
 * CreateAuthorizationRequest Class Doc Comment
 *
 * @category Class
 * @description Create an &#x60;Authorization&#x60; resource.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateAuthorizationRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateAuthorizationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_buyer_charges' => '\Finix\Model\AdditionalBuyerCharges',
        'additional_purchase_data' => '\Finix\Model\AdditionalPurchaseData',
        'amount' => 'int',
        'currency' => '\Finix\Model\Currency',
        'device' => 'string',
        'fraud_session_id' => 'string',
        'idempotency_id' => 'string',
        'merchant' => 'string',
        'operation_key' => '\Finix\Model\OperationKey',
        'source' => 'string',
        'tags' => 'array<string,string>',
        '_3d_secure_authentication' => '\Finix\Model\CreateAuthorizationRequest3dSecureAuthentication'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_buyer_charges' => null,
        'additional_purchase_data' => null,
        'amount' => 'int64',
        'currency' => null,
        'device' => null,
        'fraud_session_id' => null,
        'idempotency_id' => null,
        'merchant' => null,
        'operation_key' => null,
        'source' => null,
        'tags' => null,
        '_3d_secure_authentication' => null
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
        'additional_buyer_charges' => 'additional_buyer_charges',
        'additional_purchase_data' => 'additional_purchase_data',
        'amount' => 'amount',
        'currency' => 'currency',
        'device' => 'device',
        'fraud_session_id' => 'fraud_session_id',
        'idempotency_id' => 'idempotency_id',
        'merchant' => 'merchant',
        'operation_key' => 'operation_key',
        'source' => 'source',
        'tags' => 'tags',
        '_3d_secure_authentication' => '3d_secure_authentication'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_buyer_charges' => 'setAdditionalBuyerCharges',
        'additional_purchase_data' => 'setAdditionalPurchaseData',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'device' => 'setDevice',
        'fraud_session_id' => 'setFraudSessionId',
        'idempotency_id' => 'setIdempotencyId',
        'merchant' => 'setMerchant',
        'operation_key' => 'setOperationKey',
        'source' => 'setSource',
        'tags' => 'setTags',
        '_3d_secure_authentication' => 'set3dSecureAuthentication'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_buyer_charges' => 'getAdditionalBuyerCharges',
        'additional_purchase_data' => 'getAdditionalPurchaseData',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'device' => 'getDevice',
        'fraud_session_id' => 'getFraudSessionId',
        'idempotency_id' => 'getIdempotencyId',
        'merchant' => 'getMerchant',
        'operation_key' => 'getOperationKey',
        'source' => 'getSource',
        'tags' => 'getTags',
        '_3d_secure_authentication' => 'get3dSecureAuthentication'
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
        $this->container['additional_buyer_charges'] = $data['additional_buyer_charges'] ?? null;
        $this->container['additional_purchase_data'] = $data['additional_purchase_data'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['device'] = $data['device'] ?? null;
        $this->container['fraud_session_id'] = $data['fraud_session_id'] ?? null;
        $this->container['idempotency_id'] = $data['idempotency_id'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['operation_key'] = $data['operation_key'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['_3d_secure_authentication'] = $data['_3d_secure_authentication'] ?? null;
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
     * Gets additional_buyer_charges
     *
     * @return \Finix\Model\AdditionalBuyerCharges|null
     */
    public function getAdditionalBuyerCharges()
    {
        return $this->container['additional_buyer_charges'];
    }

    /**
     * Sets additional_buyer_charges
     *
     * @param \Finix\Model\AdditionalBuyerCharges|null $additional_buyer_charges additional_buyer_charges
     *
     * @return self
     */
    public function setAdditionalBuyerCharges($additional_buyer_charges, $deserialize = false)
    {
        $this->container['additional_buyer_charges'] = $additional_buyer_charges;

        return $this;
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
     * Gets device
     *
     * @return string|null
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param string|null $device The ID of the resource.
     *
     * @return self
     */
    public function setDevice($device, $deserialize = false)
    {
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets fraud_session_id
     *
     * @return string|null
     */
    public function getFraudSessionId()
    {
        return $this->container['fraud_session_id'];
    }

    /**
     * Sets fraud_session_id
     *
     * @param string|null $fraud_session_id The `fraud_session_session` ID you want to review for fraud. For more info, see [Fraud Detection](/docs/guides/payments/fraud-detection/).
     *
     * @return self
     */
    public function setFraudSessionId($fraud_session_id, $deserialize = false)
    {
        $this->container['fraud_session_id'] = $fraud_session_id;

        return $this;
    }

    /**
     * Gets idempotency_id
     *
     * @return string|null
     */
    public function getIdempotencyId()
    {
        return $this->container['idempotency_id'];
    }

    /**
     * Sets idempotency_id
     *
     * @param string|null $idempotency_id A randomly generated value that'll be associated with the request.
     *
     * @return self
     */
    public function setIdempotencyId($idempotency_id, $deserialize = false)
    {
        $this->container['idempotency_id'] = $idempotency_id;

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
     * @param string|null $merchant The ID of the resource.
     *
     * @return self
     */
    public function setMerchant($merchant, $deserialize = false)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets operation_key
     *
     * @return \Finix\Model\OperationKey|null
     */
    public function getOperationKey()
    {
        return $this->container['operation_key'];
    }

    /**
     * Sets operation_key
     *
     * @param \Finix\Model\OperationKey|null $operation_key operation_key
     *
     * @return self
     */
    public function setOperationKey($operation_key, $deserialize = false)
    {
        $this->container['operation_key'] = $operation_key;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source The ID of the resource.
     *
     * @return self
     */
    public function setSource($source, $deserialize = false)
    {
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
     * Gets _3d_secure_authentication
     *
     * @return \Finix\Model\CreateAuthorizationRequest3dSecureAuthentication|null
     */
    public function get3dSecureAuthentication()
    {
        return $this->container['_3d_secure_authentication'];
    }

    /**
     * Sets _3d_secure_authentication
     *
     * @param \Finix\Model\CreateAuthorizationRequest3dSecureAuthentication|null $_3d_secure_authentication _3d_secure_authentication
     *
     * @return self
     */
    public function set3dSecureAuthentication($_3d_secure_authentication, $deserialize = false)
    {
        $this->container['_3d_secure_authentication'] = $_3d_secure_authentication;

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



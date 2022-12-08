<?php
/**
 * OnboardingFormOnboardingData
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
 * OnboardingFormOnboardingData Class Doc Comment
 *
 * @category Class
 * @description The prefilled information of the user that&#39;s being onboarding. See [Prefilling Fields](/guides/onboarding/onboarding-form/).
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OnboardingFormOnboardingData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OnboardingForm_onboarding_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_underwriting_data' => 'object',
        'associated_entities' => 'object[]',
        'entity' => 'object',
        'max_transaction_amount' => 'int',
        'payment_instruments' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_underwriting_data' => null,
        'associated_entities' => null,
        'entity' => null,
        'max_transaction_amount' => null,
        'payment_instruments' => null
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
        'additional_underwriting_data' => 'additional_underwriting_data',
        'associated_entities' => 'associated_entities',
        'entity' => 'entity',
        'max_transaction_amount' => 'max_transaction_amount',
        'payment_instruments' => 'payment_instruments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_underwriting_data' => 'setAdditionalUnderwritingData',
        'associated_entities' => 'setAssociatedEntities',
        'entity' => 'setEntity',
        'max_transaction_amount' => 'setMaxTransactionAmount',
        'payment_instruments' => 'setPaymentInstruments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_underwriting_data' => 'getAdditionalUnderwritingData',
        'associated_entities' => 'getAssociatedEntities',
        'entity' => 'getEntity',
        'max_transaction_amount' => 'getMaxTransactionAmount',
        'payment_instruments' => 'getPaymentInstruments'
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
        $this->container['additional_underwriting_data'] = $data['additional_underwriting_data'] ?? null;
        $this->container['associated_entities'] = $data['associated_entities'] ?? null;
        $this->container['entity'] = $data['entity'] ?? null;
        $this->container['max_transaction_amount'] = $data['max_transaction_amount'] ?? null;
        $this->container['payment_instruments'] = $data['payment_instruments'] ?? null;
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
     * Gets additional_underwriting_data
     *
     * @return object|null
     */
    public function getAdditionalUnderwritingData()
    {
        return $this->container['additional_underwriting_data'];
    }

    /**
     * Sets additional_underwriting_data
     *
     * @param object|null $additional_underwriting_data Additional underwriting data about the user.
     *
     * @return self
     */
    public function setAdditionalUnderwritingData($additional_underwriting_data, $deserialize = false)
    {
        $this->container['additional_underwriting_data'] = $additional_underwriting_data;

        return $this;
    }

    /**
     * Gets associated_entities
     *
     * @return object[]|null
     */
    public function getAssociatedEntities()
    {
        return $this->container['associated_entities'];
    }

    /**
     * Sets associated_entities
     *
     * @param object[]|null $associated_entities The `entities` saved in the `associated_identities` of the user. For more information, see [Create an Associated Identity](/api/#operation/createAssociatedIdentity).
     *
     * @return self
     */
    public function setAssociatedEntities($associated_entities, $deserialize = false)
    {
        $this->container['associated_entities'] = $associated_entities;

        return $this;
    }

    /**
     * Gets entity
     *
     * @return object|null
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param object|null $entity The `entity` information saved in the `Identity` of the user.
     *
     * @return self
     */
    public function setEntity($entity, $deserialize = false)
    {
        $this->container['entity'] = $entity;

        return $this;
    }

    /**
     * Gets max_transaction_amount
     *
     * @return int|null
     */
    public function getMaxTransactionAmount()
    {
        return $this->container['max_transaction_amount'];
    }

    /**
     * Sets max_transaction_amount
     *
     * @param int|null $max_transaction_amount Maximum amount that can be transacted for a single transaction in cents (max 12 characters). Must be equal to or less than your `max_transaction_amount`.
     *
     * @return self
     */
    public function setMaxTransactionAmount($max_transaction_amount, $deserialize = false)
    {
        $this->container['max_transaction_amount'] = $max_transaction_amount;

        return $this;
    }

    /**
     * Gets payment_instruments
     *
     * @return object|null
     */
    public function getPaymentInstruments()
    {
        return $this->container['payment_instruments'];
    }

    /**
     * Sets payment_instruments
     *
     * @param object|null $payment_instruments The `Payment Instrument` that'll be used to payout the user. For more information, see [Payouts](/guides/payouts).
     *
     * @return self
     */
    public function setPaymentInstruments($payment_instruments, $deserialize = false)
    {
        $this->container['payment_instruments'] = $payment_instruments;

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



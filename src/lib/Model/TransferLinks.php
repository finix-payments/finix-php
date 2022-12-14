<?php
/**
 * TransferLinks
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
 * TransferLinks Class Doc Comment
 *
 * @category Class
 * @description For your convenience, every response includes several URLs which link to resources relevant to the request. You can use these &#x60;_links&#x60; to make your follow-up requests and quickly access relevant IDs.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransferLinks implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Transfer__links';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'application' => '\Finix\Model\ApplicationProfileLinksApplication',
        'destination' => '\Finix\Model\TransferLinksDestination',
        'device' => '\Finix\Model\AuthorizationLinksDevice',
        'disputes' => '\Finix\Model\TransferLinksDisputes',
        'fee_profile' => '\Finix\Model\TransferLinksFeeProfile',
        'fees' => '\Finix\Model\TransferLinksFees',
        'merchant_identity' => '\Finix\Model\AuthorizationLinksMerchantIdentity',
        'payment_instruments' => '\Finix\Model\TransferLinksPaymentInstruments',
        'disputed_transfer' => '\Finix\Model\TransferLinksDisputedTransfer',
        'reversals' => '\Finix\Model\TransferLinksReversals',
        'self' => '\Finix\Model\ApplicationLinksSelf',
        'parent' => '\Finix\Model\TransferLinksParent',
        'source' => '\Finix\Model\TransferLinksSource'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'application' => null,
        'destination' => null,
        'device' => null,
        'disputes' => null,
        'fee_profile' => null,
        'fees' => null,
        'merchant_identity' => null,
        'payment_instruments' => null,
        'disputed_transfer' => null,
        'reversals' => null,
        'self' => null,
        'parent' => null,
        'source' => null
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
        'application' => 'application',
        'destination' => 'destination',
        'device' => 'device',
        'disputes' => 'disputes',
        'fee_profile' => 'fee_profile',
        'fees' => 'fees',
        'merchant_identity' => 'merchant_identity',
        'payment_instruments' => 'payment_instruments',
        'disputed_transfer' => 'disputed_transfer',
        'reversals' => 'reversals',
        'self' => 'self',
        'parent' => 'parent',
        'source' => 'source'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'application' => 'setApplication',
        'destination' => 'setDestination',
        'device' => 'setDevice',
        'disputes' => 'setDisputes',
        'fee_profile' => 'setFeeProfile',
        'fees' => 'setFees',
        'merchant_identity' => 'setMerchantIdentity',
        'payment_instruments' => 'setPaymentInstruments',
        'disputed_transfer' => 'setDisputedTransfer',
        'reversals' => 'setReversals',
        'self' => 'setSelf',
        'parent' => 'setParent',
        'source' => 'setSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'application' => 'getApplication',
        'destination' => 'getDestination',
        'device' => 'getDevice',
        'disputes' => 'getDisputes',
        'fee_profile' => 'getFeeProfile',
        'fees' => 'getFees',
        'merchant_identity' => 'getMerchantIdentity',
        'payment_instruments' => 'getPaymentInstruments',
        'disputed_transfer' => 'getDisputedTransfer',
        'reversals' => 'getReversals',
        'self' => 'getSelf',
        'parent' => 'getParent',
        'source' => 'getSource'
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
        $this->container['application'] = $data['application'] ?? null;
        $this->container['destination'] = $data['destination'] ?? null;
        $this->container['device'] = $data['device'] ?? null;
        $this->container['disputes'] = $data['disputes'] ?? null;
        $this->container['fee_profile'] = $data['fee_profile'] ?? null;
        $this->container['fees'] = $data['fees'] ?? null;
        $this->container['merchant_identity'] = $data['merchant_identity'] ?? null;
        $this->container['payment_instruments'] = $data['payment_instruments'] ?? null;
        $this->container['disputed_transfer'] = $data['disputed_transfer'] ?? null;
        $this->container['reversals'] = $data['reversals'] ?? null;
        $this->container['self'] = $data['self'] ?? null;
        $this->container['parent'] = $data['parent'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
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
     * Gets application
     *
     * @return \Finix\Model\ApplicationProfileLinksApplication|null
     */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
     * Sets application
     *
     * @param \Finix\Model\ApplicationProfileLinksApplication|null $application application
     *
     * @return self
     */
    public function setApplication($application, $deserialize = false)
    {
        $this->container['application'] = $application;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return \Finix\Model\TransferLinksDestination|null
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param \Finix\Model\TransferLinksDestination|null $destination destination
     *
     * @return self
     */
    public function setDestination($destination, $deserialize = false)
    {
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets device
     *
     * @return \Finix\Model\AuthorizationLinksDevice|null
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param \Finix\Model\AuthorizationLinksDevice|null $device device
     *
     * @return self
     */
    public function setDevice($device, $deserialize = false)
    {
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets disputes
     *
     * @return \Finix\Model\TransferLinksDisputes|null
     */
    public function getDisputes()
    {
        return $this->container['disputes'];
    }

    /**
     * Sets disputes
     *
     * @param \Finix\Model\TransferLinksDisputes|null $disputes disputes
     *
     * @return self
     */
    public function setDisputes($disputes, $deserialize = false)
    {
        $this->container['disputes'] = $disputes;

        return $this;
    }

    /**
     * Gets fee_profile
     *
     * @return \Finix\Model\TransferLinksFeeProfile|null
     */
    public function getFeeProfile()
    {
        return $this->container['fee_profile'];
    }

    /**
     * Sets fee_profile
     *
     * @param \Finix\Model\TransferLinksFeeProfile|null $fee_profile fee_profile
     *
     * @return self
     */
    public function setFeeProfile($fee_profile, $deserialize = false)
    {
        $this->container['fee_profile'] = $fee_profile;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return \Finix\Model\TransferLinksFees|null
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \Finix\Model\TransferLinksFees|null $fees fees
     *
     * @return self
     */
    public function setFees($fees, $deserialize = false)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets merchant_identity
     *
     * @return \Finix\Model\AuthorizationLinksMerchantIdentity|null
     */
    public function getMerchantIdentity()
    {
        return $this->container['merchant_identity'];
    }

    /**
     * Sets merchant_identity
     *
     * @param \Finix\Model\AuthorizationLinksMerchantIdentity|null $merchant_identity merchant_identity
     *
     * @return self
     */
    public function setMerchantIdentity($merchant_identity, $deserialize = false)
    {
        $this->container['merchant_identity'] = $merchant_identity;

        return $this;
    }

    /**
     * Gets payment_instruments
     *
     * @return \Finix\Model\TransferLinksPaymentInstruments|null
     */
    public function getPaymentInstruments()
    {
        return $this->container['payment_instruments'];
    }

    /**
     * Sets payment_instruments
     *
     * @param \Finix\Model\TransferLinksPaymentInstruments|null $payment_instruments payment_instruments
     *
     * @return self
     */
    public function setPaymentInstruments($payment_instruments, $deserialize = false)
    {
        $this->container['payment_instruments'] = $payment_instruments;

        return $this;
    }

    /**
     * Gets disputed_transfer
     *
     * @return \Finix\Model\TransferLinksDisputedTransfer|null
     */
    public function getDisputedTransfer()
    {
        return $this->container['disputed_transfer'];
    }

    /**
     * Sets disputed_transfer
     *
     * @param \Finix\Model\TransferLinksDisputedTransfer|null $disputed_transfer disputed_transfer
     *
     * @return self
     */
    public function setDisputedTransfer($disputed_transfer, $deserialize = false)
    {
        $this->container['disputed_transfer'] = $disputed_transfer;

        return $this;
    }

    /**
     * Gets reversals
     *
     * @return \Finix\Model\TransferLinksReversals|null
     */
    public function getReversals()
    {
        return $this->container['reversals'];
    }

    /**
     * Sets reversals
     *
     * @param \Finix\Model\TransferLinksReversals|null $reversals reversals
     *
     * @return self
     */
    public function setReversals($reversals, $deserialize = false)
    {
        $this->container['reversals'] = $reversals;

        return $this;
    }

    /**
     * Gets self
     *
     * @return \Finix\Model\ApplicationLinksSelf|null
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param \Finix\Model\ApplicationLinksSelf|null $self self
     *
     * @return self
     */
    public function setSelf($self, $deserialize = false)
    {
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return \Finix\Model\TransferLinksParent|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \Finix\Model\TransferLinksParent|null $parent parent
     *
     * @return self
     */
    public function setParent($parent, $deserialize = false)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \Finix\Model\TransferLinksSource|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \Finix\Model\TransferLinksSource|null $source source
     *
     * @return self
     */
    public function setSource($source, $deserialize = false)
    {
        $this->container['source'] = $source;

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



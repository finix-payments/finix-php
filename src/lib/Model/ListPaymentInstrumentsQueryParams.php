<?php
/**
 * ListPaymentInstrumentsQueryParams
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
 * ListPaymentInstrumentsQueryParams Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ListPaymentInstrumentsQueryParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListPaymentInstrumentsQueryParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_last4' => 'string',
        'account_routing_number' => 'string',
        'after_cursor' => 'string',
        'application' => 'string',
        'before_cursor' => 'string',
        'bin' => 'string',
        'created_at_gte' => 'string',
        'created_at_lte' => 'string',
        'expiration_month' => 'string',
        'expiration_year' => 'string',
        'last_four' => 'string',
        'limit' => 'int',
        'name' => 'string',
        'owner_identity_id' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_last4' => null,
        'account_routing_number' => null,
        'after_cursor' => null,
        'application' => null,
        'before_cursor' => null,
        'bin' => null,
        'created_at_gte' => null,
        'created_at_lte' => null,
        'expiration_month' => null,
        'expiration_year' => null,
        'last_four' => null,
        'limit' => null,
        'name' => null,
        'owner_identity_id' => null,
        'type' => null
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
        'account_last4' => 'account_last4',
        'account_routing_number' => 'account_routing_number',
        'after_cursor' => 'after_cursor',
        'application' => 'application',
        'before_cursor' => 'before_cursor',
        'bin' => 'bin',
        'created_at_gte' => 'created_at.gte',
        'created_at_lte' => 'created_at.lte',
        'expiration_month' => 'expiration_month',
        'expiration_year' => 'expiration_year',
        'last_four' => 'last_four',
        'limit' => 'limit',
        'name' => 'name',
        'owner_identity_id' => 'owner_identity_id',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_last4' => 'setAccountLast4',
        'account_routing_number' => 'setAccountRoutingNumber',
        'after_cursor' => 'setAfterCursor',
        'application' => 'setApplication',
        'before_cursor' => 'setBeforeCursor',
        'bin' => 'setBin',
        'created_at_gte' => 'setCreatedAtGte',
        'created_at_lte' => 'setCreatedAtLte',
        'expiration_month' => 'setExpirationMonth',
        'expiration_year' => 'setExpirationYear',
        'last_four' => 'setLastFour',
        'limit' => 'setLimit',
        'name' => 'setName',
        'owner_identity_id' => 'setOwnerIdentityId',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_last4' => 'getAccountLast4',
        'account_routing_number' => 'getAccountRoutingNumber',
        'after_cursor' => 'getAfterCursor',
        'application' => 'getApplication',
        'before_cursor' => 'getBeforeCursor',
        'bin' => 'getBin',
        'created_at_gte' => 'getCreatedAtGte',
        'created_at_lte' => 'getCreatedAtLte',
        'expiration_month' => 'getExpirationMonth',
        'expiration_year' => 'getExpirationYear',
        'last_four' => 'getLastFour',
        'limit' => 'getLimit',
        'name' => 'getName',
        'owner_identity_id' => 'getOwnerIdentityId',
        'type' => 'getType'
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
        $this->container['account_last4'] = $data['account_last4'] ?? null;
        $this->container['account_routing_number'] = $data['account_routing_number'] ?? null;
        $this->container['after_cursor'] = $data['after_cursor'] ?? null;
        $this->container['application'] = $data['application'] ?? null;
        $this->container['before_cursor'] = $data['before_cursor'] ?? null;
        $this->container['bin'] = $data['bin'] ?? null;
        $this->container['created_at_gte'] = $data['created_at_gte'] ?? null;
        $this->container['created_at_lte'] = $data['created_at_lte'] ?? null;
        $this->container['expiration_month'] = $data['expiration_month'] ?? null;
        $this->container['expiration_year'] = $data['expiration_year'] ?? null;
        $this->container['last_four'] = $data['last_four'] ?? null;
        $this->container['limit'] = $data['limit'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['owner_identity_id'] = $data['owner_identity_id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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
     * Gets account_last4
     *
     * @return string|null
     */
    public function getAccountLast4()
    {
        return $this->container['account_last4'];
    }

    /**
     * Sets account_last4
     *
     * @param string|null $account_last4 Filter by the last 4 digits of the account if available.
     *
     * @return self
     */
    public function setAccountLast4($account_last4, $deserialize = false)
    {
        $this->container['account_last4'] = $account_last4;

        return $this;
    }

    /**
     * Gets account_routing_number
     *
     * @return string|null
     */
    public function getAccountRoutingNumber()
    {
        return $this->container['account_routing_number'];
    }

    /**
     * Sets account_routing_number
     *
     * @param string|null $account_routing_number Filter by the account routing number if available.
     *
     * @return self
     */
    public function setAccountRoutingNumber($account_routing_number, $deserialize = false)
    {
        $this->container['account_routing_number'] = $account_routing_number;

        return $this;
    }

    /**
     * Gets after_cursor
     *
     * @return string|null
     */
    public function getAfterCursor()
    {
        return $this->container['after_cursor'];
    }

    /**
     * Sets after_cursor
     *
     * @param string|null $after_cursor Return every resource created after the cursor value.
     *
     * @return self
     */
    public function setAfterCursor($after_cursor, $deserialize = false)
    {
        $this->container['after_cursor'] = $after_cursor;

        return $this;
    }

    /**
     * Gets application
     *
     * @return string|null
     */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
     * Sets application
     *
     * @param string|null $application Filter by `Application` ID.
     *
     * @return self
     */
    public function setApplication($application, $deserialize = false)
    {
        $this->container['application'] = $application;

        return $this;
    }

    /**
     * Gets before_cursor
     *
     * @return string|null
     */
    public function getBeforeCursor()
    {
        return $this->container['before_cursor'];
    }

    /**
     * Sets before_cursor
     *
     * @param string|null $before_cursor Return every resource created before the cursor value.
     *
     * @return self
     */
    public function setBeforeCursor($before_cursor, $deserialize = false)
    {
        $this->container['before_cursor'] = $before_cursor;

        return $this;
    }

    /**
     * Gets bin
     *
     * @return string|null
     */
    public function getBin()
    {
        return $this->container['bin'];
    }

    /**
     * Sets bin
     *
     * @param string|null $bin Filter by Bank Identification Number (BIN). The BIN is the first 6 digits of the masked number.
     *
     * @return self
     */
    public function setBin($bin, $deserialize = false)
    {
        $this->container['bin'] = $bin;

        return $this;
    }

    /**
     * Gets created_at_gte
     *
     * @return string|null
     */
    public function getCreatedAtGte()
    {
        return $this->container['created_at_gte'];
    }

    /**
     * Sets created_at_gte
     *
     * @param string|null $created_at_gte Filter where `created_at` is after the given date.
     *
     * @return self
     */
    public function setCreatedAtGte($created_at_gte, $deserialize = false)
    {
        $this->container['created_at_gte'] = $created_at_gte;

        return $this;
    }

    /**
     * Gets created_at_lte
     *
     * @return string|null
     */
    public function getCreatedAtLte()
    {
        return $this->container['created_at_lte'];
    }

    /**
     * Sets created_at_lte
     *
     * @param string|null $created_at_lte Filter where `created_at` is before the given date.
     *
     * @return self
     */
    public function setCreatedAtLte($created_at_lte, $deserialize = false)
    {
        $this->container['created_at_lte'] = $created_at_lte;

        return $this;
    }

    /**
     * Gets expiration_month
     *
     * @return string|null
     */
    public function getExpirationMonth()
    {
        return $this->container['expiration_month'];
    }

    /**
     * Sets expiration_month
     *
     * @param string|null $expiration_month Filter by the expiration month associated with the `Payment Instrument` if applicable. This filter only applies to payment cards.
     *
     * @return self
     */
    public function setExpirationMonth($expiration_month, $deserialize = false)
    {
        $this->container['expiration_month'] = $expiration_month;

        return $this;
    }

    /**
     * Gets expiration_year
     *
     * @return string|null
     */
    public function getExpirationYear()
    {
        return $this->container['expiration_year'];
    }

    /**
     * Sets expiration_year
     *
     * @param string|null $expiration_year Filter by the 4 digit expiration year associated with the Payment Instrument if applicable. This filter only applies to payment cards.
     *
     * @return self
     */
    public function setExpirationYear($expiration_year, $deserialize = false)
    {
        $this->container['expiration_year'] = $expiration_year;

        return $this;
    }

    /**
     * Gets last_four
     *
     * @return string|null
     */
    public function getLastFour()
    {
        return $this->container['last_four'];
    }

    /**
     * Sets last_four
     *
     * @param string|null $last_four Filter by the last 4 digits of the `Payment Instrument` card. This filter only applies to payment cards.
     *
     * @return self
     */
    public function setLastFour($last_four, $deserialize = false)
    {
        $this->container['last_four'] = $last_four;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit The numbers of items to return.
     *
     * @return self
     */
    public function setLimit($limit, $deserialize = false)
    {
        $this->container['limit'] = $limit;

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
     * @param string|null $name Filter by the name.
     *
     * @return self
     */
    public function setName($name, $deserialize = false)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owner_identity_id
     *
     * @return string|null
     */
    public function getOwnerIdentityId()
    {
        return $this->container['owner_identity_id'];
    }

    /**
     * Sets owner_identity_id
     *
     * @param string|null $owner_identity_id Filter by the owner id of the associated `Identity`.
     *
     * @return self
     */
    public function setOwnerIdentityId($owner_identity_id, $deserialize = false)
    {
        $this->container['owner_identity_id'] = $owner_identity_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Filter by the `Payment Instrument` type.
     *
     * @return self
     */
    public function setType($type, $deserialize = false)
    {
        $this->container['type'] = $type;

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



<?php
/**
 * ListBalanceTransfersQueryParams
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
 * ListBalanceTransfersQueryParams Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ListBalanceTransfersQueryParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListBalanceTransfersQueryParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'limit' => 'int',
        'offset' => 'int',
        'page_number' => 'int',
        'page_size' => 'int',
        'created_at_gte' => 'string',
        'created_at_lte' => 'string',
        'updated_at_gte' => 'string',
        'updated_at_lte' => 'string',
        'idempotency_id' => 'string',
        'amount' => 'int',
        'description' => 'string',
        'destination' => 'string',
        'external_reference_id' => 'string',
        'reference_id' => 'string',
        'source' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'limit' => null,
        'offset' => null,
        'page_number' => null,
        'page_size' => null,
        'created_at_gte' => null,
        'created_at_lte' => null,
        'updated_at_gte' => null,
        'updated_at_lte' => null,
        'idempotency_id' => null,
        'amount' => null,
        'description' => null,
        'destination' => null,
        'external_reference_id' => null,
        'reference_id' => null,
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
        'limit' => 'limit',
        'offset' => 'offset',
        'page_number' => 'pageNumber',
        'page_size' => 'pageSize',
        'created_at_gte' => 'created_at.gte',
        'created_at_lte' => 'created_at.lte',
        'updated_at_gte' => 'updated_at.gte',
        'updated_at_lte' => 'updated_at.lte',
        'idempotency_id' => 'idempotency_id',
        'amount' => 'amount',
        'description' => 'description',
        'destination' => 'destination',
        'external_reference_id' => 'external_reference_id',
        'reference_id' => 'reference_id',
        'source' => 'source'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'limit' => 'setLimit',
        'offset' => 'setOffset',
        'page_number' => 'setPageNumber',
        'page_size' => 'setPageSize',
        'created_at_gte' => 'setCreatedAtGte',
        'created_at_lte' => 'setCreatedAtLte',
        'updated_at_gte' => 'setUpdatedAtGte',
        'updated_at_lte' => 'setUpdatedAtLte',
        'idempotency_id' => 'setIdempotencyId',
        'amount' => 'setAmount',
        'description' => 'setDescription',
        'destination' => 'setDestination',
        'external_reference_id' => 'setExternalReferenceId',
        'reference_id' => 'setReferenceId',
        'source' => 'setSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'limit' => 'getLimit',
        'offset' => 'getOffset',
        'page_number' => 'getPageNumber',
        'page_size' => 'getPageSize',
        'created_at_gte' => 'getCreatedAtGte',
        'created_at_lte' => 'getCreatedAtLte',
        'updated_at_gte' => 'getUpdatedAtGte',
        'updated_at_lte' => 'getUpdatedAtLte',
        'idempotency_id' => 'getIdempotencyId',
        'amount' => 'getAmount',
        'description' => 'getDescription',
        'destination' => 'getDestination',
        'external_reference_id' => 'getExternalReferenceId',
        'reference_id' => 'getReferenceId',
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
        $this->container['limit'] = $data['limit'] ?? null;
        $this->container['offset'] = $data['offset'] ?? null;
        $this->container['page_number'] = $data['page_number'] ?? null;
        $this->container['page_size'] = $data['page_size'] ?? null;
        $this->container['created_at_gte'] = $data['created_at_gte'] ?? null;
        $this->container['created_at_lte'] = $data['created_at_lte'] ?? null;
        $this->container['updated_at_gte'] = $data['updated_at_gte'] ?? null;
        $this->container['updated_at_lte'] = $data['updated_at_lte'] ?? null;
        $this->container['idempotency_id'] = $data['idempotency_id'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['destination'] = $data['destination'] ?? null;
        $this->container['external_reference_id'] = $data['external_reference_id'] ?? null;
        $this->container['reference_id'] = $data['reference_id'] ?? null;
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
     * Gets offset
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int|null $offset The number of items to skip before starting to collect the result set.
     *
     * @return self
     */
    public function setOffset($offset, $deserialize = false)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets page_number
     *
     * @return int|null
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /**
     * Sets page_number
     *
     * @param int|null $page_number The page number to list.
     *
     * @return self
     */
    public function setPageNumber($page_number, $deserialize = false)
    {
        $this->container['page_number'] = $page_number;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int|null $page_size The size of the page.
     *
     * @return self
     */
    public function setPageSize($page_size, $deserialize = false)
    {
        $this->container['page_size'] = $page_size;

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
     * Gets updated_at_gte
     *
     * @return string|null
     */
    public function getUpdatedAtGte()
    {
        return $this->container['updated_at_gte'];
    }

    /**
     * Sets updated_at_gte
     *
     * @param string|null $updated_at_gte Filter where `updated_at` is after the given date.
     *
     * @return self
     */
    public function setUpdatedAtGte($updated_at_gte, $deserialize = false)
    {
        $this->container['updated_at_gte'] = $updated_at_gte;

        return $this;
    }

    /**
     * Gets updated_at_lte
     *
     * @return string|null
     */
    public function getUpdatedAtLte()
    {
        return $this->container['updated_at_lte'];
    }

    /**
     * Sets updated_at_lte
     *
     * @param string|null $updated_at_lte Filter where `updated_at` is before the given date.
     *
     * @return self
     */
    public function setUpdatedAtLte($updated_at_lte, $deserialize = false)
    {
        $this->container['updated_at_lte'] = $updated_at_lte;

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
     * @param string|null $idempotency_id Filter by `idempotency_id`.
     *
     * @return self
     */
    public function setIdempotencyId($idempotency_id, $deserialize = false)
    {
        $this->container['idempotency_id'] = $idempotency_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount Filter by an amount equal to the given value.
     *
     * @return self
     */
    public function setAmount($amount, $deserialize = false)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Filter by the `Description` value .
     *
     * @return self
     */
    public function setDescription($description, $deserialize = false)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return string|null
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param string|null $destination Filter by the `Payment Instrument` saved in `Destination`.
     *
     * @return self
     */
    public function setDestination($destination, $deserialize = false)
    {
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets external_reference_id
     *
     * @return string|null
     */
    public function getExternalReferenceId()
    {
        return $this->container['external_reference_id'];
    }

    /**
     * Sets external_reference_id
     *
     * @param string|null $external_reference_id Filter by the value saved in `external_reference_id`.
     *
     * @return self
     */
    public function setExternalReferenceId($external_reference_id, $deserialize = false)
    {
        $this->container['external_reference_id'] = $external_reference_id;

        return $this;
    }

    /**
     * Gets reference_id
     *
     * @return string|null
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param string|null $reference_id Filter by the value saved in `reference_id`.
     *
     * @return self
     */
    public function setReferenceId($reference_id, $deserialize = false)
    {
        $this->container['reference_id'] = $reference_id;

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
     * @param string|null $source Filter by the `Payment Instrument` saved in `source`.
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



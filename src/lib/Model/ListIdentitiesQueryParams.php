<?php
/**
 * ListIdentitiesQueryParams
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
 * ListIdentitiesQueryParams Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ListIdentitiesQueryParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListIdentitiesQueryParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sort' => 'string',
        'after_cursor' => 'string',
        'limit' => 'int',
        'id' => 'string',
        'created_at_gte' => 'string',
        'created_at_lte' => 'string',
        'default_statement_descriptor' => 'string',
        'business_name' => 'string',
        'business_type' => 'string',
        'email' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'title' => 'string',
        'before_cursor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sort' => null,
        'after_cursor' => null,
        'limit' => null,
        'id' => null,
        'created_at_gte' => null,
        'created_at_lte' => null,
        'default_statement_descriptor' => null,
        'business_name' => null,
        'business_type' => null,
        'email' => null,
        'first_name' => null,
        'last_name' => null,
        'title' => null,
        'before_cursor' => null
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
        'sort' => 'sort',
        'after_cursor' => 'after_cursor',
        'limit' => 'limit',
        'id' => 'id',
        'created_at_gte' => 'created_at.gte',
        'created_at_lte' => 'created_at.lte',
        'default_statement_descriptor' => 'default_statement_descriptor',
        'business_name' => 'business_name',
        'business_type' => 'business_type',
        'email' => 'email',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'title' => 'title',
        'before_cursor' => 'before_cursor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sort' => 'setSort',
        'after_cursor' => 'setAfterCursor',
        'limit' => 'setLimit',
        'id' => 'setId',
        'created_at_gte' => 'setCreatedAtGte',
        'created_at_lte' => 'setCreatedAtLte',
        'default_statement_descriptor' => 'setDefaultStatementDescriptor',
        'business_name' => 'setBusinessName',
        'business_type' => 'setBusinessType',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'title' => 'setTitle',
        'before_cursor' => 'setBeforeCursor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sort' => 'getSort',
        'after_cursor' => 'getAfterCursor',
        'limit' => 'getLimit',
        'id' => 'getId',
        'created_at_gte' => 'getCreatedAtGte',
        'created_at_lte' => 'getCreatedAtLte',
        'default_statement_descriptor' => 'getDefaultStatementDescriptor',
        'business_name' => 'getBusinessName',
        'business_type' => 'getBusinessType',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'title' => 'getTitle',
        'before_cursor' => 'getBeforeCursor'
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
        $this->container['sort'] = $data['sort'] ?? null;
        $this->container['after_cursor'] = $data['after_cursor'] ?? null;
        $this->container['limit'] = $data['limit'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['created_at_gte'] = $data['created_at_gte'] ?? null;
        $this->container['created_at_lte'] = $data['created_at_lte'] ?? null;
        $this->container['default_statement_descriptor'] = $data['default_statement_descriptor'] ?? null;
        $this->container['business_name'] = $data['business_name'] ?? null;
        $this->container['business_type'] = $data['business_type'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['before_cursor'] = $data['before_cursor'] ?? null;
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
     * Gets sort
     *
     * @return string|null
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param string|null $sort Specify key to be used for sorting the collection.
     *
     * @return self
     */
    public function setSort($sort, $deserialize = false)
    {
        $this->container['sort'] = $sort;

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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Filter by `id`.
     *
     * @return self
     */
    public function setId($id, $deserialize = false)
    {
        $this->container['id'] = $id;

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
     * Gets default_statement_descriptor
     *
     * @return string|null
     */
    public function getDefaultStatementDescriptor()
    {
        return $this->container['default_statement_descriptor'];
    }

    /**
     * Sets default_statement_descriptor
     *
     * @param string|null $default_statement_descriptor Filter by the `default_statement_descriptor`.
     *
     * @return self
     */
    public function setDefaultStatementDescriptor($default_statement_descriptor, $deserialize = false)
    {
        $this->container['default_statement_descriptor'] = $default_statement_descriptor;

        return $this;
    }

    /**
     * Gets business_name
     *
     * @return string|null
     */
    public function getBusinessName()
    {
        return $this->container['business_name'];
    }

    /**
     * Sets business_name
     *
     * @param string|null $business_name Filter by the full business name. Partial business names are not supported.
     *
     * @return self
     */
    public function setBusinessName($business_name, $deserialize = false)
    {
        $this->container['business_name'] = $business_name;

        return $this;
    }

    /**
     * Gets business_type
     *
     * @return string|null
     */
    public function getBusinessType()
    {
        return $this->container['business_type'];
    }

    /**
     * Sets business_type
     *
     * @param string|null $business_type Filter by the business type. Partial business types are not supported.
     *
     * @return self
     */
    public function setBusinessType($business_type, $deserialize = false)
    {
        $this->container['business_type'] = $business_type;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Filter by the email address or email domain. Partial emails are not supported.
     *
     * @return self
     */
    public function setEmail($email, $deserialize = false)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name Filter by the first name of the person associated to the `Identity`.
     *
     * @return self
     */
    public function setFirstName($first_name, $deserialize = false)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name Filter by the last name of the person associated to the `Identity`.
     *
     * @return self
     */
    public function setLastName($last_name, $deserialize = false)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Filter by the title if available.
     *
     * @return self
     */
    public function setTitle($title, $deserialize = false)
    {
        $this->container['title'] = $title;

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



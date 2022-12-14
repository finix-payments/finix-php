<?php
/**
 * CardPresentDetailsEmvData
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
 * CardPresentDetailsEmvData Class Doc Comment
 *
 * @category Class
 * @description Encrypted card data used to process the transaction.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CardPresentDetailsEmvData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CardPresentDetails_emv_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'application_identifier' => 'string',
        'application_label' => 'string',
        'application_preferred_name' => 'string',
        'application_transaction_counter' => 'string',
        'cryptogram' => 'string',
        'issuer_code_table_index' => 'string',
        'pin_verified' => 'bool',
        'tags' => 'array<string,string>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'application_identifier' => null,
        'application_label' => null,
        'application_preferred_name' => null,
        'application_transaction_counter' => null,
        'cryptogram' => null,
        'issuer_code_table_index' => null,
        'pin_verified' => null,
        'tags' => null
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
        'application_identifier' => 'application_identifier',
        'application_label' => 'application_label',
        'application_preferred_name' => 'application_preferred_name',
        'application_transaction_counter' => 'application_transaction_counter',
        'cryptogram' => 'cryptogram',
        'issuer_code_table_index' => 'issuer_code_table_index',
        'pin_verified' => 'pin_verified',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'application_identifier' => 'setApplicationIdentifier',
        'application_label' => 'setApplicationLabel',
        'application_preferred_name' => 'setApplicationPreferredName',
        'application_transaction_counter' => 'setApplicationTransactionCounter',
        'cryptogram' => 'setCryptogram',
        'issuer_code_table_index' => 'setIssuerCodeTableIndex',
        'pin_verified' => 'setPinVerified',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'application_identifier' => 'getApplicationIdentifier',
        'application_label' => 'getApplicationLabel',
        'application_preferred_name' => 'getApplicationPreferredName',
        'application_transaction_counter' => 'getApplicationTransactionCounter',
        'cryptogram' => 'getCryptogram',
        'issuer_code_table_index' => 'getIssuerCodeTableIndex',
        'pin_verified' => 'getPinVerified',
        'tags' => 'getTags'
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
        $this->container['application_identifier'] = $data['application_identifier'] ?? null;
        $this->container['application_label'] = $data['application_label'] ?? null;
        $this->container['application_preferred_name'] = $data['application_preferred_name'] ?? null;
        $this->container['application_transaction_counter'] = $data['application_transaction_counter'] ?? null;
        $this->container['cryptogram'] = $data['cryptogram'] ?? null;
        $this->container['issuer_code_table_index'] = $data['issuer_code_table_index'] ?? null;
        $this->container['pin_verified'] = $data['pin_verified'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
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
     * Gets application_identifier
     *
     * @return string|null
     */
    public function getApplicationIdentifier()
    {
        return $this->container['application_identifier'];
    }

    /**
     * Sets application_identifier
     *
     * @param string|null $application_identifier ID of the EMV application processing the transaction.
     *
     * @return self
     */
    public function setApplicationIdentifier($application_identifier, $deserialize = false)
    {
        $this->container['application_identifier'] = $application_identifier;

        return $this;
    }

    /**
     * Gets application_label
     *
     * @return string|null
     */
    public function getApplicationLabel()
    {
        return $this->container['application_label'];
    }

    /**
     * Sets application_label
     *
     * @param string|null $application_label EMV card label.
     *
     * @return self
     */
    public function setApplicationLabel($application_label, $deserialize = false)
    {
        $this->container['application_label'] = $application_label;

        return $this;
    }

    /**
     * Gets application_preferred_name
     *
     * @return string|null
     */
    public function getApplicationPreferredName()
    {
        return $this->container['application_preferred_name'];
    }

    /**
     * Sets application_preferred_name
     *
     * @param string|null $application_preferred_name Alternate EMV application name (if provided).
     *
     * @return self
     */
    public function setApplicationPreferredName($application_preferred_name, $deserialize = false)
    {
        $this->container['application_preferred_name'] = $application_preferred_name;

        return $this;
    }

    /**
     * Gets application_transaction_counter
     *
     * @return string|null
     */
    public function getApplicationTransactionCounter()
    {
        return $this->container['application_transaction_counter'];
    }

    /**
     * Sets application_transaction_counter
     *
     * @param string|null $application_transaction_counter Transaction number for the EMV application.
     *
     * @return self
     */
    public function setApplicationTransactionCounter($application_transaction_counter, $deserialize = false)
    {
        $this->container['application_transaction_counter'] = $application_transaction_counter;

        return $this;
    }

    /**
     * Gets cryptogram
     *
     * @return string|null
     */
    public function getCryptogram()
    {
        return $this->container['cryptogram'];
    }

    /**
     * Sets cryptogram
     *
     * @param string|null $cryptogram Encrypted card infromation used to process the transaction.
     *
     * @return self
     */
    public function setCryptogram($cryptogram, $deserialize = false)
    {
        $this->container['cryptogram'] = $cryptogram;

        return $this;
    }

    /**
     * Gets issuer_code_table_index
     *
     * @return string|null
     */
    public function getIssuerCodeTableIndex()
    {
        return $this->container['issuer_code_table_index'];
    }

    /**
     * Sets issuer_code_table_index
     *
     * @param string|null $issuer_code_table_index The alphabet code table (according to ISO 8859) used by the EMV application (if provided).
     *
     * @return self
     */
    public function setIssuerCodeTableIndex($issuer_code_table_index, $deserialize = false)
    {
        $this->container['issuer_code_table_index'] = $issuer_code_table_index;

        return $this;
    }

    /**
     * Gets pin_verified
     *
     * @return bool|null
     */
    public function getPinVerified()
    {
        return $this->container['pin_verified'];
    }

    /**
     * Sets pin_verified
     *
     * @param bool|null $pin_verified Details if the cardholder's PIN number was verified.
     *
     * @return self
     */
    public function setPinVerified($pin_verified, $deserialize = false)
    {
        $this->container['pin_verified'] = $pin_verified;

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



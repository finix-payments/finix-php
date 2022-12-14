<?php
/**
 * CardPresentInstrumentForm
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
 * CardPresentInstrumentForm Class Doc Comment
 *
 * @category Class
 * @description Details the &#x60;Payment Instrument&#x60; that the &#x60;Transfer&#x60; debits or credits.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CardPresentInstrumentForm implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CardPresentInstrumentForm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'available_account_type' => 'string',
        'emv_data' => 'string',
        'emv_data_key_serial_number' => 'string',
        'encrypted_emv_data' => 'string',
        'encrypted_emv_format' => 'int',
        'expiration_month' => 'int',
        'expiration_year' => 'int',
        'first_name' => 'string',
        'last_name' => 'string',
        'name' => '\Finix\Model\Name',
        'number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'available_account_type' => null,
        'emv_data' => null,
        'emv_data_key_serial_number' => null,
        'encrypted_emv_data' => null,
        'encrypted_emv_format' => 'int64',
        'expiration_month' => 'int64',
        'expiration_year' => 'int64',
        'first_name' => null,
        'last_name' => null,
        'name' => null,
        'number' => null
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
        'type' => 'type',
        'available_account_type' => 'available_account_type',
        'emv_data' => 'emv_data',
        'emv_data_key_serial_number' => 'emv_data_key_serial_number',
        'encrypted_emv_data' => 'encrypted_emv_data',
        'encrypted_emv_format' => 'encrypted_emv_format',
        'expiration_month' => 'expiration_month',
        'expiration_year' => 'expiration_year',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'name' => 'name',
        'number' => 'number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'available_account_type' => 'setAvailableAccountType',
        'emv_data' => 'setEmvData',
        'emv_data_key_serial_number' => 'setEmvDataKeySerialNumber',
        'encrypted_emv_data' => 'setEncryptedEmvData',
        'encrypted_emv_format' => 'setEncryptedEmvFormat',
        'expiration_month' => 'setExpirationMonth',
        'expiration_year' => 'setExpirationYear',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'name' => 'setName',
        'number' => 'setNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'available_account_type' => 'getAvailableAccountType',
        'emv_data' => 'getEmvData',
        'emv_data_key_serial_number' => 'getEmvDataKeySerialNumber',
        'encrypted_emv_data' => 'getEncryptedEmvData',
        'encrypted_emv_format' => 'getEncryptedEmvFormat',
        'expiration_month' => 'getExpirationMonth',
        'expiration_year' => 'getExpirationYear',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'name' => 'getName',
        'number' => 'getNumber'
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

    public const TYPE_BANK_ACCOUNT = 'BANK_ACCOUNT';
    public const TYPE_VIRTUAL = 'VIRTUAL';
    public const TYPE_TOKEN = 'TOKEN';
    public const TYPE_SWIPED_PAYMENT_CARD = 'SWIPED_PAYMENT_CARD';
    public const TYPE_PAYMENT_CARD_PRESENT = 'PAYMENT_CARD_PRESENT';
    public const TYPE_PAYMENT_CARD = 'PAYMENT_CARD';
    public const TYPE_VANTIV_OMNI_TOKEN = 'VANTIV_OMNI_TOKEN';
    public const AVAILABLE_ACCOUNT_TYPE_BALANCE = 'BALANCE';
    public const AVAILABLE_ACCOUNT_TYPE_LEDGERED = 'LEDGERED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BANK_ACCOUNT,
            self::TYPE_VIRTUAL,
            self::TYPE_TOKEN,
            self::TYPE_SWIPED_PAYMENT_CARD,
            self::TYPE_PAYMENT_CARD_PRESENT,
            self::TYPE_PAYMENT_CARD,
            self::TYPE_VANTIV_OMNI_TOKEN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAvailableAccountTypeAllowableValues()
    {
        return [
            self::AVAILABLE_ACCOUNT_TYPE_BALANCE,
            self::AVAILABLE_ACCOUNT_TYPE_LEDGERED,
        ];
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['available_account_type'] = $data['available_account_type'] ?? null;
        $this->container['emv_data'] = $data['emv_data'] ?? null;
        $this->container['emv_data_key_serial_number'] = $data['emv_data_key_serial_number'] ?? null;
        $this->container['encrypted_emv_data'] = $data['encrypted_emv_data'] ?? null;
        $this->container['encrypted_emv_format'] = $data['encrypted_emv_format'] ?? null;
        $this->container['expiration_month'] = $data['expiration_month'] ?? null;
        $this->container['expiration_year'] = $data['expiration_year'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['number'] = $data['number'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAvailableAccountTypeAllowableValues();
        if (!is_null($this->container['available_account_type']) && !in_array($this->container['available_account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'available_account_type', must be one of '%s'",
                $this->container['available_account_type'],
                implode("', '", $allowedValues)
            );
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
     * @param string|null $type The type of `Payment Instrument`.
     *
     * @return self
     */
    public function setType($type, $deserialize = false)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets available_account_type
     *
     * @return string|null
     */
    public function getAvailableAccountType()
    {
        return $this->container['available_account_type'];
    }

    /**
     * Sets available_account_type
     *
     * @param string|null $available_account_type available_account_type
     *
     * @return self
     */
    public function setAvailableAccountType($available_account_type, $deserialize = false)
    {
        $allowedValues = $this->getAvailableAccountTypeAllowableValues();
        if (!is_null($available_account_type) && !in_array($available_account_type, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'available_account_type', must be one of '%s'",
                    $available_account_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['available_account_type'] = $available_account_type;

        return $this;
    }

    /**
     * Gets emv_data
     *
     * @return string|null
     */
    public function getEmvData()
    {
        return $this->container['emv_data'];
    }

    /**
     * Sets emv_data
     *
     * @param string|null $emv_data Encrypted card data used to process the transaction.
     *
     * @return self
     */
    public function setEmvData($emv_data, $deserialize = false)
    {
        $this->container['emv_data'] = $emv_data;

        return $this;
    }

    /**
     * Gets emv_data_key_serial_number
     *
     * @return string|null
     */
    public function getEmvDataKeySerialNumber()
    {
        return $this->container['emv_data_key_serial_number'];
    }

    /**
     * Sets emv_data_key_serial_number
     *
     * @param string|null $emv_data_key_serial_number Encrypted EMV card data about the key serial number used to process the transaction.
     *
     * @return self
     */
    public function setEmvDataKeySerialNumber($emv_data_key_serial_number, $deserialize = false)
    {
        $this->container['emv_data_key_serial_number'] = $emv_data_key_serial_number;

        return $this;
    }

    /**
     * Gets encrypted_emv_data
     *
     * @return string|null
     */
    public function getEncryptedEmvData()
    {
        return $this->container['encrypted_emv_data'];
    }

    /**
     * Sets encrypted_emv_data
     *
     * @param string|null $encrypted_emv_data Encrypted EMV card data. Required if using an encrypted device.
     *
     * @return self
     */
    public function setEncryptedEmvData($encrypted_emv_data, $deserialize = false)
    {
        $this->container['encrypted_emv_data'] = $encrypted_emv_data;

        return $this;
    }

    /**
     * Gets encrypted_emv_format
     *
     * @return int|null
     */
    public function getEncryptedEmvFormat()
    {
        return $this->container['encrypted_emv_format'];
    }

    /**
     * Sets encrypted_emv_format
     *
     * @param int|null $encrypted_emv_format EMV encryption format provided from integrated encryption devices (defaults to **0**).
     *
     * @return self
     */
    public function setEncryptedEmvFormat($encrypted_emv_format, $deserialize = false)
    {
        $this->container['encrypted_emv_format'] = $encrypted_emv_format;

        return $this;
    }

    /**
     * Gets expiration_month
     *
     * @return int|null
     */
    public function getExpirationMonth()
    {
        return $this->container['expiration_month'];
    }

    /**
     * Sets expiration_month
     *
     * @param int|null $expiration_month Expiration month of the `Payment Instrument` (e.g. 12 for December).
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
     * @return int|null
     */
    public function getExpirationYear()
    {
        return $this->container['expiration_year'];
    }

    /**
     * Sets expiration_year
     *
     * @param int|null $expiration_year 4-digit expiration year of the `Payment Instrument`.
     *
     * @return self
     */
    public function setExpirationYear($expiration_year, $deserialize = false)
    {
        $this->container['expiration_year'] = $expiration_year;

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
     * @param string|null $first_name The first name of the `Payment Instrument` owner.
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
     * @param string|null $last_name The last name of the `Payment Instrument` owner.
     *
     * @return self
     */
    public function setLastName($last_name, $deserialize = false)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \Finix\Model\Name|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \Finix\Model\Name|null $name name
     *
     * @return self
     */
    public function setName($name, $deserialize = false)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number Primary card account number (no dashes in between numbers).
     *
     * @return self
     */
    public function setNumber($number, $deserialize = false)
    {
        $this->container['number'] = $number;

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



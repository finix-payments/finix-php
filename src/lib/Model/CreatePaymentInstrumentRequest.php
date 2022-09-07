<?php
/**
 * CreatePaymentInstrumentRequest
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
 * CreatePaymentInstrumentRequest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreatePaymentInstrumentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreatePaymentInstrumentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => '\Finix\Model\CreatePaymentInstrumentRequestAddress',
        'expiration_month' => 'int',
        'expiration_year' => 'int',
        'identity' => 'string',
        'name' => 'string',
        'number' => 'string',
        'security_code' => 'string',
        'tags' => 'array<string,string>',
        'type' => 'string',
        'third_party_token' => 'string',
        'account_number' => 'string',
        'account_type' => 'string',
        'attempt_bank_account_validation_check' => 'bool',
        'bank_code' => 'string',
        'country' => 'string',
        'token' => 'string',
        'merchant_identity' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'expiration_month' => null,
        'expiration_year' => null,
        'identity' => null,
        'name' => null,
        'number' => null,
        'security_code' => null,
        'tags' => null,
        'type' => null,
        'third_party_token' => null,
        'account_number' => null,
        'account_type' => null,
        'attempt_bank_account_validation_check' => null,
        'bank_code' => null,
        'country' => null,
        'token' => null,
        'merchant_identity' => null
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
        'address' => 'address',
        'expiration_month' => 'expiration_month',
        'expiration_year' => 'expiration_year',
        'identity' => 'identity',
        'name' => 'name',
        'number' => 'number',
        'security_code' => 'security_code',
        'tags' => 'tags',
        'type' => 'type',
        'third_party_token' => 'third_party_token',
        'account_number' => 'account_number',
        'account_type' => 'account_type',
        'attempt_bank_account_validation_check' => 'attempt_bank_account_validation_check',
        'bank_code' => 'bank_code',
        'country' => 'country',
        'token' => 'token',
        'merchant_identity' => 'merchant_identity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'expiration_month' => 'setExpirationMonth',
        'expiration_year' => 'setExpirationYear',
        'identity' => 'setIdentity',
        'name' => 'setName',
        'number' => 'setNumber',
        'security_code' => 'setSecurityCode',
        'tags' => 'setTags',
        'type' => 'setType',
        'third_party_token' => 'setThirdPartyToken',
        'account_number' => 'setAccountNumber',
        'account_type' => 'setAccountType',
        'attempt_bank_account_validation_check' => 'setAttemptBankAccountValidationCheck',
        'bank_code' => 'setBankCode',
        'country' => 'setCountry',
        'token' => 'setToken',
        'merchant_identity' => 'setMerchantIdentity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'expiration_month' => 'getExpirationMonth',
        'expiration_year' => 'getExpirationYear',
        'identity' => 'getIdentity',
        'name' => 'getName',
        'number' => 'getNumber',
        'security_code' => 'getSecurityCode',
        'tags' => 'getTags',
        'type' => 'getType',
        'third_party_token' => 'getThirdPartyToken',
        'account_number' => 'getAccountNumber',
        'account_type' => 'getAccountType',
        'attempt_bank_account_validation_check' => 'getAttemptBankAccountValidationCheck',
        'bank_code' => 'getBankCode',
        'country' => 'getCountry',
        'token' => 'getToken',
        'merchant_identity' => 'getMerchantIdentity'
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
    public const TYPE_TOKEN = 'TOKEN';
    public const TYPE_APPLE_PAY = 'APPLE_PAY';
    public const TYPE_GOOGLE_PAY = 'GOOGLE_PAY';
    public const TYPE_PAYMENT_CARD = 'PAYMENT_CARD';
    public const ACCOUNT_TYPE_CHECKING = 'CHECKING';
    public const ACCOUNT_TYPE_SAVINGS = 'SAVINGS';
    public const ACCOUNT_TYPE_CORPORATE = 'CORPORATE';
    public const ACCOUNT_TYPE_CORP_SAVINGS = 'CORP_SAVINGS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BANK_ACCOUNT,
            self::TYPE_TOKEN,
            self::TYPE_APPLE_PAY,
            self::TYPE_GOOGLE_PAY,
            self::TYPE_PAYMENT_CARD,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountTypeAllowableValues()
    {
        return [
            self::ACCOUNT_TYPE_CHECKING,
            self::ACCOUNT_TYPE_SAVINGS,
            self::ACCOUNT_TYPE_CORPORATE,
            self::ACCOUNT_TYPE_CORP_SAVINGS,
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
        $this->container['address'] = $data['address'] ?? null;
        $this->container['expiration_month'] = $data['expiration_month'] ?? null;
        $this->container['expiration_year'] = $data['expiration_year'] ?? null;
        $this->container['identity'] = $data['identity'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['number'] = $data['number'] ?? null;
        $this->container['security_code'] = $data['security_code'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['third_party_token'] = $data['third_party_token'] ?? null;
        $this->container['account_number'] = $data['account_number'] ?? null;
        $this->container['account_type'] = $data['account_type'] ?? null;
        $this->container['attempt_bank_account_validation_check'] = $data['attempt_bank_account_validation_check'] ?? false;
        $this->container['bank_code'] = $data['bank_code'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['merchant_identity'] = $data['merchant_identity'] ?? null;
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

        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($this->container['account_type']) && !in_array($this->container['account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'account_type', must be one of '%s'",
                $this->container['account_type'],
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
     * Gets address
     *
     * @return \Finix\Model\CreatePaymentInstrumentRequestAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Finix\Model\CreatePaymentInstrumentRequestAddress|null $address address
     *
     * @return self
     */
    public function setAddress($address, $deserialize = false)
    {
        $this->container['address'] = $address;

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
     * @param int|null $expiration_month The expiration month of the card (e.g. 12 for December).
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
     * @param int|null $expiration_year The 4-digit expiration year of the card.
     *
     * @return self
     */
    public function setExpirationYear($expiration_year, $deserialize = false)
    {
        $this->container['expiration_year'] = $expiration_year;

        return $this;
    }

    /**
     * Gets identity
     *
     * @return string|null
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param string|null $identity The ID of the resource.
     *
     * @return self
     */
    public function setIdentity($identity, $deserialize = false)
    {
        $this->container['identity'] = $identity;

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
     * @param string|null $name The name of the bank account or card owner.
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
     * @param string|null $number The card or bank account number (no dashes in between numbers).
     *
     * @return self
     */
    public function setNumber($number, $deserialize = false)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets security_code
     *
     * @return string|null
     */
    public function getSecurityCode()
    {
        return $this->container['security_code'];
    }

    /**
     * Sets security_code
     *
     * @param string|null $security_code The 3-4 digit security code of the card (i.e. CVV code).
     *
     * @return self
     */
    public function setSecurityCode($security_code, $deserialize = false)
    {
        $this->container['security_code'] = $security_code;

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
     * @param string|null $type Type of `Payment Instrument`.
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
     * Gets third_party_token
     *
     * @return string|null
     */
    public function getThirdPartyToken()
    {
        return $this->container['third_party_token'];
    }

    /**
     * Sets third_party_token
     *
     * @param string|null $third_party_token Stringified token provided by Google. Required to process Google Pay transactions.
     *
     * @return self
     */
    public function setThirdPartyToken($third_party_token, $deserialize = false)
    {
        $this->container['third_party_token'] = $third_party_token;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number The bank account number (no dashes in between numbers).
     *
     * @return self
     */
    public function setAccountNumber($account_number, $deserialize = false)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string|null $account_type The type of bank account.
     *
     * @return self
     */
    public function setAccountType($account_type, $deserialize = false)
    {
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($account_type) && !in_array($account_type, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'account_type', must be one of '%s'",
                    $account_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets attempt_bank_account_validation_check
     *
     * @return bool|null
     */
    public function getAttemptBankAccountValidationCheck()
    {
        return $this->container['attempt_bank_account_validation_check'];
    }

    /**
     * Sets attempt_bank_account_validation_check
     *
     * @param bool|null $attempt_bank_account_validation_check Set to **true** if you want to request a bank account validation. Default value is **false**.
     *
     * @return self
     */
    public function setAttemptBankAccountValidationCheck($attempt_bank_account_validation_check, $deserialize = false)
    {
        $this->container['attempt_bank_account_validation_check'] = $attempt_bank_account_validation_check;

        return $this;
    }

    /**
     * Gets bank_code
     *
     * @return string|null
     */
    public function getBankCode()
    {
        return $this->container['bank_code'];
    }

    /**
     * Sets bank_code
     *
     * @param string|null $bank_code The routing number of the bank account.
     *
     * @return self
     */
    public function setBankCode($bank_code, $deserialize = false)
    {
        $this->container['bank_code'] = $bank_code;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country 3 Letter country code (e.g. USA).
     *
     * @return self
     */
    public function setCountry($country, $deserialize = false)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string|null $token ID of the `Token` that was returned from the tokenization client or hosted fields
     *
     * @return self
     */
    public function setToken($token, $deserialize = false)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets merchant_identity
     *
     * @return string|null
     */
    public function getMerchantIdentity()
    {
        return $this->container['merchant_identity'];
    }

    /**
     * Sets merchant_identity
     *
     * @param string|null $merchant_identity The `id` of the identity used when registering the business with Google Pay through our registration API.
     *
     * @return self
     */
    public function setMerchantIdentity($merchant_identity, $deserialize = false)
    {
        $this->container['merchant_identity'] = $merchant_identity;

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



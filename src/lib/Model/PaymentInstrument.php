<?php
/**
 * PaymentInstrument
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
 * PaymentInstrument Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentInstrument implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentInstrument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'address' => '\Finix\Model\Address',
        'address_verification' => 'string',
        'application' => 'string',
        'bin' => 'string',
        'brand' => 'string',
        'card_name' => 'string',
        'card_type' => 'string',
        'currency' => '\Finix\Model\Currency',
        'enabled' => 'bool',
        'expiration_month' => 'int',
        'expiration_year' => 'int',
        'fast_funds_indicator' => 'string',
        'fingerprint' => 'string',
        'identity' => 'string',
        'instrument_type' => 'string',
        'issuer_country' => 'string',
        'last_four' => 'string',
        'name' => 'string',
        'online_gambing_block_indicator' => 'string',
        'payload_type' => 'string',
        'push_funds_block_indicator' => 'string',
        'security_code_verification' => 'string',
        'tags' => 'array<string,string>',
        'type' => 'string',
        '_links' => '\Finix\Model\PaymentInstrumentLinks',
        'account_type' => 'string',
        'bank_account_validation_check' => 'string',
        'bank_code' => 'string',
        'country' => '\Finix\Model\Country',
        'masked_account_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'address' => null,
        'address_verification' => null,
        'application' => null,
        'bin' => null,
        'brand' => null,
        'card_name' => null,
        'card_type' => null,
        'currency' => null,
        'enabled' => null,
        'expiration_month' => null,
        'expiration_year' => null,
        'fast_funds_indicator' => null,
        'fingerprint' => null,
        'identity' => null,
        'instrument_type' => null,
        'issuer_country' => null,
        'last_four' => null,
        'name' => null,
        'online_gambing_block_indicator' => null,
        'payload_type' => null,
        'push_funds_block_indicator' => null,
        'security_code_verification' => null,
        'tags' => null,
        'type' => null,
        '_links' => null,
        'account_type' => null,
        'bank_account_validation_check' => null,
        'bank_code' => null,
        'country' => null,
        'masked_account_number' => null
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
        'id' => 'id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'address' => 'address',
        'address_verification' => 'address_verification',
        'application' => 'application',
        'bin' => 'bin',
        'brand' => 'brand',
        'card_name' => 'card_name',
        'card_type' => 'card_type',
        'currency' => 'currency',
        'enabled' => 'enabled',
        'expiration_month' => 'expiration_month',
        'expiration_year' => 'expiration_year',
        'fast_funds_indicator' => 'fast_funds_indicator',
        'fingerprint' => 'fingerprint',
        'identity' => 'identity',
        'instrument_type' => 'instrument_type',
        'issuer_country' => 'issuer_country',
        'last_four' => 'last_four',
        'name' => 'name',
        'online_gambing_block_indicator' => 'online_gambing_block_indicator',
        'payload_type' => 'payload_type',
        'push_funds_block_indicator' => 'push_funds_block_indicator',
        'security_code_verification' => 'security_code_verification',
        'tags' => 'tags',
        'type' => 'type',
        '_links' => '_links',
        'account_type' => 'account_type',
        'bank_account_validation_check' => 'bank_account_validation_check',
        'bank_code' => 'bank_code',
        'country' => 'country',
        'masked_account_number' => 'masked_account_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'address' => 'setAddress',
        'address_verification' => 'setAddressVerification',
        'application' => 'setApplication',
        'bin' => 'setBin',
        'brand' => 'setBrand',
        'card_name' => 'setCardName',
        'card_type' => 'setCardType',
        'currency' => 'setCurrency',
        'enabled' => 'setEnabled',
        'expiration_month' => 'setExpirationMonth',
        'expiration_year' => 'setExpirationYear',
        'fast_funds_indicator' => 'setFastFundsIndicator',
        'fingerprint' => 'setFingerprint',
        'identity' => 'setIdentity',
        'instrument_type' => 'setInstrumentType',
        'issuer_country' => 'setIssuerCountry',
        'last_four' => 'setLastFour',
        'name' => 'setName',
        'online_gambing_block_indicator' => 'setOnlineGambingBlockIndicator',
        'payload_type' => 'setPayloadType',
        'push_funds_block_indicator' => 'setPushFundsBlockIndicator',
        'security_code_verification' => 'setSecurityCodeVerification',
        'tags' => 'setTags',
        'type' => 'setType',
        '_links' => 'setLinks',
        'account_type' => 'setAccountType',
        'bank_account_validation_check' => 'setBankAccountValidationCheck',
        'bank_code' => 'setBankCode',
        'country' => 'setCountry',
        'masked_account_number' => 'setMaskedAccountNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'address' => 'getAddress',
        'address_verification' => 'getAddressVerification',
        'application' => 'getApplication',
        'bin' => 'getBin',
        'brand' => 'getBrand',
        'card_name' => 'getCardName',
        'card_type' => 'getCardType',
        'currency' => 'getCurrency',
        'enabled' => 'getEnabled',
        'expiration_month' => 'getExpirationMonth',
        'expiration_year' => 'getExpirationYear',
        'fast_funds_indicator' => 'getFastFundsIndicator',
        'fingerprint' => 'getFingerprint',
        'identity' => 'getIdentity',
        'instrument_type' => 'getInstrumentType',
        'issuer_country' => 'getIssuerCountry',
        'last_four' => 'getLastFour',
        'name' => 'getName',
        'online_gambing_block_indicator' => 'getOnlineGambingBlockIndicator',
        'payload_type' => 'getPayloadType',
        'push_funds_block_indicator' => 'getPushFundsBlockIndicator',
        'security_code_verification' => 'getSecurityCodeVerification',
        'tags' => 'getTags',
        'type' => 'getType',
        '_links' => 'getLinks',
        'account_type' => 'getAccountType',
        'bank_account_validation_check' => 'getBankAccountValidationCheck',
        'bank_code' => 'getBankCode',
        'country' => 'getCountry',
        'masked_account_number' => 'getMaskedAccountNumber'
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

    public const ADDRESS_VERIFICATION_NOT_SUPPORTED = 'NOT_SUPPORTED';
    public const ADDRESS_VERIFICATION_NO_ADDRESS = 'NO_ADDRESS';
    public const ADDRESS_VERIFICATION_NO_MATCH = 'NO_MATCH';
    public const ADDRESS_VERIFICATION_POSTAL_CODE_AND_STREET_MATCH = 'POSTAL_CODE_AND_STREET_MATCH';
    public const ADDRESS_VERIFICATION_POSTAL_CODE_MATCH = 'POSTAL_CODE_MATCH';
    public const ADDRESS_VERIFICATION_STREET_MATCH = 'STREET_MATCH';
    public const ADDRESS_VERIFICATION_UNKNOWN = 'UNKNOWN';
    public const BRAND_AMERICAN_EXPRESS = 'AMERICAN_EXPRESS';
    public const BRAND_CHINA_T_UNION = 'CHINA_T_UNION';
    public const BRAND_CHINA_UNION_PAY = 'CHINA_UNION_PAY';
    public const BRAND_DANKORT = 'DANKORT';
    public const BRAND_DINERS_CLUB = 'DINERS_CLUB';
    public const BRAND_DINERS_CLUB_INTERNATIONAL = 'DINERS_CLUB_INTERNATIONAL';
    public const BRAND_DISCOVER = 'DISCOVER';
    public const BRAND_INSTAPAYMENT = 'INSTAPAYMENT';
    public const BRAND_INTERPAYMENT = 'INTERPAYMENT';
    public const BRAND_JCB = 'JCB';
    public const BRAND_LANKAPAY = 'LANKAPAY';
    public const BRAND_MAESTRO = 'MAESTRO';
    public const BRAND_MASTERCARD = 'MASTERCARD';
    public const BRAND_MIR = 'MIR';
    public const BRAND_RUPAY = 'RUPAY';
    public const BRAND_TROY = 'TROY';
    public const BRAND_UATP = 'UATP';
    public const BRAND_UNKNOWN = 'UNKNOWN';
    public const BRAND_VERVE = 'VERVE';
    public const BRAND_VISA = 'VISA';
    public const CARD_TYPE_CREDIT = 'CREDIT';
    public const CARD_TYPE_DEBIT = 'DEBIT';
    public const CARD_TYPE_HSA_FSA = 'HSA_FSA';
    public const CARD_TYPE_NON_RELOADABLE_PREPAID = 'NON_RELOADABLE_PREPAID';
    public const CARD_TYPE_RELOADABLE_PREPAID = 'RELOADABLE_PREPAID';
    public const CARD_TYPE_UNKNOWN = 'UNKNOWN';
    public const INSTRUMENT_TYPE_APPLE_PAY = 'APPLE_PAY';
    public const INSTRUMENT_TYPE_BANK_ACCOUNT = 'BANK_ACCOUNT';
    public const INSTRUMENT_TYPE_GOOGLE_PAY = 'GOOGLE_PAY';
    public const INSTRUMENT_TYPE_PAYMENT_CARD = 'PAYMENT_CARD';
    public const INSTRUMENT_TYPE_PAYMENT_CARD_PRESENT = 'PAYMENT_CARD_PRESENT';
    public const INSTRUMENT_TYPE_SWIPED_PAYMENT_CARD = 'SWIPED_PAYMENT_CARD';
    public const INSTRUMENT_TYPE_TOKEN = 'TOKEN';
    public const INSTRUMENT_TYPE_VANTIV_OMNI_TOKEN = 'VANTIV_OMNI_TOKEN';
    public const INSTRUMENT_TYPE_VIRTUAL = 'VIRTUAL';
    public const ISSUER_COUNTRY_NON_USA = 'NON_USA';
    public const ISSUER_COUNTRY_UNKNOWN = 'UNKNOWN';
    public const ISSUER_COUNTRY_USA = 'USA';
    public const PAYLOAD_TYPE_DESTINATION = 'DESTINATION';
    public const PAYLOAD_TYPE_SOURCE = 'SOURCE';
    public const SECURITY_CODE_VERIFICATION_MATCHED = 'MATCHED';
    public const SECURITY_CODE_VERIFICATION_UNKNOWN = 'UNKNOWN';
    public const SECURITY_CODE_VERIFICATION_UNMATCHED = 'UNMATCHED';
    public const TYPE_APPLE_PAY = 'APPLE_PAY';
    public const TYPE_BANK_ACCOUNT = 'BANK_ACCOUNT';
    public const TYPE_GOOGLE_PAY = 'GOOGLE_PAY';
    public const TYPE_PAYMENT_CARD = 'PAYMENT_CARD';
    public const TYPE_PAYMENT_CARD_PRESENT = 'PAYMENT_CARD_PRESENT';
    public const TYPE_SWIPED_PAYMENT_CARD = 'SWIPED_PAYMENT_CARD';
    public const TYPE_TOKEN = 'TOKEN';
    public const TYPE_VANTIV_OMNI_TOKEN = 'VANTIV_OMNI_TOKEN';
    public const TYPE_VIRTUAL = 'VIRTUAL';
    public const ACCOUNT_TYPE_CHECKING = 'CHECKING';
    public const ACCOUNT_TYPE_SAVINGS = 'SAVINGS';
    public const BANK_ACCOUNT_VALIDATION_CHECK_INCONCLUSIVE = 'INCONCLUSIVE';
    public const BANK_ACCOUNT_VALIDATION_CHECK_INVALID = 'INVALID';
    public const BANK_ACCOUNT_VALIDATION_CHECK_NOT_ATTEMPTED = 'NOT_ATTEMPTED';
    public const BANK_ACCOUNT_VALIDATION_CHECK_VALID = 'VALID';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAddressVerificationAllowableValues()
    {
        return [
            self::ADDRESS_VERIFICATION_NOT_SUPPORTED,
            self::ADDRESS_VERIFICATION_NO_ADDRESS,
            self::ADDRESS_VERIFICATION_NO_MATCH,
            self::ADDRESS_VERIFICATION_POSTAL_CODE_AND_STREET_MATCH,
            self::ADDRESS_VERIFICATION_POSTAL_CODE_MATCH,
            self::ADDRESS_VERIFICATION_STREET_MATCH,
            self::ADDRESS_VERIFICATION_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBrandAllowableValues()
    {
        return [
            self::BRAND_AMERICAN_EXPRESS,
            self::BRAND_CHINA_T_UNION,
            self::BRAND_CHINA_UNION_PAY,
            self::BRAND_DANKORT,
            self::BRAND_DINERS_CLUB,
            self::BRAND_DINERS_CLUB_INTERNATIONAL,
            self::BRAND_DISCOVER,
            self::BRAND_INSTAPAYMENT,
            self::BRAND_INTERPAYMENT,
            self::BRAND_JCB,
            self::BRAND_LANKAPAY,
            self::BRAND_MAESTRO,
            self::BRAND_MASTERCARD,
            self::BRAND_MIR,
            self::BRAND_RUPAY,
            self::BRAND_TROY,
            self::BRAND_UATP,
            self::BRAND_UNKNOWN,
            self::BRAND_VERVE,
            self::BRAND_VISA,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCardTypeAllowableValues()
    {
        return [
            self::CARD_TYPE_CREDIT,
            self::CARD_TYPE_DEBIT,
            self::CARD_TYPE_HSA_FSA,
            self::CARD_TYPE_NON_RELOADABLE_PREPAID,
            self::CARD_TYPE_RELOADABLE_PREPAID,
            self::CARD_TYPE_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInstrumentTypeAllowableValues()
    {
        return [
            self::INSTRUMENT_TYPE_APPLE_PAY,
            self::INSTRUMENT_TYPE_BANK_ACCOUNT,
            self::INSTRUMENT_TYPE_GOOGLE_PAY,
            self::INSTRUMENT_TYPE_PAYMENT_CARD,
            self::INSTRUMENT_TYPE_PAYMENT_CARD_PRESENT,
            self::INSTRUMENT_TYPE_SWIPED_PAYMENT_CARD,
            self::INSTRUMENT_TYPE_TOKEN,
            self::INSTRUMENT_TYPE_VANTIV_OMNI_TOKEN,
            self::INSTRUMENT_TYPE_VIRTUAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIssuerCountryAllowableValues()
    {
        return [
            self::ISSUER_COUNTRY_NON_USA,
            self::ISSUER_COUNTRY_UNKNOWN,
            self::ISSUER_COUNTRY_USA,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPayloadTypeAllowableValues()
    {
        return [
            self::PAYLOAD_TYPE_DESTINATION,
            self::PAYLOAD_TYPE_SOURCE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSecurityCodeVerificationAllowableValues()
    {
        return [
            self::SECURITY_CODE_VERIFICATION_MATCHED,
            self::SECURITY_CODE_VERIFICATION_UNKNOWN,
            self::SECURITY_CODE_VERIFICATION_UNMATCHED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_APPLE_PAY,
            self::TYPE_BANK_ACCOUNT,
            self::TYPE_GOOGLE_PAY,
            self::TYPE_PAYMENT_CARD,
            self::TYPE_PAYMENT_CARD_PRESENT,
            self::TYPE_SWIPED_PAYMENT_CARD,
            self::TYPE_TOKEN,
            self::TYPE_VANTIV_OMNI_TOKEN,
            self::TYPE_VIRTUAL,
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
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBankAccountValidationCheckAllowableValues()
    {
        return [
            self::BANK_ACCOUNT_VALIDATION_CHECK_INCONCLUSIVE,
            self::BANK_ACCOUNT_VALIDATION_CHECK_INVALID,
            self::BANK_ACCOUNT_VALIDATION_CHECK_NOT_ATTEMPTED,
            self::BANK_ACCOUNT_VALIDATION_CHECK_VALID,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['address_verification'] = $data['address_verification'] ?? null;
        $this->container['application'] = $data['application'] ?? null;
        $this->container['bin'] = $data['bin'] ?? null;
        $this->container['brand'] = $data['brand'] ?? null;
        $this->container['card_name'] = $data['card_name'] ?? null;
        $this->container['card_type'] = $data['card_type'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['expiration_month'] = $data['expiration_month'] ?? null;
        $this->container['expiration_year'] = $data['expiration_year'] ?? null;
        $this->container['fast_funds_indicator'] = $data['fast_funds_indicator'] ?? null;
        $this->container['fingerprint'] = $data['fingerprint'] ?? null;
        $this->container['identity'] = $data['identity'] ?? null;
        $this->container['instrument_type'] = $data['instrument_type'] ?? null;
        $this->container['issuer_country'] = $data['issuer_country'] ?? null;
        $this->container['last_four'] = $data['last_four'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['online_gambing_block_indicator'] = $data['online_gambing_block_indicator'] ?? null;
        $this->container['payload_type'] = $data['payload_type'] ?? null;
        $this->container['push_funds_block_indicator'] = $data['push_funds_block_indicator'] ?? null;
        $this->container['security_code_verification'] = $data['security_code_verification'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['_links'] = $data['_links'] ?? null;
        $this->container['account_type'] = $data['account_type'] ?? null;
        $this->container['bank_account_validation_check'] = $data['bank_account_validation_check'] ?? 'NOT_ATTEMPTED';
        $this->container['bank_code'] = $data['bank_code'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['masked_account_number'] = $data['masked_account_number'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAddressVerificationAllowableValues();
        if (!is_null($this->container['address_verification']) && !in_array($this->container['address_verification'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'address_verification', must be one of '%s'",
                $this->container['address_verification'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBrandAllowableValues();
        if (!is_null($this->container['brand']) && !in_array($this->container['brand'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'brand', must be one of '%s'",
                $this->container['brand'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCardTypeAllowableValues();
        if (!is_null($this->container['card_type']) && !in_array($this->container['card_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'card_type', must be one of '%s'",
                $this->container['card_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['expiration_month']) && ($this->container['expiration_month'] > 12)) {
            $invalidProperties[] = "invalid value for 'expiration_month', must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['expiration_month']) && ($this->container['expiration_month'] < 1)) {
            $invalidProperties[] = "invalid value for 'expiration_month', must be bigger than or equal to 1.";
        }
        
        if (!is_null($this->container['expiration_year']) && ($this->container['expiration_year'] < 1)) {
            $invalidProperties[] = "invalid value for 'expiration_year', must be bigger than or equal to 1.";
        }
        
        $allowedValues = $this->getInstrumentTypeAllowableValues();
        if (!is_null($this->container['instrument_type']) && !in_array($this->container['instrument_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'instrument_type', must be one of '%s'",
                $this->container['instrument_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIssuerCountryAllowableValues();
        if (!is_null($this->container['issuer_country']) && !in_array($this->container['issuer_country'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'issuer_country', must be one of '%s'",
                $this->container['issuer_country'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPayloadTypeAllowableValues();
        if (!is_null($this->container['payload_type']) && !in_array($this->container['payload_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payload_type', must be one of '%s'",
                $this->container['payload_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSecurityCodeVerificationAllowableValues();
        if (!is_null($this->container['security_code_verification']) && !in_array($this->container['security_code_verification'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'security_code_verification', must be one of '%s'",
                $this->container['security_code_verification'],
                implode("', '", $allowedValues)
            );
        }

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

        $allowedValues = $this->getBankAccountValidationCheckAllowableValues();
        if (!is_null($this->container['bank_account_validation_check']) && !in_array($this->container['bank_account_validation_check'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'bank_account_validation_check', must be one of '%s'",
                $this->container['bank_account_validation_check'],
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
     * @param string|null $id The ID of the `Payment Instrument`.
     *
     * @return self
     */
    public function setId($id, $deserialize = false)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Timestamp of when the object was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at, $deserialize = false)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at Timestamp of when the object was last updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at, $deserialize = false)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Finix\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Finix\Model\Address|null $address address
     *
     * @return self
     */
    public function setAddress($address, $deserialize = false)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets address_verification
     *
     * @return string|null
     */
    public function getAddressVerification()
    {
        return $this->container['address_verification'];
    }

    /**
     * Sets address_verification
     *
     * @param string|null $address_verification Additional address information that???s required to verify the identity of the merchant.
     *
     * @return self
     */
    public function setAddressVerification($address_verification, $deserialize = false)
    {
        $allowedValues = $this->getAddressVerificationAllowableValues();
        if (!is_null($address_verification) && !in_array($address_verification, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'address_verification', must be one of '%s'",
                    $address_verification,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['address_verification'] = $address_verification;

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
     * @param string|null $application The ID of the `Application` resource the `Payment Instrument` was created under.
     *
     * @return self
     */
    public function setApplication($application, $deserialize = false)
    {
        $this->container['application'] = $application;

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
     * @param string|null $bin Bank Identification number for the `Payment Instrument`.
     *
     * @return self
     */
    public function setBin($bin, $deserialize = false)
    {
        $this->container['bin'] = $bin;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand The `brand` of the card saved in the `Payment Instrument`.
     *
     * @return self
     */
    public function setBrand($brand, $deserialize = false)
    {
        $allowedValues = $this->getBrandAllowableValues();
        if (!is_null($brand) && !in_array($brand, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'brand', must be one of '%s'",
                    $brand,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets card_name
     *
     * @return string|null
     */
    public function getCardName()
    {
        return $this->container['card_name'];
    }

    /**
     * Sets card_name
     *
     * @param string|null $card_name A custom name you can include to identify the card being used (e.g. **Business Card**).
     *
     * @return self
     */
    public function setCardName($card_name, $deserialize = false)
    {
        $this->container['card_name'] = $card_name;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return string|null
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string|null $card_type The type of payment card saved in the `Payment Instrument`.
     *
     * @return self
     */
    public function setCardType($card_type, $deserialize = false)
    {
        $allowedValues = $this->getCardTypeAllowableValues();
        if (!is_null($card_type) && !in_array($card_type, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'card_type', must be one of '%s'",
                    $card_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Finix\Model\Currency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Finix\Model\Currency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency, $deserialize = false)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled Details if the `Payment Instrument` resource is enabled. Default value is **true**; set to **false** to disable the `Payment Instrument`.
     *
     * @return self
     */
    public function setEnabled($enabled, $deserialize = false)
    {
        $this->container['enabled'] = $enabled;

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
     * @param int|null $expiration_month Expiration month (e.g. 12 for December).
     *
     * @return self
     */
    public function setExpirationMonth($expiration_month, $deserialize = false)
    {

        if (!is_null($expiration_month) && ($expiration_month > 12)) {
            throw new \InvalidArgumentException('invalid value for $expiration_month when calling PaymentInstrument., must be smaller than or equal to 12.');
        }
        if (!is_null($expiration_month) && ($expiration_month < 1)) {
            throw new \InvalidArgumentException('invalid value for $expiration_month when calling PaymentInstrument., must be bigger than or equal to 1.');
        }
        

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
     * @param int|null $expiration_year 4-digit expiration year.
     *
     * @return self
     */
    public function setExpirationYear($expiration_year, $deserialize = false)
    {

        if (!is_null($expiration_year) && ($expiration_year < 1)) {
            throw new \InvalidArgumentException('invalid value for $expiration_year when calling PaymentInstrument., must be bigger than or equal to 1.');
        }
        

        $this->container['expiration_year'] = $expiration_year;

        return $this;
    }

    /**
     * Gets fast_funds_indicator
     *
     * @return string|null
     */
    public function getFastFundsIndicator()
    {
        return $this->container['fast_funds_indicator'];
    }

    /**
     * Sets fast_funds_indicator
     *
     * @param string|null $fast_funds_indicator Details if Fast Funds is enabled for the card.
     *
     * @return self
     */
    public function setFastFundsIndicator($fast_funds_indicator, $deserialize = false)
    {
        $this->container['fast_funds_indicator'] = $fast_funds_indicator;

        return $this;
    }

    /**
     * Gets fingerprint
     *
     * @return string|null
     */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
     * Sets fingerprint
     *
     * @param string|null $fingerprint Unique ID that represents the tokenized card data.
     *
     * @return self
     */
    public function setFingerprint($fingerprint, $deserialize = false)
    {
        $this->container['fingerprint'] = $fingerprint;

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
     * @param string|null $identity The ID of the `Identity` used to create the `Payment Instrument` resource.
     *
     * @return self
     */
    public function setIdentity($identity, $deserialize = false)
    {
        $this->container['identity'] = $identity;

        return $this;
    }

    /**
     * Gets instrument_type
     *
     * @return string|null
     */
    public function getInstrumentType()
    {
        return $this->container['instrument_type'];
    }

    /**
     * Sets instrument_type
     *
     * @param string|null $instrument_type The type of `Payment Instrument`.
     *
     * @return self
     */
    public function setInstrumentType($instrument_type, $deserialize = false)
    {
        $allowedValues = $this->getInstrumentTypeAllowableValues();
        if (!is_null($instrument_type) && !in_array($instrument_type, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'instrument_type', must be one of '%s'",
                    $instrument_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['instrument_type'] = $instrument_type;

        return $this;
    }

    /**
     * Gets issuer_country
     *
     * @return string|null
     */
    public function getIssuerCountry()
    {
        return $this->container['issuer_country'];
    }

    /**
     * Sets issuer_country
     *
     * @param string|null $issuer_country Details what country the card was issued in:<li><strong>USA</strong>: The card was issued inside the United States.<li><strong>NON_USA</strong>: The card was issued outside of the United States.<li><strong>UNKNOWN</strong>: Processor did not return an issuer country for this particular BIN.
     *
     * @return self
     */
    public function setIssuerCountry($issuer_country, $deserialize = false)
    {
        $allowedValues = $this->getIssuerCountryAllowableValues();
        if (!is_null($issuer_country) && !in_array($issuer_country, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'issuer_country', must be one of '%s'",
                    $issuer_country,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['issuer_country'] = $issuer_country;

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
     * @param string|null $last_four Last four digits of the card or bank account number.
     *
     * @return self
     */
    public function setLastFour($last_four, $deserialize = false)
    {
        $this->container['last_four'] = $last_four;

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
     * Gets online_gambing_block_indicator
     *
     * @return string|null
     */
    public function getOnlineGambingBlockIndicator()
    {
        return $this->container['online_gambing_block_indicator'];
    }

    /**
     * Sets online_gambing_block_indicator
     *
     * @param string|null $online_gambing_block_indicator Detailes if the card is enabled to receive push-payments for online gambling payouts.
     *
     * @return self
     */
    public function setOnlineGambingBlockIndicator($online_gambing_block_indicator, $deserialize = false)
    {
        $this->container['online_gambing_block_indicator'] = $online_gambing_block_indicator;

        return $this;
    }

    /**
     * Gets payload_type
     *
     * @return string|null
     */
    public function getPayloadType()
    {
        return $this->container['payload_type'];
    }

    /**
     * Sets payload_type
     *
     * @param string|null $payload_type payload_type
     *
     * @return self
     */
    public function setPayloadType($payload_type, $deserialize = false)
    {
        $allowedValues = $this->getPayloadTypeAllowableValues();
        if (!is_null($payload_type) && !in_array($payload_type, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payload_type', must be one of '%s'",
                    $payload_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payload_type'] = $payload_type;

        return $this;
    }

    /**
     * Gets push_funds_block_indicator
     *
     * @return string|null
     */
    public function getPushFundsBlockIndicator()
    {
        return $this->container['push_funds_block_indicator'];
    }

    /**
     * Sets push_funds_block_indicator
     *
     * @param string|null $push_funds_block_indicator Details if the card is enabled to receive push-to-card disbursements.
     *
     * @return self
     */
    public function setPushFundsBlockIndicator($push_funds_block_indicator, $deserialize = false)
    {
        $this->container['push_funds_block_indicator'] = $push_funds_block_indicator;

        return $this;
    }

    /**
     * Gets security_code_verification
     *
     * @return string|null
     */
    public function getSecurityCodeVerification()
    {
        return $this->container['security_code_verification'];
    }

    /**
     * Sets security_code_verification
     *
     * @param string|null $security_code_verification Details the results of the Card Verification Code check.
     *
     * @return self
     */
    public function setSecurityCodeVerification($security_code_verification, $deserialize = false)
    {
        $allowedValues = $this->getSecurityCodeVerificationAllowableValues();
        if (!is_null($security_code_verification) && !in_array($security_code_verification, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'security_code_verification', must be one of '%s'",
                    $security_code_verification,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['security_code_verification'] = $security_code_verification;

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
     * Gets _links
     *
     * @return \Finix\Model\PaymentInstrumentLinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \Finix\Model\PaymentInstrumentLinks|null $_links _links
     *
     * @return self
     */
    public function setLinks($_links, $deserialize = false)
    {
        $this->container['_links'] = $_links;

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
     * @param string|null $account_type Details what kind of **BANK_ACCOUNT** is being used.
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
     * Gets bank_account_validation_check
     *
     * @return string|null
     */
    public function getBankAccountValidationCheck()
    {
        return $this->container['bank_account_validation_check'];
    }

    /**
     * Sets bank_account_validation_check
     *
     * @param string|null $bank_account_validation_check Details the results of the bank account validation check if `attempt_bank_account_validation_check` is set to **true**.
     *
     * @return self
     */
    public function setBankAccountValidationCheck($bank_account_validation_check, $deserialize = false)
    {
        $allowedValues = $this->getBankAccountValidationCheckAllowableValues();
        if (!is_null($bank_account_validation_check) && !in_array($bank_account_validation_check, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'bank_account_validation_check', must be one of '%s'",
                    $bank_account_validation_check,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bank_account_validation_check'] = $bank_account_validation_check;

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
     * @return \Finix\Model\Country|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \Finix\Model\Country|null $country country
     *
     * @return self
     */
    public function setCountry($country, $deserialize = false)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets masked_account_number
     *
     * @return string|null
     */
    public function getMaskedAccountNumber()
    {
        return $this->container['masked_account_number'];
    }

    /**
     * Sets masked_account_number
     *
     * @param string|null $masked_account_number The last 4 digits of the account number used to create the `Payment Instrument`.
     *
     * @return self
     */
    public function setMaskedAccountNumber($masked_account_number, $deserialize = false)
    {
        $this->container['masked_account_number'] = $masked_account_number;

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



<?php
/**
 * OnboardingFormOnboardingDataEntity
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
 * OnboardingFormOnboardingDataEntity Class Doc Comment
 *
 * @category Class
 * @description The &#x60;entity&#x60; information saved in the &#x60;Identity&#x60; of the user.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OnboardingFormOnboardingDataEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OnboardingFormOnboardingData_entity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amex_mid' => 'int',
        'annual_card_volume' => 'int',
        'business_address' => '\Finix\Model\IdentityEntityBusinessAddress',
        'business_name' => 'string',
        'business_phone' => 'string',
        'business_tax_id_provided' => 'bool',
        'business_type' => 'string',
        'default_statement_descriptor' => 'string',
        'discover_mid' => 'int',
        'dob' => '\Finix\Model\IdentityEntityDob',
        'doing_business_as' => 'string',
        'email' => 'string',
        'first_name' => 'string',
        'has_accepted_credit_cards_previously' => 'bool',
        'incorporation_date' => '\Finix\Model\OnboardingFormOnboardingDataEntityIncorporationDate',
        'last_name' => 'string',
        'max_transaction_amount' => 'int',
        'mcc' => 'string',
        'ownership_type' => 'string',
        'personal_address' => '\Finix\Model\IdentityEntityPersonalAddress',
        'phone' => 'string',
        'principal_percentage_ownership' => 'int',
        'short_business_name' => 'string',
        'tax_authority' => 'string',
        'tax_id_provided' => 'bool',
        'title' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amex_mid' => null,
        'annual_card_volume' => null,
        'business_address' => null,
        'business_name' => null,
        'business_phone' => null,
        'business_tax_id_provided' => null,
        'business_type' => null,
        'default_statement_descriptor' => null,
        'discover_mid' => null,
        'dob' => null,
        'doing_business_as' => null,
        'email' => null,
        'first_name' => null,
        'has_accepted_credit_cards_previously' => null,
        'incorporation_date' => null,
        'last_name' => null,
        'max_transaction_amount' => null,
        'mcc' => null,
        'ownership_type' => null,
        'personal_address' => null,
        'phone' => null,
        'principal_percentage_ownership' => null,
        'short_business_name' => null,
        'tax_authority' => null,
        'tax_id_provided' => null,
        'title' => null,
        'url' => null
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
        'amex_mid' => 'amex_mid',
        'annual_card_volume' => 'annual_card_volume',
        'business_address' => 'business_address',
        'business_name' => 'business_name',
        'business_phone' => 'business_phone',
        'business_tax_id_provided' => 'business_tax_id_provided',
        'business_type' => 'business_type',
        'default_statement_descriptor' => 'default_statement_descriptor',
        'discover_mid' => 'discover_mid',
        'dob' => 'dob',
        'doing_business_as' => 'doing_business_as',
        'email' => 'email',
        'first_name' => 'first_name',
        'has_accepted_credit_cards_previously' => 'has_accepted_credit_cards_previously',
        'incorporation_date' => 'incorporation_date',
        'last_name' => 'last_name',
        'max_transaction_amount' => 'max_transaction_amount',
        'mcc' => 'mcc',
        'ownership_type' => 'ownership_type',
        'personal_address' => 'personal_address',
        'phone' => 'phone',
        'principal_percentage_ownership' => 'principal_percentage_ownership',
        'short_business_name' => 'short_business_name',
        'tax_authority' => 'tax_authority',
        'tax_id_provided' => 'tax_id_provided',
        'title' => 'title',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amex_mid' => 'setAmexMid',
        'annual_card_volume' => 'setAnnualCardVolume',
        'business_address' => 'setBusinessAddress',
        'business_name' => 'setBusinessName',
        'business_phone' => 'setBusinessPhone',
        'business_tax_id_provided' => 'setBusinessTaxIdProvided',
        'business_type' => 'setBusinessType',
        'default_statement_descriptor' => 'setDefaultStatementDescriptor',
        'discover_mid' => 'setDiscoverMid',
        'dob' => 'setDob',
        'doing_business_as' => 'setDoingBusinessAs',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'has_accepted_credit_cards_previously' => 'setHasAcceptedCreditCardsPreviously',
        'incorporation_date' => 'setIncorporationDate',
        'last_name' => 'setLastName',
        'max_transaction_amount' => 'setMaxTransactionAmount',
        'mcc' => 'setMcc',
        'ownership_type' => 'setOwnershipType',
        'personal_address' => 'setPersonalAddress',
        'phone' => 'setPhone',
        'principal_percentage_ownership' => 'setPrincipalPercentageOwnership',
        'short_business_name' => 'setShortBusinessName',
        'tax_authority' => 'setTaxAuthority',
        'tax_id_provided' => 'setTaxIdProvided',
        'title' => 'setTitle',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amex_mid' => 'getAmexMid',
        'annual_card_volume' => 'getAnnualCardVolume',
        'business_address' => 'getBusinessAddress',
        'business_name' => 'getBusinessName',
        'business_phone' => 'getBusinessPhone',
        'business_tax_id_provided' => 'getBusinessTaxIdProvided',
        'business_type' => 'getBusinessType',
        'default_statement_descriptor' => 'getDefaultStatementDescriptor',
        'discover_mid' => 'getDiscoverMid',
        'dob' => 'getDob',
        'doing_business_as' => 'getDoingBusinessAs',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'has_accepted_credit_cards_previously' => 'getHasAcceptedCreditCardsPreviously',
        'incorporation_date' => 'getIncorporationDate',
        'last_name' => 'getLastName',
        'max_transaction_amount' => 'getMaxTransactionAmount',
        'mcc' => 'getMcc',
        'ownership_type' => 'getOwnershipType',
        'personal_address' => 'getPersonalAddress',
        'phone' => 'getPhone',
        'principal_percentage_ownership' => 'getPrincipalPercentageOwnership',
        'short_business_name' => 'getShortBusinessName',
        'tax_authority' => 'getTaxAuthority',
        'tax_id_provided' => 'getTaxIdProvided',
        'title' => 'getTitle',
        'url' => 'getUrl'
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

    public const OWNERSHIP_TYPE__PUBLIC = 'PUBLIC';
    public const OWNERSHIP_TYPE__PRIVATE = 'PRIVATE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOwnershipTypeAllowableValues()
    {
        return [
            self::OWNERSHIP_TYPE__PUBLIC,
            self::OWNERSHIP_TYPE__PRIVATE,
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
        $this->container['amex_mid'] = $data['amex_mid'] ?? null;
        $this->container['annual_card_volume'] = $data['annual_card_volume'] ?? null;
        $this->container['business_address'] = $data['business_address'] ?? null;
        $this->container['business_name'] = $data['business_name'] ?? null;
        $this->container['business_phone'] = $data['business_phone'] ?? null;
        $this->container['business_tax_id_provided'] = $data['business_tax_id_provided'] ?? null;
        $this->container['business_type'] = $data['business_type'] ?? null;
        $this->container['default_statement_descriptor'] = $data['default_statement_descriptor'] ?? null;
        $this->container['discover_mid'] = $data['discover_mid'] ?? null;
        $this->container['dob'] = $data['dob'] ?? null;
        $this->container['doing_business_as'] = $data['doing_business_as'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['has_accepted_credit_cards_previously'] = $data['has_accepted_credit_cards_previously'] ?? null;
        $this->container['incorporation_date'] = $data['incorporation_date'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['max_transaction_amount'] = $data['max_transaction_amount'] ?? null;
        $this->container['mcc'] = $data['mcc'] ?? null;
        $this->container['ownership_type'] = $data['ownership_type'] ?? null;
        $this->container['personal_address'] = $data['personal_address'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['principal_percentage_ownership'] = $data['principal_percentage_ownership'] ?? null;
        $this->container['short_business_name'] = $data['short_business_name'] ?? null;
        $this->container['tax_authority'] = $data['tax_authority'] ?? null;
        $this->container['tax_id_provided'] = $data['tax_id_provided'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['business_name']) && (mb_strlen($this->container['business_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'business_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['business_phone']) && (mb_strlen($this->container['business_phone']) < 1)) {
            $invalidProperties[] = "invalid value for 'business_phone', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['default_statement_descriptor']) && (mb_strlen($this->container['default_statement_descriptor']) < 1)) {
            $invalidProperties[] = "invalid value for 'default_statement_descriptor', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['doing_business_as']) && (mb_strlen($this->container['doing_business_as']) < 1)) {
            $invalidProperties[] = "invalid value for 'doing_business_as', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 1)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['first_name']) && (mb_strlen($this->container['first_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['mcc']) && (mb_strlen($this->container['mcc']) < 1)) {
            $invalidProperties[] = "invalid value for 'mcc', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getOwnershipTypeAllowableValues();
        if (!is_null($this->container['ownership_type']) && !in_array($this->container['ownership_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ownership_type', must be one of '%s'",
                $this->container['ownership_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['ownership_type']) && (mb_strlen($this->container['ownership_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'ownership_type', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 1)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 1)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
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
     * Gets amex_mid
     *
     * @return int|null
     */
    public function getAmexMid()
    {
        return $this->container['amex_mid'];
    }

    /**
     * Sets amex_mid
     *
     * @param int|null $amex_mid Assigned amexMid value. If a value is passed, it must be 10 or 11 digits.
     *
     * @return self
     */
    public function setAmexMid($amex_mid, $deserialize = false)
    {
        $this->container['amex_mid'] = $amex_mid;

        return $this;
    }

    /**
     * Gets annual_card_volume
     *
     * @return int|null
     */
    public function getAnnualCardVolume()
    {
        return $this->container['annual_card_volume'];
    }

    /**
     * Sets annual_card_volume
     *
     * @param int|null $annual_card_volume The annual credit card sales (in cents) expected to be processed by this seller (max 19 characters).
     *
     * @return self
     */
    public function setAnnualCardVolume($annual_card_volume, $deserialize = false)
    {
        $this->container['annual_card_volume'] = $annual_card_volume;

        return $this;
    }

    /**
     * Gets business_address
     *
     * @return \Finix\Model\IdentityEntityBusinessAddress|null
     */
    public function getBusinessAddress()
    {
        return $this->container['business_address'];
    }

    /**
     * Sets business_address
     *
     * @param \Finix\Model\IdentityEntityBusinessAddress|null $business_address business_address
     *
     * @return self
     */
    public function setBusinessAddress($business_address, $deserialize = false)
    {
        $this->container['business_address'] = $business_address;

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
     * @param string|null $business_name The merchant's legal business name (max 120 characters).<ul><li>If <strong>INDIVIDUAL_SOLE_PROPRIETORSHIP</strong>, pass the owner's legal first name, last name and middle initial.
     *
     * @return self
     */
    public function setBusinessName($business_name, $deserialize = false)
    {

        if (!is_null($business_name) && (mb_strlen($business_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $business_name when calling OnboardingFormOnboardingDataEntity., must be bigger than or equal to 1.');
        }
        

        $this->container['business_name'] = $business_name;

        return $this;
    }

    /**
     * Gets business_phone
     *
     * @return string|null
     */
    public function getBusinessPhone()
    {
        return $this->container['business_phone'];
    }

    /**
     * Sets business_phone
     *
     * @param string|null $business_phone Customer service phone number where the seller can be reached (max 10 characters).
     *
     * @return self
     */
    public function setBusinessPhone($business_phone, $deserialize = false)
    {

        if (!is_null($business_phone) && (mb_strlen($business_phone) < 1)) {
            throw new \InvalidArgumentException('invalid length for $business_phone when calling OnboardingFormOnboardingDataEntity., must be bigger than or equal to 1.');
        }
        

        $this->container['business_phone'] = $business_phone;

        return $this;
    }

    /**
     * Gets business_tax_id_provided
     *
     * @return bool|null
     */
    public function getBusinessTaxIdProvided()
    {
        return $this->container['business_tax_id_provided'];
    }

    /**
     * Sets business_tax_id_provided
     *
     * @param bool|null $business_tax_id_provided Details if the `business_tax_id` was provided.
     *
     * @return self
     */
    public function setBusinessTaxIdProvided($business_tax_id_provided, $deserialize = false)
    {
        $this->container['business_tax_id_provided'] = $business_tax_id_provided;

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
     * @param string|null $business_type Include the value that best applies to the seller.
     *
     * @return self
     */
    public function setBusinessType($business_type, $deserialize = false)
    {
        $this->container['business_type'] = $business_type;

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
     * @param string|null $default_statement_descriptor The description of the seller that appears on the buyer's bank or card statement.
     *
     * @return self
     */
    public function setDefaultStatementDescriptor($default_statement_descriptor, $deserialize = false)
    {

        if (!is_null($default_statement_descriptor) && (mb_strlen($default_statement_descriptor) < 1)) {
            throw new \InvalidArgumentException('invalid length for $default_statement_descriptor when calling OnboardingFormOnboardingDataEntity., must be bigger than or equal to 1.');
        }
        

        $this->container['default_statement_descriptor'] = $default_statement_descriptor;

        return $this;
    }

    /**
     * Gets discover_mid
     *
     * @return int|null
     */
    public function getDiscoverMid()
    {
        return $this->container['discover_mid'];
    }

    /**
     * Sets discover_mid
     *
     * @param int|null $discover_mid Assigned discoverMid value.
     *
     * @return self
     */
    public function setDiscoverMid($discover_mid, $deserialize = false)
    {
        $this->container['discover_mid'] = $discover_mid;

        return $this;
    }

    /**
     * Gets dob
     *
     * @return \Finix\Model\IdentityEntityDob|null
     */
    public function getDob()
    {
        return $this->container['dob'];
    }

    /**
     * Sets dob
     *
     * @param \Finix\Model\IdentityEntityDob|null $dob dob
     *
     * @return self
     */
    public function setDob($dob, $deserialize = false)
    {
        $this->container['dob'] = $dob;

        return $this;
    }

    /**
     * Gets doing_business_as
     *
     * @return string|null
     */
    public function getDoingBusinessAs()
    {
        return $this->container['doing_business_as'];
    }

    /**
     * Sets doing_business_as
     *
     * @param string|null $doing_business_as Alternate names of the business. If there are no other names, pass the same value used for `business_name` (max 60 characters).
     *
     * @return self
     */
    public function setDoingBusinessAs($doing_business_as, $deserialize = false)
    {

        if (!is_null($doing_business_as) && (mb_strlen($doing_business_as) < 1)) {
            throw new \InvalidArgumentException('invalid length for $doing_business_as when calling OnboardingFormOnboardingDataEntity., must be bigger than or equal to 1.');
        }
        

        $this->container['doing_business_as'] = $doing_business_as;

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
     * @param string|null $email The email address of the principal control owner where they can be reached (max 100 characters).
     *
     * @return self
     */
    public function setEmail($email, $deserialize = false)
    {

        if (!is_null($email) && (mb_strlen($email) < 1)) {
            throw new \InvalidArgumentException('invalid length for $email when calling OnboardingFormOnboardingDataEntity., must be bigger than or equal to 1.');
        }
        

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
     * @param string|null $first_name The legal first name of the merchant's control owner (max 20 characters).
     *
     * @return self
     */
    public function setFirstName($first_name, $deserialize = false)
    {

        if (!is_null($first_name) && (mb_strlen($first_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling OnboardingFormOnboardingDataEntity., must be bigger than or equal to 1.');
        }
        

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets has_accepted_credit_cards_previously
     *
     * @return bool|null
     */
    public function getHasAcceptedCreditCardsPreviously()
    {
        return $this->container['has_accepted_credit_cards_previously'];
    }

    /**
     * Sets has_accepted_credit_cards_previously
     *
     * @param bool|null $has_accepted_credit_cards_previously Defaults to **false** if not passed.
     *
     * @return self
     */
    public function setHasAcceptedCreditCardsPreviously($has_accepted_credit_cards_previously, $deserialize = false)
    {
        $this->container['has_accepted_credit_cards_previously'] = $has_accepted_credit_cards_previously;

        return $this;
    }

    /**
     * Gets incorporation_date
     *
     * @return \Finix\Model\OnboardingFormOnboardingDataEntityIncorporationDate|null
     */
    public function getIncorporationDate()
    {
        return $this->container['incorporation_date'];
    }

    /**
     * Sets incorporation_date
     *
     * @param \Finix\Model\OnboardingFormOnboardingDataEntityIncorporationDate|null $incorporation_date incorporation_date
     *
     * @return self
     */
    public function setIncorporationDate($incorporation_date, $deserialize = false)
    {
        $this->container['incorporation_date'] = $incorporation_date;

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
     * @param string|null $last_name The legal last name of the merchant's control owner (max 20 characters).
     *
     * @return self
     */
    public function setLastName($last_name, $deserialize = false)
    {

        if (!is_null($last_name) && (mb_strlen($last_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling OnboardingFormOnboardingDataEntity., must be bigger than or equal to 1.');
        }
        

        $this->container['last_name'] = $last_name;

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
     * @param int|null $max_transaction_amount The maximum amount (in cents) that can be charged for a single transaction (max 12 characters).
     *
     * @return self
     */
    public function setMaxTransactionAmount($max_transaction_amount, $deserialize = false)
    {
        $this->container['max_transaction_amount'] = $max_transaction_amount;

        return $this;
    }

    /**
     * Gets mcc
     *
     * @return string|null
     */
    public function getMcc()
    {
        return $this->container['mcc'];
    }

    /**
     * Sets mcc
     *
     * @param string|null $mcc The Merchant Category Code ([MCC](http://www.dm.usda.gov/procurement/card/card\\_x/mcc.pdf)) that this seller will be classified under.
     *
     * @return self
     */
    public function setMcc($mcc, $deserialize = false)
    {

        if (!is_null($mcc) && (mb_strlen($mcc) < 1)) {
            throw new \InvalidArgumentException('invalid length for $mcc when calling OnboardingFormOnboardingDataEntity., must be bigger than or equal to 1.');
        }
        

        $this->container['mcc'] = $mcc;

        return $this;
    }

    /**
     * Gets ownership_type
     *
     * @return string|null
     */
    public function getOwnershipType()
    {
        return $this->container['ownership_type'];
    }

    /**
     * Sets ownership_type
     *
     * @param string|null $ownership_type Values can be either: <ul><li><strong>PUBLIC</strong> to indicate a publicly-traded company.<li><strong>PRIVATE</strong> for privately-held businesses.
     *
     * @return self
     */
    public function setOwnershipType($ownership_type, $deserialize = false)
    {
        $allowedValues = $this->getOwnershipTypeAllowableValues();
        if (!is_null($ownership_type) && !in_array($ownership_type, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ownership_type', must be one of '%s'",
                    $ownership_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (!is_null($ownership_type) && (mb_strlen($ownership_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $ownership_type when calling OnboardingFormOnboardingDataEntity., must be bigger than or equal to 1.');
        }
        

        $this->container['ownership_type'] = $ownership_type;

        return $this;
    }

    /**
     * Gets personal_address
     *
     * @return \Finix\Model\IdentityEntityPersonalAddress|null
     */
    public function getPersonalAddress()
    {
        return $this->container['personal_address'];
    }

    /**
     * Sets personal_address
     *
     * @param \Finix\Model\IdentityEntityPersonalAddress|null $personal_address personal_address
     *
     * @return self
     */
    public function setPersonalAddress($personal_address, $deserialize = false)
    {
        $this->container['personal_address'] = $personal_address;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone The principal control owner's phone number (max 10 characters).
     *
     * @return self
     */
    public function setPhone($phone, $deserialize = false)
    {

        if (!is_null($phone) && (mb_strlen($phone) < 1)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling OnboardingFormOnboardingDataEntity., must be bigger than or equal to 1.');
        }
        

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets principal_percentage_ownership
     *
     * @return int|null
     */
    public function getPrincipalPercentageOwnership()
    {
        return $this->container['principal_percentage_ownership'];
    }

    /**
     * Sets principal_percentage_ownership
     *
     * @param int|null $principal_percentage_ownership Percentage of the company owned by the principal control owner (min 0; max 100).
     *
     * @return self
     */
    public function setPrincipalPercentageOwnership($principal_percentage_ownership, $deserialize = false)
    {
        $this->container['principal_percentage_ownership'] = $principal_percentage_ownership;

        return $this;
    }

    /**
     * Gets short_business_name
     *
     * @return string|null
     */
    public function getShortBusinessName()
    {
        return $this->container['short_business_name'];
    }

    /**
     * Sets short_business_name
     *
     * @param string|null $short_business_name Abbreviated names of the business. If there are no abbreviated name, leave this field blank.
     *
     * @return self
     */
    public function setShortBusinessName($short_business_name, $deserialize = false)
    {
        $this->container['short_business_name'] = $short_business_name;

        return $this;
    }

    /**
     * Gets tax_authority
     *
     * @return string|null
     */
    public function getTaxAuthority()
    {
        return $this->container['tax_authority'];
    }

    /**
     * Sets tax_authority
     *
     * @param string|null $tax_authority <ul><li>Only required when onboarding a seller with a <tt>MCC</tt> of <strong>9311</strong>.<li> The <tt>tax_authority</tt> is the tax gathering entity (e.g San Francisco Water Authority).
     *
     * @return self
     */
    public function setTaxAuthority($tax_authority, $deserialize = false)
    {
        $this->container['tax_authority'] = $tax_authority;

        return $this;
    }

    /**
     * Gets tax_id_provided
     *
     * @return bool|null
     */
    public function getTaxIdProvided()
    {
        return $this->container['tax_id_provided'];
    }

    /**
     * Sets tax_id_provided
     *
     * @param bool|null $tax_id_provided Details if the `tax_id` was provided.
     *
     * @return self
     */
    public function setTaxIdProvided($tax_id_provided, $deserialize = false)
    {
        $this->container['tax_id_provided'] = $tax_id_provided;

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
     * @param string|null $title The corporate title of the control owner (e.g. Chief Executive Officer, CFO, etc. Max 60 characters).
     *
     * @return self
     */
    public function setTitle($title, $deserialize = false)
    {

        if (!is_null($title) && (mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling OnboardingFormOnboardingDataEntity., must be bigger than or equal to 1.');
        }
        

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url The URL of the merchant's public website.
     *
     * @return self
     */
    public function setUrl($url, $deserialize = false)
    {

        if (!is_null($url) && (mb_strlen($url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $url when calling OnboardingFormOnboardingDataEntity., must be bigger than or equal to 1.');
        }
        

        $this->container['url'] = $url;

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



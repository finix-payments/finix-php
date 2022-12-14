<?php
/**
 * Fee
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
 * Fee Class Doc Comment
 *
 * @category Class
 * @description An out of flow &#x60;fee&#x60; that is added to a &#x60;settlement&#x60;.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Fee implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Fee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'amount' => 'int',
        'currency' => '\Finix\Model\Currency',
        'display_name' => 'string',
        'fee_subtype' => 'string',
        'fee_type' => 'string',
        'label' => 'string',
        'linked_id' => 'string',
        'linked_type' => 'string',
        'merchant' => 'string',
        'tags' => 'array<string,string>',
        '_links' => '\Finix\Model\FeeLinks'
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
        'amount' => null,
        'currency' => null,
        'display_name' => null,
        'fee_subtype' => null,
        'fee_type' => null,
        'label' => null,
        'linked_id' => null,
        'linked_type' => null,
        'merchant' => null,
        'tags' => null,
        '_links' => null
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
        'amount' => 'amount',
        'currency' => 'currency',
        'display_name' => 'display_name',
        'fee_subtype' => 'fee_subtype',
        'fee_type' => 'fee_type',
        'label' => 'label',
        'linked_id' => 'linked_id',
        'linked_type' => 'linked_type',
        'merchant' => 'merchant',
        'tags' => 'tags',
        '_links' => '_links'
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
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'display_name' => 'setDisplayName',
        'fee_subtype' => 'setFeeSubtype',
        'fee_type' => 'setFeeType',
        'label' => 'setLabel',
        'linked_id' => 'setLinkedId',
        'linked_type' => 'setLinkedType',
        'merchant' => 'setMerchant',
        'tags' => 'setTags',
        '_links' => 'setLinks'
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
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'display_name' => 'getDisplayName',
        'fee_subtype' => 'getFeeSubtype',
        'fee_type' => 'getFeeType',
        'label' => 'getLabel',
        'linked_id' => 'getLinkedId',
        'linked_type' => 'getLinkedType',
        'merchant' => 'getMerchant',
        'tags' => 'getTags',
        '_links' => 'getLinks'
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

    public const FEE_SUBTYPE_CUSTOM = 'CUSTOM';
    public const FEE_SUBTYPE_APPLICATION_FEE = 'APPLICATION_FEE';
    public const FEE_SUBTYPE_PLATFORM_FEE = 'PLATFORM_FEE';
    public const FEE_TYPE_APPLICATION_FEE = 'APPLICATION_FEE';
    public const FEE_TYPE_ACH_BASIS_POINTS = 'ACH_BASIS_POINTS';
    public const FEE_TYPE_ACH_FIXED = 'ACH_FIXED';
    public const FEE_TYPE_CARD_BASIS_POINTS = 'CARD_BASIS_POINTS';
    public const FEE_TYPE_CARD_FIXED = 'CARD_FIXED';
    public const FEE_TYPE_CARD_INTERCHANGE = 'CARD_INTERCHANGE';
    public const FEE_TYPE_VISA_BASIS_POINTS = 'VISA_BASIS_POINTS';
    public const FEE_TYPE_VISA_FIXED = 'VISA_FIXED';
    public const FEE_TYPE_VISA_INTERCHANGE = 'VISA_INTERCHANGE';
    public const FEE_TYPE_VISA_ASSESSMENT_BASIS_POINTS = 'VISA_ASSESSMENT_BASIS_POINTS';
    public const FEE_TYPE_VISA_ACQUIRER_PROCESSING_FIXED = 'VISA_ACQUIRER_PROCESSING_FIXED';
    public const FEE_TYPE_VISA_CREDIT_VOUCHER_FIXED = 'VISA_CREDIT_VOUCHER_FIXED';
    public const FEE_TYPE_VISA_BASE_II_SYSTEM_FILE_TRANSMISSION_FIXED = 'VISA_BASE_II_SYSTEM_FILE_TRANSMISSION_FIXED';
    public const FEE_TYPE_VISA_BASE_II_CREDIT_VOUCHER_FIXED = 'VISA_BASE_II_CREDIT_VOUCHER_FIXED';
    public const FEE_TYPE_VISA_KILOBYTE_ACCESS_FIXED = 'VISA_KILOBYTE_ACCESS_FIXED';
    public const FEE_TYPE_DISCOVER_BASIS_POINTS = 'DISCOVER_BASIS_POINTS';
    public const FEE_TYPE_DISCOVER_FIXED = 'DISCOVER_FIXED';
    public const FEE_TYPE_DISCOVER_INTERCHANGE = 'DISCOVER_INTERCHANGE';
    public const FEE_TYPE_DISCOVER_ASSESSMENT_BASIS_POINTS = 'DISCOVER_ASSESSMENT_BASIS_POINTS';
    public const FEE_TYPE_DISCOVER_DATA_USAGE_FIXED = 'DISCOVER_DATA_USAGE_FIXED';
    public const FEE_TYPE_DISCOVER_NETWORK_AUTHORIZATION_FIXED = 'DISCOVER_NETWORK_AUTHORIZATION_FIXED';
    public const FEE_TYPE_DINERS_CLUB_BASIS_POINTS = 'DINERS_CLUB_BASIS_POINTS';
    public const FEE_TYPE_DINERS_CLUB_FIXED = 'DINERS_CLUB_FIXED';
    public const FEE_TYPE_DINERS_CLUB_INTERCHANGE = 'DINERS_CLUB_INTERCHANGE';
    public const FEE_TYPE_MASTERCARD_BASIS_POINTS = 'MASTERCARD_BASIS_POINTS';
    public const FEE_TYPE_MASTERCARD_FIXED = 'MASTERCARD_FIXED';
    public const FEE_TYPE_MASTERCARD_INTERCHANGE = 'MASTERCARD_INTERCHANGE';
    public const FEE_TYPE_MASTERCARD_ASSESSMENT_UNDER_1_K_BASIS_POINTS = 'MASTERCARD_ASSESSMENT_UNDER_1K_BASIS_POINTS';
    public const FEE_TYPE_MASTERCARD_ASSESSMENT_OVER_1_K_BASIS_POINTS = 'MASTERCARD_ASSESSMENT_OVER_1K_BASIS_POINTS';
    public const FEE_TYPE_MASTERCARD_ACQUIRER_FEE_BASIS_POINTS = 'MASTERCARD_ACQUIRER_FEE_BASIS_POINTS';
    public const FEE_TYPE_JCB_BASIS_POINTS = 'JCB_BASIS_POINTS';
    public const FEE_TYPE_JCB_FIXED = 'JCB_FIXED';
    public const FEE_TYPE_JCB_INTERCHANGE = 'JCB_INTERCHANGE';
    public const FEE_TYPE_AMERICAN_EXPRESS_BASIS_POINTS = 'AMERICAN_EXPRESS_BASIS_POINTS';
    public const FEE_TYPE_AMERICAN_EXPRESS_FIXED = 'AMERICAN_EXPRESS_FIXED';
    public const FEE_TYPE_AMERICAN_EXPRESS_INTERCHANGE = 'AMERICAN_EXPRESS_INTERCHANGE';
    public const FEE_TYPE_AMERICAN_EXPRESS_ASSESSMENT_BASIS_POINTS = 'AMERICAN_EXPRESS_ASSESSMENT_BASIS_POINTS';
    public const FEE_TYPE_DISPUTE_INQUIRY_FIXED_FEE = 'DISPUTE_INQUIRY_FIXED_FEE';
    public const FEE_TYPE_DISPUTE_FIXED_FEE = 'DISPUTE_FIXED_FEE';
    public const FEE_TYPE_QUALIFIED_TIER_BASIS_POINTS_FEE = 'QUALIFIED_TIER_BASIS_POINTS_FEE';
    public const FEE_TYPE_QUALIFIED_TIER_FIXED_FEE = 'QUALIFIED_TIER_FIXED_FEE';
    public const FEE_TYPE_CUSTOM = 'CUSTOM';
    public const FEE_TYPE_ACH_DEBIT_RETURN_FIXED_FEE = 'ACH_DEBIT_RETURN_FIXED_FEE';
    public const FEE_TYPE_ACH_CREDIT_RETURN_FIXED_FEE = 'ACH_CREDIT_RETURN_FIXED_FEE';
    public const FEE_TYPE_ANCILLARY_FIXED_FEE_PRIMARY = 'ANCILLARY_FIXED_FEE_PRIMARY';
    public const FEE_TYPE_ANCILLARY_FIXED_FEE_SECONDARY = 'ANCILLARY_FIXED_FEE_SECONDARY';
    public const FEE_TYPE_SETTLEMENT_V2_TRANSFER = 'SETTLEMENT_V2_TRANSFER';
    public const LINKED_TYPE_APPLICATION = 'APPLICATION';
    public const LINKED_TYPE_PLATFORM = 'PLATFORM';
    public const LINKED_TYPE_SUBSCRIPTION = 'SUBSCRIPTION';
    public const LINKED_TYPE_TRANSFER = 'TRANSFER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeeSubtypeAllowableValues()
    {
        return [
            self::FEE_SUBTYPE_CUSTOM,
            self::FEE_SUBTYPE_APPLICATION_FEE,
            self::FEE_SUBTYPE_PLATFORM_FEE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeeTypeAllowableValues()
    {
        return [
            self::FEE_TYPE_APPLICATION_FEE,
            self::FEE_TYPE_ACH_BASIS_POINTS,
            self::FEE_TYPE_ACH_FIXED,
            self::FEE_TYPE_CARD_BASIS_POINTS,
            self::FEE_TYPE_CARD_FIXED,
            self::FEE_TYPE_CARD_INTERCHANGE,
            self::FEE_TYPE_VISA_BASIS_POINTS,
            self::FEE_TYPE_VISA_FIXED,
            self::FEE_TYPE_VISA_INTERCHANGE,
            self::FEE_TYPE_VISA_ASSESSMENT_BASIS_POINTS,
            self::FEE_TYPE_VISA_ACQUIRER_PROCESSING_FIXED,
            self::FEE_TYPE_VISA_CREDIT_VOUCHER_FIXED,
            self::FEE_TYPE_VISA_BASE_II_SYSTEM_FILE_TRANSMISSION_FIXED,
            self::FEE_TYPE_VISA_BASE_II_CREDIT_VOUCHER_FIXED,
            self::FEE_TYPE_VISA_KILOBYTE_ACCESS_FIXED,
            self::FEE_TYPE_DISCOVER_BASIS_POINTS,
            self::FEE_TYPE_DISCOVER_FIXED,
            self::FEE_TYPE_DISCOVER_INTERCHANGE,
            self::FEE_TYPE_DISCOVER_ASSESSMENT_BASIS_POINTS,
            self::FEE_TYPE_DISCOVER_DATA_USAGE_FIXED,
            self::FEE_TYPE_DISCOVER_NETWORK_AUTHORIZATION_FIXED,
            self::FEE_TYPE_DINERS_CLUB_BASIS_POINTS,
            self::FEE_TYPE_DINERS_CLUB_FIXED,
            self::FEE_TYPE_DINERS_CLUB_INTERCHANGE,
            self::FEE_TYPE_MASTERCARD_BASIS_POINTS,
            self::FEE_TYPE_MASTERCARD_FIXED,
            self::FEE_TYPE_MASTERCARD_INTERCHANGE,
            self::FEE_TYPE_MASTERCARD_ASSESSMENT_UNDER_1_K_BASIS_POINTS,
            self::FEE_TYPE_MASTERCARD_ASSESSMENT_OVER_1_K_BASIS_POINTS,
            self::FEE_TYPE_MASTERCARD_ACQUIRER_FEE_BASIS_POINTS,
            self::FEE_TYPE_JCB_BASIS_POINTS,
            self::FEE_TYPE_JCB_FIXED,
            self::FEE_TYPE_JCB_INTERCHANGE,
            self::FEE_TYPE_AMERICAN_EXPRESS_BASIS_POINTS,
            self::FEE_TYPE_AMERICAN_EXPRESS_FIXED,
            self::FEE_TYPE_AMERICAN_EXPRESS_INTERCHANGE,
            self::FEE_TYPE_AMERICAN_EXPRESS_ASSESSMENT_BASIS_POINTS,
            self::FEE_TYPE_DISPUTE_INQUIRY_FIXED_FEE,
            self::FEE_TYPE_DISPUTE_FIXED_FEE,
            self::FEE_TYPE_QUALIFIED_TIER_BASIS_POINTS_FEE,
            self::FEE_TYPE_QUALIFIED_TIER_FIXED_FEE,
            self::FEE_TYPE_CUSTOM,
            self::FEE_TYPE_ACH_DEBIT_RETURN_FIXED_FEE,
            self::FEE_TYPE_ACH_CREDIT_RETURN_FIXED_FEE,
            self::FEE_TYPE_ANCILLARY_FIXED_FEE_PRIMARY,
            self::FEE_TYPE_ANCILLARY_FIXED_FEE_SECONDARY,
            self::FEE_TYPE_SETTLEMENT_V2_TRANSFER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLinkedTypeAllowableValues()
    {
        return [
            self::LINKED_TYPE_APPLICATION,
            self::LINKED_TYPE_PLATFORM,
            self::LINKED_TYPE_SUBSCRIPTION,
            self::LINKED_TYPE_TRANSFER,
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['fee_subtype'] = $data['fee_subtype'] ?? null;
        $this->container['fee_type'] = $data['fee_type'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['linked_id'] = $data['linked_id'] ?? null;
        $this->container['linked_type'] = $data['linked_type'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['_links'] = $data['_links'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFeeSubtypeAllowableValues();
        if (!is_null($this->container['fee_subtype']) && !in_array($this->container['fee_subtype'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fee_subtype', must be one of '%s'",
                $this->container['fee_subtype'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFeeTypeAllowableValues();
        if (!is_null($this->container['fee_type']) && !in_array($this->container['fee_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fee_type', must be one of '%s'",
                $this->container['fee_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLinkedTypeAllowableValues();
        if (!is_null($this->container['linked_type']) && !in_array($this->container['linked_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'linked_type', must be one of '%s'",
                $this->container['linked_type'],
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
     * @param string|null $id The ID of the `fee` resource.
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
     * @param int|null $amount The amount of the fee in cents.
     *
     * @return self
     */
    public function setAmount($amount, $deserialize = false)
    {
        $this->container['amount'] = $amount;

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
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name The name of the `fee` object that was include in `display_name` when creating the fee.
     *
     * @return self
     */
    public function setDisplayName($display_name, $deserialize = false)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets fee_subtype
     *
     * @return string|null
     */
    public function getFeeSubtype()
    {
        return $this->container['fee_subtype'];
    }

    /**
     * Sets fee_subtype
     *
     * @param string|null $fee_subtype Subtype of the `fee`.
     *
     * @return self
     */
    public function setFeeSubtype($fee_subtype, $deserialize = false)
    {
        $allowedValues = $this->getFeeSubtypeAllowableValues();
        if (!is_null($fee_subtype) && !in_array($fee_subtype, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fee_subtype', must be one of '%s'",
                    $fee_subtype,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fee_subtype'] = $fee_subtype;

        return $this;
    }

    /**
     * Gets fee_type
     *
     * @return string|null
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type
     *
     * @param string|null $fee_type The type of `fee`.
     *
     * @return self
     */
    public function setFeeType($fee_type, $deserialize = false)
    {
        $allowedValues = $this->getFeeTypeAllowableValues();
        if (!is_null($fee_type) && !in_array($fee_type, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fee_type', must be one of '%s'",
                    $fee_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label The name of the `fee` object that was include in `label` when creating the fee.
     *
     * @return self
     */
    public function setLabel($label, $deserialize = false)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets linked_id
     *
     * @return string|null
     */
    public function getLinkedId()
    {
        return $this->container['linked_id'];
    }

    /**
     * Sets linked_id
     *
     * @param string|null $linked_id ID of the linked resource.
     *
     * @return self
     */
    public function setLinkedId($linked_id, $deserialize = false)
    {
        $this->container['linked_id'] = $linked_id;

        return $this;
    }

    /**
     * Gets linked_type
     *
     * @return string|null
     */
    public function getLinkedType()
    {
        return $this->container['linked_type'];
    }

    /**
     * Sets linked_type
     *
     * @param string|null $linked_type The type of entity the `fee` is linked to (**null** by default).
     *
     * @return self
     */
    public function setLinkedType($linked_type, $deserialize = false)
    {
        $allowedValues = $this->getLinkedTypeAllowableValues();
        if (!is_null($linked_type) && !in_array($linked_type, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'linked_type', must be one of '%s'",
                    $linked_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['linked_type'] = $linked_type;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return string|null
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param string|null $merchant The `Merchant` ID that the fee is being debited from.
     *
     * @return self
     */
    public function setMerchant($merchant, $deserialize = false)
    {
        $this->container['merchant'] = $merchant;

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
     * Gets _links
     *
     * @return \Finix\Model\FeeLinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \Finix\Model\FeeLinks|null $_links _links
     *
     * @return self
     */
    public function setLinks($_links, $deserialize = false)
    {
        $this->container['_links'] = $_links;

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



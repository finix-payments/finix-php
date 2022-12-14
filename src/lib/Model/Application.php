<?php
/**
 * Application
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
 * Application Class Doc Comment
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
class Application implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Application';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'card_cvv_required' => 'bool',
        'card_expiration_date_required' => 'bool',
        'creating_transfer_from_report_enabled' => 'bool',
        'enabled' => 'bool',
        'fee_ready_to_settle_upon' => 'string',
        'name' => 'string',
        'owner' => 'string',
        'processing_enabled' => 'bool',
        'ready_to_settle_upon' => 'string',
        'settlement_enabled' => 'bool',
        'settlement_funding_identifier' => 'string',
        'tags' => 'array<string,string>',
        '_links' => '\Finix\Model\ApplicationLinks'
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
        'card_cvv_required' => null,
        'card_expiration_date_required' => null,
        'creating_transfer_from_report_enabled' => null,
        'enabled' => null,
        'fee_ready_to_settle_upon' => null,
        'name' => null,
        'owner' => null,
        'processing_enabled' => null,
        'ready_to_settle_upon' => null,
        'settlement_enabled' => null,
        'settlement_funding_identifier' => null,
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
        'card_cvv_required' => 'card_cvv_required',
        'card_expiration_date_required' => 'card_expiration_date_required',
        'creating_transfer_from_report_enabled' => 'creating_transfer_from_report_enabled',
        'enabled' => 'enabled',
        'fee_ready_to_settle_upon' => 'fee_ready_to_settle_upon',
        'name' => 'name',
        'owner' => 'owner',
        'processing_enabled' => 'processing_enabled',
        'ready_to_settle_upon' => 'ready_to_settle_upon',
        'settlement_enabled' => 'settlement_enabled',
        'settlement_funding_identifier' => 'settlement_funding_identifier',
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
        'card_cvv_required' => 'setCardCvvRequired',
        'card_expiration_date_required' => 'setCardExpirationDateRequired',
        'creating_transfer_from_report_enabled' => 'setCreatingTransferFromReportEnabled',
        'enabled' => 'setEnabled',
        'fee_ready_to_settle_upon' => 'setFeeReadyToSettleUpon',
        'name' => 'setName',
        'owner' => 'setOwner',
        'processing_enabled' => 'setProcessingEnabled',
        'ready_to_settle_upon' => 'setReadyToSettleUpon',
        'settlement_enabled' => 'setSettlementEnabled',
        'settlement_funding_identifier' => 'setSettlementFundingIdentifier',
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
        'card_cvv_required' => 'getCardCvvRequired',
        'card_expiration_date_required' => 'getCardExpirationDateRequired',
        'creating_transfer_from_report_enabled' => 'getCreatingTransferFromReportEnabled',
        'enabled' => 'getEnabled',
        'fee_ready_to_settle_upon' => 'getFeeReadyToSettleUpon',
        'name' => 'getName',
        'owner' => 'getOwner',
        'processing_enabled' => 'getProcessingEnabled',
        'ready_to_settle_upon' => 'getReadyToSettleUpon',
        'settlement_enabled' => 'getSettlementEnabled',
        'settlement_funding_identifier' => 'getSettlementFundingIdentifier',
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

    public const FEE_READY_TO_SETTLE_UPON_RECONCILIATION = 'RECONCILIATION';
    public const FEE_READY_TO_SETTLE_UPON_SUCCESSFUL_CAPTURE = 'SUCCESSFUL_CAPTURE';
    public const READY_TO_SETTLE_UPON_RECONCILIATION = 'RECONCILIATION';
    public const READY_TO_SETTLE_UPON_SUCCESSFUL_CAPTURE = 'SUCCESSFUL_CAPTURE';
    public const SETTLEMENT_FUNDING_IDENTIFIER__UNSET = 'UNSET';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeeReadyToSettleUponAllowableValues()
    {
        return [
            self::FEE_READY_TO_SETTLE_UPON_RECONCILIATION,
            self::FEE_READY_TO_SETTLE_UPON_SUCCESSFUL_CAPTURE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReadyToSettleUponAllowableValues()
    {
        return [
            self::READY_TO_SETTLE_UPON_RECONCILIATION,
            self::READY_TO_SETTLE_UPON_SUCCESSFUL_CAPTURE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSettlementFundingIdentifierAllowableValues()
    {
        return [
            self::SETTLEMENT_FUNDING_IDENTIFIER__UNSET,
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
        $this->container['card_cvv_required'] = $data['card_cvv_required'] ?? null;
        $this->container['card_expiration_date_required'] = $data['card_expiration_date_required'] ?? null;
        $this->container['creating_transfer_from_report_enabled'] = $data['creating_transfer_from_report_enabled'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['fee_ready_to_settle_upon'] = $data['fee_ready_to_settle_upon'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['owner'] = $data['owner'] ?? null;
        $this->container['processing_enabled'] = $data['processing_enabled'] ?? null;
        $this->container['ready_to_settle_upon'] = $data['ready_to_settle_upon'] ?? null;
        $this->container['settlement_enabled'] = $data['settlement_enabled'] ?? null;
        $this->container['settlement_funding_identifier'] = $data['settlement_funding_identifier'] ?? null;
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

        $allowedValues = $this->getFeeReadyToSettleUponAllowableValues();
        if (!is_null($this->container['fee_ready_to_settle_upon']) && !in_array($this->container['fee_ready_to_settle_upon'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fee_ready_to_settle_upon', must be one of '%s'",
                $this->container['fee_ready_to_settle_upon'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getReadyToSettleUponAllowableValues();
        if (!is_null($this->container['ready_to_settle_upon']) && !in_array($this->container['ready_to_settle_upon'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ready_to_settle_upon', must be one of '%s'",
                $this->container['ready_to_settle_upon'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSettlementFundingIdentifierAllowableValues();
        if (!is_null($this->container['settlement_funding_identifier']) && !in_array($this->container['settlement_funding_identifier'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'settlement_funding_identifier', must be one of '%s'",
                $this->container['settlement_funding_identifier'],
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
     * @param string|null $id ID of the `Application` resource.
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
     * @param \DateTime|null $created_at Point in time when this object was created.
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
     * @param \DateTime|null $updated_at Point in time when this object was most recently updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at, $deserialize = false)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets card_cvv_required
     *
     * @return bool|null
     */
    public function getCardCvvRequired()
    {
        return $this->container['card_cvv_required'];
    }

    /**
     * Sets card_cvv_required
     *
     * @param bool|null $card_cvv_required Details if the `Application` requires CVV code.
     *
     * @return self
     */
    public function setCardCvvRequired($card_cvv_required, $deserialize = false)
    {
        $this->container['card_cvv_required'] = $card_cvv_required;

        return $this;
    }

    /**
     * Gets card_expiration_date_required
     *
     * @return bool|null
     */
    public function getCardExpirationDateRequired()
    {
        return $this->container['card_expiration_date_required'];
    }

    /**
     * Sets card_expiration_date_required
     *
     * @param bool|null $card_expiration_date_required Details if the `Application` requires the card's expiration date.
     *
     * @return self
     */
    public function setCardExpirationDateRequired($card_expiration_date_required, $deserialize = false)
    {
        $this->container['card_expiration_date_required'] = $card_expiration_date_required;

        return $this;
    }

    /**
     * Gets creating_transfer_from_report_enabled
     *
     * @return bool|null
     */
    public function getCreatingTransferFromReportEnabled()
    {
        return $this->container['creating_transfer_from_report_enabled'];
    }

    /**
     * Sets creating_transfer_from_report_enabled
     *
     * @param bool|null $creating_transfer_from_report_enabled Details if the `Application` is automatically set to create `Transfers` once settlement reports get generated.
     *
     * @return self
     */
    public function setCreatingTransferFromReportEnabled($creating_transfer_from_report_enabled, $deserialize = false)
    {
        $this->container['creating_transfer_from_report_enabled'] = $creating_transfer_from_report_enabled;

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
     * @param bool|null $enabled Details if the `Application` is enabled and active. Set to **false** to disable the `Application`.
     *
     * @return self
     */
    public function setEnabled($enabled, $deserialize = false)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets fee_ready_to_settle_upon
     *
     * @return string|null
     */
    public function getFeeReadyToSettleUpon()
    {
        return $this->container['fee_ready_to_settle_upon'];
    }

    /**
     * Sets fee_ready_to_settle_upon
     *
     * @param string|null $fee_ready_to_settle_upon Details when the `fees` of `Authroizations` submitted under the `Application` will be ready to settle.
     *
     * @return self
     */
    public function setFeeReadyToSettleUpon($fee_ready_to_settle_upon, $deserialize = false)
    {
        $allowedValues = $this->getFeeReadyToSettleUponAllowableValues();
        if (!is_null($fee_ready_to_settle_upon) && !in_array($fee_ready_to_settle_upon, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fee_ready_to_settle_upon', must be one of '%s'",
                    $fee_ready_to_settle_upon,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fee_ready_to_settle_upon'] = $fee_ready_to_settle_upon;

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
     * @param string|null $name The name of the `Application`.
     *
     * @return self
     */
    public function setName($name, $deserialize = false)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return string|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param string|null $owner ID of the `Identity` resource that created the `Application`.
     *
     * @return self
     */
    public function setOwner($owner, $deserialize = false)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets processing_enabled
     *
     * @return bool|null
     */
    public function getProcessingEnabled()
    {
        return $this->container['processing_enabled'];
    }

    /**
     * Sets processing_enabled
     *
     * @param bool|null $processing_enabled Details if transaction processing is enabled for the `Application`.
     *
     * @return self
     */
    public function setProcessingEnabled($processing_enabled, $deserialize = false)
    {
        $this->container['processing_enabled'] = $processing_enabled;

        return $this;
    }

    /**
     * Gets ready_to_settle_upon
     *
     * @return string|null
     */
    public function getReadyToSettleUpon()
    {
        return $this->container['ready_to_settle_upon'];
    }

    /**
     * Sets ready_to_settle_upon
     *
     * @param string|null $ready_to_settle_upon Details when transactions submitted under the `Application` will be ready to settle.
     *
     * @return self
     */
    public function setReadyToSettleUpon($ready_to_settle_upon, $deserialize = false)
    {
        $allowedValues = $this->getReadyToSettleUponAllowableValues();
        if (!is_null($ready_to_settle_upon) && !in_array($ready_to_settle_upon, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ready_to_settle_upon', must be one of '%s'",
                    $ready_to_settle_upon,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ready_to_settle_upon'] = $ready_to_settle_upon;

        return $this;
    }

    /**
     * Gets settlement_enabled
     *
     * @return bool|null
     */
    public function getSettlementEnabled()
    {
        return $this->container['settlement_enabled'];
    }

    /**
     * Sets settlement_enabled
     *
     * @param bool|null $settlement_enabled Details if settlement processing is enabled for the `Application`.
     *
     * @return self
     */
    public function setSettlementEnabled($settlement_enabled, $deserialize = false)
    {
        $this->container['settlement_enabled'] = $settlement_enabled;

        return $this;
    }

    /**
     * Gets settlement_funding_identifier
     *
     * @return string|null
     */
    public function getSettlementFundingIdentifier()
    {
        return $this->container['settlement_funding_identifier'];
    }

    /**
     * Sets settlement_funding_identifier
     *
     * @param string|null $settlement_funding_identifier settlement_funding_identifier
     *
     * @return self
     */
    public function setSettlementFundingIdentifier($settlement_funding_identifier, $deserialize = false)
    {
        $allowedValues = $this->getSettlementFundingIdentifierAllowableValues();
        if (!is_null($settlement_funding_identifier) && !in_array($settlement_funding_identifier, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'settlement_funding_identifier', must be one of '%s'",
                    $settlement_funding_identifier,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['settlement_funding_identifier'] = $settlement_funding_identifier;

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
     * @return \Finix\Model\ApplicationLinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \Finix\Model\ApplicationLinks|null $_links _links
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



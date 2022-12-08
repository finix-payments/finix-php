<?php
/**
 * UpdateMerchantRequest
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
 * UpdateMerchantRequest Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateMerchantRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateMerchantRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'card_cvv_required' => 'bool',
        'card_expiration_date_required' => 'bool',
        'convenience_charges_enabled' => 'bool',
        'creating_transfer_from_report_enabled' => 'bool',
        'fee_ready_to_settle_upon' => 'string',
        'gross_settlement_enabled' => 'bool',
        'level_two_level_three_data_enabled' => 'bool',
        'merchant_name' => 'string',
        'processing_enabled' => 'bool',
        'ready_to_settle_upon' => 'string',
        'rent_surcharges_enabled' => 'bool',
        'settlement_enabled' => 'bool',
        'settlement_funding_identifier' => 'string',
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
        'card_cvv_required' => null,
        'card_expiration_date_required' => null,
        'convenience_charges_enabled' => null,
        'creating_transfer_from_report_enabled' => null,
        'fee_ready_to_settle_upon' => null,
        'gross_settlement_enabled' => null,
        'level_two_level_three_data_enabled' => null,
        'merchant_name' => null,
        'processing_enabled' => null,
        'ready_to_settle_upon' => null,
        'rent_surcharges_enabled' => null,
        'settlement_enabled' => null,
        'settlement_funding_identifier' => null,
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
        'card_cvv_required' => 'card_cvv_required',
        'card_expiration_date_required' => 'card_expiration_date_required',
        'convenience_charges_enabled' => 'convenience_charges_enabled',
        'creating_transfer_from_report_enabled' => 'creating_transfer_from_report_enabled',
        'fee_ready_to_settle_upon' => 'fee_ready_to_settle_upon',
        'gross_settlement_enabled' => 'gross_settlement_enabled',
        'level_two_level_three_data_enabled' => 'level_two_level_three_data_enabled',
        'merchant_name' => 'merchant_name',
        'processing_enabled' => 'processing_enabled',
        'ready_to_settle_upon' => 'ready_to_settle_upon',
        'rent_surcharges_enabled' => 'rent_surcharges_enabled',
        'settlement_enabled' => 'settlement_enabled',
        'settlement_funding_identifier' => 'settlement_funding_identifier',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_cvv_required' => 'setCardCvvRequired',
        'card_expiration_date_required' => 'setCardExpirationDateRequired',
        'convenience_charges_enabled' => 'setConvenienceChargesEnabled',
        'creating_transfer_from_report_enabled' => 'setCreatingTransferFromReportEnabled',
        'fee_ready_to_settle_upon' => 'setFeeReadyToSettleUpon',
        'gross_settlement_enabled' => 'setGrossSettlementEnabled',
        'level_two_level_three_data_enabled' => 'setLevelTwoLevelThreeDataEnabled',
        'merchant_name' => 'setMerchantName',
        'processing_enabled' => 'setProcessingEnabled',
        'ready_to_settle_upon' => 'setReadyToSettleUpon',
        'rent_surcharges_enabled' => 'setRentSurchargesEnabled',
        'settlement_enabled' => 'setSettlementEnabled',
        'settlement_funding_identifier' => 'setSettlementFundingIdentifier',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_cvv_required' => 'getCardCvvRequired',
        'card_expiration_date_required' => 'getCardExpirationDateRequired',
        'convenience_charges_enabled' => 'getConvenienceChargesEnabled',
        'creating_transfer_from_report_enabled' => 'getCreatingTransferFromReportEnabled',
        'fee_ready_to_settle_upon' => 'getFeeReadyToSettleUpon',
        'gross_settlement_enabled' => 'getGrossSettlementEnabled',
        'level_two_level_three_data_enabled' => 'getLevelTwoLevelThreeDataEnabled',
        'merchant_name' => 'getMerchantName',
        'processing_enabled' => 'getProcessingEnabled',
        'ready_to_settle_upon' => 'getReadyToSettleUpon',
        'rent_surcharges_enabled' => 'getRentSurchargesEnabled',
        'settlement_enabled' => 'getSettlementEnabled',
        'settlement_funding_identifier' => 'getSettlementFundingIdentifier',
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
        $this->container['card_cvv_required'] = $data['card_cvv_required'] ?? null;
        $this->container['card_expiration_date_required'] = $data['card_expiration_date_required'] ?? null;
        $this->container['convenience_charges_enabled'] = $data['convenience_charges_enabled'] ?? null;
        $this->container['creating_transfer_from_report_enabled'] = $data['creating_transfer_from_report_enabled'] ?? null;
        $this->container['fee_ready_to_settle_upon'] = $data['fee_ready_to_settle_upon'] ?? null;
        $this->container['gross_settlement_enabled'] = $data['gross_settlement_enabled'] ?? null;
        $this->container['level_two_level_three_data_enabled'] = $data['level_two_level_three_data_enabled'] ?? null;
        $this->container['merchant_name'] = $data['merchant_name'] ?? null;
        $this->container['processing_enabled'] = $data['processing_enabled'] ?? null;
        $this->container['ready_to_settle_upon'] = $data['ready_to_settle_upon'] ?? null;
        $this->container['rent_surcharges_enabled'] = $data['rent_surcharges_enabled'] ?? null;
        $this->container['settlement_enabled'] = $data['settlement_enabled'] ?? null;
        $this->container['settlement_funding_identifier'] = $data['settlement_funding_identifier'] ?? null;
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
     * @param bool|null $card_cvv_required Set to **true** to require the card's CVV code.
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
     * @param bool|null $card_expiration_date_required Set to **true** to require the card's expiration date.
     *
     * @return self
     */
    public function setCardExpirationDateRequired($card_expiration_date_required, $deserialize = false)
    {
        $this->container['card_expiration_date_required'] = $card_expiration_date_required;

        return $this;
    }

    /**
     * Gets convenience_charges_enabled
     *
     * @return bool|null
     */
    public function getConvenienceChargesEnabled()
    {
        return $this->container['convenience_charges_enabled'];
    }

    /**
     * Sets convenience_charges_enabled
     *
     * @param bool|null $convenience_charges_enabled Set to **true** if you want to enable the `Merchant` to accept convenience fees and/or service fees.
     *
     * @return self
     */
    public function setConvenienceChargesEnabled($convenience_charges_enabled, $deserialize = false)
    {
        $this->container['convenience_charges_enabled'] = $convenience_charges_enabled;

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
     * @param bool|null $creating_transfer_from_report_enabled Set to **true** to automatically create `Transfers` once settlement reports get generated.
     *
     * @return self
     */
    public function setCreatingTransferFromReportEnabled($creating_transfer_from_report_enabled, $deserialize = false)
    {
        $this->container['creating_transfer_from_report_enabled'] = $creating_transfer_from_report_enabled;

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
     * @param string|null $fee_ready_to_settle_upon Details how the `Merchant` settles fees.
     *
     * @return self
     */
    public function setFeeReadyToSettleUpon($fee_ready_to_settle_upon, $deserialize = false)
    {
        $this->container['fee_ready_to_settle_upon'] = $fee_ready_to_settle_upon;

        return $this;
    }

    /**
     * Gets gross_settlement_enabled
     *
     * @return bool|null
     */
    public function getGrossSettlementEnabled()
    {
        return $this->container['gross_settlement_enabled'];
    }

    /**
     * Sets gross_settlement_enabled
     *
     * @param bool|null $gross_settlement_enabled Set to **true** to enable gross settlements.
     *
     * @return self
     */
    public function setGrossSettlementEnabled($gross_settlement_enabled, $deserialize = false)
    {
        $this->container['gross_settlement_enabled'] = $gross_settlement_enabled;

        return $this;
    }

    /**
     * Gets level_two_level_three_data_enabled
     *
     * @return bool|null
     */
    public function getLevelTwoLevelThreeDataEnabled()
    {
        return $this->container['level_two_level_three_data_enabled'];
    }

    /**
     * Sets level_two_level_three_data_enabled
     *
     * @param bool|null $level_two_level_three_data_enabled Set to **true** to enable the `Merchant` for Level 2 and Level 3 processing. Default value is **false**.
     *
     * @return self
     */
    public function setLevelTwoLevelThreeDataEnabled($level_two_level_three_data_enabled, $deserialize = false)
    {
        $this->container['level_two_level_three_data_enabled'] = $level_two_level_three_data_enabled;

        return $this;
    }

    /**
     * Gets merchant_name
     *
     * @return string|null
     */
    public function getMerchantName()
    {
        return $this->container['merchant_name'];
    }

    /**
     * Sets merchant_name
     *
     * @param string|null $merchant_name The legal name saved in the `Merchant` resource.
     *
     * @return self
     */
    public function setMerchantName($merchant_name, $deserialize = false)
    {
        $this->container['merchant_name'] = $merchant_name;

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
     * @param bool|null $processing_enabled Details if transaction processing is enabled for the `Merchant`.
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
     * @param string|null $ready_to_settle_upon Details how transactions captured by the `Merchant` are settled.
     *
     * @return self
     */
    public function setReadyToSettleUpon($ready_to_settle_upon, $deserialize = false)
    {
        $this->container['ready_to_settle_upon'] = $ready_to_settle_upon;

        return $this;
    }

    /**
     * Gets rent_surcharges_enabled
     *
     * @return bool|null
     */
    public function getRentSurchargesEnabled()
    {
        return $this->container['rent_surcharges_enabled'];
    }

    /**
     * Sets rent_surcharges_enabled
     *
     * @param bool|null $rent_surcharges_enabled Set to **true** if you want to enable a `Merchant` to accept rent charges.
     *
     * @return self
     */
    public function setRentSurchargesEnabled($rent_surcharges_enabled, $deserialize = false)
    {
        $this->container['rent_surcharges_enabled'] = $rent_surcharges_enabled;

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
     * @param bool|null $settlement_enabled Details if settlement processing is enabled for the `Merchant`.
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
     * @param string|null $settlement_funding_identifier Include addtional information (like the MID) when submitting funding `Tranfers` to processors.
     *
     * @return self
     */
    public function setSettlementFundingIdentifier($settlement_funding_identifier, $deserialize = false)
    {
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



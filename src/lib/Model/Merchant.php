<?php
/**
 * Merchant
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
 * Merchant Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Merchant implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Merchant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'application' => 'string',
        'card_cvv_required' => 'bool',
        'card_expiration_date_required' => 'bool',
        'creating_transfer_from_report_enabled' => 'bool',
        'convenience_charges_enabled' => 'bool',
        'fee_ready_to_settle_upon' => 'string',
        'gross_settlement_enabled' => 'bool',
        'identity' => 'string',
        'level_two_level_three_data_enabled' => 'bool',
        'mcc' => 'string',
        'merchant_name' => 'string',
        'merchant_profile' => 'string',
        'mid' => 'string',
        'onboarding_state' => 'string',
        'processor' => 'string',
        'processor_details' => '\Finix\Model\MerchantProcessorDetails',
        'processing_enabled' => 'bool',
        'ready_to_settle_upon' => 'string',
        'rent_surcharges_enabled' => 'bool',
        'settlement_enabled' => 'bool',
        'settlement_funding_identifier' => 'string',
        'tags' => 'array<string,string>',
        'verification' => 'string',
        '_links' => '\Finix\Model\MerchantLinks'
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
        'application' => null,
        'card_cvv_required' => null,
        'card_expiration_date_required' => null,
        'creating_transfer_from_report_enabled' => null,
        'convenience_charges_enabled' => null,
        'fee_ready_to_settle_upon' => null,
        'gross_settlement_enabled' => null,
        'identity' => null,
        'level_two_level_three_data_enabled' => null,
        'mcc' => null,
        'merchant_name' => null,
        'merchant_profile' => null,
        'mid' => null,
        'onboarding_state' => null,
        'processor' => null,
        'processor_details' => null,
        'processing_enabled' => null,
        'ready_to_settle_upon' => null,
        'rent_surcharges_enabled' => null,
        'settlement_enabled' => null,
        'settlement_funding_identifier' => null,
        'tags' => null,
        'verification' => null,
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
        'application' => 'application',
        'card_cvv_required' => 'card_cvv_required',
        'card_expiration_date_required' => 'card_expiration_date_required',
        'creating_transfer_from_report_enabled' => 'creating_transfer_from_report_enabled',
        'convenience_charges_enabled' => 'convenience_charges_enabled',
        'fee_ready_to_settle_upon' => 'fee_ready_to_settle_upon',
        'gross_settlement_enabled' => 'gross_settlement_enabled',
        'identity' => 'identity',
        'level_two_level_three_data_enabled' => 'level_two_level_three_data_enabled',
        'mcc' => 'mcc',
        'merchant_name' => 'merchant_name',
        'merchant_profile' => 'merchant_profile',
        'mid' => 'mid',
        'onboarding_state' => 'onboarding_state',
        'processor' => 'processor',
        'processor_details' => 'processor_details',
        'processing_enabled' => 'processing_enabled',
        'ready_to_settle_upon' => 'ready_to_settle_upon',
        'rent_surcharges_enabled' => 'rent_surcharges_enabled',
        'settlement_enabled' => 'settlement_enabled',
        'settlement_funding_identifier' => 'settlement_funding_identifier',
        'tags' => 'tags',
        'verification' => 'verification',
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
        'application' => 'setApplication',
        'card_cvv_required' => 'setCardCvvRequired',
        'card_expiration_date_required' => 'setCardExpirationDateRequired',
        'creating_transfer_from_report_enabled' => 'setCreatingTransferFromReportEnabled',
        'convenience_charges_enabled' => 'setConvenienceChargesEnabled',
        'fee_ready_to_settle_upon' => 'setFeeReadyToSettleUpon',
        'gross_settlement_enabled' => 'setGrossSettlementEnabled',
        'identity' => 'setIdentity',
        'level_two_level_three_data_enabled' => 'setLevelTwoLevelThreeDataEnabled',
        'mcc' => 'setMcc',
        'merchant_name' => 'setMerchantName',
        'merchant_profile' => 'setMerchantProfile',
        'mid' => 'setMid',
        'onboarding_state' => 'setOnboardingState',
        'processor' => 'setProcessor',
        'processor_details' => 'setProcessorDetails',
        'processing_enabled' => 'setProcessingEnabled',
        'ready_to_settle_upon' => 'setReadyToSettleUpon',
        'rent_surcharges_enabled' => 'setRentSurchargesEnabled',
        'settlement_enabled' => 'setSettlementEnabled',
        'settlement_funding_identifier' => 'setSettlementFundingIdentifier',
        'tags' => 'setTags',
        'verification' => 'setVerification',
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
        'application' => 'getApplication',
        'card_cvv_required' => 'getCardCvvRequired',
        'card_expiration_date_required' => 'getCardExpirationDateRequired',
        'creating_transfer_from_report_enabled' => 'getCreatingTransferFromReportEnabled',
        'convenience_charges_enabled' => 'getConvenienceChargesEnabled',
        'fee_ready_to_settle_upon' => 'getFeeReadyToSettleUpon',
        'gross_settlement_enabled' => 'getGrossSettlementEnabled',
        'identity' => 'getIdentity',
        'level_two_level_three_data_enabled' => 'getLevelTwoLevelThreeDataEnabled',
        'mcc' => 'getMcc',
        'merchant_name' => 'getMerchantName',
        'merchant_profile' => 'getMerchantProfile',
        'mid' => 'getMid',
        'onboarding_state' => 'getOnboardingState',
        'processor' => 'getProcessor',
        'processor_details' => 'getProcessorDetails',
        'processing_enabled' => 'getProcessingEnabled',
        'ready_to_settle_upon' => 'getReadyToSettleUpon',
        'rent_surcharges_enabled' => 'getRentSurchargesEnabled',
        'settlement_enabled' => 'getSettlementEnabled',
        'settlement_funding_identifier' => 'getSettlementFundingIdentifier',
        'tags' => 'getTags',
        'verification' => 'getVerification',
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

    public const ONBOARDING_STATE_PROVISIONING = 'PROVISIONING';
    public const ONBOARDING_STATE_APPROVED = 'APPROVED';
    public const ONBOARDING_STATE_REJECTED = 'REJECTED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOnboardingStateAllowableValues()
    {
        return [
            self::ONBOARDING_STATE_PROVISIONING,
            self::ONBOARDING_STATE_APPROVED,
            self::ONBOARDING_STATE_REJECTED,
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
        $this->container['application'] = $data['application'] ?? null;
        $this->container['card_cvv_required'] = $data['card_cvv_required'] ?? null;
        $this->container['card_expiration_date_required'] = $data['card_expiration_date_required'] ?? null;
        $this->container['creating_transfer_from_report_enabled'] = $data['creating_transfer_from_report_enabled'] ?? null;
        $this->container['convenience_charges_enabled'] = $data['convenience_charges_enabled'] ?? null;
        $this->container['fee_ready_to_settle_upon'] = $data['fee_ready_to_settle_upon'] ?? null;
        $this->container['gross_settlement_enabled'] = $data['gross_settlement_enabled'] ?? null;
        $this->container['identity'] = $data['identity'] ?? null;
        $this->container['level_two_level_three_data_enabled'] = $data['level_two_level_three_data_enabled'] ?? null;
        $this->container['mcc'] = $data['mcc'] ?? null;
        $this->container['merchant_name'] = $data['merchant_name'] ?? null;
        $this->container['merchant_profile'] = $data['merchant_profile'] ?? null;
        $this->container['mid'] = $data['mid'] ?? null;
        $this->container['onboarding_state'] = $data['onboarding_state'] ?? null;
        $this->container['processor'] = $data['processor'] ?? null;
        $this->container['processor_details'] = $data['processor_details'] ?? null;
        $this->container['processing_enabled'] = $data['processing_enabled'] ?? null;
        $this->container['ready_to_settle_upon'] = $data['ready_to_settle_upon'] ?? null;
        $this->container['rent_surcharges_enabled'] = $data['rent_surcharges_enabled'] ?? null;
        $this->container['settlement_enabled'] = $data['settlement_enabled'] ?? null;
        $this->container['settlement_funding_identifier'] = $data['settlement_funding_identifier'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['verification'] = $data['verification'] ?? null;
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

        $allowedValues = $this->getOnboardingStateAllowableValues();
        if (!is_null($this->container['onboarding_state']) && !in_array($this->container['onboarding_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'onboarding_state', must be one of '%s'",
                $this->container['onboarding_state'],
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
     * @param string|null $id The ID of the resource.
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
     * @param string|null $application ID of the `Application` the `Merchant` was created under.
     *
     * @return self
     */
    public function setApplication($application, $deserialize = false)
    {
        $this->container['application'] = $application;

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
     * @param string|null $identity The ID of the `Identity` resource associated with the `Merchant`.
     *
     * @return self
     */
    public function setIdentity($identity, $deserialize = false)
    {
        $this->container['identity'] = $identity;

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
     * @param string|null $mcc The Merchant Category Code ([MCC](http://www.dm.usda.gov/procurement/card/card_x/mcc.pdf)) that this merchant will be classified under.
     *
     * @return self
     */
    public function setMcc($mcc, $deserialize = false)
    {
        $this->container['mcc'] = $mcc;

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
     * Gets merchant_profile
     *
     * @return string|null
     */
    public function getMerchantProfile()
    {
        return $this->container['merchant_profile'];
    }

    /**
     * Sets merchant_profile
     *
     * @param string|null $merchant_profile Details if a merchant's info was submitted to third-party processors for provisioning.
     *
     * @return self
     */
    public function setMerchantProfile($merchant_profile, $deserialize = false)
    {
        $this->container['merchant_profile'] = $merchant_profile;

        return $this;
    }

    /**
     * Gets mid
     *
     * @return string|null
     */
    public function getMid()
    {
        return $this->container['mid'];
    }

    /**
     * Sets mid
     *
     * @param string|null $mid MID of the `Merchant`.
     *
     * @return self
     */
    public function setMid($mid, $deserialize = false)
    {
        $this->container['mid'] = $mid;

        return $this;
    }

    /**
     * Gets onboarding_state
     *
     * @return string|null
     */
    public function getOnboardingState()
    {
        return $this->container['onboarding_state'];
    }

    /**
     * Sets onboarding_state
     *
     * @param string|null $onboarding_state Details the state of the `Merchant's` onboarding.
     *
     * @return self
     */
    public function setOnboardingState($onboarding_state, $deserialize = false)
    {
        $allowedValues = $this->getOnboardingStateAllowableValues();
        if (!is_null($onboarding_state) && !in_array($onboarding_state, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'onboarding_state', must be one of '%s'",
                    $onboarding_state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['onboarding_state'] = $onboarding_state;

        return $this;
    }

    /**
     * Gets processor
     *
     * @return string|null
     */
    public function getProcessor()
    {
        return $this->container['processor'];
    }

    /**
     * Sets processor
     *
     * @param string|null $processor Name of the transaction processor.
     *
     * @return self
     */
    public function setProcessor($processor, $deserialize = false)
    {
        $this->container['processor'] = $processor;

        return $this;
    }

    /**
     * Gets processor_details
     *
     * @return \Finix\Model\MerchantProcessorDetails|null
     */
    public function getProcessorDetails()
    {
        return $this->container['processor_details'];
    }

    /**
     * Sets processor_details
     *
     * @param \Finix\Model\MerchantProcessorDetails|null $processor_details processor_details
     *
     * @return self
     */
    public function setProcessorDetails($processor_details, $deserialize = false)
    {
        $this->container['processor_details'] = $processor_details;

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
     * @param string|null $ready_to_settle_upon Details how `Authorizations` captured by the `Merchant` are settled.
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
     * Gets verification
     *
     * @return string|null
     */
    public function getVerification()
    {
        return $this->container['verification'];
    }

    /**
     * Sets verification
     *
     * @param string|null $verification ID of the `Verification` that was submitted to verify the `Merchant`.
     *
     * @return self
     */
    public function setVerification($verification, $deserialize = false)
    {
        $this->container['verification'] = $verification;

        return $this;
    }

    /**
     * Gets _links
     *
     * @return \Finix\Model\MerchantLinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \Finix\Model\MerchantLinks|null $_links _links
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



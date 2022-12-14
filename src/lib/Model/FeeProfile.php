<?php
/**
 * FeeProfile
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
 * FeeProfile Class Doc Comment
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
class FeeProfile implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeeProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'ach_basis_points' => 'int',
        'ach_credit_return_fixed_fee' => 'int',
        'ach_debit_return_fixed_fee' => 'int',
        'ach_fixed_fee' => 'int',
        'american_express_assessment_basis_points' => 'int',
        'american_express_basis_points' => 'int',
        'american_express_charge_interchange' => 'bool',
        'american_express_externally_funded_basis_points' => 'int',
        'american_express_externally_funded_fixed_fee' => 'int',
        'american_express_fixed_fee' => 'int',
        'ancillary_fixed_fee_primary' => 'int',
        'ancillary_fixed_fee_secondary' => 'int',
        'application' => 'string',
        'basis_points' => 'int',
        'card_cross_border_basis_points' => 'int',
        'card_cross_border_fixed_fee' => 'int',
        'charge_interchange' => 'bool',
        'diners_club_basis_points' => 'int',
        'diners_club_charge_interchange' => 'bool',
        'diners_club_fixed_fee' => 'int',
        'discover_assessments_basis_points' => 'int',
        'discover_basis_points' => 'int',
        'discover_charge_interchange' => 'bool',
        'discover_data_usage_fixed_fee' => 'int',
        'discover_externally_funded_basis_points' => 'int',
        'discover_externally_funded_fixed_fee' => 'int',
        'discover_fixed_fee' => 'int',
        'discover_network_authorization_fixed_fee' => 'int',
        'dispute_fixed_fee' => 'int',
        'dispute_inquiry_fixed_fee' => 'int',
        'externally_funded_basis_points' => 'int',
        'externally_funded_fixed_fee' => 'int',
        'fixed_fee' => 'int',
        'jcb_basis_points' => 'int',
        'jcb_charge_interchange' => 'bool',
        'jcb_fixed_fee' => 'int',
        'mastercard_acquirer_fees_basis_points' => 'int',
        'mastercard_assessments_over1k_basis_points' => 'int',
        'mastercard_assessments_under1k_basis_points' => 'int',
        'mastercard_basis_points' => 'int',
        'mastercard_charge_interchange' => 'bool',
        'mastercard_fixed_fee' => 'int',
        'qualified_tiers' => 'object',
        'rounding_mode' => 'string',
        'tags' => 'array<string,string>',
        'visa_acquirer_processing_fixed_fee' => 'int',
        'visa_assessments_basis_points' => 'int',
        'visa_base_ii_credit_voucher_fixed_fee' => 'int',
        'visa_base_ii_system_file_transmission_fixed_fee' => 'int',
        'visa_basis_points' => 'int',
        'visa_charge_interchange' => 'bool',
        'visa_credit_voucher_fixed_fee' => 'int',
        'visa_fixed_fee' => 'int',
        'visa_kilobyte_access_fixed_fee' => 'int',
        '_links' => '\Finix\Model\FeeProfileLinks'
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
        'ach_basis_points' => null,
        'ach_credit_return_fixed_fee' => null,
        'ach_debit_return_fixed_fee' => null,
        'ach_fixed_fee' => null,
        'american_express_assessment_basis_points' => null,
        'american_express_basis_points' => null,
        'american_express_charge_interchange' => null,
        'american_express_externally_funded_basis_points' => null,
        'american_express_externally_funded_fixed_fee' => null,
        'american_express_fixed_fee' => null,
        'ancillary_fixed_fee_primary' => null,
        'ancillary_fixed_fee_secondary' => null,
        'application' => null,
        'basis_points' => null,
        'card_cross_border_basis_points' => null,
        'card_cross_border_fixed_fee' => null,
        'charge_interchange' => null,
        'diners_club_basis_points' => null,
        'diners_club_charge_interchange' => null,
        'diners_club_fixed_fee' => null,
        'discover_assessments_basis_points' => null,
        'discover_basis_points' => null,
        'discover_charge_interchange' => null,
        'discover_data_usage_fixed_fee' => null,
        'discover_externally_funded_basis_points' => null,
        'discover_externally_funded_fixed_fee' => null,
        'discover_fixed_fee' => null,
        'discover_network_authorization_fixed_fee' => null,
        'dispute_fixed_fee' => null,
        'dispute_inquiry_fixed_fee' => null,
        'externally_funded_basis_points' => null,
        'externally_funded_fixed_fee' => null,
        'fixed_fee' => null,
        'jcb_basis_points' => null,
        'jcb_charge_interchange' => null,
        'jcb_fixed_fee' => null,
        'mastercard_acquirer_fees_basis_points' => null,
        'mastercard_assessments_over1k_basis_points' => null,
        'mastercard_assessments_under1k_basis_points' => null,
        'mastercard_basis_points' => null,
        'mastercard_charge_interchange' => null,
        'mastercard_fixed_fee' => null,
        'qualified_tiers' => null,
        'rounding_mode' => null,
        'tags' => null,
        'visa_acquirer_processing_fixed_fee' => null,
        'visa_assessments_basis_points' => null,
        'visa_base_ii_credit_voucher_fixed_fee' => null,
        'visa_base_ii_system_file_transmission_fixed_fee' => null,
        'visa_basis_points' => null,
        'visa_charge_interchange' => null,
        'visa_credit_voucher_fixed_fee' => null,
        'visa_fixed_fee' => null,
        'visa_kilobyte_access_fixed_fee' => null,
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
        'ach_basis_points' => 'ach_basis_points',
        'ach_credit_return_fixed_fee' => 'ach_credit_return_fixed_fee',
        'ach_debit_return_fixed_fee' => 'ach_debit_return_fixed_fee',
        'ach_fixed_fee' => 'ach_fixed_fee',
        'american_express_assessment_basis_points' => 'american_express_assessment_basis_points',
        'american_express_basis_points' => 'american_express_basis_points',
        'american_express_charge_interchange' => 'american_express_charge_interchange',
        'american_express_externally_funded_basis_points' => 'american_express_externally_funded_basis_points',
        'american_express_externally_funded_fixed_fee' => 'american_express_externally_funded_fixed_fee',
        'american_express_fixed_fee' => 'american_express_fixed_fee',
        'ancillary_fixed_fee_primary' => 'ancillary_fixed_fee_primary',
        'ancillary_fixed_fee_secondary' => 'ancillary_fixed_fee_secondary',
        'application' => 'application',
        'basis_points' => 'basis_points',
        'card_cross_border_basis_points' => 'card_cross_border_basis_points',
        'card_cross_border_fixed_fee' => 'card_cross_border_fixed_fee',
        'charge_interchange' => 'charge_interchange',
        'diners_club_basis_points' => 'diners_club_basis_points',
        'diners_club_charge_interchange' => 'diners_club_charge_interchange',
        'diners_club_fixed_fee' => 'diners_club_fixed_fee',
        'discover_assessments_basis_points' => 'discover_assessments_basis_points',
        'discover_basis_points' => 'discover_basis_points',
        'discover_charge_interchange' => 'discover_charge_interchange',
        'discover_data_usage_fixed_fee' => 'discover_data_usage_fixed_fee',
        'discover_externally_funded_basis_points' => 'discover_externally_funded_basis_points',
        'discover_externally_funded_fixed_fee' => 'discover_externally_funded_fixed_fee',
        'discover_fixed_fee' => 'discover_fixed_fee',
        'discover_network_authorization_fixed_fee' => 'discover_network_authorization_fixed_fee',
        'dispute_fixed_fee' => 'dispute_fixed_fee',
        'dispute_inquiry_fixed_fee' => 'dispute_inquiry_fixed_fee',
        'externally_funded_basis_points' => 'externally_funded_basis_points',
        'externally_funded_fixed_fee' => 'externally_funded_fixed_fee',
        'fixed_fee' => 'fixed_fee',
        'jcb_basis_points' => 'jcb_basis_points',
        'jcb_charge_interchange' => 'jcb_charge_interchange',
        'jcb_fixed_fee' => 'jcb_fixed_fee',
        'mastercard_acquirer_fees_basis_points' => 'mastercard_acquirer_fees_basis_points',
        'mastercard_assessments_over1k_basis_points' => 'mastercard_assessments_over1k_basis_points',
        'mastercard_assessments_under1k_basis_points' => 'mastercard_assessments_under1k_basis_points',
        'mastercard_basis_points' => 'mastercard_basis_points',
        'mastercard_charge_interchange' => 'mastercard_charge_interchange',
        'mastercard_fixed_fee' => 'mastercard_fixed_fee',
        'qualified_tiers' => 'qualified_tiers',
        'rounding_mode' => 'rounding_mode',
        'tags' => 'tags',
        'visa_acquirer_processing_fixed_fee' => 'visa_acquirer_processing_fixed_fee',
        'visa_assessments_basis_points' => 'visa_assessments_basis_points',
        'visa_base_ii_credit_voucher_fixed_fee' => 'visa_base_II_credit_voucher_fixed_fee',
        'visa_base_ii_system_file_transmission_fixed_fee' => 'visa_base_II_system_file_transmission_fixed_fee',
        'visa_basis_points' => 'visa_basis_points',
        'visa_charge_interchange' => 'visa_charge_interchange',
        'visa_credit_voucher_fixed_fee' => 'visa_credit_voucher_fixed_fee',
        'visa_fixed_fee' => 'visa_fixed_fee',
        'visa_kilobyte_access_fixed_fee' => 'visa_kilobyte_access_fixed_fee',
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
        'ach_basis_points' => 'setAchBasisPoints',
        'ach_credit_return_fixed_fee' => 'setAchCreditReturnFixedFee',
        'ach_debit_return_fixed_fee' => 'setAchDebitReturnFixedFee',
        'ach_fixed_fee' => 'setAchFixedFee',
        'american_express_assessment_basis_points' => 'setAmericanExpressAssessmentBasisPoints',
        'american_express_basis_points' => 'setAmericanExpressBasisPoints',
        'american_express_charge_interchange' => 'setAmericanExpressChargeInterchange',
        'american_express_externally_funded_basis_points' => 'setAmericanExpressExternallyFundedBasisPoints',
        'american_express_externally_funded_fixed_fee' => 'setAmericanExpressExternallyFundedFixedFee',
        'american_express_fixed_fee' => 'setAmericanExpressFixedFee',
        'ancillary_fixed_fee_primary' => 'setAncillaryFixedFeePrimary',
        'ancillary_fixed_fee_secondary' => 'setAncillaryFixedFeeSecondary',
        'application' => 'setApplication',
        'basis_points' => 'setBasisPoints',
        'card_cross_border_basis_points' => 'setCardCrossBorderBasisPoints',
        'card_cross_border_fixed_fee' => 'setCardCrossBorderFixedFee',
        'charge_interchange' => 'setChargeInterchange',
        'diners_club_basis_points' => 'setDinersClubBasisPoints',
        'diners_club_charge_interchange' => 'setDinersClubChargeInterchange',
        'diners_club_fixed_fee' => 'setDinersClubFixedFee',
        'discover_assessments_basis_points' => 'setDiscoverAssessmentsBasisPoints',
        'discover_basis_points' => 'setDiscoverBasisPoints',
        'discover_charge_interchange' => 'setDiscoverChargeInterchange',
        'discover_data_usage_fixed_fee' => 'setDiscoverDataUsageFixedFee',
        'discover_externally_funded_basis_points' => 'setDiscoverExternallyFundedBasisPoints',
        'discover_externally_funded_fixed_fee' => 'setDiscoverExternallyFundedFixedFee',
        'discover_fixed_fee' => 'setDiscoverFixedFee',
        'discover_network_authorization_fixed_fee' => 'setDiscoverNetworkAuthorizationFixedFee',
        'dispute_fixed_fee' => 'setDisputeFixedFee',
        'dispute_inquiry_fixed_fee' => 'setDisputeInquiryFixedFee',
        'externally_funded_basis_points' => 'setExternallyFundedBasisPoints',
        'externally_funded_fixed_fee' => 'setExternallyFundedFixedFee',
        'fixed_fee' => 'setFixedFee',
        'jcb_basis_points' => 'setJcbBasisPoints',
        'jcb_charge_interchange' => 'setJcbChargeInterchange',
        'jcb_fixed_fee' => 'setJcbFixedFee',
        'mastercard_acquirer_fees_basis_points' => 'setMastercardAcquirerFeesBasisPoints',
        'mastercard_assessments_over1k_basis_points' => 'setMastercardAssessmentsOver1kBasisPoints',
        'mastercard_assessments_under1k_basis_points' => 'setMastercardAssessmentsUnder1kBasisPoints',
        'mastercard_basis_points' => 'setMastercardBasisPoints',
        'mastercard_charge_interchange' => 'setMastercardChargeInterchange',
        'mastercard_fixed_fee' => 'setMastercardFixedFee',
        'qualified_tiers' => 'setQualifiedTiers',
        'rounding_mode' => 'setRoundingMode',
        'tags' => 'setTags',
        'visa_acquirer_processing_fixed_fee' => 'setVisaAcquirerProcessingFixedFee',
        'visa_assessments_basis_points' => 'setVisaAssessmentsBasisPoints',
        'visa_base_ii_credit_voucher_fixed_fee' => 'setVisaBaseIiCreditVoucherFixedFee',
        'visa_base_ii_system_file_transmission_fixed_fee' => 'setVisaBaseIiSystemFileTransmissionFixedFee',
        'visa_basis_points' => 'setVisaBasisPoints',
        'visa_charge_interchange' => 'setVisaChargeInterchange',
        'visa_credit_voucher_fixed_fee' => 'setVisaCreditVoucherFixedFee',
        'visa_fixed_fee' => 'setVisaFixedFee',
        'visa_kilobyte_access_fixed_fee' => 'setVisaKilobyteAccessFixedFee',
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
        'ach_basis_points' => 'getAchBasisPoints',
        'ach_credit_return_fixed_fee' => 'getAchCreditReturnFixedFee',
        'ach_debit_return_fixed_fee' => 'getAchDebitReturnFixedFee',
        'ach_fixed_fee' => 'getAchFixedFee',
        'american_express_assessment_basis_points' => 'getAmericanExpressAssessmentBasisPoints',
        'american_express_basis_points' => 'getAmericanExpressBasisPoints',
        'american_express_charge_interchange' => 'getAmericanExpressChargeInterchange',
        'american_express_externally_funded_basis_points' => 'getAmericanExpressExternallyFundedBasisPoints',
        'american_express_externally_funded_fixed_fee' => 'getAmericanExpressExternallyFundedFixedFee',
        'american_express_fixed_fee' => 'getAmericanExpressFixedFee',
        'ancillary_fixed_fee_primary' => 'getAncillaryFixedFeePrimary',
        'ancillary_fixed_fee_secondary' => 'getAncillaryFixedFeeSecondary',
        'application' => 'getApplication',
        'basis_points' => 'getBasisPoints',
        'card_cross_border_basis_points' => 'getCardCrossBorderBasisPoints',
        'card_cross_border_fixed_fee' => 'getCardCrossBorderFixedFee',
        'charge_interchange' => 'getChargeInterchange',
        'diners_club_basis_points' => 'getDinersClubBasisPoints',
        'diners_club_charge_interchange' => 'getDinersClubChargeInterchange',
        'diners_club_fixed_fee' => 'getDinersClubFixedFee',
        'discover_assessments_basis_points' => 'getDiscoverAssessmentsBasisPoints',
        'discover_basis_points' => 'getDiscoverBasisPoints',
        'discover_charge_interchange' => 'getDiscoverChargeInterchange',
        'discover_data_usage_fixed_fee' => 'getDiscoverDataUsageFixedFee',
        'discover_externally_funded_basis_points' => 'getDiscoverExternallyFundedBasisPoints',
        'discover_externally_funded_fixed_fee' => 'getDiscoverExternallyFundedFixedFee',
        'discover_fixed_fee' => 'getDiscoverFixedFee',
        'discover_network_authorization_fixed_fee' => 'getDiscoverNetworkAuthorizationFixedFee',
        'dispute_fixed_fee' => 'getDisputeFixedFee',
        'dispute_inquiry_fixed_fee' => 'getDisputeInquiryFixedFee',
        'externally_funded_basis_points' => 'getExternallyFundedBasisPoints',
        'externally_funded_fixed_fee' => 'getExternallyFundedFixedFee',
        'fixed_fee' => 'getFixedFee',
        'jcb_basis_points' => 'getJcbBasisPoints',
        'jcb_charge_interchange' => 'getJcbChargeInterchange',
        'jcb_fixed_fee' => 'getJcbFixedFee',
        'mastercard_acquirer_fees_basis_points' => 'getMastercardAcquirerFeesBasisPoints',
        'mastercard_assessments_over1k_basis_points' => 'getMastercardAssessmentsOver1kBasisPoints',
        'mastercard_assessments_under1k_basis_points' => 'getMastercardAssessmentsUnder1kBasisPoints',
        'mastercard_basis_points' => 'getMastercardBasisPoints',
        'mastercard_charge_interchange' => 'getMastercardChargeInterchange',
        'mastercard_fixed_fee' => 'getMastercardFixedFee',
        'qualified_tiers' => 'getQualifiedTiers',
        'rounding_mode' => 'getRoundingMode',
        'tags' => 'getTags',
        'visa_acquirer_processing_fixed_fee' => 'getVisaAcquirerProcessingFixedFee',
        'visa_assessments_basis_points' => 'getVisaAssessmentsBasisPoints',
        'visa_base_ii_credit_voucher_fixed_fee' => 'getVisaBaseIiCreditVoucherFixedFee',
        'visa_base_ii_system_file_transmission_fixed_fee' => 'getVisaBaseIiSystemFileTransmissionFixedFee',
        'visa_basis_points' => 'getVisaBasisPoints',
        'visa_charge_interchange' => 'getVisaChargeInterchange',
        'visa_credit_voucher_fixed_fee' => 'getVisaCreditVoucherFixedFee',
        'visa_fixed_fee' => 'getVisaFixedFee',
        'visa_kilobyte_access_fixed_fee' => 'getVisaKilobyteAccessFixedFee',
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

    public const ROUNDING_MODE_TRANSACTION = 'TRANSACTION';
    public const ROUNDING_MODE_AGGREGATE = 'AGGREGATE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoundingModeAllowableValues()
    {
        return [
            self::ROUNDING_MODE_TRANSACTION,
            self::ROUNDING_MODE_AGGREGATE,
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
        $this->container['ach_basis_points'] = $data['ach_basis_points'] ?? null;
        $this->container['ach_credit_return_fixed_fee'] = $data['ach_credit_return_fixed_fee'] ?? null;
        $this->container['ach_debit_return_fixed_fee'] = $data['ach_debit_return_fixed_fee'] ?? null;
        $this->container['ach_fixed_fee'] = $data['ach_fixed_fee'] ?? null;
        $this->container['american_express_assessment_basis_points'] = $data['american_express_assessment_basis_points'] ?? null;
        $this->container['american_express_basis_points'] = $data['american_express_basis_points'] ?? null;
        $this->container['american_express_charge_interchange'] = $data['american_express_charge_interchange'] ?? null;
        $this->container['american_express_externally_funded_basis_points'] = $data['american_express_externally_funded_basis_points'] ?? null;
        $this->container['american_express_externally_funded_fixed_fee'] = $data['american_express_externally_funded_fixed_fee'] ?? null;
        $this->container['american_express_fixed_fee'] = $data['american_express_fixed_fee'] ?? null;
        $this->container['ancillary_fixed_fee_primary'] = $data['ancillary_fixed_fee_primary'] ?? null;
        $this->container['ancillary_fixed_fee_secondary'] = $data['ancillary_fixed_fee_secondary'] ?? null;
        $this->container['application'] = $data['application'] ?? null;
        $this->container['basis_points'] = $data['basis_points'] ?? null;
        $this->container['card_cross_border_basis_points'] = $data['card_cross_border_basis_points'] ?? null;
        $this->container['card_cross_border_fixed_fee'] = $data['card_cross_border_fixed_fee'] ?? null;
        $this->container['charge_interchange'] = $data['charge_interchange'] ?? null;
        $this->container['diners_club_basis_points'] = $data['diners_club_basis_points'] ?? null;
        $this->container['diners_club_charge_interchange'] = $data['diners_club_charge_interchange'] ?? null;
        $this->container['diners_club_fixed_fee'] = $data['diners_club_fixed_fee'] ?? null;
        $this->container['discover_assessments_basis_points'] = $data['discover_assessments_basis_points'] ?? null;
        $this->container['discover_basis_points'] = $data['discover_basis_points'] ?? null;
        $this->container['discover_charge_interchange'] = $data['discover_charge_interchange'] ?? null;
        $this->container['discover_data_usage_fixed_fee'] = $data['discover_data_usage_fixed_fee'] ?? null;
        $this->container['discover_externally_funded_basis_points'] = $data['discover_externally_funded_basis_points'] ?? null;
        $this->container['discover_externally_funded_fixed_fee'] = $data['discover_externally_funded_fixed_fee'] ?? null;
        $this->container['discover_fixed_fee'] = $data['discover_fixed_fee'] ?? null;
        $this->container['discover_network_authorization_fixed_fee'] = $data['discover_network_authorization_fixed_fee'] ?? null;
        $this->container['dispute_fixed_fee'] = $data['dispute_fixed_fee'] ?? null;
        $this->container['dispute_inquiry_fixed_fee'] = $data['dispute_inquiry_fixed_fee'] ?? null;
        $this->container['externally_funded_basis_points'] = $data['externally_funded_basis_points'] ?? null;
        $this->container['externally_funded_fixed_fee'] = $data['externally_funded_fixed_fee'] ?? null;
        $this->container['fixed_fee'] = $data['fixed_fee'] ?? null;
        $this->container['jcb_basis_points'] = $data['jcb_basis_points'] ?? null;
        $this->container['jcb_charge_interchange'] = $data['jcb_charge_interchange'] ?? null;
        $this->container['jcb_fixed_fee'] = $data['jcb_fixed_fee'] ?? null;
        $this->container['mastercard_acquirer_fees_basis_points'] = $data['mastercard_acquirer_fees_basis_points'] ?? null;
        $this->container['mastercard_assessments_over1k_basis_points'] = $data['mastercard_assessments_over1k_basis_points'] ?? null;
        $this->container['mastercard_assessments_under1k_basis_points'] = $data['mastercard_assessments_under1k_basis_points'] ?? null;
        $this->container['mastercard_basis_points'] = $data['mastercard_basis_points'] ?? null;
        $this->container['mastercard_charge_interchange'] = $data['mastercard_charge_interchange'] ?? null;
        $this->container['mastercard_fixed_fee'] = $data['mastercard_fixed_fee'] ?? null;
        $this->container['qualified_tiers'] = $data['qualified_tiers'] ?? null;
        $this->container['rounding_mode'] = $data['rounding_mode'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['visa_acquirer_processing_fixed_fee'] = $data['visa_acquirer_processing_fixed_fee'] ?? null;
        $this->container['visa_assessments_basis_points'] = $data['visa_assessments_basis_points'] ?? null;
        $this->container['visa_base_ii_credit_voucher_fixed_fee'] = $data['visa_base_ii_credit_voucher_fixed_fee'] ?? null;
        $this->container['visa_base_ii_system_file_transmission_fixed_fee'] = $data['visa_base_ii_system_file_transmission_fixed_fee'] ?? null;
        $this->container['visa_basis_points'] = $data['visa_basis_points'] ?? null;
        $this->container['visa_charge_interchange'] = $data['visa_charge_interchange'] ?? null;
        $this->container['visa_credit_voucher_fixed_fee'] = $data['visa_credit_voucher_fixed_fee'] ?? null;
        $this->container['visa_fixed_fee'] = $data['visa_fixed_fee'] ?? null;
        $this->container['visa_kilobyte_access_fixed_fee'] = $data['visa_kilobyte_access_fixed_fee'] ?? null;
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

        $allowedValues = $this->getRoundingModeAllowableValues();
        if (!is_null($this->container['rounding_mode']) && !in_array($this->container['rounding_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'rounding_mode', must be one of '%s'",
                $this->container['rounding_mode'],
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
     * @param string|null $id The ID of the `Fee Profile` resource.
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
     * Gets ach_basis_points
     *
     * @return int|null
     */
    public function getAchBasisPoints()
    {
        return $this->container['ach_basis_points'];
    }

    /**
     * Sets ach_basis_points
     *
     * @param int|null $ach_basis_points Percentage-based fee incurred against the full amount of an eCheck (also called ACH payments). Calculated as one hundredth of one percent (1 basis point = .0001 or .01%)
     *
     * @return self
     */
    public function setAchBasisPoints($ach_basis_points, $deserialize = false)
    {
        $this->container['ach_basis_points'] = $ach_basis_points;

        return $this;
    }

    /**
     * Gets ach_credit_return_fixed_fee
     *
     * @return int|null
     */
    public function getAchCreditReturnFixedFee()
    {
        return $this->container['ach_credit_return_fixed_fee'];
    }

    /**
     * Sets ach_credit_return_fixed_fee
     *
     * @param int|null $ach_credit_return_fixed_fee A fixed amount in cents that will be charged to the seller for processing an echeck (also called ACH payments) credit return.
     *
     * @return self
     */
    public function setAchCreditReturnFixedFee($ach_credit_return_fixed_fee, $deserialize = false)
    {
        $this->container['ach_credit_return_fixed_fee'] = $ach_credit_return_fixed_fee;

        return $this;
    }

    /**
     * Gets ach_debit_return_fixed_fee
     *
     * @return int|null
     */
    public function getAchDebitReturnFixedFee()
    {
        return $this->container['ach_debit_return_fixed_fee'];
    }

    /**
     * Sets ach_debit_return_fixed_fee
     *
     * @param int|null $ach_debit_return_fixed_fee A fixed amount in cents that will be charged to the seller for processing an echeck (also called ACH payment) debit return.
     *
     * @return self
     */
    public function setAchDebitReturnFixedFee($ach_debit_return_fixed_fee, $deserialize = false)
    {
        $this->container['ach_debit_return_fixed_fee'] = $ach_debit_return_fixed_fee;

        return $this;
    }

    /**
     * Gets ach_fixed_fee
     *
     * @return int|null
     */
    public function getAchFixedFee()
    {
        return $this->container['ach_fixed_fee'];
    }

    /**
     * Sets ach_fixed_fee
     *
     * @param int|null $ach_fixed_fee Fee in cents incurred for each individual `Transfer`.
     *
     * @return self
     */
    public function setAchFixedFee($ach_fixed_fee, $deserialize = false)
    {
        $this->container['ach_fixed_fee'] = $ach_fixed_fee;

        return $this;
    }

    /**
     * Gets american_express_assessment_basis_points
     *
     * @return int|null
     */
    public function getAmericanExpressAssessmentBasisPoints()
    {
        return $this->container['american_express_assessment_basis_points'];
    }

    /**
     * Sets american_express_assessment_basis_points
     *
     * @param int|null $american_express_assessment_basis_points Applies to gross American Express card volume.
     *
     * @return self
     */
    public function setAmericanExpressAssessmentBasisPoints($american_express_assessment_basis_points, $deserialize = false)
    {
        $this->container['american_express_assessment_basis_points'] = $american_express_assessment_basis_points;

        return $this;
    }

    /**
     * Gets american_express_basis_points
     *
     * @return int|null
     */
    public function getAmericanExpressBasisPoints()
    {
        return $this->container['american_express_basis_points'];
    }

    /**
     * Sets american_express_basis_points
     *
     * @param int|null $american_express_basis_points Percentage-based fee incurred against the full amount of each American Express `Transfer`. Calculated as one hundredth of one percent (1 basis point = .0001 or .01%)
     *
     * @return self
     */
    public function setAmericanExpressBasisPoints($american_express_basis_points, $deserialize = false)
    {
        $this->container['american_express_basis_points'] = $american_express_basis_points;

        return $this;
    }

    /**
     * Gets american_express_charge_interchange
     *
     * @return bool|null
     */
    public function getAmericanExpressChargeInterchange()
    {
        return $this->container['american_express_charge_interchange'];
    }

    /**
     * Sets american_express_charge_interchange
     *
     * @param bool|null $american_express_charge_interchange Set to **True** to incur interchange fees for American Express `Transfers`.
     *
     * @return self
     */
    public function setAmericanExpressChargeInterchange($american_express_charge_interchange, $deserialize = false)
    {
        $this->container['american_express_charge_interchange'] = $american_express_charge_interchange;

        return $this;
    }

    /**
     * Gets american_express_externally_funded_basis_points
     *
     * @return int|null
     */
    public function getAmericanExpressExternallyFundedBasisPoints()
    {
        return $this->container['american_express_externally_funded_basis_points'];
    }

    /**
     * Sets american_express_externally_funded_basis_points
     *
     * @param int|null $american_express_externally_funded_basis_points Percentage-based fee incurred against the full amount of each American Express externally funded `Transfer`. Calculated as one hundredth of one percent (1 basis point = .0001 or .01%)
     *
     * @return self
     */
    public function setAmericanExpressExternallyFundedBasisPoints($american_express_externally_funded_basis_points, $deserialize = false)
    {
        $this->container['american_express_externally_funded_basis_points'] = $american_express_externally_funded_basis_points;

        return $this;
    }

    /**
     * Gets american_express_externally_funded_fixed_fee
     *
     * @return int|null
     */
    public function getAmericanExpressExternallyFundedFixedFee()
    {
        return $this->container['american_express_externally_funded_fixed_fee'];
    }

    /**
     * Sets american_express_externally_funded_fixed_fee
     *
     * @param int|null $american_express_externally_funded_fixed_fee Fee in cents incurred for each individual American Express externally funded `Transfer`.
     *
     * @return self
     */
    public function setAmericanExpressExternallyFundedFixedFee($american_express_externally_funded_fixed_fee, $deserialize = false)
    {
        $this->container['american_express_externally_funded_fixed_fee'] = $american_express_externally_funded_fixed_fee;

        return $this;
    }

    /**
     * Gets american_express_fixed_fee
     *
     * @return int|null
     */
    public function getAmericanExpressFixedFee()
    {
        return $this->container['american_express_fixed_fee'];
    }

    /**
     * Sets american_express_fixed_fee
     *
     * @param int|null $american_express_fixed_fee Fee in cents incurred for each individual American Express `Transfer`.
     *
     * @return self
     */
    public function setAmericanExpressFixedFee($american_express_fixed_fee, $deserialize = false)
    {
        $this->container['american_express_fixed_fee'] = $american_express_fixed_fee;

        return $this;
    }

    /**
     * Gets ancillary_fixed_fee_primary
     *
     * @return int|null
     */
    public function getAncillaryFixedFeePrimary()
    {
        return $this->container['ancillary_fixed_fee_primary'];
    }

    /**
     * Sets ancillary_fixed_fee_primary
     *
     * @param int|null $ancillary_fixed_fee_primary An additional fixed fee that can be charged per `Transfer`.
     *
     * @return self
     */
    public function setAncillaryFixedFeePrimary($ancillary_fixed_fee_primary, $deserialize = false)
    {
        $this->container['ancillary_fixed_fee_primary'] = $ancillary_fixed_fee_primary;

        return $this;
    }

    /**
     * Gets ancillary_fixed_fee_secondary
     *
     * @return int|null
     */
    public function getAncillaryFixedFeeSecondary()
    {
        return $this->container['ancillary_fixed_fee_secondary'];
    }

    /**
     * Sets ancillary_fixed_fee_secondary
     *
     * @param int|null $ancillary_fixed_fee_secondary An additional fixed fee that can be charged per `Transfer` if `ancillary_fixed_fee_primary` is included.
     *
     * @return self
     */
    public function setAncillaryFixedFeeSecondary($ancillary_fixed_fee_secondary, $deserialize = false)
    {
        $this->container['ancillary_fixed_fee_secondary'] = $ancillary_fixed_fee_secondary;

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
     * @param string|null $application The ID of the `Application` associated with the  `Fee Profile`.
     *
     * @return self
     */
    public function setApplication($application, $deserialize = false)
    {
        $this->container['application'] = $application;

        return $this;
    }

    /**
     * Gets basis_points
     *
     * @return int|null
     */
    public function getBasisPoints()
    {
        return $this->container['basis_points'];
    }

    /**
     * Sets basis_points
     *
     * @param int|null $basis_points Percentage-based fee incurred against the full amount of each card-based `Transfer`. Calculated as one hundredth of one percent (1 basis point = .0001 or .01%)
     *
     * @return self
     */
    public function setBasisPoints($basis_points, $deserialize = false)
    {
        $this->container['basis_points'] = $basis_points;

        return $this;
    }

    /**
     * Gets card_cross_border_basis_points
     *
     * @return int|null
     */
    public function getCardCrossBorderBasisPoints()
    {
        return $this->container['card_cross_border_basis_points'];
    }

    /**
     * Sets card_cross_border_basis_points
     *
     * @param int|null $card_cross_border_basis_points Percentage-based fee charged against the full amount of every `Transfer` that includes non-US cards. Calculated as one hundredth of one percent (1 basis point = .0001 or .01%).
     *
     * @return self
     */
    public function setCardCrossBorderBasisPoints($card_cross_border_basis_points, $deserialize = false)
    {
        $this->container['card_cross_border_basis_points'] = $card_cross_border_basis_points;

        return $this;
    }

    /**
     * Gets card_cross_border_fixed_fee
     *
     * @return int|null
     */
    public function getCardCrossBorderFixedFee()
    {
        return $this->container['card_cross_border_fixed_fee'];
    }

    /**
     * Sets card_cross_border_fixed_fee
     *
     * @param int|null $card_cross_border_fixed_fee Fee in cents charged against every `Transfer` that includes non-US cards.
     *
     * @return self
     */
    public function setCardCrossBorderFixedFee($card_cross_border_fixed_fee, $deserialize = false)
    {
        $this->container['card_cross_border_fixed_fee'] = $card_cross_border_fixed_fee;

        return $this;
    }

    /**
     * Gets charge_interchange
     *
     * @return bool|null
     */
    public function getChargeInterchange()
    {
        return $this->container['charge_interchange'];
    }

    /**
     * Sets charge_interchange
     *
     * @param bool|null $charge_interchange Set to **True** to incur interchange fees for card-based `Transfers`.
     *
     * @return self
     */
    public function setChargeInterchange($charge_interchange, $deserialize = false)
    {
        $this->container['charge_interchange'] = $charge_interchange;

        return $this;
    }

    /**
     * Gets diners_club_basis_points
     *
     * @return int|null
     */
    public function getDinersClubBasisPoints()
    {
        return $this->container['diners_club_basis_points'];
    }

    /**
     * Sets diners_club_basis_points
     *
     * @param int|null $diners_club_basis_points Percentage-based fee incurred against the full amount of each Diners `Transfer`. Calculated as one hundredth of one percent (1 basis point = .0001 or .01%).
     *
     * @return self
     */
    public function setDinersClubBasisPoints($diners_club_basis_points, $deserialize = false)
    {
        $this->container['diners_club_basis_points'] = $diners_club_basis_points;

        return $this;
    }

    /**
     * Gets diners_club_charge_interchange
     *
     * @return bool|null
     */
    public function getDinersClubChargeInterchange()
    {
        return $this->container['diners_club_charge_interchange'];
    }

    /**
     * Sets diners_club_charge_interchange
     *
     * @param bool|null $diners_club_charge_interchange Set to **True** to incur interchange fees for Diners `Transfers`.
     *
     * @return self
     */
    public function setDinersClubChargeInterchange($diners_club_charge_interchange, $deserialize = false)
    {
        $this->container['diners_club_charge_interchange'] = $diners_club_charge_interchange;

        return $this;
    }

    /**
     * Gets diners_club_fixed_fee
     *
     * @return int|null
     */
    public function getDinersClubFixedFee()
    {
        return $this->container['diners_club_fixed_fee'];
    }

    /**
     * Sets diners_club_fixed_fee
     *
     * @param int|null $diners_club_fixed_fee Fee in cents incurred for each individual Diners `Transfer`.
     *
     * @return self
     */
    public function setDinersClubFixedFee($diners_club_fixed_fee, $deserialize = false)
    {
        $this->container['diners_club_fixed_fee'] = $diners_club_fixed_fee;

        return $this;
    }

    /**
     * Gets discover_assessments_basis_points
     *
     * @return int|null
     */
    public function getDiscoverAssessmentsBasisPoints()
    {
        return $this->container['discover_assessments_basis_points'];
    }

    /**
     * Sets discover_assessments_basis_points
     *
     * @param int|null $discover_assessments_basis_points Assessment applies to gross Discover card transaction volume.
     *
     * @return self
     */
    public function setDiscoverAssessmentsBasisPoints($discover_assessments_basis_points, $deserialize = false)
    {
        $this->container['discover_assessments_basis_points'] = $discover_assessments_basis_points;

        return $this;
    }

    /**
     * Gets discover_basis_points
     *
     * @return int|null
     */
    public function getDiscoverBasisPoints()
    {
        return $this->container['discover_basis_points'];
    }

    /**
     * Sets discover_basis_points
     *
     * @param int|null $discover_basis_points Percentage-based fee incurred against the full amount of each Discover `Transfer`. Calculated as one hundredth of one percent (1 basis point = .0001 or .01%)
     *
     * @return self
     */
    public function setDiscoverBasisPoints($discover_basis_points, $deserialize = false)
    {
        $this->container['discover_basis_points'] = $discover_basis_points;

        return $this;
    }

    /**
     * Gets discover_charge_interchange
     *
     * @return bool|null
     */
    public function getDiscoverChargeInterchange()
    {
        return $this->container['discover_charge_interchange'];
    }

    /**
     * Sets discover_charge_interchange
     *
     * @param bool|null $discover_charge_interchange Set to **True** to incur interchange fees for Discover `Transfers`.
     *
     * @return self
     */
    public function setDiscoverChargeInterchange($discover_charge_interchange, $deserialize = false)
    {
        $this->container['discover_charge_interchange'] = $discover_charge_interchange;

        return $this;
    }

    /**
     * Gets discover_data_usage_fixed_fee
     *
     * @return int|null
     */
    public function getDiscoverDataUsageFixedFee()
    {
        return $this->container['discover_data_usage_fixed_fee'];
    }

    /**
     * Sets discover_data_usage_fixed_fee
     *
     * @param int|null $discover_data_usage_fixed_fee Applies to all U.S.-based `authorization` transactions.
     *
     * @return self
     */
    public function setDiscoverDataUsageFixedFee($discover_data_usage_fixed_fee, $deserialize = false)
    {
        $this->container['discover_data_usage_fixed_fee'] = $discover_data_usage_fixed_fee;

        return $this;
    }

    /**
     * Gets discover_externally_funded_basis_points
     *
     * @return int|null
     */
    public function getDiscoverExternallyFundedBasisPoints()
    {
        return $this->container['discover_externally_funded_basis_points'];
    }

    /**
     * Sets discover_externally_funded_basis_points
     *
     * @param int|null $discover_externally_funded_basis_points Percentage-based fee incurred against the full amount of each Discover externally funded `Transfer`. Calculated as one hundredth of one percent (1 basis point = .0001 or .01%).
     *
     * @return self
     */
    public function setDiscoverExternallyFundedBasisPoints($discover_externally_funded_basis_points, $deserialize = false)
    {
        $this->container['discover_externally_funded_basis_points'] = $discover_externally_funded_basis_points;

        return $this;
    }

    /**
     * Gets discover_externally_funded_fixed_fee
     *
     * @return int|null
     */
    public function getDiscoverExternallyFundedFixedFee()
    {
        return $this->container['discover_externally_funded_fixed_fee'];
    }

    /**
     * Sets discover_externally_funded_fixed_fee
     *
     * @param int|null $discover_externally_funded_fixed_fee Fee in cents incurred for each individual Discover externally funded `Transfer`.
     *
     * @return self
     */
    public function setDiscoverExternallyFundedFixedFee($discover_externally_funded_fixed_fee, $deserialize = false)
    {
        $this->container['discover_externally_funded_fixed_fee'] = $discover_externally_funded_fixed_fee;

        return $this;
    }

    /**
     * Gets discover_fixed_fee
     *
     * @return int|null
     */
    public function getDiscoverFixedFee()
    {
        return $this->container['discover_fixed_fee'];
    }

    /**
     * Sets discover_fixed_fee
     *
     * @param int|null $discover_fixed_fee Fee in cents incurred for each individual Discover `Transfer`.
     *
     * @return self
     */
    public function setDiscoverFixedFee($discover_fixed_fee, $deserialize = false)
    {
        $this->container['discover_fixed_fee'] = $discover_fixed_fee;

        return $this;
    }

    /**
     * Gets discover_network_authorization_fixed_fee
     *
     * @return int|null
     */
    public function getDiscoverNetworkAuthorizationFixedFee()
    {
        return $this->container['discover_network_authorization_fixed_fee'];
    }

    /**
     * Sets discover_network_authorization_fixed_fee
     *
     * @param int|null $discover_network_authorization_fixed_fee This fee applies to all Discover network `authorizations` and replaces the previously assessed Data Transmission.
     *
     * @return self
     */
    public function setDiscoverNetworkAuthorizationFixedFee($discover_network_authorization_fixed_fee, $deserialize = false)
    {
        $this->container['discover_network_authorization_fixed_fee'] = $discover_network_authorization_fixed_fee;

        return $this;
    }

    /**
     * Gets dispute_fixed_fee
     *
     * @return int|null
     */
    public function getDisputeFixedFee()
    {
        return $this->container['dispute_fixed_fee'];
    }

    /**
     * Sets dispute_fixed_fee
     *
     * @param int|null $dispute_fixed_fee Applied when a `dispute` is created or updated to a **PENDING** state.
     *
     * @return self
     */
    public function setDisputeFixedFee($dispute_fixed_fee, $deserialize = false)
    {
        $this->container['dispute_fixed_fee'] = $dispute_fixed_fee;

        return $this;
    }

    /**
     * Gets dispute_inquiry_fixed_fee
     *
     * @return int|null
     */
    public function getDisputeInquiryFixedFee()
    {
        return $this->container['dispute_inquiry_fixed_fee'];
    }

    /**
     * Sets dispute_inquiry_fixed_fee
     *
     * @param int|null $dispute_inquiry_fixed_fee Applied when a `dispute` is created or updated to a **INQUIRY** state.
     *
     * @return self
     */
    public function setDisputeInquiryFixedFee($dispute_inquiry_fixed_fee, $deserialize = false)
    {
        $this->container['dispute_inquiry_fixed_fee'] = $dispute_inquiry_fixed_fee;

        return $this;
    }

    /**
     * Gets externally_funded_basis_points
     *
     * @return int|null
     */
    public function getExternallyFundedBasisPoints()
    {
        return $this->container['externally_funded_basis_points'];
    }

    /**
     * Sets externally_funded_basis_points
     *
     * @param int|null $externally_funded_basis_points Percentage-based fee incurred against the full amount of each `Transfer` that's card-based and externally funded. Calculated as one hundredth of one percent (1 basis point = .0001 or .01%).
     *
     * @return self
     */
    public function setExternallyFundedBasisPoints($externally_funded_basis_points, $deserialize = false)
    {
        $this->container['externally_funded_basis_points'] = $externally_funded_basis_points;

        return $this;
    }

    /**
     * Gets externally_funded_fixed_fee
     *
     * @return int|null
     */
    public function getExternallyFundedFixedFee()
    {
        return $this->container['externally_funded_fixed_fee'];
    }

    /**
     * Sets externally_funded_fixed_fee
     *
     * @param int|null $externally_funded_fixed_fee Fee in cents incurred for each individual `Transfer` that's card-based and externally funded.
     *
     * @return self
     */
    public function setExternallyFundedFixedFee($externally_funded_fixed_fee, $deserialize = false)
    {
        $this->container['externally_funded_fixed_fee'] = $externally_funded_fixed_fee;

        return $this;
    }

    /**
     * Gets fixed_fee
     *
     * @return int|null
     */
    public function getFixedFee()
    {
        return $this->container['fixed_fee'];
    }

    /**
     * Sets fixed_fee
     *
     * @param int|null $fixed_fee Fee in cents incurred for each individual card-based `Transfer`.
     *
     * @return self
     */
    public function setFixedFee($fixed_fee, $deserialize = false)
    {
        $this->container['fixed_fee'] = $fixed_fee;

        return $this;
    }

    /**
     * Gets jcb_basis_points
     *
     * @return int|null
     */
    public function getJcbBasisPoints()
    {
        return $this->container['jcb_basis_points'];
    }

    /**
     * Sets jcb_basis_points
     *
     * @param int|null $jcb_basis_points Percentage-based fee incurred against the full amount of each JCB `Transfer`. Calculated as one hundredth of one percent (1 basis point = .0001 or .01%)
     *
     * @return self
     */
    public function setJcbBasisPoints($jcb_basis_points, $deserialize = false)
    {
        $this->container['jcb_basis_points'] = $jcb_basis_points;

        return $this;
    }

    /**
     * Gets jcb_charge_interchange
     *
     * @return bool|null
     */
    public function getJcbChargeInterchange()
    {
        return $this->container['jcb_charge_interchange'];
    }

    /**
     * Sets jcb_charge_interchange
     *
     * @param bool|null $jcb_charge_interchange Set to **True** to incur interchange fees for JCB Transfers.
     *
     * @return self
     */
    public function setJcbChargeInterchange($jcb_charge_interchange, $deserialize = false)
    {
        $this->container['jcb_charge_interchange'] = $jcb_charge_interchange;

        return $this;
    }

    /**
     * Gets jcb_fixed_fee
     *
     * @return int|null
     */
    public function getJcbFixedFee()
    {
        return $this->container['jcb_fixed_fee'];
    }

    /**
     * Sets jcb_fixed_fee
     *
     * @param int|null $jcb_fixed_fee Fee in cents incurred for each individual JCB `Transfer`.
     *
     * @return self
     */
    public function setJcbFixedFee($jcb_fixed_fee, $deserialize = false)
    {
        $this->container['jcb_fixed_fee'] = $jcb_fixed_fee;

        return $this;
    }

    /**
     * Gets mastercard_acquirer_fees_basis_points
     *
     * @return int|null
     */
    public function getMastercardAcquirerFeesBasisPoints()
    {
        return $this->container['mastercard_acquirer_fees_basis_points'];
    }

    /**
     * Sets mastercard_acquirer_fees_basis_points
     *
     * @param int|null $mastercard_acquirer_fees_basis_points The fee is assessed on a business???s gross MasterCard processing volume. This fee varies per acquirer based on MasterCard???s assessed charge as it???s distributed across the acquirer???s portfolio of merchants. Generally, this fee is a fraction of a basis point. For example, 0.0045%, 0.0075%, etc. are examples of a likely fee.
     *
     * @return self
     */
    public function setMastercardAcquirerFeesBasisPoints($mastercard_acquirer_fees_basis_points, $deserialize = false)
    {
        $this->container['mastercard_acquirer_fees_basis_points'] = $mastercard_acquirer_fees_basis_points;

        return $this;
    }

    /**
     * Gets mastercard_assessments_over1k_basis_points
     *
     * @return int|null
     */
    public function getMastercardAssessmentsOver1kBasisPoints()
    {
        return $this->container['mastercard_assessments_over1k_basis_points'];
    }

    /**
     * Sets mastercard_assessments_over1k_basis_points
     *
     * @param int|null $mastercard_assessments_over1k_basis_points Fee applied to Mastercard credit sale transactions greater than $1,000.
     *
     * @return self
     */
    public function setMastercardAssessmentsOver1kBasisPoints($mastercard_assessments_over1k_basis_points, $deserialize = false)
    {
        $this->container['mastercard_assessments_over1k_basis_points'] = $mastercard_assessments_over1k_basis_points;

        return $this;
    }

    /**
     * Gets mastercard_assessments_under1k_basis_points
     *
     * @return int|null
     */
    public function getMastercardAssessmentsUnder1kBasisPoints()
    {
        return $this->container['mastercard_assessments_under1k_basis_points'];
    }

    /**
     * Sets mastercard_assessments_under1k_basis_points
     *
     * @param int|null $mastercard_assessments_under1k_basis_points Fee applied to Mastercard transactions less than or equal to $1,000.
     *
     * @return self
     */
    public function setMastercardAssessmentsUnder1kBasisPoints($mastercard_assessments_under1k_basis_points, $deserialize = false)
    {
        $this->container['mastercard_assessments_under1k_basis_points'] = $mastercard_assessments_under1k_basis_points;

        return $this;
    }

    /**
     * Gets mastercard_basis_points
     *
     * @return int|null
     */
    public function getMastercardBasisPoints()
    {
        return $this->container['mastercard_basis_points'];
    }

    /**
     * Sets mastercard_basis_points
     *
     * @param int|null $mastercard_basis_points Percentage-based fee incurred against the full amount of each MasterCard `Transfer`. Calculated as one hundredth of one percent (1 basis point = .0001 or .01%)
     *
     * @return self
     */
    public function setMastercardBasisPoints($mastercard_basis_points, $deserialize = false)
    {
        $this->container['mastercard_basis_points'] = $mastercard_basis_points;

        return $this;
    }

    /**
     * Gets mastercard_charge_interchange
     *
     * @return bool|null
     */
    public function getMastercardChargeInterchange()
    {
        return $this->container['mastercard_charge_interchange'];
    }

    /**
     * Sets mastercard_charge_interchange
     *
     * @param bool|null $mastercard_charge_interchange Set to **True** to incur interchange fees for MasterCard `Transfers`.
     *
     * @return self
     */
    public function setMastercardChargeInterchange($mastercard_charge_interchange, $deserialize = false)
    {
        $this->container['mastercard_charge_interchange'] = $mastercard_charge_interchange;

        return $this;
    }

    /**
     * Gets mastercard_fixed_fee
     *
     * @return int|null
     */
    public function getMastercardFixedFee()
    {
        return $this->container['mastercard_fixed_fee'];
    }

    /**
     * Sets mastercard_fixed_fee
     *
     * @param int|null $mastercard_fixed_fee Fee in cents incurred for each individual MasterCard `Transfer`.
     *
     * @return self
     */
    public function setMastercardFixedFee($mastercard_fixed_fee, $deserialize = false)
    {
        $this->container['mastercard_fixed_fee'] = $mastercard_fixed_fee;

        return $this;
    }

    /**
     * Gets qualified_tiers
     *
     * @return object|null
     */
    public function getQualifiedTiers()
    {
        return $this->container['qualified_tiers'];
    }

    /**
     * Sets qualified_tiers
     *
     * @param object|null $qualified_tiers The top of the qualified tier tree.
     *
     * @return self
     */
    public function setQualifiedTiers($qualified_tiers, $deserialize = false)
    {
        $this->container['qualified_tiers'] = $qualified_tiers;

        return $this;
    }

    /**
     * Gets rounding_mode
     *
     * @return string|null
     */
    public function getRoundingMode()
    {
        return $this->container['rounding_mode'];
    }

    /**
     * Sets rounding_mode
     *
     * @param string|null $rounding_mode <ul><li>Include <strong>AGGREGATE</strong> if you want to round after the settlement calculation.<li>By default, rounding happens before the sum of the settlement calculation (i.e. round each fee transfer)</ul>
     *
     * @return self
     */
    public function setRoundingMode($rounding_mode, $deserialize = false)
    {
        $allowedValues = $this->getRoundingModeAllowableValues();
        if (!is_null($rounding_mode) && !in_array($rounding_mode, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'rounding_mode', must be one of '%s'",
                    $rounding_mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rounding_mode'] = $rounding_mode;

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
     * Gets visa_acquirer_processing_fixed_fee
     *
     * @return int|null
     */
    public function getVisaAcquirerProcessingFixedFee()
    {
        return $this->container['visa_acquirer_processing_fixed_fee'];
    }

    /**
     * Sets visa_acquirer_processing_fixed_fee
     *
     * @param int|null $visa_acquirer_processing_fixed_fee Applied to all U.S.-based credit card authorizations acquired in the U.S. regardless of where the issuer/cardholder is located. If your business is based in the U.S., the acquirer processing fee will apply to all Visa credit card authorizations
     *
     * @return self
     */
    public function setVisaAcquirerProcessingFixedFee($visa_acquirer_processing_fixed_fee, $deserialize = false)
    {
        $this->container['visa_acquirer_processing_fixed_fee'] = $visa_acquirer_processing_fixed_fee;

        return $this;
    }

    /**
     * Gets visa_assessments_basis_points
     *
     * @return int|null
     */
    public function getVisaAssessmentsBasisPoints()
    {
        return $this->container['visa_assessments_basis_points'];
    }

    /**
     * Sets visa_assessments_basis_points
     *
     * @param int|null $visa_assessments_basis_points Applies to all Visa credit transactions.
     *
     * @return self
     */
    public function setVisaAssessmentsBasisPoints($visa_assessments_basis_points, $deserialize = false)
    {
        $this->container['visa_assessments_basis_points'] = $visa_assessments_basis_points;

        return $this;
    }

    /**
     * Gets visa_base_ii_credit_voucher_fixed_fee
     *
     * @return int|null
     */
    public function getVisaBaseIiCreditVoucherFixedFee()
    {
        return $this->container['visa_base_ii_credit_voucher_fixed_fee'];
    }

    /**
     * Sets visa_base_ii_credit_voucher_fixed_fee
     *
     * @param int|null $visa_base_ii_credit_voucher_fixed_fee Applies to all U.S.-based refunds.
     *
     * @return self
     */
    public function setVisaBaseIiCreditVoucherFixedFee($visa_base_ii_credit_voucher_fixed_fee, $deserialize = false)
    {
        $this->container['visa_base_ii_credit_voucher_fixed_fee'] = $visa_base_ii_credit_voucher_fixed_fee;

        return $this;
    }

    /**
     * Gets visa_base_ii_system_file_transmission_fixed_fee
     *
     * @return int|null
     */
    public function getVisaBaseIiSystemFileTransmissionFixedFee()
    {
        return $this->container['visa_base_ii_system_file_transmission_fixed_fee'];
    }

    /**
     * Sets visa_base_ii_system_file_transmission_fixed_fee
     *
     * @param int|null $visa_base_ii_system_file_transmission_fixed_fee Applies to all Visa transactions and is charged in addition to other transaction-based assessments.
     *
     * @return self
     */
    public function setVisaBaseIiSystemFileTransmissionFixedFee($visa_base_ii_system_file_transmission_fixed_fee, $deserialize = false)
    {
        $this->container['visa_base_ii_system_file_transmission_fixed_fee'] = $visa_base_ii_system_file_transmission_fixed_fee;

        return $this;
    }

    /**
     * Gets visa_basis_points
     *
     * @return int|null
     */
    public function getVisaBasisPoints()
    {
        return $this->container['visa_basis_points'];
    }

    /**
     * Sets visa_basis_points
     *
     * @param int|null $visa_basis_points Percentage-based fee incurred against the full amount of each Visa `Transfer`. Calculated as one hundredth of one percent (1 basis point = .0001 or .01%)
     *
     * @return self
     */
    public function setVisaBasisPoints($visa_basis_points, $deserialize = false)
    {
        $this->container['visa_basis_points'] = $visa_basis_points;

        return $this;
    }

    /**
     * Gets visa_charge_interchange
     *
     * @return bool|null
     */
    public function getVisaChargeInterchange()
    {
        return $this->container['visa_charge_interchange'];
    }

    /**
     * Sets visa_charge_interchange
     *
     * @param bool|null $visa_charge_interchange Set to **True** to incur interchange fees for Visa `Transfers`.
     *
     * @return self
     */
    public function setVisaChargeInterchange($visa_charge_interchange, $deserialize = false)
    {
        $this->container['visa_charge_interchange'] = $visa_charge_interchange;

        return $this;
    }

    /**
     * Gets visa_credit_voucher_fixed_fee
     *
     * @return int|null
     */
    public function getVisaCreditVoucherFixedFee()
    {
        return $this->container['visa_credit_voucher_fixed_fee'];
    }

    /**
     * Sets visa_credit_voucher_fixed_fee
     *
     * @param int|null $visa_credit_voucher_fixed_fee Applies to Visa refunds.
     *
     * @return self
     */
    public function setVisaCreditVoucherFixedFee($visa_credit_voucher_fixed_fee, $deserialize = false)
    {
        $this->container['visa_credit_voucher_fixed_fee'] = $visa_credit_voucher_fixed_fee;

        return $this;
    }

    /**
     * Gets visa_fixed_fee
     *
     * @return int|null
     */
    public function getVisaFixedFee()
    {
        return $this->container['visa_fixed_fee'];
    }

    /**
     * Sets visa_fixed_fee
     *
     * @param int|null $visa_fixed_fee Fee in cents incurred for each individual Visa `Transfer`.
     *
     * @return self
     */
    public function setVisaFixedFee($visa_fixed_fee, $deserialize = false)
    {
        $this->container['visa_fixed_fee'] = $visa_fixed_fee;

        return $this;
    }

    /**
     * Gets visa_kilobyte_access_fixed_fee
     *
     * @return int|null
     */
    public function getVisaKilobyteAccessFixedFee()
    {
        return $this->container['visa_kilobyte_access_fixed_fee'];
    }

    /**
     * Sets visa_kilobyte_access_fixed_fee
     *
     * @param int|null $visa_kilobyte_access_fixed_fee Charged on each authorization transaction submitted to Visa???s network for settlement.
     *
     * @return self
     */
    public function setVisaKilobyteAccessFixedFee($visa_kilobyte_access_fixed_fee, $deserialize = false)
    {
        $this->container['visa_kilobyte_access_fixed_fee'] = $visa_kilobyte_access_fixed_fee;

        return $this;
    }

    /**
     * Gets _links
     *
     * @return \Finix\Model\FeeProfileLinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \Finix\Model\FeeProfileLinks|null $_links _links
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



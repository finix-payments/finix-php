<?php
/**
 * FeeType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */

namespace Finix\Model;
use \Finix\ObjectSerializer;

/**
 * FeeType Class Doc Comment
 *
 * @category Class
 * @description Details the type of fee if the &#x60;Transfer&#x60; includes a &#x60;fee&#x60;.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class FeeType
{
    /**
     * Possible values of this enum
     */
    public const APPLICATION_FEE = 'APPLICATION_FEE';

    public const ACH_BASIS_POINTS = 'ACH_BASIS_POINTS';

    public const ACH_FIXED = 'ACH_FIXED';

    public const CARD_BASIS_POINTS = 'CARD_BASIS_POINTS';

    public const CARD_FIXED = 'CARD_FIXED';

    public const CARD_INTERCHANGE = 'CARD_INTERCHANGE';

    public const VISA_BASIS_POINTS = 'VISA_BASIS_POINTS';

    public const VISA_FIXED = 'VISA_FIXED';

    public const VISA_INTERCHANGE = 'VISA_INTERCHANGE';

    public const VISA_ASSESSMENT_BASIS_POINTS = 'VISA_ASSESSMENT_BASIS_POINTS';

    public const VISA_ACQUIRER_PROCESSING_FIXED = 'VISA_ACQUIRER_PROCESSING_FIXED';

    public const VISA_CREDIT_VOUCHER_FIXED = 'VISA_CREDIT_VOUCHER_FIXED';

    public const VISA_BASE_II_SYSTEM_FILE_TRANSMISSION_FIXED = 'VISA_BASE_II_SYSTEM_FILE_TRANSMISSION_FIXED';

    public const VISA_BASE_II_CREDIT_VOUCHER_FIXED = 'VISA_BASE_II_CREDIT_VOUCHER_FIXED';

    public const VISA_KILOBYTE_ACCESS_FIXED = 'VISA_KILOBYTE_ACCESS_FIXED';

    public const DISCOVER_BASIS_POINTS = 'DISCOVER_BASIS_POINTS';

    public const DISCOVER_FIXED = 'DISCOVER_FIXED';

    public const DISCOVER_INTERCHANGE = 'DISCOVER_INTERCHANGE';

    public const DISCOVER_ASSESSMENT_BASIS_POINTS = 'DISCOVER_ASSESSMENT_BASIS_POINTS';

    public const DISCOVER_DATA_USAGE_FIXED = 'DISCOVER_DATA_USAGE_FIXED';

    public const DISCOVER_NETWORK_AUTHORIZATION_FIXED = 'DISCOVER_NETWORK_AUTHORIZATION_FIXED';

    public const DINERS_CLUB_BASIS_POINTS = 'DINERS_CLUB_BASIS_POINTS';

    public const DINERS_CLUB_FIXED = 'DINERS_CLUB_FIXED';

    public const DINERS_CLUB_INTERCHANGE = 'DINERS_CLUB_INTERCHANGE';

    public const MASTERCARD_BASIS_POINTS = 'MASTERCARD_BASIS_POINTS';

    public const MASTERCARD_FIXED = 'MASTERCARD_FIXED';

    public const MASTERCARD_INTERCHANGE = 'MASTERCARD_INTERCHANGE';

    public const MASTERCARD_ASSESSMENT_UNDER_1_K_BASIS_POINTS = 'MASTERCARD_ASSESSMENT_UNDER_1K_BASIS_POINTS';

    public const MASTERCARD_ASSESSMENT_OVER_1_K_BASIS_POINTS = 'MASTERCARD_ASSESSMENT_OVER_1K_BASIS_POINTS';

    public const MASTERCARD_ACQUIRER_FEE_BASIS_POINTS = 'MASTERCARD_ACQUIRER_FEE_BASIS_POINTS';

    public const JCB_BASIS_POINTS = 'JCB_BASIS_POINTS';

    public const JCB_FIXED = 'JCB_FIXED';

    public const JCB_INTERCHANGE = 'JCB_INTERCHANGE';

    public const AMERICAN_EXPRESS_BASIS_POINTS = 'AMERICAN_EXPRESS_BASIS_POINTS';

    public const AMERICAN_EXPRESS_FIXED = 'AMERICAN_EXPRESS_FIXED';

    public const AMERICAN_EXPRESS_INTERCHANGE = 'AMERICAN_EXPRESS_INTERCHANGE';

    public const AMERICAN_EXPRESS_ASSESSMENT_BASIS_POINTS = 'AMERICAN_EXPRESS_ASSESSMENT_BASIS_POINTS';

    public const DISPUTE_INQUIRY_FIXED_FEE = 'DISPUTE_INQUIRY_FIXED_FEE';

    public const DISPUTE_FIXED_FEE = 'DISPUTE_FIXED_FEE';

    public const QUALIFIED_TIER_BASIS_POINTS_FEE = 'QUALIFIED_TIER_BASIS_POINTS_FEE';

    public const QUALIFIED_TIER_FIXED_FEE = 'QUALIFIED_TIER_FIXED_FEE';

    public const CUSTOM = 'CUSTOM';

    public const ACH_DEBIT_RETURN_FIXED_FEE = 'ACH_DEBIT_RETURN_FIXED_FEE';

    public const ACH_CREDIT_RETURN_FIXED_FEE = 'ACH_CREDIT_RETURN_FIXED_FEE';

    public const ANCILLARY_FIXED_FEE_PRIMARY = 'ANCILLARY_FIXED_FEE_PRIMARY';

    public const ANCILLARY_FIXED_FEE_SECONDARY = 'ANCILLARY_FIXED_FEE_SECONDARY';

    public const SETTLEMENT_V2_TRANSFER = 'SETTLEMENT_V2_TRANSFER';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APPLICATION_FEE,
            self::ACH_BASIS_POINTS,
            self::ACH_FIXED,
            self::CARD_BASIS_POINTS,
            self::CARD_FIXED,
            self::CARD_INTERCHANGE,
            self::VISA_BASIS_POINTS,
            self::VISA_FIXED,
            self::VISA_INTERCHANGE,
            self::VISA_ASSESSMENT_BASIS_POINTS,
            self::VISA_ACQUIRER_PROCESSING_FIXED,
            self::VISA_CREDIT_VOUCHER_FIXED,
            self::VISA_BASE_II_SYSTEM_FILE_TRANSMISSION_FIXED,
            self::VISA_BASE_II_CREDIT_VOUCHER_FIXED,
            self::VISA_KILOBYTE_ACCESS_FIXED,
            self::DISCOVER_BASIS_POINTS,
            self::DISCOVER_FIXED,
            self::DISCOVER_INTERCHANGE,
            self::DISCOVER_ASSESSMENT_BASIS_POINTS,
            self::DISCOVER_DATA_USAGE_FIXED,
            self::DISCOVER_NETWORK_AUTHORIZATION_FIXED,
            self::DINERS_CLUB_BASIS_POINTS,
            self::DINERS_CLUB_FIXED,
            self::DINERS_CLUB_INTERCHANGE,
            self::MASTERCARD_BASIS_POINTS,
            self::MASTERCARD_FIXED,
            self::MASTERCARD_INTERCHANGE,
            self::MASTERCARD_ASSESSMENT_UNDER_1_K_BASIS_POINTS,
            self::MASTERCARD_ASSESSMENT_OVER_1_K_BASIS_POINTS,
            self::MASTERCARD_ACQUIRER_FEE_BASIS_POINTS,
            self::JCB_BASIS_POINTS,
            self::JCB_FIXED,
            self::JCB_INTERCHANGE,
            self::AMERICAN_EXPRESS_BASIS_POINTS,
            self::AMERICAN_EXPRESS_FIXED,
            self::AMERICAN_EXPRESS_INTERCHANGE,
            self::AMERICAN_EXPRESS_ASSESSMENT_BASIS_POINTS,
            self::DISPUTE_INQUIRY_FIXED_FEE,
            self::DISPUTE_FIXED_FEE,
            self::QUALIFIED_TIER_BASIS_POINTS_FEE,
            self::QUALIFIED_TIER_FIXED_FEE,
            self::CUSTOM,
            self::ACH_DEBIT_RETURN_FIXED_FEE,
            self::ACH_CREDIT_RETURN_FIXED_FEE,
            self::ANCILLARY_FIXED_FEE_PRIMARY,
            self::ANCILLARY_FIXED_FEE_SECONDARY,
            self::SETTLEMENT_V2_TRANSFER
        ];
    }
}



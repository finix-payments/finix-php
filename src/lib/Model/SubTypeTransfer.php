<?php
/**
 * SubTypeTransfer
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
 * SubTypeTransfer Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class SubTypeTransfer
{
    /**
     * Possible values of this enum
     */
    public const API = 'API';

    public const APPLICATION_FEE = 'APPLICATION_FEE';

    public const DISPUTE = 'DISPUTE';

    public const MERCHANT_CREDIT = 'MERCHANT_CREDIT';

    public const MERCHANT_CREDIT_ADJUSTMENT = 'MERCHANT_CREDIT_ADJUSTMENT';

    public const MERCHANT_DEBIT = 'MERCHANT_DEBIT';

    public const MERCHANT_DEBIT_ADJUSTMENT = 'MERCHANT_DEBIT_ADJUSTMENT';

    public const PLATFORM_CREDIT = 'PLATFORM_CREDIT';

    public const PLATFORM_CREDIT_ADJUSTMENT = 'PLATFORM_CREDIT_ADJUSTMENT';

    public const PLATFORM_DEBIT = 'PLATFORM_DEBIT';

    public const PLATFORM_DEBIT_ADJUSTMENT = 'PLATFORM_DEBIT_ADJUSTMENT';

    public const PLATFORM_FEE = 'PLATFORM_FEE';

    public const SETTLEMENT_MERCHANT = 'SETTLEMENT_MERCHANT';

    public const SETTLEMENT_NOOP = 'SETTLEMENT_NOOP';

    public const SETTLEMENT_PARTNER = 'SETTLEMENT_PARTNER';

    public const SETTLEMENT_PLATFORM = 'SETTLEMENT_PLATFORM';

    public const SPLIT_PAYOUT = 'SPLIT_PAYOUT';

    public const SPLIT_PAYOUT_ADJUSTMENT = 'SPLIT_PAYOUT_ADJUSTMENT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::API,
            self::APPLICATION_FEE,
            self::DISPUTE,
            self::MERCHANT_CREDIT,
            self::MERCHANT_CREDIT_ADJUSTMENT,
            self::MERCHANT_DEBIT,
            self::MERCHANT_DEBIT_ADJUSTMENT,
            self::PLATFORM_CREDIT,
            self::PLATFORM_CREDIT_ADJUSTMENT,
            self::PLATFORM_DEBIT,
            self::PLATFORM_DEBIT_ADJUSTMENT,
            self::PLATFORM_FEE,
            self::SETTLEMENT_MERCHANT,
            self::SETTLEMENT_NOOP,
            self::SETTLEMENT_PARTNER,
            self::SETTLEMENT_PLATFORM,
            self::SPLIT_PAYOUT,
            self::SPLIT_PAYOUT_ADJUSTMENT
        ];
    }
}



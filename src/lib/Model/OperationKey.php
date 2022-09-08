<?php
/**
 * OperationKey
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
 * OperationKey Class Doc Comment
 *
 * @category Class
 * @description Details the operation that&#39;ll be performed in the transaction (Card present transactions only) .
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class OperationKey
{
    /**
     * Possible values of this enum
     */
    public const PUSH_TO_CARD = 'PUSH_TO_CARD';

    public const PULL_FROM_CARD = 'PULL_FROM_CARD';

    public const CARD_PRESENT_DEBIT = 'CARD_PRESENT_DEBIT';

    public const CARD_PRESENT_UNREFERENCED_REFUND = 'CARD_PRESENT_UNREFERENCED_REFUND';

    public const SALE = 'SALE';

    public const UNREFERENCED_REFUND = 'UNREFERENCED_REFUND';

    public const MERCHANT_CREDIT_ADJUSTMENT = 'MERCHANT_CREDIT_ADJUSTMENT';

    public const MERCHANT_DEBIT_ADJUSTMENT = 'MERCHANT_DEBIT_ADJUSTMENT';

    public const CARD_PRESENT_AUTHORIZATION = 'CARD_PRESENT_AUTHORIZATION';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PUSH_TO_CARD,
            self::PULL_FROM_CARD,
            self::CARD_PRESENT_DEBIT,
            self::CARD_PRESENT_UNREFERENCED_REFUND,
            self::SALE,
            self::UNREFERENCED_REFUND,
            self::MERCHANT_CREDIT_ADJUSTMENT,
            self::MERCHANT_DEBIT_ADJUSTMENT,
            self::CARD_PRESENT_AUTHORIZATION
        ];
    }
}



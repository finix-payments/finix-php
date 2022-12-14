<?php
/**
 * Currency
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
 * Currency Class Doc Comment
 *
 * @category Class
 * @description ISO 4217 3 letter currency code.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class Currency
{
    /**
     * Possible values of this enum
     */
    public const AED = 'AED';

    public const AFN = 'AFN';

    public const ALL = 'ALL';

    public const AMD = 'AMD';

    public const ANG = 'ANG';

    public const AOA = 'AOA';

    public const ARS = 'ARS';

    public const AUD = 'AUD';

    public const AWG = 'AWG';

    public const AZN = 'AZN';

    public const BAM = 'BAM';

    public const BBD = 'BBD';

    public const BDT = 'BDT';

    public const BGN = 'BGN';

    public const BHD = 'BHD';

    public const BIF = 'BIF';

    public const BMD = 'BMD';

    public const BND = 'BND';

    public const BOB = 'BOB';

    public const BOV = 'BOV';

    public const BRL = 'BRL';

    public const BSD = 'BSD';

    public const BTN = 'BTN';

    public const BWP = 'BWP';

    public const BYR = 'BYR';

    public const BZD = 'BZD';

    public const CAD = 'CAD';

    public const CDF = 'CDF';

    public const CHE = 'CHE';

    public const CHF = 'CHF';

    public const CHW = 'CHW';

    public const CLF = 'CLF';

    public const CLP = 'CLP';

    public const CNY = 'CNY';

    public const COP = 'COP';

    public const COU = 'COU';

    public const CRC = 'CRC';

    public const CUC = 'CUC';

    public const CUP = 'CUP';

    public const CVE = 'CVE';

    public const CZK = 'CZK';

    public const DJF = 'DJF';

    public const DKK = 'DKK';

    public const DOP = 'DOP';

    public const DZD = 'DZD';

    public const EGP = 'EGP';

    public const ERN = 'ERN';

    public const ETB = 'ETB';

    public const EUR = 'EUR';

    public const FJD = 'FJD';

    public const FKP = 'FKP';

    public const GBP = 'GBP';

    public const GEL = 'GEL';

    public const GHS = 'GHS';

    public const GIP = 'GIP';

    public const GMD = 'GMD';

    public const GNF = 'GNF';

    public const GTQ = 'GTQ';

    public const GYD = 'GYD';

    public const HKD = 'HKD';

    public const HNL = 'HNL';

    public const HRK = 'HRK';

    public const HTG = 'HTG';

    public const HUF = 'HUF';

    public const IDR = 'IDR';

    public const ILS = 'ILS';

    public const INR = 'INR';

    public const IQD = 'IQD';

    public const IRR = 'IRR';

    public const ISK = 'ISK';

    public const JMD = 'JMD';

    public const JOD = 'JOD';

    public const JPY = 'JPY';

    public const KES = 'KES';

    public const KGS = 'KGS';

    public const KHR = 'KHR';

    public const KMF = 'KMF';

    public const KPW = 'KPW';

    public const KRW = 'KRW';

    public const KWD = 'KWD';

    public const KYD = 'KYD';

    public const KZT = 'KZT';

    public const LAK = 'LAK';

    public const LBP = 'LBP';

    public const LKR = 'LKR';

    public const LRD = 'LRD';

    public const LSL = 'LSL';

    public const LTL = 'LTL';

    public const LYD = 'LYD';

    public const MAD = 'MAD';

    public const MDL = 'MDL';

    public const MGA = 'MGA';

    public const MKD = 'MKD';

    public const MMK = 'MMK';

    public const MNT = 'MNT';

    public const MOP = 'MOP';

    public const MRO = 'MRO';

    public const MUR = 'MUR';

    public const MVR = 'MVR';

    public const MWK = 'MWK';

    public const MXN = 'MXN';

    public const MXV = 'MXV';

    public const MYR = 'MYR';

    public const MZN = 'MZN';

    public const NAD = 'NAD';

    public const NGN = 'NGN';

    public const NIO = 'NIO';

    public const NOK = 'NOK';

    public const NPR = 'NPR';

    public const NZD = 'NZD';

    public const OMR = 'OMR';

    public const PAB = 'PAB';

    public const PEN = 'PEN';

    public const PGK = 'PGK';

    public const PHP = 'PHP';

    public const PKR = 'PKR';

    public const PLN = 'PLN';

    public const PYG = 'PYG';

    public const QAR = 'QAR';

    public const RON = 'RON';

    public const RSD = 'RSD';

    public const RUB = 'RUB';

    public const RWF = 'RWF';

    public const SAR = 'SAR';

    public const SBD = 'SBD';

    public const SCR = 'SCR';

    public const SDG = 'SDG';

    public const SEK = 'SEK';

    public const SGD = 'SGD';

    public const SHP = 'SHP';

    public const SLL = 'SLL';

    public const SOS = 'SOS';

    public const SRD = 'SRD';

    public const SSP = 'SSP';

    public const STD = 'STD';

    public const SVC = 'SVC';

    public const SYP = 'SYP';

    public const SZL = 'SZL';

    public const THB = 'THB';

    public const TJS = 'TJS';

    public const TMT = 'TMT';

    public const TND = 'TND';

    public const TOP = 'TOP';

    public const _TRY = 'TRY';

    public const TTD = 'TTD';

    public const TWD = 'TWD';

    public const TZS = 'TZS';

    public const UAH = 'UAH';

    public const UGX = 'UGX';

    public const USD = 'USD';

    public const USN = 'USN';

    public const UYI = 'UYI';

    public const UYU = 'UYU';

    public const UZS = 'UZS';

    public const VEF = 'VEF';

    public const VND = 'VND';

    public const VUV = 'VUV';

    public const WST = 'WST';

    public const XAF = 'XAF';

    public const XAG = 'XAG';

    public const XAU = 'XAU';

    public const XBA = 'XBA';

    public const XBB = 'XBB';

    public const XBC = 'XBC';

    public const XBD = 'XBD';

    public const XCD = 'XCD';

    public const XDR = 'XDR';

    public const XOF = 'XOF';

    public const XPD = 'XPD';

    public const XPF = 'XPF';

    public const XPT = 'XPT';

    public const XSU = 'XSU';

    public const XTS = 'XTS';

    public const XUA = 'XUA';

    public const XXX = 'XXX';

    public const YER = 'YER';

    public const ZAR = 'ZAR';

    public const ZMW = 'ZMW';

    public const ZWL = 'ZWL';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AED,
            self::AFN,
            self::ALL,
            self::AMD,
            self::ANG,
            self::AOA,
            self::ARS,
            self::AUD,
            self::AWG,
            self::AZN,
            self::BAM,
            self::BBD,
            self::BDT,
            self::BGN,
            self::BHD,
            self::BIF,
            self::BMD,
            self::BND,
            self::BOB,
            self::BOV,
            self::BRL,
            self::BSD,
            self::BTN,
            self::BWP,
            self::BYR,
            self::BZD,
            self::CAD,
            self::CDF,
            self::CHE,
            self::CHF,
            self::CHW,
            self::CLF,
            self::CLP,
            self::CNY,
            self::COP,
            self::COU,
            self::CRC,
            self::CUC,
            self::CUP,
            self::CVE,
            self::CZK,
            self::DJF,
            self::DKK,
            self::DOP,
            self::DZD,
            self::EGP,
            self::ERN,
            self::ETB,
            self::EUR,
            self::FJD,
            self::FKP,
            self::GBP,
            self::GEL,
            self::GHS,
            self::GIP,
            self::GMD,
            self::GNF,
            self::GTQ,
            self::GYD,
            self::HKD,
            self::HNL,
            self::HRK,
            self::HTG,
            self::HUF,
            self::IDR,
            self::ILS,
            self::INR,
            self::IQD,
            self::IRR,
            self::ISK,
            self::JMD,
            self::JOD,
            self::JPY,
            self::KES,
            self::KGS,
            self::KHR,
            self::KMF,
            self::KPW,
            self::KRW,
            self::KWD,
            self::KYD,
            self::KZT,
            self::LAK,
            self::LBP,
            self::LKR,
            self::LRD,
            self::LSL,
            self::LTL,
            self::LYD,
            self::MAD,
            self::MDL,
            self::MGA,
            self::MKD,
            self::MMK,
            self::MNT,
            self::MOP,
            self::MRO,
            self::MUR,
            self::MVR,
            self::MWK,
            self::MXN,
            self::MXV,
            self::MYR,
            self::MZN,
            self::NAD,
            self::NGN,
            self::NIO,
            self::NOK,
            self::NPR,
            self::NZD,
            self::OMR,
            self::PAB,
            self::PEN,
            self::PGK,
            self::PHP,
            self::PKR,
            self::PLN,
            self::PYG,
            self::QAR,
            self::RON,
            self::RSD,
            self::RUB,
            self::RWF,
            self::SAR,
            self::SBD,
            self::SCR,
            self::SDG,
            self::SEK,
            self::SGD,
            self::SHP,
            self::SLL,
            self::SOS,
            self::SRD,
            self::SSP,
            self::STD,
            self::SVC,
            self::SYP,
            self::SZL,
            self::THB,
            self::TJS,
            self::TMT,
            self::TND,
            self::TOP,
            self::_TRY,
            self::TTD,
            self::TWD,
            self::TZS,
            self::UAH,
            self::UGX,
            self::USD,
            self::USN,
            self::UYI,
            self::UYU,
            self::UZS,
            self::VEF,
            self::VND,
            self::VUV,
            self::WST,
            self::XAF,
            self::XAG,
            self::XAU,
            self::XBA,
            self::XBB,
            self::XBC,
            self::XBD,
            self::XCD,
            self::XDR,
            self::XOF,
            self::XPD,
            self::XPF,
            self::XPT,
            self::XSU,
            self::XTS,
            self::XUA,
            self::XXX,
            self::YER,
            self::ZAR,
            self::ZMW,
            self::ZWL
        ];
    }
}



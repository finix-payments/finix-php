<?php
/**
 * Country
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
 * Country Class Doc Comment
 *
 * @category Class
 * @description The sender’s country.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 */
class Country
{
    /**
     * Possible values of this enum
     */
    public const ABW = 'ABW';

    public const AFG = 'AFG';

    public const AGO = 'AGO';

    public const AIA = 'AIA';

    public const ALA = 'ALA';

    public const ALB = 'ALB';

    public const _AND = 'AND';

    public const ARE = 'ARE';

    public const ARG = 'ARG';

    public const ARM = 'ARM';

    public const ASM = 'ASM';

    public const ATA = 'ATA';

    public const ATF = 'ATF';

    public const ATG = 'ATG';

    public const AUS = 'AUS';

    public const AUT = 'AUT';

    public const AZE = 'AZE';

    public const BDI = 'BDI';

    public const BEL = 'BEL';

    public const BEN = 'BEN';

    public const BES = 'BES';

    public const BFA = 'BFA';

    public const BGD = 'BGD';

    public const BGR = 'BGR';

    public const BHR = 'BHR';

    public const BHS = 'BHS';

    public const BIH = 'BIH';

    public const BLM = 'BLM';

    public const BLR = 'BLR';

    public const BLZ = 'BLZ';

    public const BMU = 'BMU';

    public const BOL = 'BOL';

    public const BRA = 'BRA';

    public const BRB = 'BRB';

    public const BRN = 'BRN';

    public const BTN = 'BTN';

    public const BVT = 'BVT';

    public const BWA = 'BWA';

    public const CAF = 'CAF';

    public const CAN = 'CAN';

    public const CCK = 'CCK';

    public const CHE = 'CHE';

    public const CHL = 'CHL';

    public const CHN = 'CHN';

    public const CIV = 'CIV';

    public const CMR = 'CMR';

    public const COD = 'COD';

    public const COG = 'COG';

    public const COK = 'COK';

    public const COL = 'COL';

    public const COM = 'COM';

    public const CPV = 'CPV';

    public const CRI = 'CRI';

    public const CUB = 'CUB';

    public const CUW = 'CUW';

    public const CXR = 'CXR';

    public const CYM = 'CYM';

    public const CYP = 'CYP';

    public const CZE = 'CZE';

    public const DEU = 'DEU';

    public const DJI = 'DJI';

    public const DMA = 'DMA';

    public const DNK = 'DNK';

    public const DOM = 'DOM';

    public const DZA = 'DZA';

    public const ECU = 'ECU';

    public const EGY = 'EGY';

    public const ERI = 'ERI';

    public const ESH = 'ESH';

    public const ESP = 'ESP';

    public const EST = 'EST';

    public const ETH = 'ETH';

    public const FIN = 'FIN';

    public const FJI = 'FJI';

    public const FLK = 'FLK';

    public const FRA = 'FRA';

    public const FRO = 'FRO';

    public const FSM = 'FSM';

    public const GAB = 'GAB';

    public const GBR = 'GBR';

    public const GEO = 'GEO';

    public const GGY = 'GGY';

    public const GHA = 'GHA';

    public const GIB = 'GIB';

    public const GIN = 'GIN';

    public const GLP = 'GLP';

    public const GMB = 'GMB';

    public const GNB = 'GNB';

    public const GNQ = 'GNQ';

    public const GRC = 'GRC';

    public const GRD = 'GRD';

    public const GRL = 'GRL';

    public const GTM = 'GTM';

    public const GUF = 'GUF';

    public const GUM = 'GUM';

    public const GUY = 'GUY';

    public const HKG = 'HKG';

    public const HMD = 'HMD';

    public const HND = 'HND';

    public const HRV = 'HRV';

    public const HTI = 'HTI';

    public const HUN = 'HUN';

    public const IDN = 'IDN';

    public const IMN = 'IMN';

    public const IND = 'IND';

    public const IOT = 'IOT';

    public const IRL = 'IRL';

    public const IRN = 'IRN';

    public const IRQ = 'IRQ';

    public const ISL = 'ISL';

    public const ISR = 'ISR';

    public const ITA = 'ITA';

    public const JAM = 'JAM';

    public const JEY = 'JEY';

    public const JOR = 'JOR';

    public const JPN = 'JPN';

    public const KAZ = 'KAZ';

    public const KEN = 'KEN';

    public const KGZ = 'KGZ';

    public const KHM = 'KHM';

    public const KIR = 'KIR';

    public const KNA = 'KNA';

    public const KOR = 'KOR';

    public const KWT = 'KWT';

    public const LAO = 'LAO';

    public const LBN = 'LBN';

    public const LBR = 'LBR';

    public const LBY = 'LBY';

    public const LCA = 'LCA';

    public const LIE = 'LIE';

    public const LKA = 'LKA';

    public const LSO = 'LSO';

    public const LTU = 'LTU';

    public const LUX = 'LUX';

    public const LVA = 'LVA';

    public const MAC = 'MAC';

    public const MAF = 'MAF';

    public const MAR = 'MAR';

    public const MCO = 'MCO';

    public const MDA = 'MDA';

    public const MDG = 'MDG';

    public const MDV = 'MDV';

    public const MEX = 'MEX';

    public const MHL = 'MHL';

    public const MKD = 'MKD';

    public const MLI = 'MLI';

    public const MLT = 'MLT';

    public const MMR = 'MMR';

    public const MNE = 'MNE';

    public const MNG = 'MNG';

    public const MNP = 'MNP';

    public const MRT = 'MRT';

    public const MSR = 'MSR';

    public const MTQ = 'MTQ';

    public const MUS = 'MUS';

    public const MWI = 'MWI';

    public const MYS = 'MYS';

    public const MYT = 'MYT';

    public const NAM = 'NAM';

    public const NCL = 'NCL';

    public const NER = 'NER';

    public const NFK = 'NFK';

    public const NGA = 'NGA';

    public const NIC = 'NIC';

    public const NIU = 'NIU';

    public const NLD = 'NLD';

    public const NOR = 'NOR';

    public const NPL = 'NPL';

    public const NRU = 'NRU';

    public const NZL = 'NZL';

    public const OMN = 'OMN';

    public const PAK = 'PAK';

    public const PAN = 'PAN';

    public const PCN = 'PCN';

    public const PER = 'PER';

    public const PHL = 'PHL';

    public const PLW = 'PLW';

    public const PNG = 'PNG';

    public const POL = 'POL';

    public const PRI = 'PRI';

    public const PRK = 'PRK';

    public const PRT = 'PRT';

    public const PRY = 'PRY';

    public const PSE = 'PSE';

    public const PYF = 'PYF';

    public const QAT = 'QAT';

    public const REU = 'REU';

    public const ROU = 'ROU';

    public const RUS = 'RUS';

    public const RWA = 'RWA';

    public const SAU = 'SAU';

    public const SDN = 'SDN';

    public const SEN = 'SEN';

    public const SGP = 'SGP';

    public const SGS = 'SGS';

    public const SHN = 'SHN';

    public const SJM = 'SJM';

    public const SLB = 'SLB';

    public const SLE = 'SLE';

    public const SLV = 'SLV';

    public const SMR = 'SMR';

    public const SOM = 'SOM';

    public const SPM = 'SPM';

    public const SRB = 'SRB';

    public const SSD = 'SSD';

    public const STP = 'STP';

    public const SUR = 'SUR';

    public const SVK = 'SVK';

    public const SVN = 'SVN';

    public const SWE = 'SWE';

    public const SWZ = 'SWZ';

    public const SXM = 'SXM';

    public const SYC = 'SYC';

    public const SYR = 'SYR';

    public const TCA = 'TCA';

    public const TCD = 'TCD';

    public const TGO = 'TGO';

    public const THA = 'THA';

    public const TJK = 'TJK';

    public const TKL = 'TKL';

    public const TKM = 'TKM';

    public const TLS = 'TLS';

    public const TON = 'TON';

    public const TTO = 'TTO';

    public const TUN = 'TUN';

    public const TUR = 'TUR';

    public const TUV = 'TUV';

    public const TWN = 'TWN';

    public const TZA = 'TZA';

    public const UGA = 'UGA';

    public const UKR = 'UKR';

    public const UMI = 'UMI';

    public const URY = 'URY';

    public const USA = 'USA';

    public const UZB = 'UZB';

    public const VAT = 'VAT';

    public const VCT = 'VCT';

    public const VEN = 'VEN';

    public const VGB = 'VGB';

    public const VIR = 'VIR';

    public const VNM = 'VNM';

    public const VUT = 'VUT';

    public const WLF = 'WLF';

    public const WSM = 'WSM';

    public const XKX = 'XKX';

    public const YEM = 'YEM';

    public const ZAF = 'ZAF';

    public const ZMB = 'ZMB';

    public const ZWE = 'ZWE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ABW,
            self::AFG,
            self::AGO,
            self::AIA,
            self::ALA,
            self::ALB,
            self::_AND,
            self::ARE,
            self::ARG,
            self::ARM,
            self::ASM,
            self::ATA,
            self::ATF,
            self::ATG,
            self::AUS,
            self::AUT,
            self::AZE,
            self::BDI,
            self::BEL,
            self::BEN,
            self::BES,
            self::BFA,
            self::BGD,
            self::BGR,
            self::BHR,
            self::BHS,
            self::BIH,
            self::BLM,
            self::BLR,
            self::BLZ,
            self::BMU,
            self::BOL,
            self::BRA,
            self::BRB,
            self::BRN,
            self::BTN,
            self::BVT,
            self::BWA,
            self::CAF,
            self::CAN,
            self::CCK,
            self::CHE,
            self::CHL,
            self::CHN,
            self::CIV,
            self::CMR,
            self::COD,
            self::COG,
            self::COK,
            self::COL,
            self::COM,
            self::CPV,
            self::CRI,
            self::CUB,
            self::CUW,
            self::CXR,
            self::CYM,
            self::CYP,
            self::CZE,
            self::DEU,
            self::DJI,
            self::DMA,
            self::DNK,
            self::DOM,
            self::DZA,
            self::ECU,
            self::EGY,
            self::ERI,
            self::ESH,
            self::ESP,
            self::EST,
            self::ETH,
            self::FIN,
            self::FJI,
            self::FLK,
            self::FRA,
            self::FRO,
            self::FSM,
            self::GAB,
            self::GBR,
            self::GEO,
            self::GGY,
            self::GHA,
            self::GIB,
            self::GIN,
            self::GLP,
            self::GMB,
            self::GNB,
            self::GNQ,
            self::GRC,
            self::GRD,
            self::GRL,
            self::GTM,
            self::GUF,
            self::GUM,
            self::GUY,
            self::HKG,
            self::HMD,
            self::HND,
            self::HRV,
            self::HTI,
            self::HUN,
            self::IDN,
            self::IMN,
            self::IND,
            self::IOT,
            self::IRL,
            self::IRN,
            self::IRQ,
            self::ISL,
            self::ISR,
            self::ITA,
            self::JAM,
            self::JEY,
            self::JOR,
            self::JPN,
            self::KAZ,
            self::KEN,
            self::KGZ,
            self::KHM,
            self::KIR,
            self::KNA,
            self::KOR,
            self::KWT,
            self::LAO,
            self::LBN,
            self::LBR,
            self::LBY,
            self::LCA,
            self::LIE,
            self::LKA,
            self::LSO,
            self::LTU,
            self::LUX,
            self::LVA,
            self::MAC,
            self::MAF,
            self::MAR,
            self::MCO,
            self::MDA,
            self::MDG,
            self::MDV,
            self::MEX,
            self::MHL,
            self::MKD,
            self::MLI,
            self::MLT,
            self::MMR,
            self::MNE,
            self::MNG,
            self::MNP,
            self::MRT,
            self::MSR,
            self::MTQ,
            self::MUS,
            self::MWI,
            self::MYS,
            self::MYT,
            self::NAM,
            self::NCL,
            self::NER,
            self::NFK,
            self::NGA,
            self::NIC,
            self::NIU,
            self::NLD,
            self::NOR,
            self::NPL,
            self::NRU,
            self::NZL,
            self::OMN,
            self::PAK,
            self::PAN,
            self::PCN,
            self::PER,
            self::PHL,
            self::PLW,
            self::PNG,
            self::POL,
            self::PRI,
            self::PRK,
            self::PRT,
            self::PRY,
            self::PSE,
            self::PYF,
            self::QAT,
            self::REU,
            self::ROU,
            self::RUS,
            self::RWA,
            self::SAU,
            self::SDN,
            self::SEN,
            self::SGP,
            self::SGS,
            self::SHN,
            self::SJM,
            self::SLB,
            self::SLE,
            self::SLV,
            self::SMR,
            self::SOM,
            self::SPM,
            self::SRB,
            self::SSD,
            self::STP,
            self::SUR,
            self::SVK,
            self::SVN,
            self::SWE,
            self::SWZ,
            self::SXM,
            self::SYC,
            self::SYR,
            self::TCA,
            self::TCD,
            self::TGO,
            self::THA,
            self::TJK,
            self::TKL,
            self::TKM,
            self::TLS,
            self::TON,
            self::TTO,
            self::TUN,
            self::TUR,
            self::TUV,
            self::TWN,
            self::TZA,
            self::UGA,
            self::UKR,
            self::UMI,
            self::URY,
            self::USA,
            self::UZB,
            self::VAT,
            self::VCT,
            self::VEN,
            self::VGB,
            self::VIR,
            self::VNM,
            self::VUT,
            self::WLF,
            self::WSM,
            self::XKX,
            self::YEM,
            self::ZAF,
            self::ZMB,
            self::ZWE
        ];
    }
}



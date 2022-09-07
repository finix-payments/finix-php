<?php
/**
 * IdentityEntityFormBusinessAddress
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
 * IdentityEntityFormBusinessAddress Class Doc Comment
 *
 * @category Class
 * @description Primary address for the legal entity.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IdentityEntityFormBusinessAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IdentityEntityForm_business_address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'city' => 'string',
        'country' => 'string',
        'line1' => 'string',
        'line2' => 'string',
        'postal_code' => 'string',
        'region' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'city' => null,
        'country' => null,
        'line1' => null,
        'line2' => null,
        'postal_code' => null,
        'region' => null
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
        'city' => 'city',
        'country' => 'country',
        'line1' => 'line1',
        'line2' => 'line2',
        'postal_code' => 'postal_code',
        'region' => 'region'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'city' => 'setCity',
        'country' => 'setCountry',
        'line1' => 'setLine1',
        'line2' => 'setLine2',
        'postal_code' => 'setPostalCode',
        'region' => 'setRegion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'city' => 'getCity',
        'country' => 'getCountry',
        'line1' => 'getLine1',
        'line2' => 'getLine2',
        'postal_code' => 'getPostalCode',
        'region' => 'getRegion'
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

    public const COUNTRY_ABW = 'ABW';
    public const COUNTRY_AFG = 'AFG';
    public const COUNTRY_AGO = 'AGO';
    public const COUNTRY_AIA = 'AIA';
    public const COUNTRY_ALA = 'ALA';
    public const COUNTRY_ALB = 'ALB';
    public const COUNTRY__AND = 'AND';
    public const COUNTRY_ARE = 'ARE';
    public const COUNTRY_ARG = 'ARG';
    public const COUNTRY_ARM = 'ARM';
    public const COUNTRY_ASM = 'ASM';
    public const COUNTRY_ATA = 'ATA';
    public const COUNTRY_ATF = 'ATF';
    public const COUNTRY_ATG = 'ATG';
    public const COUNTRY_AUS = 'AUS';
    public const COUNTRY_AUT = 'AUT';
    public const COUNTRY_AZE = 'AZE';
    public const COUNTRY_BDI = 'BDI';
    public const COUNTRY_BEL = 'BEL';
    public const COUNTRY_BEN = 'BEN';
    public const COUNTRY_BES = 'BES';
    public const COUNTRY_BFA = 'BFA';
    public const COUNTRY_BGD = 'BGD';
    public const COUNTRY_BGR = 'BGR';
    public const COUNTRY_BHR = 'BHR';
    public const COUNTRY_BHS = 'BHS';
    public const COUNTRY_BIH = 'BIH';
    public const COUNTRY_BLM = 'BLM';
    public const COUNTRY_BLR = 'BLR';
    public const COUNTRY_BLZ = 'BLZ';
    public const COUNTRY_BMU = 'BMU';
    public const COUNTRY_BOL = 'BOL';
    public const COUNTRY_BRA = 'BRA';
    public const COUNTRY_BRB = 'BRB';
    public const COUNTRY_BRN = 'BRN';
    public const COUNTRY_BTN = 'BTN';
    public const COUNTRY_BVT = 'BVT';
    public const COUNTRY_BWA = 'BWA';
    public const COUNTRY_CAF = 'CAF';
    public const COUNTRY_CAN = 'CAN';
    public const COUNTRY_CCK = 'CCK';
    public const COUNTRY_CHE = 'CHE';
    public const COUNTRY_CHL = 'CHL';
    public const COUNTRY_CHN = 'CHN';
    public const COUNTRY_CIV = 'CIV';
    public const COUNTRY_CMR = 'CMR';
    public const COUNTRY_COD = 'COD';
    public const COUNTRY_COG = 'COG';
    public const COUNTRY_COK = 'COK';
    public const COUNTRY_COL = 'COL';
    public const COUNTRY_COM = 'COM';
    public const COUNTRY_CPV = 'CPV';
    public const COUNTRY_CRI = 'CRI';
    public const COUNTRY_CUB = 'CUB';
    public const COUNTRY_CUW = 'CUW';
    public const COUNTRY_CXR = 'CXR';
    public const COUNTRY_CYM = 'CYM';
    public const COUNTRY_CYP = 'CYP';
    public const COUNTRY_CZE = 'CZE';
    public const COUNTRY_DEU = 'DEU';
    public const COUNTRY_DJI = 'DJI';
    public const COUNTRY_DMA = 'DMA';
    public const COUNTRY_DNK = 'DNK';
    public const COUNTRY_DOM = 'DOM';
    public const COUNTRY_DZA = 'DZA';
    public const COUNTRY_ECU = 'ECU';
    public const COUNTRY_EGY = 'EGY';
    public const COUNTRY_ERI = 'ERI';
    public const COUNTRY_ESH = 'ESH';
    public const COUNTRY_ESP = 'ESP';
    public const COUNTRY_EST = 'EST';
    public const COUNTRY_ETH = 'ETH';
    public const COUNTRY_FIN = 'FIN';
    public const COUNTRY_FJI = 'FJI';
    public const COUNTRY_FLK = 'FLK';
    public const COUNTRY_FRA = 'FRA';
    public const COUNTRY_FRO = 'FRO';
    public const COUNTRY_FSM = 'FSM';
    public const COUNTRY_GAB = 'GAB';
    public const COUNTRY_GBR = 'GBR';
    public const COUNTRY_GEO = 'GEO';
    public const COUNTRY_GGY = 'GGY';
    public const COUNTRY_GHA = 'GHA';
    public const COUNTRY_GIB = 'GIB';
    public const COUNTRY_GIN = 'GIN';
    public const COUNTRY_GLP = 'GLP';
    public const COUNTRY_GMB = 'GMB';
    public const COUNTRY_GNB = 'GNB';
    public const COUNTRY_GNQ = 'GNQ';
    public const COUNTRY_GRC = 'GRC';
    public const COUNTRY_GRD = 'GRD';
    public const COUNTRY_GRL = 'GRL';
    public const COUNTRY_GTM = 'GTM';
    public const COUNTRY_GUF = 'GUF';
    public const COUNTRY_GUM = 'GUM';
    public const COUNTRY_GUY = 'GUY';
    public const COUNTRY_HKG = 'HKG';
    public const COUNTRY_HMD = 'HMD';
    public const COUNTRY_HND = 'HND';
    public const COUNTRY_HRV = 'HRV';
    public const COUNTRY_HTI = 'HTI';
    public const COUNTRY_HUN = 'HUN';
    public const COUNTRY_IDN = 'IDN';
    public const COUNTRY_IMN = 'IMN';
    public const COUNTRY_IND = 'IND';
    public const COUNTRY_IOT = 'IOT';
    public const COUNTRY_IRL = 'IRL';
    public const COUNTRY_IRN = 'IRN';
    public const COUNTRY_IRQ = 'IRQ';
    public const COUNTRY_ISL = 'ISL';
    public const COUNTRY_ISR = 'ISR';
    public const COUNTRY_ITA = 'ITA';
    public const COUNTRY_JAM = 'JAM';
    public const COUNTRY_JEY = 'JEY';
    public const COUNTRY_JOR = 'JOR';
    public const COUNTRY_JPN = 'JPN';
    public const COUNTRY_KAZ = 'KAZ';
    public const COUNTRY_KEN = 'KEN';
    public const COUNTRY_KGZ = 'KGZ';
    public const COUNTRY_KHM = 'KHM';
    public const COUNTRY_KIR = 'KIR';
    public const COUNTRY_KNA = 'KNA';
    public const COUNTRY_KOR = 'KOR';
    public const COUNTRY_KWT = 'KWT';
    public const COUNTRY_LAO = 'LAO';
    public const COUNTRY_LBN = 'LBN';
    public const COUNTRY_LBR = 'LBR';
    public const COUNTRY_LBY = 'LBY';
    public const COUNTRY_LCA = 'LCA';
    public const COUNTRY_LIE = 'LIE';
    public const COUNTRY_LKA = 'LKA';
    public const COUNTRY_LSO = 'LSO';
    public const COUNTRY_LTU = 'LTU';
    public const COUNTRY_LUX = 'LUX';
    public const COUNTRY_LVA = 'LVA';
    public const COUNTRY_MAC = 'MAC';
    public const COUNTRY_MAF = 'MAF';
    public const COUNTRY_MAR = 'MAR';
    public const COUNTRY_MCO = 'MCO';
    public const COUNTRY_MDA = 'MDA';
    public const COUNTRY_MDG = 'MDG';
    public const COUNTRY_MDV = 'MDV';
    public const COUNTRY_MEX = 'MEX';
    public const COUNTRY_MHL = 'MHL';
    public const COUNTRY_MKD = 'MKD';
    public const COUNTRY_MLI = 'MLI';
    public const COUNTRY_MLT = 'MLT';
    public const COUNTRY_MMR = 'MMR';
    public const COUNTRY_MNE = 'MNE';
    public const COUNTRY_MNG = 'MNG';
    public const COUNTRY_MNP = 'MNP';
    public const COUNTRY_MRT = 'MRT';
    public const COUNTRY_MSR = 'MSR';
    public const COUNTRY_MTQ = 'MTQ';
    public const COUNTRY_MUS = 'MUS';
    public const COUNTRY_MWI = 'MWI';
    public const COUNTRY_MYS = 'MYS';
    public const COUNTRY_MYT = 'MYT';
    public const COUNTRY_NAM = 'NAM';
    public const COUNTRY_NCL = 'NCL';
    public const COUNTRY_NER = 'NER';
    public const COUNTRY_NFK = 'NFK';
    public const COUNTRY_NGA = 'NGA';
    public const COUNTRY_NIC = 'NIC';
    public const COUNTRY_NIU = 'NIU';
    public const COUNTRY_NLD = 'NLD';
    public const COUNTRY_NOR = 'NOR';
    public const COUNTRY_NPL = 'NPL';
    public const COUNTRY_NRU = 'NRU';
    public const COUNTRY_NZL = 'NZL';
    public const COUNTRY_OMN = 'OMN';
    public const COUNTRY_PAK = 'PAK';
    public const COUNTRY_PAN = 'PAN';
    public const COUNTRY_PCN = 'PCN';
    public const COUNTRY_PER = 'PER';
    public const COUNTRY_PHL = 'PHL';
    public const COUNTRY_PLW = 'PLW';
    public const COUNTRY_PNG = 'PNG';
    public const COUNTRY_POL = 'POL';
    public const COUNTRY_PRI = 'PRI';
    public const COUNTRY_PRK = 'PRK';
    public const COUNTRY_PRT = 'PRT';
    public const COUNTRY_PRY = 'PRY';
    public const COUNTRY_PSE = 'PSE';
    public const COUNTRY_PYF = 'PYF';
    public const COUNTRY_QAT = 'QAT';
    public const COUNTRY_REU = 'REU';
    public const COUNTRY_ROU = 'ROU';
    public const COUNTRY_RUS = 'RUS';
    public const COUNTRY_RWA = 'RWA';
    public const COUNTRY_SAU = 'SAU';
    public const COUNTRY_SDN = 'SDN';
    public const COUNTRY_SEN = 'SEN';
    public const COUNTRY_SGP = 'SGP';
    public const COUNTRY_SGS = 'SGS';
    public const COUNTRY_SHN = 'SHN';
    public const COUNTRY_SJM = 'SJM';
    public const COUNTRY_SLB = 'SLB';
    public const COUNTRY_SLE = 'SLE';
    public const COUNTRY_SLV = 'SLV';
    public const COUNTRY_SMR = 'SMR';
    public const COUNTRY_SOM = 'SOM';
    public const COUNTRY_SPM = 'SPM';
    public const COUNTRY_SRB = 'SRB';
    public const COUNTRY_SSD = 'SSD';
    public const COUNTRY_STP = 'STP';
    public const COUNTRY_SUR = 'SUR';
    public const COUNTRY_SVK = 'SVK';
    public const COUNTRY_SVN = 'SVN';
    public const COUNTRY_SWE = 'SWE';
    public const COUNTRY_SWZ = 'SWZ';
    public const COUNTRY_SXM = 'SXM';
    public const COUNTRY_SYC = 'SYC';
    public const COUNTRY_SYR = 'SYR';
    public const COUNTRY_TCA = 'TCA';
    public const COUNTRY_TCD = 'TCD';
    public const COUNTRY_TGO = 'TGO';
    public const COUNTRY_THA = 'THA';
    public const COUNTRY_TJK = 'TJK';
    public const COUNTRY_TKL = 'TKL';
    public const COUNTRY_TKM = 'TKM';
    public const COUNTRY_TLS = 'TLS';
    public const COUNTRY_TON = 'TON';
    public const COUNTRY_TTO = 'TTO';
    public const COUNTRY_TUN = 'TUN';
    public const COUNTRY_TUR = 'TUR';
    public const COUNTRY_TUV = 'TUV';
    public const COUNTRY_TWN = 'TWN';
    public const COUNTRY_TZA = 'TZA';
    public const COUNTRY_UGA = 'UGA';
    public const COUNTRY_UKR = 'UKR';
    public const COUNTRY_UMI = 'UMI';
    public const COUNTRY_URY = 'URY';
    public const COUNTRY_USA = 'USA';
    public const COUNTRY_UZB = 'UZB';
    public const COUNTRY_VAT = 'VAT';
    public const COUNTRY_VCT = 'VCT';
    public const COUNTRY_VEN = 'VEN';
    public const COUNTRY_VGB = 'VGB';
    public const COUNTRY_VIR = 'VIR';
    public const COUNTRY_VNM = 'VNM';
    public const COUNTRY_VUT = 'VUT';
    public const COUNTRY_WLF = 'WLF';
    public const COUNTRY_WSM = 'WSM';
    public const COUNTRY_XKX = 'XKX';
    public const COUNTRY_YEM = 'YEM';
    public const COUNTRY_ZAF = 'ZAF';
    public const COUNTRY_ZMB = 'ZMB';
    public const COUNTRY_ZWE = 'ZWE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCountryAllowableValues()
    {
        return [
            self::COUNTRY_ABW,
            self::COUNTRY_AFG,
            self::COUNTRY_AGO,
            self::COUNTRY_AIA,
            self::COUNTRY_ALA,
            self::COUNTRY_ALB,
            self::COUNTRY__AND,
            self::COUNTRY_ARE,
            self::COUNTRY_ARG,
            self::COUNTRY_ARM,
            self::COUNTRY_ASM,
            self::COUNTRY_ATA,
            self::COUNTRY_ATF,
            self::COUNTRY_ATG,
            self::COUNTRY_AUS,
            self::COUNTRY_AUT,
            self::COUNTRY_AZE,
            self::COUNTRY_BDI,
            self::COUNTRY_BEL,
            self::COUNTRY_BEN,
            self::COUNTRY_BES,
            self::COUNTRY_BFA,
            self::COUNTRY_BGD,
            self::COUNTRY_BGR,
            self::COUNTRY_BHR,
            self::COUNTRY_BHS,
            self::COUNTRY_BIH,
            self::COUNTRY_BLM,
            self::COUNTRY_BLR,
            self::COUNTRY_BLZ,
            self::COUNTRY_BMU,
            self::COUNTRY_BOL,
            self::COUNTRY_BRA,
            self::COUNTRY_BRB,
            self::COUNTRY_BRN,
            self::COUNTRY_BTN,
            self::COUNTRY_BVT,
            self::COUNTRY_BWA,
            self::COUNTRY_CAF,
            self::COUNTRY_CAN,
            self::COUNTRY_CCK,
            self::COUNTRY_CHE,
            self::COUNTRY_CHL,
            self::COUNTRY_CHN,
            self::COUNTRY_CIV,
            self::COUNTRY_CMR,
            self::COUNTRY_COD,
            self::COUNTRY_COG,
            self::COUNTRY_COK,
            self::COUNTRY_COL,
            self::COUNTRY_COM,
            self::COUNTRY_CPV,
            self::COUNTRY_CRI,
            self::COUNTRY_CUB,
            self::COUNTRY_CUW,
            self::COUNTRY_CXR,
            self::COUNTRY_CYM,
            self::COUNTRY_CYP,
            self::COUNTRY_CZE,
            self::COUNTRY_DEU,
            self::COUNTRY_DJI,
            self::COUNTRY_DMA,
            self::COUNTRY_DNK,
            self::COUNTRY_DOM,
            self::COUNTRY_DZA,
            self::COUNTRY_ECU,
            self::COUNTRY_EGY,
            self::COUNTRY_ERI,
            self::COUNTRY_ESH,
            self::COUNTRY_ESP,
            self::COUNTRY_EST,
            self::COUNTRY_ETH,
            self::COUNTRY_FIN,
            self::COUNTRY_FJI,
            self::COUNTRY_FLK,
            self::COUNTRY_FRA,
            self::COUNTRY_FRO,
            self::COUNTRY_FSM,
            self::COUNTRY_GAB,
            self::COUNTRY_GBR,
            self::COUNTRY_GEO,
            self::COUNTRY_GGY,
            self::COUNTRY_GHA,
            self::COUNTRY_GIB,
            self::COUNTRY_GIN,
            self::COUNTRY_GLP,
            self::COUNTRY_GMB,
            self::COUNTRY_GNB,
            self::COUNTRY_GNQ,
            self::COUNTRY_GRC,
            self::COUNTRY_GRD,
            self::COUNTRY_GRL,
            self::COUNTRY_GTM,
            self::COUNTRY_GUF,
            self::COUNTRY_GUM,
            self::COUNTRY_GUY,
            self::COUNTRY_HKG,
            self::COUNTRY_HMD,
            self::COUNTRY_HND,
            self::COUNTRY_HRV,
            self::COUNTRY_HTI,
            self::COUNTRY_HUN,
            self::COUNTRY_IDN,
            self::COUNTRY_IMN,
            self::COUNTRY_IND,
            self::COUNTRY_IOT,
            self::COUNTRY_IRL,
            self::COUNTRY_IRN,
            self::COUNTRY_IRQ,
            self::COUNTRY_ISL,
            self::COUNTRY_ISR,
            self::COUNTRY_ITA,
            self::COUNTRY_JAM,
            self::COUNTRY_JEY,
            self::COUNTRY_JOR,
            self::COUNTRY_JPN,
            self::COUNTRY_KAZ,
            self::COUNTRY_KEN,
            self::COUNTRY_KGZ,
            self::COUNTRY_KHM,
            self::COUNTRY_KIR,
            self::COUNTRY_KNA,
            self::COUNTRY_KOR,
            self::COUNTRY_KWT,
            self::COUNTRY_LAO,
            self::COUNTRY_LBN,
            self::COUNTRY_LBR,
            self::COUNTRY_LBY,
            self::COUNTRY_LCA,
            self::COUNTRY_LIE,
            self::COUNTRY_LKA,
            self::COUNTRY_LSO,
            self::COUNTRY_LTU,
            self::COUNTRY_LUX,
            self::COUNTRY_LVA,
            self::COUNTRY_MAC,
            self::COUNTRY_MAF,
            self::COUNTRY_MAR,
            self::COUNTRY_MCO,
            self::COUNTRY_MDA,
            self::COUNTRY_MDG,
            self::COUNTRY_MDV,
            self::COUNTRY_MEX,
            self::COUNTRY_MHL,
            self::COUNTRY_MKD,
            self::COUNTRY_MLI,
            self::COUNTRY_MLT,
            self::COUNTRY_MMR,
            self::COUNTRY_MNE,
            self::COUNTRY_MNG,
            self::COUNTRY_MNP,
            self::COUNTRY_MRT,
            self::COUNTRY_MSR,
            self::COUNTRY_MTQ,
            self::COUNTRY_MUS,
            self::COUNTRY_MWI,
            self::COUNTRY_MYS,
            self::COUNTRY_MYT,
            self::COUNTRY_NAM,
            self::COUNTRY_NCL,
            self::COUNTRY_NER,
            self::COUNTRY_NFK,
            self::COUNTRY_NGA,
            self::COUNTRY_NIC,
            self::COUNTRY_NIU,
            self::COUNTRY_NLD,
            self::COUNTRY_NOR,
            self::COUNTRY_NPL,
            self::COUNTRY_NRU,
            self::COUNTRY_NZL,
            self::COUNTRY_OMN,
            self::COUNTRY_PAK,
            self::COUNTRY_PAN,
            self::COUNTRY_PCN,
            self::COUNTRY_PER,
            self::COUNTRY_PHL,
            self::COUNTRY_PLW,
            self::COUNTRY_PNG,
            self::COUNTRY_POL,
            self::COUNTRY_PRI,
            self::COUNTRY_PRK,
            self::COUNTRY_PRT,
            self::COUNTRY_PRY,
            self::COUNTRY_PSE,
            self::COUNTRY_PYF,
            self::COUNTRY_QAT,
            self::COUNTRY_REU,
            self::COUNTRY_ROU,
            self::COUNTRY_RUS,
            self::COUNTRY_RWA,
            self::COUNTRY_SAU,
            self::COUNTRY_SDN,
            self::COUNTRY_SEN,
            self::COUNTRY_SGP,
            self::COUNTRY_SGS,
            self::COUNTRY_SHN,
            self::COUNTRY_SJM,
            self::COUNTRY_SLB,
            self::COUNTRY_SLE,
            self::COUNTRY_SLV,
            self::COUNTRY_SMR,
            self::COUNTRY_SOM,
            self::COUNTRY_SPM,
            self::COUNTRY_SRB,
            self::COUNTRY_SSD,
            self::COUNTRY_STP,
            self::COUNTRY_SUR,
            self::COUNTRY_SVK,
            self::COUNTRY_SVN,
            self::COUNTRY_SWE,
            self::COUNTRY_SWZ,
            self::COUNTRY_SXM,
            self::COUNTRY_SYC,
            self::COUNTRY_SYR,
            self::COUNTRY_TCA,
            self::COUNTRY_TCD,
            self::COUNTRY_TGO,
            self::COUNTRY_THA,
            self::COUNTRY_TJK,
            self::COUNTRY_TKL,
            self::COUNTRY_TKM,
            self::COUNTRY_TLS,
            self::COUNTRY_TON,
            self::COUNTRY_TTO,
            self::COUNTRY_TUN,
            self::COUNTRY_TUR,
            self::COUNTRY_TUV,
            self::COUNTRY_TWN,
            self::COUNTRY_TZA,
            self::COUNTRY_UGA,
            self::COUNTRY_UKR,
            self::COUNTRY_UMI,
            self::COUNTRY_URY,
            self::COUNTRY_USA,
            self::COUNTRY_UZB,
            self::COUNTRY_VAT,
            self::COUNTRY_VCT,
            self::COUNTRY_VEN,
            self::COUNTRY_VGB,
            self::COUNTRY_VIR,
            self::COUNTRY_VNM,
            self::COUNTRY_VUT,
            self::COUNTRY_WLF,
            self::COUNTRY_WSM,
            self::COUNTRY_XKX,
            self::COUNTRY_YEM,
            self::COUNTRY_ZAF,
            self::COUNTRY_ZMB,
            self::COUNTRY_ZWE,
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
        $this->container['city'] = $data['city'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['line1'] = $data['line1'] ?? null;
        $this->container['line2'] = $data['line2'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        $allowedValues = $this->getCountryAllowableValues();
        if (!is_null($this->container['country']) && !in_array($this->container['country'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'country', must be one of '%s'",
                $this->container['country'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['line1'] === null) {
            $invalidProperties[] = "'line1' can't be null";
        }
        if ($this->container['postal_code'] === null) {
            $invalidProperties[] = "'postal_code' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
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
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city City (max 20 characters).
     *
     * @return self
     */
    public function setCity($city, $deserialize = false)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country 3-Letter Country code.
     *
     * @return self
     */
    public function setCountry($country, $deserialize = false)
    {
        $allowedValues = $this->getCountryAllowableValues();
        if (!in_array($country, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'country', must be one of '%s'",
                    $country,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets line1
     *
     * @return string
     */
    public function getLine1()
    {
        return $this->container['line1'];
    }

    /**
     * Sets line1
     *
     * @param string $line1 First line of the address (max 35 characters).
     *
     * @return self
     */
    public function setLine1($line1, $deserialize = false)
    {
        $this->container['line1'] = $line1;

        return $this;
    }

    /**
     * Gets line2
     *
     * @return string|null
     */
    public function getLine2()
    {
        return $this->container['line2'];
    }

    /**
     * Sets line2
     *
     * @param string|null $line2 Second line of the address (max 35 characters).
     *
     * @return self
     */
    public function setLine2($line2, $deserialize = false)
    {
        $this->container['line2'] = $line2;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code Zip or Postal code (max 7 characters).
     *
     * @return self
     */
    public function setPostalCode($postal_code, $deserialize = false)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region 2-letter State code.
     *
     * @return self
     */
    public function setRegion($region, $deserialize = false)
    {
        $this->container['region'] = $region;

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



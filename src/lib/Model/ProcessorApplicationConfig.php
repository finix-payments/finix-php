<?php
/**
 * ProcessorApplicationConfig
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
 * ProcessorApplicationConfig Class Doc Comment
 *
 * @category Class
 * @description Details that configure how the &#x60;Processor&#x60; handles transactions.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProcessorApplicationConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Processor_application_config';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ach_settlement_delay_days' => 'int',
        'allow_split_payouts' => 'bool',
        'allowed_business_application_ids' => 'string[]',
        'card_acceptor_id_code' => 'string',
        'card_acceptor_terminal_id' => 'string',
        'configuration_templates' => '\Finix\Model\ProcessorApplicationConfigConfigurationTemplates',
        'default_currencies' => '\Finix\Model\Currency[]',
        'default_mcc' => 'string',
        'default_sender_account_number' => 'string',
        'default_sender_address' => 'string',
        'default_sender_city' => 'string',
        'default_sender_country' => '\Finix\Model\Country',
        'default_sender_country_code' => 'string',
        'default_sender_county_code' => 'string',
        'default_sender_name' => 'string',
        'default_sender_state_code' => 'string',
        'default_sender_zip_code' => 'string',
        'include_colombia_data' => 'bool',
        'moto_eciindicator' => 'string',
        'pan_entry_mode' => 'string',
        'pos_condition_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ach_settlement_delay_days' => null,
        'allow_split_payouts' => null,
        'allowed_business_application_ids' => null,
        'card_acceptor_id_code' => null,
        'card_acceptor_terminal_id' => null,
        'configuration_templates' => null,
        'default_currencies' => null,
        'default_mcc' => null,
        'default_sender_account_number' => null,
        'default_sender_address' => null,
        'default_sender_city' => null,
        'default_sender_country' => null,
        'default_sender_country_code' => null,
        'default_sender_county_code' => null,
        'default_sender_name' => null,
        'default_sender_state_code' => null,
        'default_sender_zip_code' => null,
        'include_colombia_data' => null,
        'moto_eciindicator' => null,
        'pan_entry_mode' => null,
        'pos_condition_code' => null
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
        'ach_settlement_delay_days' => 'ach_settlement_delay_days',
        'allow_split_payouts' => 'allow_split_payouts',
        'allowed_business_application_ids' => 'allowed_business_application_ids',
        'card_acceptor_id_code' => 'card_acceptor_id_code',
        'card_acceptor_terminal_id' => 'card_acceptor_terminal_id',
        'configuration_templates' => 'configuration_templates',
        'default_currencies' => 'default_currencies',
        'default_mcc' => 'default_mcc',
        'default_sender_account_number' => 'default_sender_account_number',
        'default_sender_address' => 'default_sender_address',
        'default_sender_city' => 'default_sender_city',
        'default_sender_country' => 'default_sender_country',
        'default_sender_country_code' => 'default_sender_country_code',
        'default_sender_county_code' => 'default_sender_county_code',
        'default_sender_name' => 'default_sender_name',
        'default_sender_state_code' => 'default_sender_state_code',
        'default_sender_zip_code' => 'default_sender_zip_code',
        'include_colombia_data' => 'include_colombia_data',
        'moto_eciindicator' => 'moto_eciindicator',
        'pan_entry_mode' => 'pan_entry_mode',
        'pos_condition_code' => 'pos_condition_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ach_settlement_delay_days' => 'setAchSettlementDelayDays',
        'allow_split_payouts' => 'setAllowSplitPayouts',
        'allowed_business_application_ids' => 'setAllowedBusinessApplicationIds',
        'card_acceptor_id_code' => 'setCardAcceptorIdCode',
        'card_acceptor_terminal_id' => 'setCardAcceptorTerminalId',
        'configuration_templates' => 'setConfigurationTemplates',
        'default_currencies' => 'setDefaultCurrencies',
        'default_mcc' => 'setDefaultMcc',
        'default_sender_account_number' => 'setDefaultSenderAccountNumber',
        'default_sender_address' => 'setDefaultSenderAddress',
        'default_sender_city' => 'setDefaultSenderCity',
        'default_sender_country' => 'setDefaultSenderCountry',
        'default_sender_country_code' => 'setDefaultSenderCountryCode',
        'default_sender_county_code' => 'setDefaultSenderCountyCode',
        'default_sender_name' => 'setDefaultSenderName',
        'default_sender_state_code' => 'setDefaultSenderStateCode',
        'default_sender_zip_code' => 'setDefaultSenderZipCode',
        'include_colombia_data' => 'setIncludeColombiaData',
        'moto_eciindicator' => 'setMotoEciindicator',
        'pan_entry_mode' => 'setPanEntryMode',
        'pos_condition_code' => 'setPosConditionCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ach_settlement_delay_days' => 'getAchSettlementDelayDays',
        'allow_split_payouts' => 'getAllowSplitPayouts',
        'allowed_business_application_ids' => 'getAllowedBusinessApplicationIds',
        'card_acceptor_id_code' => 'getCardAcceptorIdCode',
        'card_acceptor_terminal_id' => 'getCardAcceptorTerminalId',
        'configuration_templates' => 'getConfigurationTemplates',
        'default_currencies' => 'getDefaultCurrencies',
        'default_mcc' => 'getDefaultMcc',
        'default_sender_account_number' => 'getDefaultSenderAccountNumber',
        'default_sender_address' => 'getDefaultSenderAddress',
        'default_sender_city' => 'getDefaultSenderCity',
        'default_sender_country' => 'getDefaultSenderCountry',
        'default_sender_country_code' => 'getDefaultSenderCountryCode',
        'default_sender_county_code' => 'getDefaultSenderCountyCode',
        'default_sender_name' => 'getDefaultSenderName',
        'default_sender_state_code' => 'getDefaultSenderStateCode',
        'default_sender_zip_code' => 'getDefaultSenderZipCode',
        'include_colombia_data' => 'getIncludeColombiaData',
        'moto_eciindicator' => 'getMotoEciindicator',
        'pan_entry_mode' => 'getPanEntryMode',
        'pos_condition_code' => 'getPosConditionCode'
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

    public const ALLOWED_BUSINESS_APPLICATION_IDS_AA = 'AA';
    public const ALLOWED_BUSINESS_APPLICATION_IDS_BB = 'BB';
    public const ALLOWED_BUSINESS_APPLICATION_IDS_BI = 'BI';
    public const ALLOWED_BUSINESS_APPLICATION_IDS_CP = 'CP';
    public const ALLOWED_BUSINESS_APPLICATION_IDS_FD = 'FD';
    public const ALLOWED_BUSINESS_APPLICATION_IDS_FT = 'FT';
    public const ALLOWED_BUSINESS_APPLICATION_IDS_GD = 'GD';
    public const ALLOWED_BUSINESS_APPLICATION_IDS_GP = 'GP';
    public const ALLOWED_BUSINESS_APPLICATION_IDS_LO = 'LO';
    public const ALLOWED_BUSINESS_APPLICATION_IDS_CI = 'CI';
    public const ALLOWED_BUSINESS_APPLICATION_IDS_CO = 'CO';
    public const ALLOWED_BUSINESS_APPLICATION_IDS_MP = 'MP';
    public const ALLOWED_BUSINESS_APPLICATION_IDS_MD = 'MD';
    public const ALLOWED_BUSINESS_APPLICATION_IDS_OG = 'OG';
    public const ALLOWED_BUSINESS_APPLICATION_IDS_PD = 'PD';
    public const ALLOWED_BUSINESS_APPLICATION_IDS_PP = 'PP';
    public const ALLOWED_BUSINESS_APPLICATION_IDS_TU = 'TU';
    public const ALLOWED_BUSINESS_APPLICATION_IDS_WT = 'WT';
    public const DEFAULT_MCC__0742 = '0742';
    public const DEFAULT_MCC__0763 = '0763';
    public const DEFAULT_MCC__0780 = '0780';
    public const DEFAULT_MCC__1520 = '1520';
    public const DEFAULT_MCC__1711 = '1711';
    public const DEFAULT_MCC__1731 = '1731';
    public const DEFAULT_MCC__1740 = '1740';
    public const DEFAULT_MCC__1750 = '1750';
    public const DEFAULT_MCC__1761 = '1761';
    public const DEFAULT_MCC__1771 = '1771';
    public const DEFAULT_MCC__1799 = '1799';
    public const DEFAULT_MCC__2741 = '2741';
    public const DEFAULT_MCC__2791 = '2791';
    public const DEFAULT_MCC__2842 = '2842';
    public const DEFAULT_MCC__3000 = '3000';
    public const DEFAULT_MCC__3001 = '3001';
    public const DEFAULT_MCC__3002 = '3002';
    public const DEFAULT_MCC__3003 = '3003';
    public const DEFAULT_MCC__3004 = '3004';
    public const DEFAULT_MCC__3005 = '3005';
    public const DEFAULT_MCC__3006 = '3006';
    public const DEFAULT_MCC__3007 = '3007';
    public const DEFAULT_MCC__3008 = '3008';
    public const DEFAULT_MCC__3009 = '3009';
    public const DEFAULT_MCC__3010 = '3010';
    public const DEFAULT_MCC__3011 = '3011';
    public const DEFAULT_MCC__3012 = '3012';
    public const DEFAULT_MCC__3013 = '3013';
    public const DEFAULT_MCC__3014 = '3014';
    public const DEFAULT_MCC__3015 = '3015';
    public const DEFAULT_MCC__3016 = '3016';
    public const DEFAULT_MCC__3017 = '3017';
    public const DEFAULT_MCC__3018 = '3018';
    public const DEFAULT_MCC__3019 = '3019';
    public const DEFAULT_MCC__3020 = '3020';
    public const DEFAULT_MCC__3021 = '3021';
    public const DEFAULT_MCC__3022 = '3022';
    public const DEFAULT_MCC__3023 = '3023';
    public const DEFAULT_MCC__3024 = '3024';
    public const DEFAULT_MCC__3025 = '3025';
    public const DEFAULT_MCC__3026 = '3026';
    public const DEFAULT_MCC__3027 = '3027';
    public const DEFAULT_MCC__3028 = '3028';
    public const DEFAULT_MCC__3029 = '3029';
    public const DEFAULT_MCC__3030 = '3030';
    public const DEFAULT_MCC__3031 = '3031';
    public const DEFAULT_MCC__3032 = '3032';
    public const DEFAULT_MCC__3033 = '3033';
    public const DEFAULT_MCC__3034 = '3034';
    public const DEFAULT_MCC__3035 = '3035';
    public const DEFAULT_MCC__3036 = '3036';
    public const DEFAULT_MCC__3037 = '3037';
    public const DEFAULT_MCC__3038 = '3038';
    public const DEFAULT_MCC__3039 = '3039';
    public const DEFAULT_MCC__3040 = '3040';
    public const DEFAULT_MCC__3041 = '3041';
    public const DEFAULT_MCC__3042 = '3042';
    public const DEFAULT_MCC__3043 = '3043';
    public const DEFAULT_MCC__3044 = '3044';
    public const DEFAULT_MCC__3045 = '3045';
    public const DEFAULT_MCC__3046 = '3046';
    public const DEFAULT_MCC__3047 = '3047';
    public const DEFAULT_MCC__3048 = '3048';
    public const DEFAULT_MCC__3049 = '3049';
    public const DEFAULT_MCC__3050 = '3050';
    public const DEFAULT_MCC__3051 = '3051';
    public const DEFAULT_MCC__3052 = '3052';
    public const DEFAULT_MCC__3053 = '3053';
    public const DEFAULT_MCC__3054 = '3054';
    public const DEFAULT_MCC__3055 = '3055';
    public const DEFAULT_MCC__3056 = '3056';
    public const DEFAULT_MCC__3057 = '3057';
    public const DEFAULT_MCC__3058 = '3058';
    public const DEFAULT_MCC__3059 = '3059';
    public const DEFAULT_MCC__3060 = '3060';
    public const DEFAULT_MCC__3061 = '3061';
    public const DEFAULT_MCC__3062 = '3062';
    public const DEFAULT_MCC__3063 = '3063';
    public const DEFAULT_MCC__3064 = '3064';
    public const DEFAULT_MCC__3065 = '3065';
    public const DEFAULT_MCC__3066 = '3066';
    public const DEFAULT_MCC__3067 = '3067';
    public const DEFAULT_MCC__3068 = '3068';
    public const DEFAULT_MCC__3069 = '3069';
    public const DEFAULT_MCC__3070 = '3070';
    public const DEFAULT_MCC__3071 = '3071';
    public const DEFAULT_MCC__3072 = '3072';
    public const DEFAULT_MCC__3073 = '3073';
    public const DEFAULT_MCC__3074 = '3074';
    public const DEFAULT_MCC__3075 = '3075';
    public const DEFAULT_MCC__3076 = '3076';
    public const DEFAULT_MCC__3077 = '3077';
    public const DEFAULT_MCC__3078 = '3078';
    public const DEFAULT_MCC__3079 = '3079';
    public const DEFAULT_MCC__3080 = '3080';
    public const DEFAULT_MCC__3081 = '3081';
    public const DEFAULT_MCC__3082 = '3082';
    public const DEFAULT_MCC__3083 = '3083';
    public const DEFAULT_MCC__3084 = '3084';
    public const DEFAULT_MCC__3085 = '3085';
    public const DEFAULT_MCC__3086 = '3086';
    public const DEFAULT_MCC__3087 = '3087';
    public const DEFAULT_MCC__3088 = '3088';
    public const DEFAULT_MCC__3089 = '3089';
    public const DEFAULT_MCC__3090 = '3090';
    public const DEFAULT_MCC__3091 = '3091';
    public const DEFAULT_MCC__3092 = '3092';
    public const DEFAULT_MCC__3093 = '3093';
    public const DEFAULT_MCC__3094 = '3094';
    public const DEFAULT_MCC__3095 = '3095';
    public const DEFAULT_MCC__3096 = '3096';
    public const DEFAULT_MCC__3097 = '3097';
    public const DEFAULT_MCC__3098 = '3098';
    public const DEFAULT_MCC__3099 = '3099';
    public const DEFAULT_MCC__3100 = '3100';
    public const DEFAULT_MCC__3101 = '3101';
    public const DEFAULT_MCC__3102 = '3102';
    public const DEFAULT_MCC__3103 = '3103';
    public const DEFAULT_MCC__3104 = '3104';
    public const DEFAULT_MCC__3105 = '3105';
    public const DEFAULT_MCC__3106 = '3106';
    public const DEFAULT_MCC__3107 = '3107';
    public const DEFAULT_MCC__3108 = '3108';
    public const DEFAULT_MCC__3109 = '3109';
    public const DEFAULT_MCC__3110 = '3110';
    public const DEFAULT_MCC__3111 = '3111';
    public const DEFAULT_MCC__3112 = '3112';
    public const DEFAULT_MCC__3113 = '3113';
    public const DEFAULT_MCC__3114 = '3114';
    public const DEFAULT_MCC__3115 = '3115';
    public const DEFAULT_MCC__3116 = '3116';
    public const DEFAULT_MCC__3117 = '3117';
    public const DEFAULT_MCC__3118 = '3118';
    public const DEFAULT_MCC__3119 = '3119';
    public const DEFAULT_MCC__3120 = '3120';
    public const DEFAULT_MCC__3121 = '3121';
    public const DEFAULT_MCC__3122 = '3122';
    public const DEFAULT_MCC__3123 = '3123';
    public const DEFAULT_MCC__3124 = '3124';
    public const DEFAULT_MCC__3125 = '3125';
    public const DEFAULT_MCC__3126 = '3126';
    public const DEFAULT_MCC__3127 = '3127';
    public const DEFAULT_MCC__3128 = '3128';
    public const DEFAULT_MCC__3129 = '3129';
    public const DEFAULT_MCC__3130 = '3130';
    public const DEFAULT_MCC__3131 = '3131';
    public const DEFAULT_MCC__3132 = '3132';
    public const DEFAULT_MCC__3133 = '3133';
    public const DEFAULT_MCC__3134 = '3134';
    public const DEFAULT_MCC__3135 = '3135';
    public const DEFAULT_MCC__3136 = '3136';
    public const DEFAULT_MCC__3137 = '3137';
    public const DEFAULT_MCC__3138 = '3138';
    public const DEFAULT_MCC__3139 = '3139';
    public const DEFAULT_MCC__3140 = '3140';
    public const DEFAULT_MCC__3141 = '3141';
    public const DEFAULT_MCC__3142 = '3142';
    public const DEFAULT_MCC__3143 = '3143';
    public const DEFAULT_MCC__3144 = '3144';
    public const DEFAULT_MCC__3145 = '3145';
    public const DEFAULT_MCC__3146 = '3146';
    public const DEFAULT_MCC__3147 = '3147';
    public const DEFAULT_MCC__3148 = '3148';
    public const DEFAULT_MCC__3149 = '3149';
    public const DEFAULT_MCC__3150 = '3150';
    public const DEFAULT_MCC__3151 = '3151';
    public const DEFAULT_MCC__3152 = '3152';
    public const DEFAULT_MCC__3153 = '3153';
    public const DEFAULT_MCC__3154 = '3154';
    public const DEFAULT_MCC__3155 = '3155';
    public const DEFAULT_MCC__3156 = '3156';
    public const DEFAULT_MCC__3157 = '3157';
    public const DEFAULT_MCC__3158 = '3158';
    public const DEFAULT_MCC__3159 = '3159';
    public const DEFAULT_MCC__3160 = '3160';
    public const DEFAULT_MCC__3161 = '3161';
    public const DEFAULT_MCC__3162 = '3162';
    public const DEFAULT_MCC__3163 = '3163';
    public const DEFAULT_MCC__3164 = '3164';
    public const DEFAULT_MCC__3165 = '3165';
    public const DEFAULT_MCC__3166 = '3166';
    public const DEFAULT_MCC__3167 = '3167';
    public const DEFAULT_MCC__3168 = '3168';
    public const DEFAULT_MCC__3169 = '3169';
    public const DEFAULT_MCC__3170 = '3170';
    public const DEFAULT_MCC__3171 = '3171';
    public const DEFAULT_MCC__3172 = '3172';
    public const DEFAULT_MCC__3173 = '3173';
    public const DEFAULT_MCC__3174 = '3174';
    public const DEFAULT_MCC__3175 = '3175';
    public const DEFAULT_MCC__3176 = '3176';
    public const DEFAULT_MCC__3177 = '3177';
    public const DEFAULT_MCC__3178 = '3178';
    public const DEFAULT_MCC__3179 = '3179';
    public const DEFAULT_MCC__3180 = '3180';
    public const DEFAULT_MCC__3181 = '3181';
    public const DEFAULT_MCC__3182 = '3182';
    public const DEFAULT_MCC__3183 = '3183';
    public const DEFAULT_MCC__3184 = '3184';
    public const DEFAULT_MCC__3185 = '3185';
    public const DEFAULT_MCC__3186 = '3186';
    public const DEFAULT_MCC__3187 = '3187';
    public const DEFAULT_MCC__3188 = '3188';
    public const DEFAULT_MCC__3189 = '3189';
    public const DEFAULT_MCC__3190 = '3190';
    public const DEFAULT_MCC__3191 = '3191';
    public const DEFAULT_MCC__3192 = '3192';
    public const DEFAULT_MCC__3193 = '3193';
    public const DEFAULT_MCC__3194 = '3194';
    public const DEFAULT_MCC__3195 = '3195';
    public const DEFAULT_MCC__3196 = '3196';
    public const DEFAULT_MCC__3197 = '3197';
    public const DEFAULT_MCC__3198 = '3198';
    public const DEFAULT_MCC__3199 = '3199';
    public const DEFAULT_MCC__3200 = '3200';
    public const DEFAULT_MCC__3201 = '3201';
    public const DEFAULT_MCC__3202 = '3202';
    public const DEFAULT_MCC__3203 = '3203';
    public const DEFAULT_MCC__3204 = '3204';
    public const DEFAULT_MCC__3205 = '3205';
    public const DEFAULT_MCC__3206 = '3206';
    public const DEFAULT_MCC__3207 = '3207';
    public const DEFAULT_MCC__3208 = '3208';
    public const DEFAULT_MCC__3209 = '3209';
    public const DEFAULT_MCC__3210 = '3210';
    public const DEFAULT_MCC__3211 = '3211';
    public const DEFAULT_MCC__3212 = '3212';
    public const DEFAULT_MCC__3213 = '3213';
    public const DEFAULT_MCC__3214 = '3214';
    public const DEFAULT_MCC__3215 = '3215';
    public const DEFAULT_MCC__3216 = '3216';
    public const DEFAULT_MCC__3217 = '3217';
    public const DEFAULT_MCC__3218 = '3218';
    public const DEFAULT_MCC__3219 = '3219';
    public const DEFAULT_MCC__3220 = '3220';
    public const DEFAULT_MCC__3221 = '3221';
    public const DEFAULT_MCC__3222 = '3222';
    public const DEFAULT_MCC__3223 = '3223';
    public const DEFAULT_MCC__3224 = '3224';
    public const DEFAULT_MCC__3225 = '3225';
    public const DEFAULT_MCC__3226 = '3226';
    public const DEFAULT_MCC__3227 = '3227';
    public const DEFAULT_MCC__3228 = '3228';
    public const DEFAULT_MCC__3229 = '3229';
    public const DEFAULT_MCC__3230 = '3230';
    public const DEFAULT_MCC__3231 = '3231';
    public const DEFAULT_MCC__3232 = '3232';
    public const DEFAULT_MCC__3233 = '3233';
    public const DEFAULT_MCC__3234 = '3234';
    public const DEFAULT_MCC__3235 = '3235';
    public const DEFAULT_MCC__3236 = '3236';
    public const DEFAULT_MCC__3237 = '3237';
    public const DEFAULT_MCC__3238 = '3238';
    public const DEFAULT_MCC__3239 = '3239';
    public const DEFAULT_MCC__3240 = '3240';
    public const DEFAULT_MCC__3241 = '3241';
    public const DEFAULT_MCC__3242 = '3242';
    public const DEFAULT_MCC__3243 = '3243';
    public const DEFAULT_MCC__3244 = '3244';
    public const DEFAULT_MCC__3245 = '3245';
    public const DEFAULT_MCC__3246 = '3246';
    public const DEFAULT_MCC__3247 = '3247';
    public const DEFAULT_MCC__3248 = '3248';
    public const DEFAULT_MCC__3249 = '3249';
    public const DEFAULT_MCC__3250 = '3250';
    public const DEFAULT_MCC__3251 = '3251';
    public const DEFAULT_MCC__3252 = '3252';
    public const DEFAULT_MCC__3253 = '3253';
    public const DEFAULT_MCC__3254 = '3254';
    public const DEFAULT_MCC__3255 = '3255';
    public const DEFAULT_MCC__3256 = '3256';
    public const DEFAULT_MCC__3257 = '3257';
    public const DEFAULT_MCC__3258 = '3258';
    public const DEFAULT_MCC__3259 = '3259';
    public const DEFAULT_MCC__3260 = '3260';
    public const DEFAULT_MCC__3261 = '3261';
    public const DEFAULT_MCC__3262 = '3262';
    public const DEFAULT_MCC__3263 = '3263';
    public const DEFAULT_MCC__3264 = '3264';
    public const DEFAULT_MCC__3265 = '3265';
    public const DEFAULT_MCC__3266 = '3266';
    public const DEFAULT_MCC__3267 = '3267';
    public const DEFAULT_MCC__3268 = '3268';
    public const DEFAULT_MCC__3269 = '3269';
    public const DEFAULT_MCC__3270 = '3270';
    public const DEFAULT_MCC__3271 = '3271';
    public const DEFAULT_MCC__3272 = '3272';
    public const DEFAULT_MCC__3273 = '3273';
    public const DEFAULT_MCC__3274 = '3274';
    public const DEFAULT_MCC__3275 = '3275';
    public const DEFAULT_MCC__3276 = '3276';
    public const DEFAULT_MCC__3277 = '3277';
    public const DEFAULT_MCC__3278 = '3278';
    public const DEFAULT_MCC__3279 = '3279';
    public const DEFAULT_MCC__3280 = '3280';
    public const DEFAULT_MCC__3281 = '3281';
    public const DEFAULT_MCC__3282 = '3282';
    public const DEFAULT_MCC__3283 = '3283';
    public const DEFAULT_MCC__3284 = '3284';
    public const DEFAULT_MCC__3285 = '3285';
    public const DEFAULT_MCC__3286 = '3286';
    public const DEFAULT_MCC__3287 = '3287';
    public const DEFAULT_MCC__3288 = '3288';
    public const DEFAULT_MCC__3289 = '3289';
    public const DEFAULT_MCC__3290 = '3290';
    public const DEFAULT_MCC__3291 = '3291';
    public const DEFAULT_MCC__3292 = '3292';
    public const DEFAULT_MCC__3293 = '3293';
    public const DEFAULT_MCC__3294 = '3294';
    public const DEFAULT_MCC__3295 = '3295';
    public const DEFAULT_MCC__3296 = '3296';
    public const DEFAULT_MCC__3297 = '3297';
    public const DEFAULT_MCC__3298 = '3298';
    public const DEFAULT_MCC__3299 = '3299';
    public const DEFAULT_MCC__3351 = '3351';
    public const DEFAULT_MCC__3352 = '3352';
    public const DEFAULT_MCC__3353 = '3353';
    public const DEFAULT_MCC__3354 = '3354';
    public const DEFAULT_MCC__3355 = '3355';
    public const DEFAULT_MCC__3356 = '3356';
    public const DEFAULT_MCC__3357 = '3357';
    public const DEFAULT_MCC__3358 = '3358';
    public const DEFAULT_MCC__3359 = '3359';
    public const DEFAULT_MCC__3360 = '3360';
    public const DEFAULT_MCC__3361 = '3361';
    public const DEFAULT_MCC__3362 = '3362';
    public const DEFAULT_MCC__3363 = '3363';
    public const DEFAULT_MCC__3364 = '3364';
    public const DEFAULT_MCC__3365 = '3365';
    public const DEFAULT_MCC__3366 = '3366';
    public const DEFAULT_MCC__3367 = '3367';
    public const DEFAULT_MCC__3368 = '3368';
    public const DEFAULT_MCC__3369 = '3369';
    public const DEFAULT_MCC__3370 = '3370';
    public const DEFAULT_MCC__3371 = '3371';
    public const DEFAULT_MCC__3372 = '3372';
    public const DEFAULT_MCC__3373 = '3373';
    public const DEFAULT_MCC__3374 = '3374';
    public const DEFAULT_MCC__3375 = '3375';
    public const DEFAULT_MCC__3376 = '3376';
    public const DEFAULT_MCC__3377 = '3377';
    public const DEFAULT_MCC__3378 = '3378';
    public const DEFAULT_MCC__3379 = '3379';
    public const DEFAULT_MCC__3380 = '3380';
    public const DEFAULT_MCC__3381 = '3381';
    public const DEFAULT_MCC__3382 = '3382';
    public const DEFAULT_MCC__3383 = '3383';
    public const DEFAULT_MCC__3384 = '3384';
    public const DEFAULT_MCC__3385 = '3385';
    public const DEFAULT_MCC__3386 = '3386';
    public const DEFAULT_MCC__3387 = '3387';
    public const DEFAULT_MCC__3388 = '3388';
    public const DEFAULT_MCC__3389 = '3389';
    public const DEFAULT_MCC__3390 = '3390';
    public const DEFAULT_MCC__3391 = '3391';
    public const DEFAULT_MCC__3392 = '3392';
    public const DEFAULT_MCC__3393 = '3393';
    public const DEFAULT_MCC__3394 = '3394';
    public const DEFAULT_MCC__3395 = '3395';
    public const DEFAULT_MCC__3396 = '3396';
    public const DEFAULT_MCC__3397 = '3397';
    public const DEFAULT_MCC__3398 = '3398';
    public const DEFAULT_MCC__3399 = '3399';
    public const DEFAULT_MCC__3400 = '3400';
    public const DEFAULT_MCC__3401 = '3401';
    public const DEFAULT_MCC__3402 = '3402';
    public const DEFAULT_MCC__3403 = '3403';
    public const DEFAULT_MCC__3404 = '3404';
    public const DEFAULT_MCC__3405 = '3405';
    public const DEFAULT_MCC__3406 = '3406';
    public const DEFAULT_MCC__3407 = '3407';
    public const DEFAULT_MCC__3408 = '3408';
    public const DEFAULT_MCC__3409 = '3409';
    public const DEFAULT_MCC__3410 = '3410';
    public const DEFAULT_MCC__3411 = '3411';
    public const DEFAULT_MCC__3412 = '3412';
    public const DEFAULT_MCC__3413 = '3413';
    public const DEFAULT_MCC__3414 = '3414';
    public const DEFAULT_MCC__3415 = '3415';
    public const DEFAULT_MCC__3416 = '3416';
    public const DEFAULT_MCC__3417 = '3417';
    public const DEFAULT_MCC__3418 = '3418';
    public const DEFAULT_MCC__3419 = '3419';
    public const DEFAULT_MCC__3420 = '3420';
    public const DEFAULT_MCC__3421 = '3421';
    public const DEFAULT_MCC__3422 = '3422';
    public const DEFAULT_MCC__3423 = '3423';
    public const DEFAULT_MCC__3424 = '3424';
    public const DEFAULT_MCC__3425 = '3425';
    public const DEFAULT_MCC__3426 = '3426';
    public const DEFAULT_MCC__3427 = '3427';
    public const DEFAULT_MCC__3428 = '3428';
    public const DEFAULT_MCC__3429 = '3429';
    public const DEFAULT_MCC__3430 = '3430';
    public const DEFAULT_MCC__3431 = '3431';
    public const DEFAULT_MCC__3432 = '3432';
    public const DEFAULT_MCC__3433 = '3433';
    public const DEFAULT_MCC__3434 = '3434';
    public const DEFAULT_MCC__3435 = '3435';
    public const DEFAULT_MCC__3436 = '3436';
    public const DEFAULT_MCC__3437 = '3437';
    public const DEFAULT_MCC__3438 = '3438';
    public const DEFAULT_MCC__3439 = '3439';
    public const DEFAULT_MCC__3440 = '3440';
    public const DEFAULT_MCC__3441 = '3441';
    public const DEFAULT_MCC__3501 = '3501';
    public const DEFAULT_MCC__3502 = '3502';
    public const DEFAULT_MCC__3503 = '3503';
    public const DEFAULT_MCC__3504 = '3504';
    public const DEFAULT_MCC__3505 = '3505';
    public const DEFAULT_MCC__3506 = '3506';
    public const DEFAULT_MCC__3507 = '3507';
    public const DEFAULT_MCC__3508 = '3508';
    public const DEFAULT_MCC__3509 = '3509';
    public const DEFAULT_MCC__3510 = '3510';
    public const DEFAULT_MCC__3511 = '3511';
    public const DEFAULT_MCC__3512 = '3512';
    public const DEFAULT_MCC__3513 = '3513';
    public const DEFAULT_MCC__3514 = '3514';
    public const DEFAULT_MCC__3515 = '3515';
    public const DEFAULT_MCC__3516 = '3516';
    public const DEFAULT_MCC__3517 = '3517';
    public const DEFAULT_MCC__3518 = '3518';
    public const DEFAULT_MCC__3519 = '3519';
    public const DEFAULT_MCC__3520 = '3520';
    public const DEFAULT_MCC__3521 = '3521';
    public const DEFAULT_MCC__3522 = '3522';
    public const DEFAULT_MCC__3523 = '3523';
    public const DEFAULT_MCC__3524 = '3524';
    public const DEFAULT_MCC__3525 = '3525';
    public const DEFAULT_MCC__3526 = '3526';
    public const DEFAULT_MCC__3527 = '3527';
    public const DEFAULT_MCC__3528 = '3528';
    public const DEFAULT_MCC__3529 = '3529';
    public const DEFAULT_MCC__3530 = '3530';
    public const DEFAULT_MCC__3531 = '3531';
    public const DEFAULT_MCC__3532 = '3532';
    public const DEFAULT_MCC__3533 = '3533';
    public const DEFAULT_MCC__3534 = '3534';
    public const DEFAULT_MCC__3535 = '3535';
    public const DEFAULT_MCC__3536 = '3536';
    public const DEFAULT_MCC__3537 = '3537';
    public const DEFAULT_MCC__3538 = '3538';
    public const DEFAULT_MCC__3539 = '3539';
    public const DEFAULT_MCC__3540 = '3540';
    public const DEFAULT_MCC__3541 = '3541';
    public const DEFAULT_MCC__3542 = '3542';
    public const DEFAULT_MCC__3543 = '3543';
    public const DEFAULT_MCC__3544 = '3544';
    public const DEFAULT_MCC__3545 = '3545';
    public const DEFAULT_MCC__3546 = '3546';
    public const DEFAULT_MCC__3547 = '3547';
    public const DEFAULT_MCC__3548 = '3548';
    public const DEFAULT_MCC__3549 = '3549';
    public const DEFAULT_MCC__3550 = '3550';
    public const DEFAULT_MCC__3551 = '3551';
    public const DEFAULT_MCC__3552 = '3552';
    public const DEFAULT_MCC__3553 = '3553';
    public const DEFAULT_MCC__3554 = '3554';
    public const DEFAULT_MCC__3555 = '3555';
    public const DEFAULT_MCC__3556 = '3556';
    public const DEFAULT_MCC__3557 = '3557';
    public const DEFAULT_MCC__3558 = '3558';
    public const DEFAULT_MCC__3559 = '3559';
    public const DEFAULT_MCC__3560 = '3560';
    public const DEFAULT_MCC__3561 = '3561';
    public const DEFAULT_MCC__3562 = '3562';
    public const DEFAULT_MCC__3563 = '3563';
    public const DEFAULT_MCC__3564 = '3564';
    public const DEFAULT_MCC__3565 = '3565';
    public const DEFAULT_MCC__3566 = '3566';
    public const DEFAULT_MCC__3567 = '3567';
    public const DEFAULT_MCC__3568 = '3568';
    public const DEFAULT_MCC__3569 = '3569';
    public const DEFAULT_MCC__3570 = '3570';
    public const DEFAULT_MCC__3571 = '3571';
    public const DEFAULT_MCC__3572 = '3572';
    public const DEFAULT_MCC__3573 = '3573';
    public const DEFAULT_MCC__3574 = '3574';
    public const DEFAULT_MCC__3575 = '3575';
    public const DEFAULT_MCC__3576 = '3576';
    public const DEFAULT_MCC__3577 = '3577';
    public const DEFAULT_MCC__3578 = '3578';
    public const DEFAULT_MCC__3579 = '3579';
    public const DEFAULT_MCC__3580 = '3580';
    public const DEFAULT_MCC__3581 = '3581';
    public const DEFAULT_MCC__3582 = '3582';
    public const DEFAULT_MCC__3583 = '3583';
    public const DEFAULT_MCC__3584 = '3584';
    public const DEFAULT_MCC__3585 = '3585';
    public const DEFAULT_MCC__3586 = '3586';
    public const DEFAULT_MCC__3587 = '3587';
    public const DEFAULT_MCC__3588 = '3588';
    public const DEFAULT_MCC__3589 = '3589';
    public const DEFAULT_MCC__3590 = '3590';
    public const DEFAULT_MCC__3591 = '3591';
    public const DEFAULT_MCC__3592 = '3592';
    public const DEFAULT_MCC__3593 = '3593';
    public const DEFAULT_MCC__3594 = '3594';
    public const DEFAULT_MCC__3595 = '3595';
    public const DEFAULT_MCC__3596 = '3596';
    public const DEFAULT_MCC__3597 = '3597';
    public const DEFAULT_MCC__3598 = '3598';
    public const DEFAULT_MCC__3599 = '3599';
    public const DEFAULT_MCC__3600 = '3600';
    public const DEFAULT_MCC__3601 = '3601';
    public const DEFAULT_MCC__3602 = '3602';
    public const DEFAULT_MCC__3603 = '3603';
    public const DEFAULT_MCC__3604 = '3604';
    public const DEFAULT_MCC__3605 = '3605';
    public const DEFAULT_MCC__3606 = '3606';
    public const DEFAULT_MCC__3607 = '3607';
    public const DEFAULT_MCC__3608 = '3608';
    public const DEFAULT_MCC__3609 = '3609';
    public const DEFAULT_MCC__3610 = '3610';
    public const DEFAULT_MCC__3611 = '3611';
    public const DEFAULT_MCC__3612 = '3612';
    public const DEFAULT_MCC__3613 = '3613';
    public const DEFAULT_MCC__3614 = '3614';
    public const DEFAULT_MCC__3615 = '3615';
    public const DEFAULT_MCC__3616 = '3616';
    public const DEFAULT_MCC__3617 = '3617';
    public const DEFAULT_MCC__3618 = '3618';
    public const DEFAULT_MCC__3619 = '3619';
    public const DEFAULT_MCC__3620 = '3620';
    public const DEFAULT_MCC__3621 = '3621';
    public const DEFAULT_MCC__3622 = '3622';
    public const DEFAULT_MCC__3623 = '3623';
    public const DEFAULT_MCC__3624 = '3624';
    public const DEFAULT_MCC__3625 = '3625';
    public const DEFAULT_MCC__3626 = '3626';
    public const DEFAULT_MCC__3627 = '3627';
    public const DEFAULT_MCC__3628 = '3628';
    public const DEFAULT_MCC__3629 = '3629';
    public const DEFAULT_MCC__3630 = '3630';
    public const DEFAULT_MCC__3631 = '3631';
    public const DEFAULT_MCC__3632 = '3632';
    public const DEFAULT_MCC__3633 = '3633';
    public const DEFAULT_MCC__3634 = '3634';
    public const DEFAULT_MCC__3635 = '3635';
    public const DEFAULT_MCC__3636 = '3636';
    public const DEFAULT_MCC__3637 = '3637';
    public const DEFAULT_MCC__3638 = '3638';
    public const DEFAULT_MCC__3639 = '3639';
    public const DEFAULT_MCC__3640 = '3640';
    public const DEFAULT_MCC__3641 = '3641';
    public const DEFAULT_MCC__3642 = '3642';
    public const DEFAULT_MCC__3643 = '3643';
    public const DEFAULT_MCC__3644 = '3644';
    public const DEFAULT_MCC__3645 = '3645';
    public const DEFAULT_MCC__3646 = '3646';
    public const DEFAULT_MCC__3647 = '3647';
    public const DEFAULT_MCC__3648 = '3648';
    public const DEFAULT_MCC__3649 = '3649';
    public const DEFAULT_MCC__3650 = '3650';
    public const DEFAULT_MCC__3651 = '3651';
    public const DEFAULT_MCC__3652 = '3652';
    public const DEFAULT_MCC__3653 = '3653';
    public const DEFAULT_MCC__3654 = '3654';
    public const DEFAULT_MCC__3655 = '3655';
    public const DEFAULT_MCC__3656 = '3656';
    public const DEFAULT_MCC__3657 = '3657';
    public const DEFAULT_MCC__3658 = '3658';
    public const DEFAULT_MCC__3659 = '3659';
    public const DEFAULT_MCC__3660 = '3660';
    public const DEFAULT_MCC__3661 = '3661';
    public const DEFAULT_MCC__3662 = '3662';
    public const DEFAULT_MCC__3663 = '3663';
    public const DEFAULT_MCC__3664 = '3664';
    public const DEFAULT_MCC__3665 = '3665';
    public const DEFAULT_MCC__3666 = '3666';
    public const DEFAULT_MCC__3667 = '3667';
    public const DEFAULT_MCC__3668 = '3668';
    public const DEFAULT_MCC__3669 = '3669';
    public const DEFAULT_MCC__3670 = '3670';
    public const DEFAULT_MCC__3671 = '3671';
    public const DEFAULT_MCC__3672 = '3672';
    public const DEFAULT_MCC__3673 = '3673';
    public const DEFAULT_MCC__3674 = '3674';
    public const DEFAULT_MCC__3675 = '3675';
    public const DEFAULT_MCC__3676 = '3676';
    public const DEFAULT_MCC__3677 = '3677';
    public const DEFAULT_MCC__3678 = '3678';
    public const DEFAULT_MCC__3679 = '3679';
    public const DEFAULT_MCC__3680 = '3680';
    public const DEFAULT_MCC__3681 = '3681';
    public const DEFAULT_MCC__3682 = '3682';
    public const DEFAULT_MCC__3683 = '3683';
    public const DEFAULT_MCC__3684 = '3684';
    public const DEFAULT_MCC__3685 = '3685';
    public const DEFAULT_MCC__3686 = '3686';
    public const DEFAULT_MCC__3687 = '3687';
    public const DEFAULT_MCC__3688 = '3688';
    public const DEFAULT_MCC__3689 = '3689';
    public const DEFAULT_MCC__3690 = '3690';
    public const DEFAULT_MCC__3691 = '3691';
    public const DEFAULT_MCC__3692 = '3692';
    public const DEFAULT_MCC__3693 = '3693';
    public const DEFAULT_MCC__3694 = '3694';
    public const DEFAULT_MCC__3695 = '3695';
    public const DEFAULT_MCC__3696 = '3696';
    public const DEFAULT_MCC__3697 = '3697';
    public const DEFAULT_MCC__3698 = '3698';
    public const DEFAULT_MCC__3699 = '3699';
    public const DEFAULT_MCC__3700 = '3700';
    public const DEFAULT_MCC__3701 = '3701';
    public const DEFAULT_MCC__3702 = '3702';
    public const DEFAULT_MCC__3703 = '3703';
    public const DEFAULT_MCC__3704 = '3704';
    public const DEFAULT_MCC__3705 = '3705';
    public const DEFAULT_MCC__3706 = '3706';
    public const DEFAULT_MCC__3707 = '3707';
    public const DEFAULT_MCC__3708 = '3708';
    public const DEFAULT_MCC__3709 = '3709';
    public const DEFAULT_MCC__3710 = '3710';
    public const DEFAULT_MCC__3711 = '3711';
    public const DEFAULT_MCC__3712 = '3712';
    public const DEFAULT_MCC__3713 = '3713';
    public const DEFAULT_MCC__3714 = '3714';
    public const DEFAULT_MCC__3715 = '3715';
    public const DEFAULT_MCC__3716 = '3716';
    public const DEFAULT_MCC__3717 = '3717';
    public const DEFAULT_MCC__3718 = '3718';
    public const DEFAULT_MCC__3719 = '3719';
    public const DEFAULT_MCC__3720 = '3720';
    public const DEFAULT_MCC__3721 = '3721';
    public const DEFAULT_MCC__3722 = '3722';
    public const DEFAULT_MCC__3723 = '3723';
    public const DEFAULT_MCC__3724 = '3724';
    public const DEFAULT_MCC__3725 = '3725';
    public const DEFAULT_MCC__3726 = '3726';
    public const DEFAULT_MCC__3727 = '3727';
    public const DEFAULT_MCC__3728 = '3728';
    public const DEFAULT_MCC__3729 = '3729';
    public const DEFAULT_MCC__3730 = '3730';
    public const DEFAULT_MCC__3731 = '3731';
    public const DEFAULT_MCC__3732 = '3732';
    public const DEFAULT_MCC__3733 = '3733';
    public const DEFAULT_MCC__3734 = '3734';
    public const DEFAULT_MCC__3735 = '3735';
    public const DEFAULT_MCC__3736 = '3736';
    public const DEFAULT_MCC__3737 = '3737';
    public const DEFAULT_MCC__3738 = '3738';
    public const DEFAULT_MCC__3739 = '3739';
    public const DEFAULT_MCC__3740 = '3740';
    public const DEFAULT_MCC__3741 = '3741';
    public const DEFAULT_MCC__3742 = '3742';
    public const DEFAULT_MCC__3743 = '3743';
    public const DEFAULT_MCC__3744 = '3744';
    public const DEFAULT_MCC__3745 = '3745';
    public const DEFAULT_MCC__3746 = '3746';
    public const DEFAULT_MCC__3747 = '3747';
    public const DEFAULT_MCC__3748 = '3748';
    public const DEFAULT_MCC__3749 = '3749';
    public const DEFAULT_MCC__3750 = '3750';
    public const DEFAULT_MCC__3751 = '3751';
    public const DEFAULT_MCC__3752 = '3752';
    public const DEFAULT_MCC__3753 = '3753';
    public const DEFAULT_MCC__3754 = '3754';
    public const DEFAULT_MCC__3755 = '3755';
    public const DEFAULT_MCC__3756 = '3756';
    public const DEFAULT_MCC__3757 = '3757';
    public const DEFAULT_MCC__3758 = '3758';
    public const DEFAULT_MCC__3759 = '3759';
    public const DEFAULT_MCC__3760 = '3760';
    public const DEFAULT_MCC__3761 = '3761';
    public const DEFAULT_MCC__3762 = '3762';
    public const DEFAULT_MCC__3763 = '3763';
    public const DEFAULT_MCC__3764 = '3764';
    public const DEFAULT_MCC__3765 = '3765';
    public const DEFAULT_MCC__3766 = '3766';
    public const DEFAULT_MCC__3767 = '3767';
    public const DEFAULT_MCC__3768 = '3768';
    public const DEFAULT_MCC__3769 = '3769';
    public const DEFAULT_MCC__3770 = '3770';
    public const DEFAULT_MCC__3771 = '3771';
    public const DEFAULT_MCC__3772 = '3772';
    public const DEFAULT_MCC__3773 = '3773';
    public const DEFAULT_MCC__3774 = '3774';
    public const DEFAULT_MCC__3775 = '3775';
    public const DEFAULT_MCC__3776 = '3776';
    public const DEFAULT_MCC__3777 = '3777';
    public const DEFAULT_MCC__3778 = '3778';
    public const DEFAULT_MCC__3779 = '3779';
    public const DEFAULT_MCC__3780 = '3780';
    public const DEFAULT_MCC__3781 = '3781';
    public const DEFAULT_MCC__3782 = '3782';
    public const DEFAULT_MCC__3783 = '3783';
    public const DEFAULT_MCC__3784 = '3784';
    public const DEFAULT_MCC__3785 = '3785';
    public const DEFAULT_MCC__3786 = '3786';
    public const DEFAULT_MCC__3787 = '3787';
    public const DEFAULT_MCC__3788 = '3788';
    public const DEFAULT_MCC__3789 = '3789';
    public const DEFAULT_MCC__3790 = '3790';
    public const DEFAULT_MCC__3816 = '3816';
    public const DEFAULT_MCC__3835 = '3835';
    public const DEFAULT_MCC__4011 = '4011';
    public const DEFAULT_MCC__4111 = '4111';
    public const DEFAULT_MCC__4112 = '4112';
    public const DEFAULT_MCC__4119 = '4119';
    public const DEFAULT_MCC__4121 = '4121';
    public const DEFAULT_MCC__4131 = '4131';
    public const DEFAULT_MCC__4214 = '4214';
    public const DEFAULT_MCC__4215 = '4215';
    public const DEFAULT_MCC__4225 = '4225';
    public const DEFAULT_MCC__4411 = '4411';
    public const DEFAULT_MCC__4457 = '4457';
    public const DEFAULT_MCC__4468 = '4468';
    public const DEFAULT_MCC__4511 = '4511';
    public const DEFAULT_MCC__4582 = '4582';
    public const DEFAULT_MCC__4722 = '4722';
    public const DEFAULT_MCC__4723 = '4723';
    public const DEFAULT_MCC__4784 = '4784';
    public const DEFAULT_MCC__4789 = '4789';
    public const DEFAULT_MCC__4812 = '4812';
    public const DEFAULT_MCC__4814 = '4814';
    public const DEFAULT_MCC__4815 = '4815';
    public const DEFAULT_MCC__4816 = '4816';
    public const DEFAULT_MCC__4821 = '4821';
    public const DEFAULT_MCC__4829 = '4829';
    public const DEFAULT_MCC__4899 = '4899';
    public const DEFAULT_MCC__4900 = '4900';
    public const DEFAULT_MCC__5013 = '5013';
    public const DEFAULT_MCC__5021 = '5021';
    public const DEFAULT_MCC__5039 = '5039';
    public const DEFAULT_MCC__5044 = '5044';
    public const DEFAULT_MCC__5045 = '5045';
    public const DEFAULT_MCC__5046 = '5046';
    public const DEFAULT_MCC__5047 = '5047';
    public const DEFAULT_MCC__5051 = '5051';
    public const DEFAULT_MCC__5065 = '5065';
    public const DEFAULT_MCC__5072 = '5072';
    public const DEFAULT_MCC__5074 = '5074';
    public const DEFAULT_MCC__5085 = '5085';
    public const DEFAULT_MCC__5094 = '5094';
    public const DEFAULT_MCC__5099 = '5099';
    public const DEFAULT_MCC__5111 = '5111';
    public const DEFAULT_MCC__5122 = '5122';
    public const DEFAULT_MCC__5131 = '5131';
    public const DEFAULT_MCC__5137 = '5137';
    public const DEFAULT_MCC__5139 = '5139';
    public const DEFAULT_MCC__5169 = '5169';
    public const DEFAULT_MCC__5172 = '5172';
    public const DEFAULT_MCC__5192 = '5192';
    public const DEFAULT_MCC__5193 = '5193';
    public const DEFAULT_MCC__5198 = '5198';
    public const DEFAULT_MCC__5199 = '5199';
    public const DEFAULT_MCC__5200 = '5200';
    public const DEFAULT_MCC__5211 = '5211';
    public const DEFAULT_MCC__5231 = '5231';
    public const DEFAULT_MCC__5251 = '5251';
    public const DEFAULT_MCC__5261 = '5261';
    public const DEFAULT_MCC__5271 = '5271';
    public const DEFAULT_MCC__5300 = '5300';
    public const DEFAULT_MCC__5309 = '5309';
    public const DEFAULT_MCC__5310 = '5310';
    public const DEFAULT_MCC__5311 = '5311';
    public const DEFAULT_MCC__5331 = '5331';
    public const DEFAULT_MCC__5399 = '5399';
    public const DEFAULT_MCC__5411 = '5411';
    public const DEFAULT_MCC__5422 = '5422';
    public const DEFAULT_MCC__5441 = '5441';
    public const DEFAULT_MCC__5451 = '5451';
    public const DEFAULT_MCC__5462 = '5462';
    public const DEFAULT_MCC__5499 = '5499';
    public const DEFAULT_MCC__5511 = '5511';
    public const DEFAULT_MCC__5521 = '5521';
    public const DEFAULT_MCC__5531 = '5531';
    public const DEFAULT_MCC__5532 = '5532';
    public const DEFAULT_MCC__5533 = '5533';
    public const DEFAULT_MCC__5541 = '5541';
    public const DEFAULT_MCC__5542 = '5542';
    public const DEFAULT_MCC__5551 = '5551';
    public const DEFAULT_MCC__5561 = '5561';
    public const DEFAULT_MCC__5571 = '5571';
    public const DEFAULT_MCC__5592 = '5592';
    public const DEFAULT_MCC__5598 = '5598';
    public const DEFAULT_MCC__5599 = '5599';
    public const DEFAULT_MCC__5611 = '5611';
    public const DEFAULT_MCC__5621 = '5621';
    public const DEFAULT_MCC__5631 = '5631';
    public const DEFAULT_MCC__5641 = '5641';
    public const DEFAULT_MCC__5651 = '5651';
    public const DEFAULT_MCC__5655 = '5655';
    public const DEFAULT_MCC__5661 = '5661';
    public const DEFAULT_MCC__5681 = '5681';
    public const DEFAULT_MCC__5691 = '5691';
    public const DEFAULT_MCC__5697 = '5697';
    public const DEFAULT_MCC__5698 = '5698';
    public const DEFAULT_MCC__5699 = '5699';
    public const DEFAULT_MCC__5712 = '5712';
    public const DEFAULT_MCC__5713 = '5713';
    public const DEFAULT_MCC__5714 = '5714';
    public const DEFAULT_MCC__5718 = '5718';
    public const DEFAULT_MCC__5719 = '5719';
    public const DEFAULT_MCC__5722 = '5722';
    public const DEFAULT_MCC__5732 = '5732';
    public const DEFAULT_MCC__5733 = '5733';
    public const DEFAULT_MCC__5734 = '5734';
    public const DEFAULT_MCC__5735 = '5735';
    public const DEFAULT_MCC__5811 = '5811';
    public const DEFAULT_MCC__5812 = '5812';
    public const DEFAULT_MCC__5813 = '5813';
    public const DEFAULT_MCC__5814 = '5814';
    public const DEFAULT_MCC__5815 = '5815';
    public const DEFAULT_MCC__5816 = '5816';
    public const DEFAULT_MCC__5817 = '5817';
    public const DEFAULT_MCC__5818 = '5818';
    public const DEFAULT_MCC__5832 = '5832';
    public const DEFAULT_MCC__5912 = '5912';
    public const DEFAULT_MCC__5921 = '5921';
    public const DEFAULT_MCC__5931 = '5931';
    public const DEFAULT_MCC__5932 = '5932';
    public const DEFAULT_MCC__5933 = '5933';
    public const DEFAULT_MCC__5935 = '5935';
    public const DEFAULT_MCC__5937 = '5937';
    public const DEFAULT_MCC__5940 = '5940';
    public const DEFAULT_MCC__5941 = '5941';
    public const DEFAULT_MCC__5942 = '5942';
    public const DEFAULT_MCC__5943 = '5943';
    public const DEFAULT_MCC__5944 = '5944';
    public const DEFAULT_MCC__5945 = '5945';
    public const DEFAULT_MCC__5946 = '5946';
    public const DEFAULT_MCC__5947 = '5947';
    public const DEFAULT_MCC__5948 = '5948';
    public const DEFAULT_MCC__5949 = '5949';
    public const DEFAULT_MCC__5950 = '5950';
    public const DEFAULT_MCC__5960 = '5960';
    public const DEFAULT_MCC__5961 = '5961';
    public const DEFAULT_MCC__5962 = '5962';
    public const DEFAULT_MCC__5963 = '5963';
    public const DEFAULT_MCC__5964 = '5964';
    public const DEFAULT_MCC__5965 = '5965';
    public const DEFAULT_MCC__5966 = '5966';
    public const DEFAULT_MCC__5967 = '5967';
    public const DEFAULT_MCC__5968 = '5968';
    public const DEFAULT_MCC__5969 = '5969';
    public const DEFAULT_MCC__5970 = '5970';
    public const DEFAULT_MCC__5971 = '5971';
    public const DEFAULT_MCC__5972 = '5972';
    public const DEFAULT_MCC__5973 = '5973';
    public const DEFAULT_MCC__5975 = '5975';
    public const DEFAULT_MCC__5976 = '5976';
    public const DEFAULT_MCC__5977 = '5977';
    public const DEFAULT_MCC__5978 = '5978';
    public const DEFAULT_MCC__5983 = '5983';
    public const DEFAULT_MCC__5992 = '5992';
    public const DEFAULT_MCC__5993 = '5993';
    public const DEFAULT_MCC__5994 = '5994';
    public const DEFAULT_MCC__5995 = '5995';
    public const DEFAULT_MCC__5996 = '5996';
    public const DEFAULT_MCC__5997 = '5997';
    public const DEFAULT_MCC__5998 = '5998';
    public const DEFAULT_MCC__5999 = '5999';
    public const DEFAULT_MCC__6010 = '6010';
    public const DEFAULT_MCC__6011 = '6011';
    public const DEFAULT_MCC__6012 = '6012';
    public const DEFAULT_MCC__6051 = '6051';
    public const DEFAULT_MCC__6211 = '6211';
    public const DEFAULT_MCC__6300 = '6300';
    public const DEFAULT_MCC__6381 = '6381';
    public const DEFAULT_MCC__6399 = '6399';
    public const DEFAULT_MCC__6513 = '6513';
    public const DEFAULT_MCC__7011 = '7011';
    public const DEFAULT_MCC__7012 = '7012';
    public const DEFAULT_MCC__7032 = '7032';
    public const DEFAULT_MCC__7033 = '7033';
    public const DEFAULT_MCC__7210 = '7210';
    public const DEFAULT_MCC__7211 = '7211';
    public const DEFAULT_MCC__7216 = '7216';
    public const DEFAULT_MCC__7217 = '7217';
    public const DEFAULT_MCC__7221 = '7221';
    public const DEFAULT_MCC__7230 = '7230';
    public const DEFAULT_MCC__7251 = '7251';
    public const DEFAULT_MCC__7261 = '7261';
    public const DEFAULT_MCC__7273 = '7273';
    public const DEFAULT_MCC__7276 = '7276';
    public const DEFAULT_MCC__7277 = '7277';
    public const DEFAULT_MCC__7278 = '7278';
    public const DEFAULT_MCC__7296 = '7296';
    public const DEFAULT_MCC__7297 = '7297';
    public const DEFAULT_MCC__7298 = '7298';
    public const DEFAULT_MCC__7299 = '7299';
    public const DEFAULT_MCC__7311 = '7311';
    public const DEFAULT_MCC__7321 = '7321';
    public const DEFAULT_MCC__7332 = '7332';
    public const DEFAULT_MCC__7333 = '7333';
    public const DEFAULT_MCC__7338 = '7338';
    public const DEFAULT_MCC__7339 = '7339';
    public const DEFAULT_MCC__7342 = '7342';
    public const DEFAULT_MCC__7349 = '7349';
    public const DEFAULT_MCC__7361 = '7361';
    public const DEFAULT_MCC__7372 = '7372';
    public const DEFAULT_MCC__7375 = '7375';
    public const DEFAULT_MCC__7379 = '7379';
    public const DEFAULT_MCC__7392 = '7392';
    public const DEFAULT_MCC__7393 = '7393';
    public const DEFAULT_MCC__7394 = '7394';
    public const DEFAULT_MCC__7395 = '7395';
    public const DEFAULT_MCC__7399 = '7399';
    public const DEFAULT_MCC__7511 = '7511';
    public const DEFAULT_MCC__7512 = '7512';
    public const DEFAULT_MCC__7513 = '7513';
    public const DEFAULT_MCC__7519 = '7519';
    public const DEFAULT_MCC__7523 = '7523';
    public const DEFAULT_MCC__7531 = '7531';
    public const DEFAULT_MCC__7534 = '7534';
    public const DEFAULT_MCC__7535 = '7535';
    public const DEFAULT_MCC__7538 = '7538';
    public const DEFAULT_MCC__7542 = '7542';
    public const DEFAULT_MCC__7549 = '7549';
    public const DEFAULT_MCC__7622 = '7622';
    public const DEFAULT_MCC__7623 = '7623';
    public const DEFAULT_MCC__7629 = '7629';
    public const DEFAULT_MCC__7631 = '7631';
    public const DEFAULT_MCC__7641 = '7641';
    public const DEFAULT_MCC__7692 = '7692';
    public const DEFAULT_MCC__7699 = '7699';
    public const DEFAULT_MCC__7800 = '7800';
    public const DEFAULT_MCC__7801 = '7801';
    public const DEFAULT_MCC__7802 = '7802';
    public const DEFAULT_MCC__7829 = '7829';
    public const DEFAULT_MCC__7832 = '7832';
    public const DEFAULT_MCC__7841 = '7841';
    public const DEFAULT_MCC__7911 = '7911';
    public const DEFAULT_MCC__7922 = '7922';
    public const DEFAULT_MCC__7929 = '7929';
    public const DEFAULT_MCC__7932 = '7932';
    public const DEFAULT_MCC__7933 = '7933';
    public const DEFAULT_MCC__7941 = '7941';
    public const DEFAULT_MCC__7991 = '7991';
    public const DEFAULT_MCC__7992 = '7992';
    public const DEFAULT_MCC__7993 = '7993';
    public const DEFAULT_MCC__7994 = '7994';
    public const DEFAULT_MCC__7995 = '7995';
    public const DEFAULT_MCC__7996 = '7996';
    public const DEFAULT_MCC__7997 = '7997';
    public const DEFAULT_MCC__7998 = '7998';
    public const DEFAULT_MCC__7999 = '7999';
    public const DEFAULT_MCC__8011 = '8011';
    public const DEFAULT_MCC__8021 = '8021';
    public const DEFAULT_MCC__8031 = '8031';
    public const DEFAULT_MCC__8041 = '8041';
    public const DEFAULT_MCC__8042 = '8042';
    public const DEFAULT_MCC__8043 = '8043';
    public const DEFAULT_MCC__8044 = '8044';
    public const DEFAULT_MCC__8049 = '8049';
    public const DEFAULT_MCC__8050 = '8050';
    public const DEFAULT_MCC__8062 = '8062';
    public const DEFAULT_MCC__8071 = '8071';
    public const DEFAULT_MCC__8099 = '8099';
    public const DEFAULT_MCC__8111 = '8111';
    public const DEFAULT_MCC__8211 = '8211';
    public const DEFAULT_MCC__8220 = '8220';
    public const DEFAULT_MCC__8241 = '8241';
    public const DEFAULT_MCC__8244 = '8244';
    public const DEFAULT_MCC__8249 = '8249';
    public const DEFAULT_MCC__8299 = '8299';
    public const DEFAULT_MCC__8351 = '8351';
    public const DEFAULT_MCC__8398 = '8398';
    public const DEFAULT_MCC__8641 = '8641';
    public const DEFAULT_MCC__8651 = '8651';
    public const DEFAULT_MCC__8661 = '8661';
    public const DEFAULT_MCC__8675 = '8675';
    public const DEFAULT_MCC__8699 = '8699';
    public const DEFAULT_MCC__8734 = '8734';
    public const DEFAULT_MCC__8911 = '8911';
    public const DEFAULT_MCC__8931 = '8931';
    public const DEFAULT_MCC__8999 = '8999';
    public const DEFAULT_MCC__9211 = '9211';
    public const DEFAULT_MCC__9222 = '9222';
    public const DEFAULT_MCC__9223 = '9223';
    public const DEFAULT_MCC__9311 = '9311';
    public const DEFAULT_MCC__9399 = '9399';
    public const DEFAULT_MCC__9402 = '9402';
    public const DEFAULT_MCC__9405 = '9405';
    public const DEFAULT_MCC__9700 = '9700';
    public const DEFAULT_MCC__9701 = '9701';
    public const DEFAULT_MCC__9702 = '9702';
    public const DEFAULT_MCC__9950 = '9950';
    public const MOTO_ECIINDICATOR__5 = '5';
    public const MOTO_ECIINDICATOR__6 = '6';
    public const MOTO_ECIINDICATOR__7 = '7';
    public const MOTO_ECIINDICATOR__8 = '8';
    public const PAN_ENTRY_MODE__00 = '00';
    public const PAN_ENTRY_MODE__01 = '01';
    public const PAN_ENTRY_MODE__02 = '02';
    public const PAN_ENTRY_MODE__03 = '03';
    public const PAN_ENTRY_MODE__04 = '04';
    public const PAN_ENTRY_MODE__05 = '05';
    public const PAN_ENTRY_MODE__06 = '06';
    public const PAN_ENTRY_MODE__07 = '07';
    public const PAN_ENTRY_MODE__08 = '08';
    public const PAN_ENTRY_MODE__09 = '09';
    public const PAN_ENTRY_MODE__10 = '10';
    public const PAN_ENTRY_MODE__80 = '80';
    public const PAN_ENTRY_MODE__82 = '82';
    public const PAN_ENTRY_MODE__83 = '83';
    public const PAN_ENTRY_MODE__90 = '90';
    public const PAN_ENTRY_MODE__91 = '91';
    public const PAN_ENTRY_MODE__95 = '95';
    public const POS_CONDITION_CODE__00 = '00';
    public const POS_CONDITION_CODE__01 = '01';
    public const POS_CONDITION_CODE__02 = '02';
    public const POS_CONDITION_CODE__03 = '03';
    public const POS_CONDITION_CODE__05 = '05';
    public const POS_CONDITION_CODE__06 = '06';
    public const POS_CONDITION_CODE__08 = '08';
    public const POS_CONDITION_CODE__10 = '10';
    public const POS_CONDITION_CODE__51 = '51';
    public const POS_CONDITION_CODE__59 = '59';
    public const POS_CONDITION_CODE__71 = '71';
    public const POS_CONDITION_CODE__73 = '73';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAllowedBusinessApplicationIdsAllowableValues()
    {
        return [
            self::ALLOWED_BUSINESS_APPLICATION_IDS_AA,
            self::ALLOWED_BUSINESS_APPLICATION_IDS_BB,
            self::ALLOWED_BUSINESS_APPLICATION_IDS_BI,
            self::ALLOWED_BUSINESS_APPLICATION_IDS_CP,
            self::ALLOWED_BUSINESS_APPLICATION_IDS_FD,
            self::ALLOWED_BUSINESS_APPLICATION_IDS_FT,
            self::ALLOWED_BUSINESS_APPLICATION_IDS_GD,
            self::ALLOWED_BUSINESS_APPLICATION_IDS_GP,
            self::ALLOWED_BUSINESS_APPLICATION_IDS_LO,
            self::ALLOWED_BUSINESS_APPLICATION_IDS_CI,
            self::ALLOWED_BUSINESS_APPLICATION_IDS_CO,
            self::ALLOWED_BUSINESS_APPLICATION_IDS_MP,
            self::ALLOWED_BUSINESS_APPLICATION_IDS_MD,
            self::ALLOWED_BUSINESS_APPLICATION_IDS_OG,
            self::ALLOWED_BUSINESS_APPLICATION_IDS_PD,
            self::ALLOWED_BUSINESS_APPLICATION_IDS_PP,
            self::ALLOWED_BUSINESS_APPLICATION_IDS_TU,
            self::ALLOWED_BUSINESS_APPLICATION_IDS_WT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDefaultMccAllowableValues()
    {
        return [
            self::DEFAULT_MCC__0742,
            self::DEFAULT_MCC__0763,
            self::DEFAULT_MCC__0780,
            self::DEFAULT_MCC__1520,
            self::DEFAULT_MCC__1711,
            self::DEFAULT_MCC__1731,
            self::DEFAULT_MCC__1740,
            self::DEFAULT_MCC__1750,
            self::DEFAULT_MCC__1761,
            self::DEFAULT_MCC__1771,
            self::DEFAULT_MCC__1799,
            self::DEFAULT_MCC__2741,
            self::DEFAULT_MCC__2791,
            self::DEFAULT_MCC__2842,
            self::DEFAULT_MCC__3000,
            self::DEFAULT_MCC__3001,
            self::DEFAULT_MCC__3002,
            self::DEFAULT_MCC__3003,
            self::DEFAULT_MCC__3004,
            self::DEFAULT_MCC__3005,
            self::DEFAULT_MCC__3006,
            self::DEFAULT_MCC__3007,
            self::DEFAULT_MCC__3008,
            self::DEFAULT_MCC__3009,
            self::DEFAULT_MCC__3010,
            self::DEFAULT_MCC__3011,
            self::DEFAULT_MCC__3012,
            self::DEFAULT_MCC__3013,
            self::DEFAULT_MCC__3014,
            self::DEFAULT_MCC__3015,
            self::DEFAULT_MCC__3016,
            self::DEFAULT_MCC__3017,
            self::DEFAULT_MCC__3018,
            self::DEFAULT_MCC__3019,
            self::DEFAULT_MCC__3020,
            self::DEFAULT_MCC__3021,
            self::DEFAULT_MCC__3022,
            self::DEFAULT_MCC__3023,
            self::DEFAULT_MCC__3024,
            self::DEFAULT_MCC__3025,
            self::DEFAULT_MCC__3026,
            self::DEFAULT_MCC__3027,
            self::DEFAULT_MCC__3028,
            self::DEFAULT_MCC__3029,
            self::DEFAULT_MCC__3030,
            self::DEFAULT_MCC__3031,
            self::DEFAULT_MCC__3032,
            self::DEFAULT_MCC__3033,
            self::DEFAULT_MCC__3034,
            self::DEFAULT_MCC__3035,
            self::DEFAULT_MCC__3036,
            self::DEFAULT_MCC__3037,
            self::DEFAULT_MCC__3038,
            self::DEFAULT_MCC__3039,
            self::DEFAULT_MCC__3040,
            self::DEFAULT_MCC__3041,
            self::DEFAULT_MCC__3042,
            self::DEFAULT_MCC__3043,
            self::DEFAULT_MCC__3044,
            self::DEFAULT_MCC__3045,
            self::DEFAULT_MCC__3046,
            self::DEFAULT_MCC__3047,
            self::DEFAULT_MCC__3048,
            self::DEFAULT_MCC__3049,
            self::DEFAULT_MCC__3050,
            self::DEFAULT_MCC__3051,
            self::DEFAULT_MCC__3052,
            self::DEFAULT_MCC__3053,
            self::DEFAULT_MCC__3054,
            self::DEFAULT_MCC__3055,
            self::DEFAULT_MCC__3056,
            self::DEFAULT_MCC__3057,
            self::DEFAULT_MCC__3058,
            self::DEFAULT_MCC__3059,
            self::DEFAULT_MCC__3060,
            self::DEFAULT_MCC__3061,
            self::DEFAULT_MCC__3062,
            self::DEFAULT_MCC__3063,
            self::DEFAULT_MCC__3064,
            self::DEFAULT_MCC__3065,
            self::DEFAULT_MCC__3066,
            self::DEFAULT_MCC__3067,
            self::DEFAULT_MCC__3068,
            self::DEFAULT_MCC__3069,
            self::DEFAULT_MCC__3070,
            self::DEFAULT_MCC__3071,
            self::DEFAULT_MCC__3072,
            self::DEFAULT_MCC__3073,
            self::DEFAULT_MCC__3074,
            self::DEFAULT_MCC__3075,
            self::DEFAULT_MCC__3076,
            self::DEFAULT_MCC__3077,
            self::DEFAULT_MCC__3078,
            self::DEFAULT_MCC__3079,
            self::DEFAULT_MCC__3080,
            self::DEFAULT_MCC__3081,
            self::DEFAULT_MCC__3082,
            self::DEFAULT_MCC__3083,
            self::DEFAULT_MCC__3084,
            self::DEFAULT_MCC__3085,
            self::DEFAULT_MCC__3086,
            self::DEFAULT_MCC__3087,
            self::DEFAULT_MCC__3088,
            self::DEFAULT_MCC__3089,
            self::DEFAULT_MCC__3090,
            self::DEFAULT_MCC__3091,
            self::DEFAULT_MCC__3092,
            self::DEFAULT_MCC__3093,
            self::DEFAULT_MCC__3094,
            self::DEFAULT_MCC__3095,
            self::DEFAULT_MCC__3096,
            self::DEFAULT_MCC__3097,
            self::DEFAULT_MCC__3098,
            self::DEFAULT_MCC__3099,
            self::DEFAULT_MCC__3100,
            self::DEFAULT_MCC__3101,
            self::DEFAULT_MCC__3102,
            self::DEFAULT_MCC__3103,
            self::DEFAULT_MCC__3104,
            self::DEFAULT_MCC__3105,
            self::DEFAULT_MCC__3106,
            self::DEFAULT_MCC__3107,
            self::DEFAULT_MCC__3108,
            self::DEFAULT_MCC__3109,
            self::DEFAULT_MCC__3110,
            self::DEFAULT_MCC__3111,
            self::DEFAULT_MCC__3112,
            self::DEFAULT_MCC__3113,
            self::DEFAULT_MCC__3114,
            self::DEFAULT_MCC__3115,
            self::DEFAULT_MCC__3116,
            self::DEFAULT_MCC__3117,
            self::DEFAULT_MCC__3118,
            self::DEFAULT_MCC__3119,
            self::DEFAULT_MCC__3120,
            self::DEFAULT_MCC__3121,
            self::DEFAULT_MCC__3122,
            self::DEFAULT_MCC__3123,
            self::DEFAULT_MCC__3124,
            self::DEFAULT_MCC__3125,
            self::DEFAULT_MCC__3126,
            self::DEFAULT_MCC__3127,
            self::DEFAULT_MCC__3128,
            self::DEFAULT_MCC__3129,
            self::DEFAULT_MCC__3130,
            self::DEFAULT_MCC__3131,
            self::DEFAULT_MCC__3132,
            self::DEFAULT_MCC__3133,
            self::DEFAULT_MCC__3134,
            self::DEFAULT_MCC__3135,
            self::DEFAULT_MCC__3136,
            self::DEFAULT_MCC__3137,
            self::DEFAULT_MCC__3138,
            self::DEFAULT_MCC__3139,
            self::DEFAULT_MCC__3140,
            self::DEFAULT_MCC__3141,
            self::DEFAULT_MCC__3142,
            self::DEFAULT_MCC__3143,
            self::DEFAULT_MCC__3144,
            self::DEFAULT_MCC__3145,
            self::DEFAULT_MCC__3146,
            self::DEFAULT_MCC__3147,
            self::DEFAULT_MCC__3148,
            self::DEFAULT_MCC__3149,
            self::DEFAULT_MCC__3150,
            self::DEFAULT_MCC__3151,
            self::DEFAULT_MCC__3152,
            self::DEFAULT_MCC__3153,
            self::DEFAULT_MCC__3154,
            self::DEFAULT_MCC__3155,
            self::DEFAULT_MCC__3156,
            self::DEFAULT_MCC__3157,
            self::DEFAULT_MCC__3158,
            self::DEFAULT_MCC__3159,
            self::DEFAULT_MCC__3160,
            self::DEFAULT_MCC__3161,
            self::DEFAULT_MCC__3162,
            self::DEFAULT_MCC__3163,
            self::DEFAULT_MCC__3164,
            self::DEFAULT_MCC__3165,
            self::DEFAULT_MCC__3166,
            self::DEFAULT_MCC__3167,
            self::DEFAULT_MCC__3168,
            self::DEFAULT_MCC__3169,
            self::DEFAULT_MCC__3170,
            self::DEFAULT_MCC__3171,
            self::DEFAULT_MCC__3172,
            self::DEFAULT_MCC__3173,
            self::DEFAULT_MCC__3174,
            self::DEFAULT_MCC__3175,
            self::DEFAULT_MCC__3176,
            self::DEFAULT_MCC__3177,
            self::DEFAULT_MCC__3178,
            self::DEFAULT_MCC__3179,
            self::DEFAULT_MCC__3180,
            self::DEFAULT_MCC__3181,
            self::DEFAULT_MCC__3182,
            self::DEFAULT_MCC__3183,
            self::DEFAULT_MCC__3184,
            self::DEFAULT_MCC__3185,
            self::DEFAULT_MCC__3186,
            self::DEFAULT_MCC__3187,
            self::DEFAULT_MCC__3188,
            self::DEFAULT_MCC__3189,
            self::DEFAULT_MCC__3190,
            self::DEFAULT_MCC__3191,
            self::DEFAULT_MCC__3192,
            self::DEFAULT_MCC__3193,
            self::DEFAULT_MCC__3194,
            self::DEFAULT_MCC__3195,
            self::DEFAULT_MCC__3196,
            self::DEFAULT_MCC__3197,
            self::DEFAULT_MCC__3198,
            self::DEFAULT_MCC__3199,
            self::DEFAULT_MCC__3200,
            self::DEFAULT_MCC__3201,
            self::DEFAULT_MCC__3202,
            self::DEFAULT_MCC__3203,
            self::DEFAULT_MCC__3204,
            self::DEFAULT_MCC__3205,
            self::DEFAULT_MCC__3206,
            self::DEFAULT_MCC__3207,
            self::DEFAULT_MCC__3208,
            self::DEFAULT_MCC__3209,
            self::DEFAULT_MCC__3210,
            self::DEFAULT_MCC__3211,
            self::DEFAULT_MCC__3212,
            self::DEFAULT_MCC__3213,
            self::DEFAULT_MCC__3214,
            self::DEFAULT_MCC__3215,
            self::DEFAULT_MCC__3216,
            self::DEFAULT_MCC__3217,
            self::DEFAULT_MCC__3218,
            self::DEFAULT_MCC__3219,
            self::DEFAULT_MCC__3220,
            self::DEFAULT_MCC__3221,
            self::DEFAULT_MCC__3222,
            self::DEFAULT_MCC__3223,
            self::DEFAULT_MCC__3224,
            self::DEFAULT_MCC__3225,
            self::DEFAULT_MCC__3226,
            self::DEFAULT_MCC__3227,
            self::DEFAULT_MCC__3228,
            self::DEFAULT_MCC__3229,
            self::DEFAULT_MCC__3230,
            self::DEFAULT_MCC__3231,
            self::DEFAULT_MCC__3232,
            self::DEFAULT_MCC__3233,
            self::DEFAULT_MCC__3234,
            self::DEFAULT_MCC__3235,
            self::DEFAULT_MCC__3236,
            self::DEFAULT_MCC__3237,
            self::DEFAULT_MCC__3238,
            self::DEFAULT_MCC__3239,
            self::DEFAULT_MCC__3240,
            self::DEFAULT_MCC__3241,
            self::DEFAULT_MCC__3242,
            self::DEFAULT_MCC__3243,
            self::DEFAULT_MCC__3244,
            self::DEFAULT_MCC__3245,
            self::DEFAULT_MCC__3246,
            self::DEFAULT_MCC__3247,
            self::DEFAULT_MCC__3248,
            self::DEFAULT_MCC__3249,
            self::DEFAULT_MCC__3250,
            self::DEFAULT_MCC__3251,
            self::DEFAULT_MCC__3252,
            self::DEFAULT_MCC__3253,
            self::DEFAULT_MCC__3254,
            self::DEFAULT_MCC__3255,
            self::DEFAULT_MCC__3256,
            self::DEFAULT_MCC__3257,
            self::DEFAULT_MCC__3258,
            self::DEFAULT_MCC__3259,
            self::DEFAULT_MCC__3260,
            self::DEFAULT_MCC__3261,
            self::DEFAULT_MCC__3262,
            self::DEFAULT_MCC__3263,
            self::DEFAULT_MCC__3264,
            self::DEFAULT_MCC__3265,
            self::DEFAULT_MCC__3266,
            self::DEFAULT_MCC__3267,
            self::DEFAULT_MCC__3268,
            self::DEFAULT_MCC__3269,
            self::DEFAULT_MCC__3270,
            self::DEFAULT_MCC__3271,
            self::DEFAULT_MCC__3272,
            self::DEFAULT_MCC__3273,
            self::DEFAULT_MCC__3274,
            self::DEFAULT_MCC__3275,
            self::DEFAULT_MCC__3276,
            self::DEFAULT_MCC__3277,
            self::DEFAULT_MCC__3278,
            self::DEFAULT_MCC__3279,
            self::DEFAULT_MCC__3280,
            self::DEFAULT_MCC__3281,
            self::DEFAULT_MCC__3282,
            self::DEFAULT_MCC__3283,
            self::DEFAULT_MCC__3284,
            self::DEFAULT_MCC__3285,
            self::DEFAULT_MCC__3286,
            self::DEFAULT_MCC__3287,
            self::DEFAULT_MCC__3288,
            self::DEFAULT_MCC__3289,
            self::DEFAULT_MCC__3290,
            self::DEFAULT_MCC__3291,
            self::DEFAULT_MCC__3292,
            self::DEFAULT_MCC__3293,
            self::DEFAULT_MCC__3294,
            self::DEFAULT_MCC__3295,
            self::DEFAULT_MCC__3296,
            self::DEFAULT_MCC__3297,
            self::DEFAULT_MCC__3298,
            self::DEFAULT_MCC__3299,
            self::DEFAULT_MCC__3351,
            self::DEFAULT_MCC__3352,
            self::DEFAULT_MCC__3353,
            self::DEFAULT_MCC__3354,
            self::DEFAULT_MCC__3355,
            self::DEFAULT_MCC__3356,
            self::DEFAULT_MCC__3357,
            self::DEFAULT_MCC__3358,
            self::DEFAULT_MCC__3359,
            self::DEFAULT_MCC__3360,
            self::DEFAULT_MCC__3361,
            self::DEFAULT_MCC__3362,
            self::DEFAULT_MCC__3363,
            self::DEFAULT_MCC__3364,
            self::DEFAULT_MCC__3365,
            self::DEFAULT_MCC__3366,
            self::DEFAULT_MCC__3367,
            self::DEFAULT_MCC__3368,
            self::DEFAULT_MCC__3369,
            self::DEFAULT_MCC__3370,
            self::DEFAULT_MCC__3371,
            self::DEFAULT_MCC__3372,
            self::DEFAULT_MCC__3373,
            self::DEFAULT_MCC__3374,
            self::DEFAULT_MCC__3375,
            self::DEFAULT_MCC__3376,
            self::DEFAULT_MCC__3377,
            self::DEFAULT_MCC__3378,
            self::DEFAULT_MCC__3379,
            self::DEFAULT_MCC__3380,
            self::DEFAULT_MCC__3381,
            self::DEFAULT_MCC__3382,
            self::DEFAULT_MCC__3383,
            self::DEFAULT_MCC__3384,
            self::DEFAULT_MCC__3385,
            self::DEFAULT_MCC__3386,
            self::DEFAULT_MCC__3387,
            self::DEFAULT_MCC__3388,
            self::DEFAULT_MCC__3389,
            self::DEFAULT_MCC__3390,
            self::DEFAULT_MCC__3391,
            self::DEFAULT_MCC__3392,
            self::DEFAULT_MCC__3393,
            self::DEFAULT_MCC__3394,
            self::DEFAULT_MCC__3395,
            self::DEFAULT_MCC__3396,
            self::DEFAULT_MCC__3397,
            self::DEFAULT_MCC__3398,
            self::DEFAULT_MCC__3399,
            self::DEFAULT_MCC__3400,
            self::DEFAULT_MCC__3401,
            self::DEFAULT_MCC__3402,
            self::DEFAULT_MCC__3403,
            self::DEFAULT_MCC__3404,
            self::DEFAULT_MCC__3405,
            self::DEFAULT_MCC__3406,
            self::DEFAULT_MCC__3407,
            self::DEFAULT_MCC__3408,
            self::DEFAULT_MCC__3409,
            self::DEFAULT_MCC__3410,
            self::DEFAULT_MCC__3411,
            self::DEFAULT_MCC__3412,
            self::DEFAULT_MCC__3413,
            self::DEFAULT_MCC__3414,
            self::DEFAULT_MCC__3415,
            self::DEFAULT_MCC__3416,
            self::DEFAULT_MCC__3417,
            self::DEFAULT_MCC__3418,
            self::DEFAULT_MCC__3419,
            self::DEFAULT_MCC__3420,
            self::DEFAULT_MCC__3421,
            self::DEFAULT_MCC__3422,
            self::DEFAULT_MCC__3423,
            self::DEFAULT_MCC__3424,
            self::DEFAULT_MCC__3425,
            self::DEFAULT_MCC__3426,
            self::DEFAULT_MCC__3427,
            self::DEFAULT_MCC__3428,
            self::DEFAULT_MCC__3429,
            self::DEFAULT_MCC__3430,
            self::DEFAULT_MCC__3431,
            self::DEFAULT_MCC__3432,
            self::DEFAULT_MCC__3433,
            self::DEFAULT_MCC__3434,
            self::DEFAULT_MCC__3435,
            self::DEFAULT_MCC__3436,
            self::DEFAULT_MCC__3437,
            self::DEFAULT_MCC__3438,
            self::DEFAULT_MCC__3439,
            self::DEFAULT_MCC__3440,
            self::DEFAULT_MCC__3441,
            self::DEFAULT_MCC__3501,
            self::DEFAULT_MCC__3502,
            self::DEFAULT_MCC__3503,
            self::DEFAULT_MCC__3504,
            self::DEFAULT_MCC__3505,
            self::DEFAULT_MCC__3506,
            self::DEFAULT_MCC__3507,
            self::DEFAULT_MCC__3508,
            self::DEFAULT_MCC__3509,
            self::DEFAULT_MCC__3510,
            self::DEFAULT_MCC__3511,
            self::DEFAULT_MCC__3512,
            self::DEFAULT_MCC__3513,
            self::DEFAULT_MCC__3514,
            self::DEFAULT_MCC__3515,
            self::DEFAULT_MCC__3516,
            self::DEFAULT_MCC__3517,
            self::DEFAULT_MCC__3518,
            self::DEFAULT_MCC__3519,
            self::DEFAULT_MCC__3520,
            self::DEFAULT_MCC__3521,
            self::DEFAULT_MCC__3522,
            self::DEFAULT_MCC__3523,
            self::DEFAULT_MCC__3524,
            self::DEFAULT_MCC__3525,
            self::DEFAULT_MCC__3526,
            self::DEFAULT_MCC__3527,
            self::DEFAULT_MCC__3528,
            self::DEFAULT_MCC__3529,
            self::DEFAULT_MCC__3530,
            self::DEFAULT_MCC__3531,
            self::DEFAULT_MCC__3532,
            self::DEFAULT_MCC__3533,
            self::DEFAULT_MCC__3534,
            self::DEFAULT_MCC__3535,
            self::DEFAULT_MCC__3536,
            self::DEFAULT_MCC__3537,
            self::DEFAULT_MCC__3538,
            self::DEFAULT_MCC__3539,
            self::DEFAULT_MCC__3540,
            self::DEFAULT_MCC__3541,
            self::DEFAULT_MCC__3542,
            self::DEFAULT_MCC__3543,
            self::DEFAULT_MCC__3544,
            self::DEFAULT_MCC__3545,
            self::DEFAULT_MCC__3546,
            self::DEFAULT_MCC__3547,
            self::DEFAULT_MCC__3548,
            self::DEFAULT_MCC__3549,
            self::DEFAULT_MCC__3550,
            self::DEFAULT_MCC__3551,
            self::DEFAULT_MCC__3552,
            self::DEFAULT_MCC__3553,
            self::DEFAULT_MCC__3554,
            self::DEFAULT_MCC__3555,
            self::DEFAULT_MCC__3556,
            self::DEFAULT_MCC__3557,
            self::DEFAULT_MCC__3558,
            self::DEFAULT_MCC__3559,
            self::DEFAULT_MCC__3560,
            self::DEFAULT_MCC__3561,
            self::DEFAULT_MCC__3562,
            self::DEFAULT_MCC__3563,
            self::DEFAULT_MCC__3564,
            self::DEFAULT_MCC__3565,
            self::DEFAULT_MCC__3566,
            self::DEFAULT_MCC__3567,
            self::DEFAULT_MCC__3568,
            self::DEFAULT_MCC__3569,
            self::DEFAULT_MCC__3570,
            self::DEFAULT_MCC__3571,
            self::DEFAULT_MCC__3572,
            self::DEFAULT_MCC__3573,
            self::DEFAULT_MCC__3574,
            self::DEFAULT_MCC__3575,
            self::DEFAULT_MCC__3576,
            self::DEFAULT_MCC__3577,
            self::DEFAULT_MCC__3578,
            self::DEFAULT_MCC__3579,
            self::DEFAULT_MCC__3580,
            self::DEFAULT_MCC__3581,
            self::DEFAULT_MCC__3582,
            self::DEFAULT_MCC__3583,
            self::DEFAULT_MCC__3584,
            self::DEFAULT_MCC__3585,
            self::DEFAULT_MCC__3586,
            self::DEFAULT_MCC__3587,
            self::DEFAULT_MCC__3588,
            self::DEFAULT_MCC__3589,
            self::DEFAULT_MCC__3590,
            self::DEFAULT_MCC__3591,
            self::DEFAULT_MCC__3592,
            self::DEFAULT_MCC__3593,
            self::DEFAULT_MCC__3594,
            self::DEFAULT_MCC__3595,
            self::DEFAULT_MCC__3596,
            self::DEFAULT_MCC__3597,
            self::DEFAULT_MCC__3598,
            self::DEFAULT_MCC__3599,
            self::DEFAULT_MCC__3600,
            self::DEFAULT_MCC__3601,
            self::DEFAULT_MCC__3602,
            self::DEFAULT_MCC__3603,
            self::DEFAULT_MCC__3604,
            self::DEFAULT_MCC__3605,
            self::DEFAULT_MCC__3606,
            self::DEFAULT_MCC__3607,
            self::DEFAULT_MCC__3608,
            self::DEFAULT_MCC__3609,
            self::DEFAULT_MCC__3610,
            self::DEFAULT_MCC__3611,
            self::DEFAULT_MCC__3612,
            self::DEFAULT_MCC__3613,
            self::DEFAULT_MCC__3614,
            self::DEFAULT_MCC__3615,
            self::DEFAULT_MCC__3616,
            self::DEFAULT_MCC__3617,
            self::DEFAULT_MCC__3618,
            self::DEFAULT_MCC__3619,
            self::DEFAULT_MCC__3620,
            self::DEFAULT_MCC__3621,
            self::DEFAULT_MCC__3622,
            self::DEFAULT_MCC__3623,
            self::DEFAULT_MCC__3624,
            self::DEFAULT_MCC__3625,
            self::DEFAULT_MCC__3626,
            self::DEFAULT_MCC__3627,
            self::DEFAULT_MCC__3628,
            self::DEFAULT_MCC__3629,
            self::DEFAULT_MCC__3630,
            self::DEFAULT_MCC__3631,
            self::DEFAULT_MCC__3632,
            self::DEFAULT_MCC__3633,
            self::DEFAULT_MCC__3634,
            self::DEFAULT_MCC__3635,
            self::DEFAULT_MCC__3636,
            self::DEFAULT_MCC__3637,
            self::DEFAULT_MCC__3638,
            self::DEFAULT_MCC__3639,
            self::DEFAULT_MCC__3640,
            self::DEFAULT_MCC__3641,
            self::DEFAULT_MCC__3642,
            self::DEFAULT_MCC__3643,
            self::DEFAULT_MCC__3644,
            self::DEFAULT_MCC__3645,
            self::DEFAULT_MCC__3646,
            self::DEFAULT_MCC__3647,
            self::DEFAULT_MCC__3648,
            self::DEFAULT_MCC__3649,
            self::DEFAULT_MCC__3650,
            self::DEFAULT_MCC__3651,
            self::DEFAULT_MCC__3652,
            self::DEFAULT_MCC__3653,
            self::DEFAULT_MCC__3654,
            self::DEFAULT_MCC__3655,
            self::DEFAULT_MCC__3656,
            self::DEFAULT_MCC__3657,
            self::DEFAULT_MCC__3658,
            self::DEFAULT_MCC__3659,
            self::DEFAULT_MCC__3660,
            self::DEFAULT_MCC__3661,
            self::DEFAULT_MCC__3662,
            self::DEFAULT_MCC__3663,
            self::DEFAULT_MCC__3664,
            self::DEFAULT_MCC__3665,
            self::DEFAULT_MCC__3666,
            self::DEFAULT_MCC__3667,
            self::DEFAULT_MCC__3668,
            self::DEFAULT_MCC__3669,
            self::DEFAULT_MCC__3670,
            self::DEFAULT_MCC__3671,
            self::DEFAULT_MCC__3672,
            self::DEFAULT_MCC__3673,
            self::DEFAULT_MCC__3674,
            self::DEFAULT_MCC__3675,
            self::DEFAULT_MCC__3676,
            self::DEFAULT_MCC__3677,
            self::DEFAULT_MCC__3678,
            self::DEFAULT_MCC__3679,
            self::DEFAULT_MCC__3680,
            self::DEFAULT_MCC__3681,
            self::DEFAULT_MCC__3682,
            self::DEFAULT_MCC__3683,
            self::DEFAULT_MCC__3684,
            self::DEFAULT_MCC__3685,
            self::DEFAULT_MCC__3686,
            self::DEFAULT_MCC__3687,
            self::DEFAULT_MCC__3688,
            self::DEFAULT_MCC__3689,
            self::DEFAULT_MCC__3690,
            self::DEFAULT_MCC__3691,
            self::DEFAULT_MCC__3692,
            self::DEFAULT_MCC__3693,
            self::DEFAULT_MCC__3694,
            self::DEFAULT_MCC__3695,
            self::DEFAULT_MCC__3696,
            self::DEFAULT_MCC__3697,
            self::DEFAULT_MCC__3698,
            self::DEFAULT_MCC__3699,
            self::DEFAULT_MCC__3700,
            self::DEFAULT_MCC__3701,
            self::DEFAULT_MCC__3702,
            self::DEFAULT_MCC__3703,
            self::DEFAULT_MCC__3704,
            self::DEFAULT_MCC__3705,
            self::DEFAULT_MCC__3706,
            self::DEFAULT_MCC__3707,
            self::DEFAULT_MCC__3708,
            self::DEFAULT_MCC__3709,
            self::DEFAULT_MCC__3710,
            self::DEFAULT_MCC__3711,
            self::DEFAULT_MCC__3712,
            self::DEFAULT_MCC__3713,
            self::DEFAULT_MCC__3714,
            self::DEFAULT_MCC__3715,
            self::DEFAULT_MCC__3716,
            self::DEFAULT_MCC__3717,
            self::DEFAULT_MCC__3718,
            self::DEFAULT_MCC__3719,
            self::DEFAULT_MCC__3720,
            self::DEFAULT_MCC__3721,
            self::DEFAULT_MCC__3722,
            self::DEFAULT_MCC__3723,
            self::DEFAULT_MCC__3724,
            self::DEFAULT_MCC__3725,
            self::DEFAULT_MCC__3726,
            self::DEFAULT_MCC__3727,
            self::DEFAULT_MCC__3728,
            self::DEFAULT_MCC__3729,
            self::DEFAULT_MCC__3730,
            self::DEFAULT_MCC__3731,
            self::DEFAULT_MCC__3732,
            self::DEFAULT_MCC__3733,
            self::DEFAULT_MCC__3734,
            self::DEFAULT_MCC__3735,
            self::DEFAULT_MCC__3736,
            self::DEFAULT_MCC__3737,
            self::DEFAULT_MCC__3738,
            self::DEFAULT_MCC__3739,
            self::DEFAULT_MCC__3740,
            self::DEFAULT_MCC__3741,
            self::DEFAULT_MCC__3742,
            self::DEFAULT_MCC__3743,
            self::DEFAULT_MCC__3744,
            self::DEFAULT_MCC__3745,
            self::DEFAULT_MCC__3746,
            self::DEFAULT_MCC__3747,
            self::DEFAULT_MCC__3748,
            self::DEFAULT_MCC__3749,
            self::DEFAULT_MCC__3750,
            self::DEFAULT_MCC__3751,
            self::DEFAULT_MCC__3752,
            self::DEFAULT_MCC__3753,
            self::DEFAULT_MCC__3754,
            self::DEFAULT_MCC__3755,
            self::DEFAULT_MCC__3756,
            self::DEFAULT_MCC__3757,
            self::DEFAULT_MCC__3758,
            self::DEFAULT_MCC__3759,
            self::DEFAULT_MCC__3760,
            self::DEFAULT_MCC__3761,
            self::DEFAULT_MCC__3762,
            self::DEFAULT_MCC__3763,
            self::DEFAULT_MCC__3764,
            self::DEFAULT_MCC__3765,
            self::DEFAULT_MCC__3766,
            self::DEFAULT_MCC__3767,
            self::DEFAULT_MCC__3768,
            self::DEFAULT_MCC__3769,
            self::DEFAULT_MCC__3770,
            self::DEFAULT_MCC__3771,
            self::DEFAULT_MCC__3772,
            self::DEFAULT_MCC__3773,
            self::DEFAULT_MCC__3774,
            self::DEFAULT_MCC__3775,
            self::DEFAULT_MCC__3776,
            self::DEFAULT_MCC__3777,
            self::DEFAULT_MCC__3778,
            self::DEFAULT_MCC__3779,
            self::DEFAULT_MCC__3780,
            self::DEFAULT_MCC__3781,
            self::DEFAULT_MCC__3782,
            self::DEFAULT_MCC__3783,
            self::DEFAULT_MCC__3784,
            self::DEFAULT_MCC__3785,
            self::DEFAULT_MCC__3786,
            self::DEFAULT_MCC__3787,
            self::DEFAULT_MCC__3788,
            self::DEFAULT_MCC__3789,
            self::DEFAULT_MCC__3790,
            self::DEFAULT_MCC__3816,
            self::DEFAULT_MCC__3835,
            self::DEFAULT_MCC__4011,
            self::DEFAULT_MCC__4111,
            self::DEFAULT_MCC__4112,
            self::DEFAULT_MCC__4119,
            self::DEFAULT_MCC__4121,
            self::DEFAULT_MCC__4131,
            self::DEFAULT_MCC__4214,
            self::DEFAULT_MCC__4215,
            self::DEFAULT_MCC__4225,
            self::DEFAULT_MCC__4411,
            self::DEFAULT_MCC__4457,
            self::DEFAULT_MCC__4468,
            self::DEFAULT_MCC__4511,
            self::DEFAULT_MCC__4582,
            self::DEFAULT_MCC__4722,
            self::DEFAULT_MCC__4723,
            self::DEFAULT_MCC__4784,
            self::DEFAULT_MCC__4789,
            self::DEFAULT_MCC__4812,
            self::DEFAULT_MCC__4814,
            self::DEFAULT_MCC__4815,
            self::DEFAULT_MCC__4816,
            self::DEFAULT_MCC__4821,
            self::DEFAULT_MCC__4829,
            self::DEFAULT_MCC__4899,
            self::DEFAULT_MCC__4900,
            self::DEFAULT_MCC__5013,
            self::DEFAULT_MCC__5021,
            self::DEFAULT_MCC__5039,
            self::DEFAULT_MCC__5044,
            self::DEFAULT_MCC__5045,
            self::DEFAULT_MCC__5046,
            self::DEFAULT_MCC__5047,
            self::DEFAULT_MCC__5051,
            self::DEFAULT_MCC__5065,
            self::DEFAULT_MCC__5072,
            self::DEFAULT_MCC__5074,
            self::DEFAULT_MCC__5085,
            self::DEFAULT_MCC__5094,
            self::DEFAULT_MCC__5099,
            self::DEFAULT_MCC__5111,
            self::DEFAULT_MCC__5122,
            self::DEFAULT_MCC__5131,
            self::DEFAULT_MCC__5137,
            self::DEFAULT_MCC__5139,
            self::DEFAULT_MCC__5169,
            self::DEFAULT_MCC__5172,
            self::DEFAULT_MCC__5192,
            self::DEFAULT_MCC__5193,
            self::DEFAULT_MCC__5198,
            self::DEFAULT_MCC__5199,
            self::DEFAULT_MCC__5200,
            self::DEFAULT_MCC__5211,
            self::DEFAULT_MCC__5231,
            self::DEFAULT_MCC__5251,
            self::DEFAULT_MCC__5261,
            self::DEFAULT_MCC__5271,
            self::DEFAULT_MCC__5300,
            self::DEFAULT_MCC__5309,
            self::DEFAULT_MCC__5310,
            self::DEFAULT_MCC__5311,
            self::DEFAULT_MCC__5331,
            self::DEFAULT_MCC__5399,
            self::DEFAULT_MCC__5411,
            self::DEFAULT_MCC__5422,
            self::DEFAULT_MCC__5441,
            self::DEFAULT_MCC__5451,
            self::DEFAULT_MCC__5462,
            self::DEFAULT_MCC__5499,
            self::DEFAULT_MCC__5511,
            self::DEFAULT_MCC__5521,
            self::DEFAULT_MCC__5531,
            self::DEFAULT_MCC__5532,
            self::DEFAULT_MCC__5533,
            self::DEFAULT_MCC__5541,
            self::DEFAULT_MCC__5542,
            self::DEFAULT_MCC__5551,
            self::DEFAULT_MCC__5561,
            self::DEFAULT_MCC__5571,
            self::DEFAULT_MCC__5592,
            self::DEFAULT_MCC__5598,
            self::DEFAULT_MCC__5599,
            self::DEFAULT_MCC__5611,
            self::DEFAULT_MCC__5621,
            self::DEFAULT_MCC__5631,
            self::DEFAULT_MCC__5641,
            self::DEFAULT_MCC__5651,
            self::DEFAULT_MCC__5655,
            self::DEFAULT_MCC__5661,
            self::DEFAULT_MCC__5681,
            self::DEFAULT_MCC__5691,
            self::DEFAULT_MCC__5697,
            self::DEFAULT_MCC__5698,
            self::DEFAULT_MCC__5699,
            self::DEFAULT_MCC__5712,
            self::DEFAULT_MCC__5713,
            self::DEFAULT_MCC__5714,
            self::DEFAULT_MCC__5718,
            self::DEFAULT_MCC__5719,
            self::DEFAULT_MCC__5722,
            self::DEFAULT_MCC__5732,
            self::DEFAULT_MCC__5733,
            self::DEFAULT_MCC__5734,
            self::DEFAULT_MCC__5735,
            self::DEFAULT_MCC__5811,
            self::DEFAULT_MCC__5812,
            self::DEFAULT_MCC__5813,
            self::DEFAULT_MCC__5814,
            self::DEFAULT_MCC__5815,
            self::DEFAULT_MCC__5816,
            self::DEFAULT_MCC__5817,
            self::DEFAULT_MCC__5818,
            self::DEFAULT_MCC__5832,
            self::DEFAULT_MCC__5912,
            self::DEFAULT_MCC__5921,
            self::DEFAULT_MCC__5931,
            self::DEFAULT_MCC__5932,
            self::DEFAULT_MCC__5933,
            self::DEFAULT_MCC__5935,
            self::DEFAULT_MCC__5937,
            self::DEFAULT_MCC__5940,
            self::DEFAULT_MCC__5941,
            self::DEFAULT_MCC__5942,
            self::DEFAULT_MCC__5943,
            self::DEFAULT_MCC__5944,
            self::DEFAULT_MCC__5945,
            self::DEFAULT_MCC__5946,
            self::DEFAULT_MCC__5947,
            self::DEFAULT_MCC__5948,
            self::DEFAULT_MCC__5949,
            self::DEFAULT_MCC__5950,
            self::DEFAULT_MCC__5960,
            self::DEFAULT_MCC__5961,
            self::DEFAULT_MCC__5962,
            self::DEFAULT_MCC__5963,
            self::DEFAULT_MCC__5964,
            self::DEFAULT_MCC__5965,
            self::DEFAULT_MCC__5966,
            self::DEFAULT_MCC__5967,
            self::DEFAULT_MCC__5968,
            self::DEFAULT_MCC__5969,
            self::DEFAULT_MCC__5970,
            self::DEFAULT_MCC__5971,
            self::DEFAULT_MCC__5972,
            self::DEFAULT_MCC__5973,
            self::DEFAULT_MCC__5975,
            self::DEFAULT_MCC__5976,
            self::DEFAULT_MCC__5977,
            self::DEFAULT_MCC__5978,
            self::DEFAULT_MCC__5983,
            self::DEFAULT_MCC__5992,
            self::DEFAULT_MCC__5993,
            self::DEFAULT_MCC__5994,
            self::DEFAULT_MCC__5995,
            self::DEFAULT_MCC__5996,
            self::DEFAULT_MCC__5997,
            self::DEFAULT_MCC__5998,
            self::DEFAULT_MCC__5999,
            self::DEFAULT_MCC__6010,
            self::DEFAULT_MCC__6011,
            self::DEFAULT_MCC__6012,
            self::DEFAULT_MCC__6051,
            self::DEFAULT_MCC__6211,
            self::DEFAULT_MCC__6300,
            self::DEFAULT_MCC__6381,
            self::DEFAULT_MCC__6399,
            self::DEFAULT_MCC__6513,
            self::DEFAULT_MCC__7011,
            self::DEFAULT_MCC__7012,
            self::DEFAULT_MCC__7032,
            self::DEFAULT_MCC__7033,
            self::DEFAULT_MCC__7210,
            self::DEFAULT_MCC__7211,
            self::DEFAULT_MCC__7216,
            self::DEFAULT_MCC__7217,
            self::DEFAULT_MCC__7221,
            self::DEFAULT_MCC__7230,
            self::DEFAULT_MCC__7251,
            self::DEFAULT_MCC__7261,
            self::DEFAULT_MCC__7273,
            self::DEFAULT_MCC__7276,
            self::DEFAULT_MCC__7277,
            self::DEFAULT_MCC__7278,
            self::DEFAULT_MCC__7296,
            self::DEFAULT_MCC__7297,
            self::DEFAULT_MCC__7298,
            self::DEFAULT_MCC__7299,
            self::DEFAULT_MCC__7311,
            self::DEFAULT_MCC__7321,
            self::DEFAULT_MCC__7332,
            self::DEFAULT_MCC__7333,
            self::DEFAULT_MCC__7338,
            self::DEFAULT_MCC__7339,
            self::DEFAULT_MCC__7342,
            self::DEFAULT_MCC__7349,
            self::DEFAULT_MCC__7361,
            self::DEFAULT_MCC__7372,
            self::DEFAULT_MCC__7375,
            self::DEFAULT_MCC__7379,
            self::DEFAULT_MCC__7392,
            self::DEFAULT_MCC__7393,
            self::DEFAULT_MCC__7394,
            self::DEFAULT_MCC__7395,
            self::DEFAULT_MCC__7399,
            self::DEFAULT_MCC__7511,
            self::DEFAULT_MCC__7512,
            self::DEFAULT_MCC__7513,
            self::DEFAULT_MCC__7519,
            self::DEFAULT_MCC__7523,
            self::DEFAULT_MCC__7531,
            self::DEFAULT_MCC__7534,
            self::DEFAULT_MCC__7535,
            self::DEFAULT_MCC__7538,
            self::DEFAULT_MCC__7542,
            self::DEFAULT_MCC__7549,
            self::DEFAULT_MCC__7622,
            self::DEFAULT_MCC__7623,
            self::DEFAULT_MCC__7629,
            self::DEFAULT_MCC__7631,
            self::DEFAULT_MCC__7641,
            self::DEFAULT_MCC__7692,
            self::DEFAULT_MCC__7699,
            self::DEFAULT_MCC__7800,
            self::DEFAULT_MCC__7801,
            self::DEFAULT_MCC__7802,
            self::DEFAULT_MCC__7829,
            self::DEFAULT_MCC__7832,
            self::DEFAULT_MCC__7841,
            self::DEFAULT_MCC__7911,
            self::DEFAULT_MCC__7922,
            self::DEFAULT_MCC__7929,
            self::DEFAULT_MCC__7932,
            self::DEFAULT_MCC__7933,
            self::DEFAULT_MCC__7941,
            self::DEFAULT_MCC__7991,
            self::DEFAULT_MCC__7992,
            self::DEFAULT_MCC__7993,
            self::DEFAULT_MCC__7994,
            self::DEFAULT_MCC__7995,
            self::DEFAULT_MCC__7996,
            self::DEFAULT_MCC__7997,
            self::DEFAULT_MCC__7998,
            self::DEFAULT_MCC__7999,
            self::DEFAULT_MCC__8011,
            self::DEFAULT_MCC__8021,
            self::DEFAULT_MCC__8031,
            self::DEFAULT_MCC__8041,
            self::DEFAULT_MCC__8042,
            self::DEFAULT_MCC__8043,
            self::DEFAULT_MCC__8044,
            self::DEFAULT_MCC__8049,
            self::DEFAULT_MCC__8050,
            self::DEFAULT_MCC__8062,
            self::DEFAULT_MCC__8071,
            self::DEFAULT_MCC__8099,
            self::DEFAULT_MCC__8111,
            self::DEFAULT_MCC__8211,
            self::DEFAULT_MCC__8220,
            self::DEFAULT_MCC__8241,
            self::DEFAULT_MCC__8244,
            self::DEFAULT_MCC__8249,
            self::DEFAULT_MCC__8299,
            self::DEFAULT_MCC__8351,
            self::DEFAULT_MCC__8398,
            self::DEFAULT_MCC__8641,
            self::DEFAULT_MCC__8651,
            self::DEFAULT_MCC__8661,
            self::DEFAULT_MCC__8675,
            self::DEFAULT_MCC__8699,
            self::DEFAULT_MCC__8734,
            self::DEFAULT_MCC__8911,
            self::DEFAULT_MCC__8931,
            self::DEFAULT_MCC__8999,
            self::DEFAULT_MCC__9211,
            self::DEFAULT_MCC__9222,
            self::DEFAULT_MCC__9223,
            self::DEFAULT_MCC__9311,
            self::DEFAULT_MCC__9399,
            self::DEFAULT_MCC__9402,
            self::DEFAULT_MCC__9405,
            self::DEFAULT_MCC__9700,
            self::DEFAULT_MCC__9701,
            self::DEFAULT_MCC__9702,
            self::DEFAULT_MCC__9950,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMotoEciindicatorAllowableValues()
    {
        return [
            self::MOTO_ECIINDICATOR__5,
            self::MOTO_ECIINDICATOR__6,
            self::MOTO_ECIINDICATOR__7,
            self::MOTO_ECIINDICATOR__8,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPanEntryModeAllowableValues()
    {
        return [
            self::PAN_ENTRY_MODE__00,
            self::PAN_ENTRY_MODE__01,
            self::PAN_ENTRY_MODE__02,
            self::PAN_ENTRY_MODE__03,
            self::PAN_ENTRY_MODE__04,
            self::PAN_ENTRY_MODE__05,
            self::PAN_ENTRY_MODE__06,
            self::PAN_ENTRY_MODE__07,
            self::PAN_ENTRY_MODE__08,
            self::PAN_ENTRY_MODE__09,
            self::PAN_ENTRY_MODE__10,
            self::PAN_ENTRY_MODE__80,
            self::PAN_ENTRY_MODE__82,
            self::PAN_ENTRY_MODE__83,
            self::PAN_ENTRY_MODE__90,
            self::PAN_ENTRY_MODE__91,
            self::PAN_ENTRY_MODE__95,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPosConditionCodeAllowableValues()
    {
        return [
            self::POS_CONDITION_CODE__00,
            self::POS_CONDITION_CODE__01,
            self::POS_CONDITION_CODE__02,
            self::POS_CONDITION_CODE__03,
            self::POS_CONDITION_CODE__05,
            self::POS_CONDITION_CODE__06,
            self::POS_CONDITION_CODE__08,
            self::POS_CONDITION_CODE__10,
            self::POS_CONDITION_CODE__51,
            self::POS_CONDITION_CODE__59,
            self::POS_CONDITION_CODE__71,
            self::POS_CONDITION_CODE__73,
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
        $this->container['ach_settlement_delay_days'] = $data['ach_settlement_delay_days'] ?? null;
        $this->container['allow_split_payouts'] = $data['allow_split_payouts'] ?? null;
        $this->container['allowed_business_application_ids'] = $data['allowed_business_application_ids'] ?? null;
        $this->container['card_acceptor_id_code'] = $data['card_acceptor_id_code'] ?? null;
        $this->container['card_acceptor_terminal_id'] = $data['card_acceptor_terminal_id'] ?? null;
        $this->container['configuration_templates'] = $data['configuration_templates'] ?? null;
        $this->container['default_currencies'] = $data['default_currencies'] ?? null;
        $this->container['default_mcc'] = $data['default_mcc'] ?? null;
        $this->container['default_sender_account_number'] = $data['default_sender_account_number'] ?? null;
        $this->container['default_sender_address'] = $data['default_sender_address'] ?? null;
        $this->container['default_sender_city'] = $data['default_sender_city'] ?? null;
        $this->container['default_sender_country'] = $data['default_sender_country'] ?? null;
        $this->container['default_sender_country_code'] = $data['default_sender_country_code'] ?? null;
        $this->container['default_sender_county_code'] = $data['default_sender_county_code'] ?? null;
        $this->container['default_sender_name'] = $data['default_sender_name'] ?? null;
        $this->container['default_sender_state_code'] = $data['default_sender_state_code'] ?? null;
        $this->container['default_sender_zip_code'] = $data['default_sender_zip_code'] ?? null;
        $this->container['include_colombia_data'] = $data['include_colombia_data'] ?? null;
        $this->container['moto_eciindicator'] = $data['moto_eciindicator'] ?? null;
        $this->container['pan_entry_mode'] = $data['pan_entry_mode'] ?? null;
        $this->container['pos_condition_code'] = $data['pos_condition_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['ach_settlement_delay_days']) && ($this->container['ach_settlement_delay_days'] < 0)) {
            $invalidProperties[] = "invalid value for 'ach_settlement_delay_days', must be bigger than or equal to 0.";
        }
        
        $allowedValues = $this->getDefaultMccAllowableValues();
        if (!is_null($this->container['default_mcc']) && !in_array($this->container['default_mcc'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'default_mcc', must be one of '%s'",
                $this->container['default_mcc'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMotoEciindicatorAllowableValues();
        if (!is_null($this->container['moto_eciindicator']) && !in_array($this->container['moto_eciindicator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'moto_eciindicator', must be one of '%s'",
                $this->container['moto_eciindicator'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPanEntryModeAllowableValues();
        if (!is_null($this->container['pan_entry_mode']) && !in_array($this->container['pan_entry_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'pan_entry_mode', must be one of '%s'",
                $this->container['pan_entry_mode'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPosConditionCodeAllowableValues();
        if (!is_null($this->container['pos_condition_code']) && !in_array($this->container['pos_condition_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'pos_condition_code', must be one of '%s'",
                $this->container['pos_condition_code'],
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
     * Gets ach_settlement_delay_days
     *
     * @return int|null
     */
    public function getAchSettlementDelayDays()
    {
        return $this->container['ach_settlement_delay_days'];
    }

    /**
     * Sets ach_settlement_delay_days
     *
     * @param int|null $ach_settlement_delay_days Details how days ACH settlments are delayed by.
     *
     * @return self
     */
    public function setAchSettlementDelayDays($ach_settlement_delay_days, $deserialize = false)
    {

        if (!is_null($ach_settlement_delay_days) && ($ach_settlement_delay_days < 0)) {
            throw new \InvalidArgumentException('invalid value for $ach_settlement_delay_days when calling ProcessorApplicationConfig., must be bigger than or equal to 0.');
        }
        

        $this->container['ach_settlement_delay_days'] = $ach_settlement_delay_days;

        return $this;
    }

    /**
     * Gets allow_split_payouts
     *
     * @return bool|null
     */
    public function getAllowSplitPayouts()
    {
        return $this->container['allow_split_payouts'];
    }

    /**
     * Sets allow_split_payouts
     *
     * @param bool|null $allow_split_payouts Details if the `Processor` allows split payouts to `Merchants`.
     *
     * @return self
     */
    public function setAllowSplitPayouts($allow_split_payouts, $deserialize = false)
    {
        $this->container['allow_split_payouts'] = $allow_split_payouts;

        return $this;
    }

    /**
     * Gets allowed_business_application_ids
     *
     * @return string[]|null
     */
    public function getAllowedBusinessApplicationIds()
    {
        return $this->container['allowed_business_application_ids'];
    }

    /**
     * Sets allowed_business_application_ids
     *
     * @param string[]|null $allowed_business_application_ids Identifies the `Processors` business application type for VisaNet transaction processing.
     *
     * @return self
     */
    public function setAllowedBusinessApplicationIds($allowed_business_application_ids, $deserialize = false)
    {
        $allowedValues = $this->getAllowedBusinessApplicationIdsAllowableValues();
        if (!is_null($allowed_business_application_ids) && array_diff($allowed_business_application_ids, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'allowed_business_application_ids', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['allowed_business_application_ids'] = $allowed_business_application_ids;

        return $this;
    }

    /**
     * Gets card_acceptor_id_code
     *
     * @return string|null
     */
    public function getCardAcceptorIdCode()
    {
        return $this->container['card_acceptor_id_code'];
    }

    /**
     * Sets card_acceptor_id_code
     *
     * @param string|null $card_acceptor_id_code An ID for the card acceptor (e.g Visa).
     *
     * @return self
     */
    public function setCardAcceptorIdCode($card_acceptor_id_code, $deserialize = false)
    {
        $this->container['card_acceptor_id_code'] = $card_acceptor_id_code;

        return $this;
    }

    /**
     * Gets card_acceptor_terminal_id
     *
     * @return string|null
     */
    public function getCardAcceptorTerminalId()
    {
        return $this->container['card_acceptor_terminal_id'];
    }

    /**
     * Sets card_acceptor_terminal_id
     *
     * @param string|null $card_acceptor_terminal_id The ID for the terminal at a card acceptor location.
     *
     * @return self
     */
    public function setCardAcceptorTerminalId($card_acceptor_terminal_id, $deserialize = false)
    {
        $this->container['card_acceptor_terminal_id'] = $card_acceptor_terminal_id;

        return $this;
    }

    /**
     * Gets configuration_templates
     *
     * @return \Finix\Model\ProcessorApplicationConfigConfigurationTemplates|null
     */
    public function getConfigurationTemplates()
    {
        return $this->container['configuration_templates'];
    }

    /**
     * Sets configuration_templates
     *
     * @param \Finix\Model\ProcessorApplicationConfigConfigurationTemplates|null $configuration_templates configuration_templates
     *
     * @return self
     */
    public function setConfigurationTemplates($configuration_templates, $deserialize = false)
    {
        $this->container['configuration_templates'] = $configuration_templates;

        return $this;
    }

    /**
     * Gets default_currencies
     *
     * @return \Finix\Model\Currency[]|null
     */
    public function getDefaultCurrencies()
    {
        return $this->container['default_currencies'];
    }

    /**
     * Sets default_currencies
     *
     * @param \Finix\Model\Currency[]|null $default_currencies ISO 4217 3 letter currency code.
     *
     * @return self
     */
    public function setDefaultCurrencies($default_currencies, $deserialize = false)
    {
        $this->container['default_currencies'] = $default_currencies;

        return $this;
    }

    /**
     * Gets default_mcc
     *
     * @return string|null
     */
    public function getDefaultMcc()
    {
        return $this->container['default_mcc'];
    }

    /**
     * Sets default_mcc
     *
     * @param string|null $default_mcc The Merchant Category Code of the `Merchan.
     *
     * @return self
     */
    public function setDefaultMcc($default_mcc, $deserialize = false)
    {
        $allowedValues = $this->getDefaultMccAllowableValues();
        if (!is_null($default_mcc) && !in_array($default_mcc, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'default_mcc', must be one of '%s'",
                    $default_mcc,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['default_mcc'] = $default_mcc;

        return $this;
    }

    /**
     * Gets default_sender_account_number
     *
     * @return string|null
     */
    public function getDefaultSenderAccountNumber()
    {
        return $this->container['default_sender_account_number'];
    }

    /**
     * Sets default_sender_account_number
     *
     * @param string|null $default_sender_account_number The default account of the sender.
     *
     * @return self
     */
    public function setDefaultSenderAccountNumber($default_sender_account_number, $deserialize = false)
    {
        $this->container['default_sender_account_number'] = $default_sender_account_number;

        return $this;
    }

    /**
     * Gets default_sender_address
     *
     * @return string|null
     */
    public function getDefaultSenderAddress()
    {
        return $this->container['default_sender_address'];
    }

    /**
     * Sets default_sender_address
     *
     * @param string|null $default_sender_address The sender???s address.
     *
     * @return self
     */
    public function setDefaultSenderAddress($default_sender_address, $deserialize = false)
    {
        $this->container['default_sender_address'] = $default_sender_address;

        return $this;
    }

    /**
     * Gets default_sender_city
     *
     * @return string|null
     */
    public function getDefaultSenderCity()
    {
        return $this->container['default_sender_city'];
    }

    /**
     * Sets default_sender_city
     *
     * @param string|null $default_sender_city The city saved in the sender's address.
     *
     * @return self
     */
    public function setDefaultSenderCity($default_sender_city, $deserialize = false)
    {
        $this->container['default_sender_city'] = $default_sender_city;

        return $this;
    }

    /**
     * Gets default_sender_country
     *
     * @return \Finix\Model\Country|null
     */
    public function getDefaultSenderCountry()
    {
        return $this->container['default_sender_country'];
    }

    /**
     * Sets default_sender_country
     *
     * @param \Finix\Model\Country|null $default_sender_country default_sender_country
     *
     * @return self
     */
    public function setDefaultSenderCountry($default_sender_country, $deserialize = false)
    {
        $this->container['default_sender_country'] = $default_sender_country;

        return $this;
    }

    /**
     * Gets default_sender_country_code
     *
     * @return string|null
     */
    public function getDefaultSenderCountryCode()
    {
        return $this->container['default_sender_country_code'];
    }

    /**
     * Sets default_sender_country_code
     *
     * @param string|null $default_sender_country_code The sender's 3 letter ISO 4217 currency code.
     *
     * @return self
     */
    public function setDefaultSenderCountryCode($default_sender_country_code, $deserialize = false)
    {
        $this->container['default_sender_country_code'] = $default_sender_country_code;

        return $this;
    }

    /**
     * Gets default_sender_county_code
     *
     * @return string|null
     */
    public function getDefaultSenderCountyCode()
    {
        return $this->container['default_sender_county_code'];
    }

    /**
     * Sets default_sender_county_code
     *
     * @param string|null $default_sender_county_code The sender???s county.
     *
     * @return self
     */
    public function setDefaultSenderCountyCode($default_sender_county_code, $deserialize = false)
    {
        $this->container['default_sender_county_code'] = $default_sender_county_code;

        return $this;
    }

    /**
     * Gets default_sender_name
     *
     * @return string|null
     */
    public function getDefaultSenderName()
    {
        return $this->container['default_sender_name'];
    }

    /**
     * Sets default_sender_name
     *
     * @param string|null $default_sender_name The sender???s name.
     *
     * @return self
     */
    public function setDefaultSenderName($default_sender_name, $deserialize = false)
    {
        $this->container['default_sender_name'] = $default_sender_name;

        return $this;
    }

    /**
     * Gets default_sender_state_code
     *
     * @return string|null
     */
    public function getDefaultSenderStateCode()
    {
        return $this->container['default_sender_state_code'];
    }

    /**
     * Sets default_sender_state_code
     *
     * @param string|null $default_sender_state_code The sender's 2-letter State code.
     *
     * @return self
     */
    public function setDefaultSenderStateCode($default_sender_state_code, $deserialize = false)
    {
        $this->container['default_sender_state_code'] = $default_sender_state_code;

        return $this;
    }

    /**
     * Gets default_sender_zip_code
     *
     * @return string|null
     */
    public function getDefaultSenderZipCode()
    {
        return $this->container['default_sender_zip_code'];
    }

    /**
     * Sets default_sender_zip_code
     *
     * @param string|null $default_sender_zip_code The sender???s zip code.
     *
     * @return self
     */
    public function setDefaultSenderZipCode($default_sender_zip_code, $deserialize = false)
    {
        $this->container['default_sender_zip_code'] = $default_sender_zip_code;

        return $this;
    }

    /**
     * Gets include_colombia_data
     *
     * @return bool|null
     */
    public function getIncludeColombiaData()
    {
        return $this->container['include_colombia_data'];
    }

    /**
     * Sets include_colombia_data
     *
     * @param bool|null $include_colombia_data Must be true if transactions are in Colombia where there are different fees.
     *
     * @return self
     */
    public function setIncludeColombiaData($include_colombia_data, $deserialize = false)
    {
        $this->container['include_colombia_data'] = $include_colombia_data;

        return $this;
    }

    /**
     * Gets moto_eciindicator
     *
     * @return string|null
     */
    public function getMotoEciindicator()
    {
        return $this->container['moto_eciindicator'];
    }

    /**
     * Sets moto_eciindicator
     *
     * @param string|null $moto_eciindicator Identifies the level of security used in an electronic commerce transaction (only applies to card-present transactions).
     *
     * @return self
     */
    public function setMotoEciindicator($moto_eciindicator, $deserialize = false)
    {
        $allowedValues = $this->getMotoEciindicatorAllowableValues();
        if (!is_null($moto_eciindicator) && !in_array($moto_eciindicator, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'moto_eciindicator', must be one of '%s'",
                    $moto_eciindicator,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['moto_eciindicator'] = $moto_eciindicator;

        return $this;
    }

    /**
     * Gets pan_entry_mode
     *
     * @return string|null
     */
    public function getPanEntryMode()
    {
        return $this->container['pan_entry_mode'];
    }

    /**
     * Sets pan_entry_mode
     *
     * @param string|null $pan_entry_mode A 2-digit code that identifies the method used to enter the cardholder account number and card expiration date (only applies to card-present transactions).
     *
     * @return self
     */
    public function setPanEntryMode($pan_entry_mode, $deserialize = false)
    {
        $allowedValues = $this->getPanEntryModeAllowableValues();
        if (!is_null($pan_entry_mode) && !in_array($pan_entry_mode, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'pan_entry_mode', must be one of '%s'",
                    $pan_entry_mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pan_entry_mode'] = $pan_entry_mode;

        return $this;
    }

    /**
     * Gets pos_condition_code
     *
     * @return string|null
     */
    public function getPosConditionCode()
    {
        return $this->container['pos_condition_code'];
    }

    /**
     * Sets pos_condition_code
     *
     * @param string|null $pos_condition_code Contains a code identifying transaction conditions at the point of sale or point of service (only applies to card-present transactions).
     *
     * @return self
     */
    public function setPosConditionCode($pos_condition_code, $deserialize = false)
    {
        $allowedValues = $this->getPosConditionCodeAllowableValues();
        if (!is_null($pos_condition_code) && !in_array($pos_condition_code, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'pos_condition_code', must be one of '%s'",
                    $pos_condition_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pos_condition_code'] = $pos_condition_code;

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



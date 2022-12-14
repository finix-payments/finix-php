<?php
/**
 * ProcessorSystemConfig
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
 * ProcessorSystemConfig Class Doc Comment
 *
 * @category Class
 * @description Details that configure how the &#x60;Processor&#x60; handles transactions with the processor.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProcessorSystemConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Processor_system_config';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'acquirer_country_code' => 'string',
        'acquiring_bin' => 'string',
        'allow_credit_for_partner' => 'bool',
        'available_countries' => '\Finix\Model\Country[]',
        'business_application_id' => 'string',
        'class_key_identifier' => 'string',
        'config' => '\Finix\Model\ProcessorSystemConfigConfig',
        'default_currencies' => '\Finix\Model\Currency[]',
        'disable_ppgs' => 'bool',
        'fee_program_indicator' => 'string',
        'gateway_proxy_certificate' => 'string',
        'gateway_proxy_host' => 'string',
        'gateway_proxy_password' => 'string',
        'gateway_proxy_port' => 'string',
        'gateway_proxy_username' => 'string',
        'key_store_password' => 'string',
        'key_store_path' => 'string',
        'merchant_pseudo_aba_number' => 'string',
        'online_credit_processing' => 'bool',
        'online_debit_processing' => 'bool',
        'password' => 'string',
        'private_key_password' => 'string',
        'processor_sequence_limit' => 'int',
        'pseudo_batch_push' => 'bool',
        'source_of_funds' => 'string',
        'user_id' => 'string',
        'visa_acceptance_cloud_key_store_path' => 'string',
        'visa_acceptance_cloud_password' => 'string',
        'visa_acceptance_cloud_url' => 'string',
        'visa_acceptance_cloud_user_id' => 'string',
        'visa_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'acquirer_country_code' => null,
        'acquiring_bin' => null,
        'allow_credit_for_partner' => null,
        'available_countries' => null,
        'business_application_id' => null,
        'class_key_identifier' => null,
        'config' => null,
        'default_currencies' => null,
        'disable_ppgs' => null,
        'fee_program_indicator' => null,
        'gateway_proxy_certificate' => null,
        'gateway_proxy_host' => null,
        'gateway_proxy_password' => null,
        'gateway_proxy_port' => null,
        'gateway_proxy_username' => null,
        'key_store_password' => null,
        'key_store_path' => null,
        'merchant_pseudo_aba_number' => null,
        'online_credit_processing' => null,
        'online_debit_processing' => null,
        'password' => null,
        'private_key_password' => null,
        'processor_sequence_limit' => null,
        'pseudo_batch_push' => null,
        'source_of_funds' => null,
        'user_id' => null,
        'visa_acceptance_cloud_key_store_path' => null,
        'visa_acceptance_cloud_password' => null,
        'visa_acceptance_cloud_url' => null,
        'visa_acceptance_cloud_user_id' => null,
        'visa_url' => null
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
        'acquirer_country_code' => 'acquirer_country_code',
        'acquiring_bin' => 'acquiring_bin',
        'allow_credit_for_partner' => 'allow_credit_for_partner',
        'available_countries' => 'available_countries',
        'business_application_id' => 'business_application_id',
        'class_key_identifier' => 'class_key_identifier',
        'config' => 'config',
        'default_currencies' => 'default_currencies',
        'disable_ppgs' => 'disable_ppgs',
        'fee_program_indicator' => 'fee_program_indicator',
        'gateway_proxy_certificate' => 'gateway_proxy_certificate',
        'gateway_proxy_host' => 'gateway_proxy_host',
        'gateway_proxy_password' => 'gateway_proxy_password',
        'gateway_proxy_port' => 'gateway_proxy_port',
        'gateway_proxy_username' => 'gateway_proxy_username',
        'key_store_password' => 'key_store_password',
        'key_store_path' => 'key_store_path',
        'merchant_pseudo_aba_number' => 'merchant_pseudo_aba_number',
        'online_credit_processing' => 'online_credit_processing',
        'online_debit_processing' => 'online_debit_processing',
        'password' => 'password',
        'private_key_password' => 'private_key_password',
        'processor_sequence_limit' => 'processor_sequence_limit',
        'pseudo_batch_push' => 'pseudo_batch_push',
        'source_of_funds' => 'source_of_funds',
        'user_id' => 'user_id',
        'visa_acceptance_cloud_key_store_path' => 'visa_acceptance_cloud_key_store_path',
        'visa_acceptance_cloud_password' => 'visa_acceptance_cloud_password',
        'visa_acceptance_cloud_url' => 'visa_acceptance_cloud_url',
        'visa_acceptance_cloud_user_id' => 'visa_acceptance_cloud_user_id',
        'visa_url' => 'visa_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acquirer_country_code' => 'setAcquirerCountryCode',
        'acquiring_bin' => 'setAcquiringBin',
        'allow_credit_for_partner' => 'setAllowCreditForPartner',
        'available_countries' => 'setAvailableCountries',
        'business_application_id' => 'setBusinessApplicationId',
        'class_key_identifier' => 'setClassKeyIdentifier',
        'config' => 'setConfig',
        'default_currencies' => 'setDefaultCurrencies',
        'disable_ppgs' => 'setDisablePpgs',
        'fee_program_indicator' => 'setFeeProgramIndicator',
        'gateway_proxy_certificate' => 'setGatewayProxyCertificate',
        'gateway_proxy_host' => 'setGatewayProxyHost',
        'gateway_proxy_password' => 'setGatewayProxyPassword',
        'gateway_proxy_port' => 'setGatewayProxyPort',
        'gateway_proxy_username' => 'setGatewayProxyUsername',
        'key_store_password' => 'setKeyStorePassword',
        'key_store_path' => 'setKeyStorePath',
        'merchant_pseudo_aba_number' => 'setMerchantPseudoAbaNumber',
        'online_credit_processing' => 'setOnlineCreditProcessing',
        'online_debit_processing' => 'setOnlineDebitProcessing',
        'password' => 'setPassword',
        'private_key_password' => 'setPrivateKeyPassword',
        'processor_sequence_limit' => 'setProcessorSequenceLimit',
        'pseudo_batch_push' => 'setPseudoBatchPush',
        'source_of_funds' => 'setSourceOfFunds',
        'user_id' => 'setUserId',
        'visa_acceptance_cloud_key_store_path' => 'setVisaAcceptanceCloudKeyStorePath',
        'visa_acceptance_cloud_password' => 'setVisaAcceptanceCloudPassword',
        'visa_acceptance_cloud_url' => 'setVisaAcceptanceCloudUrl',
        'visa_acceptance_cloud_user_id' => 'setVisaAcceptanceCloudUserId',
        'visa_url' => 'setVisaUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acquirer_country_code' => 'getAcquirerCountryCode',
        'acquiring_bin' => 'getAcquiringBin',
        'allow_credit_for_partner' => 'getAllowCreditForPartner',
        'available_countries' => 'getAvailableCountries',
        'business_application_id' => 'getBusinessApplicationId',
        'class_key_identifier' => 'getClassKeyIdentifier',
        'config' => 'getConfig',
        'default_currencies' => 'getDefaultCurrencies',
        'disable_ppgs' => 'getDisablePpgs',
        'fee_program_indicator' => 'getFeeProgramIndicator',
        'gateway_proxy_certificate' => 'getGatewayProxyCertificate',
        'gateway_proxy_host' => 'getGatewayProxyHost',
        'gateway_proxy_password' => 'getGatewayProxyPassword',
        'gateway_proxy_port' => 'getGatewayProxyPort',
        'gateway_proxy_username' => 'getGatewayProxyUsername',
        'key_store_password' => 'getKeyStorePassword',
        'key_store_path' => 'getKeyStorePath',
        'merchant_pseudo_aba_number' => 'getMerchantPseudoAbaNumber',
        'online_credit_processing' => 'getOnlineCreditProcessing',
        'online_debit_processing' => 'getOnlineDebitProcessing',
        'password' => 'getPassword',
        'private_key_password' => 'getPrivateKeyPassword',
        'processor_sequence_limit' => 'getProcessorSequenceLimit',
        'pseudo_batch_push' => 'getPseudoBatchPush',
        'source_of_funds' => 'getSourceOfFunds',
        'user_id' => 'getUserId',
        'visa_acceptance_cloud_key_store_path' => 'getVisaAcceptanceCloudKeyStorePath',
        'visa_acceptance_cloud_password' => 'getVisaAcceptanceCloudPassword',
        'visa_acceptance_cloud_url' => 'getVisaAcceptanceCloudUrl',
        'visa_acceptance_cloud_user_id' => 'getVisaAcceptanceCloudUserId',
        'visa_url' => 'getVisaUrl'
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

    public const ACQUIRER_COUNTRY_CODE__004 = '004';
    public const ACQUIRER_COUNTRY_CODE__008 = '008';
    public const ACQUIRER_COUNTRY_CODE__010 = '010';
    public const ACQUIRER_COUNTRY_CODE__012 = '012';
    public const ACQUIRER_COUNTRY_CODE__016 = '016';
    public const ACQUIRER_COUNTRY_CODE__020 = '020';
    public const ACQUIRER_COUNTRY_CODE__024 = '024';
    public const ACQUIRER_COUNTRY_CODE__028 = '028';
    public const ACQUIRER_COUNTRY_CODE__031 = '031';
    public const ACQUIRER_COUNTRY_CODE__032 = '032';
    public const ACQUIRER_COUNTRY_CODE__036 = '036';
    public const ACQUIRER_COUNTRY_CODE__040 = '040';
    public const ACQUIRER_COUNTRY_CODE__044 = '044';
    public const ACQUIRER_COUNTRY_CODE__048 = '048';
    public const ACQUIRER_COUNTRY_CODE__050 = '050';
    public const ACQUIRER_COUNTRY_CODE__051 = '051';
    public const ACQUIRER_COUNTRY_CODE__052 = '052';
    public const ACQUIRER_COUNTRY_CODE__056 = '056';
    public const ACQUIRER_COUNTRY_CODE__060 = '060';
    public const ACQUIRER_COUNTRY_CODE__064 = '064';
    public const ACQUIRER_COUNTRY_CODE__068 = '068';
    public const ACQUIRER_COUNTRY_CODE__070 = '070';
    public const ACQUIRER_COUNTRY_CODE__072 = '072';
    public const ACQUIRER_COUNTRY_CODE__074 = '074';
    public const ACQUIRER_COUNTRY_CODE__076 = '076';
    public const ACQUIRER_COUNTRY_CODE__084 = '084';
    public const ACQUIRER_COUNTRY_CODE__086 = '086';
    public const ACQUIRER_COUNTRY_CODE__090 = '090';
    public const ACQUIRER_COUNTRY_CODE__092 = '092';
    public const ACQUIRER_COUNTRY_CODE__096 = '096';
    public const ACQUIRER_COUNTRY_CODE__100 = '100';
    public const ACQUIRER_COUNTRY_CODE__104 = '104';
    public const ACQUIRER_COUNTRY_CODE__108 = '108';
    public const ACQUIRER_COUNTRY_CODE__112 = '112';
    public const ACQUIRER_COUNTRY_CODE__116 = '116';
    public const ACQUIRER_COUNTRY_CODE__120 = '120';
    public const ACQUIRER_COUNTRY_CODE__124 = '124';
    public const ACQUIRER_COUNTRY_CODE__132 = '132';
    public const ACQUIRER_COUNTRY_CODE__136 = '136';
    public const ACQUIRER_COUNTRY_CODE__140 = '140';
    public const ACQUIRER_COUNTRY_CODE__144 = '144';
    public const ACQUIRER_COUNTRY_CODE__148 = '148';
    public const ACQUIRER_COUNTRY_CODE__152 = '152';
    public const ACQUIRER_COUNTRY_CODE__156 = '156';
    public const ACQUIRER_COUNTRY_CODE__158 = '158';
    public const ACQUIRER_COUNTRY_CODE__162 = '162';
    public const ACQUIRER_COUNTRY_CODE__166 = '166';
    public const ACQUIRER_COUNTRY_CODE__170 = '170';
    public const ACQUIRER_COUNTRY_CODE__174 = '174';
    public const ACQUIRER_COUNTRY_CODE__175 = '175';
    public const ACQUIRER_COUNTRY_CODE__178 = '178';
    public const ACQUIRER_COUNTRY_CODE__180 = '180';
    public const ACQUIRER_COUNTRY_CODE__184 = '184';
    public const ACQUIRER_COUNTRY_CODE__188 = '188';
    public const ACQUIRER_COUNTRY_CODE__191 = '191';
    public const ACQUIRER_COUNTRY_CODE__192 = '192';
    public const ACQUIRER_COUNTRY_CODE__196 = '196';
    public const ACQUIRER_COUNTRY_CODE__203 = '203';
    public const ACQUIRER_COUNTRY_CODE__204 = '204';
    public const ACQUIRER_COUNTRY_CODE__208 = '208';
    public const ACQUIRER_COUNTRY_CODE__212 = '212';
    public const ACQUIRER_COUNTRY_CODE__214 = '214';
    public const ACQUIRER_COUNTRY_CODE__218 = '218';
    public const ACQUIRER_COUNTRY_CODE__222 = '222';
    public const ACQUIRER_COUNTRY_CODE__226 = '226';
    public const ACQUIRER_COUNTRY_CODE__231 = '231';
    public const ACQUIRER_COUNTRY_CODE__232 = '232';
    public const ACQUIRER_COUNTRY_CODE__233 = '233';
    public const ACQUIRER_COUNTRY_CODE__234 = '234';
    public const ACQUIRER_COUNTRY_CODE__238 = '238';
    public const ACQUIRER_COUNTRY_CODE__239 = '239';
    public const ACQUIRER_COUNTRY_CODE__242 = '242';
    public const ACQUIRER_COUNTRY_CODE__246 = '246';
    public const ACQUIRER_COUNTRY_CODE__248 = '248';
    public const ACQUIRER_COUNTRY_CODE__250 = '250';
    public const ACQUIRER_COUNTRY_CODE__254 = '254';
    public const ACQUIRER_COUNTRY_CODE__258 = '258';
    public const ACQUIRER_COUNTRY_CODE__260 = '260';
    public const ACQUIRER_COUNTRY_CODE__262 = '262';
    public const ACQUIRER_COUNTRY_CODE__266 = '266';
    public const ACQUIRER_COUNTRY_CODE__268 = '268';
    public const ACQUIRER_COUNTRY_CODE__270 = '270';
    public const ACQUIRER_COUNTRY_CODE__275 = '275';
    public const ACQUIRER_COUNTRY_CODE__276 = '276';
    public const ACQUIRER_COUNTRY_CODE__288 = '288';
    public const ACQUIRER_COUNTRY_CODE__292 = '292';
    public const ACQUIRER_COUNTRY_CODE__296 = '296';
    public const ACQUIRER_COUNTRY_CODE__300 = '300';
    public const ACQUIRER_COUNTRY_CODE__304 = '304';
    public const ACQUIRER_COUNTRY_CODE__308 = '308';
    public const ACQUIRER_COUNTRY_CODE__312 = '312';
    public const ACQUIRER_COUNTRY_CODE__316 = '316';
    public const ACQUIRER_COUNTRY_CODE__320 = '320';
    public const ACQUIRER_COUNTRY_CODE__324 = '324';
    public const ACQUIRER_COUNTRY_CODE__328 = '328';
    public const ACQUIRER_COUNTRY_CODE__332 = '332';
    public const ACQUIRER_COUNTRY_CODE__334 = '334';
    public const ACQUIRER_COUNTRY_CODE__336 = '336';
    public const ACQUIRER_COUNTRY_CODE__340 = '340';
    public const ACQUIRER_COUNTRY_CODE__344 = '344';
    public const ACQUIRER_COUNTRY_CODE__348 = '348';
    public const ACQUIRER_COUNTRY_CODE__352 = '352';
    public const ACQUIRER_COUNTRY_CODE__356 = '356';
    public const ACQUIRER_COUNTRY_CODE__360 = '360';
    public const ACQUIRER_COUNTRY_CODE__364 = '364';
    public const ACQUIRER_COUNTRY_CODE__368 = '368';
    public const ACQUIRER_COUNTRY_CODE__372 = '372';
    public const ACQUIRER_COUNTRY_CODE__376 = '376';
    public const ACQUIRER_COUNTRY_CODE__380 = '380';
    public const ACQUIRER_COUNTRY_CODE__384 = '384';
    public const ACQUIRER_COUNTRY_CODE__388 = '388';
    public const ACQUIRER_COUNTRY_CODE__392 = '392';
    public const ACQUIRER_COUNTRY_CODE__398 = '398';
    public const ACQUIRER_COUNTRY_CODE__400 = '400';
    public const ACQUIRER_COUNTRY_CODE__404 = '404';
    public const ACQUIRER_COUNTRY_CODE__408 = '408';
    public const ACQUIRER_COUNTRY_CODE__410 = '410';
    public const ACQUIRER_COUNTRY_CODE__414 = '414';
    public const ACQUIRER_COUNTRY_CODE__417 = '417';
    public const ACQUIRER_COUNTRY_CODE__418 = '418';
    public const ACQUIRER_COUNTRY_CODE__422 = '422';
    public const ACQUIRER_COUNTRY_CODE__426 = '426';
    public const ACQUIRER_COUNTRY_CODE__428 = '428';
    public const ACQUIRER_COUNTRY_CODE__430 = '430';
    public const ACQUIRER_COUNTRY_CODE__434 = '434';
    public const ACQUIRER_COUNTRY_CODE__438 = '438';
    public const ACQUIRER_COUNTRY_CODE__440 = '440';
    public const ACQUIRER_COUNTRY_CODE__442 = '442';
    public const ACQUIRER_COUNTRY_CODE__446 = '446';
    public const ACQUIRER_COUNTRY_CODE__450 = '450';
    public const ACQUIRER_COUNTRY_CODE__454 = '454';
    public const ACQUIRER_COUNTRY_CODE__458 = '458';
    public const ACQUIRER_COUNTRY_CODE__462 = '462';
    public const ACQUIRER_COUNTRY_CODE__466 = '466';
    public const ACQUIRER_COUNTRY_CODE__470 = '470';
    public const ACQUIRER_COUNTRY_CODE__474 = '474';
    public const ACQUIRER_COUNTRY_CODE__478 = '478';
    public const ACQUIRER_COUNTRY_CODE__480 = '480';
    public const ACQUIRER_COUNTRY_CODE__484 = '484';
    public const ACQUIRER_COUNTRY_CODE__492 = '492';
    public const ACQUIRER_COUNTRY_CODE__496 = '496';
    public const ACQUIRER_COUNTRY_CODE__498 = '498';
    public const ACQUIRER_COUNTRY_CODE__499 = '499';
    public const ACQUIRER_COUNTRY_CODE__500 = '500';
    public const ACQUIRER_COUNTRY_CODE__504 = '504';
    public const ACQUIRER_COUNTRY_CODE__508 = '508';
    public const ACQUIRER_COUNTRY_CODE__512 = '512';
    public const ACQUIRER_COUNTRY_CODE__516 = '516';
    public const ACQUIRER_COUNTRY_CODE__520 = '520';
    public const ACQUIRER_COUNTRY_CODE__524 = '524';
    public const ACQUIRER_COUNTRY_CODE__528 = '528';
    public const ACQUIRER_COUNTRY_CODE__531 = '531';
    public const ACQUIRER_COUNTRY_CODE__533 = '533';
    public const ACQUIRER_COUNTRY_CODE__534 = '534';
    public const ACQUIRER_COUNTRY_CODE__535 = '535';
    public const ACQUIRER_COUNTRY_CODE__540 = '540';
    public const ACQUIRER_COUNTRY_CODE__548 = '548';
    public const ACQUIRER_COUNTRY_CODE__554 = '554';
    public const ACQUIRER_COUNTRY_CODE__558 = '558';
    public const ACQUIRER_COUNTRY_CODE__562 = '562';
    public const ACQUIRER_COUNTRY_CODE__566 = '566';
    public const ACQUIRER_COUNTRY_CODE__570 = '570';
    public const ACQUIRER_COUNTRY_CODE__574 = '574';
    public const ACQUIRER_COUNTRY_CODE__578 = '578';
    public const ACQUIRER_COUNTRY_CODE__580 = '580';
    public const ACQUIRER_COUNTRY_CODE__581 = '581';
    public const ACQUIRER_COUNTRY_CODE__583 = '583';
    public const ACQUIRER_COUNTRY_CODE__584 = '584';
    public const ACQUIRER_COUNTRY_CODE__585 = '585';
    public const ACQUIRER_COUNTRY_CODE__586 = '586';
    public const ACQUIRER_COUNTRY_CODE__591 = '591';
    public const ACQUIRER_COUNTRY_CODE__598 = '598';
    public const ACQUIRER_COUNTRY_CODE__600 = '600';
    public const ACQUIRER_COUNTRY_CODE__604 = '604';
    public const ACQUIRER_COUNTRY_CODE__608 = '608';
    public const ACQUIRER_COUNTRY_CODE__612 = '612';
    public const ACQUIRER_COUNTRY_CODE__616 = '616';
    public const ACQUIRER_COUNTRY_CODE__620 = '620';
    public const ACQUIRER_COUNTRY_CODE__624 = '624';
    public const ACQUIRER_COUNTRY_CODE__626 = '626';
    public const ACQUIRER_COUNTRY_CODE__630 = '630';
    public const ACQUIRER_COUNTRY_CODE__634 = '634';
    public const ACQUIRER_COUNTRY_CODE__638 = '638';
    public const ACQUIRER_COUNTRY_CODE__642 = '642';
    public const ACQUIRER_COUNTRY_CODE__643 = '643';
    public const ACQUIRER_COUNTRY_CODE__646 = '646';
    public const ACQUIRER_COUNTRY_CODE__652 = '652';
    public const ACQUIRER_COUNTRY_CODE__654 = '654';
    public const ACQUIRER_COUNTRY_CODE__659 = '659';
    public const ACQUIRER_COUNTRY_CODE__660 = '660';
    public const ACQUIRER_COUNTRY_CODE__662 = '662';
    public const ACQUIRER_COUNTRY_CODE__663 = '663';
    public const ACQUIRER_COUNTRY_CODE__666 = '666';
    public const ACQUIRER_COUNTRY_CODE__670 = '670';
    public const ACQUIRER_COUNTRY_CODE__674 = '674';
    public const ACQUIRER_COUNTRY_CODE__678 = '678';
    public const ACQUIRER_COUNTRY_CODE__682 = '682';
    public const ACQUIRER_COUNTRY_CODE__686 = '686';
    public const ACQUIRER_COUNTRY_CODE__688 = '688';
    public const ACQUIRER_COUNTRY_CODE__690 = '690';
    public const ACQUIRER_COUNTRY_CODE__694 = '694';
    public const ACQUIRER_COUNTRY_CODE__702 = '702';
    public const ACQUIRER_COUNTRY_CODE__703 = '703';
    public const ACQUIRER_COUNTRY_CODE__704 = '704';
    public const ACQUIRER_COUNTRY_CODE__705 = '705';
    public const ACQUIRER_COUNTRY_CODE__706 = '706';
    public const ACQUIRER_COUNTRY_CODE__710 = '710';
    public const ACQUIRER_COUNTRY_CODE__716 = '716';
    public const ACQUIRER_COUNTRY_CODE__724 = '724';
    public const ACQUIRER_COUNTRY_CODE__728 = '728';
    public const ACQUIRER_COUNTRY_CODE__729 = '729';
    public const ACQUIRER_COUNTRY_CODE__732 = '732';
    public const ACQUIRER_COUNTRY_CODE__740 = '740';
    public const ACQUIRER_COUNTRY_CODE__744 = '744';
    public const ACQUIRER_COUNTRY_CODE__748 = '748';
    public const ACQUIRER_COUNTRY_CODE__752 = '752';
    public const ACQUIRER_COUNTRY_CODE__756 = '756';
    public const ACQUIRER_COUNTRY_CODE__760 = '760';
    public const ACQUIRER_COUNTRY_CODE__762 = '762';
    public const ACQUIRER_COUNTRY_CODE__764 = '764';
    public const ACQUIRER_COUNTRY_CODE__768 = '768';
    public const ACQUIRER_COUNTRY_CODE__772 = '772';
    public const ACQUIRER_COUNTRY_CODE__776 = '776';
    public const ACQUIRER_COUNTRY_CODE__780 = '780';
    public const ACQUIRER_COUNTRY_CODE__784 = '784';
    public const ACQUIRER_COUNTRY_CODE__788 = '788';
    public const ACQUIRER_COUNTRY_CODE__792 = '792';
    public const ACQUIRER_COUNTRY_CODE__795 = '795';
    public const ACQUIRER_COUNTRY_CODE__796 = '796';
    public const ACQUIRER_COUNTRY_CODE__798 = '798';
    public const ACQUIRER_COUNTRY_CODE__800 = '800';
    public const ACQUIRER_COUNTRY_CODE__804 = '804';
    public const ACQUIRER_COUNTRY_CODE__807 = '807';
    public const ACQUIRER_COUNTRY_CODE__818 = '818';
    public const ACQUIRER_COUNTRY_CODE__826 = '826';
    public const ACQUIRER_COUNTRY_CODE__831 = '831';
    public const ACQUIRER_COUNTRY_CODE__832 = '832';
    public const ACQUIRER_COUNTRY_CODE__833 = '833';
    public const ACQUIRER_COUNTRY_CODE__834 = '834';
    public const ACQUIRER_COUNTRY_CODE__840 = '840';
    public const ACQUIRER_COUNTRY_CODE__850 = '850';
    public const ACQUIRER_COUNTRY_CODE__854 = '854';
    public const ACQUIRER_COUNTRY_CODE__858 = '858';
    public const ACQUIRER_COUNTRY_CODE__860 = '860';
    public const ACQUIRER_COUNTRY_CODE__862 = '862';
    public const ACQUIRER_COUNTRY_CODE__876 = '876';
    public const ACQUIRER_COUNTRY_CODE__882 = '882';
    public const ACQUIRER_COUNTRY_CODE__887 = '887';
    public const ACQUIRER_COUNTRY_CODE__894 = '894';
    public const CLASS_KEY_IDENTIFIER_IO_FINIX_VISA_DIRECT_CLIENT_VISA_SYSTEM_CONFIG = 'io.finix.visa.direct.client.VisaSystemConfig';
    public const SOURCE_OF_FUNDS__01 = '01';
    public const SOURCE_OF_FUNDS__02 = '02';
    public const SOURCE_OF_FUNDS__03 = '03';
    public const SOURCE_OF_FUNDS__04 = '04';
    public const SOURCE_OF_FUNDS__05 = '05';
    public const SOURCE_OF_FUNDS__06 = '06';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAcquirerCountryCodeAllowableValues()
    {
        return [
            self::ACQUIRER_COUNTRY_CODE__004,
            self::ACQUIRER_COUNTRY_CODE__008,
            self::ACQUIRER_COUNTRY_CODE__010,
            self::ACQUIRER_COUNTRY_CODE__012,
            self::ACQUIRER_COUNTRY_CODE__016,
            self::ACQUIRER_COUNTRY_CODE__020,
            self::ACQUIRER_COUNTRY_CODE__024,
            self::ACQUIRER_COUNTRY_CODE__028,
            self::ACQUIRER_COUNTRY_CODE__031,
            self::ACQUIRER_COUNTRY_CODE__032,
            self::ACQUIRER_COUNTRY_CODE__036,
            self::ACQUIRER_COUNTRY_CODE__040,
            self::ACQUIRER_COUNTRY_CODE__044,
            self::ACQUIRER_COUNTRY_CODE__048,
            self::ACQUIRER_COUNTRY_CODE__050,
            self::ACQUIRER_COUNTRY_CODE__051,
            self::ACQUIRER_COUNTRY_CODE__052,
            self::ACQUIRER_COUNTRY_CODE__056,
            self::ACQUIRER_COUNTRY_CODE__060,
            self::ACQUIRER_COUNTRY_CODE__064,
            self::ACQUIRER_COUNTRY_CODE__068,
            self::ACQUIRER_COUNTRY_CODE__070,
            self::ACQUIRER_COUNTRY_CODE__072,
            self::ACQUIRER_COUNTRY_CODE__074,
            self::ACQUIRER_COUNTRY_CODE__076,
            self::ACQUIRER_COUNTRY_CODE__084,
            self::ACQUIRER_COUNTRY_CODE__086,
            self::ACQUIRER_COUNTRY_CODE__090,
            self::ACQUIRER_COUNTRY_CODE__092,
            self::ACQUIRER_COUNTRY_CODE__096,
            self::ACQUIRER_COUNTRY_CODE__100,
            self::ACQUIRER_COUNTRY_CODE__104,
            self::ACQUIRER_COUNTRY_CODE__108,
            self::ACQUIRER_COUNTRY_CODE__112,
            self::ACQUIRER_COUNTRY_CODE__116,
            self::ACQUIRER_COUNTRY_CODE__120,
            self::ACQUIRER_COUNTRY_CODE__124,
            self::ACQUIRER_COUNTRY_CODE__132,
            self::ACQUIRER_COUNTRY_CODE__136,
            self::ACQUIRER_COUNTRY_CODE__140,
            self::ACQUIRER_COUNTRY_CODE__144,
            self::ACQUIRER_COUNTRY_CODE__148,
            self::ACQUIRER_COUNTRY_CODE__152,
            self::ACQUIRER_COUNTRY_CODE__156,
            self::ACQUIRER_COUNTRY_CODE__158,
            self::ACQUIRER_COUNTRY_CODE__162,
            self::ACQUIRER_COUNTRY_CODE__166,
            self::ACQUIRER_COUNTRY_CODE__170,
            self::ACQUIRER_COUNTRY_CODE__174,
            self::ACQUIRER_COUNTRY_CODE__175,
            self::ACQUIRER_COUNTRY_CODE__178,
            self::ACQUIRER_COUNTRY_CODE__180,
            self::ACQUIRER_COUNTRY_CODE__184,
            self::ACQUIRER_COUNTRY_CODE__188,
            self::ACQUIRER_COUNTRY_CODE__191,
            self::ACQUIRER_COUNTRY_CODE__192,
            self::ACQUIRER_COUNTRY_CODE__196,
            self::ACQUIRER_COUNTRY_CODE__203,
            self::ACQUIRER_COUNTRY_CODE__204,
            self::ACQUIRER_COUNTRY_CODE__208,
            self::ACQUIRER_COUNTRY_CODE__212,
            self::ACQUIRER_COUNTRY_CODE__214,
            self::ACQUIRER_COUNTRY_CODE__218,
            self::ACQUIRER_COUNTRY_CODE__222,
            self::ACQUIRER_COUNTRY_CODE__226,
            self::ACQUIRER_COUNTRY_CODE__231,
            self::ACQUIRER_COUNTRY_CODE__232,
            self::ACQUIRER_COUNTRY_CODE__233,
            self::ACQUIRER_COUNTRY_CODE__234,
            self::ACQUIRER_COUNTRY_CODE__238,
            self::ACQUIRER_COUNTRY_CODE__239,
            self::ACQUIRER_COUNTRY_CODE__242,
            self::ACQUIRER_COUNTRY_CODE__246,
            self::ACQUIRER_COUNTRY_CODE__248,
            self::ACQUIRER_COUNTRY_CODE__250,
            self::ACQUIRER_COUNTRY_CODE__254,
            self::ACQUIRER_COUNTRY_CODE__258,
            self::ACQUIRER_COUNTRY_CODE__260,
            self::ACQUIRER_COUNTRY_CODE__262,
            self::ACQUIRER_COUNTRY_CODE__266,
            self::ACQUIRER_COUNTRY_CODE__268,
            self::ACQUIRER_COUNTRY_CODE__270,
            self::ACQUIRER_COUNTRY_CODE__275,
            self::ACQUIRER_COUNTRY_CODE__276,
            self::ACQUIRER_COUNTRY_CODE__288,
            self::ACQUIRER_COUNTRY_CODE__292,
            self::ACQUIRER_COUNTRY_CODE__296,
            self::ACQUIRER_COUNTRY_CODE__300,
            self::ACQUIRER_COUNTRY_CODE__304,
            self::ACQUIRER_COUNTRY_CODE__308,
            self::ACQUIRER_COUNTRY_CODE__312,
            self::ACQUIRER_COUNTRY_CODE__316,
            self::ACQUIRER_COUNTRY_CODE__320,
            self::ACQUIRER_COUNTRY_CODE__324,
            self::ACQUIRER_COUNTRY_CODE__328,
            self::ACQUIRER_COUNTRY_CODE__332,
            self::ACQUIRER_COUNTRY_CODE__334,
            self::ACQUIRER_COUNTRY_CODE__336,
            self::ACQUIRER_COUNTRY_CODE__340,
            self::ACQUIRER_COUNTRY_CODE__344,
            self::ACQUIRER_COUNTRY_CODE__348,
            self::ACQUIRER_COUNTRY_CODE__352,
            self::ACQUIRER_COUNTRY_CODE__356,
            self::ACQUIRER_COUNTRY_CODE__360,
            self::ACQUIRER_COUNTRY_CODE__364,
            self::ACQUIRER_COUNTRY_CODE__368,
            self::ACQUIRER_COUNTRY_CODE__372,
            self::ACQUIRER_COUNTRY_CODE__376,
            self::ACQUIRER_COUNTRY_CODE__380,
            self::ACQUIRER_COUNTRY_CODE__384,
            self::ACQUIRER_COUNTRY_CODE__388,
            self::ACQUIRER_COUNTRY_CODE__392,
            self::ACQUIRER_COUNTRY_CODE__398,
            self::ACQUIRER_COUNTRY_CODE__400,
            self::ACQUIRER_COUNTRY_CODE__404,
            self::ACQUIRER_COUNTRY_CODE__408,
            self::ACQUIRER_COUNTRY_CODE__410,
            self::ACQUIRER_COUNTRY_CODE__414,
            self::ACQUIRER_COUNTRY_CODE__417,
            self::ACQUIRER_COUNTRY_CODE__418,
            self::ACQUIRER_COUNTRY_CODE__422,
            self::ACQUIRER_COUNTRY_CODE__426,
            self::ACQUIRER_COUNTRY_CODE__428,
            self::ACQUIRER_COUNTRY_CODE__430,
            self::ACQUIRER_COUNTRY_CODE__434,
            self::ACQUIRER_COUNTRY_CODE__438,
            self::ACQUIRER_COUNTRY_CODE__440,
            self::ACQUIRER_COUNTRY_CODE__442,
            self::ACQUIRER_COUNTRY_CODE__446,
            self::ACQUIRER_COUNTRY_CODE__450,
            self::ACQUIRER_COUNTRY_CODE__454,
            self::ACQUIRER_COUNTRY_CODE__458,
            self::ACQUIRER_COUNTRY_CODE__462,
            self::ACQUIRER_COUNTRY_CODE__466,
            self::ACQUIRER_COUNTRY_CODE__470,
            self::ACQUIRER_COUNTRY_CODE__474,
            self::ACQUIRER_COUNTRY_CODE__478,
            self::ACQUIRER_COUNTRY_CODE__480,
            self::ACQUIRER_COUNTRY_CODE__484,
            self::ACQUIRER_COUNTRY_CODE__492,
            self::ACQUIRER_COUNTRY_CODE__496,
            self::ACQUIRER_COUNTRY_CODE__498,
            self::ACQUIRER_COUNTRY_CODE__499,
            self::ACQUIRER_COUNTRY_CODE__500,
            self::ACQUIRER_COUNTRY_CODE__504,
            self::ACQUIRER_COUNTRY_CODE__508,
            self::ACQUIRER_COUNTRY_CODE__512,
            self::ACQUIRER_COUNTRY_CODE__516,
            self::ACQUIRER_COUNTRY_CODE__520,
            self::ACQUIRER_COUNTRY_CODE__524,
            self::ACQUIRER_COUNTRY_CODE__528,
            self::ACQUIRER_COUNTRY_CODE__531,
            self::ACQUIRER_COUNTRY_CODE__533,
            self::ACQUIRER_COUNTRY_CODE__534,
            self::ACQUIRER_COUNTRY_CODE__535,
            self::ACQUIRER_COUNTRY_CODE__540,
            self::ACQUIRER_COUNTRY_CODE__548,
            self::ACQUIRER_COUNTRY_CODE__554,
            self::ACQUIRER_COUNTRY_CODE__558,
            self::ACQUIRER_COUNTRY_CODE__562,
            self::ACQUIRER_COUNTRY_CODE__566,
            self::ACQUIRER_COUNTRY_CODE__570,
            self::ACQUIRER_COUNTRY_CODE__574,
            self::ACQUIRER_COUNTRY_CODE__578,
            self::ACQUIRER_COUNTRY_CODE__580,
            self::ACQUIRER_COUNTRY_CODE__581,
            self::ACQUIRER_COUNTRY_CODE__583,
            self::ACQUIRER_COUNTRY_CODE__584,
            self::ACQUIRER_COUNTRY_CODE__585,
            self::ACQUIRER_COUNTRY_CODE__586,
            self::ACQUIRER_COUNTRY_CODE__591,
            self::ACQUIRER_COUNTRY_CODE__598,
            self::ACQUIRER_COUNTRY_CODE__600,
            self::ACQUIRER_COUNTRY_CODE__604,
            self::ACQUIRER_COUNTRY_CODE__608,
            self::ACQUIRER_COUNTRY_CODE__612,
            self::ACQUIRER_COUNTRY_CODE__616,
            self::ACQUIRER_COUNTRY_CODE__620,
            self::ACQUIRER_COUNTRY_CODE__624,
            self::ACQUIRER_COUNTRY_CODE__626,
            self::ACQUIRER_COUNTRY_CODE__630,
            self::ACQUIRER_COUNTRY_CODE__634,
            self::ACQUIRER_COUNTRY_CODE__638,
            self::ACQUIRER_COUNTRY_CODE__642,
            self::ACQUIRER_COUNTRY_CODE__643,
            self::ACQUIRER_COUNTRY_CODE__646,
            self::ACQUIRER_COUNTRY_CODE__652,
            self::ACQUIRER_COUNTRY_CODE__654,
            self::ACQUIRER_COUNTRY_CODE__659,
            self::ACQUIRER_COUNTRY_CODE__660,
            self::ACQUIRER_COUNTRY_CODE__662,
            self::ACQUIRER_COUNTRY_CODE__663,
            self::ACQUIRER_COUNTRY_CODE__666,
            self::ACQUIRER_COUNTRY_CODE__670,
            self::ACQUIRER_COUNTRY_CODE__674,
            self::ACQUIRER_COUNTRY_CODE__678,
            self::ACQUIRER_COUNTRY_CODE__682,
            self::ACQUIRER_COUNTRY_CODE__686,
            self::ACQUIRER_COUNTRY_CODE__688,
            self::ACQUIRER_COUNTRY_CODE__690,
            self::ACQUIRER_COUNTRY_CODE__694,
            self::ACQUIRER_COUNTRY_CODE__702,
            self::ACQUIRER_COUNTRY_CODE__703,
            self::ACQUIRER_COUNTRY_CODE__704,
            self::ACQUIRER_COUNTRY_CODE__705,
            self::ACQUIRER_COUNTRY_CODE__706,
            self::ACQUIRER_COUNTRY_CODE__710,
            self::ACQUIRER_COUNTRY_CODE__716,
            self::ACQUIRER_COUNTRY_CODE__724,
            self::ACQUIRER_COUNTRY_CODE__728,
            self::ACQUIRER_COUNTRY_CODE__729,
            self::ACQUIRER_COUNTRY_CODE__732,
            self::ACQUIRER_COUNTRY_CODE__740,
            self::ACQUIRER_COUNTRY_CODE__744,
            self::ACQUIRER_COUNTRY_CODE__748,
            self::ACQUIRER_COUNTRY_CODE__752,
            self::ACQUIRER_COUNTRY_CODE__756,
            self::ACQUIRER_COUNTRY_CODE__760,
            self::ACQUIRER_COUNTRY_CODE__762,
            self::ACQUIRER_COUNTRY_CODE__764,
            self::ACQUIRER_COUNTRY_CODE__768,
            self::ACQUIRER_COUNTRY_CODE__772,
            self::ACQUIRER_COUNTRY_CODE__776,
            self::ACQUIRER_COUNTRY_CODE__780,
            self::ACQUIRER_COUNTRY_CODE__784,
            self::ACQUIRER_COUNTRY_CODE__788,
            self::ACQUIRER_COUNTRY_CODE__792,
            self::ACQUIRER_COUNTRY_CODE__795,
            self::ACQUIRER_COUNTRY_CODE__796,
            self::ACQUIRER_COUNTRY_CODE__798,
            self::ACQUIRER_COUNTRY_CODE__800,
            self::ACQUIRER_COUNTRY_CODE__804,
            self::ACQUIRER_COUNTRY_CODE__807,
            self::ACQUIRER_COUNTRY_CODE__818,
            self::ACQUIRER_COUNTRY_CODE__826,
            self::ACQUIRER_COUNTRY_CODE__831,
            self::ACQUIRER_COUNTRY_CODE__832,
            self::ACQUIRER_COUNTRY_CODE__833,
            self::ACQUIRER_COUNTRY_CODE__834,
            self::ACQUIRER_COUNTRY_CODE__840,
            self::ACQUIRER_COUNTRY_CODE__850,
            self::ACQUIRER_COUNTRY_CODE__854,
            self::ACQUIRER_COUNTRY_CODE__858,
            self::ACQUIRER_COUNTRY_CODE__860,
            self::ACQUIRER_COUNTRY_CODE__862,
            self::ACQUIRER_COUNTRY_CODE__876,
            self::ACQUIRER_COUNTRY_CODE__882,
            self::ACQUIRER_COUNTRY_CODE__887,
            self::ACQUIRER_COUNTRY_CODE__894,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClassKeyIdentifierAllowableValues()
    {
        return [
            self::CLASS_KEY_IDENTIFIER_IO_FINIX_VISA_DIRECT_CLIENT_VISA_SYSTEM_CONFIG,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceOfFundsAllowableValues()
    {
        return [
            self::SOURCE_OF_FUNDS__01,
            self::SOURCE_OF_FUNDS__02,
            self::SOURCE_OF_FUNDS__03,
            self::SOURCE_OF_FUNDS__04,
            self::SOURCE_OF_FUNDS__05,
            self::SOURCE_OF_FUNDS__06,
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
        $this->container['acquirer_country_code'] = $data['acquirer_country_code'] ?? null;
        $this->container['acquiring_bin'] = $data['acquiring_bin'] ?? null;
        $this->container['allow_credit_for_partner'] = $data['allow_credit_for_partner'] ?? null;
        $this->container['available_countries'] = $data['available_countries'] ?? null;
        $this->container['business_application_id'] = $data['business_application_id'] ?? null;
        $this->container['class_key_identifier'] = $data['class_key_identifier'] ?? null;
        $this->container['config'] = $data['config'] ?? null;
        $this->container['default_currencies'] = $data['default_currencies'] ?? null;
        $this->container['disable_ppgs'] = $data['disable_ppgs'] ?? null;
        $this->container['fee_program_indicator'] = $data['fee_program_indicator'] ?? null;
        $this->container['gateway_proxy_certificate'] = $data['gateway_proxy_certificate'] ?? null;
        $this->container['gateway_proxy_host'] = $data['gateway_proxy_host'] ?? null;
        $this->container['gateway_proxy_password'] = $data['gateway_proxy_password'] ?? null;
        $this->container['gateway_proxy_port'] = $data['gateway_proxy_port'] ?? null;
        $this->container['gateway_proxy_username'] = $data['gateway_proxy_username'] ?? null;
        $this->container['key_store_password'] = $data['key_store_password'] ?? null;
        $this->container['key_store_path'] = $data['key_store_path'] ?? null;
        $this->container['merchant_pseudo_aba_number'] = $data['merchant_pseudo_aba_number'] ?? null;
        $this->container['online_credit_processing'] = $data['online_credit_processing'] ?? null;
        $this->container['online_debit_processing'] = $data['online_debit_processing'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['private_key_password'] = $data['private_key_password'] ?? null;
        $this->container['processor_sequence_limit'] = $data['processor_sequence_limit'] ?? null;
        $this->container['pseudo_batch_push'] = $data['pseudo_batch_push'] ?? null;
        $this->container['source_of_funds'] = $data['source_of_funds'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['visa_acceptance_cloud_key_store_path'] = $data['visa_acceptance_cloud_key_store_path'] ?? null;
        $this->container['visa_acceptance_cloud_password'] = $data['visa_acceptance_cloud_password'] ?? null;
        $this->container['visa_acceptance_cloud_url'] = $data['visa_acceptance_cloud_url'] ?? null;
        $this->container['visa_acceptance_cloud_user_id'] = $data['visa_acceptance_cloud_user_id'] ?? null;
        $this->container['visa_url'] = $data['visa_url'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAcquirerCountryCodeAllowableValues();
        if (!is_null($this->container['acquirer_country_code']) && !in_array($this->container['acquirer_country_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'acquirer_country_code', must be one of '%s'",
                $this->container['acquirer_country_code'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getClassKeyIdentifierAllowableValues();
        if (!is_null($this->container['class_key_identifier']) && !in_array($this->container['class_key_identifier'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'class_key_identifier', must be one of '%s'",
                $this->container['class_key_identifier'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSourceOfFundsAllowableValues();
        if (!is_null($this->container['source_of_funds']) && !in_array($this->container['source_of_funds'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'source_of_funds', must be one of '%s'",
                $this->container['source_of_funds'],
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
     * Gets acquirer_country_code
     *
     * @return string|null
     */
    public function getAcquirerCountryCode()
    {
        return $this->container['acquirer_country_code'];
    }

    /**
     * Sets acquirer_country_code
     *
     * @param string|null $acquirer_country_code The 3 letter ISO 4217 country code for the country transactions are originating from.
     *
     * @return self
     */
    public function setAcquirerCountryCode($acquirer_country_code, $deserialize = false)
    {
        $allowedValues = $this->getAcquirerCountryCodeAllowableValues();
        if (!is_null($acquirer_country_code) && !in_array($acquirer_country_code, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'acquirer_country_code', must be one of '%s'",
                    $acquirer_country_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['acquirer_country_code'] = $acquirer_country_code;

        return $this;
    }

    /**
     * Gets acquiring_bin
     *
     * @return string|null
     */
    public function getAcquiringBin()
    {
        return $this->container['acquiring_bin'];
    }

    /**
     * Sets acquiring_bin
     *
     * @param string|null $acquiring_bin The Bank Identification Number (BIN) the `Processor` is registered under with Visa Direct.
     *
     * @return self
     */
    public function setAcquiringBin($acquiring_bin, $deserialize = false)
    {
        $this->container['acquiring_bin'] = $acquiring_bin;

        return $this;
    }

    /**
     * Gets allow_credit_for_partner
     *
     * @return bool|null
     */
    public function getAllowCreditForPartner()
    {
        return $this->container['allow_credit_for_partner'];
    }

    /**
     * Sets allow_credit_for_partner
     *
     * @param bool|null $allow_credit_for_partner Field used by Finix and processor to handle transactions.
     *
     * @return self
     */
    public function setAllowCreditForPartner($allow_credit_for_partner, $deserialize = false)
    {
        $this->container['allow_credit_for_partner'] = $allow_credit_for_partner;

        return $this;
    }

    /**
     * Gets available_countries
     *
     * @return \Finix\Model\Country[]|null
     */
    public function getAvailableCountries()
    {
        return $this->container['available_countries'];
    }

    /**
     * Sets available_countries
     *
     * @param \Finix\Model\Country[]|null $available_countries Details the countries the `Processor` is avalible in.
     *
     * @return self
     */
    public function setAvailableCountries($available_countries, $deserialize = false)
    {
        $this->container['available_countries'] = $available_countries;

        return $this;
    }

    /**
     * Gets business_application_id
     *
     * @return string|null
     */
    public function getBusinessApplicationId()
    {
        return $this->container['business_application_id'];
    }

    /**
     * Sets business_application_id
     *
     * @param string|null $business_application_id The ID of the `Application` linked to the `Processor`.
     *
     * @return self
     */
    public function setBusinessApplicationId($business_application_id, $deserialize = false)
    {
        $this->container['business_application_id'] = $business_application_id;

        return $this;
    }

    /**
     * Gets class_key_identifier
     *
     * @return string|null
     */
    public function getClassKeyIdentifier()
    {
        return $this->container['class_key_identifier'];
    }

    /**
     * Sets class_key_identifier
     *
     * @param string|null $class_key_identifier Field used by processor to communicate with Finix.
     *
     * @return self
     */
    public function setClassKeyIdentifier($class_key_identifier, $deserialize = false)
    {
        $allowedValues = $this->getClassKeyIdentifierAllowableValues();
        if (!is_null($class_key_identifier) && !in_array($class_key_identifier, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'class_key_identifier', must be one of '%s'",
                    $class_key_identifier,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['class_key_identifier'] = $class_key_identifier;

        return $this;
    }

    /**
     * Gets config
     *
     * @return \Finix\Model\ProcessorSystemConfigConfig|null
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param \Finix\Model\ProcessorSystemConfigConfig|null $config config
     *
     * @return self
     */
    public function setConfig($config, $deserialize = false)
    {
        $this->container['config'] = $config;

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
     * Gets disable_ppgs
     *
     * @return bool|null
     */
    public function getDisablePpgs()
    {
        return $this->container['disable_ppgs'];
    }

    /**
     * Sets disable_ppgs
     *
     * @param bool|null $disable_ppgs Set to **true** to enables the option to push payments to other U.S. debit networks using our Visa Direct integration.
     *
     * @return self
     */
    public function setDisablePpgs($disable_ppgs, $deserialize = false)
    {
        $this->container['disable_ppgs'] = $disable_ppgs;

        return $this;
    }

    /**
     * Gets fee_program_indicator
     *
     * @return string|null
     */
    public function getFeeProgramIndicator()
    {
        return $this->container['fee_program_indicator'];
    }

    /**
     * Sets fee_program_indicator
     *
     * @param string|null $fee_program_indicator Details the price of a Visa Direct payout.
     *
     * @return self
     */
    public function setFeeProgramIndicator($fee_program_indicator, $deserialize = false)
    {
        $this->container['fee_program_indicator'] = $fee_program_indicator;

        return $this;
    }

    /**
     * Gets gateway_proxy_certificate
     *
     * @return string|null
     */
    public function getGatewayProxyCertificate()
    {
        return $this->container['gateway_proxy_certificate'];
    }

    /**
     * Sets gateway_proxy_certificate
     *
     * @param string|null $gateway_proxy_certificate Used if the Gateway needs a proxy. Not applicable to Visa Direct.
     *
     * @return self
     */
    public function setGatewayProxyCertificate($gateway_proxy_certificate, $deserialize = false)
    {
        $this->container['gateway_proxy_certificate'] = $gateway_proxy_certificate;

        return $this;
    }

    /**
     * Gets gateway_proxy_host
     *
     * @return string|null
     */
    public function getGatewayProxyHost()
    {
        return $this->container['gateway_proxy_host'];
    }

    /**
     * Sets gateway_proxy_host
     *
     * @param string|null $gateway_proxy_host Used if the Gateway needs a proxy. Not applicable to Visa Direct.
     *
     * @return self
     */
    public function setGatewayProxyHost($gateway_proxy_host, $deserialize = false)
    {
        $this->container['gateway_proxy_host'] = $gateway_proxy_host;

        return $this;
    }

    /**
     * Gets gateway_proxy_password
     *
     * @return string|null
     */
    public function getGatewayProxyPassword()
    {
        return $this->container['gateway_proxy_password'];
    }

    /**
     * Sets gateway_proxy_password
     *
     * @param string|null $gateway_proxy_password Used if the Gateway needs a proxy. Not applicable to Visa Direct.
     *
     * @return self
     */
    public function setGatewayProxyPassword($gateway_proxy_password, $deserialize = false)
    {
        $this->container['gateway_proxy_password'] = $gateway_proxy_password;

        return $this;
    }

    /**
     * Gets gateway_proxy_port
     *
     * @return string|null
     */
    public function getGatewayProxyPort()
    {
        return $this->container['gateway_proxy_port'];
    }

    /**
     * Sets gateway_proxy_port
     *
     * @param string|null $gateway_proxy_port Used if the Gateway needs a proxy. Not applicable to Visa Direct.
     *
     * @return self
     */
    public function setGatewayProxyPort($gateway_proxy_port, $deserialize = false)
    {
        $this->container['gateway_proxy_port'] = $gateway_proxy_port;

        return $this;
    }

    /**
     * Gets gateway_proxy_username
     *
     * @return string|null
     */
    public function getGatewayProxyUsername()
    {
        return $this->container['gateway_proxy_username'];
    }

    /**
     * Sets gateway_proxy_username
     *
     * @param string|null $gateway_proxy_username Used if the Gateway needs a proxy. Not applicable to Visa Direct.
     *
     * @return self
     */
    public function setGatewayProxyUsername($gateway_proxy_username, $deserialize = false)
    {
        $this->container['gateway_proxy_username'] = $gateway_proxy_username;

        return $this;
    }

    /**
     * Gets key_store_password
     *
     * @return string|null
     */
    public function getKeyStorePassword()
    {
        return $this->container['key_store_password'];
    }

    /**
     * Sets key_store_password
     *
     * @param string|null $key_store_password The password for the Java Keystore that stores the private keys and cert.pem files needed to process transactions using Visa Direct.
     *
     * @return self
     */
    public function setKeyStorePassword($key_store_password, $deserialize = false)
    {
        $this->container['key_store_password'] = $key_store_password;

        return $this;
    }

    /**
     * Gets key_store_path
     *
     * @return string|null
     */
    public function getKeyStorePath()
    {
        return $this->container['key_store_path'];
    }

    /**
     * Sets key_store_path
     *
     * @param string|null $key_store_path The path in AWS where the Java Keystore that stores the private keys and cert.pem files are and use to transact using Visa Direct.
     *
     * @return self
     */
    public function setKeyStorePath($key_store_path, $deserialize = false)
    {
        $this->container['key_store_path'] = $key_store_path;

        return $this;
    }

    /**
     * Gets merchant_pseudo_aba_number
     *
     * @return string|null
     */
    public function getMerchantPseudoAbaNumber()
    {
        return $this->container['merchant_pseudo_aba_number'];
    }

    /**
     * Sets merchant_pseudo_aba_number
     *
     * @param string|null $merchant_pseudo_aba_number A unique ID that's provided when a `Processor` signs up for Push Payment Gateway transactions (PPGS). PPGS allows you to push payments to other U.S. debit networks using our Visa Direct integration.
     *
     * @return self
     */
    public function setMerchantPseudoAbaNumber($merchant_pseudo_aba_number, $deserialize = false)
    {
        $this->container['merchant_pseudo_aba_number'] = $merchant_pseudo_aba_number;

        return $this;
    }

    /**
     * Gets online_credit_processing
     *
     * @return bool|null
     */
    public function getOnlineCreditProcessing()
    {
        return $this->container['online_credit_processing'];
    }

    /**
     * Sets online_credit_processing
     *
     * @param bool|null $online_credit_processing Details if the `Processor` can handle online credit transactions.
     *
     * @return self
     */
    public function setOnlineCreditProcessing($online_credit_processing, $deserialize = false)
    {
        $this->container['online_credit_processing'] = $online_credit_processing;

        return $this;
    }

    /**
     * Gets online_debit_processing
     *
     * @return bool|null
     */
    public function getOnlineDebitProcessing()
    {
        return $this->container['online_debit_processing'];
    }

    /**
     * Sets online_debit_processing
     *
     * @param bool|null $online_debit_processing Details if the `Processor` can handle online debit transactions.
     *
     * @return self
     */
    public function setOnlineDebitProcessing($online_debit_processing, $deserialize = false)
    {
        $this->container['online_debit_processing'] = $online_debit_processing;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password The password found in the credentials section of the Visa Developer Portal (VDP) project. This is needed to connect to Visa Direct.
     *
     * @return self
     */
    public function setPassword($password, $deserialize = false)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets private_key_password
     *
     * @return string|null
     */
    public function getPrivateKeyPassword()
    {
        return $this->container['private_key_password'];
    }

    /**
     * Sets private_key_password
     *
     * @param string|null $private_key_password The password that was used to encrypt the private key that is contained in the Java Keystore.
     *
     * @return self
     */
    public function setPrivateKeyPassword($private_key_password, $deserialize = false)
    {
        $this->container['private_key_password'] = $private_key_password;

        return $this;
    }

    /**
     * Gets processor_sequence_limit
     *
     * @return int|null
     */
    public function getProcessorSequenceLimit()
    {
        return $this->container['processor_sequence_limit'];
    }

    /**
     * Sets processor_sequence_limit
     *
     * @param int|null $processor_sequence_limit Field used by Finix and processor to handle transactions.
     *
     * @return self
     */
    public function setProcessorSequenceLimit($processor_sequence_limit, $deserialize = false)
    {
        $this->container['processor_sequence_limit'] = $processor_sequence_limit;

        return $this;
    }

    /**
     * Gets pseudo_batch_push
     *
     * @return bool|null
     */
    public function getPseudoBatchPush()
    {
        return $this->container['pseudo_batch_push'];
    }

    /**
     * Sets pseudo_batch_push
     *
     * @param bool|null $pseudo_batch_push Field used by Finix and processor to handle transactions.
     *
     * @return self
     */
    public function setPseudoBatchPush($pseudo_batch_push, $deserialize = false)
    {
        $this->container['pseudo_batch_push'] = $pseudo_batch_push;

        return $this;
    }

    /**
     * Gets source_of_funds
     *
     * @return string|null
     */
    public function getSourceOfFunds()
    {
        return $this->container['source_of_funds'];
    }

    /**
     * Sets source_of_funds
     *
     * @param string|null $source_of_funds Specific code that reflects the use case (e.g. funds disbursement, money transfer, etc.). For a full list of codes, see the following [list from Visa](https://developer.visa.com/request_response_codes#source_of_funds).
     *
     * @return self
     */
    public function setSourceOfFunds($source_of_funds, $deserialize = false)
    {
        $allowedValues = $this->getSourceOfFundsAllowableValues();
        if (!is_null($source_of_funds) && !in_array($source_of_funds, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'source_of_funds', must be one of '%s'",
                    $source_of_funds,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source_of_funds'] = $source_of_funds;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id The user ID found in the credentials section of the Visa Developer Portal (VDP) project. This is needed to connect to Visa Direct.
     *
     * @return self
     */
    public function setUserId($user_id, $deserialize = false)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets visa_acceptance_cloud_key_store_path
     *
     * @return string|null
     */
    public function getVisaAcceptanceCloudKeyStorePath()
    {
        return $this->container['visa_acceptance_cloud_key_store_path'];
    }

    /**
     * Sets visa_acceptance_cloud_key_store_path
     *
     * @param string|null $visa_acceptance_cloud_key_store_path Field used by Finix and processor to handle transactions.
     *
     * @return self
     */
    public function setVisaAcceptanceCloudKeyStorePath($visa_acceptance_cloud_key_store_path, $deserialize = false)
    {
        $this->container['visa_acceptance_cloud_key_store_path'] = $visa_acceptance_cloud_key_store_path;

        return $this;
    }

    /**
     * Gets visa_acceptance_cloud_password
     *
     * @return string|null
     */
    public function getVisaAcceptanceCloudPassword()
    {
        return $this->container['visa_acceptance_cloud_password'];
    }

    /**
     * Sets visa_acceptance_cloud_password
     *
     * @param string|null $visa_acceptance_cloud_password Field used by Finix and processor to handle transactions.
     *
     * @return self
     */
    public function setVisaAcceptanceCloudPassword($visa_acceptance_cloud_password, $deserialize = false)
    {
        $this->container['visa_acceptance_cloud_password'] = $visa_acceptance_cloud_password;

        return $this;
    }

    /**
     * Gets visa_acceptance_cloud_url
     *
     * @return string|null
     */
    public function getVisaAcceptanceCloudUrl()
    {
        return $this->container['visa_acceptance_cloud_url'];
    }

    /**
     * Sets visa_acceptance_cloud_url
     *
     * @param string|null $visa_acceptance_cloud_url Field used by Finix and processor to handle transactions.
     *
     * @return self
     */
    public function setVisaAcceptanceCloudUrl($visa_acceptance_cloud_url, $deserialize = false)
    {
        $this->container['visa_acceptance_cloud_url'] = $visa_acceptance_cloud_url;

        return $this;
    }

    /**
     * Gets visa_acceptance_cloud_user_id
     *
     * @return string|null
     */
    public function getVisaAcceptanceCloudUserId()
    {
        return $this->container['visa_acceptance_cloud_user_id'];
    }

    /**
     * Sets visa_acceptance_cloud_user_id
     *
     * @param string|null $visa_acceptance_cloud_user_id Field used by Finix and processor to handle transactions.
     *
     * @return self
     */
    public function setVisaAcceptanceCloudUserId($visa_acceptance_cloud_user_id, $deserialize = false)
    {
        $this->container['visa_acceptance_cloud_user_id'] = $visa_acceptance_cloud_user_id;

        return $this;
    }

    /**
     * Gets visa_url
     *
     * @return string|null
     */
    public function getVisaUrl()
    {
        return $this->container['visa_url'];
    }

    /**
     * Sets visa_url
     *
     * @param string|null $visa_url The URL that is used to connect to Visa.
     *
     * @return self
     */
    public function setVisaUrl($visa_url, $deserialize = false)
    {
        $this->container['visa_url'] = $visa_url;

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



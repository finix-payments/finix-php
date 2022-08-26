<?php
/**
 * CreateIdentityRequestAdditionalUnderwritingData
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Finix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Finix API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2022-02-01
 * Contact: support@finixpayments.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Finix\Model;

use \ArrayAccess;
use \Finix\ObjectSerializer;

/**
 * CreateIdentityRequestAdditionalUnderwritingData Class Doc Comment
 *
 * @category Class
 * @package  Finix
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateIdentityRequestAdditionalUnderwritingData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateIdentityRequest_additional_underwriting_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchant_agreement_accepted' => 'bool',
        'merchant_agreement_ip_address' => 'string',
        'volume_distribution_by_business_type' => '\Finix\Model\CreateIdentityRequestAdditionalUnderwritingDataVolumeDistributionByBusinessType',
        'average_ach_transfer_amount' => 'int',
        'annual_ach_volume' => 'int',
        'credit_check_user_agent' => 'string',
        'refund_policy' => 'string',
        'credit_check_timestamp' => 'string',
        'credit_check_allowed' => 'bool',
        'merchant_agreement_timestamp' => 'string',
        'business_description' => 'string',
        'average_card_transfer_amount' => 'int',
        'credit_check_ip_address' => 'string',
        'merchant_agreement_user_agent' => 'string',
        'card_volume_distribution' => '\Finix\Model\CreateIdentityRequestAdditionalUnderwritingDataCardVolumeDistribution'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'merchant_agreement_accepted' => null,
        'merchant_agreement_ip_address' => null,
        'volume_distribution_by_business_type' => null,
        'average_ach_transfer_amount' => null,
        'annual_ach_volume' => null,
        'credit_check_user_agent' => null,
        'refund_policy' => null,
        'credit_check_timestamp' => null,
        'credit_check_allowed' => null,
        'merchant_agreement_timestamp' => null,
        'business_description' => null,
        'average_card_transfer_amount' => null,
        'credit_check_ip_address' => null,
        'merchant_agreement_user_agent' => null,
        'card_volume_distribution' => null
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
        'merchant_agreement_accepted' => 'merchant_agreement_accepted',
        'merchant_agreement_ip_address' => 'merchant_agreement_ip_address',
        'volume_distribution_by_business_type' => 'volume_distribution_by_business_type',
        'average_ach_transfer_amount' => 'average_ach_transfer_amount',
        'annual_ach_volume' => 'annual_ach_volume',
        'credit_check_user_agent' => 'credit_check_user_agent',
        'refund_policy' => 'refund_policy',
        'credit_check_timestamp' => 'credit_check_timestamp',
        'credit_check_allowed' => 'credit_check_allowed',
        'merchant_agreement_timestamp' => 'merchant_agreement_timestamp',
        'business_description' => 'business_description',
        'average_card_transfer_amount' => 'average_card_transfer_amount',
        'credit_check_ip_address' => 'credit_check_ip_address',
        'merchant_agreement_user_agent' => 'merchant_agreement_user_agent',
        'card_volume_distribution' => 'card_volume_distribution'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_agreement_accepted' => 'setMerchantAgreementAccepted',
        'merchant_agreement_ip_address' => 'setMerchantAgreementIpAddress',
        'volume_distribution_by_business_type' => 'setVolumeDistributionByBusinessType',
        'average_ach_transfer_amount' => 'setAverageAchTransferAmount',
        'annual_ach_volume' => 'setAnnualAchVolume',
        'credit_check_user_agent' => 'setCreditCheckUserAgent',
        'refund_policy' => 'setRefundPolicy',
        'credit_check_timestamp' => 'setCreditCheckTimestamp',
        'credit_check_allowed' => 'setCreditCheckAllowed',
        'merchant_agreement_timestamp' => 'setMerchantAgreementTimestamp',
        'business_description' => 'setBusinessDescription',
        'average_card_transfer_amount' => 'setAverageCardTransferAmount',
        'credit_check_ip_address' => 'setCreditCheckIpAddress',
        'merchant_agreement_user_agent' => 'setMerchantAgreementUserAgent',
        'card_volume_distribution' => 'setCardVolumeDistribution'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_agreement_accepted' => 'getMerchantAgreementAccepted',
        'merchant_agreement_ip_address' => 'getMerchantAgreementIpAddress',
        'volume_distribution_by_business_type' => 'getVolumeDistributionByBusinessType',
        'average_ach_transfer_amount' => 'getAverageAchTransferAmount',
        'annual_ach_volume' => 'getAnnualAchVolume',
        'credit_check_user_agent' => 'getCreditCheckUserAgent',
        'refund_policy' => 'getRefundPolicy',
        'credit_check_timestamp' => 'getCreditCheckTimestamp',
        'credit_check_allowed' => 'getCreditCheckAllowed',
        'merchant_agreement_timestamp' => 'getMerchantAgreementTimestamp',
        'business_description' => 'getBusinessDescription',
        'average_card_transfer_amount' => 'getAverageCardTransferAmount',
        'credit_check_ip_address' => 'getCreditCheckIpAddress',
        'merchant_agreement_user_agent' => 'getMerchantAgreementUserAgent',
        'card_volume_distribution' => 'getCardVolumeDistribution'
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

    public const REFUND_POLICY_NO_REFUNDS = 'NO_REFUNDS';
    public const REFUND_POLICY_MERCHANDISE_EXCHANGE_ONLY = 'MERCHANDISE_EXCHANGE_ONLY';
    public const REFUND_POLICY__30_DAYS = '30_DAYS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRefundPolicyAllowableValues()
    {
        return [
            self::REFUND_POLICY_NO_REFUNDS,
            self::REFUND_POLICY_MERCHANDISE_EXCHANGE_ONLY,
            self::REFUND_POLICY__30_DAYS,
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
        $this->container['merchant_agreement_accepted'] = $data['merchant_agreement_accepted'] ?? null;
        $this->container['merchant_agreement_ip_address'] = $data['merchant_agreement_ip_address'] ?? null;
        $this->container['volume_distribution_by_business_type'] = $data['volume_distribution_by_business_type'] ?? null;
        $this->container['average_ach_transfer_amount'] = $data['average_ach_transfer_amount'] ?? null;
        $this->container['annual_ach_volume'] = $data['annual_ach_volume'] ?? null;
        $this->container['credit_check_user_agent'] = $data['credit_check_user_agent'] ?? null;
        $this->container['refund_policy'] = $data['refund_policy'] ?? null;
        $this->container['credit_check_timestamp'] = $data['credit_check_timestamp'] ?? null;
        $this->container['credit_check_allowed'] = $data['credit_check_allowed'] ?? null;
        $this->container['merchant_agreement_timestamp'] = $data['merchant_agreement_timestamp'] ?? null;
        $this->container['business_description'] = $data['business_description'] ?? null;
        $this->container['average_card_transfer_amount'] = $data['average_card_transfer_amount'] ?? null;
        $this->container['credit_check_ip_address'] = $data['credit_check_ip_address'] ?? null;
        $this->container['merchant_agreement_user_agent'] = $data['merchant_agreement_user_agent'] ?? null;
        $this->container['card_volume_distribution'] = $data['card_volume_distribution'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['merchant_agreement_ip_address']) && (mb_strlen($this->container['merchant_agreement_ip_address']) < 1)) {
            $invalidProperties[] = "invalid value for 'merchant_agreement_ip_address', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['credit_check_user_agent']) && (mb_strlen($this->container['credit_check_user_agent']) < 1)) {
            $invalidProperties[] = "invalid value for 'credit_check_user_agent', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getRefundPolicyAllowableValues();
        if (!is_null($this->container['refund_policy']) && !in_array($this->container['refund_policy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'refund_policy', must be one of '%s'",
                $this->container['refund_policy'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['credit_check_timestamp']) && (mb_strlen($this->container['credit_check_timestamp']) < 1)) {
            $invalidProperties[] = "invalid value for 'credit_check_timestamp', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['merchant_agreement_timestamp']) && (mb_strlen($this->container['merchant_agreement_timestamp']) < 1)) {
            $invalidProperties[] = "invalid value for 'merchant_agreement_timestamp', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['credit_check_ip_address']) && (mb_strlen($this->container['credit_check_ip_address']) < 1)) {
            $invalidProperties[] = "invalid value for 'credit_check_ip_address', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['merchant_agreement_user_agent']) && (mb_strlen($this->container['merchant_agreement_user_agent']) < 1)) {
            $invalidProperties[] = "invalid value for 'merchant_agreement_user_agent', the character length must be bigger than or equal to 1.";
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
     * Gets merchant_agreement_accepted
     *
     * @return bool|null
     */
    public function getMerchantAgreementAccepted()
    {
        return $this->container['merchant_agreement_accepted'];
    }

    /**
     * Sets merchant_agreement_accepted
     *
     * @param bool|null $merchant_agreement_accepted Sets whether this merchant has accepted the terms and conditions of the merchant agreement.
     *
     * @return self
     */
    public function setMerchantAgreementAccepted($merchant_agreement_accepted, $deserialize = false)
    {
        $this->container['merchant_agreement_accepted'] = $merchant_agreement_accepted;

        return $this;
    }

    /**
     * Gets merchant_agreement_ip_address
     *
     * @return string|null
     */
    public function getMerchantAgreementIpAddress()
    {
        return $this->container['merchant_agreement_ip_address'];
    }

    /**
     * Sets merchant_agreement_ip_address
     *
     * @param string|null $merchant_agreement_ip_address IP address of the merchant when this merchant accepted the merchant agreement (e.g., 42.1.1.113).
     *
     * @return self
     */
    public function setMerchantAgreementIpAddress($merchant_agreement_ip_address, $deserialize = false)
    {

        if (!is_null($merchant_agreement_ip_address) && (mb_strlen($merchant_agreement_ip_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for $merchant_agreement_ip_address when calling CreateIdentityRequestAdditionalUnderwritingData., must be bigger than or equal to 1.');
        }
        

        $this->container['merchant_agreement_ip_address'] = $merchant_agreement_ip_address;

        return $this;
    }

    /**
     * Gets volume_distribution_by_business_type
     *
     * @return \Finix\Model\CreateIdentityRequestAdditionalUnderwritingDataVolumeDistributionByBusinessType|null
     */
    public function getVolumeDistributionByBusinessType()
    {
        return $this->container['volume_distribution_by_business_type'];
    }

    /**
     * Sets volume_distribution_by_business_type
     *
     * @param \Finix\Model\CreateIdentityRequestAdditionalUnderwritingDataVolumeDistributionByBusinessType|null $volume_distribution_by_business_type volume_distribution_by_business_type
     *
     * @return self
     */
    public function setVolumeDistributionByBusinessType($volume_distribution_by_business_type, $deserialize = false)
    {
        $this->container['volume_distribution_by_business_type'] = $volume_distribution_by_business_type;

        return $this;
    }

    /**
     * Gets average_ach_transfer_amount
     *
     * @return int|null
     */
    public function getAverageAchTransferAmount()
    {
        return $this->container['average_ach_transfer_amount'];
    }

    /**
     * Sets average_ach_transfer_amount
     *
     * @param int|null $average_ach_transfer_amount The approximate average ACH sale amount (in cents) for this merchant.
     *
     * @return self
     */
    public function setAverageAchTransferAmount($average_ach_transfer_amount, $deserialize = false)
    {
        $this->container['average_ach_transfer_amount'] = $average_ach_transfer_amount;

        return $this;
    }

    /**
     * Gets annual_ach_volume
     *
     * @return int|null
     */
    public function getAnnualAchVolume()
    {
        return $this->container['annual_ach_volume'];
    }

    /**
     * Sets annual_ach_volume
     *
     * @param int|null $annual_ach_volume The approximate annual ACH sales expected to be processed (in cents) by this merchant (max 10 characters).
     *
     * @return self
     */
    public function setAnnualAchVolume($annual_ach_volume, $deserialize = false)
    {
        $this->container['annual_ach_volume'] = $annual_ach_volume;

        return $this;
    }

    /**
     * Gets credit_check_user_agent
     *
     * @return string|null
     */
    public function getCreditCheckUserAgent()
    {
        return $this->container['credit_check_user_agent'];
    }

    /**
     * Sets credit_check_user_agent
     *
     * @param string|null $credit_check_user_agent The details of the browser that was used when this merchant consented to a credit check (e.g., Mozilla 5.0 (Macintosh; Intel Mac OS X 10 _14_6)).
     *
     * @return self
     */
    public function setCreditCheckUserAgent($credit_check_user_agent, $deserialize = false)
    {

        if (!is_null($credit_check_user_agent) && (mb_strlen($credit_check_user_agent) < 1)) {
            throw new \InvalidArgumentException('invalid length for $credit_check_user_agent when calling CreateIdentityRequestAdditionalUnderwritingData., must be bigger than or equal to 1.');
        }
        

        $this->container['credit_check_user_agent'] = $credit_check_user_agent;

        return $this;
    }

    /**
     * Gets refund_policy
     *
     * @return string|null
     */
    public function getRefundPolicy()
    {
        return $this->container['refund_policy'];
    }

    /**
     * Sets refund_policy
     *
     * @param string|null $refund_policy The details of the browser that was used when this merchant consented to a credit check (e.g., Mozilla 5.0 (Macintosh; Intel Mac OS X 10 _14_6)).
     *
     * @return self
     */
    public function setRefundPolicy($refund_policy, $deserialize = false)
    {
        $allowedValues = $this->getRefundPolicyAllowableValues();
        if (!is_null($refund_policy) && !in_array($refund_policy, $allowedValues, true) && !$deserialize) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'refund_policy', must be one of '%s'",
                    $refund_policy,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['refund_policy'] = $refund_policy;

        return $this;
    }

    /**
     * Gets credit_check_timestamp
     *
     * @return string|null
     */
    public function getCreditCheckTimestamp()
    {
        return $this->container['credit_check_timestamp'];
    }

    /**
     * Sets credit_check_timestamp
     *
     * @param string|null $credit_check_timestamp A timestamp of when this merchant consented to a credit check (e.g., 2021-04-28T16:42:55Z).
     *
     * @return self
     */
    public function setCreditCheckTimestamp($credit_check_timestamp, $deserialize = false)
    {

        if (!is_null($credit_check_timestamp) && (mb_strlen($credit_check_timestamp) < 1)) {
            throw new \InvalidArgumentException('invalid length for $credit_check_timestamp when calling CreateIdentityRequestAdditionalUnderwritingData., must be bigger than or equal to 1.');
        }
        

        $this->container['credit_check_timestamp'] = $credit_check_timestamp;

        return $this;
    }

    /**
     * Gets credit_check_allowed
     *
     * @return bool|null
     */
    public function getCreditCheckAllowed()
    {
        return $this->container['credit_check_allowed'];
    }

    /**
     * Sets credit_check_allowed
     *
     * @param bool|null $credit_check_allowed Sets if this merchant has consented and accepted to a credit check.
     *
     * @return self
     */
    public function setCreditCheckAllowed($credit_check_allowed, $deserialize = false)
    {
        $this->container['credit_check_allowed'] = $credit_check_allowed;

        return $this;
    }

    /**
     * Gets merchant_agreement_timestamp
     *
     * @return string|null
     */
    public function getMerchantAgreementTimestamp()
    {
        return $this->container['merchant_agreement_timestamp'];
    }

    /**
     * Sets merchant_agreement_timestamp
     *
     * @param string|null $merchant_agreement_timestamp Sets if this merchant has consented and accepted to a credit check.
     *
     * @return self
     */
    public function setMerchantAgreementTimestamp($merchant_agreement_timestamp, $deserialize = false)
    {

        if (!is_null($merchant_agreement_timestamp) && (mb_strlen($merchant_agreement_timestamp) < 1)) {
            throw new \InvalidArgumentException('invalid length for $merchant_agreement_timestamp when calling CreateIdentityRequestAdditionalUnderwritingData., must be bigger than or equal to 1.');
        }
        

        $this->container['merchant_agreement_timestamp'] = $merchant_agreement_timestamp;

        return $this;
    }

    /**
     * Gets business_description
     *
     * @return string|null
     */
    public function getBusinessDescription()
    {
        return $this->container['business_description'];
    }

    /**
     * Sets business_description
     *
     * @param string|null $business_description Description of this merchant's business (max 200 characters).
     *
     * @return self
     */
    public function setBusinessDescription($business_description, $deserialize = false)
    {
        $this->container['business_description'] = $business_description;

        return $this;
    }

    /**
     * Gets average_card_transfer_amount
     *
     * @return int|null
     */
    public function getAverageCardTransferAmount()
    {
        return $this->container['average_card_transfer_amount'];
    }

    /**
     * Sets average_card_transfer_amount
     *
     * @param int|null $average_card_transfer_amount The average credit card sale amount (in cents) for this merchant.
     *
     * @return self
     */
    public function setAverageCardTransferAmount($average_card_transfer_amount, $deserialize = false)
    {
        $this->container['average_card_transfer_amount'] = $average_card_transfer_amount;

        return $this;
    }

    /**
     * Gets credit_check_ip_address
     *
     * @return string|null
     */
    public function getCreditCheckIpAddress()
    {
        return $this->container['credit_check_ip_address'];
    }

    /**
     * Sets credit_check_ip_address
     *
     * @param string|null $credit_check_ip_address The IP address of the merchant when they consented to a credit check (e.g., 42.1.1.113 ).
     *
     * @return self
     */
    public function setCreditCheckIpAddress($credit_check_ip_address, $deserialize = false)
    {

        if (!is_null($credit_check_ip_address) && (mb_strlen($credit_check_ip_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for $credit_check_ip_address when calling CreateIdentityRequestAdditionalUnderwritingData., must be bigger than or equal to 1.');
        }
        

        $this->container['credit_check_ip_address'] = $credit_check_ip_address;

        return $this;
    }

    /**
     * Gets merchant_agreement_user_agent
     *
     * @return string|null
     */
    public function getMerchantAgreementUserAgent()
    {
        return $this->container['merchant_agreement_user_agent'];
    }

    /**
     * Sets merchant_agreement_user_agent
     *
     * @param string|null $merchant_agreement_user_agent The details of the browser that was used when this merchant accepted Finix's Terms of Service (e.g., Mozilla 5.0 (Macintosh; Intel Mac OS X 10 _14_6)).
     *
     * @return self
     */
    public function setMerchantAgreementUserAgent($merchant_agreement_user_agent, $deserialize = false)
    {

        if (!is_null($merchant_agreement_user_agent) && (mb_strlen($merchant_agreement_user_agent) < 1)) {
            throw new \InvalidArgumentException('invalid length for $merchant_agreement_user_agent when calling CreateIdentityRequestAdditionalUnderwritingData., must be bigger than or equal to 1.');
        }
        

        $this->container['merchant_agreement_user_agent'] = $merchant_agreement_user_agent;

        return $this;
    }

    /**
     * Gets card_volume_distribution
     *
     * @return \Finix\Model\CreateIdentityRequestAdditionalUnderwritingDataCardVolumeDistribution|null
     */
    public function getCardVolumeDistribution()
    {
        return $this->container['card_volume_distribution'];
    }

    /**
     * Sets card_volume_distribution
     *
     * @param \Finix\Model\CreateIdentityRequestAdditionalUnderwritingDataCardVolumeDistribution|null $card_volume_distribution card_volume_distribution
     *
     * @return self
     */
    public function setCardVolumeDistribution($card_volume_distribution, $deserialize = false)
    {
        $this->container['card_volume_distribution'] = $card_volume_distribution;

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



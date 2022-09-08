<?php
/**
 * UpdateIdentityRequestAdditionalUnderwritingData
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
 * UpdateIdentityRequestAdditionalUnderwritingData Class Doc Comment
 *
 * @category Class
 * @description Additional underwriting data that&#39;s required to verify the &#x60;Identity&#x60; of merchants.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateIdentityRequestAdditionalUnderwritingData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateIdentityRequest_additional_underwriting_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'annual_ach_volume' => 'int',
        'average_ach_transfer_amount' => 'int',
        'average_card_transfer_amount' => 'int',
        'business_description' => 'string',
        'credit_check_allowed' => 'bool',
        'credit_check_ip_address' => 'string',
        'credit_check_timestamp' => 'string',
        'credit_check_user_agent' => 'string',
        'card_volume_distribution' => '\Finix\Model\UpdateIdentityRequestAdditionalUnderwritingDataCardVolumeDistribution',
        'merchant_agreement_accepted' => 'bool',
        'merchant_agreement_ip_address' => 'string',
        'merchant_agreement_timestamp' => 'string',
        'merchant_agreement_user_agent' => 'string',
        'refund_policy' => 'string',
        'volume_distribution_by_business_type' => '\Finix\Model\UpdateIdentityRequestAdditionalUnderwritingDataVolumeDistributionByBusinessType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'annual_ach_volume' => null,
        'average_ach_transfer_amount' => null,
        'average_card_transfer_amount' => null,
        'business_description' => null,
        'credit_check_allowed' => null,
        'credit_check_ip_address' => null,
        'credit_check_timestamp' => null,
        'credit_check_user_agent' => null,
        'card_volume_distribution' => null,
        'merchant_agreement_accepted' => null,
        'merchant_agreement_ip_address' => null,
        'merchant_agreement_timestamp' => null,
        'merchant_agreement_user_agent' => null,
        'refund_policy' => null,
        'volume_distribution_by_business_type' => null
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
        'annual_ach_volume' => 'annual_ach_volume',
        'average_ach_transfer_amount' => 'average_ach_transfer_amount',
        'average_card_transfer_amount' => 'average_card_transfer_amount',
        'business_description' => 'business_description',
        'credit_check_allowed' => 'credit_check_allowed',
        'credit_check_ip_address' => 'credit_check_ip_address',
        'credit_check_timestamp' => 'credit_check_timestamp',
        'credit_check_user_agent' => 'credit_check_user_agent',
        'card_volume_distribution' => 'card_volume_distribution',
        'merchant_agreement_accepted' => 'merchant_agreement_accepted',
        'merchant_agreement_ip_address' => 'merchant_agreement_ip_address',
        'merchant_agreement_timestamp' => 'merchant_agreement_timestamp',
        'merchant_agreement_user_agent' => 'merchant_agreement_user_agent',
        'refund_policy' => 'refund_policy',
        'volume_distribution_by_business_type' => 'volume_distribution_by_business_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'annual_ach_volume' => 'setAnnualAchVolume',
        'average_ach_transfer_amount' => 'setAverageAchTransferAmount',
        'average_card_transfer_amount' => 'setAverageCardTransferAmount',
        'business_description' => 'setBusinessDescription',
        'credit_check_allowed' => 'setCreditCheckAllowed',
        'credit_check_ip_address' => 'setCreditCheckIpAddress',
        'credit_check_timestamp' => 'setCreditCheckTimestamp',
        'credit_check_user_agent' => 'setCreditCheckUserAgent',
        'card_volume_distribution' => 'setCardVolumeDistribution',
        'merchant_agreement_accepted' => 'setMerchantAgreementAccepted',
        'merchant_agreement_ip_address' => 'setMerchantAgreementIpAddress',
        'merchant_agreement_timestamp' => 'setMerchantAgreementTimestamp',
        'merchant_agreement_user_agent' => 'setMerchantAgreementUserAgent',
        'refund_policy' => 'setRefundPolicy',
        'volume_distribution_by_business_type' => 'setVolumeDistributionByBusinessType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'annual_ach_volume' => 'getAnnualAchVolume',
        'average_ach_transfer_amount' => 'getAverageAchTransferAmount',
        'average_card_transfer_amount' => 'getAverageCardTransferAmount',
        'business_description' => 'getBusinessDescription',
        'credit_check_allowed' => 'getCreditCheckAllowed',
        'credit_check_ip_address' => 'getCreditCheckIpAddress',
        'credit_check_timestamp' => 'getCreditCheckTimestamp',
        'credit_check_user_agent' => 'getCreditCheckUserAgent',
        'card_volume_distribution' => 'getCardVolumeDistribution',
        'merchant_agreement_accepted' => 'getMerchantAgreementAccepted',
        'merchant_agreement_ip_address' => 'getMerchantAgreementIpAddress',
        'merchant_agreement_timestamp' => 'getMerchantAgreementTimestamp',
        'merchant_agreement_user_agent' => 'getMerchantAgreementUserAgent',
        'refund_policy' => 'getRefundPolicy',
        'volume_distribution_by_business_type' => 'getVolumeDistributionByBusinessType'
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
    public const REFUND_POLICY_WITHIN_30_DAYS_OTHER = 'WITHIN_30_DAYS OTHER';

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
            self::REFUND_POLICY_WITHIN_30_DAYS_OTHER,
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
        $this->container['annual_ach_volume'] = $data['annual_ach_volume'] ?? null;
        $this->container['average_ach_transfer_amount'] = $data['average_ach_transfer_amount'] ?? null;
        $this->container['average_card_transfer_amount'] = $data['average_card_transfer_amount'] ?? null;
        $this->container['business_description'] = $data['business_description'] ?? null;
        $this->container['credit_check_allowed'] = $data['credit_check_allowed'] ?? null;
        $this->container['credit_check_ip_address'] = $data['credit_check_ip_address'] ?? null;
        $this->container['credit_check_timestamp'] = $data['credit_check_timestamp'] ?? null;
        $this->container['credit_check_user_agent'] = $data['credit_check_user_agent'] ?? null;
        $this->container['card_volume_distribution'] = $data['card_volume_distribution'] ?? null;
        $this->container['merchant_agreement_accepted'] = $data['merchant_agreement_accepted'] ?? null;
        $this->container['merchant_agreement_ip_address'] = $data['merchant_agreement_ip_address'] ?? null;
        $this->container['merchant_agreement_timestamp'] = $data['merchant_agreement_timestamp'] ?? null;
        $this->container['merchant_agreement_user_agent'] = $data['merchant_agreement_user_agent'] ?? null;
        $this->container['refund_policy'] = $data['refund_policy'] ?? null;
        $this->container['volume_distribution_by_business_type'] = $data['volume_distribution_by_business_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['business_description']) && (mb_strlen($this->container['business_description']) < 1)) {
            $invalidProperties[] = "invalid value for 'business_description', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['credit_check_ip_address']) && (mb_strlen($this->container['credit_check_ip_address']) < 1)) {
            $invalidProperties[] = "invalid value for 'credit_check_ip_address', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['credit_check_timestamp']) && (mb_strlen($this->container['credit_check_timestamp']) < 1)) {
            $invalidProperties[] = "invalid value for 'credit_check_timestamp', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['credit_check_user_agent']) && (mb_strlen($this->container['credit_check_user_agent']) < 1)) {
            $invalidProperties[] = "invalid value for 'credit_check_user_agent', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['merchant_agreement_ip_address']) && (mb_strlen($this->container['merchant_agreement_ip_address']) < 1)) {
            $invalidProperties[] = "invalid value for 'merchant_agreement_ip_address', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['merchant_agreement_timestamp']) && (mb_strlen($this->container['merchant_agreement_timestamp']) < 1)) {
            $invalidProperties[] = "invalid value for 'merchant_agreement_timestamp', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['merchant_agreement_user_agent']) && (mb_strlen($this->container['merchant_agreement_user_agent']) < 1)) {
            $invalidProperties[] = "invalid value for 'merchant_agreement_user_agent', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getRefundPolicyAllowableValues();
        if (!is_null($this->container['refund_policy']) && !in_array($this->container['refund_policy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'refund_policy', must be one of '%s'",
                $this->container['refund_policy'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['refund_policy']) && (mb_strlen($this->container['refund_policy']) < 1)) {
            $invalidProperties[] = "invalid value for 'refund_policy', the character length must be bigger than or equal to 1.";
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

        if (!is_null($business_description) && (mb_strlen($business_description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $business_description when calling UpdateIdentityRequestAdditionalUnderwritingData., must be bigger than or equal to 1.');
        }
        

        $this->container['business_description'] = $business_description;

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
            throw new \InvalidArgumentException('invalid length for $credit_check_ip_address when calling UpdateIdentityRequestAdditionalUnderwritingData., must be bigger than or equal to 1.');
        }
        

        $this->container['credit_check_ip_address'] = $credit_check_ip_address;

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
            throw new \InvalidArgumentException('invalid length for $credit_check_timestamp when calling UpdateIdentityRequestAdditionalUnderwritingData., must be bigger than or equal to 1.');
        }
        

        $this->container['credit_check_timestamp'] = $credit_check_timestamp;

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
            throw new \InvalidArgumentException('invalid length for $credit_check_user_agent when calling UpdateIdentityRequestAdditionalUnderwritingData., must be bigger than or equal to 1.');
        }
        

        $this->container['credit_check_user_agent'] = $credit_check_user_agent;

        return $this;
    }

    /**
     * Gets card_volume_distribution
     *
     * @return \Finix\Model\UpdateIdentityRequestAdditionalUnderwritingDataCardVolumeDistribution|null
     */
    public function getCardVolumeDistribution()
    {
        return $this->container['card_volume_distribution'];
    }

    /**
     * Sets card_volume_distribution
     *
     * @param \Finix\Model\UpdateIdentityRequestAdditionalUnderwritingDataCardVolumeDistribution|null $card_volume_distribution card_volume_distribution
     *
     * @return self
     */
    public function setCardVolumeDistribution($card_volume_distribution, $deserialize = false)
    {
        $this->container['card_volume_distribution'] = $card_volume_distribution;

        return $this;
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
            throw new \InvalidArgumentException('invalid length for $merchant_agreement_ip_address when calling UpdateIdentityRequestAdditionalUnderwritingData., must be bigger than or equal to 1.');
        }
        

        $this->container['merchant_agreement_ip_address'] = $merchant_agreement_ip_address;

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
     * @param string|null $merchant_agreement_timestamp Timestamp of when the merchant accepted Finix's Terms of Service (e.g., 2021-04-28T16:42:55Z).
     *
     * @return self
     */
    public function setMerchantAgreementTimestamp($merchant_agreement_timestamp, $deserialize = false)
    {

        if (!is_null($merchant_agreement_timestamp) && (mb_strlen($merchant_agreement_timestamp) < 1)) {
            throw new \InvalidArgumentException('invalid length for $merchant_agreement_timestamp when calling UpdateIdentityRequestAdditionalUnderwritingData., must be bigger than or equal to 1.');
        }
        

        $this->container['merchant_agreement_timestamp'] = $merchant_agreement_timestamp;

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
            throw new \InvalidArgumentException('invalid length for $merchant_agreement_user_agent when calling UpdateIdentityRequestAdditionalUnderwritingData., must be bigger than or equal to 1.');
        }
        

        $this->container['merchant_agreement_user_agent'] = $merchant_agreement_user_agent;

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
     * @param string|null $refund_policy Include the value that best applies to the merchant's refund policy.
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

        if (!is_null($refund_policy) && (mb_strlen($refund_policy) < 1)) {
            throw new \InvalidArgumentException('invalid length for $refund_policy when calling UpdateIdentityRequestAdditionalUnderwritingData., must be bigger than or equal to 1.');
        }
        

        $this->container['refund_policy'] = $refund_policy;

        return $this;
    }

    /**
     * Gets volume_distribution_by_business_type
     *
     * @return \Finix\Model\UpdateIdentityRequestAdditionalUnderwritingDataVolumeDistributionByBusinessType|null
     */
    public function getVolumeDistributionByBusinessType()
    {
        return $this->container['volume_distribution_by_business_type'];
    }

    /**
     * Sets volume_distribution_by_business_type
     *
     * @param \Finix\Model\UpdateIdentityRequestAdditionalUnderwritingDataVolumeDistributionByBusinessType|null $volume_distribution_by_business_type volume_distribution_by_business_type
     *
     * @return self
     */
    public function setVolumeDistributionByBusinessType($volume_distribution_by_business_type, $deserialize = false)
    {
        $this->container['volume_distribution_by_business_type'] = $volume_distribution_by_business_type;

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



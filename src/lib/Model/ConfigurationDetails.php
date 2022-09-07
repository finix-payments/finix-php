<?php
/**
 * ConfigurationDetails
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
 * ConfigurationDetails Class Doc Comment
 *
 * @category Class
 * @description Configure the details of the activated device.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ConfigurationDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConfigurationDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_debit' => 'bool',
        'allow_partial_approvals' => 'bool',
        'bypass_device_on_capture' => 'bool',
        'cashback_options' => '\Finix\Model\ConfigurationDetailsCashbackOptions',
        'check_for_duplicate_transactions' => 'bool',
        'is_cash_back_allowed' => 'bool',
        'is_gift_supported' => 'string',
        'is_manual_entry_allowed' => 'bool',
        'market_code' => 'string',
        'prompt_amount_confirmation' => 'bool',
        'prompt_manual_entry' => 'bool',
        'prompt_signature' => 'string',
        'signature_threshold_amount' => 'int',
        'tip_options' => '\Finix\Model\ConfigurationDetailsTipOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allow_debit' => null,
        'allow_partial_approvals' => null,
        'bypass_device_on_capture' => null,
        'cashback_options' => null,
        'check_for_duplicate_transactions' => null,
        'is_cash_back_allowed' => null,
        'is_gift_supported' => null,
        'is_manual_entry_allowed' => null,
        'market_code' => null,
        'prompt_amount_confirmation' => null,
        'prompt_manual_entry' => null,
        'prompt_signature' => null,
        'signature_threshold_amount' => null,
        'tip_options' => null
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
        'allow_debit' => 'allow_debit',
        'allow_partial_approvals' => 'allow_partial_approvals',
        'bypass_device_on_capture' => 'bypass_device_on_capture',
        'cashback_options' => 'cashback_options',
        'check_for_duplicate_transactions' => 'check_for_duplicate_transactions',
        'is_cash_back_allowed' => 'is_cash_back_allowed',
        'is_gift_supported' => 'is_gift_supported',
        'is_manual_entry_allowed' => 'is_manual_entry_allowed',
        'market_code' => 'market_code',
        'prompt_amount_confirmation' => 'prompt_amount_confirmation',
        'prompt_manual_entry' => 'prompt_manual_entry',
        'prompt_signature' => 'prompt_signature',
        'signature_threshold_amount' => 'signature_threshold_amount',
        'tip_options' => 'tip_options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_debit' => 'setAllowDebit',
        'allow_partial_approvals' => 'setAllowPartialApprovals',
        'bypass_device_on_capture' => 'setBypassDeviceOnCapture',
        'cashback_options' => 'setCashbackOptions',
        'check_for_duplicate_transactions' => 'setCheckForDuplicateTransactions',
        'is_cash_back_allowed' => 'setIsCashBackAllowed',
        'is_gift_supported' => 'setIsGiftSupported',
        'is_manual_entry_allowed' => 'setIsManualEntryAllowed',
        'market_code' => 'setMarketCode',
        'prompt_amount_confirmation' => 'setPromptAmountConfirmation',
        'prompt_manual_entry' => 'setPromptManualEntry',
        'prompt_signature' => 'setPromptSignature',
        'signature_threshold_amount' => 'setSignatureThresholdAmount',
        'tip_options' => 'setTipOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_debit' => 'getAllowDebit',
        'allow_partial_approvals' => 'getAllowPartialApprovals',
        'bypass_device_on_capture' => 'getBypassDeviceOnCapture',
        'cashback_options' => 'getCashbackOptions',
        'check_for_duplicate_transactions' => 'getCheckForDuplicateTransactions',
        'is_cash_back_allowed' => 'getIsCashBackAllowed',
        'is_gift_supported' => 'getIsGiftSupported',
        'is_manual_entry_allowed' => 'getIsManualEntryAllowed',
        'market_code' => 'getMarketCode',
        'prompt_amount_confirmation' => 'getPromptAmountConfirmation',
        'prompt_manual_entry' => 'getPromptManualEntry',
        'prompt_signature' => 'getPromptSignature',
        'signature_threshold_amount' => 'getSignatureThresholdAmount',
        'tip_options' => 'getTipOptions'
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
        $this->container['allow_debit'] = $data['allow_debit'] ?? null;
        $this->container['allow_partial_approvals'] = $data['allow_partial_approvals'] ?? null;
        $this->container['bypass_device_on_capture'] = $data['bypass_device_on_capture'] ?? null;
        $this->container['cashback_options'] = $data['cashback_options'] ?? null;
        $this->container['check_for_duplicate_transactions'] = $data['check_for_duplicate_transactions'] ?? null;
        $this->container['is_cash_back_allowed'] = $data['is_cash_back_allowed'] ?? null;
        $this->container['is_gift_supported'] = $data['is_gift_supported'] ?? null;
        $this->container['is_manual_entry_allowed'] = $data['is_manual_entry_allowed'] ?? null;
        $this->container['market_code'] = $data['market_code'] ?? null;
        $this->container['prompt_amount_confirmation'] = $data['prompt_amount_confirmation'] ?? null;
        $this->container['prompt_manual_entry'] = $data['prompt_manual_entry'] ?? null;
        $this->container['prompt_signature'] = $data['prompt_signature'] ?? null;
        $this->container['signature_threshold_amount'] = $data['signature_threshold_amount'] ?? null;
        $this->container['tip_options'] = $data['tip_options'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets allow_debit
     *
     * @return bool|null
     */
    public function getAllowDebit()
    {
        return $this->container['allow_debit'];
    }

    /**
     * Sets allow_debit
     *
     * @param bool|null $allow_debit Allow transaction to be processed on Debit rails. If `false`, Debit card transactions will be processed on Credit rails.
     *
     * @return self
     */
    public function setAllowDebit($allow_debit, $deserialize = false)
    {
        $this->container['allow_debit'] = $allow_debit;

        return $this;
    }

    /**
     * Gets allow_partial_approvals
     *
     * @return bool|null
     */
    public function getAllowPartialApprovals()
    {
        return $this->container['allow_partial_approvals'];
    }

    /**
     * Sets allow_partial_approvals
     *
     * @param bool|null $allow_partial_approvals Determines if a transaction can be partially approved (Usually **null**).
     *
     * @return self
     */
    public function setAllowPartialApprovals($allow_partial_approvals, $deserialize = false)
    {
        $this->container['allow_partial_approvals'] = $allow_partial_approvals;

        return $this;
    }

    /**
     * Gets bypass_device_on_capture
     *
     * @return bool|null
     */
    public function getBypassDeviceOnCapture()
    {
        return $this->container['bypass_device_on_capture'];
    }

    /**
     * Sets bypass_device_on_capture
     *
     * @param bool|null $bypass_device_on_capture Sets whether the device will be used to capture `Authorizations`. The device is required to be connected if `bypass_device_on_capture` is set to false. (defaults to true).
     *
     * @return self
     */
    public function setBypassDeviceOnCapture($bypass_device_on_capture, $deserialize = false)
    {
        $this->container['bypass_device_on_capture'] = $bypass_device_on_capture;

        return $this;
    }

    /**
     * Gets cashback_options
     *
     * @return \Finix\Model\ConfigurationDetailsCashbackOptions|null
     */
    public function getCashbackOptions()
    {
        return $this->container['cashback_options'];
    }

    /**
     * Sets cashback_options
     *
     * @param \Finix\Model\ConfigurationDetailsCashbackOptions|null $cashback_options cashback_options
     *
     * @return self
     */
    public function setCashbackOptions($cashback_options, $deserialize = false)
    {
        $this->container['cashback_options'] = $cashback_options;

        return $this;
    }

    /**
     * Gets check_for_duplicate_transactions
     *
     * @return bool|null
     */
    public function getCheckForDuplicateTransactions()
    {
        return $this->container['check_for_duplicate_transactions'];
    }

    /**
     * Sets check_for_duplicate_transactions
     *
     * @param bool|null $check_for_duplicate_transactions Sets whether the device will check for duplicate transactions.
     *
     * @return self
     */
    public function setCheckForDuplicateTransactions($check_for_duplicate_transactions, $deserialize = false)
    {
        $this->container['check_for_duplicate_transactions'] = $check_for_duplicate_transactions;

        return $this;
    }

    /**
     * Gets is_cash_back_allowed
     *
     * @return bool|null
     */
    public function getIsCashBackAllowed()
    {
        return $this->container['is_cash_back_allowed'];
    }

    /**
     * Sets is_cash_back_allowed
     *
     * @param bool|null $is_cash_back_allowed Sets whether the device will allow cash back.
     *
     * @return self
     */
    public function setIsCashBackAllowed($is_cash_back_allowed, $deserialize = false)
    {
        $this->container['is_cash_back_allowed'] = $is_cash_back_allowed;

        return $this;
    }

    /**
     * Gets is_gift_supported
     *
     * @return string|null
     */
    public function getIsGiftSupported()
    {
        return $this->container['is_gift_supported'];
    }

    /**
     * Sets is_gift_supported
     *
     * @param string|null $is_gift_supported Sets whether the device will allow gifting funds.
     *
     * @return self
     */
    public function setIsGiftSupported($is_gift_supported, $deserialize = false)
    {
        $this->container['is_gift_supported'] = $is_gift_supported;

        return $this;
    }

    /**
     * Gets is_manual_entry_allowed
     *
     * @return bool|null
     */
    public function getIsManualEntryAllowed()
    {
        return $this->container['is_manual_entry_allowed'];
    }

    /**
     * Sets is_manual_entry_allowed
     *
     * @param bool|null $is_manual_entry_allowed Sets whether the device will process payment details entered manually.
     *
     * @return self
     */
    public function setIsManualEntryAllowed($is_manual_entry_allowed, $deserialize = false)
    {
        $this->container['is_manual_entry_allowed'] = $is_manual_entry_allowed;

        return $this;
    }

    /**
     * Gets market_code
     *
     * @return string|null
     */
    public function getMarketCode()
    {
        return $this->container['market_code'];
    }

    /**
     * Sets market_code
     *
     * @param string|null $market_code Used by the processor to handle the `transfer`. Usually **null**.
     *
     * @return self
     */
    public function setMarketCode($market_code, $deserialize = false)
    {
        $this->container['market_code'] = $market_code;

        return $this;
    }

    /**
     * Gets prompt_amount_confirmation
     *
     * @return bool|null
     */
    public function getPromptAmountConfirmation()
    {
        return $this->container['prompt_amount_confirmation'];
    }

    /**
     * Sets prompt_amount_confirmation
     *
     * @param bool|null $prompt_amount_confirmation Sets if the card holder needs to confirm the amount they will pay (defaults to **true**).
     *
     * @return self
     */
    public function setPromptAmountConfirmation($prompt_amount_confirmation, $deserialize = false)
    {
        $this->container['prompt_amount_confirmation'] = $prompt_amount_confirmation;

        return $this;
    }

    /**
     * Gets prompt_manual_entry
     *
     * @return bool|null
     */
    public function getPromptManualEntry()
    {
        return $this->container['prompt_manual_entry'];
    }

    /**
     * Sets prompt_manual_entry
     *
     * @param bool|null $prompt_manual_entry Sets if the device defaults to manual entry as the default card input method. (defaults to **false**).
     *
     * @return self
     */
    public function setPromptManualEntry($prompt_manual_entry, $deserialize = false)
    {
        $this->container['prompt_manual_entry'] = $prompt_manual_entry;

        return $this;
    }

    /**
     * Gets prompt_signature
     *
     * @return string|null
     */
    public function getPromptSignature()
    {
        return $this->container['prompt_signature'];
    }

    /**
     * Sets prompt_signature
     *
     * @param string|null $prompt_signature Sets if the device will prompt the card holder for a signature by default. Available values include:<ul><li><strong>ALWAYS</strong><li><strong>NEVER</strong><li><strong>AMOUNT</strong>: Used in conjunction with `signature_threshold_amount` so when the threshold is reached the signature form appears on the device.
     *
     * @return self
     */
    public function setPromptSignature($prompt_signature, $deserialize = false)
    {
        $this->container['prompt_signature'] = $prompt_signature;

        return $this;
    }

    /**
     * Gets signature_threshold_amount
     *
     * @return int|null
     */
    public function getSignatureThresholdAmount()
    {
        return $this->container['signature_threshold_amount'];
    }

    /**
     * Sets signature_threshold_amount
     *
     * @param int|null $signature_threshold_amount The threshold to prompt a signature when `prompt_signature` is set to **AMOUNT** (defaults to 0).
     *
     * @return self
     */
    public function setSignatureThresholdAmount($signature_threshold_amount, $deserialize = false)
    {
        $this->container['signature_threshold_amount'] = $signature_threshold_amount;

        return $this;
    }

    /**
     * Gets tip_options
     *
     * @return \Finix\Model\ConfigurationDetailsTipOptions|null
     */
    public function getTipOptions()
    {
        return $this->container['tip_options'];
    }

    /**
     * Sets tip_options
     *
     * @param \Finix\Model\ConfigurationDetailsTipOptions|null $tip_options tip_options
     *
     * @return self
     */
    public function setTipOptions($tip_options, $deserialize = false)
    {
        $this->container['tip_options'] = $tip_options;

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



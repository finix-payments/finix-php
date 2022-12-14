<?php
/**
 * DeviceConfigDetails
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
 * DeviceConfigDetails Class Doc Comment
 *
 * @category Class
 * @description Information used to configure how the &#x60;Device&#x60; handles transactions.
 * @package  Finix
 * @author   Finix
 * @link     https://finix.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DeviceConfigDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeviceConfigDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_debit' => 'bool',
        'bypass_device_on_capture' => 'bool',
        'check_for_duplicate_transactions' => 'bool',
        'prompt_amount_confirmation' => 'bool',
        'prompt_manual_entry' => 'bool',
        'prompt_signature' => 'string',
        'signature_threshold_amount' => 'int'
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
        'bypass_device_on_capture' => null,
        'check_for_duplicate_transactions' => null,
        'prompt_amount_confirmation' => null,
        'prompt_manual_entry' => null,
        'prompt_signature' => null,
        'signature_threshold_amount' => 'int64'
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
        'bypass_device_on_capture' => 'bypass_device_on_capture',
        'check_for_duplicate_transactions' => 'check_for_duplicate_transactions',
        'prompt_amount_confirmation' => 'prompt_amount_confirmation',
        'prompt_manual_entry' => 'prompt_manual_entry',
        'prompt_signature' => 'prompt_signature',
        'signature_threshold_amount' => 'signature_threshold_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_debit' => 'setAllowDebit',
        'bypass_device_on_capture' => 'setBypassDeviceOnCapture',
        'check_for_duplicate_transactions' => 'setCheckForDuplicateTransactions',
        'prompt_amount_confirmation' => 'setPromptAmountConfirmation',
        'prompt_manual_entry' => 'setPromptManualEntry',
        'prompt_signature' => 'setPromptSignature',
        'signature_threshold_amount' => 'setSignatureThresholdAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_debit' => 'getAllowDebit',
        'bypass_device_on_capture' => 'getBypassDeviceOnCapture',
        'check_for_duplicate_transactions' => 'getCheckForDuplicateTransactions',
        'prompt_amount_confirmation' => 'getPromptAmountConfirmation',
        'prompt_manual_entry' => 'getPromptManualEntry',
        'prompt_signature' => 'getPromptSignature',
        'signature_threshold_amount' => 'getSignatureThresholdAmount'
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
        $this->container['bypass_device_on_capture'] = $data['bypass_device_on_capture'] ?? null;
        $this->container['check_for_duplicate_transactions'] = $data['check_for_duplicate_transactions'] ?? null;
        $this->container['prompt_amount_confirmation'] = $data['prompt_amount_confirmation'] ?? null;
        $this->container['prompt_manual_entry'] = $data['prompt_manual_entry'] ?? null;
        $this->container['prompt_signature'] = $data['prompt_signature'] ?? null;
        $this->container['signature_threshold_amount'] = $data['signature_threshold_amount'] ?? null;
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
     * @param bool|null $allow_debit Allow transaction to be processed on Debit rails. If **false**, Debit card transactions will be processed on Credit rails.
     *
     * @return self
     */
    public function setAllowDebit($allow_debit, $deserialize = false)
    {
        $this->container['allow_debit'] = $allow_debit;

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
     * @param bool|null $bypass_device_on_capture Sets whether or not the device will be used to capture transactions. This field must be set to **true** (defaults to **false**).
     *
     * @return self
     */
    public function setBypassDeviceOnCapture($bypass_device_on_capture, $deserialize = false)
    {
        $this->container['bypass_device_on_capture'] = $bypass_device_on_capture;

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
     * @param bool|null $check_for_duplicate_transactions Sets whether the `Device` will check for duplicate transactions.
     *
     * @return self
     */
    public function setCheckForDuplicateTransactions($check_for_duplicate_transactions, $deserialize = false)
    {
        $this->container['check_for_duplicate_transactions'] = $check_for_duplicate_transactions;

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
     * @param string|null $prompt_signature Sets if the device will prompt the card holder for a signature by default. Available values include: <ul><li><strong>ALWAYS</strong><li><strong>NEVER</strong><li><strong>AMOUNT</strong>: Used in conjunction with `signature_threshold_amount` so when the threshold is reached the signature form appears on the device.
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


